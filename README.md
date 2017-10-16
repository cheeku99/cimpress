
Step 1:- Install Composer.
Step 2:- Add "github-api" dependencies in composer.json
	  {
		"require": {
			"knplabs/github-api": "^2.5",
			"php-http/guzzle6-adapter": "^1.1"
		}
	  }
	  
	
Step 3:- Code to be written in index.php to call the api :-
	=======PHP Code ====
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
	
Note : Output screenshot - "Output.png" added under project root directory.
