<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_pengiriman_detail extends CI_Migration
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
                'null' => TRUE
            ),
			'sales_contract_id' => array(
                'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
                'null' => TRUE
            ),
			'sales_contract_detail_id' => array(
                'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
                'null' => TRUE
            ),
			'jumlah_kirim' => array(
                'type' => 'INT',
                'constraint' => '11',
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
		$this->dbforge->add_field('FOREIGN KEY (parent) REFERENCES pengiriman(id)');
		$this->dbforge->add_field('FOREIGN KEY (sales_contract_id) REFERENCES sales_contract(id)');
		$this->dbforge->add_field('FOREIGN KEY (sales_contract_detail_id) REFERENCES sales_contract_detail(id)');
		
        // Create Table user_privilages
        $this->dbforge->create_table("pengiriman_detail", TRUE, $attributes);
    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table user
        $this->dbforge->drop_table("pengiriman_detail", TRUE);
    }

}
