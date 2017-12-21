<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_user_privilages extends CI_Migration
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
			'tipe_user' => array(
                'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE
            ),
            'menu' => array(
                'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE				
            ),
			'create' => array(
                'type' => 'INT',
                'constraint' => '11',
				'null' => TRUE
            ),
			'read' => array(
                'type' => 'INT',
                'constraint' => '11',
				'null' => TRUE
            ),
            'update' => array(
                'type' => 'INT',
                'constraint' => '11',
				'null' => TRUE
            ),
			'delete' => array(
                'type' => 'INT',
                'constraint' => '11',
				'null' => TRUE
            ),
            'last_login' => array(
                'type' => 'TIMESTAMP',
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
		
		$this->dbforge->add_field('FOREIGN KEY (tipe_user) REFERENCES tipe_user(id)');
		
		$this->dbforge->add_field('FOREIGN KEY (menu) REFERENCES menu(id)');

        // Create Table user_privilages
        $this->dbforge->create_table("user_privilages", TRUE, $attributes);
    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table user
        $this->dbforge->drop_table("user_privilages", TRUE);
    }

}
