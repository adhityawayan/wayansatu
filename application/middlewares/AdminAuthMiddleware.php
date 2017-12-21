<?php
/**
 * Author: https://github.com/davinder17s
 * Email: davinder17s@gmail.com
 * Repository: https://github.com/davinder17s/codeigniter-middleware
 */
class AdminAuthMiddleware {
    protected $controller;
    protected $ci;
    public $roles = array();
    public function __construct($controller, $ci)
    {
        $this->controller = $controller;
        $this->ci = $ci;
    }
    public function run(){
        $without_login = array('auth');
        // $logged_in = $this->ci->session->userdata('logged_in');
        if (in_array($this->controller->router->class, $without_login)) {
            # code...
        }
        else {
            $token = $this->controller->get_cookie('authorization');
            var_dump( JWT::decode($token, $this->config->item('jwt_key')) );

        }
        // else{
        //     $message='You are not allowed to perform this operation';
        //     if($this->controller->input->is_ajax_request()){
        //         $response['success'] = false;
    	// 		$response['message'] = $messagge;
        //         $this->output->set_content_type('application/json')->set_output(json_encode($message));
        //     }else{
        //         show_error($message);
        //     }
        //
        // }
        // $this->roles = array('index','read', 'view', 'edit');
        // if (in_array($this->controller->router->method, $this->roles)) {
        //     # code...
        // }else{
        //     show_error('You are not allowed to perform this operation');
        // }
    }
}
