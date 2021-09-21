<?php
    class MY_Controller extends CI_Controller{
        public function construct()
        {
            parent::__construct();
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