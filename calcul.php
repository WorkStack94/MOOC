<?php
	$file = file_get_contents('/edx/var/log/tracking/tracking.log');
	$motif = '{("username": "[0-9A-Za-z_-]+".*"event_type": "[A-Za-z_]+".*"page": (?:"[^"]+"|null))}';
	preg_match_all($motif, $file, $tab, PREG_PATTERN_ORDER);

	$result = array();
	$username = array();
	$course_id = array();
	$event_type = array();
	$ctime = array();
	$success = array();
	$time = array();
	$id = array();

	for ($i = 0; $i < count($tab[1]); $i++)
	{
		preg_match_all("{\"username\": \"([^\"]+)\"}", $tab[1][$i], $username[$i], PREG_PATTERN_ORDER);
		$result[$i]["username"] = $username[$i][1][0];

		preg_match_all("{\"course_id\": \"([^\"]+)\"}", $tab[1][$i], $course_id[$i], PREG_PATTERN_ORDER);
		$result[$i]["course_id"] = $course_id[$i][1][0];

		preg_match_all("{\"event_type\": \"([^\"]+)\"}", $tab[1][$i], $event_type[$i], PREG_PATTERN_ORDER);
		$result[$i]["event_type"] = $event_type[$i][1][0];

		preg_match_all('{"currentTime[^"]":([^,]+)}', $tab[1][$i], $ctime[$i], PREG_PATTERN_ORDER);
		$result[$i]["current_time"] = round($ctime[$i][1][0]);

		preg_match_all('{"success": "([a-z]+)"}', $tab[1][$i], $success[$i], PREG_PATTERN_ORDER);
		$result[$i]["success"] = $success[$i][1][0];

		preg_match_all('{"time": "([^"\.]+)}', $tab[1][$i], $time[$i], PREG_PATTERN_ORDER);
		$result[$i]["time"] = $time[$i][1][0];

		preg_match_all('#"event":[^:]+:\134"([^\134]+)#', str_replace('/','-', $tab[1][$i]), $id[$i], PREG_PATTERN_ORDER);
		$tmp = explode('-', $id[$i][1][0]);
       		$result[$i]["id"] = $tmp[count($tmp) - 1];
	}
	echo "<pre>";
	var_dump($result);
	echo "</pre>";

	// ----------------------------------- RECUPERATION DES DONNEES ----------------------------------- \\

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
		null, :userId, :eventName, :dateEvent, :idEvent, :course, :currentTime, :success)');

	for ($i = 0; $i < count($result); $i++)
	{
		try {
			$date_event = str_replace('T', ' ', $result[$i]["time"]);

			$success = $insert->execute(array(
    				'userId' => $result[$i]["username"],
    				'eventName' => $result[$i]["event_type"],
				'dateEvent' => $date_event,
				'idEvent' => $result[$i]["id"],
				'course' => $result[$i]["course_id"],
				'currentTime' => $result[$i]["current_time"],
				'success' => $result[$i]["success"]
  			));
			if ($success)
    				echo "Enregistrement réussi";
			else
				echo "Echec de l'enregistrement";
		}
		catch (Exception $e) {
  			echo "Erreur de requète : " . $e->getMessage();
		}
	}
?>
