<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251029125425 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE camion (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, agence_id INT DEFAULT NULL, immatriculation VARCHAR(255) NOT NULL, marque VARCHAR(255) NOT NULL, modele VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, capacite VARCHAR(255) NOT NULL, volume VARCHAR(255) NOT NULL, carburant VARCHAR(255) NOT NULL, kilometrage VARCHAR(255) NOT NULL, etat VARCHAR(255) NOT NULL, localisation VARCHAR(255) NOT NULL, prix VARCHAR(255) NOT NULL, createt_at DATE NOT NULL, INDEX IDX_5DD566ECA76ED395 (user_id), INDEX IDX_5DD566ECD725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE camion ADD CONSTRAINT FK_5DD566ECA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE camion ADD CONSTRAINT FK_5DD566ECD725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE user CHANGE createt_at createt_at DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE camion DROP FOREIGN KEY FK_5DD566ECA76ED395');
        $this->addSql('ALTER TABLE camion DROP FOREIGN KEY FK_5DD566ECD725330D');
        $this->addSql('DROP TABLE camion');
        $this->addSql('ALTER TABLE `user` CHANGE createt_at createt_at VARCHAR(255) NOT NULL');
    }
}
