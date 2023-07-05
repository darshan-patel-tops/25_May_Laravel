<!-- 
__construct(),
__destruct(),
__call(),
__callStatic(),
__get(),
__set(),
__isset(),
__unset(),
__sleep(),
__wakeup(),
__serialize(),
__unserialize(),
__toString(),
__invoke(),
__set_state(),
__clone(),
__debugInfo()
 -->

<?php


 class magic
 {
    public function __construct()
    {
        echo "Called Construct<br>";
    }
    public function __destruct()
    {
        echo "Called Destructor<br>";
    }


    public function name()
    {
        echo "Called name Function<br>";
    }

    public function __get($name)
    {
        echo "called get function ".$name." <br>";
    }
    public function __set($name,$value)
    {
        echo "<br>Called set function";
        echo "<br>The name is $name and the value is $value<br>";
    }
    public function __call($functionname,$param)
    {   
        echo "<br>";
        echo "Called call";
        echo "<br>";
        echo $functionname;
        echo "<br>";
        print_r($param);
        echo "<br>";
    }
 }


 $magic = new magic;
 $magic->name();
 $magic->anything;
 $magic->username;
 $magic->JaiPrakash;
 $magic->Mohammed;
 $magic->mohammend="jaiprakash";
 $magic->jaiprakash="mohammed";
 $magic->kuchbhi("m nahi batata");
 $magic->name1("jaiprakash");
 $magic->name2("mohhammed");

?>