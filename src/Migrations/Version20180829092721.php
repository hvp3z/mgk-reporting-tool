<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180829092721 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE intervention ADD status VARCHAR(255) NOT NULL, ADD garage VARCHAR(255) DEFAULT NULL, ADD cp VARCHAR(5) DEFAULT NULL, ADD datecommande DATETIME DEFAULT NULL, ADD adresselivraison VARCHAR(255) DEFAULT NULL, ADD prestation VARCHAR(255) DEFAULT NULL, ADD nombreveh INT DEFAULT NULL, ADD modelevehicule VARCHAR(255) DEFAULT NULL, ADD couleur VARCHAR(255) DEFAULT NULL, ADD typekit VARCHAR(255) DEFAULT NULL, ADD montant DOUBLE PRECISION DEFAULT NULL, ADD datevalidationbat DATETIME DEFAULT NULL, ADD codesrg VARCHAR(255) DEFAULT NULL, ADD dateenvoicodesrg DATETIME DEFAULT NULL, ADD dateexpeditionlogos DATETIME DEFAULT NULL, ADD datepose DATETIME DEFAULT NULL, ADD poseeffectuee TINYINT(1) DEFAULT NULL, ADD avancement VARCHAR(255) DEFAULT NULL, ADD codeana VARCHAR(255) DEFAULT NULL, ADD commentairedemande VARCHAR(255) DEFAULT NULL, ADD ouverture TINYINT(1) DEFAULT NULL, ADD exploitation TINYINT(1) DEFAULT NULL, ADD dateouverture DATETIME DEFAULT NULL, ADD dateposevoulue DATETIME DEFAULT NULL, ADD chefdeprojet VARCHAR(255) DEFAULT NULL, ADD typesignaletique VARCHAR(255) DEFAULT NULL, ADD survey DATETIME DEFAULT NULL, ADD batrecu DATETIME DEFAULT NULL, ADD batvalide TINYINT(1) DEFAULT NULL, ADD autorisationsyndic VARCHAR(255) DEFAULT NULL, ADD autorisationmairie VARCHAR(255) DEFAULT NULL, ADD devisrecu DATETIME DEFAULT NULL, ADD chiffrageht DOUBLE PRECISION DEFAULT NULL, ADD chiffragehtvalide DOUBLE PRECISION DEFAULT NULL, ADD budget VARCHAR(255) DEFAULT NULL, ADD numcommande VARCHAR(255) DEFAULT NULL, ADD poserealiseeetcommentaires VARCHAR(255) DEFAULT NULL, ADD contacts VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE intervention DROP status, DROP garage, DROP cp, DROP datecommande, DROP adresselivraison, DROP prestation, DROP nombreveh, DROP modelevehicule, DROP couleur, DROP typekit, DROP montant, DROP datevalidationbat, DROP codesrg, DROP dateenvoicodesrg, DROP dateexpeditionlogos, DROP datepose, DROP poseeffectuee, DROP avancement, DROP codeana, DROP commentairedemande, DROP ouverture, DROP exploitation, DROP dateouverture, DROP dateposevoulue, DROP chefdeprojet, DROP typesignaletique, DROP survey, DROP batrecu, DROP batvalide, DROP autorisationsyndic, DROP autorisationmairie, DROP devisrecu, DROP chiffrageht, DROP chiffragehtvalide, DROP budget, DROP numcommande, DROP poserealiseeetcommentaires, DROP contacts');
    }
}
