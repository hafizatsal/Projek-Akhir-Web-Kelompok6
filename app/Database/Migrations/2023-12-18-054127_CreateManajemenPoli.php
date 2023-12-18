<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateManajemenPoli extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_poli' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'kode_poli' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'nama_poli' => [
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type'  => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id_poli');
        $this->forge->createTable('poli', true);//
    }

    public function down()
    {
        $this->forge->dropTable('poli');
    }
}
