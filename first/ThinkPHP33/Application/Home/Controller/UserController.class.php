<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{
   
	public function index(){
		$this->display();
	}


	
    public function zhuc(){
		$this->display();
	}

	

	public function dengl(){

		$this->display();
	}

	public function yanz(){
		$guser=I('get.user');
		$gpsd=I('get.psd');
		$bool=1;

		$user=M('users');
		$result=$user->select();
		for ($i=0; $i<=count($result); $i++) {
			
			if ($result[$i]['user']==$guser && $result[$i]['psd']==$gpsd) {
				
				$bool=2;
				$toid=$result[$i]['id'];

               
				$this->redirect('user',array('id'=>$toid));
				

			}
		}
		if ($bool!=2) {
			echo "failed";
		}
	}




	public function user($id){
	 

	  $user=M('users');


	  $theuser=$user->where("`id`='$id'")->find();

	  $this->assign('user',$theuser);
      
      
	
	  $this->display();
	  

	}
    public function reset(){
    	
	  $user=M('users');
	  $id=I('get.id');


	  $theuser=$user->where("`id`='$id'")->find();
	  $this->assign('user',$theuser);
    	$this->display();
    }

   public function isreset(){
   	   $uname=I('get.uname');
   	   $sign=I('get.sign');
   	   $qq=I('get.qq');
   	   $id=I('get.id');
   	  
   	   $user=M('users');
   	  $result= $user->where("`id`='$id'")->setField(array('uname'=>$uname,'sign'=>$sign,'qq'=>$qq));
   	  if ($result!==false) {
   	  	echo "success";
   	  }else{
   	  	echo "faild";
   	  }
   	   
   }
   public function msg(){
   	 	
	  $user=M('users');
	  $id=I('get.id');


	  $theuser=$user->where("`id`='$id'")->find();
	  $this->assign('user',$theuser);
    	$this->display();

   }
   public function tomsg(){
   	 $msg=I('post.tomsg');
   	 $pid=I('post.pid');
   	 $user=M('users')->where("id='$pid'")->find();
   	 
   	 $inmsg=M('msg');
   	 $data['pid']=$pid;
   	 $data['content']=$msg;
   	 $data['uname']=$user['uname'];
   	 $data['time']=time();
   	 echo $msg;
   	 $inmsg->add($data);
   	 

   }
   public function dongt(){
   	  $id=I('get.id');
   	  $msg=M('msg')->where("pid='$id'")->select();
   	  $this->assign('msg',$msg);
   	  $user=M('users')->where("id='$id'")->find();
   	  $this->assign('user',$user);
   	 
   	  $this->display();
   }

}




?>