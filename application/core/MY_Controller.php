<?php
    class MY_Controller extends CI_Controller{
        public function __construct()
        {
            parent::__construct();
            if(str_contains(current_url(),'admin')){
                if(!isset($_SESSION['login_acc_type'])){
                    redirect('authentication/login?info=Musisz być zalogowany by mieć do tego dostęp.');
                }
                if(isset($_SESSION['login_acc_type'])){
                    if($_SESSION['login_acc_type']!=1){
                        redirect('authentication/login?info=Musisz mieć prawa administratora aby uzyskać dostęp do tej witryny');
                    }
                }
            }
        }
        public function render_page($page_path, $page, $data){
            $full_path=$page_path.$page;
            if ( ! file_exists('./application/views/'.$full_path.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }

            if(isset($data['title'])) $data['title'] = ucfirst($page); // Capitalize the first letter

            $this->load->view('templates/header', $data);
            $this->load->view($full_path, $data);
            $this->load->view('templates/footer', $data);
        }
    }