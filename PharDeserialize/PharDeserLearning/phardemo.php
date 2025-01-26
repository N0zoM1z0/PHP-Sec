<?php
class TestClass{

}
@unlink("phar.phar");
$phar = new Phar("phar.phar");
$phar->startBuffering();
/* must be ended with "__HALT_COMPILER();?>" */
$phar->setStub("GIF89a"."__HALT_COMPILER();?>");

$o = new TestClass();
$phar->setMetadata($o);
$phar->addFile("test.txt","test");
$phar->stopBuffering();

?>