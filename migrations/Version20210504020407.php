<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210504020407 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE feedback (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(100) NOT NULL, content LONGTEXT DEFAULT NULL, dt_created DATETIME NOT NULL, dt_updated DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE response_primary_scores (id INT AUTO_INCREMENT NOT NULL, score_id INT NOT NULL, response_id VARCHAR(100) NOT NULL, UNIQUE INDEX UNIQ_5AEC4358FBF32840 (response_id), UNIQUE INDEX UNIQ_5AEC435812EB0A51 (score_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE response_scores (id INT AUTO_INCREMENT NOT NULL, response_id VARCHAR(100) NOT NULL, score NUMERIC(10, 2) DEFAULT NULL, max_score NUMERIC(10, 2) DEFAULT NULL, grader VARCHAR(36) DEFAULT NULL, source VARCHAR(255) NOT NULL, slot_idx VARCHAR(36) DEFAULT NULL, tag VARCHAR(255) DEFAULT NULL, dt_created DATETIME NOT NULL, dt_updated DATETIME DEFAULT NULL, INDEX IDX_6C2B1071FBF32840 (response_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE score_feedback (id INT AUTO_INCREMENT NOT NULL, score_id INT NOT NULL, feedback_id INT NOT NULL, UNIQUE INDEX UNIQ_252A9B20D249A887 (feedback_id), INDEX IDX_252A9B2012EB0A51 (score_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE session_items (item_id VARCHAR(36) NOT NULL, session_id VARCHAR(36) NOT NULL, item_reference VARCHAR(36) NOT NULL, item_pool_id INT DEFAULT NULL, organisation_id INT NOT NULL, score NUMERIC(10, 2) DEFAULT NULL, max_score NUMERIC(10, 2) DEFAULT NULL, max_score_of_unmarked NUMERIC(10, 2) DEFAULT NULL, max_score_of_attempted NUMERIC(10, 2) DEFAULT NULL, INDEX IDX_3A63519B613FECDF (session_id), PRIMARY KEY(item_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE session_question_responses (response_id VARCHAR(36) NOT NULL, question_id VARCHAR(36) NOT NULL, response_revision INT DEFAULT NULL, UNIQUE INDEX UNIQ_D12A52E41E27F6BF (question_id), PRIMARY KEY(response_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE session_questions (id INT AUTO_INCREMENT NOT NULL, question_id VARCHAR(36) NOT NULL, session_id VARCHAR(36) NOT NULL, item_id VARCHAR(36) DEFAULT NULL, question_reference VARCHAR(36) NOT NULL, UNIQUE INDEX UNIQ_C93E11DF1E27F6BF (question_id), INDEX IDX_C93E11DF126F525E (item_id), INDEX IDX_C93E11DF613FECDF (session_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sessions (session_id VARCHAR(36) NOT NULL, user_id VARCHAR(36) NOT NULL, activity_id VARCHAR(36) NOT NULL, activity_template_id VARCHAR(36) NOT NULL, score NUMERIC(10, 2) DEFAULT NULL, max_score NUMERIC(10, 2) DEFAULT NULL, max_score_of_unmarked NUMERIC(10, 2) DEFAULT NULL, max_score_of_attempted NUMERIC(10, 2) DEFAULT NULL, dt_created DATETIME NOT NULL, dt_updated DATETIME DEFAULT NULL, PRIMARY KEY(session_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE feedback ADD CONSTRAINT FK_D2294458BF396750 FOREIGN KEY (id) REFERENCES score_feedback (feedback_id)');
        $this->addSql('ALTER TABLE response_primary_scores ADD CONSTRAINT FK_5AEC435812EB0A51 FOREIGN KEY (score_id) REFERENCES response_scores (id)');
        $this->addSql('ALTER TABLE response_scores ADD CONSTRAINT FK_6C2B1071BF396750 FOREIGN KEY (id) REFERENCES response_primary_scores (score_id)');
        $this->addSql('ALTER TABLE response_scores ADD CONSTRAINT FK_6C2B1071FBF32840 FOREIGN KEY (response_id) REFERENCES session_question_responses (response_id)');
        $this->addSql('ALTER TABLE score_feedback ADD CONSTRAINT FK_252A9B20D249A887 FOREIGN KEY (feedback_id) REFERENCES feedback (id)');
        $this->addSql('ALTER TABLE score_feedback ADD CONSTRAINT FK_252A9B2012EB0A51 FOREIGN KEY (score_id) REFERENCES response_scores (id)');
        $this->addSql('ALTER TABLE session_items ADD CONSTRAINT FK_3A63519B613FECDF FOREIGN KEY (session_id) REFERENCES sessions (session_id)');
        $this->addSql('ALTER TABLE session_question_responses ADD CONSTRAINT FK_D12A52E41E27F6BF FOREIGN KEY (question_id) REFERENCES session_questions (question_id)');
        $this->addSql('ALTER TABLE session_questions ADD CONSTRAINT FK_C93E11DF1E27F6BF FOREIGN KEY (question_id) REFERENCES session_question_responses (question_id)');
        $this->addSql('ALTER TABLE session_questions ADD CONSTRAINT FK_C93E11DF126F525E FOREIGN KEY (item_id) REFERENCES session_items (item_id)');
        $this->addSql('ALTER TABLE session_questions ADD CONSTRAINT FK_C93E11DF613FECDF FOREIGN KEY (session_id) REFERENCES sessions (session_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE score_feedback DROP FOREIGN KEY FK_252A9B20D249A887');
        $this->addSql('ALTER TABLE response_scores DROP FOREIGN KEY FK_6C2B1071BF396750');
        $this->addSql('ALTER TABLE response_primary_scores DROP FOREIGN KEY FK_5AEC435812EB0A51');
        $this->addSql('ALTER TABLE score_feedback DROP FOREIGN KEY FK_252A9B2012EB0A51');
        $this->addSql('ALTER TABLE feedback DROP FOREIGN KEY FK_D2294458BF396750');
        $this->addSql('ALTER TABLE session_questions DROP FOREIGN KEY FK_C93E11DF126F525E');
        $this->addSql('ALTER TABLE response_scores DROP FOREIGN KEY FK_6C2B1071FBF32840');
        $this->addSql('ALTER TABLE session_questions DROP FOREIGN KEY FK_C93E11DF1E27F6BF');
        $this->addSql('ALTER TABLE session_question_responses DROP FOREIGN KEY FK_D12A52E41E27F6BF');
        $this->addSql('ALTER TABLE session_items DROP FOREIGN KEY FK_3A63519B613FECDF');
        $this->addSql('ALTER TABLE session_questions DROP FOREIGN KEY FK_C93E11DF613FECDF');
        $this->addSql('DROP TABLE feedback');
        $this->addSql('DROP TABLE response_primary_scores');
        $this->addSql('DROP TABLE response_scores');
        $this->addSql('DROP TABLE score_feedback');
        $this->addSql('DROP TABLE session_items');
        $this->addSql('DROP TABLE session_question_responses');
        $this->addSql('DROP TABLE session_questions');
        $this->addSql('DROP TABLE sessions');
    }
}
