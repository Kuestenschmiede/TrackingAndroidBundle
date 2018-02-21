<?php
/**
 * con4gis - the gis-kit
 *
 * @version   php 5
 * @package   con4gis
 * @author    con4gis contributors (see "authors.txt")
 * @license   GNU/LGPL http://opensource.org/licenses/lgpl-3.0.html
 * @copyright Janosch Oltmanns in cooperation with Küstenschmiede GmbH Software & Design 2011 - 2018
 * @link      https://www.kuestenschmiede.de
 */

$GLOBALS['TL_DCA']['tl_c4g_tracking_positions']['config']['sql']['keys']['imei'] = "index";
$GLOBALS['TL_DCA']['tl_c4g_tracking_positions']['config']['sql']['keys']['device'] = "index";

$GLOBALS['TL_DCA']['tl_c4g_tracking_positions']['fields']['positiontype'] = array
(
    'sql'                     => "varchar(32) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_c4g_tracking_positions']['fields']['batterystatus'] = array
(
    'sql'                     => "varchar(32) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_c4g_tracking_positions']['fields']['networkinfo'] = array
(
    'sql'                     => "varchar(32) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_c4g_tracking_positions']['fields']['imei'] = array
(
    'sql'                     => "varchar(32) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_c4g_tracking_positions']['fields']['device'] = array
(
    'foreignKey'              => 'tl_c4g_tracking_devices.name',
    'relation'                => array('type'=>'hasOne', 'load'=>'eager'),
    'sql'                     => "int(10) unsigned NOT NULL default '0'"
);