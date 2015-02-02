<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_css_path'))
{
	function get_css_path()
	{
		return '/'.APPPATH.'css/';
	}
}

if ( ! function_exists('get_img_path'))
{
	function get_img_path()
	{
		return '/'.APPPATH.'img/';
	}
}

if ( ! function_exists('get_js_path'))
{
	function get_js_path()
	{
		return '/'.APPPATH.'js/';
	}
}
