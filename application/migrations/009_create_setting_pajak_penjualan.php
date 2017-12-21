<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_setting_pajak_penjualan extends CI_Migration
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
            'status' => array(
                'type' => 'CHAR',
                'constraint' => '1',
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

        // Create Table setting_pajak_penjualan
        $this->dbforge->create_table("setting_pajak_penjualan", TRUE, $attributes);
		$data = array(
			array(
				'status' => '0'
			),
		);
		$this->db->insert_batch('setting_pajak_penjualan', $data);
    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table setting_pajak_penjualan
        $this->dbforge->drop_table("setting_pajak_penjualan", TRUE);
    }

}
