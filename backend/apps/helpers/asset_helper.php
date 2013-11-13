<?php

if ( ! function_exists("theme_config"))
{
	function theme_config($key)
	{
		$CI =& get_instance();
		$config = $CI->config->item("theme");
		return $config[$key]; 
	}
}

if ( ! function_exists("img_url"))
{
	function img_url($path)
	{
		$theme_config = config_item("theme");
		return $theme_config["url"] . "img/$path";
	}
}

if ( ! function_exists("js_url"))
{
	function js_url($path)
	{
		$theme_config = config_item("theme");
		return $theme_config["url"] . "js/$path";
	}
}

if ( ! function_exists("css_url"))
{
	function css_url($path)
	{
		$theme_config = config_item("theme");
		return $theme_config["url"] . "css/$path";	
	}
}