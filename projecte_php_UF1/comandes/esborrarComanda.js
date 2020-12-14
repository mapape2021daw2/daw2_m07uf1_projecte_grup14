function esbComanda() {
	// Variables locals
	var urlCodi = "http://localhost/projecte_php_UF1/comandes/esborrarComanda.php?q=";
	var metode = "DELETE";
	// Dades rebudes d'HTML
	var nomComanda = document.forms['frmEsbCom'].elements["nomCom"].value;
	// Enviament dades a PHP
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (xhttp.readyState == 4) { 
			if ((xhttp.status == 200) || (xhttp.status == 403) || (xhttp.status == 404) || (xhttp.status == 405)){ 
				document.getElementById("resp").innerHTML = xhttp.responseText;
			}
		}
	}
	xhttp.open(metode,urlCodi + nomComanda,true);
	xhttp.send();				
}

function netForm() {
	document.getElementById("resp").innerHTML ="";
	document.forms['frmEsbCom'].elements["nomCom"].value ="";
	location.reload();
}