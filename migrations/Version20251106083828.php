<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251106083828 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chauffer (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, agence_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, telephone VARCHAR(255) NOT NULL, permis VARCHAR(255) NOT NULL, createt_at DATE NOT NULL, ville VARCHAR(255) NOT NULL, identification VARCHAR(255) NOT NULL, INDEX IDX_8513594CA76ED395 (user_id), INDEX IDX_8513594CD725330D (agence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transport (id INT AUTO_INCREMENT NOT NULL, agence_id INT DEFAULT NULL, user_id INT DEFAULT NULL, depart VARCHAR(255) NOT NULL, destination VARCHAR(255) NOT NULL, createt_at DATE NOT NULL, status VARCHAR(255) NOT NULL, INDEX IDX_66AB212ED725330D (agence_id), INDEX IDX_66AB212EA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE chauffer ADD CONSTRAINT FK_8513594CA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE chauffer ADD CONSTRAINT FK_8513594CD725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE transport ADD CONSTRAINT FK_66AB212ED725330D FOREIGN KEY (agence_id) REFERENCES agence (id)');
        $this->addSql('ALTER TABLE transport ADD CONSTRAINT FK_66AB212EA76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE achat ADD transport_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE achat ADD CONSTRAINT FK_26A984569909C13F FOREIGN KEY (transport_id) REFERENCES transport (id)');
        $this->addSql('CREATE INDEX IDX_26A984569909C13F ON achat (transport_id)');
        $this->addSql('ALTER TABLE vente ADD transport_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vente ADD CONSTRAINT FK_888A2A4C9909C13F FOREIGN KEY (transport_id) REFERENCES transport (id)');
        $this->addSql('CREATE INDEX IDX_888A2A4C9909C13F ON vente (transport_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE achat DROP FOREIGN KEY FK_26A984569909C13F');
        $this->addSql('ALTER TABLE vente DROP FOREIGN KEY FK_888A2A4C9909C13F');
        $this->addSql('ALTER TABLE chauffer DROP FOREIGN KEY FK_8513594CA76ED395');
        $this->addSql('ALTER TABLE chauffer DROP FOREIGN KEY FK_8513594CD725330D');
        $this->addSql('ALTER TABLE transport DROP FOREIGN KEY FK_66AB212ED725330D');
        $this->addSql('ALTER TABLE transport DROP FOREIGN KEY FK_66AB212EA76ED395');
        $this->addSql('DROP TABLE chauffer');
        $this->addSql('DROP TABLE transport');
        $this->addSql('DROP INDEX IDX_26A984569909C13F ON achat');
        $this->addSql('ALTER TABLE achat DROP transport_id');
        $this->addSql('DROP INDEX IDX_888A2A4C9909C13F ON vente');
        $this->addSql('ALTER TABLE vente DROP transport_id');
    }
}
