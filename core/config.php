<?php

DEFINE("ACTIVE_THEME", "DEFAULT_HOME_PAGE");
DEFINE("THEME_PATH", ROOT_P.'/app/themes/'.ACTIVE_THEME);

DEFINE("GUILD_NAME", "Guild Emporium");
DEFINE("GUILD_REALM", "Thorium Brotherhood");
DEFINE("ACCESS_TOKEN", "ENTER YOUR KEY HERE");
$guild_realm = str_replace(" ", "%20", GUILD_REALM);
$guild_name = str_replace(" ", "%20", GUILD_NAME);
DEFINE("API_URL","https://us.api.battle.net/wow/guild/".$guild_realm."/".$guild_name."?fields=members&locale=en_US&apikey=".ACCESS_TOKEN."");
require_once(dirname(__file__).'/hooks.php');