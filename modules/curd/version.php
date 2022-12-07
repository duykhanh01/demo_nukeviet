<?php

 
if (!defined('NV_ADMIN') or !defined('NV_MAINFILE'))
    die('Stop!!!');
 
$module_version = array(
    'name' => 'curd', // Tieu de module
    'modfuncs' => 'main', // Cac function co block
    'change_alias' => '',
    'submenu' => 'list,create',
    'is_sysmod' => 0, // 1:0 => Co phai la module he thong hay khong
    'virtual' => 1, // 1:0 => Co cho phep ao hao module hay khong
    'version' => '1.0.00', // Phien ban cua modle
    'date' => '', // Ngay phat hanh phien ban
    'author' => '', // Tac gia
    'note' => '', // Ghi chu
    'uploads_dir' => array(
        $module_name,
    ),
);