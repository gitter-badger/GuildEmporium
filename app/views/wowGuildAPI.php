<?php
DEFINE("TITLE", "API");
?>
<div class="col-xs-8 col-xs-offset-2">
	<div class="panel panel-info">
	<div class="panel-heading">
		World of Warcraft API
		
	</div>
<div class="panel-body">
<div class="alert alert-info">Guild Functions</div>
<code>GuildDetails(Argument);</code><br />
Accepted Arguments:
<?php
$arguments = array(
"GuildName" => "Returns Guild Name", 
"GuildRealm" => "Returns Guild Realm", 
"GuildBattleGroup" => "Returns Guild Battlegroup", 
"GuildLevel" => "Guild Level", 
"GuildFaction" => "Guild Faction", 
"GuildAP" => "Guild Achievement Points",
"MemberCount"	=> "Return the Amount of Members In The Guild",
"Roster"	=> "Pulls Guild Roster. Still under heavy development");
foreach($arguments as $argument => $description) {
	echo "<li><a href='#".$argument."'>".$argument."</a></li>";
}
foreach($arguments as $argument	=> $description) {
	echo '<code id="'.$argument.'">GuildDetails("'.$argument.'")</code>';
	echo "<blockquote>".$description."</blockquote>";
	echo "<div class='alert alert-info'>". GuildDetails($argument) . "</div>";
	echo "<div class='col-xs-2 col-xs-offset-8'><div class='alert alert-info'><a href='#top'>To Top</a></div></div>";
	echo "<br />";
}
?>

</div>
	<div class="alert alert-info">Character Functions</div>

	</div>
</div>