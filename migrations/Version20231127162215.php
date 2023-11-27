<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231127162215 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande_fournisseur (id INT AUTO_INCREMENT NOT NULL, comande_id INT NOT NULL, date_comande VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE composition_produit (id INT AUTO_INCREMENT NOT NULL, produit_id INT NOT NULL, matiere_id INT NOT NULL, quantiter_utiliser VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, fournisseur_type_id INT NOT NULL, fournisseur_id INT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, INDEX IDX_369ECA32178CC33E (fournisseur_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur_type (id INT AUTO_INCREMENT NOT NULL, fournisseur_id INT NOT NULL, type_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ligne_commande_fournisseur (id INT AUTO_INCREMENT NOT NULL, comande_id INT NOT NULL, fournisseur_id INT NOT NULL, matiere_id INT NOT NULL, quantiter_commande VARCHAR(255) NOT NULL, prix_unitaire VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE matiere_premiere (id INT AUTO_INCREMENT NOT NULL, matiere_id INT NOT NULL, type_bois VARCHAR(255) NOT NULL, quantiter VARCHAR(255) NOT NULL, fournisseur_id INT NOT NULL, prix_unitaire VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, produit_id INT NOT NULL, nom_produit VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, prix_vente VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_fournisseur (id INT AUTO_INCREMENT NOT NULL, fournisseur_type_id INT DEFAULT NULL, type_id INT NOT NULL, descriptio VARCHAR(255) NOT NULL, INDEX IDX_7D871DA3178CC33E (fournisseur_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vente (id INT AUTO_INCREMENT NOT NULL, vente_id INT NOT NULL, produit VARCHAR(255) NOT NULL, produit_id INT NOT NULL, nom_produit VARCHAR(255) NOT NULL, datevente VARCHAR(255) NOT NULL, quantiter VARCHAR(255) NOT NULL, prixtotal VARCHAR(255) NOT NULL, client_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE fournisseur ADD CONSTRAINT FK_369ECA32178CC33E FOREIGN KEY (fournisseur_type_id) REFERENCES fournisseur_type (id)');
        $this->addSql('ALTER TABLE type_fournisseur ADD CONSTRAINT FK_7D871DA3178CC33E FOREIGN KEY (fournisseur_type_id) REFERENCES fournisseur_type (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE fournisseur DROP FOREIGN KEY FK_369ECA32178CC33E');
        $this->addSql('ALTER TABLE type_fournisseur DROP FOREIGN KEY FK_7D871DA3178CC33E');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE commande_fournisseur');
        $this->addSql('DROP TABLE composition_produit');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE fournisseur_type');
        $this->addSql('DROP TABLE ligne_commande_fournisseur');
        $this->addSql('DROP TABLE matiere_premiere');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE type_fournisseur');
        $this->addSql('DROP TABLE vente');
    }
}
