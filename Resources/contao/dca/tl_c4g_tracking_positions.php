<?php
/*
 * This file is part of con4gis,
 * the gis-kit for Contao CMS.
 *
 * @package    con4gis
 * @version    6
 * @author     con4gis contributors (see "authors.txt")
 * @license    LGPL-3.0-or-later
 * @copyright  Küstenschmiede GmbH Software & Design
 * @link       https://www.con4gis.org
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