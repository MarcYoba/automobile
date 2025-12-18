<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251218112703 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE emprunt (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, agence_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, montant DOUBLE PRECISION NOT NULL, durre VARCHAR(255) NOT NULL, tauxinteretdebiteur DOUBLE PRECISION NOT NULL, tauxannueleffectifglobal DOUBLE PRECISION NOT NULL, couttotal DOUBLE PRECISION NOT NULL, garantie VARCHAR(255) NOT NULL, identitepreteur VARCHAR(255) NOT NULL, emprunteur VARCHAR(255) NOT NULL, createt_at DATE NOT NULL, INDEX IDX_364071D7A76ED395 (user_id), INDEX IDX_364071D7D725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE kilometrage (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, agence_id INT DEFAULT NULL, kilometrage_total INT NOT NULL, kilometrage_jour INT NOT NULL, tour INT NOT NULL, createt_at DATE NOT NULL, INDEX IDX_A7511BF9A76ED395 (user_id), INDEX IDX_A7511BF9D725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE remboursement (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, agence_id INT DEFAULT NULL, emprunt_id INT DEFAULT NULL, type VARCHAR(255) NOT NULL, contrat VARCHAR(255) NOT NULL, etablissement VARCHAR(255) NOT NULL, datesignature DATE NOT NULL, montant DOUBLE PRECISION NOT NULL, dateprelevement DATE NOT NULL, comptedebiter VARCHAR(255) NOT NULL, createt_at DATE NOT NULL, INDEX IDX_C0C0D9EFA76ED395 (user_id), INDEX IDX_C0C0D9EFD725330D (agence_id), INDEX IDX_C0C0D9EFAE7FEF94 (emprunt_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE retrait (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, agence_id INT DEFAULT NULL, montant DOUBLE PRECISION NOT NULL, compte VARCHAR(255) NOT NULL, libelle VARCHAR(255) NOT NULL, createt_at DATE NOT NULL, banque VARCHAR(255) NOT NULL, INDEX IDX_D9846A51A76ED395 (user_id), INDEX IDX_D9846A51D725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE emprunt ADD CONSTRAINT FK_364071D7A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE emprunt ADD CONSTRAINT FK_364071D7D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE kilometrage ADD CONSTRAINT FK_A7511BF9A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE kilometrage ADD CONSTRAINT FK_A7511BF9D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE remboursement ADD CONSTRAINT FK_C0C0D9EFA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE remboursement ADD CONSTRAINT FK_C0C0D9EFD725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE remboursement ADD CONSTRAINT FK_C0C0D9EFAE7FEF94 FOREIGN KEY (emprunt_id) REFERENCES emprunt (id)');
        $this->addSql('ALTER TABLE retrait ADD CONSTRAINT FK_D9846A51A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE retrait ADD CONSTRAINT FK_D9846A51D725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emprunt DROP FOREIGN KEY FK_364071D7A76ED395');
        $this->addSql('ALTER TABLE emprunt DROP FOREIGN KEY FK_364071D7D725330D');
        $this->addSql('ALTER TABLE kilometrage DROP FOREIGN KEY FK_A7511BF9A76ED395');
        $this->addSql('ALTER TABLE kilometrage DROP FOREIGN KEY FK_A7511BF9D725330D');
        $this->addSql('ALTER TABLE remboursement DROP FOREIGN KEY FK_C0C0D9EFA76ED395');
        $this->addSql('ALTER TABLE remboursement DROP FOREIGN KEY FK_C0C0D9EFD725330D');
        $this->addSql('ALTER TABLE remboursement DROP FOREIGN KEY FK_C0C0D9EFAE7FEF94');
        $this->addSql('ALTER TABLE retrait DROP FOREIGN KEY FK_D9846A51A76ED395');
        $this->addSql('ALTER TABLE retrait DROP FOREIGN KEY FK_D9846A51D725330D');
        $this->addSql('DROP TABLE emprunt');
        $this->addSql('DROP TABLE kilometrage');
        $this->addSql('DROP TABLE remboursement');
        $this->addSql('DROP TABLE retrait');
    }
}
