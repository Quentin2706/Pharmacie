#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
DROP DATABASE if exists pharmacie; 
CREATE DATABASE pharmacie; 
USE pharmacie; 
#------------------------------------------------------------
# Table: Roles
#------------------------------------------------------------
DROP TABLE if exists Roles;
CREATE TABLE Roles(
        idRole  Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomRole Varchar (50) NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Users
#------------------------------------------------------------
DROP TABLE if exists Users;
CREATE TABLE Users(
        idUser       Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomUser      Varchar (100) NOT NULL ,
        prenomUser   Varchar (100) NOT NULL ,
        ageUser      Int NOT NULL ,
        idRole       Int NOT NULL 
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Categories
#------------------------------------------------------------
DROP TABLE if exists Categories;
CREATE TABLE Categories(
        idCategorie         Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomCategorie        Varchar (50) NOT NULL ,
        ordonnanceCategorie Boolean NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: LieuxDeStockages
#------------------------------------------------------------
DROP TABLE if exists LieuxDeStockages;
CREATE TABLE LieuxDeStockages(
        idLieuxDeStockage      Int  Auto_increment  NOT NULL PRIMARY KEY,
        libelleLieuxDeStockage Varchar (50) NOT NULL ,
        Rayon                  Varchar (50) NOT NULL ,
        Etagere                Int  NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Produits
#------------------------------------------------------------
DROP TABLE if exists Produits;
CREATE TABLE Produits(
        idProduit              Int  Auto_increment  NOT NULL PRIMARY KEY,
        nomProduit             Varchar (50) NOT NULL ,
        descriptionProduit     Varchar (300) NOT NULL ,
        restrictionProduit     Varchar (100) NOT NULL ,
        datePeremptionProduit  Date NOT NULL ,
        prixProduit            Float NOT NULL ,
        QuantiteProduit        Int NOT NULL ,
        idCategorie            Int NOT NULL ,
        idLieuxDeStockage      Int NOT NULL
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commandes
#------------------------------------------------------------
DROP TABLE if exists Commandes;
CREATE TABLE Commandes(
        idCommande Int NOT NULL PRIMARY KEY ,
        dateCommande  Date NOT NULL ,
        dateReception Date NOT NULL ,
        idProduit     Int NOT NULL ,
        idUser        Int NOT NULL 
)ENGINE=InnoDB;


ALTER TABLE Users ADD CONSTRAINT FK_Users_Roles FOREIGN KEY (idRole) REFERENCES Roles(idRole);
ALTER TABLE Produits ADD CONSTRAINT FK_Produits_Categories FOREIGN KEY (idCategorie) REFERENCES Categories(idCategorie);
ALTER TABLE Produits ADD CONSTRAINT FK_Produits_LieuxDeStockages FOREIGN KEY (idLieuxDeStockage) REFERENCES LieuxDeStockages(idLieuxDeStockage);
ALTER TABLE Commandes ADD CONSTRAINT FK_Commandes_Produits FOREIGN KEY (idProduit) REFERENCES Produits(idProduit);
ALTER TABLE Commandes ADD CONSTRAINT FK_Commandes_Users FOREIGN KEY (idUser) REFERENCES Users(idUser);


