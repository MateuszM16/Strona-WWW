<!DOCTYPE HTML>

<HTML lang="pl">
<HEAD>

	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="favicon/favicon-3x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="favicon/manifest.json">
	<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="theme-color" content="#ffffff">

	<LINK rel="stylesheet" href="style.css" type="text/css" />
	
	<script src="Game/TemplateData/UnityProgress.js"></script>
	
	<?php include ('skrypty/odwiedziny.php'); ?>
	<?php include('skrypty/timer.php'); ?>
	
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
			<A href="1.php"> <DIV class="opcja">Zainteresowania<DIV class="kropki"></DIV></DIV> </A>
			<A href="2.php"> <DIV class="opcja">Szkoła<DIV class="kropki"></DIV></DIV> </A>
			<A href="4.php"> <DIV class="opcja">Gry<DIV class="kropki"></DIV></DIV> </A>
			<A href="5.php"> <DIV class="opcja">Wakacje<DIV class="kropki"></DIV></DIV> </A>
			<DIV style="clear:both;"></DIV>
		</DIV>
		
		<DIV id="content">
			
			<DIV id="tytul">Gra... "The best game"</DIV>
			
			</BR>
			
		<div class="template-wrap clear" >
		  <canvas class="emscripten" id="canvas" oncontextmenu="event.preventDefault()" height="600px" width="900px"></canvas>
		  <br><br>
		  <div class="logo"></div>
		  <div class="fullscreen"><img src="Game/TemplateData/fullscreen.png" width="38" height="38" alt="Fullscreen" title="Fullscreen" onclick="SetFullscreen(1);" /></div>
		</div>
			<script type='text/javascript'>
		    var Module = {
			TOTAL_MEMORY: 268435456,
			errorhandler: null,		
			compatibilitycheck: null,
			backgroundColor: "#404040",
			splashStyle: "Light",
			dataUrl: "Game/Release/Game.data",
			codeUrl: "Game/Release/Game.js",
			asmUrl: "Game/Release/Game.asm.js",
			memUrl: "Game/Release/Game.mem",
		  };
		</script>
		<script src="Game/Release/UnityLoader.js"></script>
		
		</BR>

		Jeśli gra nie działa może to wynikać z braku wtyczki <A href ="https://ssl-webplayer.unity3d.com/download_webplayer-3.x/UnityWebPlayer64.exe?_ga=1.80946708.2049100968.1492883017"> "Unity Web Player" </A>.
		Jeśli gra nadal nie działa po zainstalowaniu wtyczki możliwe, że twoja przeglądarka (tak jak Google Chrome) nie obsługują potrzebnej wtyczki.
			
		</DIV>
		
		<DIV id="stopka">
			<DIV id="tekst">
				STRONA O MNIE!  WSZELKIE PRAWA ZASTRZEŻONE!  
			</DIV>
			
			<DIV id="odwiedziny">
				Liczba odwiedzi: <? include ('licz.txt'); ?>
			</DIV>
			
			<DIV id="online">
				Online: <? include("skrypty/online.php"); ?>
			</DIV>
			
			<DIV id="zegar">
			</DIV>
			
			<DIV style="clear:both;"</DIV>
		
			
		</DIV>
	
	
	</DIV>


</BODY>
</HTML>