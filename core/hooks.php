<?php

function LoadTheme($arg) {
	if(!file_exists($arg.'/theme.tpl')) {
		die("Theme is Corrupt");
	}
	else {
		include_once($arg.'/theme.tpl');
	}
}
function LoadPage() {
	if(!isset($_GET['view'])) {
		include_once(ROOT_P.'/app/views/home.php');
	}
	else {
		if(!file_exists(ROOT_P.'/app/views/'.$_GET['view'].'.php')) {
			echo "Page Not Found!";
		}
		else {
		include_once(ROOT_P.'/app/views/'.$_GET['view'].'.php');
		}
	}
}


function buildMenu() {
	$menuItems = array(
	"Developer Docs"	=> "developer",
	);
	foreach($menuItems as $menuItem => $link) {
		echo "<li><a href='".$link."'>".$menuItem."</a></li>";
	}
}