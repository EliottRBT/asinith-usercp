<?php
try
{
    include('bdd.php');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$reponse = $bdd->query('SELECT * FROM user');
while ($donnees = $reponse->fetch())
{
?>
    
Votre nom d'utilisateur est <?php echo $donnees['username']; ?>

<?php } ?>