<?php
/**
 * (C)2015-2099 FnTieStudio All rights reserved.
 * FnB_Air One (O-119)
 * Author: HanFen
 **/
#启动FnKu内核
require_once("FnKu/FnKu.php");
FnKu::Go();
require(CONFIG_PATH.'/config.php');
#$Fn_DBConn = new mysqli( mysql_servername,mysql_username,mysql_password,mysql_database);

#FnB_Air自检模块
if ((file_exists("./FnKu/Core/Config/config.php")) == false) {
    header("location:./FnKu/install/install.php");
}else{
    if( $Fn_DBConn->connect_errno <> 0 ){
        echo $Fn_DBConn->connect_error;
        die("SQL NO... (FnKu_E001_SQL)");
    }
}

#页面参数赋值
$page['body'] = 'mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-indigo mdui-theme-accent-pink';
$body = "Page/index.php";

#载入模板
require(Usr_Themes_PATH.'/main.php');


