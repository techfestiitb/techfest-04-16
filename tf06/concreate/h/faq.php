	<?php
function echo_content($str)
{
	$l=fopen($str,"r");
	$arr=file($str);
	$num=count($arr);
	for($i=0;$i<$num;$i++)
	{
		echo $arr[$i];
	}
	return;
}

echo_content("header.txt");
echo_content("side_h.txt");
echo_content("side_update.txt");
?>
<div id="content">
<h1 id="toptext">H - FAQ</h1>
<p>1) What is the maximum thickness of the helipad?</p>

<p><strong>Ans: </strong>There is no limit on the thickness of the helipad.</p>

<br>
<p>2) What are the registration charges and information regarding the material required.</p>

<p><strong>Ans: </strong>There are no registration charges for this event and we are not providing any material for this competition. All the material has to be self arranged by the teams.</p>

<br>
<p>3) Are plastic threads allowed?</p>

<p><strong>Ans: </strong>Yes you can use any type of thread but its diameter should be less than 1mm. And it should be flexible like any other thread, however, use of metal wires is not allowed.</p>
<br>
<p>4) Do we have to make the helipad pad during Techfest or we can make it before coming to Techfest?</p>

<p><strong>Ans: </strong><strong>H</strong> is not an on the spot competition. You have to complete your structure fabrication before coming to Techfest.</p>
<br>
<p>5) In the competition H, will the 30kgs load will be distributed on the 25cm dia circle(marked as H) or will it be a point load?</p>

<p><strong>Ans: </strong>Standard 10 kg hexagonal weights of longest diagonal 18cm and height 9 cm will be used for loading the helipad. For further details click <a href="http://www.techfest.org/concreate/h/index.php#test">here</a>.</p>
<br>
<p>6)Do we need to submit a written summary of the design of the helipad ?</p>

<p><strong>Ans: </strong>No, there is no need of any paper submission.</p>

<br>
<p>7) Are there any restrictions on the number of Popsicle sticks to be used and the quantity of material for the structure?</p>

<p><strong>Ans: </strong>No there is no restrictions on the number of Popsicle sticks to be used or the weight of your structure.</p>

<br>
<p>8) Can the adhesive be used to join the sticks throughout the length (or width)?</p>

<p><strong>Ans: </strong>Yes, the adhesive can be used to join the sticks throughout the length or width..</p>

<br>
<p>9) Can any modifications be made in the sticks-cutting it to some suitable shape and size and making holes, if necessary?</p>

<p><strong>Ans: </strong>Yes, any kind of modification can be made in the sticks.</p>

<br>
<p>10) Can adhesive be applied to the threads?</p>

<p><strong>Ans: </strong>Yes, adhesives can be applied to the threads.</p>

<br>
<p>11) Strings can only be used as a structural member and cannot be used to reinforce other members.  Please clarify??</p>

<p><strong>Ans: </strong>This statement means that you  can use string to strengthen your structure by tying it between any two points of your structure which are considerably apart but you cannot tie the string at a particular point several times  to increase  strength  at that particular point  say a joint for example.</p>
<br>

<p>12)  What material should be used to build continuous flat surface of Helipad on which the loading will be done.</p>

<p><strong>Ans: </strong>A fairly continuous surface can be built using Popsicle sticks; however limited discontinuities which are unavoidable because of the use of Popsicle sticks will not be penalized.</p>
<br>
<p>13) Do we have to build the board shown in the Plot Specifications also?</p>
<p><strong>Ans: </strong>No, the board shown in the Plot Specifications will be provided during the competition and your structure will be clamped on the board for testing.</p>
<br>

<p>14) Can the structure extend below the pillars ?</p>
<p><strong>Ans: </strong>Yes, the structure can extend below the pillars without touching the red area on the pillars or the base.</p>

<br><br>
<br>

For queries contact:<br><br>
Aditya Vikram Singh<br>
Manager, CONCREaTE<br>
<a href="http://www.techfest.org/mail.php?email=adityavikram@techfest.org" target="_blank">adityavikram@techfest.org</a><br>
Ph. +91-98207 54704<br>
<br><br><br><br><br><br><br>
</div>
  
<?
echo_content("footer.txt");
?>
