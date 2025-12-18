<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251218121343 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE kilometrage DROP FOREIGN KEY FK_A7511BF95ABE106E');
        $this->addSql('DROP INDEX IDX_A7511BF95ABE106E ON kilometrage');
        $this->addSql('ALTER TABLE kilometrage CHANGE camoin_id camion_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE kilometrage ADD CONSTRAINT FK_A7511BF93A706D3 FOREIGN KEY (camion_id) REFERENCES camion (id)');
        $this->addSql('CREATE INDEX IDX_A7511BF93A706D3 ON kilometrage (camion_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE kilometrage DROP FOREIGN KEY FK_A7511BF93A706D3');
        $this->addSql('DROP INDEX IDX_A7511BF93A706D3 ON kilometrage');
        $this->addSql('ALTER TABLE kilometrage CHANGE camion_id camoin_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE kilometrage ADD CONSTRAINT FK_A7511BF95ABE106E FOREIGN KEY (camoin_id) REFERENCES camion (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_A7511BF95ABE106E ON kilometrage (camoin_id)');
    }
}
