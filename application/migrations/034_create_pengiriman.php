<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_pengiriman extends CI_Migration
{

    /**
     * up (create table)
     *
     * @return void
     */
    public function up()
    {

        // Add Fields.
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
				'auto_increment' => TRUE
            ),
			'supplier' => array(
                'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
            ),
			'tanggal_kirim' => array(
                'type' => 'TIMESTAMP'
            ),
			'tujuan_pengiriman' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
				'null' => TRUE,
            ),
			'nomor_surat_jalan' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
			'catatan' => array(
                'type' => 'TEXT',
                'null' => TRUE,
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'null' => TRUE,
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'null' => TRUE,
            ),
            'deleted_at' => array(
                'type' => 'TIMESTAMP',
                'null' => TRUE,
            ),
            'created_by' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => TRUE,
            ),
            'updated_by' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => TRUE,
            ),
        ));

        // Add Primary Key.
        $this->dbforge->add_key("id", TRUE);

        // Table attributes.

        $attributes = array();
		$this->dbforge->add_field('FOREIGN KEY (supplier) REFERENCES supplier(id)');
		
        // Create Table user_privilages
        $this->dbforge->create_table("pengiriman", TRUE, $attributes);
    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table user
        $this->dbforge->drop_table("pengiriman", TRUE);
    }

}
