<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ry extends CI_Controller {

		function __construct()
		{
			parent::__construct();
			session_start();
			if(!isset($_SESSION['cas']) || empty($_SESSION['cas']) )
			{
				header("Location: ".site_url());
			}
		}
		
	function index($type=5)
	{	
		$xuehao= $_SESSION['cas']['StudentNo'];
		$data['xuehao'] =$xuehao;
		$this->load->model('testmodel');
		$user = $this->testmodel->user_get($xuehao);

		$data['times']=$user[0]->times;
		$data['pname']=$user[0]->pname;
		$data['chose']=unserialize( $user[0]->chose );
		$data['items']=$this->testmodel->items_get($type);		//取得相应类型的全部方案
		//导航活跃状态判断
		switch ( $type ) {
		    case  1 :
		        $data['n1']='active';
		        $data['n2']=$data['n3']=$data['n4']=$data['n5']='';
		        break;
		    case  2 :
		        $data['n2']='active';
		        $data['n1']=$data['n3']=$data['n4']=$data['n5']='';
		        break;
		    case  3 :
		        $data['n3']='active';
		        $data['n2']=$data['n1']=$data['n4']=$data['n5']='';
		        break;
		    case  4 :
		        $data['n4']='active';
		        $data['n2']=$data['n3']=$data['n1']=$data['n5']='';
		        break;
		    case  5 :
		        $data['n5']='active';
		        $data['n2']=$data['n3']=$data['n4']=$data['n1']='';
		        break;
		}

		//传递数据，载入视图
		$this->load->view('ry/header',$data);
		$this->load->view('ry/main');
		$this->load->view('ry/footer');
	
	}

	function detail($no)
	{	
		$this->load->model('testmodel');
		$t = $this->testmodel->detail_get($no);
		$data['detail']=$t[0];
		$xuehao= $_SESSION['cas']['StudentNo'];
		$data['xuehao'] =$xuehao;
		
		$this->load->view('ry/header');
		$this->load->view('ry/detail',$data);
		$this->load->view('ry/footer');
	}

	function intro()
	{
		$this->load->view('ry/header');
		$this->load->view('ry/intro');
		$this->load->view('ry/footer');
	}

	function vote($no,$xuehao)
	{		
			if($_SESSION['cas']['StudentNo'] != $xuehao){
					show_404();
			}
			$this->load->model('testmodel');
			$t=$this->testmodel->user_get($xuehao);		//判断用户
			$user=$t[0];
			$chose=unserialize( $user->chose );	//反转义成数组
			
			
			if($user->times == 3)
			{
				echo "<script>alert('你的投票次数已达上限');window.history.go(-1);</script>";
			}
			elseif(in_array($no, $chose))		//判断所选编号有是否已选
			{
				echo "<script>alert('你已经投过该方案');window.history.go(-1);</script>";
			}
			elseif($user->times < 3 )
			{
				$this->testmodel->poll_update($no);					//添加票数
				$this->testmodel->user_update($xuehao,$no);						//更新用户数据
				echo "<script>alert('投票成功！');window.history.go(-1);</script></script>";
			}
			
		
	
	}

	function logout()
	{	
		session_destroy();
		$URL = site_url('checklogin');
	 	$CASserver = "http://yigong.szu.edu.cn/CAS/";//身份认证URL**不能修改**
		//header("Location: ".$URL);
		header("Location: ". $CASserver ."logout?ReturnUrl=". urlencode($URL));
	}

	function rank(){
		$this->load->view('ry/header');
		$this->load->view('ry/rank');
		$this->load->view('ry/footer');
	}

}
