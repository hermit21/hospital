<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180213191339 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE klucze_pracownikow CHANGE empoyee_key employee_key VARCHAR(64) NOT NULL');
        $this->addSql('ALTER TABLE pacjenci DROP second_name, CHANGE address address VARCHAR(50) NOT NULL, CHANGE pesel pesel INT NOT NULL, CHANGE username username VARCHAR(45) NOT NULL, CHANGE identity_cart_number identity_card_number VARCHAR(9) NOT NULL');
        $this->addSql('ALTER TABLE pracownicy DROP second_name, CHANGE address address VARCHAR(50) NOT NULL, CHANGE pesel pesel INT NOT NULL, CHANGE username username VARCHAR(45) NOT NULL, CHANGE identity_cart_number identity_card_number VARCHAR(9) NOT NULL');
        $this->addSql('ALTER TABLE wyniki_badan ADD medicine VARCHAR(64) NOT NULL, CHANGE result result VARCHAR(20) NOT NULL');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE klucze_pracownikow CHANGE employee_key empoyee_key VARCHAR(64) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE pacjenci ADD second_name VARCHAR(15) NOT NULL COLLATE utf8_unicode_ci, CHANGE address address VARCHAR(45) NOT NULL COLLATE utf8_unicode_ci, CHANGE pesel pesel VARCHAR(11) NOT NULL COLLATE utf8_unicode_ci, CHANGE username username VARCHAR(40) NOT NULL COLLATE utf8_unicode_ci, CHANGE identity_card_number identity_cart_number VARCHAR(9) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE pracownicy ADD second_name VARCHAR(15) NOT NULL COLLATE utf8_unicode_ci, CHANGE address address VARCHAR(45) NOT NULL COLLATE utf8_unicode_ci, CHANGE pesel pesel VARCHAR(11) NOT NULL COLLATE utf8_unicode_ci, CHANGE username username VARCHAR(40) NOT NULL COLLATE utf8_unicode_ci, CHANGE identity_card_number identity_cart_number VARCHAR(9) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE wyniki_badan DROP medicine, CHANGE result result VARCHAR(15) NOT NULL COLLATE utf8_unicode_ci');
    }
}
