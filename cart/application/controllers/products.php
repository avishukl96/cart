<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Products_model');
	}

	public function index()
	{	
		$this->data['title'] = 'Products';

		$this->data['products'] = $this->Products_model->get_all();
		
		$this->load->view('products', $this->data);
	}
	
	
	public function add_product()
	{	
		$this->data['title'] = 'Add Products';

		//$this->data['products'] = $this->Products_model->get_all();
		
		$this->load->view('products_add');
	}
	
	public function insert()
	{	
		  $data['name']  = $this->input->post('name');
		  $data['price'] = $this->input->post('price');
		  $data['picture']  = 'images/'.$_FILES['image']['name'];
		 
		  $this->db->insert('products',$data);
		  $product_id = $this->db->insert_id();
			$this->do_upload( $product_id);
		
		 redirect('products');
		  
	}
	
	
	function do_upload( $product_id)
{
    $config['upload_path'] = FCPATH."/images/";
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '20000';
    $config['max_width']  = '2000';
    $config['max_height']  = '2000';
    $config['overwrite'] = TRUE;
    $config['encrypt_name'] = FALSE;
    $config['remove_spaces'] = TRUE;
    if ( ! is_dir($config['upload_path']) ) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
    $this->load->library('upload', $config);
    if ( ! $this->upload->do_upload('image')) {
       echo '<pre>';
            print_r($this->upload->display_errors());
    } else {

        return array('upload_data' => $this->upload->data());
    }
}
	
	
}