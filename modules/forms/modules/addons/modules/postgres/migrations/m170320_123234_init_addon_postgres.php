<?php

/**
 * Copyright (C) Baluart.COM - All Rights Reserved
 *
 * @since 1.0
 * @author Baluart E.I.R.L.
 * @copyright Copyright (c) 2015 - 2023 Baluart E.I.R.L.
 * @license http://codecanyon.net/licenses/faq Envato marketplace licenses
 * @link https://easyforms.dev/ Easy Forms
 */

use yii\db\Migration;

class m170320_123234_init_addon_postgres extends Migration
{
    public function safeUp()
    {
        // Choose table options based on driver
        $tableOptions = null;
        switch ($this->db->driverName) {
            case 'mysql':
                $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci ENGINE=InnoDB';
                break;
            case 'pgsql':
                // PostgreSQL doesn’t need special options here
                $tableOptions = null;
                break;
            case 'sqlite':
                $tableOptions = null;
                break;
        }

        // addon_postgres table
        if ($this->db->schema->getTableSchema('{{%addon_postgres}}', true) === null) {
            $this->createTable('{{%addon_postgres}}', [
                // Basic Settings
                'id' => $this->primaryKey(),
                'form_id' => $this->integer(11)->notNull(),
                'status' => $this->boolean()->notNull()->defaultValue(0),

                // PostgreSQL DB Info
                'db_host' => $this->text()->notNull(),
                'db_port' => $this->integer()->notNull()->defaultValue(5432),
                'db_name' => $this->text()->notNull(),
                'db_user' => $this->text()->notNull(),
                'db_pass' => $this->text(),
                'db_schema' => $this->string(191)->notNull()->defaultValue('public'),
                'db_table' => $this->text()->notNull(),

                // Settings
                'opt_in' => $this->boolean()->defaultValue(0),
                'opt_in_field' => $this->text(),

                'created_by' => $this->integer(11)->notNull(),
                'updated_by' => $this->integer(11)->notNull(),
                'created_at' => $this->integer(),
                'updated_at' => $this->integer(),
            ], $tableOptions);
        }

        // addon_postgres_field table
        if ($this->db->schema->getTableSchema('{{%addon_postgres_field}}', true) === null) {
            $this->createTable('{{%addon_postgres_field}}', [
                'id' => $this->primaryKey(),
                'postgres_id' => $this->integer(11),
                'form_id' => $this->integer(11),
                'form_field' => $this->text(),
                'table_column' => $this->text(),
            ], $tableOptions);
        }
    }

    public function safeDown()
    {
        if ($this->db->schema->getTableSchema('{{%addon_postgres_field}}', true) !== null) {
            $this->dropTable('{{%addon_postgres_field}}');
        }

        if ($this->db->schema->getTableSchema('{{%addon_postgres}}', true) !== null) {
            $this->dropTable('{{%addon_postgres}}');
        }
    }
}
