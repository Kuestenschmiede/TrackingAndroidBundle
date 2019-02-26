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

$GLOBALS['TL_DCA']['tl_c4g_tracking_devices']['palettes']['__selector__'][] = 'sendPushNotification';

$GLOBALS['TL_DCA']['tl_c4g_tracking_devices']['subpalettes']['sendPushNotification'] = 'pushNotificationContent';

$GLOBALS['TL_DCA']['tl_c4g_tracking_devices']['palettes']['android'] = '{title_legend},name,type,imei,token;{send_push_legend},sendPushNotification;{position_info_legend:hide},lastPositionId';

$GLOBALS['TL_DCA']['tl_c4g_tracking_devices']['fields']['imei'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_c4g_tracking_devices']['imei'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50 clr', 'mandatory'=>true, 'maxlength'=>15, 'doNotCopy'=>false),
    'sql'                     => "varchar(32) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_c4g_tracking_devices']['fields']['token'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_c4g_tracking_devices']['token'],
    'exclude'                 => true,
    'search'                  => true,
    'inputType'               => 'text',
    'eval'                    => array('tl_class'=>'w50', 'mandatory'=>true, 'maxlength'=>255, 'doNotCopy'=>false),
    'sql'                     => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_c4g_tracking_devices']['fields']['sendPushNotification'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_c4g_tracking_devices']['sendPushNotification'],
       'exclude'                 => true,
       'inputType'               => 'checkbox',
       'eval'                    => array('submitOnChange'=>true, 'tl_class'=>'w50'),
       'sql'                     => "char(1) NOT NULL default ''",
);
$GLOBALS['TL_DCA']['tl_c4g_tracking_devices']['fields']['pushNotificationContent'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_c4g_tracking_devices']['pushNotificationContent'],
    'exclude'                 => true,
    'inputType'               => 'textarea',
    'eval'                    => array('tl_class'=>'clr'),
    'sql'                     => "text NULL",
);