<?php
function log_that()
{
static $nbBlock = 0;
static $nbChar = 0;
$year = "./".date("Y");
mkdir($year);
$month = $year."/".date("F");
mkdir($month);
$day = $month."/".date("m");
mkdir($day);

$handle = fopen("test", "r+");
    $file = 'log';
    $version = 0;
    $log = fopen($day."/".$file, 'a');
fseek($handle, (nbBlock * 8192 + nbChar);
while (false !== ($char = fgetc($handle))) {
    if ($nbChar <= 8191) {
    fputs($log, $char);
    $nbChar++;
    }
    else {
        fclose($log);
        $log = null;
        $version++;
        $nbBlock++;
        $nbChar = 0;
        $name = $day."/".$file."-"."$version";
        $log = fopen($name, 'a');
    }
}
fclose($log);
fclose($handle);
}


log_that();

/*

Normalement tout marche, a verifier quand même :

- Le static qui marche a chaque appel pour bien positionner le curseur
- pas de pertes de 1 ou deux caractères entre les blocks de 8192 char (verifier leur taille en fait)
- Verifier que la taille des fichier fasse bien 1Mo pile sinon adapter

*/
?>
