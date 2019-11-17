<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191116220747 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE category CHANGE name name VARCHAR(63) NOT NULL');
        $this->addSql('DROP INDEX name ON product');
        $this->addSql('ALTER TABLE product CHANGE category_id category_id INT UNSIGNED DEFAULT NULL, CHANGE brand_id brand_id INT UNSIGNED DEFAULT NULL, CHANGE color_id color_id INT UNSIGNED DEFAULT NULL, CHANGE name name VARCHAR(255) NOT NULL, CHANGE image image VARCHAR(255) DEFAULT NULL, CHANGE price price NUMERIC(5, 2) DEFAULT \'0.00\' NOT NULL');
        $this->addSql('CREATE INDEX name ON product (name)');
        $this->addSql('ALTER TABLE stock DROP stock');
        $this->addSql('ALTER TABLE stock RENAME INDEX size_product TO IDX_4B365660498DA827');
        $this->addSql('ALTER TABLE size CHANGE name name VARCHAR(15) NOT NULL');
        $this->addSql('ALTER TABLE color CHANGE name name VARCHAR(31) NOT NULL');
        $this->addSql('ALTER TABLE brand CHANGE name name VARCHAR(63) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE brand CHANGE name name VARCHAR(63) CHARACTER SET utf8mb4 DEFAULT \'\' NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE category CHANGE name name VARCHAR(63) CHARACTER SET utf8mb4 DEFAULT \'\' NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE color CHANGE name name VARCHAR(31) CHARACTER SET utf8mb4 DEFAULT \'\' NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('DROP INDEX name ON product');
        $this->addSql('ALTER TABLE product CHANGE brand_id brand_id INT UNSIGNED NOT NULL, CHANGE category_id category_id INT UNSIGNED NOT NULL, CHANGE color_id color_id INT UNSIGNED NOT NULL, CHANGE name name VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'\' NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE image image VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT \'\' COLLATE `utf8mb4_unicode_ci`, CHANGE price price NUMERIC(5, 2) UNSIGNED DEFAULT \'0.00\' NOT NULL');
        $this->addSql('CREATE INDEX name ON product (name(191))');
        $this->addSql('ALTER TABLE size CHANGE name name VARCHAR(15) CHARACTER SET utf8mb4 DEFAULT \'\' NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE stock ADD stock INT UNSIGNED DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE stock RENAME INDEX idx_4b365660498da827 TO size_product');
    }
}
