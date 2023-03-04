<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Model extends CI_Model
{
    public $pk = array();
    public $table_name;
    public $result_mode = 'array';
    public $db_debug;
    
    public function __construct()
    {
        parent::__construct();
        
        if (isset($this->db_debug)) {
            $this->db->db_debug = $this->db_debug;
        }
        //if (!count($this->pk)) {
        //    $this->pk = $get_pk();
        //}
    }
    
    public function get_pk()
    {
        $keys = $this->db->query("SHOW INDEX FROM {$this->table_name} WHERE Key_name = 'PRIMARY'")->result_array();
        $pk = array();
        
        if (count($keys)) {
            foreach ($keys as $idx => $row) {
                $pk[] = $row['Column_name'];
            }
        }
        
        return $pk;
    }
    
    public function find($compact_data = null)
    {
        extract($compact_data);
        
        if (isset($fields)) {
            $this->db->select($fields);
        }
        
        if (isset($filters)) {
            $this->db->where($filters);
        }
        
        if (isset($joins)) {
            foreach ($joins as $idx => $join) {
                $this->db->join($join);
            }
        }
        
        if (isset($orders)) {
            if (is_array($orders[0])) {
                foreach ($orders as $order) {
                    $this->db->order_by($order[0], @$order[1]);
                }
            } else {
                $this->db->order_by($orders[0], @$orders[1]);
            }
        }
        
        if (isset($limit)) {
            if (isset($offset)) {
                $this->db->limit($limit, $offset);
            } else {
                $this->db->limit($limit);
            }
        }
        
        $this->db->from($this->table_name);
        
        if ($this->result_mode == 'array') {
            $result = $this->db->get()->result_array();
        } else if ($this->result_mode == 'object') {
            $result = $this->db->get()->result();
        }
        
        return $result;
    }
    
    public function find_one($compact_data)
    {
        $search = $this->find($compact_data);
        if (count($search)) {
            return $search[0];
        } else {
            return false;
        }
    }
    
    public function find_by_pk($keys)
    {
        if (!count($this->pk)) {
            $this->pk = $get_pk();
        }
        
        $filters = array();
        $pk = $this->pk;
        
        foreach ($pk as $idx => $val) {
            $filters[$val] = $keys[$idx];
        }
        return $this->find(array('filters' => $filters));
    }
    
    public function find_one_by_pk($keys)
    {
        $search = $this->find_by_pk($keys);
        if (count($search)) {
            return $search[0];
        } else {
            return false;
        }
    }
    
    public function find_where($filters)
    {
        return $this->find(array('filters' => $filters));
    }
    
    public function find_one_where($filters)
    {
        $search = $this->find_where($filters);
        if (count($search)) {
            return $search[0];
        } else {
            return false;
        }
    }
    
    public function find_all()
    {
        if ($this->result_mode == 'array') {
            return $this->db->get($this->table_name)->result_array();
        } else if ($this->result_mode == 'object') {
            return $this->db->get($this->table_name)->result();
        }
    }
    
    public function insert($data)
    {
        if ($this->db->insert($this->table_name, $data)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function insert_batch($data)
    {
        if ($this->db->insert_batch($this->table_name, $data)) {
            return true;
        } else {
            return false;
        }
    }
    
    public function update($data, $filter)
    {
        $this->db->db_debug = false;
        $this->db->trans_start();
        $this->db->where($filter);
        $this->db->update($this->table_name, $data);
        $this->db->trans_complete();
        
        if ($this->db->trans_status() === false) {
            return false;
        } else {
            return true;
        }
    }

    public function update_batch($data, $field_name)
    {
        return $this->db->update_batch($this->table_name, $data, $field_name); 
    }
    
    public function delete($filter)
    {
        $this->db->trans_start();
        $this->db->delete($this->table_name, $filter);
        $this->db->trans_complete();
        
        if ($this->db->trans_status() === false) {
            return false;
        } else {
            return true;
        }
    }
    
    public function delete_by_pk($keys)
    {
        if (!count($this->pk)) {
            $this->pk = $get_pk();
        }
        
        $filters = array();
        $pk = $this->pk;
        
        foreach ($pk as $idx => $val) {
            $filters[$val] = $keys[$idx];
        }
        return $this->delete($filters);
    }
    
    public function delete_batch($filters)
    {
        $this->db->trans_start();
        foreach ($filters as $idx => $filter) {
            $ret_val[] = $this->db->delete($this->table_name, $filter);
        }
        $this->db->trans_complete();
        if ($this->db->trans_status() === false) {
            return false;
        } else {
            return true;
        }
    }
    
    public function begin_trans()
    {
        $this->db->trans_start();
    }
    
    public function end_trans()
    {
        $this->db->trans_complete();
    }
    
    public function count_all()
    {
        return $this->db->count_all($this->table_name);
    }

    public function query($query)
    {
        if ($this->result_mode == 'array') {
            return $this->db->query($query)->result_array();
        } else if ($result_mode == 'object') {
            return $this->db->query($query)->result();
        }
    }

    public function last_query()
    {
        return $this->db->last_query();
    }
}