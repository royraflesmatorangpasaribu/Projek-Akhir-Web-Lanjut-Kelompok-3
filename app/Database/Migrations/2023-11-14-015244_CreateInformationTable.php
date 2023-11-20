<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInformationTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'        => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true
            ],

            'date'      => [
                'type'              => 'DATE'
            ],  

            'title'     => [
                'type'              => 'VARCHAR',
                'constraint'        => '255'
            ],

            'text'      => [
                'type'              => 'TEXT'
            ]
            ]);

            $this->forge->addKey('id', true, true);
            $this->forge->createTable('information');
    }

    public function down()
    {
        $this->forge->dropTable('information', true);
    }
}