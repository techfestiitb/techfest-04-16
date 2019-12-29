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
echo_content("side_media.txt");
echo_content("side_update.txt");
?>
 <!-- ##### Main Copy ##### -->

    <div id="content">
     <h1 id="toptext">Survivor - 26/07/04</h1> 
	



<h3>Survivor - The International Challenge</h3>



<p>IIT Bombay's annual science and technology festival, enters its eighth year in January, with Techfest 2005 scheduled from 
28th-30th January. The annual event enjoys the massive participation of over 15,000 students from over 750 colleges from all over India, 
as well as corporate executives and eminent personalities from all over the world. Dr. APJ Abdul Kalam and Kevin &quot;cyborg&quot; 
Warwick 
are just some of the notable dignitaries to have graced Techfest with their presence in the previous years. Regarded, Asia's largest fest of its kind, it hopes to maintain that image with a plethora of competitions, indulging the &quot;almost-there&quot; Einsteins and the &quot;not-there-don't-want-to-be-there&quot; John Does. The aim, clearly stated, is simply the confluence and interaction of creative minds from all over India and the world.</p>

<p>Techfest, tirelessly, upholds its reputation for showcasing unique events year after year, be it the first ever videoconferencing in India, the 
exciting soccer match between Sony Aibo robotic dogs or the 
never-before-done Navy Exhibition on land. Last year, Techfest, proudly 
took another gigantic step towards achieving its aim by hosting an 
International robotic events; again, a first ever in India.</p>

<p>In the coming year, Techfest, in its 8th rebirth, makes it foothold 
stronger with <b>&quot;Survivor&quot;</b>, the &quot;baap&quot; (definiton: father; if you happen to be one of our foreign friends) of 
all robotic challenges. The problem statement guarantees to make you go bald, because after going though it, you'll be tearing out your hair for sure!</p>

<p>The goal is to build a rugged machine, which should withstand a fall from 
a height of 1 meter from a platform onto the ground. Simple, huh? Thats 
because its only one third of the problem statement. After successfully 
jumping off the platform, the robot should then, manouver blocks onto 
marked spaces and then follow autonomously, a line drawn on the ground to its final 
destination.</p>

<p>Why, in their right frame of mind, would people design this super-robot? Well, the chance to be acknowledged &quot;the best in the world&quot;, for one, and ofcourse the astounding amount of $2500, being offered as the prize money.</p>

<p>Gear up world. Techfest is about to leave a lasting impression, literally.</p>

<p>For more details, log on to <a href="www.techfest.org">www.techfest.org</a> or shoot your doubts to <a href="mailto:survivor@techfest.org">survivor@techfest.org</a></p>




<br>      
<br>
     
	
</div>
    

  
<?
echo_content("footer.txt");
?>