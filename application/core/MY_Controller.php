<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    public $title;
    public $page_title;
    public $data;
    public $layout = 'layout';
    public $result_mode = 'array';
    public $dump_mode = false;

    protected $extra_scripts = '';
    protected $extra_styles = '';
    protected $extra_views = '';
    
    public $name;
    private $user;
    
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        
        $this->load->library('session');
        $this->load->library('Auth');
        $this->load->helper('url');
      
        $controller = strtolower($this->router->fetch_class());
        $method = strtolower($this->router->fetch_method());
        
        if (empty($this->name)) {
            $this->name = get_class($this);
        }
        
        if (!$this->auth->is_authenticated()) {
            if (!(($controller == 'user') && (in_array($method, array('login', 'logout'))))) {
                $message = 'Tidak dapat mengakses. Anda belum login';
                $this->set_flash_message($message, 'danger');
                $this->redirect_to_login_page();
                return;
            }
        } else {
            //if (!$this->auth->get_user('id_group')) {
            //    if (!(($controller == 'user') && (in_array($method, array('setgroup', 'login', 'logout'))))) {
            //        $message = 'Anda belum memilih group user';
            //        $this->set_flash_message($message, 'danger');
            //        $this->redirect_to_set_group();
            //    }
            //} else {
            //    if (in_array($this->auth->get_user('id_group'), array('dokter', 'perawat'))) {
            //        if (!$this->auth->get_user('id_instalasi') || !$this->auth->get_user('id_poli')) {
            //            if (!(($controller == 'user') && (in_array($method, array('setinstpoli', 'login', 'logout'))))) {
            //                $message = 'Anda login sebagai ' . $this->auth->group['nama_group'] . ' Instalasi &amp; poli belum di set. Silakan pilih instalasi &amp; poli';
            //                $this->set_flash_message($message, 'danger');
            //                $this->redirect_to_set_inst_poli();
            //            }
            //        }
            //    } else {
            //        $allowed = $this->auth->is_allowed($controller, $method);
            //        if (!$allowed) {
            //            $this->set_flash_message($controller . ' - ' . $method, 'danger');
            //            $this->redirect_to_forbidden();
            //        }                    
            //    }
            //}
            
            //if (!$this->auth->get_user('id_group')) {
            //    if (!(($controller == 'user') && (in_array($method, array('setgroup', 'login', 'logout'))))) {
            //        $message = 'Anda belum memilih group user';
            //        $this->set_flash_message($message, 'danger');
            //        $this->redirect_to_set_group();
            //    }
            //} else if (in_array($this->auth->get_user('id_group'), array('dokter', 'perawat'))) {
            //    if (!$this->auth->get_user('id_instalasi') || !$this->auth->get_user('id_poli')) {
            //        if (!(($controller == 'user') && (in_array($method, array('setinstpoli', 'login', 'logout'))))) {
            //            $message = 'Anda login sebagai ' . $this->auth->group['nama_group'] . ' Instalasi &amp; poli belum di set. Silakan pilih instalasi &amp; poli';
            //            $this->set_flash_message($message, 'danger');
            //            $this->redirect_to_set_inst_poli();
            //        }
            //    }
            //} else if (!$this->auth->is_allowed($controller, $method)) {
            //    $this->set_flash_message($controller . ' - ' . $method, 'danger');
            //    $this->redirect_to_forbidden();
            //}
            
            if (!$this->auth->get_user('id_group')) {
                if (!(($controller == 'user') && (in_array($method, array('setgroup', 'login', 'logout'))))) {
                    $message = 'Anda belum memilih group user';
                    $this->set_flash_message($message, 'danger');
                    $this->redirect_to_set_group();
                    return;
                }
            }
            if (in_array($this->auth->get_user('id_group'), array('dokter', 'perawat'))) {
                if (!$this->auth->get_user('id_instalasi') || !$this->auth->get_user('id_poli')) {
                    if (!(($controller == 'user') && (in_array($method, array('setinstpoli', 'login', 'logout'))))) {
                        $message = 'Anda login sebagai ' . $this->auth->group['nama_group'] . ' Instalasi &amp; poli belum di set. Silakan pilih instalasi &amp; poli';
                        $this->set_flash_message($message, 'danger');
                        $this->redirect_to_set_inst_poli();
                        return;
                    }
                }
            }
            if (!$this->auth->is_allowed($controller, $method)) {
                $this->set_flash_message('Akses ditolak', 'danger');
                $this->redirect_to_forbidden();
                return;
            }
        }
    }
        
    protected function redirect_to_login_page()
    {
        //redirect('user/login');
    }
    
    protected function redirect_to_forbidden()
    {
        redirect();
    }

    protected function redirect_to_set_group()
    {
       // redirect('user/setgroup');
    }

    protected function redirect_to_set_inst_poli()
    {
       // redirect('user/setinstpoli');
    }
    
    protected function redirect_to_not_found()
    {
        $this->set_flash_message($message = 'Halaman tidak ditemukan', $type = 'warning');
        redirect();
    }
    
    protected function set($name, $value)
    {
        $this->data[$name] = $value;
    }
    
    protected function render($view, $data = null)
    {
        if (is_array($data) & !empty($data)) {
            $this->data = array_merge((array) $this->data, (array) $data);
        }

        $this->data['extra_styles'] = $this->extra_styles;
        $this->data['extra_scripts'] = $this->extra_scripts;
        $this->data['base_url'] = base_url();
        $this->data['site_url'] = site_url();
        $this->data['title'] = $this->title;
        $this->data['page_title'] = $this->page_title;
        $this->data['user'] = $this->user;
        $this->data['flash_message'] = $this->session->userdata('flash_message');
        $this->data['extra_views'] = $this->extra_views;
        
        if ($this->dump_mode) {
            $this->data['dump'] = 'action="http://localhost/dump.php"';
        } else {
            $this->data['dump'] = '';
        }
        
        $this->clear_flash_message();
        
        $name = strtolower($this->name);
        
        $content_rel_path = $name . '/' . $view;
        $content_abs_path = APPPATH . 'views/' . $content_rel_path . '.php';
        
        if (file_exists($content_abs_path)) {
            $this->data['content'] = $this->load->view($content_rel_path, $this->data, true);
        }
        
        $this->load->view($this->layout, $this->data);
    }

    protected function add_extra_view($view, $data = null)
    {
        if (is_array($data) & !empty($data)) {
            $this->data = array_merge((array) $this->data, (array) $data);
        }
        $this->data['base_url'] = base_url();
        $this->data['site_url'] = site_url();
        $this->data['user'] = $this->user;
        
        $name = strtolower($this->name);
        
        $content_rel_path = $name . '/' . $view;
        $content_abs_path = APPPATH . 'views/' . $content_rel_path . '.php';
        
        if (file_exists($content_abs_path)) {
            $this->extra_views .= $this->load->view($content_rel_path, $this->data, true);
        }
    }
    
    protected function add_script($script_path)
    {
        $script = "\n" . '<script src="' . base_url() . 'assets/' . $script_path . '"></script>';
        $this->extra_scripts .= $script;
    }
    
    protected function add_style($style_path)
    {
        $style = "\n" . '<link rel="stylesheet" href="' . base_url() . 'assets/' . $style_path . '"/>';
        $this->extra_styles .= $style;
    }
    
    protected function set_flash_message($message = '', $type = 'info')
    {
        $alert_type = array('info', 'danger', 'success', 'warning');
        if (!in_array($type, $alert_type)) $type = 'info';
        $this->session->set_userdata('flash_message', array('type' => $type, 'message' => $message));
    }
    
    protected function clear_flash_message()
    {
        $this->session->set_userdata('flash_message', null);
    }
    
    protected function set_json_header()
    {
        header('Content-Type: application/json');
    }

    protected function query($string)
    {
        if ($this->result_mode == 'array') {
            return $this->db->query($string)->result_array();
        } else if ($this->result_mode == 'object'){
            return $this->db->query($string)->result();
        }
    }

    public function dump_user()
    {
        $user = $this->auth->get_user();
        
        echo '<pre>';
        print_r($user);
        echo '</pre>';
    }
}