<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210503102117 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE response_scores (id INT AUTO_INCREMENT NOT NULL, response_id VARCHAR(100) NOT NULL, score NUMERIC(10, 2) DEFAULT NULL, max_score NUMERIC(10, 2) DEFAULT NULL, grader VARCHAR(36) DEFAULT NULL, source VARCHAR(255) DEFAULT NULL, slot_index VARCHAR(36) DEFAULT NULL, tag VARCHAR(255) DEFAULT NULL, dt_created DATETIME NOT NULL, dt_updated DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE response_scores');
    }
}
