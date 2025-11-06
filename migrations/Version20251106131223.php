<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251106131223 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE transport ADD chauffer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE transport ADD CONSTRAINT FK_66AB212EF00616D2 FOREIGN KEY (chauffer_id) REFERENCES chauffer (id)');
        $this->addSql('CREATE INDEX IDX_66AB212EF00616D2 ON transport (chauffer_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE transport DROP FOREIGN KEY FK_66AB212EF00616D2');
        $this->addSql('DROP INDEX IDX_66AB212EF00616D2 ON transport');
        $this->addSql('ALTER TABLE transport DROP chauffer_id');
    }
}
