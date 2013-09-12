<?php
/**
 * @author			Julian Bogdani <jbogdani@gmail.com>
 * @copyright		BraDypUS 2007-2012
 * @license			All rights reserved
 * @since			Jan 10, 2012
 */
 
class Autoloader
{
	public static function start()
	{
		spl_autoload_register(array(self, 'loader'));
	}
	
	private static function loader($className)
	{
		if (class_exists($className))
		{
			return true;
		}
		
		if (preg_match('/_ctrl/', $className))
		{
			$mod = str_replace('_ctrl', null, $className);
			if(file_exists(MOD_DIR . $mod . '/' . $mod . '.php'))
			{
				require_once MOD_DIR . $mod . '/' . $mod . '.php';
			}
			else
			{
				return false;
			}
		}
		else
		{
			if (file_exists('lib/' . $className . '.inc'))
			{
				require_once 'lib/' . $className . '.inc';
			}
			else if (file_exists('./sites/default/modules/' . $className . '/' . $className . '.inc'))
			{
				require_once './sites/default/modules/' . $className . '/' . $className . '.inc';
			}
			else
			{
				return false;
			}
		}
		
	}
}