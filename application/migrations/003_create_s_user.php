<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_s_user extends CI_Migration
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
            'tipe' => array(
                'type' => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned' => TRUE,
            ),
            'nama' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
				
            ),
			'telepon' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
				'null' => TRUE,
            ),
			'username' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'password' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
            ),
			'foto' => array(
                'type' => 'VARCHAR',
				'constraint' => '255',
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

        // Create Table s_user
        $this->dbforge->add_field('FOREIGN KEY (tipe) REFERENCES tipe_user(id)');

        $this->dbforge->create_table("s_user", TRUE, $attributes);
		$data = array(
			array(
				'tipe' => 1,
				'nama'=> 'Administrator',
				'username' => 'beheerder',
				'password' => '$2y$10$oe36uixTBiJ4FQhDchbOPuN0dESx2kB17oF113GdflIHBMbDH5FB2'
			)
		);
		$this->db->insert_batch('s_user', $data);

    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table s_user
        $this->dbforge->drop_table("s_user", TRUE);
    }

}
