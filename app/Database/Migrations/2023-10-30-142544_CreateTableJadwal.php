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
            'senin' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'selasa' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'rabu' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'kamis' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'jumat' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'sabtu' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
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
        // $this->forge->addForeignKey('id_dokter', 'dokter', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('jadwal');  
    }

    public function down()
    {
        $this->forge->dropTable('jadwal', true);
    }
}
