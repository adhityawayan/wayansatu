 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends MY_Controller {
	function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Barang_model');
        $this->load->model('Tipe_barang_model');
        $this->load->model('Supplier_model');
    }
	public function index()
	{
		$data["caption"] 	= "Barang";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Barang",
									"url" => ""
								)
							);
							
		$this->template('barang/list', $data);
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

        $t              = $this->Barang_model->get_limit_data($iDisplayStart, $iDisplayLength);
        $iTotalRecords  = $t['total_rows'];
        $get_data       = $t['get_db'];

        $records["data"] = array();

        $i=$iDisplayStart+1;
        if ($get_data) {
            foreach ($get_data as $d) {
                $checkbok= '<input type="checkbox" name="id[]" value="'.$d->id.'">';
                $edit    = anchor(site_url('Barang/form/'.$d->id),'<i class="fa fa-pencil-square-o fa-lg"></i>',array('title'=>'edit','class'=>'btn btn-icon-only blue'));
                $delete  = '<button class="btn btn-icon-only red delete" title="delete" data-title="'.$d->{$this->Barang_model->label}.'" data-url="'.site_url('Barang/delete/'.$d->id).'"><i class="fa fa-trash fa-lg"></i></button>';

                $records["data"][] = array(
                    $checkbok,
                
					@$d->tipe->{$this->Tipe_barang_model->label}, 
					@$d->supplier->{$this->Supplier_model->label}, 
					$d->section, 
					$d->deskripsi, 
					number_format($d->berat,3,",","."),
                    $edit.$delete
                );
            }
        }
        $records["draw"] = $sEcho;
        $records["recordsTotal"] = $iTotalRecords;
        $records["recordsFiltered"] = $iTotalRecords;

        $this->output->set_content_type('application/json')->set_output(json_encode($records));
	}
	public function form($id=null)
	{
		$data["caption"] 	= "Form Barang";
		$data["breadcrumb"]	= array(
								array(
									"label" => "Barang",
									"url" => "Barang"
								),
								array(
									"label" => "Form",
									"url" => ""
								)
							);
		 if (empty($id)) {
            $data['row']       = null;
            $data['id']        = '';
        }else{
            $row = $this->Barang_model->get($id);

            if ($row) {
                $data['row']       = $row;
                $data['id']        = $row->id;
            } else {
                show_error('Data not found');
            }
        }					
		$data["action"] 	= "Barang/form_action";
		$data["action_back"] 	= "Barang";
		$this->template('barang/form', $data);
	}
	public function form_action()
    {
		// var_dump($this->input->post());
        $res['success'] = false;
        $res['message'] = 'Simpan gagal';
        
        $this->form_validation->set_rules('tipe','Tipe Barang','trim|required');
        $this->form_validation->set_rules('supplier','Supplier','trim|required');
        $this->form_validation->set_rules('section','Section','trim|required');
        $this->form_validation->set_rules('deskripsi','deskripsi','trim|required');
        $this->form_validation->set_rules('berat','berat','trim|required');

        if ($this->form_validation->run() == FALSE) {
            $res['message'] = 'Lengkapi form dengan benar';
            $res['field_error'] = $this->form_validation->error_array();
        } else {
            $data = array(
                        'tipe_barang' => $this->input->post('tipe'),
                        'supplier' => $this->input->post('supplier'),
                        'section' => $this->input->post('section'),
                        'deskripsi' => $this->input->post('deskripsi'),
                        'berat' => str_replace(",",".",str_replace(".","",$this->input->post('berat')))
                    );
            if (empty($this->input->post('id'))) {
				$checksection = $this->Barang_model->get(array("section"=>$this->input->post('section'), "supplier"=>$this->input->post('supplier')));
				if($checksection){
					$res['success'] = false;
					$res['message'] = 'Section Pada Supplier Tersebut Sudah Terdaftar';
				}else{
					if($this->Barang_model->insert($data)){
						$res['url']     = site_url('Barang');
						$res['success'] = true;
						$res['message'] = 'Simpan berhasil';
					}
				}
            }else{
                $row = $this->Barang_model->get($this->input->post('id'));

                if ($row) {
					$checksection = $this->Barang_model->checkSectionEdit();
					if($checksection){
						$res['success'] = false;
						$res['message'] = 'Section Sudah Terdaftar';
					}else{
						if($this->Barang_model->update($data,$this->input->post('id'))){
							$res['url']     = site_url('Barang');
							$res['success'] = true;
							$res['message'] = 'Simpan berhasil';
						}
					}
                } else {
                    $res['success'] = false;
                    $res['message'] = 'Data not found';
                }
            }
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($res));
    }
	public function delete($id)
    {
        $res['success'] = false;
        $res['message'] = 'Hapus gagal';
        $row = $this->Barang_model->get($id);

        if ($row) {
            $this->Barang_model->delete($id);
            $res['success'] = true;
            $res['message'] = 'Hapus berhasil';
        } else {
            $res['message'] = 'Data tidak ditemukan';
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($res));
    }

    public function delete_checked()
    {
        $id_array=$this->input->post('id[]');
        foreach ($id_array as $id) {
            $row = $this->Barang_model->get($id);

            if ($row) {
                $this->Barang_model->delete($id);
            }
        }
        $result["customActionStatus"]="OK";
        $result["customActionMessage"]="Delete Record Success";
        return $result;
    }
	public function getData($id){
		$data = $this->Barang_model->get($id);
		
		echo json_encode($data);
	}
}
