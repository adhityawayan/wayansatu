<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_sales_contract_detail extends CI_Migration
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
			'barang' => array(
                'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
            ),
			'harga_dasar' => array(
                'type' => 'FLOAT'
            ),
			'panjang' => array(
                'type' => 'FLOAT'
            ),
			'finishing' => array(
                'type' => 'VARCHAR',
				'constraint' => '255',
            ),
			'harga_finishing' => array(
                'type' => 'FLOAT'
            ),
			'ppn_status' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
			'qty_order' => array(
                'type' => 'INT',
                'constraint' => '11',
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
		$this->dbforge->add_field('FOREIGN KEY (barang) REFERENCES barang(id)');
		
        // Create Table user_privilages
        $this->dbforge->create_table("sales_contract_detail", TRUE, $attributes);
    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table user
        $this->dbforge->drop_table("sales_contract_detail", TRUE);
    }

}
