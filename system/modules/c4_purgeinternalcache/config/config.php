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

/**
 * Purge jobs
 */
$GLOBALS['TL_PURGE']['folders']['internal'] = array
(
	'callback' => array('AutomatorHelper', 'purgeInternalCacheOnJob'),
	'affected' => array('var/cache/prod','var/cache/dev')
);

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['initializeSystem'][] = array('AutomatorHelper','purgeInternalCacheOnLoad');