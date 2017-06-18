<?php
include 'includes/connexion_db.php';
session_start();

?>

 <html>
 <title></title>
 <head>
 	 <link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="stylesheet/biblio.css">
 </head>
 <body>
<center> <img src="images/header.jpg" alt="a" width="961" height="284" /> 

<div style="align-self: center;">
 <form action="" method="POST">
				<table style="width: 25%; height: 25%;">  
				 <tr>
				     <td ><strong>Email: </strong></td>
				  	 <td> <input type="email" placeholder="Saisir votre email" name="email"s> </td>
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
		</center>

		<?php
		if(isset($_POST['connecter']))
		{
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
						$_SESSION['user'] = $res;
						
						header('redirect:menu.php');
					}
					else
					{
						echo('Utilisateu/trice inconnu(e)');
					}

				}
			else
				{
					echo 'provlemes';
				}
		}
		

		?>

</body>
</hmtl>