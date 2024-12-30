CREATE TABLE utilisateurs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    role_global ENUM('Administrateur', 'Utilisateur') DEFAULT 'Utilisateur'
);

CREATE TABLE roles_projet (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50) UNIQUE NOT NULL
);

CREATE TABLE projets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(150) NOT NULL,
    description TEXT,
    date_debut DATE NOT NULL,
    date_fin_prev DATE,
    statut ENUM('En cours', 'Termine', 'Annule') DEFAULT 'En cours'
);

CREATE TABLE membres_projet (
    id INT AUTO_INCREMENT PRIMARY KEY,
    projet_id INT NOT NULL REFERENCES projets(id) ON DELETE CASCADE,
    utilisateur_id INT NOT NULL REFERENCES utilisateurs(id) ON DELETE CASCADE,
    role_id INT NOT NULL REFERENCES roles_projet(id) ON DELETE CASCADE
);

CREATE TABLE taches (
    id INT AUTO_INCREMENT PRIMARY KEY,
    projet_id INT NOT NULL REFERENCES projets(id) ON DELETE CASCADE,
    nom VARCHAR(150) NOT NULL,
    description TEXT,
    date_debut DATE NOT NULL,
    date_fin_prev DATE,
    date_fin_reelle DATE DEFAULT NULL,
    statut ENUM('A faire', 'En cours', 'Termine', 'Bloquee') DEFAULT 'A faire',
    priorite ENUM('Haute', 'Moyenne', 'Basse') DEFAULT 'Moyenne',
    affectataire_id INT REFERENCES utilisateurs(id) ON DELETE SET NULL
);

CREATE TABLE commentaires (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tache_id INT NOT NULL REFERENCES taches(id) ON DELETE CASCADE,
    auteur_id INT NOT NULL REFERENCES utilisateurs(id) ON DELETE CASCADE,
    texte TEXT NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE notifications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    utilisateur_id INT NOT NULL REFERENCES utilisateurs(id) ON DELETE CASCADE,
    message TEXT NOT NULL,
    lue BOOLEAN DEFAULT FALSE
);

INSERT INTO roles_projet (nom) VALUES ('Responsable'), ('Membre');
