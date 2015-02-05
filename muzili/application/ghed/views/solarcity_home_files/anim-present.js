(function ($, global) {



    function fireSlideEvents(slideId){

        if(slideId === 2){
            _gaq.push(['_trackEvent', 'Home Page Animation', 'Lead form completions', 'Zip code field completed']);
        }

        if(slideId === 3){
            _gaq.push(['_trackEvent', 'Home Page Animation', 'Lead form completions', 'Name fields completed']);
        }

        if(slideId === 4){
            _gaq.push(['_trackEvent', 'Home Page Animation', 'Lead form completions', 'Email and phone fields completed']);
            window.optimizely.push(["trackEvent", "form_completed"]);
        }

    }


    function bindInputAnalytics(){
        $('input[name="zip"]').one('keydown', function() {
            _gaq.push(['_trackEvent','Home Page Animation','Input Field Completions','ZIP']);
            window.optimizely.push(["trackEvent", "zipfield_entered"]);
        });
        $('input[name="first_name"]').one('keydown', function() {
            _gaq.push(['_trackEvent','Home Page Animation','Input Field Completions','first name']);
            window.optimizely.push(["trackEvent", "firstname_entered"]);
        });
        $('input[name="last_name"]').one('keydown', function() {
            _gaq.push(['_trackEvent','Home Page Animation','Input Field Completions','last name']);
            window.optimizely.push(["trackEvent", "lastname_entered"]);
        });
        $('input[name="phone"]').one('keydown', function() {
            _gaq.push(['_trackEvent','Home Page Animation','Input Field Completions','Phone']);
            window.optimizely.push(["trackEvent", "phone_entered"]);
        });
        $('input[name="email"]').one('keydown', function() {
            _gaq.push(['_trackEvent','Home Page Animation','Input Field Completions','Email']);
            window.optimizely.push(["trackEvent", "email_entered"]);
        });
    }



    function AnimPresent(el, startImmediately){

        this.el = el;
        this.currentSlide = 0;
        this.startImmediately = startImmediately;

        this.formData = {};

        this.init();

    }





    AnimPresent.prototype = {


        init: function(){

            var _this = this;

            this.$el = $(this.el);
            this.$slides = this.$el.find('.ap-slide');
            this.$video = this.$el.find('.ap-video');

            if(this.$slides.length < 1) return;


            this.$el.find('input', 'textarea').placeholder();


            this._generateAnimArray();
            this._bindEvents();

            this.usingVideo = (this.$video.length > 0 && this._shouldUseVideo());
            if(this.usingVideo){
                this._prepareVideo();
                this.$el.addClass('using-video');
                this.$el.addClass('loading');
                $(this.player).css('visibility', 'hidden');
                this.player.oncanplaythrough = function(){
                    if(_this.playing === true) return;
                    _this.playVideoSlide(0);
                    _this.$el.removeClass('loading');
                    $(_this.player).css('visibility', 'visible');
                }
            } else {
                if($(window).width() > 700){
                    this.$el.addClass('using-big-gif');
                }
                if(this.$video.length > 0) this.$video.remove();
                this._preloadSlide(0);
                if(this.startImmediately) this.playSlide(0);
            }



        },


        //for better performance and cleanliness, might as well have this stuff cached and out of the way.
        _generateAnimArray: function(){

            var _this = this;
            this.animArray = [];


            this.$slides.each(function(){

                var $slide = $(this),
                    curSlideId = $slide.index();

                var array = _this.animArray[curSlideId] = []; //init this slide's array

                $slide.find('.ap-animation').each(function(){ //populate this slide's array
                    var $anim = $(this);
                    var src;
                    if($(window).width() > 700){
                        src = $anim.attr('tab-src');
                    }
                    else src = $anim.attr('src');
                    array.push({
                        src: src,
                        type: $anim.attr('anim-type'),
                        time: parseInt($anim.attr('anim-time') || 0, 10),
                        start: parseInt($anim.attr('anim-start') || 0, 10),
                        gifTime: parseInt($anim.attr('gif-time') || 0, 10)
                    });

                    $anim.remove();
                });

            });


        },


        _prepareVideo:function(){

            var player = this.$video[0];

            player.controls = false;
            player.preload = "auto";
            player.load();

            this.player = player;

        },


        _bindEvents: function(){

            var _this = this;


            $('[next-slide]').click(function(e){
                _this._evt_clickNext(e);
            });

            $('[finish]').click(function(e){
                var isValid = true;
                _this.$slides.eq(_this.currentSlide).find('input').each(function(){
                    var data = $(this).attr('value');
                    var name = $(this).attr('name');
                    var validate = $(this).attr('validate');
                    if(validate && _this._validate(data, validate) !== 'valid'){
                        $(this).addClass('invalid');
                        isValid = false;
                    } else {
                        $(this).removeClass('invalid');
                    }
                    _this.formData[name] = data;
                    if($(this).attr('name').toLowerCase() === 'zip') isZip = true;
                });
                if(isValid) _this._submitData($(e.currentTarget).attr('data-campaign'));
            });

            $('input').click(function(e){
                _this._evt_clickInput(e);
            });

            $('input').keydown(function(e){
                _this._evt_inputType(e);
            });

            $('#sitMsg img').click(function(){
                $('html,body').animate({scrollTop:570}, 1000);
            });


            bindInputAnalytics();

        },


        _evt_inputType: function(e){

            var name = $(e.currentTarget).attr('name');
            var key = e.keyCode ? e.keyCode : e.which;
            key = parseInt(key, 10);

            if(key == 13){
                this._evt_clickNext();
                return;
            }

            var isNavKey = (key == 8 || key == 46 || key == 37 || key == 39);
            var isNumber = ((key >= 48 && key <= 57) || (key >= 96 && key <= 105));

            switch(name){

                case 'zip':
                    if (!isNumber && !isNavKey) e.preventDefault();
                    if($(e.currentTarget).val().length >= 5 && !isNavKey) e.preventDefault();
                    break;

                case 'phone':
                    var isPhoneSpecialChar = (key == 189 || key == 173 || key == 109);
                    if ( !isNumber && !isNavKey && !isPhoneSpecialChar ) e.preventDefault();
                    break;

            }


        },


        _evt_clickNext: function(){

            if(this.stopNext) return;

            var _this = this;

            this.stopNext = true;
            setTimeout(function(){_this.stopNext = false}, 500);

            var isZip = false;
            var isValid = true;

            this.$slides.eq(this.currentSlide).find('input').each(function(){
                var data = $(this).attr('value');
                var name = $(this).attr('name');
                var validate = $(this).attr('validate');

                if(validate && _this._validate(data, validate) !== 'valid'){
                    $(this).addClass('invalid');
                    isValid = false;
                } else {
                    $(this).removeClass('invalid');
                }

                _this.formData[name] = data;

                if($(this).attr('name').toLowerCase() === 'zip') isZip = true;
            });

            if(!isValid) return false;

            if(isZip){
                $.ajax({
                    type: 'GET',
                    url: '/api/zipcode/'+_this.formData.zip,
                    error: function() {
                        _this.playSlide(5);
                    },
                    success: function(data) {
                        if(data === 'yes') {
                            if (_this.currentSlide < _this.$slides.length - 1) {
                                _this.playSlide(_this.currentSlide + 1);
                            }
                        } else {
                            _this.playSlide(5);
                        }
                    }
                });

                //autofill location
                $.ajax({
                    type: 'GET',
                    url: 'http://ZiptasticAPI.com/' + encodeURIComponent(_this.formData.zip),
                    dataType: 'json',
                    success: function (data) {
                        if (data.state) {
                            _this.formData.city = data.city.replace(/\w\S*/g, function (txt) {
                                return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
                            });
                            _this.formData.state = data.state;
                        }
                    }
                });

            } else {
                if(this.currentSlide < this.$slides.length - 1) {
                    this.playSlide(this.currentSlide + 1);
                }
            }

            return true;

        },





        _evt_clickInput: function(e){
            //$(e.currentTarget).attr('value', '');
        },




        _preloadSlide: function(slideId){

            if(this.usingVideo) return;  //we dont need to preload slides when a video is being used.

            //make sure we are working with an index:
            if(typeof slideId === 'string') slideId = this.$slides.filter('[slide-id="'+ slideId +'"]').index();
            if(typeof slideId !== 'number') return;

            var $thisSlide = this.$slides.eq(slideId),
                anims = this.animArray[slideId],
                _this = this;

            if($thisSlide.length < 1) return;

            this.preloadedSlides = this.preloadedSlides || [];
            function preloadImages(images, callback) {

                var count = images.length;

                if(count === 0) {
                    callback();
                }

                var loaded = 0;

                $(images).each(function() {
                    $('<img>').attr('src', this).load(function() {
                        loaded++;
                        if (loaded === count) {
                            callback();
                        }
                    });
                });

            }

            var animImgs = [];

            for (var i = 0; i < anims.length; i++) {
                animImgs.push(anims[i].src);
            }

            preloadImages(animImgs, function(){
                _this.preloadedSlides.push(slideId);
            });

        },



        _shouldUseVideo: function(){  //test to see if we should be using video or not (desktop or mobile)


            function isIE () {
                var myNav = navigator.userAgent.toLowerCase();
                return (myNav.indexOf('msie') != -1) ? parseInt(myNav.split('msie')[1]) : false;
            }

            var aniDeviceAgent = navigator.userAgent;

            if (aniDeviceAgent.indexOf('iPhone') > -1) {
                return false;
            } else if (aniDeviceAgent.indexOf('iPad') > -1) {
                return false;
            } else if (aniDeviceAgent.indexOf('Android') > -1) {
                return false;
            } else if (isIE() && isIE() <= 9){
                return false;
            } else {
                return true
            };




            //return this.$el.hasClass('--video');

        },




        _validate: function(value, type){

            var regEx = {
                name: {test: /^[A-Za-z0-9 ]{2,20}$/, message: 'Invalid Name'},
                email: {test: /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i, message: 'Invalid Email'},
                zip: {test: /(^\d{5}$)|(^\d{5}-\d{4}$)/, message: 'Invalid Zip'},
                phone: {test: /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/, message: 'Invalid Phone Number'}
            };

            if(regEx[type].test.test(value)) return 'valid';
            else return regEx[type].message;

        },


        _submitData: function(cId){

            var campaign = cId || "70114000000ueHo";

            //get location data

            var _this = this;


            var $webToLeadForm = $(
                    '<form method="POST" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" style="display:none; width:0; height:0;">' +
                    '<input type="hidden" name="oid" value="00D300000006bL2">' +
                    '<input type="hidden" name="retURL" value="http://www.solarcity.com/residential/free-solar-quote/thank-you">' +
                    '<input type="hidden" name="lead_source" value="Online Ad">' +
                    '<input type="hidden" name="Campaign_ID" id="Campaign_ID" value="'+ campaign +'">' +
                    '</form>'
            ).appendTo(_this.$el);

            for(var key in _this.formData){
                if(_this.formData.hasOwnProperty(key)) {
                    $($webToLeadForm).append('<input type="text" name="' + key + '" value="' + _this.formData[key] + '">');
                }
            }

            var dataArray = $webToLeadForm.serializeArray();

            dataObj = {};
            $(dataArray).each(function(i, field){
                dataObj[field.name] = field.value;
            });

            dataObj['chronos_api_auth'] = Drupal.settings.chronos_api_auth;
            dataObj['action'] = encodeURIComponent($webToLeadForm.attr('action'));


            $.ajax({
                type: $webToLeadForm.attr('method'),
                url: '/api/form_post/animBannerLead',
                data: dataObj,
                dataType: 'json'
            });

        },






        playSlide: function(slideId){


            if(this.usingVideo){
                this.playVideoSlide(slideId);
                return;
            }


            //make sure we are working with an index:
            if(typeof slideId === 'string') slideId = this.$slides.filter('[slide-id="'+ slideId +'"]').index();
            if(typeof slideId !== 'number') return;

            var _this = this;

            var checkplay = setInterval(function(){ //check to see if this slide is loaded and ready to play until it is

                var isLoaded = false;
                for(var i = 0; i < _this.preloadedSlides.length; i++){
                    if(_this.preloadedSlides[i] === slideId){
                        isLoaded = true;
                        break;
                    }
                }
                if(isLoaded){
                    clearInterval(checkplay);
                    _this.$el.removeClass('loading');
                    doPlay(slideId);
                } else {
                    _this.$el.addClass('loading');
                }

            }, 250);

            var doPlay = function(id){  //play the slide's animations

                var $thisSlide = _this.$slides.eq(id),
                    anims = _this.animArray[id];

                _this.$slides.hide();
                $thisSlide.show();

                //handle the content/input display:
                _this.$slides.find('.ap-content').hide().removeClass('show');

                $thisSlide.find('[insert-data]').each(function(){
                    $(this).text(_this.formData[$(this).attr('insert-data')]);
                });

                $thisSlide.find('.ap-content').each(function(){
                    var $content = $(this);
                    if($content.attr('show-delay')){
                        setTimeout(function(){
                            $content.show().addClass('show');
                        }, parseInt($content.attr('show-delay'), 10));
                    } else {
                        $content.show().addClass('show');
                    }
                });

                if(slideId == 2 || slideId == 3){
                    $(".anim-present.using-video").css( "padding-top", "160px" );
                }
                else {
                    $(".anim-present.using-video").css( "padding-top", "80px" );
                }

                fireSlideEvents(slideId);



                //recursively play through animations
                function playAnimations() {

                    if(anims.length < 1) return;

                    var anim = anims.shift(); //grab first array animation
                    _this.$el.css('background-image', 'url(' + anim.src + ')');

                    if(anim.gifTime){
                        setTimeout(function(){
                            playAnimations();
                        }, anim.gifTime);
                    }

                }

                window.scrollTo(0, 0);
                playAnimations();
                _this.currentSlide = id;
                _this._preloadSlide(slideId+1);
                //If we're on the zip slide we should preload slide 5 as well incase their zip isnt in service.
                if(slideId === 1) _this._preloadSlide(5);

                if($thisSlide.attr('auto-next')) setTimeout(function(){_this._evt_clickNext()}, parseInt($thisSlide.attr('auto-next'), 10));

            }

        },




        playVideoSlide: function(slideId) {
            clearInterval(this.looper);

            //make sure we are working with an index:
            if (typeof slideId === 'string') slideId = this.$slides.filter('[slide-id="' + slideId + '"]').index();
            if (typeof slideId !== 'number') return;

            var _this = this;

            var $thisSlide = _this.$slides.eq(slideId),
                anims = _this.animArray[slideId];

            _this.$slides.hide();
            $thisSlide.show();

            //handle the content/input display:
            _this.$slides.find('.ap-content').hide().removeClass('show');

            $thisSlide.find('[insert-data]').each(function(){
                $(this).text(_this.formData[$(this).attr('insert-data')]);
            });

            if(slideId == 2 || slideId == 3){
                $(".anim-present.using-video").css( "padding-top", "160px" );
            }
            else {
                $(".anim-present.using-video").css( "padding-top", "80px" );
            }

            fireSlideEvents(slideId);

            $thisSlide.find('.ap-content').each(function(){
                var $content = $(this);
                if($content.attr('show-delay')){
                    setTimeout(function(){
                        $thisSlide.addClass('show');
                        $content.show().addClass('show');
                    }, parseInt($content.attr('show-delay'), 10));
                } else {
                    $thisSlide.addClass('show');
                    $content.show().addClass('show');
                }
            });

            //recursively play through animations
            function playAnimations() {
                if (anims.length < 1) return;
                var anim = anims.shift(); //grab first array animation

                _this.player.currentTime = (anim.start / 1000);
                _this.player.play();

                if (anim.type === "transition") {
                    setTimeout(function() {
                        playAnimations();
                    }, anim.time);
                } else {
                    _this.looper = setInterval(function(){
                        _this.player.currentTime = (anim.start / 1000)+0.01;
                    }, anim.time);
                }
            }

            playAnimations();
            _this.currentSlide = slideId;
            _this.playing = true;

            if($thisSlide.attr('auto-next')) setTimeout(function(){_this._evt_clickNext()}, parseInt($thisSlide.attr('auto-next'), 10));


        }


    };


    $(document).ready(function(){
        window['optimizely'] = window['optimizely'] || [];
        global.apInstances = [];
        $('.anim-present').each(function(){
            global.apInstances.push(new AnimPresent($(this), true));
        });
    });

})(jQuery, window);
