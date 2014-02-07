<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Language helper
 * Author: jasni@mediacliq.com
 * Date: 2011-11-15
 * Note: Please make sure $config['enable_query_strings'] = FALSE;
 *
 */	
if ( ! defined('default_language'))
define('default_language','en');

if ( ! function_exists('lang_load'))
{
	function lang_load($lang='')
	{
		$CI =& get_instance();
		
		if (!$lang){
			$lang = lang_value();
		}
		if (!in_array($lang,array('en','ms')))
		$lang=default_language;
		
		$CI->session->set_userdata('lang', $lang);
		$language = (strcasecmp($lang,'en') == 0) ? 'english' : 'malay';
		$CI->lang->load($lang, $language);
	}
}

if ( ! function_exists('lang_value'))
{
	function lang_value()
	{
		$CI =& get_instance();
		
		$lang = '';
		if ($CI->session->userdata('lang'))
		$lang = $CI->session->userdata('lang');
		
		return (($lang) ? $lang : default_language);
	}
}

if ( ! function_exists('lang_label'))
{
	function lang_label()
	{
		$lang = lang_value();
		
		return lang_label_text($lang);
	}
}

if ( ! function_exists('lang_value_flip'))
{
	function lang_value_flip()
	{
		$lang = lang_value();
		
		return ((strcasecmp($lang,'en') == 0) ? 'ms' : 'en');
	}
}

if ( ! function_exists('lang_label_flip'))
{
	function lang_label_flip()
	{
		$lang = lang_value_flip();
		
		return lang_label_text($lang);
	}
}

if ( ! function_exists('lang_label_text'))
{
	function lang_label_text($lang)
	{	
		return ((strcasecmp($lang,'en') == 0) ? 'English' : 'Malay');
	}
}

if ( ! function_exists('lang_url'))
{
	function lang_url()
	{
		$CI =& get_instance();
		
		$lang = lang_value();
		$new_lang = lang_value_flip();
		$base_url = base_url();
		$current_url = current_url();
		
		$current_url = trim($current_url,'/');
		if ($lang){
			if (preg_match('/\/'.$lang.'(\/)?/i',$current_url)){
				$url = preg_replace('/\/'.$lang.'(\/)?/i','/'.$new_lang.'/',$current_url,1);
			}else{
				$segs = $CI->uri->segment_array();
				
				if (count($segs)){
					$url = $base_url . 'index.php/';
					$found  = false;
					$url .= join('/', $segs) . '/' . $new_lang;
				}else{
					$url = $current_url . '/home/index/' . $new_lang;
				}
			}
		}else{
			$url = $current_url . '/home/index/' . $new_lang;
		}
		$url = trim($url,'/');
		
		return $url;
	}
}

/* End of file lang_helper.php */
/* Location: ./application/helpers/lang_helper.php */