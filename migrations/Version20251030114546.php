<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251030114546 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE locataire ADD date_debut DATE NOT NULL, ADD heure_debut VARCHAR(255) NOT NULL, ADD date_fin DATE NOT NULL, ADD heure_fin VARCHAR(255) NOT NULL, ADD lieu_depart VARCHAR(255) NOT NULL, ADD lieur_retour VARCHAR(255) NOT NULL, ADD duree_location VARCHAR(255) NOT NULL, ADD status_reservation VARCHAR(255) NOT NULL, ADD montant DOUBLE PRECISION NOT NULL, CHANGE paiementcredit paiementcredit DOUBLE PRECISION NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE locataire DROP date_debut, DROP heure_debut, DROP date_fin, DROP heure_fin, DROP lieu_depart, DROP lieur_retour, DROP duree_location, DROP status_reservation, DROP montant, CHANGE paiementcredit paiementcredit VARCHAR(255) NOT NULL');
    }
}
