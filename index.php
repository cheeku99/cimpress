<!DOCTYPE html>
<html>
<body>
<h2>Cimpress Technical Test :Symfony Github Repositories Detail -</h2>
<?php
	require_once 'vendor/autoload.php';
	//Call the client class 
	$client = new \Github\Client();
	//Get All Repo List
	$repositories = $repos = $client->api('repo')->find('symfony',array('language' => 'php'));
	echo "<ul>";
	foreach($repositories['repositories'] as $key=>$repo) {
		echo "<li><a target=\"_blank\" href=\"".$repo['url']."\">". $repo['name']."</a></li>";
	}
	echo "</ul>";
?>

</body>
</html>
