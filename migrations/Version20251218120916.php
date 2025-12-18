<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251218120916 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE kilometrage ADD camoin_id INT DEFAULT NULL, ADD kilometrage_alert INT NOT NULL');
        $this->addSql('ALTER TABLE kilometrage ADD CONSTRAINT FK_A7511BF95ABE106E FOREIGN KEY (camoin_id) REFERENCES camion (id)');
        $this->addSql('CREATE INDEX IDX_A7511BF95ABE106E ON kilometrage (camoin_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE kilometrage DROP FOREIGN KEY FK_A7511BF95ABE106E');
        $this->addSql('DROP INDEX IDX_A7511BF95ABE106E ON kilometrage');
        $this->addSql('ALTER TABLE kilometrage DROP camoin_id, DROP kilometrage_alert');
    }
}
