<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_purchase_order extends CI_Migration
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
			'parent' => array(
                'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
            ),
			'nomor_transaksi' => array(
                'type' => 'VARCHAR',
				'null' => TRUE,
            ),
			'tanggal' => array(
                'type' => 'TIMESTAMP'
            ),
			'up' => array(
                'type' => 'INT',
                'constraint' => '11',
				'null' => TRUE,
            ),
			'telepon' => array(
                'type' => 'INT',
                'constraint' => '11',
				'null' => TRUE,
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
		$this->dbforge->add_field('FOREIGN KEY (parent) REFERENCES sales_contract(id)');
		
        // Create Table user_privilages
        $this->dbforge->create_table("purchase_order", TRUE, $attributes);
    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table user
        $this->dbforge->drop_table("purchase_order", TRUE);
    }

}
