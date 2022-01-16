<?php
    class MY_Controller extends CI_Controller{
        public function __construct()
        {
            parent::__construct();

            $this->form_validation->set_message('required', 'Musisz wpisać {field}.');
            $this->form_validation->set_message('integer', '{field} muszą być liczbą.');
            $this->form_validation->set_message('valid_email', 'To nie jest prawidłowy email.');
            $this->form_validation->set_message('matches', '{field} musi być takie samo jak {param}.');

            if(str_contains(current_url(),'admin')){
                if(!isset($_SESSION['login_acc_type'])){
                    redirect('authentication/login?info=Musisz być zalogowany by mieć do tego dostęp.');
                }
                if(isset($_SESSION['login_acc_type'])){
                    if($_SESSION['login_acc_type']!=1){
                        redirect('main/index?info=Musisz mieć prawa administratora aby uzyskać dostęp do tej witryny');
                    }
                }
            }
            else if(str_contains(current_url(),'client')){
                if(!isset($_SESSION['login_acc_type'])){
                    redirect('authentication/login?info=Musisz być zalogowany by mieć do tego dostęp.');
                }
                if(isset($_SESSION['login_acc_type'])){
                    if($_SESSION['login_acc_type']!=0){
                        redirect('main/index?info=Musisz być zalogowany jako klient aby uzyskać dostęp do tej witryny');
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

            if(!isset($_SESSION['login_acc_type'])){
                $this->load->view('templates/header_client', $data);
                $this->load->view($full_path, $data);
                $this->load->view('templates/footer', $data);
            }
            else if($_SESSION['login_acc_type']==0){
                $this->load->view('templates/header_client', $data);
                $this->load->view($full_path, $data);
                $this->load->view('templates/footer_client', $data);
            }
            else if($_SESSION['login_acc_type']==1){
                $this->load->view('templates/header', $data);
                $this->load->view($full_path, $data);
                $this->load->view('templates/footer', $data);
            }
            else{
                $this->load->view('templates/header_client', $data);
                $this->load->view($full_path, $data);
                $this->load->view('templates/footer_client', $data);
            }
            
        }
    }