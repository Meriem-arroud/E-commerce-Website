
CREATE DATABASE IF NOT EXISTS commerce;
  USE commerce;
/* Creation de la table form */
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`(
           id INT UNSIGNED AUTO_INCREMENT ,
           username VARCHAR(30)NOT NULL,
           Email VARCHAR(30) NOT NULL,
           Pass VARCHAR(30) NOT NULL,
           PRIMARY key(id)
);

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
categorie varchar(50) PRIMARY KEY
);

INSERT INTO `categories` ( `categorie` ) VALUES('Pants');
INSERT INTO `categories` ( `categorie` ) VALUES ('Dresses');
INSERT INTO `categories` ( `categorie` ) VALUES ('Bags');
INSERT INTO `categories` ( `categorie` ) VALUES ('Shoes');
INSERT INTO `categories` ( `categorie` ) VALUES ('Accessories');
INSERT INTO `categories` ( `categorie` ) VALUES ('Scarves');

DROP TABLE IF EXISTS `panier`;
CREATE TABLE `panier`(
	  prodId INT UNSIGNED,
    userId INT UNSIGNED,
    qte  INT UNSIGNED,
    PRIMARY key(`userId`,`prodId`)
);


DROP TABLE IF EXISTS `produit`; 
CREATE TABLE `produit` (
id INT UNSIGNED AUTO_INCREMENT ,
nom_prod varchar(50),
categorie varchar(50) references categories(categorie), 
prix INT,
photo varchar(50),
PRIMARY KEY  (`id`,`nom_prod`)
);

/* Insertion d'un user */
INSERT INTO `user` (`username` ,`Email`,`Pass`) VALUES ('user123','user.123@gmail.com','user123');

/* Insertion des pantalons */
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('pant1','Pants',21,'pantalon/p1.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('pant2','Pants',19,'pantalon/p2.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('pant3','Pants',20,'pantalon/p3.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('pant4','Pants',18,'pantalon/p4.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('pant5','Pants',22,'pantalon/p5.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('pant6','Pants',23,'pantalon/p6.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('pant7','Pants',17,'pantalon/p7.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('pant8','Pants',18,'pantalon/p8.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('pant9','Pants',25,'pantalon/p9.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('pant10','Pants',22,'pantalon/p10.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('pant11','Pants',19,'pantalon/p11.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('pant12','Pants',20,'pantalon/p12.png');

/* Insertion des robes */
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('robe1','Dresses',38,'robes/r1.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('robe2','Dresses',34,'robes/r2.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('robe3','Dresses',40,'robes/r3.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('robe4','Dresses',52,'robes/r4.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('robe5','Dresses',32,'robes/r5.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('robe6','Dresses',45,'robes/r6.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('robe7','Dresses',31,'robes/r7.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('robe8','Dresses',47,'robes/r8.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('robe9','Dresses',29,'robes/r9.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('robe10','Dresses',29,'robes/r10.jpg');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('robe11','Dresses',32,'robes/r11.jpg');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('robe12','Dresses',32,'robes/r12.png');


/* Insertion des sacs */
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('sac1','Bags',26,'sac/sac1.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('sac2','Bags',29,'sac/sac2.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('sac3','Bags',24,'sac/sac3.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('sac4','Bags',32,'sac/sac4.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('sac5','Bags',38,'sac/sac5.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('sac6','Bags',35,'sac/sac6.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('sac7','Bags',27,'sac/sac7.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('sac8','Bags',34,'sac/sac8.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('sac9','Bags',29,'sac/sac9.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('sac10','Bags',22,'sac/sac10.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('sac11','Bags',27,'sac/sac11.png');
INSERT INTO `produit` (`nom_prod` ,`categorie`,`prix` , `photo` ) VALUES ('sac12','Bags',34,'sac/sac12.png');

/* Insertion des Chaussures */
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('chaussure1','Shoes',26,'chaus/c1.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('chaussure2','Shoes',30,'chaus/c2.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('chaussure3','Shoes',18,'chaus/c3.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('chaussure4','Shoes',19,'chaus/c4.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('chaussure5','Shoes',32,'chaus/c5.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('chaussure6','Shoes',42,'chaus/c6.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('chaussure7','Shoes',29,'chaus/c7.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('chaussure8','Shoes',31,'chaus/c8.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('chaussure9','Shoes',28,'chaus/c9.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('chaussure10','Shoes',29,'chaus/c10.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('chaussure11','Shoes',26,'chaus/c11.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('chaussure12','Shoes',26,'chaus/c12.png');

/* Insertion des Accessoires */
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('accessoire1','Accessories',32,'acces/a1.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('accessoire2','Accessories',18,'acces/a2.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('accessoire3','Accessories',12,'acces/a3.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('accessoire4','Accessories',10,'acces/a4.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('accessoire5','Accessories',10,'acces/a5.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('accessoire6','Accessories',6,'acces/a6.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('accessoire7','Accessories',26,'acces/a7.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('accessoire8','Accessories',12,'acces/a8.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('accessoire9','Accessories',7,'acces/a9.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('accessoire10','Accessories',8,'acces/a10.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('accessoire11','Accessories',4,'acces/a11.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('accessoire12','Accessories',29,'acces/a12.png');


/* Insertion des foulards */
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('foulard1','Scarves',14,'foulard/f1.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('foulard2','Scarves',13,'foulard/f2.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('foulard3','Scarves',13,'foulard/f3.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('foulard4','Scarves',15,'foulard/f4.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('foulard5','Scarves',14,'foulard/f5.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('foulard6','Scarves',12,'foulard/f6.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('foulard7','Scarves',13,'foulard/f7.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('foulard8','Scarves',14,'foulard/f8.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('foulard9','Scarves',13,'foulard/f9.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('foulard10','Scarves',12,'foulard/f10.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('foulard11','Scarves',13,'foulard/f11.png');
INSERT INTO `produit` (`nom_prod`,`categorie`,`prix` , `photo` ) VALUES ('foulard12','Scarves',12,'foulard/f12.png');