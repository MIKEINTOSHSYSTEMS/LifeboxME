<?php

use yii\db\Migration;

class m200627_224958_update_to_1_2 extends Migration
{
    public function safeUp()
    {
        // addon_postgres table
        $table = '{{%addon_postgres}}';
        $tableSchema = $this->db->schema->getTableSchema($table, true);

        if ($tableSchema !== null) {
            if (!isset($tableSchema->columns['name'])) {
                $this->addColumn($table, 'name', $this->text()->notNull()->after('status'));
            }

            if (!isset($tableSchema->columns['event'])) {
                $this->addColumn($table, 'event', $this->integer()->notNull()->defaultValue(1)->after('name'));
            }

            if (!isset($tableSchema->columns['conditions'])) {
                $this->addColumn($table, 'conditions', $this->text()->after('event'));
            }
        }

        // addon_postgres_field table
        $table = '{{%addon_postgres_field}}';
        $tableSchema = $this->db->schema->getTableSchema($table, true);

        if ($tableSchema !== null) {
            if (!isset($tableSchema->columns['postgres_id'])) {
                $this->addColumn($table, 'postgres_id', $this->integer(11)->notNull()->after('id'));
            }
        }
    }

    public function safeDown()
    {
        // addon_postgres table
        $table = '{{%addon_postgres}}';
        $tableSchema = $this->db->schema->getTableSchema($table, true);

        if ($tableSchema !== null) {
            if (isset($tableSchema->columns['conditions'])) {
                $this->dropColumn($table, 'conditions');
            }

            if (isset($tableSchema->columns['event'])) {
                $this->dropColumn($table, 'event');
            }

            if (isset($tableSchema->columns['name'])) {
                $this->dropColumn($table, 'name');
            }
        }

        // addon_postgres_field table
        $table = '{{%addon_postgres_field}}';
        $tableSchema = $this->db->schema->getTableSchema($table, true);

        if ($tableSchema !== null) {
            if (isset($tableSchema->columns['postgres_id'])) {
                $this->dropColumn($table, 'postgres_id');
            }
        }
    }
}
