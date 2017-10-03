<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @copyright	Tim Gatzky 2017
 * @author		Tim Gatzky <info@tim-gatzky.de>
 * @package		c4_internalcache
 * @link		http://contao.org
 * @license		http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

class AutomatorHelper extends \Automator
{
	/**
	 * Purge the internal cache on system load
	 */
	public function purgeInternalCacheOnLoad()
	{
		if($GLOBALS['TL_CONFIG']['bypassCache'])
		{
			parent::purgeInternalCache();
			
			if(is_dir(TL_ROOT.'/var/cache/prod'))
			{
				\Files::getInstance()->rrdir('var/cache/prod', true);	
			}
			if(is_dir(TL_ROOT.'/var/cache/dev'))
			{
				\Files::getInstance()->rrdir('var/cache/dev', true);	
			}
		}
	}
	
	/**
	 * Purge the internal cache on job
	 */
	public function purgeInternalCacheOnJob()
	{
		if(is_dir(TL_ROOT.'/var/cache/prod'))
		{
			\Files::getInstance()->rrdir('var/cache/prod', true);	
		}
		if(is_dir(TL_ROOT.'/var/cache/dev'))
		{
			\Files::getInstance()->rrdir('var/cache/dev', true);	
		}
		
		parent::purgeInternalCache();
	}
}