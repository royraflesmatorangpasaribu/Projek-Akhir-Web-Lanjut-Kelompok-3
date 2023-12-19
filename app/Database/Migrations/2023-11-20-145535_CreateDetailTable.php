<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDetailTable extends Migration
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

            'id_task'  => [
                'type' => 'int', 
                'constraint' => 11, 
                'unsigned' => true,
            ],

            'nama_siswa'   => [
                'type'              => 'VARCHAR',
                'constraint'        => '225',
            ], 

            'file'   => [
                'type'              => 'VARCHAR',
                'constraint'        => '225',
            ],
            
            'nilai'   => [
                'type'              => 'INT',
                'constraint'        => 11,
                'null'               => true,
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
        $this->forge->addForeignKey('id_task', 'task', 'id');
        $this->forge->createTable('detail_task');
    }

    public function down()
    {
        $this->forge->dropTable('detail_task', true);
    }
}
