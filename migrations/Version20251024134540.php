<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251024134540 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE achat (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, fournisseur_id INT NOT NULL, produit_id INT NOT NULL, agence_id INT NOT NULL, prix DOUBLE PRECISION NOT NULL, quantite DOUBLE PRECISION NOT NULL, montant DOUBLE PRECISION NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_26A98456A76ED395 (user_id), INDEX IDX_26A98456670C757F (fournisseur_id), INDEX IDX_26A98456F347EFB (produit_id), INDEX IDX_26A98456D725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE actif (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, agence_id INT DEFAULT NULL, libelle VARCHAR(255) NOT NULL, brut DOUBLE PRECISION NOT NULL, amortissement DOUBLE PRECISION NOT NULL, net DOUBLE PRECISION NOT NULL, created DATE NOT NULL, cathegorie VARCHAR(255) NOT NULL, ordre INT NOT NULL, ref VARCHAR(255) NOT NULL, INDEX IDX_8F52502A76ED395 (user_id), INDEX IDX_8F52502D725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE agence (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, nom VARCHAR(100) NOT NULL, datecreation DATE NOT NULL, created_by INT NOT NULL, adress VARCHAR(255) NOT NULL, INDEX IDX_64C19AA9A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE balance (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, agence_id INT DEFAULT NULL, classe INT NOT NULL, compte INT NOT NULL, intitule VARCHAR(255) NOT NULL, solde_initial_debit DOUBLE PRECISION NOT NULL, solde_initial_credit DOUBLE PRECISION NOT NULL, mouvement_debit DOUBLE PRECISION NOT NULL, mouvement_credit DOUBLE PRECISION NOT NULL, solde_final_debit DOUBLE PRECISION NOT NULL, sold_final_credit DOUBLE PRECISION NOT NULL, solde_global DOUBLE PRECISION NOT NULL, createt_at DATE NOT NULL, INDEX IDX_ACF41FFEA76ED395 (user_id), INDEX IDX_ACF41FFED725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE caisse (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, agence_id INT DEFAULT NULL, montant DOUBLE PRECISION NOT NULL, operation VARCHAR(255) NOT NULL, motif VARCHAR(255) NOT NULL, create_at DATE NOT NULL, INDEX IDX_B2A353C8A76ED395 (user_id), INDEX IDX_B2A353C8D725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE clients (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, nom VARCHAR(100) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', telephone VARCHAR(20) NOT NULL, UNIQUE INDEX UNIQ_C82E74A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE credit (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, vente_id INT NOT NULL, montant DOUBLE PRECISION NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_1CC16EFE19EB6921 (client_id), UNIQUE INDEX UNIQ_1CC16EFE7DC7170A (vente_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE depense_actif (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, agence_id INT DEFAULT NULL, actif_id INT DEFAULT NULL, montant DOUBLE PRECISION NOT NULL, libelle VARCHAR(255) NOT NULL, createt_ad DATE NOT NULL, INDEX IDX_E4DCB7AFA76ED395 (user_id), INDEX IDX_E4DCB7AFD725330D (agence_id), INDEX IDX_E4DCB7AF40E1C722 (actif_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE depense_passif (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, agence_id INT DEFAULT NULL, passif_id INT DEFAULT NULL, montant DOUBLE PRECISION NOT NULL, libelle VARCHAR(255) NOT NULL, createt_at DATE NOT NULL, INDEX IDX_89EAC9A0A76ED395 (user_id), INDEX IDX_89EAC9A0D725330D (agence_id), INDEX IDX_89EAC9A049B26346 (passif_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE depenses (id INT AUTO_INCREMENT NOT NULL, agence_id INT NOT NULL, user_id INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', type VARCHAR(100) NOT NULL, description VARCHAR(255) NOT NULL, montant DOUBLE PRECISION NOT NULL, image_name VARCHAR(255) NOT NULL, image_size INT NOT NULL, INDEX IDX_EE350ECBD725330D (agence_id), INDEX IDX_EE350ECBA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employer (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, agence_id INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', poste VARCHAR(100) NOT NULL, nom VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_DE4CF066A76ED395 (user_id), INDEX IDX_DE4CF066D725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE facture (id INT AUTO_INCREMENT NOT NULL, produit_id INT NOT NULL, user_id INT NOT NULL, vente_id INT NOT NULL, client_id INT NOT NULL, agence_id INT DEFAULT NULL, quantite DOUBLE PRECISION NOT NULL, prix DOUBLE PRECISION NOT NULL, typepaiement VARCHAR(30) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', montant DOUBLE PRECISION NOT NULL, INDEX IDX_FE866410F347EFB (produit_id), INDEX IDX_FE866410A76ED395 (user_id), INDEX IDX_FE8664107DC7170A (vente_id), INDEX IDX_FE86641019EB6921 (client_id), INDEX IDX_FE866410D725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fournisseur (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, agence_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, telephone VARCHAR(30) NOT NULL, address VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', numfacture INT NOT NULL, datefacture DATE NOT NULL, INDEX IDX_369ECA32A76ED395 (user_id), INDEX IDX_369ECA32D725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE historique (id INT AUTO_INCREMENT NOT NULL, produit_id INT DEFAULT NULL, agance_id INT DEFAULT NULL, quantite DOUBLE PRECISION NOT NULL, created_at DATE NOT NULL, heurecameroun VARCHAR(255) NOT NULL, heureserver VARCHAR(255) DEFAULT NULL, INDEX IDX_EDBFD5ECF347EFB (produit_id), INDEX IDX_EDBFD5EC236A171E (agance_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE immobilisation (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, agence_id INT DEFAULT NULL, classe INT NOT NULL, compte INT NOT NULL, libelle VARCHAR(255) NOT NULL, date_acquisition DATE NOT NULL, prix_acquisition DOUBLE PRECISION NOT NULL, cumul_n1 DOUBLE PRECISION NOT NULL, dotation_n DOUBLE PRECISION NOT NULL, cessions_sorties DOUBLE PRECISION NOT NULL, cumul_n DOUBLE PRECISION NOT NULL, valeur_net_n DOUBLE PRECISION NOT NULL, createt_at DATE NOT NULL, INDEX IDX_B1563E27A76ED395 (user_id), INDEX IDX_B1563E27D725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lots (id INT AUTO_INCREMENT NOT NULL, produit_id INT DEFAULT NULL, agance_id INT DEFAULT NULL, expiration VARCHAR(255) DEFAULT NULL, createt_at DATE NOT NULL, INDEX IDX_916087CEF347EFB (produit_id), INDEX IDX_916087CE236A171E (agance_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE passif (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, agence_id INT DEFAULT NULL, libelle VARCHAR(255) NOT NULL, montant DOUBLE PRECISION NOT NULL, created DATE NOT NULL, ordre INT NOT NULL, ref VARCHAR(255) NOT NULL, cathegorie VARCHAR(255) NOT NULL, INDEX IDX_21613F67A76ED395 (user_id), INDEX IDX_21613F67D725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, agence_id INT DEFAULT NULL, nom VARCHAR(100) NOT NULL, prixvente DOUBLE PRECISION NOT NULL, quantite DOUBLE PRECISION NOT NULL, prixachat DOUBLE PRECISION NOT NULL, gain DOUBLE PRECISION NOT NULL, stockdebut DOUBLE PRECISION NOT NULL, cathegorie VARCHAR(255) NOT NULL, created_at DATE NOT NULL, type VARCHAR(255) NOT NULL, INDEX IDX_29A5EC27A76ED395 (user_id), INDEX IDX_29A5EC27D725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prospection (id INT AUTO_INCREMENT NOT NULL, agence_id INT DEFAULT NULL, user_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, localisation VARCHAR(255) NOT NULL, speculation VARCHAR(255) NOT NULL, sujet VARCHAR(255) NOT NULL, souche VARCHAR(255) NOT NULL, ravitallement VARCHAR(255) NOT NULL, commentaire VARCHAR(255) NOT NULL, createt_at DATE NOT NULL, INDEX IDX_47EBD1B0D725330D (agence_id), INDEX IDX_47EBD1B0A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quantiteproduit (id INT AUTO_INCREMENT NOT NULL, produit_id INT NOT NULL, vente_id INT NOT NULL, user_id INT NOT NULL, quantite_restant DOUBLE PRECISION NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_F63A62D2F347EFB (produit_id), INDEX IDX_F63A62D27DC7170A (vente_id), INDEX IDX_F63A62D2A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE salaire (id INT AUTO_INCREMENT NOT NULL, montant DOUBLE PRECISION NOT NULL, created_ad DATE NOT NULL, status VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE temp_agence (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, agence_id INT NOT NULL, generale TINYINT(1) NOT NULL, INDEX IDX_13500A9EA76ED395 (user_id), INDEX IDX_13500A9ED725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tresorerie (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, agence_id INT DEFAULT NULL, libelles VARCHAR(255) NOT NULL, net DOUBLE PRECISION NOT NULL, createt_at DATE NOT NULL, ordre INT NOT NULL, INDEX IDX_2F2C32B8A76ED395 (user_id), INDEX IDX_2F2C32B8D725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vente (id INT AUTO_INCREMENT NOT NULL, client_id INT NOT NULL, user_id INT NOT NULL, agence_id INT DEFAULT NULL, type VARCHAR(50) NOT NULL, quantite DOUBLE PRECISION NOT NULL, prix DOUBLE PRECISION NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', esperce VARCHAR(255) NOT NULL, aliment VARCHAR(50) NOT NULL, heure VARCHAR(20) NOT NULL, statusvente VARCHAR(30) NOT NULL, montantcredit DOUBLE PRECISION NOT NULL, montantcash DOUBLE PRECISION NOT NULL, montantbanque DOUBLE PRECISION NOT NULL, montantmomo DOUBLE PRECISION NOT NULL, reduction DOUBLE PRECISION NOT NULL, INDEX IDX_888A2A4C19EB6921 (client_id), INDEX IDX_888A2A4CA76ED395 (user_id), INDEX IDX_888A2A4CD725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE versement (id INT AUTO_INCREMENT NOT NULL, clients_id INT NOT NULL, user_id INT NOT NULL, montant DOUBLE PRECISION NOT NULL, om DOUBLE PRECISION NOT NULL, banque DOUBLE PRECISION NOT NULL, created_ad DATE NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_716E9367AB014612 (clients_id), INDEX IDX_716E9367A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE achat ADD CONSTRAINT FK_26A98456A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE achat ADD CONSTRAINT FK_26A98456670C757F FOREIGN KEY (fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE achat ADD CONSTRAINT FK_26A98456F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE achat ADD CONSTRAINT FK_26A98456D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE actif ADD CONSTRAINT FK_8F52502A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE actif ADD CONSTRAINT FK_8F52502D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE agence ADD CONSTRAINT FK_64C19AA9A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE balance ADD CONSTRAINT FK_ACF41FFEA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE balance ADD CONSTRAINT FK_ACF41FFED725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE caisse ADD CONSTRAINT FK_B2A353C8A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE caisse ADD CONSTRAINT FK_B2A353C8D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE clients ADD CONSTRAINT FK_C82E74A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE credit ADD CONSTRAINT FK_1CC16EFE19EB6921 FOREIGN KEY (client_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE credit ADD CONSTRAINT FK_1CC16EFE7DC7170A FOREIGN KEY (vente_id) REFERENCES vente (id)');
        $this->addSql('ALTER TABLE depense_actif ADD CONSTRAINT FK_E4DCB7AFA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE depense_actif ADD CONSTRAINT FK_E4DCB7AFD725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE depense_actif ADD CONSTRAINT FK_E4DCB7AF40E1C722 FOREIGN KEY (actif_id) REFERENCES actif (id)');
        $this->addSql('ALTER TABLE depense_passif ADD CONSTRAINT FK_89EAC9A0A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE depense_passif ADD CONSTRAINT FK_89EAC9A0D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE depense_passif ADD CONSTRAINT FK_89EAC9A049B26346 FOREIGN KEY (passif_id) REFERENCES passif (id)');
        $this->addSql('ALTER TABLE depenses ADD CONSTRAINT FK_EE350ECBD725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE depenses ADD CONSTRAINT FK_EE350ECBA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE employer ADD CONSTRAINT FK_DE4CF066A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE employer ADD CONSTRAINT FK_DE4CF066D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE866410F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE866410A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE8664107DC7170A FOREIGN KEY (vente_id) REFERENCES vente (id)');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE86641019EB6921 FOREIGN KEY (client_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE facture ADD CONSTRAINT FK_FE866410D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE fournisseur ADD CONSTRAINT FK_369ECA32A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE fournisseur ADD CONSTRAINT FK_369ECA32D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE historique ADD CONSTRAINT FK_EDBFD5ECF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE historique ADD CONSTRAINT FK_EDBFD5EC236A171E FOREIGN KEY (agance_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE immobilisation ADD CONSTRAINT FK_B1563E27A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE immobilisation ADD CONSTRAINT FK_B1563E27D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE lots ADD CONSTRAINT FK_916087CEF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE lots ADD CONSTRAINT FK_916087CE236A171E FOREIGN KEY (agance_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE passif ADD CONSTRAINT FK_21613F67A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE passif ADD CONSTRAINT FK_21613F67D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC27D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE prospection ADD CONSTRAINT FK_47EBD1B0D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE prospection ADD CONSTRAINT FK_47EBD1B0A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE quantiteproduit ADD CONSTRAINT FK_F63A62D2F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE quantiteproduit ADD CONSTRAINT FK_F63A62D27DC7170A FOREIGN KEY (vente_id) REFERENCES vente (id)');
        $this->addSql('ALTER TABLE quantiteproduit ADD CONSTRAINT FK_F63A62D2A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE temp_agence ADD CONSTRAINT FK_13500A9EA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE temp_agence ADD CONSTRAINT FK_13500A9ED725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE tresorerie ADD CONSTRAINT FK_2F2C32B8A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE tresorerie ADD CONSTRAINT FK_2F2C32B8D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE vente ADD CONSTRAINT FK_888A2A4C19EB6921 FOREIGN KEY (client_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE vente ADD CONSTRAINT FK_888A2A4CA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE vente ADD CONSTRAINT FK_888A2A4CD725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE versement ADD CONSTRAINT FK_716E9367AB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE versement ADD CONSTRAINT FK_716E9367A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE user ADD telephone VARCHAR(20) DEFAULT NULL, ADD last_login DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE achat DROP FOREIGN KEY FK_26A98456A76ED395');
        $this->addSql('ALTER TABLE achat DROP FOREIGN KEY FK_26A98456670C757F');
        $this->addSql('ALTER TABLE achat DROP FOREIGN KEY FK_26A98456F347EFB');
        $this->addSql('ALTER TABLE achat DROP FOREIGN KEY FK_26A98456D725330D');
        $this->addSql('ALTER TABLE actif DROP FOREIGN KEY FK_8F52502A76ED395');
        $this->addSql('ALTER TABLE actif DROP FOREIGN KEY FK_8F52502D725330D');
        $this->addSql('ALTER TABLE agence DROP FOREIGN KEY FK_64C19AA9A76ED395');
        $this->addSql('ALTER TABLE balance DROP FOREIGN KEY FK_ACF41FFEA76ED395');
        $this->addSql('ALTER TABLE balance DROP FOREIGN KEY FK_ACF41FFED725330D');
        $this->addSql('ALTER TABLE caisse DROP FOREIGN KEY FK_B2A353C8A76ED395');
        $this->addSql('ALTER TABLE caisse DROP FOREIGN KEY FK_B2A353C8D725330D');
        $this->addSql('ALTER TABLE clients DROP FOREIGN KEY FK_C82E74A76ED395');
        $this->addSql('ALTER TABLE credit DROP FOREIGN KEY FK_1CC16EFE19EB6921');
        $this->addSql('ALTER TABLE credit DROP FOREIGN KEY FK_1CC16EFE7DC7170A');
        $this->addSql('ALTER TABLE depense_actif DROP FOREIGN KEY FK_E4DCB7AFA76ED395');
        $this->addSql('ALTER TABLE depense_actif DROP FOREIGN KEY FK_E4DCB7AFD725330D');
        $this->addSql('ALTER TABLE depense_actif DROP FOREIGN KEY FK_E4DCB7AF40E1C722');
        $this->addSql('ALTER TABLE depense_passif DROP FOREIGN KEY FK_89EAC9A0A76ED395');
        $this->addSql('ALTER TABLE depense_passif DROP FOREIGN KEY FK_89EAC9A0D725330D');
        $this->addSql('ALTER TABLE depense_passif DROP FOREIGN KEY FK_89EAC9A049B26346');
        $this->addSql('ALTER TABLE depenses DROP FOREIGN KEY FK_EE350ECBD725330D');
        $this->addSql('ALTER TABLE depenses DROP FOREIGN KEY FK_EE350ECBA76ED395');
        $this->addSql('ALTER TABLE employer DROP FOREIGN KEY FK_DE4CF066A76ED395');
        $this->addSql('ALTER TABLE employer DROP FOREIGN KEY FK_DE4CF066D725330D');
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE866410F347EFB');
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE866410A76ED395');
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE8664107DC7170A');
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE86641019EB6921');
        $this->addSql('ALTER TABLE facture DROP FOREIGN KEY FK_FE866410D725330D');
        $this->addSql('ALTER TABLE fournisseur DROP FOREIGN KEY FK_369ECA32A76ED395');
        $this->addSql('ALTER TABLE fournisseur DROP FOREIGN KEY FK_369ECA32D725330D');
        $this->addSql('ALTER TABLE historique DROP FOREIGN KEY FK_EDBFD5ECF347EFB');
        $this->addSql('ALTER TABLE historique DROP FOREIGN KEY FK_EDBFD5EC236A171E');
        $this->addSql('ALTER TABLE immobilisation DROP FOREIGN KEY FK_B1563E27A76ED395');
        $this->addSql('ALTER TABLE immobilisation DROP FOREIGN KEY FK_B1563E27D725330D');
        $this->addSql('ALTER TABLE lots DROP FOREIGN KEY FK_916087CEF347EFB');
        $this->addSql('ALTER TABLE lots DROP FOREIGN KEY FK_916087CE236A171E');
        $this->addSql('ALTER TABLE passif DROP FOREIGN KEY FK_21613F67A76ED395');
        $this->addSql('ALTER TABLE passif DROP FOREIGN KEY FK_21613F67D725330D');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27A76ED395');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC27D725330D');
        $this->addSql('ALTER TABLE prospection DROP FOREIGN KEY FK_47EBD1B0D725330D');
        $this->addSql('ALTER TABLE prospection DROP FOREIGN KEY FK_47EBD1B0A76ED395');
        $this->addSql('ALTER TABLE quantiteproduit DROP FOREIGN KEY FK_F63A62D2F347EFB');
        $this->addSql('ALTER TABLE quantiteproduit DROP FOREIGN KEY FK_F63A62D27DC7170A');
        $this->addSql('ALTER TABLE quantiteproduit DROP FOREIGN KEY FK_F63A62D2A76ED395');
        $this->addSql('ALTER TABLE temp_agence DROP FOREIGN KEY FK_13500A9EA76ED395');
        $this->addSql('ALTER TABLE temp_agence DROP FOREIGN KEY FK_13500A9ED725330D');
        $this->addSql('ALTER TABLE tresorerie DROP FOREIGN KEY FK_2F2C32B8A76ED395');
        $this->addSql('ALTER TABLE tresorerie DROP FOREIGN KEY FK_2F2C32B8D725330D');
        $this->addSql('ALTER TABLE vente DROP FOREIGN KEY FK_888A2A4C19EB6921');
        $this->addSql('ALTER TABLE vente DROP FOREIGN KEY FK_888A2A4CA76ED395');
        $this->addSql('ALTER TABLE vente DROP FOREIGN KEY FK_888A2A4CD725330D');
        $this->addSql('ALTER TABLE versement DROP FOREIGN KEY FK_716E9367AB014612');
        $this->addSql('ALTER TABLE versement DROP FOREIGN KEY FK_716E9367A76ED395');
        $this->addSql('DROP TABLE achat');
        $this->addSql('DROP TABLE actif');
        $this->addSql('DROP TABLE agence');
        $this->addSql('DROP TABLE balance');
        $this->addSql('DROP TABLE caisse');
        $this->addSql('DROP TABLE clients');
        $this->addSql('DROP TABLE credit');
        $this->addSql('DROP TABLE depense_actif');
        $this->addSql('DROP TABLE depense_passif');
        $this->addSql('DROP TABLE depenses');
        $this->addSql('DROP TABLE employer');
        $this->addSql('DROP TABLE facture');
        $this->addSql('DROP TABLE fournisseur');
        $this->addSql('DROP TABLE historique');
        $this->addSql('DROP TABLE immobilisation');
        $this->addSql('DROP TABLE lots');
        $this->addSql('DROP TABLE passif');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE prospection');
        $this->addSql('DROP TABLE quantiteproduit');
        $this->addSql('DROP TABLE salaire');
        $this->addSql('DROP TABLE temp_agence');
        $this->addSql('DROP TABLE tresorerie');
        $this->addSql('DROP TABLE vente');
        $this->addSql('DROP TABLE versement');
        $this->addSql('ALTER TABLE `user` DROP telephone, DROP last_login');
    }
}
