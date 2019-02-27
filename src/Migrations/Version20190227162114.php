<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190227162114 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE property ADD property_area INT NOT NULL, ADD property_rooms INT NOT NULL, ADD property_badrooms INT NOT NULL, ADD property_floor INT NOT NULL, ADD property_price INT NOT NULL, ADD property_heat INT NOT NULL, ADD property_city VARCHAR(255) NOT NULL, ADD property_address VARCHAR(255) NOT NULL, ADD property_postal_code VARCHAR(255) NOT NULL, DROP area, DROP rooms, DROP badrooms, DROP floor, DROP price, DROP heat, DROP city, DROP address, DROP postal_code, CHANGE description property_description LONGTEXT DEFAULT NULL, CHANGE created_at property_created_at DATETIME NOT NULL, CHANGE sold property_sold TINYINT(1) DEFAULT \'0\' NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE property ADD area INT NOT NULL, ADD rooms INT NOT NULL, ADD badrooms INT NOT NULL, ADD floor INT NOT NULL, ADD price INT NOT NULL, ADD heat INT NOT NULL, ADD city VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD address VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, ADD postal_code VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, DROP property_area, DROP property_rooms, DROP property_badrooms, DROP property_floor, DROP property_price, DROP property_heat, DROP property_city, DROP property_address, DROP property_postal_code, CHANGE property_description description LONGTEXT DEFAULT NULL COLLATE utf8mb4_unicode_ci, CHANGE property_created_at created_at DATETIME NOT NULL, CHANGE property_sold sold TINYINT(1) DEFAULT \'0\' NOT NULL');
    }
}
