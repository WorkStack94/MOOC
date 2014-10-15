<?php
function connect($login)
{
$connection;
$dns = 'mysql:host=localhost;dbname=edxapp';
        try
        {
        $connection = new PDO($dns, $login, null);
        }
        catch (PDOException $e)
        {
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



$log = 'root';

$connect = connect($log);


$req1 = $connect->prepare("USE edxapp");

//set($req1);

$req2 = $connect->prepare("INSERT INTO client (prenom, nom, ville, age) VALUES ('Rébecca', 'Armand', 'Saint-Didier-des-Bois', 24), ('Aimée', 'Hebert', 'Marigny-le-Châtel', 36), ('Marielle', 'Ribeiro', 'Maillères', 27),
 ('Hilaire', 'Savary', 'Conie-Molitard', 58)");


//set($req2);

$req3 = $connect->prepare("blabla");

//set($req3);


$req5 = $connect->prepare("SELECT age, prenom FROM client");
//$response = get($req5);
//var_dump($response);
echo "\n";



function getCoursesList($adminLog, $connect)
{
	$req = $connect->prepare("SELECT DISTINCT course_id FROM student_courseenrollment INNER JOIN auth_user ON student_courseenrollment.USER_id = auth_user.id AND auth_user.username = ?");
	$req->execute(array($adminLog));
	return get($req);
}

$adminLog = "kohl_a";

$res = getCoursesList($adminLog, $connect);

var_dump($res);



/*
formatTable(String adminLog, Array course, Array lesson, Array type) // tri successif pas de mise en forme html
getCoursesList(adminLog)
getLessonList(adminLog, Array course)
getUserList(adminLog, Array lesson, Array cours)
getTypeList()

Si tableau null ca veut dire *

*/


?>
