<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_invoice_distribusi extends CI_Migration
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
			'nomor_tranaksi' => array(
                'type' => 'VARCHAR',
				'constraint' => '255',
            ),
			'tanggal' => array(
                'type' => 'TIMESTAMP'
            ),
			'catatan' => array(
                'type' => 'TEXT',
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
		
        // Create Table user_privilages
        $this->dbforge->create_table("invoice_distribusi", TRUE, $attributes);
    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table user
        $this->dbforge->drop_table("invoice_distribusi", TRUE);
    }

}
