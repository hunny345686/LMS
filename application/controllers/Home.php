<?php  
 
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Lms_modal'); 
		$this->load->library('form_validation');
	}
	public function index()
	{
	    $this->load->view('home');
	}
	public function login()
	{
		$data = $this->input->post();
		$res = $this->Lms_modal->select_data('admin','*','',$data);
		// print_r($res);
		// exit();
		 if($res)
		 {
		 	 $this->session->set_userdata('username','1');
			echo "1";
		 }
		else
		{
			echo "0";
		}
         

	}
	public function deshboard()
	{
	     $session =$this->session->userdata('username');
	     if(!$session)
	     {
	     	redirect('/');
	     }
	     else
	     {
	     	$this->load->view('desh_board');
	     }
		 
	}
	public function book_stock_manage()
	{
		$this->load->view('book_stock_manage');
	}

	public	function book_issue_submit()
	{
		$this->load->view('book_issue_submit');
	}
	public function book_filter()
	{
		$data= $this->input->post();
		unset($data['find']);
		$res = $this->Lms_modal->select_data('member_list','*','',$data);
		//print_r($res);

		if($res)
		{
		 $book_data= $this->Lms_modal->select_data('book_list','book_name','','');
		 $this->load->view('book_issue_submit',['res'=>$res,'book_data'=>$book_data]);
		}
		else
		{	$this->session->set_flashdata('m1', 'User Not Found ! Kindly Provide Correct User ID');
			$this->load->view('book_issue_submit');
		}
	}

	public function issue_book()
	{
		$data = $this->input->post();
		unset($data['book_now']);
		$user_id = $this->input->post('user_id');
		$book_name = $this->input->post('book_name');
		$check_status =$this->Lms_modal->select_data('issue_book','*','',array('user_id'=>$user_id,'book_name'=>$book_name));
		$check_status2 =$this->Lms_modal->select_data('issue_book','*','',array('user_id'=>$user_id));

		if($check_status)
		{
		 $this->session->set_flashdata('m1','You Can not Issued more than 2 books');
		 redirect('home/book_issue_submit');
		}
		else if (sizeof($check_status2)> 2)
		{
			$this->session->set_flashdata('m1', $book_name.' Book is Allready Issued');
		 redirect('home/book_issue_submit');
		}
		else
		{
			$res = $this->Lms_modal->databaseop('issue_book','insert',$data);
			if ($res) 
			{
			 $this->session->set_flashdata('m1', 'Book Issued Successfully');
			 redirect('home/book_issue_submit');
			}
			else
			{
				$this->session->set_flashdata('m1', 'Book Not Successfully');
				redirect('home/book_issue_submit');
			}
		}
	}

	public function mamber_manage()
	{
		$this->load->view('mamber_manage');
	}

	public function add_member()
	{
	    $data = $this->input->post();
	    unset($data['add_mamber']);
	    $res =$this->Lms_modal->databaseop('member_list','insert',$data);
	    if ($res) 
	    {
	    	$this->session->set_flashdata('msg','Mamber Inserted Sucssesfuly');
	    	redirect('home/mamber_manage');
	    }
	    else
	    {
	    	redirect('home/mamber_manage');
	    }
	}

	public function add_auther()
	{
		$res =$this->Lms_modal->select_data('auther_list','*');
		// print_r($res);
		// exit();
		$this->load->view('add_auther',['res'=>$res]);
	}
	public function auther_add()
	{
		$this->form_validation->set_rules('auther_name','Auther Name','required');
		if($this->form_validation->run())
		{
			$data = $this->input->post();
		    //print_r($data);
		    $res =$this->Lms_modal->databaseop('auther_list','insert',$data,'');
		    {
		    	if($res)
		    	{
		    		$this->session->set_flashdata('msg','1');
		    		redirect('home/add_auther');
		    		//$this->load->view('add_auther');
		    	}
		    	else
		    	{
		    		$this->session->set_flashdata('msg','0');
		    		redirect('home/add_auther');
		    		//$this->load->view('add_auther');
		    	}
		    }
		}
		else
		{
			$res =$this->Lms_modal->select_data('auther_list','*');
			// print_r($res);
			// exit();
			$this->load->view('add_auther',['res'=>$res]);
		}
		
	}
	public function datete_auther($id)
	{
		$res=$this->Lms_modal->databaseop('auther_list','delete','',array('id'=>$id));
		if($res)
		{
			$this->session->set_flashdata('msg','delete');
			redirect('home/add_auther');
		}
		else
		{
			redirect('home/add_auther');
		}
	}

	public function update_auther($id)
	{
		$res1=$this->Lms_modal->select_data('auther_list','*','',array('id'=>$id));
		$res=$this->Lms_modal->select_data('auther_list','*');
		$data['res1']=$res1;
		$data['res']=$res;
		$this->load->view('add_auther',$data);
		//print_r($res1);
	}

	public function auther_update1()
	{
		$data=$this->input->post();
		$id=$this->input->post('id');
		unset($data['id']);
		//print_r($data);
		$res=$this->Lms_modal->databaseop('auther_list','update',$data,array('id'=>$id));
		//print_r($data);
		if ($res) 
		{
			echo $this->session->set_flashdata('msg','update');
			redirect('home/add_auther');
		}
		else
		{
			redirect('home/add_auther');
		}
	}

	public function add_publisher()
	{
		$res =$this->Lms_modal->select_data('pub_list','*');
		// print_r($res);
		// exit();
		$this->load->view('add_publisher',['res'=>$res]);
	}

	public function pub_add()
	{
		$this->form_validation->set_rules('pub_name','Publisher Name','required');
		if($this->form_validation->run())
		{
			$data = $this->input->post();
		    //print_r($data);
		    $res =$this->Lms_modal->databaseop('pub_list','insert',$data,'');
		    {
		    	if($res)
		    	{
		    		$this->session->set_flashdata('msg','1');
		    		redirect('home/add_publisher');
		    		//$this->load->view('add_auther');
		    	}
		    	else
		    	{
		    		$this->session->set_flashdata('msg','0');
		    		redirect('home/add_publisher');
		    		//$this->load->view('add_auther');
		    	}
		    }
	    }
	    else
		{
			$res =$this->Lms_modal->select_data('pub_list','*');
				// print_r($res);
				// exit();
		    $this->load->view('add_publisher',['res'=>$res]);
		}
	} 

	public function datete_pub($id)
	{
		$res=$this->Lms_modal->databaseop('pub_list','delete','',array('id'=>$id));
		if($res)
		{
			$prem=$this->session->set_flashdata('msg','2');
			print_r($prem);
			redirect('home/add_publisher');
		}
		else
		{
			redirect('home/add_publisher');
		}
	}

	public function update_pub($id)
	{
		$res1=$this->Lms_modal->select_data('pub_list','*','',array('id'=>$id));
		$res=$this->Lms_modal->select_data('pub_list','*');
		$data['res1']=$res1;
		$data['res']=$res;
		$this->load->view('add_publisher',$data);
		//print_r($res1);
	}

	public function pub_update1()
	{
		$data=$this->input->post();
		$id=$this->input->post('id');
		unset($data['id']);
		//print_r($data);
		$res=$this->Lms_modal->databaseop('pub_list','update',$data,array('id'=>$id));
		//print_r($data);
		if ($res) 
		{
		    $this->session->set_flashdata('msg','update');
			redirect('home/add_publisher');
		}
		else
		{
			redirect('home/add_publisher');
		}
	}
  

	public function add_book()
	{
		$auther_list = $this->Lms_modal->select_data('auther_list','*');
		$pub_list = $this->Lms_modal->select_data('pub_list','*');
		$data['auther_list'] = $auther_list;
		$data['pub_list'] = $pub_list;
		$this->load->view('add_book',$data);
	}

	public function book_add()
	{
		$data= $this->input->post();
		unset($data['book_add']);
		//print_r($data);
		$res = $this->Lms_modal->databaseop('book_list','insert',$data);
		if($res)
		{
			$this->session->set_flashdata('msg','insert');
			redirect('home/add_book');
		}
		else
		{
			redirect('home/add_book');
		}
	}
	public function book_list()
	{
		$book_list= $this->Lms_modal->select_data('book_list','*');
		$this->load->view('book_list',['book_list'=>$book_list]);
	}

	public function issue_book_list()
	{
		$book_list = $this->Lms_modal->select_data('issue_book','*','','');
		//print_r($book_list);
		$this->load->view('issue_book_list',['book_list'=>$book_list]);
	}

	public function sub_book($id)
	{
		
		$data = $this->Lms_modal->select_data('issue_book',array('user_name','book_name','user_email'),'',array('id'=>$id));
		$res =$this->Lms_modal->databaseop('submit_book','insert',$data[0]);
		$res1 =$this->Lms_modal->databaseop('issue_book','delete','',array('id'=>$id));
		if($res)
		{
			$this->session->set_flashdata('m1', 'Book Submit Successfully');
			redirect('home/issue_book_list');
		}
		else
		{
			$this->session->set_flashdata('m1', 'Book Submit Successfully');
			redirect('home/issue_book_list');
		}
		//$this->load->view('sub_book');
	}

	public function sub_book_list()
	{
		$sub_book = $this->Lms_modal->select_data('submit_book','*','','');
		$this->load->view('sub_book_list',['sub_book'=>$sub_book]);
	}

	public function mamber_list()
	{
		$mam_list= $this->Lms_modal->select_data('member_list','*');
		//print_r($mam_list);
		$this->load->view('mamber_list',['mam_list'=>$mam_list]);
	}
}


?>