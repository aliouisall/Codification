CREATE DATABASE Codification;
USE Codification;

CREATE TABLE Etudiant (
    idEtudiant int,
    prenom varchar(45),
    nom varchar(30),
    email varchar(45),
    numCarteEtudiant varchar(10),
    motDePasse varchar(30),
    dateNaissance date,
    constraint pkEtud primary key (idEtudiant));

CREATE TABLE Chambre (
    numChambre int,
    numEtage int,
    idEtudiant int,
    constraint fkEtud foreign key (idEtudiant)
    references Etudiant (idEtudiant));

CREATE TABLE Pavillon (
    numChambre int,
    nomPavillon varchar(2),
    constraint fkChambre foreign key (numChambre)
    references Chambre (numChambre));