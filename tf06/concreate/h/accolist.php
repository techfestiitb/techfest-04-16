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
<a name="prob"></a>
<h1> <img src="./img/h.gif" border="0"> - List of teams confirmed for accomodation</h1>
<p>&nbsp;</p>
<p><ul style="list-style-type:none; ">
<li>CH06143</li>
<li>CH06157</li>
<li>CH06190</li>
<li>CH06229</li>
<li>CH06302</li>
<li>CH06326</li>
<li>CH06380</li>
<li>CH06408</li>
<li>CH06427</li>
<li>CH06473</li>
<li>CH06491</li>
<li>CH06502</li>
<li>CH06516</li>
<li>CH06557</li>
<li>CH06558</li>
<li>CH06582</li>
<li>CH06589</li>
<li>CH06621</li>
<li>CH06631</li>
<li>CH06654</li>
<li>CH06673</li>
<li>CH06739</li>
<li>CH06750</li>
<li>CH06813</li>
<li>CH06879</li>
<li>CH06882</li>
<li>CH06889</li>
<li>CH06932</li>
<li>CH06102</li>
<li>CH06106</li>
<li>CH06110</li>
<li>CH06140</li>
<li>CH06142</li>
<li>CH06233</li>
<li>CH06240</li>
<li>CH06243</li>
<li>CH06298</li>
<li>CH06331</li>
<li>CH06336</li>
<li>CH06378</li>
<li>CH06390</li>
<li>CH06396</li>
<li>CH06414</li>
<li>CH06419</li>
<li>CH06426</li>
<li>CH06446</li>
<li>CH06457</li>
<li>CH06460</li>
<li>CH06481</li>
<li>CH06483</li>
<li>CH06554</li>
<li>CH06617</li>
<li>CH06642</li>
<li>CH06645</li>
<li>CH06666</li>
<li>CH06723</li>
<li>CH06781</li>
<li>CH06800</li>
<li>CH06831</li>
<li>CH06840</li>
<li>CH06843</li>
<li>CH06853</li>
<li>CH06862</li>
<li>CH06863</li>
<li>CH06875</li>
<li>CH06886</li>
<li>CH06887</li>
<li>CH06890</li>
<li>CH06894</li>
<li>CH06897</li>
<li>CH06916</li>
<li>CH06923</li>
<li>CH06929</li>
<li>CH06934</li>
<li>CH06957</li>
<li>CH06985</li>
<li>CH06996</li>
<li>CH061011</li>
<li>CH061017</li>
<li>CH061031</li>
</ul>

<br>
    <br>
    <br>
  
For queries see <a href="http://www.techfest.org/concreate/h/faq.php">FAQ's</a> or contact:<br>
  <br>
  Aditya Vikram Singh<br>
  Manager, CONCREaTE<br>
  <a href="http://www.techfest.org/mail.php?email=adityavikram@techfest.org" target="_blank">adityavikram@techfest.org</a><br>
  Ph. +91-98207 54704<br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  </p>
  </p>
</li>
</div>
  
<?
echo_content("footer.txt");
?>
