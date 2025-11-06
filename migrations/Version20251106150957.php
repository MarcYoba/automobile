<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251106150957 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE achat DROP FOREIGN KEY FK_26A984569909C13F');
        $this->addSql('DROP INDEX IDX_26A984569909C13F ON achat');
        $this->addSql('ALTER TABLE achat DROP transport_id');
        $this->addSql('ALTER TABLE transport ADD achat_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE transport ADD CONSTRAINT FK_66AB212EFE95D117 FOREIGN KEY (achat_id) REFERENCES achat (id)');
        $this->addSql('CREATE INDEX IDX_66AB212EFE95D117 ON transport (achat_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE achat ADD transport_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE achat ADD CONSTRAINT FK_26A984569909C13F FOREIGN KEY (transport_id) REFERENCES transport (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX IDX_26A984569909C13F ON achat (transport_id)');
        $this->addSql('ALTER TABLE transport DROP FOREIGN KEY FK_66AB212EFE95D117');
        $this->addSql('DROP INDEX IDX_66AB212EFE95D117 ON transport');
        $this->addSql('ALTER TABLE transport DROP achat_id');
    }
}
