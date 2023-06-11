DROP DATABASE IF EXISTS mymeetic; 
CREATE DATABASE mymeetic;
USE mymeetic;

CREATE TABLE utilisateur(
    id      INT         NOT NULL AUTO_INCREMENT,
    nom     VARCHAR(100)     NOT NULL,
    prenom  VARCHAR(100)     NOT NULL,
    date_naissance DATE  NOT NULL,
    
    genre   VARCHAR(100) NOT NULL,
    email   VARCHAR(100)     NOT NULL,
    motdepasse VARCHAR(100)  NOT NULL,
    hobbies    VARCHAR(100)  NOT NULL,
);

INSERT INTO utilisateur
        (nom, prenom, date_naissance, genre, email, motdepasse, hobbies)
VALUES  ('Bourguignon', 'Wilfried', '2002-09-23', 'Homme' , 'wilbour74@gmail.com', 'will' , 'Sport')
;

