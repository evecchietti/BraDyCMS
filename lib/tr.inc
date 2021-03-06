<?php
/**
 * @author			Julian Bogdani <jbogdani@gmail.com>
 * @copyright		BraDyUS. Communicating Cultural Heritage, http://bradypus.net 2007-2013
 * @license			MIT, See LICENSE file
 * @since			Dec 22, 2012
 */

class tr
{
	/**
	 * 
	 * Returns lang variable using:
	 * 1) $_SESSION['pref']['lang']
	 * 2) system default language
	 * 3) browser default language
	 * 4) en
	 */
	public static function load_file($get_lang = false, $silencemode = false)
	{
		require_once './locale/en.php';
    
    if (file_exists(SITE_DIR . 'locale/en.php'))
    {
      require_once SITE_DIR . 'locale/en.php';
    }
    
		$en = $_lang;
		
    // If silence mode is on (no site is defined yet) english is the only available language!
    if ($silencemode)
    {
      // do nothing
    }
		else if ($get_lang && $get_lang == cfg::get('sys_lang'))
		{
			$_SESSION['adm_lang'] = $get_lang;
		}
		else if ($get_lang AND cfg::get('languages') )
		{
			foreach (cfg::get('languages') as $ll)
			{
				if ($ll['id'] == $get_lang )
				{
					$_SESSION['adm_lang'] = $get_lang;
				}
			}
		}
		
    /**
     * Load Admin language
     */
		if (!$_SESSION['adm_lang'])
		{
      // If silence mode is on (no site is defined yet) english is the only available language!
			$_SESSION['adm_lang'] = $silencemode ? 'en' : cfg::get('sys_lang');
		}
		
		if (file_exists('locale/' . $_SESSION['adm_lang'] . '.php'))
		{
			require_once 'locale/' . $_SESSION['adm_lang'] . '.php';
		}
		
    if (file_exists(SITE_DIR . 'locale/' . $_SESSION['adm_lang'] . '.php'))
    {
      require_once SITE_DIR . 'locale/' . $_SESSION['adm_lang'] . '.php';
    }
    
		
		
		$_SESSION['language_strings'] = array_merge($en, $_lang);
		
	}
	
	/**
	 * 
	 * Returns formatted string
	 * @param string $string	input string
	 * @param mixed $args		array of arguments for formatting
	 * @param boolean $escape	boolean escape
	 */
	public static function sget($string, $args, $escape = false)
	{
		if (!is_array($args))
		{
			$args = array($args);
		}
		$ret = vsprintf(self::get($string), $args);
		
		return $escape ? str_replace("'", "\'", $ret) : $ret;
	}
	
	/**
	 * 
	 * Translates $string
	 * @param string $string string to translate
	 * @param boolean $escape boolean controle if string mus be escaped or not
	 */
	public static function get($string, $escape = false)
	{
		$lang = $_SESSION['language_strings'];
	
		$ret = $lang[$string] ? $lang[$string] : $string;
	
		return $escape ? str_replace("'", "\'", $ret) : $ret;
	}
	
	/**
	 * 
	 * Returns current language as json (is_string is false) or as javascript variable (is_string = true)
	 * @param boolean $is_string
	 */
	public static function lang2json($is_string = false)
	{
		$lang = $_SESSION['language_strings'];
		
		if ($is_string)
		{
			echo 'var lang = ' . json_encode($lang) . ';';
		}
		else
		{
			header('Content-type: application/json');
			return json_encode($lang);
		} 
	}
	
	/**
	 * 
	 * Uses self::get and echoes translated string
	 * @param string $string
	 * @param boolean $escape boolean controle if string mus be escaped or not
	 */
	public static function show($string, $escape = false)
	{
		echo self::get($string, $escape);
	}
	
}