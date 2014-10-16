<?php
	$username = $_GET['username'];
	$eventname = $_GET['name'];
	$eventdate = $_GET['date'];

	try {
  		$base = 'mysql:host=localhost;dbname=mooc';
  		$user = 'root';
  		$cnx = new PDO($base, $user, null);
	}
	catch (Exception $e) {
  	  	echo "Connection à MySQL impossible : " . $e->getMessage();
  		die();
	}

	$insert = $cnx->prepare('INSERT INTO EventUser VALUES(
		null, :userId, :eventName, :dateEvent, null, null, "0", null)');

	try {
		$success = $insert->execute(array(
   			'userId' => $username,
    			'eventName' => $eventname,
			'dateEvent' => $eventdate
  		));
		if ($success)
    			echo "Enregistrement réussi";
		else
			echo "Echec de l'enregistrement";
	}
	catch (Exception $e) {
  		echo "Erreur de requète : " . $e->getMessage();
	}
?>
