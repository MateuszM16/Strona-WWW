<!DOCTYPE HTML>

<HTML lang="pl">
<HEAD>

	<LINK rel="stylesheet" href="style.css" type="text/css" />
	
	<? include('skrypty/timer.php'); ?>
	
	<META charset="utf-8"/>
	<TITLE>STRONA O MNIE</TITLE>
	<META name="description" content="Jest to strona o mnie. W krótki sposób opisuje siebie, swoje zainteresowania oraz plany na przyszłość"/>
	<META name="keywords" content="Mateusz, Murawski, Strona, Strona o mnie"/>
	<META http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<META name="author" content="MATEUSZ MURAWSKI"/>

</HEAD>

<body onload="odliczanie();">

	<DIV id="strona">
	
		<DIV id="logo">	
		STRONA O MNIE :)	
		</DIV>
		
		<DIV id="menu">
			<A href="index.php"> <DIV class="opcja">Strona Główna</DIV> </A>
			<A href="1.php"> <DIV class="opcja">Zainteresowania</DIV> </A>
			<A href="2.php"> <DIV class="opcja">Szkoła</DIV> </A>
			<A href="3.php"> <DIV class="opcja">Plany na przyszłość</DIV> </A>
			<A href="4.php"> <DIV class="opcja">Gry</DIV> </A>
			<A href="5.php"> <DIV class="opcja">Wakacje</DIV> </A>
			<DIV style="clear:both;"></DIV>
		</DIV>
		
		<DIV id="content">
			
			<DIV id="tytul">KRÓTKO O MNIE...</DIV>
			
			</BR>
			
			<DIV id="zawartosccontent">
				Mam na imię Mateusz Murawski. Mieszkam w nie dużej miejscowości w okolciach Garwolina. W tym roku skończe 17 lat. Obecnie chodzę do I klasy informatycznej.
				Mam bardzo różne zainteresowania począwszy od informatyki, właśnie dla tego wybrałem taki kierunek w szkole, kończywszy
				aż na sporcie. Lubię bardzo grać w piłke nożną, tenis stołowy oraz biegać. Interesuję się także programowaniem z którym
				chciał bym związać swoją przyszłą karierę zawodową. Uważam się ogólnie za dobrego ucznia, który posiada dość dobre oceny.
				Jestem osobą pracowitą, sumieną a przedwszystkim miłą i uczciwą.
			</DIV>
			
			<DIV id="zdj">
				<IMG src="img/mojezdj.jpg" width="400" height="370"/>
			</DIV>
			
			<DIV style="clear:both;"></DIV>
			
		</DIV>
		
		<DIV id="stopka">
			<DIV id="tekst">
				STRONA O MNIE!  WSZELKIE PRAWA ZASTRZEŻONE! 
			</DIV>
			
			<DIV id="zegar">
			</DIV>
			
			<DIV style="clear:both;"</DIV>
		
			
		</DIV>
	
	
	</DIV>


</BODY>
</HTML>