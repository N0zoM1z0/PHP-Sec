<?php
class TestClass{
    public String $name;
    public int $age;
    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __toString()
    {
        @eval("echo 'executed!';");
        return "name: ".$this->name.", age: ".$this->age;
        // TODO: Implement __toString() method.
    }
}

$o = new TestClass("p3n","114");
echo $o."\n";
echo $o."just a string";