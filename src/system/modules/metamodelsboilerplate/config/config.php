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
 * NAVIGATION
 *
 * Add own navigation group at backend
 * include before e.g. "Design" 
 */
$i = array_search('design', array_keys($GLOBALS['BE_MOD']));
$GLOBALS['BE_MOD'] = array_merge(array_slice(
	$GLOBALS['BE_MOD'], 0, $i), 
		array('metamodelsboilerplate' => array()
	), 
	array_slice($GLOBALS['BE_MOD'], $i)
);


/**
 * DEFAULT VALUES AT INPUT SCREEN
 *
 * set default values at input screen
 * change the placeholder <...> with
 * <MM-Table-Name> e.g. mm_my_table
 * <Field-Column-Name> e.g. name
 * <Value> is depended at type of attribute
 * Text: e.g. 'my default text'
 * Timestamp: timestamp integer e.g. '1463657005' or time()
 * Select: the ID integer of value e.g. '2'
 * Tags: the value(es) of alias(es) as array e.g. array('my-alias-1', 'my-alias-2')
 * 
 * Kochbuch: http://metamodels.readthedocs.io/de/latest/cookbook/panels/default-values.html
 */
//$GLOBALS['TL_DCA']['<MM-Table-Name>']['fields']['<Field-Column-Name>']['default'] = <Value>;


/**
 * HOOKS
 *
 * activate your hook class at /classes
 * and autoload the class at autoload.php or start 
 * autoload creator (developer tools)
 * replace the placeholder <Hook-Name>
 * look at https://docs.contao.org/books/api/extensions/hooks/index.html
 */
//$GLOBALS['TL_HOOKS']['<Hook-Name>'][] = array('MyMetaModelClass', 'myMetaModelFunction');
