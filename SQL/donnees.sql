INSERT INTO `categories`(`idCategorie`, `nomCategorie`, `ordonnanceCategorie`) VALUES (NULL,"Non renseigné","Non renseigné");
INSERT INTO `categories`(`idCategorie`, `nomCategorie`, `ordonnanceCategorie`) VALUES (NULL,"Antiseptique","Non");
INSERT INTO `categories`(`idCategorie`, `nomCategorie`, `ordonnanceCategorie`) VALUES (NULL,"Antibiotiques","Oui");
INSERT INTO `categories`(`idCategorie`, `nomCategorie`, `ordonnanceCategorie`) VALUES (NULL,"Antiviraux","Non");
INSERT INTO `categories`(`idCategorie`, `nomCategorie`, `ordonnanceCategorie`) VALUES (NULL,"Cardiologie","Oui");
INSERT INTO `categories`(`idCategorie`, `nomCategorie`, `ordonnanceCategorie`) VALUES (NULL,"Anti-inflammatoire","Non");

INSERT INTO `roles`(`idRole`, `nomRole`) VALUES (NULL,"Inconnu");
INSERT INTO `roles`(`idRole`, `nomRole`) VALUES (NULL,"Admin");
INSERT INTO `roles`(`idRole`, `nomRole`) VALUES (NULL,"User");

INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Depôt","Depôt",1);
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Chambre froide","Cardiologie",1);
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Chambre froide","Cardiologie",2);
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Chambre froide","Cardiologie",3);
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Tête de Gondole","Pas de rayon spécifique",1);
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Tête de Gondole","Pas de rayon spécifique",2);
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Tête de Gondole","Pas de rayon spécifique",3);
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Zone commerciale","Rayon 1",1);
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Zone commerciale","Rayon 1",2);
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Zone commerciale","Rayon 1",3);
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Zone commerciale","Rayon 2",1);
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Zone commerciale","Rayon 2",2);
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Zone commerciale","Rayon 2",3);
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Zone commerciale","Rayon 3",1);
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Zone commerciale","Rayon 3",2);
INSERT INTO `lieuxdestockages`(`idLieuxDeStockage`, `libelleLieuxDeStockage`, `Rayon`, `Etagere`) VALUES (NULL,"Zone commerciale","Rayon 3",3);

INSERT INTO `users`(`idUser`, `nomUser`, `prenomUser`, `ageUser`, `pseudoUser`, `motDePasseUser`, `idRole`) VALUES (NULL,"Rodriguez","Alberto",35,"RodriguezAlberto","RodriguezAlberto",2);
INSERT INTO `users`(`idUser`, `nomUser`, `prenomUser`, `ageUser`, `pseudoUser`, `motDePasseUser`, `idRole`) VALUES (NULL,"Dupont","Toto",25,"DupontToto","DupontToto",3);
INSERT INTO `users`(`idUser`, `nomUser`, `prenomUser`, `ageUser`, `pseudoUser`, `motDePasseUser`, `idRole`) VALUES (NULL,"Dupont","Titi",25,"DupontTiti","DupontTiti",3);
INSERT INTO `users`(`idUser`, `nomUser`, `prenomUser`, `ageUser`, `pseudoUser`, `motDePasseUser`, `idRole`) VALUES (NULL,"Dupont","Tata",25,"DupontTata","DupontTata",3);
INSERT INTO `users`(`idUser`, `nomUser`, `prenomUser`, `ageUser`, `pseudoUser`, `motDePasseUser`, `idRole`) VALUES (NULL,"Rodriguez","Albertine",35,"RodriguezAlbertine","RodriguezAlbertine",2);
                                                                                                                                                                                                           -- NOM    -- DESC      --RESTIC   --PEREMP  --PRIX    -QUANTITE  --IDCAT    --IDSTOCK                                                                               
INSERT INTO `produits`(`idProduit`, `nomProduit`, `descriptionProduit`, `restrictionProduit`, `datePeremptionProduit`, `prixProduit`, `QuantiteProduit`, `idCategorie`, `idLieuxDeStockage`) VALUES (NULL,"produit supprimé","la commande lié au produit qui à été supprimé","NULL","2020-12-03",0,0,1,1);
INSERT INTO `produits`(`idProduit`, `nomProduit`, `descriptionProduit`, `restrictionProduit`, `datePeremptionProduit`, `prixProduit`, `QuantiteProduit`, `idCategorie`, `idLieuxDeStockage`) VALUES (NULL,"Doliprane","Doliprane","aucune","2020-12-30",6,2500,4,8);
INSERT INTO `produits`(`idProduit`, `nomProduit`, `descriptionProduit`, `restrictionProduit`, `datePeremptionProduit`, `prixProduit`, `QuantiteProduit`, `idCategorie`, `idLieuxDeStockage`) VALUES (NULL,"Gaviscon","desc","pas avant de dormir","2022-02-02",12,633,6,10);
INSERT INTO `produits`(`idProduit`, `nomProduit`, `descriptionProduit`, `restrictionProduit`, `datePeremptionProduit`, `prixProduit`, `QuantiteProduit`, `idCategorie`, `idLieuxDeStockage`) VALUES (NULL,"Drill","medicament pour la gorge","pas pour les bébé","2021-12-06",3.80,200,2,2);
INSERT INTO `produits`(`idProduit`, `nomProduit`, `descriptionProduit`, `restrictionProduit`, `datePeremptionProduit`, `prixProduit`, `QuantiteProduit`, `idCategorie`, `idLieuxDeStockage`) VALUES (NULL,"Spifen400","Spifen","Interdit aux femmes enceintes et enfant de moins de 10 ans","2021-11-07",12.77,300,3,9);
INSERT INTO `produits`(`idProduit`, `nomProduit`, `descriptionProduit`, `restrictionProduit`, `datePeremptionProduit`, `prixProduit`, `QuantiteProduit`, `idCategorie`, `idLieuxDeStockage`) VALUES (NULL,"paracetamol","paracetamol","aucune","2021-2-11",20,60,1,1);
INSERT INTO `produits`(`idProduit`, `nomProduit`, `descriptionProduit`, `restrictionProduit`, `datePeremptionProduit`, `prixProduit`, `QuantiteProduit`, `idCategorie`, `idLieuxDeStockage`) VALUES (NULL,"smecta","smecta","Interdit au plus de 68 ans","2023-12-12",13,652,5,13);
INSERT INTO `produits`(`idProduit`, `nomProduit`, `descriptionProduit`, `restrictionProduit`, `datePeremptionProduit`, `prixProduit`, `QuantiteProduit`, `idCategorie`, `idLieuxDeStockage`) VALUES (NULL,"spasfon","spashon","que pour les filles","2022-06-08",6.80,182,6,14);


INSERT INTO `commandes`(`idCommande`, `dateCommande`, `dateReception`, `idProduit`, `idUser`) VALUES (NULL,"2020-12-01","2020-12-08",4,5);
INSERT INTO `commandes`(`idCommande`, `dateCommande`, `dateReception`, `idProduit`, `idUser`) VALUES (NULL,"2020-11-10","2020-11-20",2,1);
INSERT INTO `commandes`(`idCommande`, `dateCommande`, `dateReception`, `idProduit`, `idUser`) VALUES (NULL,"2020-10-20","2020-11-10",3,5);

INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Header","FR","Bienvenue sur le site de la Pharmacie");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Header","EN","Welcome to the Pharmacy website");

INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Les Produits","FR","Les Produits");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Les Lieux de Stockage","FR","Les Lieux de Stockage");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Les Users","FR","Les Users");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Les Roles","FR","Les Roles");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Les Categories","FR","Les Categories");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Les Commandes","FR","Les Commandes");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Inscriptions","FR","Inscriptions");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Connexions","FR","Connexions");

INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Les Produits","EN","Products");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Les Lieux de Stockage","EN","Storage places");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Les Users","EN","Users");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte)VALUES(NULL,"Les Roles","EN","Roles");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Les Categories","EN","Categories");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Les Commandes","EN","Orders");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Inscriptions","EN","registration");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Connexions","EN","connection");


INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Contact","FR","Contact");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Adresse Postal","FR","Adresse Postal");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Adresse Mail","FR","Adresse Mail");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"N° Telephone","FR","N° Telephone");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"N° SIRET","FR","N° SIRET");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Reseaux","FR","Reseaux");

INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Contact","EN","Contact");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Adresse Postal","EN","Postal Address");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Adresse Mail","EN","Mail Address");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"N° Telephone","EN","Phone N°");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"N° SIRET","EN","SIRET N° ");
INSERT INTO Texte(idTexte, codeTexte, codeLangue, Texte) VALUES(NULL,"Reseaux","EN","Network");




