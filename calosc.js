// To sie przyda pod koniec
var cleanup =function(){
	
	//// Przestarzale rozwiazanie wymagalo podwojnego wywolania w cleanup
	//$("#spisTresci").remove();
	
	$(".indexAddon").remove();
	$(".spisTresci").remove();
	
	
	
	$(".switchLanguage").not(":first").remove();
	
	// Zaleznie od potrzeb mozna przelaczyc na true - W CELU ODSWIEZENIA EBOOKA
	
	var ebook= false ;
	
	if ( ebook )
	{
		$(".switchLanguage").remove();
	}
	
	
	
} ;









var cleanup2 = function () {
	
	cleanup() ;
	cleanup() ;
	
} ;

$(document).ready(function()
{

	

	// Wstrzykiwanie obcych dokumentow do biezacego DOM

	$("#index").load("index.html"); 
	
	

	$("#two").load("2.html"); 
	
	

	$("#three").load("3.html"); 
	
	

	$("#four").load("4.html"); 
	
	

	$("#five").load("5.html"); 
	
	

	$("#six").load("6.html"); 
	
	

	$("#seven").load("7b.html"); 
	
	
	$("#eight").load("8.html"); 
	
	
	$("#ending").load("footer.html"); 
	
	// Zakladam, ze po 2 sekundach wszystko powyzej gotowe
	setTimeout( cleanup2, 2000);
	// Wywolanie funkcji z argumentu NIE zezwala podac nawiasu jej argumentow
	
	// Zmiana tytulu na wlasciwy z takiego,
	// ktory narzucil ostatnio doczytany fragment
	document.title = 'Propozycja zmian we współczesnej ortografii polskiej';
	
}

) ;