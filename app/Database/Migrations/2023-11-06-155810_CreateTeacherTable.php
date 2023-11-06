<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTeacherTable extends Migration
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

            'name'  => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
            ],

            'nip'   => [
                'type'              => 'INT',
                'constraint'        => 20,
            ], 

            'username'  => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
            ],

            'password'  => [
                'type'              => 'INT',
                'constraint'        => 20,
            ],

            'id_class' => [
                'type'              => 'INT',
                'constraint'        => 5,
                'unsigned'          => true,
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

        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_class', 'class', 'id');
        $this->forge->createTable('teacher');
    }

    public function down()
    {
        $this->forge->dropTable('teacher', true);
    }
}
