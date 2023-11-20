<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateParentsTable extends Migration
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

            'username'  => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
            ],

            'email'  => [
                'type'              => 'VARCHAR',
                'constraint'        => '50',
            ],

            'password'  => [
                'type'              => 'INT',
                'constraint'        => 20,
            ],

            'group_id' => [
                'type' => 'int', 
                'constraint' => 11, 
                'unsigned' => true, 
                'default' => 0],

            'user_id' => [
                'type' => 'int', 
                'constraint' => 11, 
                'unsigned' => true, 
                'default' => 0],

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
        $this->forge->addForeignKey('group_id', 'auth_groups', 'id');
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->createTable('parents');
    }

    public function down()
    {
        $this->forge->dropTable('parents', true);
    }  
}
