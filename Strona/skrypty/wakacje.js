function wakacje()
	{
		var dzis = new Date();
		var dzisx = dzis.getTime();
	
		var wydarzenie = new Date(2017,5,23,12);
		var wydarzeniex = wydarzenie.getTime();
		
		var czas = wydarzeniex - dzisx;
		
		var sekundy = czas/1000;
		var minuty = sekundy/60;
		var godziny = minuty/60;
		var dni = godziny/24;
		
		var s = Math.floor(sekundy  % 60);    
				if(s<10) s = "0"+s;
			
        var min = Math.floor(minuty % 60); 
				if(min<10) min = "0"+min;
				
        var h = Math.floor(godziny % 24);
				if(h<10) h = "0"+h;
				
		var d = Math.floor(dni);
		

		document.getElementById("dowakacji").innerHTML = 
		 d+" dni "+h+" godzin "+min+ " minut "+ s + " sekund ";
		 
		 setTimeout("wakacje()",1000);
	
	}