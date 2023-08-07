<?php
class IndexModel extends CI_Model{
    //public function getallproduct(){
        
   // }


    public function getCategoryHome(){
        $query = $this->db->get_where('categories', ['status'=>1]);
        return $query->result();
    }
    public function getBrandHome(){
        $query = $this->db->get_where('brands', ['status'=>1]);
        return $query->result();
    }
    public function getAllProduct(){
        $query = $this->db->get_where('products', ['status'=>1]);
        return $query->result();
    }
    public function getCategoryProduct($id){
        $query = $this->db->select('categories.title as tendanhmuc,products.*,brands.title as tenthuonghieu')
        ->from('categories')
        ->join('products','products.category_id=categories.id')
        ->join('brands','brands.id=products.brand_id')
        ->where('products.category_id',$id)
        ->get();
        return $query->result();
    }
    public function getBrandProduct($id){
        $query = $this->db->select('categories.title as tendanhmuc,products.*,brands.title as tenthuonghieu')
        ->from('categories')
        ->join('products','products.category_id=categories.id')
        ->join('brands','brands.id=products.brand_id')
        ->where('products.brand_id',$id)
        ->get();
        return $query->result();
    }
    public function getProductDetails($id){
        $query = $this->db->select('categories.title as tendanhmuc,products.*,brands.title as tenthuonghieu')
        ->from('categories')
        ->join('products','products.category_id=categories.id')
        ->join('brands','brands.id=products.brand_id')
        ->where('products.id',$id)
        ->get();
        return $query->result();
    }
    public function getBrandTitle($id){
        $this->db->select('brands.*');
        $this->db->from('brands');
        $this->db->limit(1);
        $this->db->where('brands.id',$id);
        $query = $this->db->get();
        $result = $query->row();
        return $title = $result->title;
    }
    public function getCategoryTitle($id){
        $this->db->select('categories.*');
        $this->db->from('categories');
        $this->db->limit(1);
        $this->db->where('categories.id',$id);
        $query = $this->db->get();
        $result = $query->row();
        return $title = $result->title;
    }
    public function getInfo($id){
        $this->db->select('customers.*');
        $this->db->from('customers');
        $this->db->where('customers.id', $id);
        $query = $this->db->get();
        $result = $query->row();
        return $result;
    }
    
}
?>