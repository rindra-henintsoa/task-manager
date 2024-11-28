<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241128102616 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tache (id INT AUTO_INCREMENT NOT NULL, utilisateur_assigne_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, descritpion LONGTEXT NOT NULL, status VARCHAR(255) NOT NULL, priorite VARCHAR(255) NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, INDEX IDX_93872075BCC348A6 (utilisateur_assigne_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tache ADD CONSTRAINT FK_93872075BCC348A6 FOREIGN KEY (utilisateur_assigne_id) REFERENCES `user` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tache DROP FOREIGN KEY FK_93872075BCC348A6');
        $this->addSql('DROP TABLE tache');
    }
}
