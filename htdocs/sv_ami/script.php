<?php
require_once('flag.php');
error_reporting(0);
if(!isset($_GET['chose'])){die(highlight_file(__FILE__));}
@$chose = $_GET['chose'];
if(@file_get_contents($chose)!=="0"){die("null");}
echo "so ? what do u think now ? looklocklock :)";
@$s1=$_GET['sec1'];
@$s2=$_GET['sec2'];
$xx = 1337;$yy = 42;
if(intval($s1) !== $xx || $s1 === $xx){die("lol no\n");}
if(strlen($s2)==$yy){if(preg_match('/^\d+$/', $s2) && !is_numeric($s2)){if($s2 == $xx){@$xx = $_GET['xx'];}}}
list($s1,$s2)=[$s2, $s1];
if(substr($xx, $yy) === sha1($xx)){foreach ($_GET as $lol => $hack_the_planet){$$lol = $hack_the_planet;}}
$v = "2";$m="?v";
if($$m !== $s1){die("whaaaa XD\n");}
assert_options(ASSERT_BAIL, 1);
assert("$yy == $xx");
echo "Good Job ;)";
?> 1