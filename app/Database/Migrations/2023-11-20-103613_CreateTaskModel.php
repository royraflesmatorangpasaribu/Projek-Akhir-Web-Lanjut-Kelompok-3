<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTaskModel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'    => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
                'auto_increment'    => true,
            ],

            'id_kelas'  => [
                'type' => 'int', 
                'constraint' => 11, 
                'unsigned' => true,
            ],

            'keterangan'   => [
                'type'              => 'VARCHAR',
                'constraint'        => '225',
            ], 

            'created_at' => [
                'type'              => 'DATETIME',
                'null'               => true,
            ],

            'updated_at' => [
                'type'              => 'DATETIME',
                'null'               => true,
            ],

            'deleted_at' => [
                'type'              => 'DATETIME',
                'null'              => true,
            ],

        ]);

        $this->forge->addKey('id', true,true);
        $this->forge->addForeignKey('id_kelas', 'kelas', 'id');
        $this->forge->createTable('task');
    }

    public function down()
    {
        $this->forge->dropTable('task', true);
    }
}
