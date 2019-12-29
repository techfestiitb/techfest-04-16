<?php

				
		$fh=fopen("regnum.txt",'r');
		$contents=file("ids.txt");
				
		for ($i=0;$i<count($contents);$i++)
		{
			$tmp=explode("\n",$contents[$i]);
			$contents[$i]=$tmp[0];
			$contents[$i]=strtolower($contents[$i]);
			echo $contents[$i]."<br>";
			
			
		}
		
		
		
		
		
		
		
		
		
		?>