<?php
$delayedTime = 900;
$dir = './';
// $dir = './ids/';
$exceptionFiles = ["./ax", "./files"];
// $exceptionFiles = ["./ids/index.php", "donotremove.txt"];
$files = scandir( $dir);

function deleteDir($dirPath) {
    if (! is_dir($dirPath)) {
        throw new InvalidArgumentException("$dirPath must be a directory");
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            deleteDir($file);
        } else {
            unlink($file);
        }
    }
    rmdir($dirPath);
}
foreach ($files as $file) {
    if( $file == "." || $file == ".." || is_file($file)){
        continue;
    }
    $current_time = time();
    $file = $dir . $file;
    $file_creation_time = filemtime( $file);
    $difference = $current_time - $file_creation_time;
    if ($difference >= $delayedTime) {
        if( in_array($file, $exceptionFiles)){
            continue;
        }
        if( is_dir($file)){
            deleteDir($file);
        } else{
            unlink($file);
        }
    }
}
?>


