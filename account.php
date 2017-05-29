<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=db_asinith;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM user');
while ($donnees = $reponse->fetch())
{
?>


<html>
<h2>Welcome <?php echo $donnees['username']; ?> !</h2>
<br />
Your HWID is <?php echo $donnees ['hwid']; ?> 
<br />
<br />
<a href="logout.php">Logout</a>
</html>


<?php } ?>