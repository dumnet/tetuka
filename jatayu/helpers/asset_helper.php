<?php

if ( ! function_exists("asset_module"))
{
	function asset_module($path)
	{
		$CI     =& get_instance();
		$module = $CI->router->fetch_module();
		return base_url() . $module . "/assets/" . ltrim($path, "/");
	}
}

if ( ! function_exists("js_module"))
{
	function js_module($path)
	{
		if (substr($path, -3) != ".js")
			$path .= ".js";

		$path = "js/" . ltrim($path, "/");

		return asset_module($path);
	}
}

if ( ! function_exists("css_module"))
{
	function css_module($path)
	{
		if (substr($path, -4) != ".css")
			$path .= ".css";

		$path = "css/" . ltrim($path, "/");
		
		return asset_module($path);
	}
}

if ( ! function_exists("img_module"))
{
	function img_module($path)
	{
		$path = "img/" . ltrim($path, "/");
		return asset_module($path);
	}
}