<?php
//echo file_get_contents("http://www.vpngate.net/api/iphone");

/*set_time_limit(0); // unlimited max execution time
$options = array(
//    CURLOPT_FILE    => '/list.csv',
    CURLOPT_TIMEOUT =>  28800, // set this to 8 hours so we dont timeout on big files
    CURLOPT_URL     => 'http://www.vpngate.net/api/iphone',
);
$ch = curl_init();
curl_setopt_array($ch, $options);
echo curl_exec($ch);
curl_close($ch);*/

file_put_contents("./list.csv", fopen("http://www.vpngate.net/api/iphone", 'r'));

//header('Content-Disposition: inline; filename="'.$file.'" ');
//header('Content-Length: ' . filesize("http:...z/pub/".$file.'.pdf'));
//readfile("http://www.vpngate.net/api/iphone");
//readfile("./list.csv");