Modifier la 2�me ligne du fichier .php pour modifier l'acc�s � la base de donn�e MYSQL

Voici le SQL de la table user :


CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
)


Compte de test : eliott:eliott

