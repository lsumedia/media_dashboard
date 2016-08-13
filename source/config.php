<?php

/*
 * Dashboard config file
 * 
 */


/**
 * Pages configuration
 * 
 * Can take any number of entries matching the following format:
 *  
 * $pages_sample = [
    ['url' => 'http://grovestreet.me/projects/user_manager/source/', 'perm_name' => 'manage_users', 'thumbnail' => 'res/people_black.svg', 'title' => 'User Manager'],
    ['url' => 'http://grovestreet.me/projects/pamphlet_sso/source/admin/', 'perm_name' => 'lsutv_edit_content', 'thumbnail' => 'res/lsutv.png', 'title' => 'LSUTV CMS'],
    ['url' => 'http://grovestreet.me/projects/user_manager/source/', 'perm_name' => 'lable_edit_content', 'thumbnail' => 'res/labe;.png', 'title' => 'User Manager'],
    ['url' => 'http://grovestreet.me/projects/pamphlet_sso/source/admin/', 'perm_name' => 'lcr_edit_content', 'thumbnail' => 'res/lcr.png', 'title' => 'LSUTV CMS'],
];
 * 
 * url: Target URL (usually with authenticator enabled) - dashboard will
 *      make a POST request with the value key=[access key]
 * perm_name: The permission required for a user to see this entry. Available
 *      to all if left blank
 * thumbnail: The thumbnail image. Should be saved in the res folder
 * title: Title to display under the icon to the user
 */

$pages = [
    
    ['url' => 'http://grovestreet.me/projects/user_manager/source/', 'perm_name' => 'manage_users', 'thumbnail' => 'res/people_black.svg', 'title' => 'User Manager'],
    ['url' => 'http://grovestreet.me/media_server', 'perm_name' => 'upload_media', 'thumbnail' => 'res/media_black.svg', 'title' => 'Upload Files'],
    ['url' => 'http://grovestreet.me/projects/pamphlet_sso/source/admin/?action=plugin_vod', 'perm_name' => 'lsutv_edit_content', 'thumbnail' => 'res/lsutv.png', 'title' => 'LSUTV CMS'],
    //['url' => 'http://smalldisasters.co.uk/projects/lsutv/', 'perm_name' => '', 'thumbnail' => 'res/lsutv.png', 'title' => 'LSUTV Home'],
    
];

