<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 13-6-4
 * Time: 下午4:15
 * To change this template use File | Settings | File Templates.
 */
class Model_food extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    function add_food($data){

        $this->db->insert('common_foodmenu', $data);
        return true;

    }
    function food_list(){
        $query = $this->db->query('SELECT foodname, imageurl, price,priceid FROM common_foodmenu');

    }
}