<?php
class Demo {
    public String $name = "pwned!";
    public function __wakeup() {
        echo "Who are you?";
    }
    public function __destruct()
    {
        echo $this->name."\n";
        // TODO: Implement __destruct() method.
    }
}

highlight_file(__FILE__);
error_reporting(0);
ini_set('session.serialize_handler','php'); // php
session_start();

$o = new Demo();