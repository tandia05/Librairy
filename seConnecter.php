<?php
include 'includes/connexion_db.php';
include "includes/header.php"
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="formul">
	<h2 id="tformul">Etes-vous inscrit ?</h2>
		<div id="seconnecter">
			<h3 id="tseconnecter">Se connecter :</h3>
			<br>
			<br>
			<br>
			 <form action="" method="POST">
				<table style="width: 45%; height: 45%;">  
				 <tr>
				     <td ><strong>Email:  </strong></td>
				  	 <td> <input type="email" placeholder="Saisir votre email" name="email"> </td>
			   	</tr>
				<tr>
				<td><strong> Mot de passe: </strong> </td>
				<td> <input type="password" placeholder="Saisir votre mot de passe" name="pass"> </td>
				</tr>
				<tr>
					<td><strong> Administrateur</strong></td>
				    <td> <input type="checkbox" name="admin"> </td>
				</tr>
				   	<td><input type="submit" name="" value="connecter"></td>
				</table>
	  		 </form>
		</div>

		<?php

		if(isset($_POST['email']) && isset($_POST['pass']))
		{
			$email = $_POST['email'];
			$pass = $_POST['pass'];

			$db = connect();
			$query = $db->prepare('SELECT * FROM user WHERE 
				email = :email AND  motdepasse = :pass');
			$query->execute(array(
									':email' 		=>  $email,
									':pass'			=>  $pass));
			$res = $query->fetch();
			
			if($res) 
			{
				//$_SESSION['user'] = $result;
				
				header('location:menu.php');
			}
			else
			{
				echo('Utilisateu/trice inconnu(e)');
			}

		}
	else
		{
			echo('provlemes');
		}

		?>

		<div id="sinscrire">
			<h1 id="tsinscrire">S'inscrire :</h1>
			 <form action="seConnecter.php" method="POST">
				<table>
			   	 <tr>
				     <td><strong>Nom: </strong></td>
				  	 <td> <input type="text" placeholder="Saisir votre nom" name="nom"> </td>
			   	</tr>
			   	 <tr>
				     <td ><strong> Prenom: </strong></td>
				  	 <td> <input type="text" placeholder="Saisir votre prenom" name="prenom"> </td>
			   	</tr>
			   	<tr>
				     <td ><strong>Adresse: </strong></td>
				  	 <td> <input type="text" placeholder="Saisir votre adresse" name="adresse"> </td>
			   	</tr>
			   	 <tr>
				     <td><strong> Email: </strong></td>
				  	 <td> <input type="email" placeholder="Saisir votre adresse" name="email"> </td>
			   	</tr>
				<tr>
					<td><strong> Mot de passe: </strong> </td>
					<td> <input type="password" placeholder="Saisir votre mot de passe" name="pass"> </td>
				</tr> 
				<td><input type="submit" name="valider" value="Sinscrire"></td>
				     
				</table>
	  		 </form>
		</div>
	</div>
</body>
</html>
<?php

if (isset($_POST['valider']))
	{
		$db = connect();
		$query = $db->prepare(
						'INSERT INTO user (nom,prenom,adresse,email,motdepasse)
						VALUES (:nom,:prenom,:adresse,:email,:pass)');
		$query->execute(array(
								'nom' 			=> $_POST['nom'],
								'prenom' 		=> $_POST['prenom'],
								'adresse' 		=> $_POST['adresse'],
								'email' 		=> $_POST['email'],
								'motdepasse' 	=> $_POST['pass']
								));
		

		
	}
	else
	{
		
	}


?>






<?php include "includes/footer.php" ?>