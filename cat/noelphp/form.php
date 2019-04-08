<?php 
require ('functions.php');
require ('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$pdo = new PDO(DSN, USER, PASS);
	$name = $_POST['bierename'];
	$price = $_POST['price'];
	$url = $_POST['url'];
	$description = $_POST['description'];
	$degres = $_POST['degres'];
	$unitaire = $_POST['unitaire'];
	$caisse = $_POST['caisse'];
	$fut = $_POST['fut'];
	$error = inputVerify($name,$price,$url,$description,$degres,$unitaire,$caisse,$fut);
	if (empty($error)) {
		addArticle($pdo,$name,$price,$url,$description,$degres,$unitaire,$caisse,$fut);
		echo "ok";
	}
}
?>
	<h1 class="text-center"> Formulaire ajout de bière </h1>
	<form method="POST">		
				<div>
					<label for="tittle">Titre :</label><br/>
					<input value="<?php if (isset($name)) echo $name?>" type="text"  id="tittle" name="bierename"><br/>
				</div>
					<?php if (isset($error["Name"])) echo $error["Name"]?>
				<div>
					<label for="price">Prix :</label><br/>
					<input value="<?php if (isset($price)) echo $price?>" id="price" name="price">
				</div>
					<?php if (isset($error["Price"])) echo $error["Price"]?>
				<div>
					<label for="image">URL image :</label><br/>
					<input value ="<?php if (isset($url)) echo $url?>" type="text" id="URL" name="url"><br/>
				</div>
					<?php if (isset($error["Url"])) echo $error["Url"]?>
				<div>
					<label for="description">Description :</label><br/>
					<textarea id="description" name="description" rows="8" cols="50"><?php if (isset($description)) echo $description?></textarea>
				</div>
				<?php if (isset($error["Description"])) echo $error["Description"]?>
				<div>
				<label for="note">Note :</label><br/>
				<select id="note" name="note">
					<option>1/5</option>
					<option>2/5</option>
					<option>3/5</option>
					<option>4/5</option>
					<option>5/5</option>
				</select>
			</div>
			<div>
				<label for="gout">Gout :</label><br>
				<select id="gout" name="gout">
					<option>1/2</option>
					<option>2/2</option>
				</select>	
			</div>
			<div>
				<label for="amertume">Amertume :</label><br>
				<select id="amertume" name="amertume">
					<option>1/2</option>
					<option>2/2</option>
				</select>	
			</div>			 
			<div>
				<label for="degres">Degres :</label><br/>
				<input value="<?php if(isset($degres)) echo $degres?>" id="degres" name="degres" placeholder="%">
			</div>
				<?php if (isset($error["Degres"])) echo $error["Degres"]?>
			<div>
				<label for="unitaire">Prix unitaire :</label><br/>
				<input value="<?php if (isset($unitaire)) echo $unitaire?>" id="unitaire" name="unitaire" >
			</div>
				<?php if (isset($error["Unitaire"])) echo $error["Unitaire"]?>
			<div>
				<label for="caisse">Prix caisse :</label><br/>
				<input value="<?php if (isset($caisse)) echo $caisse?>" id="caisse" name="caisse" placeholder="€">
			</div>
				<?php if (isset($error["Caisse"])) echo $error["Caisse"]?>
			<div>
				<label for="fut">Prix fût :</label><br/>
				<input value="<?php if (isset($fut)) echo $fut?>" id="fut" name="fut" placeholder="€">
			</div>
				<?php if (isset($error["Fut"])) echo $error["Fut"]?>
			<div><br/>
				<button type="submit">submit</button>
			</div>
	</form>
