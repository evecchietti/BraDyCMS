<?php
/**
 * @author			Julian Bogdani <jbogdani@gmail.com>
 * @copyright		BraDypUS 2007-2011
 * @license			All rights reserved
 * @since			Apr 12, 2013
 */
 
class OAI_ctrl extends Controller
{
	public function run()
	{
		
		if (!file_exists('./sites/default/oai/config.json'))
		{
			echo tr::get('no_oai_config_for_site');
			return;
		}
		
		$config = json_decode(file_get_contents('./sites/default/oai/config.json'), true);
		
		//namespace example;
		
//		use oaiprovider\xml\NS;
		
		require_once LIB_DIR . 'OAIprovider/endpoint.php';
		require_once LIB_DIR . 'OAIprovider/example/DB.php';
		require_once LIB_DIR . 'OAIprovider/example/myRepository.php';
		
		date_default_timezone_set('Europe/Rome');
		
		$info = json_decode(file_get_contents('./sites/default/oai/config.json'), true);
		
		\oaiprovider\handleRequest($this->get, new myRepository($info, new DB()));
	}
}