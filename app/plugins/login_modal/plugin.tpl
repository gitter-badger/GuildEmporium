<?php
DEFINE("LOGIN_MODAL_PLUGIN_PATH", dirname(__file__).'/');

$enabled = 1;
if($enabled == 1) {
	DEFINE("LOGIN_MODAL_PLUGIN_STATUS", 1);
	require_once(LOGIN_MODAL_PLUGIN_PATH.'index.php');
}
else {
	DEFINE("LOGIN_MODAL_PLUGIN_STATUS", 0);
}