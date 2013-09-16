<?php

/*  Author 	: 	Robbi Nespu  <robbi . nespu @ hotmail . com>
*   License	:	GPL 2 	
*   About 	: 	A huge php random idioms and meaning generator that ready to use by everybody 
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
"Cross Your Fingers|To hope that something happens the way you want it to",
"Cry Over Spilt Milk|When you complain about a loss from the past");

$d = array(
"Devil's Advocate|Someone who takes a position for the sake of argument without believing in that particular side of the arguement. It can also mean one who presents a counter argument for a position they do believe in, to another debater",
"Don't count your chickens before they hatch|Don't rely on it until your sure of it",
"Don't Look A Gift Horse In The Mouth|When someone gives you a gift, don't be ungrateful",
"Don't Put All Your Eggs In One Basket|Do not put all your resources in one possibility");

$e = array(
"Every Cloud Has A Silver Lining|Be optomistic, even difficult times will lead to better days",
"Everything But The Kitchen Sink|Almost everything and anything has been included");

$f = array(
"Feeding Frenzy|An aggressive attack on someone by a group",
"Finger lickin' good|A very tasty food or meal",
"Fixed In Your Ways|Not willing or wanting to change from your normal way of doing something");

$g = array(
"Get Down to Brass Tacks|To become serious about something",
"Get Over It|To move beyond something that is bothering you",
"Get Up On The Wrong Side Of The Bed|Someone who is having a horrible day");

$h = array(
"Haste Makes Waste|Quickly doing things results in a poor ending",
"Have an Axe to Grind|To have a dispute with someone",
"He Lost His Head,Angry and overcome by emotions",
"Hell in a Handbasket|Deteriorating and headed for complete disaster");

$i = array(
"Icing On The Cake|When you already have it good and get something on top of what you already have",
"Idle Hands Are The Devil's Tools|You are more likely to get in trouble if you have nothing to do",
"If It's Not One Thing, It's Another|When one thing goes wrong, then another, and another..");

$j = array(
"Joshing Me|Tricking me");

$k = array(
"Keep An Eye On Him|You should carefully watch him",
"Keep body and soul together|To earn a sufficient amount of money in order to keep yourself alive",
"Keep your chin up|To remain joyful in a tough situation");

$l = array(
"Last but not least|An introduction phrase to let the audience know that the last person mentioned is no less important than those introduced before him/her",
"Lend Me Your Ear|To politely ask for someone's full attention",
"Let Bygones Be Bygones|To forget about a disagreement or arguement",
"Let The Cat Out Of The Bag|To share a secret that wasn't suppose to be shared",
"Like a chicken with its head cut off|To act in a frenzied manner");

$m = array(
);

$n = array(
"Never Bite The Hand That Feeds You|Don't hurt anyone that helps you",
"No Room to Swing a Cat|An unsually small or confined space",
"Not Playing With a Full Deck|Someone who lacks intelligence");

$o = array(
"Off On The Wrong Foot|Getting a bad start on a relationship or task",
"Off The Hook|No longer have to deal with a tough situation",
"On Pins And Needles|Anxious or nervous, especially in anticipation of something");

$p = array(
"Pick up your ears|To listen very carefully",
"Practice Makes Perfect,By constantly practicing, you will become better",
"Pull the plug|To stop something. To bring something to an end");

$q = array(
"Queer the pitch|Destroy or ruin a plan");

$r = array(
"Ring Fencing|Seperated usual judgement to guarantee protection, especially project funds",
"Rome Was Not Built In One Day|If you want something to be completely properly, then its going to take time");

$s = array(
"Sixth Sense|A paranormal sense that allows you to communicate with the dead",
"Smell Something Fishy|Detecting that something isn't right and there might be a reason for it",
"Start From Scratch|To do it all over again from the beginning");

$t = array(
"The Bigger They Are The Harder They Fall|While the bigger and stronger opponent might be alot more difficult to beat, when you do they suffer a much bigger loss",
"The Last Straw|When one small burden after another creates an unbearable situation, the last straw is the last small burden that one can take",
"Tongue-in-cheek|humor, not to be taken serious");

$u = array(
"Up a blind alley|Going down a course of action that leads to a bad outcome");

$v = array(
"Variety Is The Spice Of Life|The more experiences you try the more exciting life can be");

$w = array(
"Water Under The Bridge|Anything from the past that isn't significant or important anymore",
"Wear Your Heart On Your Sleeve|To openly and freely express your emotions");

$y = array(
"You Can't Judge A Book By Its Cover|Decisions shouldn't be made primarily on appearance");

$z = array(
"Zero Tolerance|No crime or law breaking big or small will be overlooked");


$idioms = "";
$title = "";
$collection = array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","y","z");
$rand = $$collection[rand(0,count($collection)-1)];
$meaning = $rand[rand(0,count($rand)-1)];
$Idioms_meaning = explode("|",$meaning);
if(count($Idioms_meaning)==2){
	$idioms = "<p class=\"qword\">".$Idioms_meaning[0]."</p><p class=\"qdesc\">".$Idioms_meaning[1]."</p>";
	$title = $Idioms_meaning[0];
}
echo $idioms;
?>