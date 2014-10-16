<?php

function connect($login, $dbname)
{
	$connection;
	$dns = "mysql:host=localhost;dbname=$dbname";
    	try {
        	$connection = new PDO($dns, $login, null);
	} catch (PDOException $e) {
    		echo 'Connexion échouée : ' . $e->getMessage() ."\n";
    	}
	return $connection;
}

function get($request)
{
	$request->execute();
	$row = $request->fetchAll(PDO::FETCH_ASSOC);
	return $row;
}

function set($request)
{
	$response = $request->execute();
	if (!$response)
	   echo "echec de l'execution de la requête\n";
}

function getCoursesList($adminLog, $connect)
{
	$req = $connect->prepare("SELECT DISTINCT course_id FROM "
	       ."student_courseenrollment INNER JOIN auth_user ON "
	       ."student_courseenrollment.USER_id = auth_user.id AND"
	       ." auth_user.username = ?");
	$req->execute(array($adminLog));
	return get($req);
}

// imperativement balancer les arguments dans des tableaux, même d'un seul élément.
function getDataMooc($connect, $admin, $users, $course, $type) // ne pas prendre en compte l'admin pour le moment, ajout a venir
{
	$subrequest_users = " ";
        $subrequest_course = " ";
        $subrequest_type = " ";
	$where = $false;

	if ($users != null) {
		$where = true;
		$and = true;
		$subrequest_users = "WHERE (userId = ".$users[0]." ";
		for ($i = 1; isset($users[$i]); $i++)
			$subrequest_users .= "OR userId = ".$users[$i]." ";
		$subrequest_users .= ")";
	}

        if ($course != null) {
		if (!$where)
	        	$subrequest_course = "WHERE (course = '".$course[0]."' ";
		else
               		$subrequest_course = " AND (course = '".$course[0]."' ";
                for ($i = 1; isset($course[$i]); $i++)
                        $subrequest_course .= "OR course = '".$course[$i]."' ";
       		 $subrequest_course .= ")";
		 $where = true;
	}

        if ($type != null) {
		if (!$where)
	                $subrequest_type .= " WHERE (eventName = '".$type[0]."' ";
		else
                	$subrequest_type .= " AND (eventName = '".$type[0]."' ";
                for ($i = 1; isset($type[$i]); $i++)
                        $subrequest_type .= "OR eventName = '".$type[$i]."' ";
	        $subrequest_type .= ")";
	}

	$req1 = "SELECT * FROM EventUser ".$subrequest_users.$subrequest_course.$subrequest_type;
	$req = $connect->prepare($req1);
	echo "\n";
	var_dump($req);
	echo "\n";
	return get($req);
}

function calculAdherence()
{

}

function getIndexAll($admin, $colName)
{
	$req = "SELECT DISTINCT " . $colName . " FROM EventUser";
	$courses = array();
	$con = connect('root', 'mooc');
    	foreach($con->query($query) as $row)
    		echo '<a href="#" class="list-group-item id='.$row[0].'\".> ' . $row[0] . ' <input type="checkbox" class="pull-right"></a>"';
    $con = null;
}


//colname-> userId  eventName  dateEvent  course



$log = 'root';
$basename = 'edxapp';
//$connect = connect($log, $basename);

//$req1 = $connect->prepare("USE edxapp");
//set($req1);
//$req2 = $connect->prepare("INSERT INTO client (prenom, nom, ville, age) VALUES ('Rébecca', 'Armand', 'Saint-Didier-des-Bois', 24), ('Aimée', 'Hebert', 'Marigny-le-Châtel', 36), ('Marielle', 'Ribeiro', 'Maillères', 27),
 //('Hilaire', 'Savary', 'Conie-Molitard', 58)");

//set($req2);
//$req3 = $connect->prepare("blabla");
//set($req3);
//$req5 = $connect->prepare("SELECT age, prenom FROM client");
//$response = get($req5);
//var_dump($response);
//echo "\n";
$adminLog = "kohl_a";
//$res = getCoursesList($adminLog, $connect);
//var_dump($res);
/*
formatTable(String adminLog, Array course, Array lesson, Array type) // tri successif pas de mise en forme html
getCoursesList(adminLog)
getLessonList(adminLog, Array course)
getUserList(adminLog, Array lesson, Array cours)
getTypeList()

Si tableau null ca veut dire *

*/


$log = 'root';
$basename = 'mooc';
$connect = connect($log, $basename);

$admin = null;





//$users = array("1");
//$course = array("francais");
//$type = array("video");;
$res = getDataMooc($connect, $admin, $users, $course, $type);


echo "\n";
echo 'users : ';
echo "\n";
var_dump($users);
echo "\n";
echo 'course : ';
echo "\n";
var_dump($course);
echo "\n";
echo 'type : ';
echo "\n";
var_dump($type);
echo "\n";
echo 'res : ';
echo "\n";
var_dump($res);

?>
