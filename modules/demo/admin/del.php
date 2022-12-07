<?php
if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}

    $id = $_REQUEST['id'];
    $content = 'NO_' . $id;

    $sql = 'DELETE FROM ' . NV_PREFIXLANG . '_' . $module_data . ' WHERE id = ' . $id;
    if ($db->exec($sql)) {
        $nv_Cache->delMod($module_name);
        $content = 'OK_' . $id;
    }
    exit($content);
