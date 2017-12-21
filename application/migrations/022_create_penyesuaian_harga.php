<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_penyesuaian_harga extends CI_Migration
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
            'nomor_transaksi' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
			'tanggal' => array(
                'type' => 'DATE'
            ),
			'catatan' => array(
                'type' => 'text',
				'null' => TRUE
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
		
        // Create Table penyesuaian_harga
        $this->dbforge->create_table("penyesuaian_harga", TRUE, $attributes);
    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table penyesuaian_harga
        $this->dbforge->drop_table("penyesuaian_harga", TRUE);
    }

}
