<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateClassTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => [
                'type'          => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
                'auto_increment'    => true,
            ],

            'name_class'        => [
                'type'          => 'VARCHAR',
                'constraint'    => '10',
            ],

            'created_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],

            'updated_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],

            'deleted_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],

        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('class');
    }

    public function down()
    {
        $this->forge->dropTable('class', true);
    }
}
