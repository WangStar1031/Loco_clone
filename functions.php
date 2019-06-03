<?php


// Antibot Functions
$host = $_SERVER['SERVER_NAME'];
$self = $_SERVER["REQUEST_URI"];
$query = !empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : null;
$ref = !empty($query) ? "http://$host$self?$query" : "http://$host$self";

$split = explode("=", $ref);
$ex = $split[1];
$b = str_replace("?", "", $ex);
//$repl = preg_replace('/[\*]+/', ' ', $smtp);


// -> Protection Databases

require 'files/boot/DB-BOTS.php';
require 'files/boot/DB-CIDR.php';
require 'files/boot/DB-HOSTS.php';
require 'files/boot/DB-METHOD.php';
require 'files/boot/DB-RANGE.php';

function ip_in_cidr( $ip, $range ) {
    if ( strpos( $range, '/' ) == false ) {
        $range .= '/32';
    }
    list( $range, $netmask ) = explode( '/', $range, 2 );
    $range_decimal = ip2long( $range );
    $ip_decimal = ip2long( $ip );
    $wildcard_decimal = pow( 2, ( 32 - $netmask ) ) - 1;
    $netmask_decimal = ~ $wildcard_decimal;
    return ( ( $ip_decimal & $netmask_decimal ) == ( $range_decimal & $netmask_decimal ) );
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function ip_in_range($ip, $range) {
    if (strpos($range, '/') !== false) {
        list($range, $netmask) = explode('/', $range, 2);
        if (strpos($netmask, '.') !== false) {
            $netmask = str_replace('*', '0', $netmask);
            $netmask_dec = ip2long($netmask);
            return ( (ip2long($ip) & $netmask_dec) == (ip2long($range) & $netmask_dec) );
        } else {
            $x = explode('.', $range);
            while(count($x)<4) $x[] = '0';
            list($a,$b,$c,$d) = $x;
            $range = sprintf("%u.%u.%u.%u", empty($a)?'0':$a, empty($b)?'0':$b,empty($c)?'0':$c,empty($d)?'0':$d);
            $range_dec = ip2long($range);
            $ip_dec = ip2long($ip);
            $wildcard_dec = pow(2, (32-$netmask)) - 1;
            $netmask_dec = ~ $wildcard_dec;
            return (($ip_dec & $netmask_dec) == ($range_dec & $netmask_dec));
        }
    } else {
    if (strpos($range, '*') !==false) {
        $lower = str_replace('*', '0', $range);
        $upper = str_replace('*', '255', $range);
        $range = "$lower-$upper";
    }

    if (strpos($range, '-')!==false) {
        list($lower, $upper) = explode('-', $range, 2);
        $lower_dec = (float)sprintf("%u",ip2long($lower));
        $upper_dec = (float)sprintf("%u",ip2long($upper));
        $ip_dec = (float)sprintf("%u",ip2long($ip));
        return ( ($ip_dec>=$lower_dec) && ($ip_dec<=$upper_dec) );
    }
    return false;
    }
}

function get_ip2(){
    if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown")) {
        $ip = getenv("HTTP_CLIENT_IP");
    } elseif (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")) {
        $ip = getenv("HTTP_X_FORWARDED_FOR");
    } elseif (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")) {
        $ip = getenv("REMOTE_ADDR");
    } elseif (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) {
        $ip = $_SERVER['REMOTE_ADDR'];
    } else {
        $ip = "unknown";
    }
    return($ip);
}

$ip = get_ip2();

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$requri     = $_SERVER['REQUEST_URI'];
$r_method   = $_SERVER['REQUEST_METHOD'];
$hostname   = gethostbyaddr($ip);

// BAN client if bot
foreach ($badBOT as $bot) {
    if (stripos($user_agent, $bot) !== false) {
        header('HTTP/1.0 404 Not Found');
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
    }
}

// BAN if host matches list
foreach ($badHOST as $host) {
    if (stripos($hostname, $host) !== false) {
        header('HTTP/1.0 404 Not Found');
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
    }
}

// BAN if IP in CIDR
foreach ($badCIDR as $ipc) {
    if (ip_in_cidr($ip, $ipc) == "1") {
        header('HTTP/1.0 404 Not Found');
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
    }
}

// BAN if ip in RANGE
foreach ($badRANGE as $ipc) {
    if (ip_in_range($ip, $ipc) == "1") {
        header('HTTP/1.0 404 Not Found');
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
    }
}
// BAN if METHOD is not allowed
foreach ($badMETHOD as $method) {
    if (stripos($r_method, $method) !== false) {
        header('HTTP/1.0 404 Not Found');
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
    }
}

function getIp() {
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
	    $ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
	    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
	    $ip = $_SERVER['REMOTE_ADDR'];
	}

	return $ip;
}

function browsername()
{
    $browserName = $_SERVER['HTTP_USER_AGENT'];

    if (strpos(strtolower($browserName), "safari/") and strpos(strtolower($browserName), "opr/")) {
        $browserName = "Opera";
    } elseif (strpos(strtolower($browserName), "safari/") and strpos(strtolower($browserName), "chrome/")) {
        $browserName = "Chrome";
    } elseif (strpos(strtolower($browserName), "msie")) {
        $browserName = "Internet Explorer";
    } elseif (strpos(strtolower($browserName), "firefox/")) {
        $browserName = "Firefox";
    } elseif (strpos(strtolower($browserName), "safari/") and strpos(strtolower($browserName), "opr/")==false and strpos(strtolower($browserName), "chrome/")==false) {
        $browserName = "Safari";
    } else { $browserName = "Unknown"; }

    return $browserName;
}

function os_info($uagent)
{
    // the order of this array is important
    global $uagent;
    $oses   = array(
        'Win311' => 'Win16',
        'Win95' => '(Windows 95)|(Win95)|(Windows_95)',
        'WinME' => '(Windows 98)|(Win 9x 4.90)|(Windows ME)',
        'Win98' => '(Windows 98)|(Win98)',
        'Win2000' => '(Windows NT 5.0)|(Windows 2000)',
        'WinXP' => '(Windows NT 5.1)|(Windows XP)',
        'WinServer2003' => '(Windows NT 5.2)',
        'WinVista' => '(Windows NT 6.0)',
        'Windows 7' => '(Windows NT 6.1)',
        'Windows 8' => '(Windows NT 6.2)',
        'WinNT' => '(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)',
        'OpenBSD' => 'OpenBSD',
        'SunOS' => 'SunOS',
        'Ubuntu' => 'Ubuntu',
        'Android' => 'Android',
        'Linux' => '(Linux)|(X11)',
        'iPhone' => 'iPhone',
        'iPad' => 'iPad',
        'MacOS' => '(Mac_PowerPC)|(Macintosh)',
        'QNX' => 'QNX',
        'BeOS' => 'BeOS',
        'OS2' => 'OS/2',
        'SearchBot' => '(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp)|(MSNBot)|(Ask Jeeves/Teoma)|(ia_archiver)'
    );
    $uagent = strtolower($uagent ? $uagent : $_SERVER['HTTP_USER_AGENT']);
    foreach ($oses as $os => $pattern)
        if (preg_match('/' . $pattern . '/i', $uagent))
            return $os;
    return 'Unknown';
}

function systemInfo($ipAddress) {
    $systemInfo = array();
    
    $ipDetails = json_decode(file_get_contents("https://www.iplocate.io/api/lookup/" . $ipAddress), true);
    $systemInfo['city'] = $ipDetails['city'];
    $systemInfo['country'] = $ipDetails['country'];
    $systemInfo['country_code'] = $ipDetails['country_code'];

    $systemInfo['useragent'] = $_SERVER['HTTP_USER_AGENT'];
    $systemInfo['os'] = os_info($systemInfo['useragent']);
    $systemInfo['browser'] = browsername();

    return $systemInfo;
}
