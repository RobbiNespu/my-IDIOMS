<?php

/*  Author 	: 	Robbi Nespu  <robbi . nespu @ hotmail . com>
*   License	:	GPL 2 	
*	About 	: 	A huge php random idioms and meaning generator that ready to use by everybody 
*/



$a = array(
"A Bird In The Hand Is Worth Two In The Bush|Having something that is certain is much better than taking a risk for more, because chances are you might lose everything",
"A Blessing In Disguise|Something good that isn't recognized at first",
"A Chip On Your Shoulder|Being upset for something that happened in the past",
"A Dime A Dozen|Anything that is common and easy to get|Anything that is common and easy to get",
"A Doubting Thomas|A skeptic who needs physical or personal evidence in order to believe something");

$b = array(
"Back Seat Driver|People who criticize from the sidelines, much like someone giving unwanted advice from the back seat of a vehicle to the driver",
"Back To The Drawing Board|When an attempt fails and it's time to start all over",
"Barking Up The Wrong Tree|A mistake made in something you are trying to achieve",
"Beating Around The Bush|Avoiding the main topic. Not speaking directly about the issue",
"Bend Over Backwards|Do whatever it takes to help. Willing to do anything");

$c = array(
"Can't Cut The Mustard|Someone who isn't adequate enough to compete or participate",
"Cast Iron Stomach|Someone who has no problems, complications or ill effects with eating anything or drinking anything",
"Cross Your Fingers|To hope that something happens the way you want it to");

$d = array(
);

$e = array(
);

$g = array(
);

$h = array(
);

$i = array(
);

$j = array(
);

$k = array(
);

$l = array(
);

$m = array(
);

$n = array(
);

$o = array(
);

$p = array(
);

$r = array(
);

$s = array(
);

$t = array(
);

$u = array(
);

$w = array(
);

$y = array(
);

$z = array(
);


$idioms = "";
$title = "";
$collection = array("a","b","c","d","e","g","h","i","j","k","l","m","n","o","p","r","s","t","u","w","y","z");
$rand = $$collection[rand(0,count($collection)-1)];
$meaning = $rand[rand(0,count($rand)-1)];
$Idioms_meaning = explode("|",$meaning);
if(count($Idioms_meaning)==2){
	$idioms = "<p class=\"qword\">".$Idioms_meaning[0]."</p><p class=\"qdesc\">".$Idioms_meaning[1]."</p>";
	$title = $Idioms_meaning[0];
}
echo $idioms;
?>