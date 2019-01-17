<?php
/**
 * (C)2015-2099 FnTie All rights reserved.
 * FnMB version:1.0.5
 * Author: HanFen
 **/
require_once("FnKu/FnKu.php");
FnKu::Go();
require(CONFIG_PATH.'/config.php');

$page['body'] = 'mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-indigo mdui-theme-accent-pink';

require(Usr_Themes_PATH.'/main.php');


