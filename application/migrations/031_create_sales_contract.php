<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_sales_contract extends CI_Migration
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
			'nomor_do' => array(
                 'type' => 'VARCHAR',
                'constraint' => '255',
            ),
			'customer' => array(
                'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
            ),
			'supplier' => array(
                'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
				'null' => TRUE,
            ),
			'nomor_sc' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
			'tanggal' => array(
                'type' => 'TIMESTAMP'
            ),
			'nomor_pesanan' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
				'null' => TRUE,
            ),
			'tanggal_disetujui' => array(
                'type' => 'TIMESTAMP',
				'null' => TRUE,
            ),
			'status' => array(
                'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
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
		$this->dbforge->add_field('FOREIGN KEY (customer) REFERENCES customer(id)');
		$this->dbforge->add_field('FOREIGN KEY (supplier) REFERENCES supplier(id)');
		$this->dbforge->add_field('FOREIGN KEY (status) REFERENCES status_distribusi(id)');
		
        // Create Table user_privilages
        $this->dbforge->create_table("sales_contract", TRUE, $attributes);
    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table user
        $this->dbforge->drop_table("sales_contract", TRUE);
    }

}
