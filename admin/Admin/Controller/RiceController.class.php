<?php
namespace Admin\Controller;
use Think\Controller;
class RiceController extends Controller {
    public function index(){
        $Model = M('rice');
		$data = $Model->select();
		$this->assign("rice",$data);
        $this->display();
    }
    public function create(){
    	$this->display();
    }

    //添加数据到数据库
     public function store(){
      $upload = new \Think\Upload();// 实例化上传类
      $upload->maxSize   =     3145728 ;// 设置附件上传大小
      $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
      $upload->rootPath  =     THINK_PATH; // 设置附件上传根目录
      $upload->savePath  =     '../Public/uploads/'; // 设置附件上传（子）目录
      // 上传文件 
      $info   =   $upload->upload();
      if(!$info) {// 上传错误提示错误信息
         $this->error($upload->getError());
     }else{// 上传成功
         //$this->success('上传成功！');
          // 实例化User模型
      $riceModel = M('rice');
      // 根据表单提交的POST数据创建数据对象
        $data = $riceModel->create();
        //设置photo字段属性值 (目录+名字)
        $data['photo'] = $info['photo']['savepath'].$info['photo']['savename'];
       // dump($data);exit;
        //添加
        if($riceModel->add($data)){
            $this->success('数据添加成功！','index');
        }else{
              $this->showError('数据添加失败！');
        }
      }
    }
    public function edit(){
    	//获取id
    	$id = I('id');
    	// var_dump($id);exit;
    	//获取数据
    	$riceModel = M('rice');
    	$data = $riceModel->find($id);
    	//var_dump($data);exit; 
    	$this->assign("rice",$data);
    	$this->display();
    }
    public function update(){
      $upload = new \Think\Upload();// 实例化上传类
      $upload->maxSize   =     3145728 ;// 设置附件上传大小
      $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
      $upload->rootPath  =     THINK_PATH; // 设置附件上传根目录
      $upload->savePath  =     '../Public/uploads/'; // 设置附件上传（子）目录
      // 上传文件 
      $info   =   $upload->upload();
      if(!$info) {// 上传错误提示错误信息
         $this->error($upload->getError());
     }else{// 上传成功
         //$this->success('上传成功！');
          // 实例化User模型
          $id=I('id');
      $riceModel = M('rice');
      // 根据表单提交的POST数据创建数据对象
        $data = $riceModel->create();
        //设置photo字段属性值 (目录+名字)
        $data['photo'] = $info['photo']['savepath'].$info['photo']['savename'];
        //dump($data);exit;
        //添加
        $num=$riceModel->where("id=".$id)->save($data);
        //var_dump($num);exit;
        if($num>0){
            $this->success('数据修改成功！','index');
        }else{
              $this->showError('数据修改失败！');
        }
      }
    }
     public function destory(){
    	//获取id
    	$id = I('id');
    	$riceModel = M('rice');
    	if($riceModel->where("id=$id")->delete()){
    		$this->success('删除成功');
    	}else{
            $this->error('删除失败');
    	} 
    }
}