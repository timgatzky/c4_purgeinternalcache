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
 
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] = str_replace('gzipScripts', 'gzipScripts,bypassCache', $GLOBALS['TL_DCA']['tl_settings']['palettes']['default']);

$GLOBALS['TL_DCA']['tl_settings']['fields']['bypassCache'] = array
(
	'label'			=> &$GLOBALS['TL_LANG']['tl_settings']['bypassCache'],
	'inputType'		=> 'checkbox',
	'sql'			=> "char(1) NOT NULL default ''",
	'eval'			=> array('tl_class'=>'w50 clr')
);