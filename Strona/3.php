<!DOCTYPE HTML>

<HTML lang="pl">
<HEAD>

	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="favicon/manifest.json">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">


	<LINK rel="stylesheet" href="style.css" type="text/css" />
	
	<? include ('skrypty/odwiedziny.php'); ?>
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
		STRONA O MNIE	:)		
		</DIV>
		
		<DIV id="menu">
			<A href="index.php"> <DIV class="opcja">Strona Główna</DIV> </A>
			<A href="1.php"> <DIV class="opcja">Zainteresowania<DIV class="kropki"></DIV></DIV> </A>
			<A href="2.php"> <DIV class="opcja">Szkoła<DIV class="kropki"></DIV></DIV> </A>
			<A href="4.php"> <DIV class="opcja">Gry<DIV class="kropki"></DIV></DIV> </A>
			<A href="5.php"> <DIV class="opcja">Wakacje<DIV class="kropki"></DIV></DIV> </A>
			<DIV style="clear:both;"></DIV>
		</DIV>
		
		<DIV id="content">
			<DIV id="tytul">PLANY NA PRZYSZŁOŚĆ</DIV>			
			
			</BR>
			
			W najbliższej przyszłości najpierw planuje zdać technikum oraz dobrze napisać mature, gdyż chciałbym pójść na dobre
			studia, oczywiście chciałbym studiować informatyke. Ogólnie w przyszłości chciałbym pracować jako informatyk, a w szczególności
			jako programista w branży gier komputerowych. Taka praca była by spełnieniem moich marzeń. Obecnie sam się po woli ucze programować 
			w języku C++. Mam nadzieje, że małymi krokami dojde do poziomu, który pozwoli mi zacząć prace jako programista. Oczywiście po osiągnięciu 
			tego poziomu nie będe się zatrzymywał. lecz będe uczył się dalej aby być jeszcze lepszym.
			</BR></BR>
			
		</DIV>
		
		<DIV id="stopka">
			<DIV id="tekst">
				STRONA O MNIE!  WSZELKIE PRAWA ZASTRZEŻONE!  
			</DIV>
			
			<DIV id="odwiedziny">
				Liczba odwiedzi: <? include ('licz.txt'); ?>
			</DIV>
			
			<DIV id="online">
			</DIV>
			
			<DIV id="zegar">
			</DIV>
			
			<DIV style="clear:both;"</DIV>
		
			
		</DIV>
	
	
	</DIV>


</BODY>
</HTML>