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
 * @author     Ingolf Steinhardt <info@e-spin.de>
 * @copyright  2012-2016 The MetaModels team.
 * @license    https://github.com/MetaModels/boilerplate/blob/master/LICENSE LGPL-3.0
 * @filesource
 */

/**
 * EVENTS
 *
 * change the placeholder <...> and use the
 * template with or without priority
 *
 * more infos: https://github.com/contao-community-alliance/event-dispatcher
 */

/*
use ContaoCommunityAlliance\DcGeneral\<Path>\<Event-Class>;

// without priority
return array(
    <Event-Class>::NAME => array(
        function (<Event-Class> $event) {
            // function...
        }
    )
);

// with priority -1
return array(
    <Event-Class>::NAME => array(
        array(
            function (<Event-Class> $event) {
                // function...
            },
            -1
        )
    )
);
*/