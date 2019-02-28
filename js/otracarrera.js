function Otracarrera(){
	switch(document.forms[0].carreras.selectedIndex){
		case 0:
				document.forms[0].otracarrera.style.display="none";
				break;
		case 1:
				document.forms[0].otracarrera.style.display="block";
				
				break;

	}
}