function countdown_clock(year, month, day, hour, minute, format)
         {
         html_code = '<div id="countdown"></div>';
         
         document.write(html_code);
         
         //countdown(year, month, day, hour, minute, format);                
         }
         
function countdown(year, month, day, hour, minute, format)
         {
         Today = new Date();
         Todays_Year = Today.getYear();
		if(Todays_Year<106)
			Todays_Year=Todays_Year-100;
		else
			Todays_Year=Todays_Year-2000;
         Todays_Month = Today.getMonth() + 1;                  
         
         //Convert both today's date and the target date into miliseconds.                           
         Todays_Date = (new Date(Todays_Year, Todays_Month, Today.getDate(), 
                                 Today.getHours(), Today.getMinutes(), Today.getSeconds())).getTime();                                 
         Target_Date = (new Date(year, month, day, hour, minute, 00)).getTime();                  
         
         //Find their difference, and convert that into seconds.                  
         Time_Left = Math.round((Target_Date - Todays_Date) / 1000);
         
         if(Time_Left < 0)
            Time_Left = 0;
         
                    //More datailed.
                    days = Math.floor(Time_Left / (60 * 60 * 24));
                    Time_Left %= (60 * 60 * 24);
                    hours = Math.floor(Time_Left / (60 * 60));
                    Time_Left %= (60 * 60);
                    minutes = Math.floor(Time_Left / 60);
                    Time_Left %= 60;
                    seconds = Time_Left;
                    hp='';
		    mp='';
		    sp='';
		    if (hours<10)
			hp='0';
		    if (minutes<10)
			mp='0';			
		    if (seconds<10)
			sp='0';
                    dps = 's'; hps = 's'; mps = 's'; sps = 's';
                    //ps is short for plural suffix.
                    if(days == 1) dps ='';
                    if(hours == 1) hps ='';
                    if(minutes == 1) mps ='';
                    if(seconds == 1) sps ='';

                         document.getElementById("countdown").innerHTML = "<font size=4>"+days+"</font>" + ' day' + dps + ' ' + "<font size=2.8>"+ hp + hours + ":" + mp + minutes + ":" + sp +seconds + " to go";
                    //document.getElementById("countdown").innerHTML += "<img src=clock.gif>";
               
                

         //Recursive call, keeps the clock ticking.
         setTimeout('countdown(' + year + ',' + month + ',' + day + ',' + hour + ',' + minute + ',' + format + ');', 1000);
         }
