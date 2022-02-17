
// Zaczynamy z pozornie pustym dokumentem, zeby ukazac wszystko po chwili

$( "html").css(

	"opacity", 
	"0"
	
);



$(document).ready(function()
{
	
	
	// Przygotowanie obcych cial do wszczepienia w konkretny DOM
	
	// Uwaga: nie pisac rekursywnego load
	
	$("#indexAddon").load("http://qvx.cba.pl/indexAddon.html");
		
    $("#spisTresci").load("spis.html"); 
	
	$("#krystian").load("http://qvx.cba.pl/krystian.html"); 

	
	$("#przyjaciele").load("http://qvx.cba.pl/przyjaciele.html"); 
	
	
	$("#nazwyLiter").load("http://qvx.cba.pl/letters_digraphs.html");

	
	
	
	
	
	
	// Oto ukazanie tresci calego dokumentu
	
	$( "html" ).fadeTo(
	
		600, 
		1
	);

	/*
	
	//// Wystepuje tzw. GLITCH 
	
	// Kolejne wygaszenie (SZYBKIE) tresci dokumentu po kliknieciu linka
	$( window ).on( "hashchange" ,
		function(e) 
		{
			
			$( "html" ).fadeTo(
			
				150, 
				0
			);

		}
	);
	
	*/
	
	
	// Press to show a table below
	$ ("#krystianButton") .click ( function () {
	
	// Callback is hiding the button
		$ ( "#krystian") .slideDown ( 1000 , function () {
		
			$ ( "#krystianButton") .slideUp() ;
		
		} ) ;
		
	
	} ) ;
		

});

