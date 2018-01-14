 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengiriman extends MY_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Pengiriman_model');
    }
	public function index()
	{
		$data["caption"] 	= "Pengiriman";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Pengiriman",
									"url" => ""
								)
							);
							
		$this->template('pengiriman/list', $data);
	}
	public function getDatatable(){
		$customActionName=$this->input->post('customActionName');
        $records         = array();

        if ($customActionName == "delete") {
            $records=$this-> delete_checked();
        }

        $iDisplayLength = ($this->input->get_post('length')) ? $this->input->get_post('length') : 10 ;
        $iDisplayStart  = ($this->input->get_post('start')) ? $this->input->get_post('start') : 0 ;
        $sEcho          = ($this->input->get_post('draw')) ? $this->input->get_post('draw') : 1 ;

        $t              = $this->Pengiriman_model->get_limit_data($iDisplayStart, $iDisplayLength);
        $iTotalRecords  = $t['total_rows'];
        $get_data       = $t['get_db'];

        $records["data"] = array();
		
		$i=$iDisplayStart+1;
        if ($get_data) {
            foreach ($get_data as $d) {
                $checkbok= '<input type="checkbox" name="id[]" value="'.$d->id.'">';
                // $edit    = anchor(site_url('Barang/form/'.$d->id),'<i class="fa fa-pencil-square-o fa-lg"></i>',array('title'=>'edit','class'=>'btn btn-icon-only blue'));
                // $delete  = '<button class="btn btn-icon-only red delete" title="delete" data-title="'.$d->{$this->Barang_model->label}.'" data-url="'.site_url('Barang/delete/'.$d->id).'"><i class="fa fa-trash fa-lg"></i></button>';

                $records["data"][] = array(
                    $checkbok,
					$d->nomor_surat_jalan,
					@$d->customer->nama,
					@$d->supplier->nama,
					@$d->tanggal,
					@$d->tujuan_pengiriman,
					''
                );
            }
        }
        $records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;

        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}
}
?>