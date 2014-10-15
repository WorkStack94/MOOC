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

function get($connect, $request)
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


$req1 = $connect->prepare("USE toto");

set($req1);

$req2 = $connect->prepare("INSERT INTO client (prenom, nom, ville, age) VALUES ('Rébecca', 'Armand', 'Saint-Didier-des-Bois', 24), ('Aimée', 'Hebert', 'Marigny-le-Châtel', 36), ('Marielle', 'Ribeiro', 'Maillères', 27),
 ('Hilaire', 'Savary', 'Conie-Molitard', 58)");


set($req2);

$req3 = $connect->prepare("blabla");

set($req3);

/*
$req4 = "SELECT age, prenom FROM client";

$response = get($connect, $req4);

var_dump($response);
echo "\n";
*/

$req5 = $connect->prepare("SELECT age, prenom FROM client");
$response = get($connect, $req5);
var_dump($response);
echo "\n";


?>
