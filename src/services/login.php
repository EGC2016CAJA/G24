<?php

/**
 * Funcion que nos indica si el usuario de la sesión actual está logueado como administrador
 */
function isLoguedAsAdmin($token){
	$tokenDivido = split(':', $token);
	$nameUser = $tokenDivido[0];
	// Construyendo las URLs para corroborar token
	$url = 'http://auth-egc.azurewebsites.net/api/checkToken?token='.$token;
	$urlGetUser = 'http://auth-egc.azurewebsites.net/api/getUser?username='.$nameUser;
	// Cogiendo los datos
	$string = file_get_contents($url);
	$stringUser = file_get_contents($urlGetUser);
	// Decodificando
	$data = json_decode($string,true);
	$dataUser = json_decode($stringUser,true);
	// Cogiendo el atributo concreto que deseo
	$valido = $data['valid']; // Si valido es 1 es que es true.
	$isAdmin = $dataUser['Is_admin']; //Si isAdmin es 1 es que es true.
	
	if($valido == 1 and $isAdmin == 1){
		//setcookie("nameUser", $nameUser, time()+604800, '/'); //cookie 7 dias
		//setcookie("passUser", $passUser, time()+604800, '/'); //cookie 7 dias
		return true;
	}else{
		return false;
	}
}

function isLogued($token){
	$tokenDivido = split(':', $token);
	$url = 'http://auth-egc.azurewebsites.net/api/checkToken?token='.$token;
	$string = file_get_contents($url);
	$data = json_decode($string,true);
	$valido = $data['valid'];
	if($valido == 1){
		return true;
	}
}
?>
