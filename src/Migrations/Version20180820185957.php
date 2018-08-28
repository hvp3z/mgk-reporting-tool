<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180820185957 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE civilite (id INT AUTO_INCREMENT NOT NULL, designation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE intervention (id INT AUTO_INCREMENT NOT NULL, reporting_id INT NOT NULL, INDEX IDX_D11814AB27EE0E60 (reporting_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reporting (id INT AUTO_INCREMENT NOT NULL, type_id INT NOT NULL, nom VARCHAR(255) NOT NULL, datecreation DATETIME NOT NULL, UNIQUE INDEX UNIQ_BD7CFA9FC54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reporting_user (reporting_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_66BBA19127EE0E60 (reporting_id), INDEX IDX_66BBA191A76ED395 (user_id), PRIMARY KEY(reporting_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reporting_type (id INT ATO_INCREMENT NOT NULL, designation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, civilite_id INT NOT NULL, type_id INT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, codepostal VARCHAR(5) NOT NULL, ville VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telfixe VARCHAR(255) DEFAULT NULL, telpro VARCHAR(255) DEFAULT NULL, login VARCHAR(255) NOT NULL, mdp VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D64939194ABF (civilite_id), UNIQUE INDEX UNIQ_8D93D649C54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_type (id INT AUTO_INCREMENT NOT NULL, designation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE intervention ADD CONSTRAINT FK_D11814AB27EE0E60 FOREIGN KEY (reporting_id) REFERENCES reporting (id)');
        $this->addSql('ALTER TABLE reporting ADD CONSTRAINT FK_BD7CFA9FC54C8C93 FOREIGN KEY (type_id) REFERENCES reporting_type (id)');
        $this->addSql('ALTER TABLE reporting_user ADD CONSTRAINT FK_66BBA19127EE0E60 FOREIGN KEY (reporting_id) REFERENCES reporting (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reporting_user ADD CONSTRAINT FK_66BBA191A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64939194ABF FOREIGN KEY (civilite_id) REFERENCES civilite (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649C54C8C93 FOREIGN KEY (type_id) REFERENCES user_type (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64939194ABF');
        $this->addSql('ALTER TABLE intervention DROP FOREIGN KEY FK_D11814AB27EE0E60');
        $this->addSql('ALTER TABLE reporting_user DROP FOREIGN KEY FK_66BBA19127EE0E60');
        $this->addSql('ALTER TABLE reporting DROP FOREIGN KEY FK_BD7CFA9FC54C8C93');
        $this->addSql('ALTER TABLE reporting_user DROP FOREIGN KEY FK_66BBA191A76ED395');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649C54C8C93');
        $this->addSql('DROP TABLE civilite');
        $this->addSql('DROP TABLE intervention');
        $this->addSql('DROP TABLE reporting');
        $this->addSql('DROP TABLE reporting_user');
        $this->addSql('DROP TABLE reporting_type');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_type');
    }
}
