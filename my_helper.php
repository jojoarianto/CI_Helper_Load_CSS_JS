<?php 
	
/*
* Joko Irianto
*
*/

if (!function_exists('loadJsPreHeader')) {
	/*
	* function to print <script src="(( param ))"></script>
	*
	* @param 
	* return string script to echo of javascript src
	*/
	function loadJsPreHeader()
	{
	    $obj =& get_instance();
	    if (isset($obj->js_to_load)):
	        foreach ($obj->js_to_load as $url):
	            echo '<script src="'.$url. '"></script>';
	        endforeach;
	    endif;
	}
}

if (!function_exists('setJsPreHeader')) {
	/*
	* function to set into var <script src="(( param ))"></script>
	*
	* @param url
	*/
	function setJsPreHeader($url)
	{
		$obj =& get_instance();
		if (isset($obj->js_to_load))
			array_push($obj->js_to_load, $url);
		else
			$obj->js_to_load = array($url);
		return;
	}
}

if (!function_exists('loadCssPreHeader')) {
	/*
	* function to print <link href="(( param ))" rel="stylesheet">
	*
	* @param 
	* return string link to echo of css href
	*/
	function loadCssPreHeader()
	{
	    $obj =& get_instance();
	    if (isset($obj->css_to_load)):
	        foreach ($obj->css_to_load as $url):
	            echo '<link href="'.$url. '" rel="stylesheet">';
	        endforeach;
	    endif;
	}
}

if (!function_exists('setCssPreHeader')) {
	/*
	* function to set into header <link href="(( param ))" rel="stylesheet">
	*
	* @param url
	*/
	function setCssPreHeader($url)
	{
		$obj =& get_instance();
		if (isset($obj->css_to_load))
			array_push($obj->css_to_load, $url);
		else
			$obj->css_to_load = array($url);
		return;
	}
}

?>