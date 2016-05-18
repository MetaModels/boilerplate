<?php

/**
 * This file is part of MetaModels/boilerplate.
 *
 * (c) 2012-2016 The MetaModels team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    MetaModels
 * @subpackage Boilerplate
 * @author     Andreas Isaak <info@andreas-isaak.de>
 * @author     Ingolf Steinhardt <info@e-spin.de>
 * @copyright  2012-2016 The MetaModels team.
 * @license    https://github.com/MetaModels/boilerplate/blob/master/LICENSE LGPL-3.0
 * @filesource
 */


/**
 * Add own navigation group at backend
 */
$i = array_search('design', array_keys($GLOBALS['BE_MOD']));
$GLOBALS['BE_MOD'] = array_merge(array_slice(
	$GLOBALS['BE_MOD'], 0, $i), 
		array('metamodelsboilerplate' => array()
	), 
	array_slice($GLOBALS['BE_MOD'], $i)
);