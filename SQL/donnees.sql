INSERT INTO `categories`(`idCategorie`, `nomCategorie`, `ordonnanceCategorie`) VALUES (NULL,"Non renseigné","Non renseigné")
INSERT INTO `categories`(`idCategorie`, `nomCategorie`, `ordonnanceCategorie`) VALUES (NULL,"Antiseptique","Non")
INSERT INTO `categories`(`idCategorie`, `nomCategorie`, `ordonnanceCategorie`) VALUES (NULL,"Antibiotiques","Oui")
INSERT INTO `categories`(`idCategorie`, `nomCategorie`, `ordonnanceCategorie`) VALUES (NULL,"Antiviraux","Non")
INSERT INTO `categories`(`idCategorie`, `nomCategorie`, `ordonnanceCategorie`) VALUES (NULL,"Cardiologie","Oui")
INSERT INTO `categories`(`idCategorie`, `nomCategorie`, `ordonnanceCategorie`) VALUES (NULL,"Anti-inflammatoire","Non")

INSERT INTO `roles`(`idRole`, `nomRole`) VALUES (NULL,"Admin")
INSERT INTO `roles`(`idRole`, `nomRole`) VALUES (NULL,"User")

INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Depôt","Depôt","Depôt")
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Chambre froide","Cardiologie",1)
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Chambre froide","Cardiologie",2)
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Chambre froide","Cardiologie",3)
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Tête de Gondole","Pas de rayon spécifique",1)
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Tête de Gondole","Pas de rayon spécifique",2)
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Tête de Gondole","Pas de rayon spécifique",3)
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Zone commerciale","Rayon 1",1)
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Zone commerciale","Rayon 1",2)
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Zone commerciale","Rayon 1",3)
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Zone commerciale","Rayon 2",1)
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Zone commerciale","Rayon 2",2)
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Zone commerciale","Rayon 2",3)
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Zone commerciale","Rayon 3",1)
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Zone commerciale","Rayon 3",2)
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Zone commerciale","Rayon 3",3)

INSERT INTO `users`(`idUser`, `nomUser`, `prenomUser`, `ageUser`, `idRole`) VALUES (NULL,"Rodriguez","Alberto",35,1)
INSERT INTO `users`(`idUser`, `nomUser`, `prenomUser`, `ageUser`, `idRole`) VALUES (NULL,"Dupont","Toto",25,2)
INSERT INTO `users`(`idUser`, `nomUser`, `prenomUser`, `ageUser`, `idRole`) VALUES (NULL,"Dupont","Titi",25,2)
INSERT INTO `users`(`idUser`, `nomUser`, `prenomUser`, `ageUser`, `idRole`) VALUES (NULL,"Dupont","Tata",25,2)
INSERT INTO `users`(`idUser`, `nomUser`, `prenomUser`, `ageUser`, `idRole`) VALUES (NULL,"Rodriguez","Albertine",35,1)
                                                                                                                                                                                                           -- NOM    -- DESC      --RESTIC   --PEREMP  --PRIX    -QUANTITE  --IDCAT    --IDSTOCK                                                                               
INSERT INTO `produits`(`idProduit`, `nomProduit`, `descriptionProduit`, `restrictionProduit`, `datePeremptionProduit`, `prixProduit`, `QuantiteProduit`, `idCategorie`, `idLieuxDeStockage`) VALUES (NULL,"Doliprane","Doliprane","aucune","2020-12-30",6,2500,4,8)
INSERT INTO `produits`(`idProduit`, `nomProduit`, `descriptionProduit`, `restrictionProduit`, `datePeremptionProduit`, `prixProduit`, `QuantiteProduit`, `idCategorie`, `idLieuxDeStockage`) VALUES (NULL,"Gaviscon","desc","pas avant de dormir","2022-02-02",12,633,6,10)
INSERT INTO `produits`(`idProduit`, `nomProduit`, `descriptionProduit`, `restrictionProduit`, `datePeremptionProduit`, `prixProduit`, `QuantiteProduit`, `idCategorie`, `idLieuxDeStockage`) VALUES (NULL,"Drill","medicament pour la gorge","pas pour les bébé",2021-12-06,3.80,200,2,2)
INSERT INTO `produits`(`idProduit`, `nomProduit`, `descriptionProduit`, `restrictionProduit`, `datePeremptionProduit`, `prixProduit`, `QuantiteProduit`, `idCategorie`, `idLieuxDeStockage`) VALUES (NULL,"Spifen400","Spifen","Interdit aux femmes enceintes et enfant de moins de 10 ans","2021-11-07",12.77,300,3,9)
INSERT INTO `produits`(`idProduit`, `nomProduit`, `descriptionProduit`, `restrictionProduit`, `datePeremptionProduit`, `prixProduit`, `QuantiteProduit`, `idCategorie`, `idLieuxDeStockage`) VALUES (NULL,"paracetamol","paracetamol","aucune",2021-2-11,20,60,1,1)
INSERT INTO `produits`(`idProduit`, `nomProduit`, `descriptionProduit`, `restrictionProduit`, `datePeremptionProduit`, `prixProduit`, `QuantiteProduit`, `idCategorie`, `idLieuxDeStockage`) VALUES (NULL,"smecta","smecta","Interdit au plus de 68 ans",2023-12-12,13,652,5,13)
INSERT INTO `produits`(`idProduit`, `nomProduit`, `descriptionProduit`, `restrictionProduit`, `datePeremptionProduit`, `prixProduit`, `QuantiteProduit`, `idCategorie`, `idLieuxDeStockage`) VALUES (NULL,"spashon","spashon","que pour les filles",2022-06-08,6.80,182,6,14)
