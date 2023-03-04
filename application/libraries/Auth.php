<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth
{
    protected $ci;
    public $login_status;
    public $user;
    
    public $group;
    public $instalasi; //array('kode_instalasi', 'nama_instalasi', 'nick_instalasi')
    public $poli; //array('kode_poli', 'nama_poli', 'nick_poli')

    public $permissions;

    public function __construct()
    {
        $ci =& get_instance();
        $ci->load->library('session');
        
        $this->login_status = $ci->session->userdata('login_status');
        
        $this->user['id_user'] = $ci->session->userdata('id_user');
        $this->user['id_login'] = $ci->session->userdata('id_login');
        $this->user['nama_user'] = $ci->session->userdata('nm_user');
        $this->user['foto'] = $ci->session->userdata('foto');
        
        $this->user['id_group'] = $ci->session->userdata('id_group');
        $this->user['id_instalasi'] = $ci->session->userdata('id_instalasi');
        $this->user['id_poli'] = $ci->session->userdata('id_poli');

        $this->group = $ci->session->userdata('group');
        $this->instalasi = $ci->session->userdata('instalasi');
        $this->poli = $ci->session->userdata('poli');
                
        $this->permissions = $ci->session->userdata('permissions');
        
        $this->ci = $ci;        
    }
    
    public function is_authenticated()
    {
        if (!$this->login_status) {
            return false;
        } else {
            return true;
        }
    }
    
    public function is_allowed($controller, $method)
    {
        $exclude = array(
            'dashboard' => array(
                'index',
            ),
            'home' => array(
                'index',
                'pendaftaran'
            ),
            'user' => array(
                'index',
                'login',
                'logout',
                'ubahpass',
                'ubahprofil',
                'profil',
                'setgroup',
                'setinstpoli',
            ),
        );
        
        $permissions = $this->permissions;
        
        if ($this->get_user('id_group') == 'administrator') {
            return true;
        }
        if (isset($exclude[$controller])) {
            if (in_array($method, $exclude[$controller])) {
                return true;
            }
        } 
        if (isset($permissions[$controller])) {
            if (in_array($method, $permissions[$controller])) {
                return true;
            }
        }
    }
    
    public function get_user($property = null)
    {
        if (isset($property)) {
            if (isset($this->user[$property])) {
                return $this->user[$property];
            } else {
                return false;
            }
        } else {
            return $this->user;
        }
    }
    
    public function get_permissions($controller = null)
    {
        if (isset($this->permissions[$controller])) {
            return $this->permissions[$controller];
        } else {
            return $this->permissions;
        }
    }
}