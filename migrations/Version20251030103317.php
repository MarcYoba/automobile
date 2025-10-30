<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251030103317 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE locataire (id INT AUTO_INCREMENT NOT NULL, client_id INT DEFAULT NULL, user_id INT DEFAULT NULL, agence_id INT DEFAULT NULL, identification VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, contact VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, permis VARCHAR(255) NOT NULL, paiementmobile DOUBLE PRECISION NOT NULL, paiementbancaire DOUBLE PRECISION NOT NULL, paiementcash DOUBLE PRECISION NOT NULL, paiementcredit VARCHAR(255) NOT NULL, INDEX IDX_C47CF6EB19EB6921 (client_id), INDEX IDX_C47CF6EBA76ED395 (user_id), INDEX IDX_C47CF6EBD725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE locataire ADD CONSTRAINT FK_C47CF6EB19EB6921 FOREIGN KEY (client_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE locataire ADD CONSTRAINT FK_C47CF6EBA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE locataire ADD CONSTRAINT FK_C47CF6EBD725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE locataire DROP FOREIGN KEY FK_C47CF6EB19EB6921');
        $this->addSql('ALTER TABLE locataire DROP FOREIGN KEY FK_C47CF6EBA76ED395');
        $this->addSql('ALTER TABLE locataire DROP FOREIGN KEY FK_C47CF6EBD725330D');
        $this->addSql('DROP TABLE locataire');
    }
}
