<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Drrinfo extends Admin_Controller 
{
	function __construct()
	{	
        $this->load->model('Main_model');
        $this->template->set_layout('frontend/default');
        $this->load->model('Publication_model');
        $this->load->model('DrrModel');
	}
	public function index()
	{	$this->body=array();
		if($this->session->userdata('Language')==NULL){

      	$this->session->set_userdata('Language','nep');
	    }
	    $lang=$this->session->get_userdata('Language');
	    if($lang['Language']=='en') {
	      $language='en';
	    }else{
	      $language='nep'; 
	    }

	    $this->data['page_title'] ="Disaster Information System";
	    $this->data['drrdata'] = $this->general->get_tbl_data_result('id,slug,description,image,name,svgimage','drrcategory',array('language'=>$language));
	    //echo "<pre>"; print_r($this->data['drrdata']);die;
	    //echo $this->db->last_query();die;echo"<pre>"; print_r($this->data['drrdata']);die;
		$this->template
			->enable_parser(FALSE)
			->title($this->data['page_title']) //this is for seo purpose 
			->build('frontend/v_drrinfo', $this->data);
	}
	public function drrdetails($cond=FALSE)
	{
		$this->data=array();
		$id = base64_decode($this->input->get('id'));
		if($this->session->userdata('Language')==NULL){

      	$this->session->set_userdata('Language','nep');
	    }
	    $lang=$this->session->get_userdata('Language');
	    if($lang['Language']=='en') {
	      $language='en';
	    }else{
	      $language='nep'; 
	    }
	    $this->data['subcat'] = $this->DrrModel->only_information();
	    foreach ($this->data['subcat'] as $key => $value) {
	    	$list[]=$value['subcat_id'];
	    }
	    //print_r($list);
	    $this->data['drrsubcat'] = $this->DrrModel->only_information_id($list);
	    //$this->data['drrsubcat'] = $this->general->get_tbl_data_result('slug,id,name','drrsubcategory',array('language'=>$language));

	    $this->data['drrdata'] = $this->general->get_tbl_data_result('slug,id,name,description','drrcategory',array('id'=>$id,'language'=>$language));
	    $this->data['pubd']=$this->Publication_model->get_publication_search();
	    $this->data['page_title'] ="Disaster Information System";
	    //echo "<pre>"; print_r($this->data['drrsubcat']);die;
		$this->template
			->enable_parser(FALSE)
			->title($this->data['page_title']) //this is for seo purpose 
			->build('frontend/drrinfo', $this->data);
	}
}