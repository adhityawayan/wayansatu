<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_setting_perusahaan extends CI_Migration
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
            'nama_perusahaan' => array(
                'type' => 'VARCHAR',
                'constraint' => '255'
            ),
            'alamat' => array(
                'type' => 'VARCHAR',
				'constraint' => '255'
            ),
            'telepon' => array(
                'type' => 'VARCHAR',
				'constraint' => '255'
            ),
            'fax' => array(
                'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => TRUE,
            ),
			'email' => array(
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
        // Create Table notifikasi
        $this->dbforge->create_table("setting_perusahaan", TRUE, $attributes);
		
		$data = array(
			array(
				'nama_perusahaan' => 'PT. DWI KREASI JAYA',
				'alamat' => 'Royal Residence B2-100 Raya Babatan, Wiyung, Surabaya',
				'telepon' => '087701111077',
				'fax' => '',
				'email' => 'dwikreasijaya@gmail.com'
			)
		);
		$this->db->insert_batch('setting_perusahaan', $data);
    }

    /**
     * down (drop table)
     *
     * @return void
     */
    public function down()
    {
        // Drop table notifikasi
        $this->dbforge->drop_table("setting_perusahaan", TRUE);
    }

}
