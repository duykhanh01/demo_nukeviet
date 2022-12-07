<?php
if (!defined('NV_IS_FILE_ADMIN')) {
    exit('Stop!!!');
}

$page_title = $lang_module['list'];
$array = [];


$xtpl = new XTemplate('add.tpl', NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/modules/' . $module_file);
$xtpl->parse('main.show');
$xtpl->assign('LANG', $lang_module);
$xtpl->assign('GLANG', $lang_global);
$id = $_REQUEST['id'] ?? null;
if($id){
    $query = $db->query('SELECT * FROM '.NV_PREFIXLANG.'_demo WHERE id='.$id);
    $row = $query->fetch();
    if($row){
        $value['name'] = $row['name'];
        $value['birthday']= $row['birthday'];
        $value['address'] = $row['address'];
        $xtpl->assign('DATA', $value);
        $xtpl->parse('main.show');
    }
}

if($nv_Request->isset_request('submit1', 'post')==1){
    $row['name'] = nv_substr($nv_Request->get_title('name', 'post', ''), 0, 250);
    $row['birthday'] = $nv_Request->get_int('birthday', 'post');
    $row['address'] = nv_substr($nv_Request->get_title('address', 'post', ''), 0, 250);
    
    //xu ly du lieu
    $_sql = 'INSERT INTO ' . NV_PREFIXLANG . '_' . $module_data . ' (
        name, birthday, address
    ) VALUES (
        :name, :birthday, :address)';
    if ($id){
        $_sql = 'UPDATE ' . NV_PREFIXLANG . '_' . $module_data . ' SET
            name=:name, birthday=:birthday, address=:address WHERE id='.$id;
    }
    var_dump($_sql);
    $sth = $db->prepare($_sql);
    $sth->bindParam(':name', $row['name'], PDO::PARAM_STR);
    $sth->bindParam(':birthday', $row['birthday'], PDO::PARAM_INT);
    $sth->bindParam(':address', $row['address'], PDO::PARAM_STR);
    $exe =  $sth->execute();

    //chuyen huong
    if($exe){
        nv_redirect_location(NV_BASE_ADMINURL . 'index.php?' . NV_LANG_VARIABLE . '=' . NV_LANG_DATA . '&' . NV_NAME_VARIABLE . '=' . $module_name);
    }

}


$xtpl->parse('main');
$contents = $xtpl->text('main');

include NV_ROOTDIR . '/includes/header.php';
echo nv_admin_theme($contents);
include NV_ROOTDIR . '/includes/footer.php';
