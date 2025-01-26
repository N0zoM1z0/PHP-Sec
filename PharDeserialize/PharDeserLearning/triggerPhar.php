<?php
$filename = "phar://phar.phar";
//$filename = "compress.zlib://phar://phar.phar/test.txt";
//include($filename);
//file_get_contents($filename);
@unlink($filename);
class TestClass{
    public function __destruct()
    {
        echo "__destruct called\n";

//        call_user_func(function() {system('id');},"");
    }
}
