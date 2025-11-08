<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251108131315 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE locataire ADD camion_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE locataire ADD CONSTRAINT FK_C47CF6EB3A706D3 FOREIGN KEY (camion_id) REFERENCES camion (id)');
        $this->addSql('CREATE INDEX IDX_C47CF6EB3A706D3 ON locataire (camion_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE locataire DROP FOREIGN KEY FK_C47CF6EB3A706D3');
        $this->addSql('DROP INDEX IDX_C47CF6EB3A706D3 ON locataire');
        $this->addSql('ALTER TABLE locataire DROP camion_id');
    }
}
