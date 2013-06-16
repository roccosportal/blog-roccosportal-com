<?php
self::$config['PvikAdminTools'] = array ();
self::$config['PvikAdminTools']['Url'] = '/admin/admin/';
self::$config['PvikAdminTools']['Login']= array ();
self::$config['PvikAdminTools']['Login']['Username'] = 'Admin';
self::$config['PvikAdminTools']['Login']['PasswordMD5'] = '098f6bcd4621d373cade4e832627b4f6';
self::$config['PvikAdminTools']['FileFolders']= array ('~/files/', '~/images/');

self::$config['PvikAdminTools']['Tables'] = array (
    'Posts' => array (
            'Fields' => array (
                'postId' => array ('Type' => 'Primary', 'ShowInOverview' => true),
                'title' => array ('Type' => 'Normal', 'ShowInOverview' => true),
                'uniqueName' => array ('Type' => 'UniqueName', 'UseField' => 'title', 'ShowInOverview' => false),
                'contentPreview' => array ('Type' => 'Textarea', 'ShowInOverview' => false),
                'content' => array ('Type' => 'Textarea', 'ShowInOverview' => false),
                'created' => array ('Type' => 'Date', 'ShowInOverview' => false),
                'isPublished' => array ('Type' => 'Checkbox', 'ShowInOverview' => false)
             )
    )
);
