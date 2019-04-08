<?php

function inputVerify($name,$price,$url,$description,$degres,$unitaire,$caisse,$fut) {
	$error= [];
	if (empty($name) && isset($name)) {
		$error["Name"] = "Il faut mettre un nom";	 // j'ajoute Name dans mon tableau $error 
	}
	if (!filter_var($price, FILTER_VALIDATE_FLOAT))  {
		$error["Price"] = "Veuillez indiquez le prix";
	}
	if (!filter_var($url, FILTER_VALIDATE_URL)) {
		$error["Url"] = "Veuillez mettre un URL valide";
	}
	if (empty($description)) {
		$error["Description"] = "Il faut mettre une description";		
	}
	if (!filter_var($degres, FILTER_VALIDATE_FLOAT))  {
		$error["Degres"] = "Veuillez mettre le degres";
	}
	if (!filter_var($unitaire, FILTER_VALIDATE_FLOAT))  {
		$error["Unitaire"] = "Veuillez indiquez le prix";
	}
	if (!filter_var($caisse, FILTER_VALIDATE_FLOAT))  {
		$error["Caisse"] = "Veuillez indiquez le prix";
	}
	if (!filter_var($fut, FILTER_VALIDATE_FLOAT))  { 
		$error["Fut"] = "Veuillez indiquez le prix";
	}
	return $error;
}
	

/* Je me connecte à la base de données
	Puis j'insère l'article dans ma TABLE articles
*/

function addArticle($pdo, $name, $price, $url, $description,$degres,$unitaire,$caisse,$fut) {
	$insert = "INSERT INTO articles(titre,prix,image,descriptif,note,degres,prixunitaire,prixcaisse,prixfut) VALUES (:name,:price,:url,:description,:note,:degres,:unitaire,:caisse,:fut);";
	$prep = $pdo->prepare($insert);

	$prep->bindValue(':name',$name, PDO::PARAM_STR);
	$prep->bindValue(':price',$price, PDO::PARAM_INT);
	$prep->bindValue(':url',$url, PDO::PARAM_STR);
	$prep->bindValue(':description',$description, PDO::PARAM_STR);
	$prep->bindValue(':note',$degres, PDO::PARAM_INT);
	$prep->bindValue(':degres',$degres, PDO::PARAM_INT);
	$prep->bindValue(':unitaire',$unitaire, PDO::PARAM_INT);
	$prep->bindValue(':caisse',$caisse, PDO::PARAM_INT);
	$prep->bindValue(':fut',$fut, PDO::PARAM_INT);
	$res = $prep->execute();
	var_dump($res);
}


