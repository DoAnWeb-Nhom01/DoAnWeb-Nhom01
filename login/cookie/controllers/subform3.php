<?php
class Subform3 extends CI_Controller {
    function __construct()
        {
            parent::__construct();
        }
    function index(){             
         $ndata = array(
            'title'          => "Ghi nhớ khi đăng nhập cùng CodeIgniter",
            'keywords'       => "Hoangcode Programming Blog, Huong Dan, jQuery, Ajax, PHP, MySQL and Demo",
            'description'    => "Hoangcode là Blog về lập trình được phát triển và duy trì bởi Hoàng Code CI. Hướng dẫn cơ bản, Jquery, Ajax, PHP, Demo, CSS3, Javascript, Codeigniter and MySQL."
            );            
        $this->load->view('tem-subform3',$ndata);            
        }          
        
    function submit() {
        $session_set_value = $this->session->all_userdata();
        $this->load->library('form_validation');
        if (isset($session_set_value['remember_me']) && $session_set_value['remember_me'] == "1") 
            {
                 $ndata = array(
                    'title'          => "Website Admincp",
                    'keywords'       => "Hoangcode Programming Blog, Huong Dan, jQuery, Ajax, PHP, MySQL and Demo",
                    'description'    => "Hoangcode là Blog về lập trình được phát triển và duy trì bởi Hoàng Code CI. Hướng dẫn cơ bản, Jquery, Ajax, PHP, Demo, CSS3, Javascript, Codeigniter and MySQL."
                    );                  
                $this->load->view('tem-admincp',$ndata);
            } 
        else 
            {
                $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
                $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
                
                if ($this->form_validation->run() == FALSE) 
                {
                     $ndata = array(
                        'title'          => "Lỗi, chưa điền thông tin đầy đủ",
                        'keywords'       => "Hoangcode Programming Blog, Huong Dan, jQuery, Ajax, PHP, MySQL and Demo",
                        'description'    => "Hoangcode là Blog về lập trình được phát triển và duy trì bởi Hoàng Code CI. Hướng dẫn cơ bản, Jquery, Ajax, PHP, Demo, CSS3, Javascript, Codeigniter and MySQL."
                        );            
                    $this->load->view('tem-subform3',$ndata);
                } 
                else 
                {
                    $username = $this->input->post('username');
                    $password = $this->input->post('password');
                    if ($username == "Hoangcode.com" && $password == "123456") 
                    {
                        $remember = $this->input->post('remember_me');
                        if ($remember) 
                        {
                            $this->session->set_userdata('remember_me', TRUE);
                        }
                        $sess_data = array(
                            'username' => $username,
                            'password' => $password
                        );
                        $this->session->set_userdata( $sess_data); 
                          $ndata = array(
                            'title'          => "Website Admincp",
                            'keywords'       => "Hoangcode Programming Blog, Huong Dan, jQuery, Ajax, PHP, MySQL and Demo",
                            'description'    => "Hoangcode là Blog về lập trình được phát triển và duy trì bởi Hoàng Code CI. Hướng dẫn cơ bản, Jquery, Ajax, PHP, Demo, CSS3, Javascript, Codeigniter and MySQL."
                            );                       
                        $this->load->view('tem-admincp',$ndata);
                    } 
                    else 
                    {
                        $data = array(
                        'title'          => "Tên đăng nhập hoặc mật khẩu không đúng",
                        'keywords'       => "Hoangcode Programming Blog, Huong Dan, jQuery, Ajax, PHP, MySQL and Demo",
                        'description'    => "Hoangcode là Blog về lập trình được phát triển và duy trì bởi Hoàng Code CI. Hướng dẫn cơ bản, Jquery, Ajax, PHP, Demo, CSS3, Javascript",                        
                        'error'         => 'Tên đăng nhập hoặc mật khẩu không đúng'                   
                        );
                        $this->load->view('tem-subform3', $data);
                    }
                }
            }
}

    // Logout from admin page
    function thoat() {
        
        // Destroy session data
        $this->session->sess_destroy();
                $data = array(
                'title'          => "Thoát hệ thống thành công !",
                'keywords'       => "Hoangcode Programming Blog, Huong Dan, jQuery, Ajax, PHP, MySQL and Demo",
                'description'    => "Hoangcode là Blog về lập trình được phát triển và duy trì bởi Hoàng Code CI. Hướng dẫn cơ bản, Jquery, Ajax, PHP, Demo, CSS3, Javascript"              
                );
        $this->load->view('tem-subform3', $data);
    }        
        
        
} 
?>