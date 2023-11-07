<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableJadwal extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'hari' => [
                'type' => 'VARCHAR',
                'constraint' => 25,
            ],
            'jam_praktek' => [
                'type' => 'TIME',
                'null' => true,
            ],
            'id_dokter' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'null' => true,
            ],
            'created_at' => [
                'type'  => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type'  => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type'  => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_dokter', 'dokter', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('jadwal');  
    }

    public function down()
    {
        $this->forge->dropTable('jadwal', true);
    }
}
