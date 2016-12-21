<?php
namespace Home\Controller;
use Think\Controller;
class CategoryController extends Controller {
    public function cake(){
    	$cake = M('cake');

    	$condition1['sort'] = '水果蛋糕';
    	$result1 = $cake->where($condition1)->select();
    	$this->assign('result1',$result1);


    	$condition2['sort'] = '巧克力蛋糕';
    	$result2 = $cake->where($condition2)->select();
    	$this->assign('result2',$result2);

    	$condition3['sort'] = '冰淇淋蛋糕';
    	$result3 = $cake->where($condition3)->select();
    	$this->assign('result3',$result3);

        $this->display();
    }
    public function drink(){
    	$drink = M('drink');

    	$condition1['sort'] = '奶茶';
    	$result1 = $drink->where($condition1)->select();
    	$this->assign('result1',$result1);


    	$condition2['sort'] = '冰沙';
    	$result2 = $drink->where($condition2)->select();
    	$this->assign('result2',$result2);

    	$condition3['sort'] = '炒酸奶';
    	$result3 = $drink->where($condition3)->select();
    	$this->assign('result3',$result3);

        $this->display();
    }
    public function flower(){
    	$flower = M('flower');

    	$condition1['sort'] = '生日鲜花';
    	$result1 = $flower->where($condition1)->select();
    	$this->assign('result1',$result1);


    	$condition2['sort'] = '友情鲜花';
    	$result2 = $flower->where($condition2)->select();
    	$this->assign('result2',$result2);

    	$condition3['sort'] = '爱情鲜花';
    	$result3 = $flower->where($condition3)->select();
    	$this->assign('result3',$result3);

        $this->display();
    }
    public function rice(){
    	$rice = M('rice');

    	$condition1['sort'] = '咖喱饭';
    	$result1 = $rice->where($condition1)->select();
    	$this->assign('result1',$result1);


    	$condition2['sort'] = '寿司';
    	$result2 = $rice->where($condition2)->select();
    	$this->assign('result2',$result2);

    	$condition3['sort'] = '鸡腿饭';
    	$result3 = $rice->where($condition3)->select();
    	$this->assign('result3',$result3);

		$this->display();
	}
    public function buy(){
        $this->display();
    }
    public function tijiao(){

        $dingdanModel = M("dingdan");
        $data = $dingdanModel->create();
        if($dingdanModel->add($data)){
            $this->redirect('zhifu');
        }else{
              $this->showError('数据添加失败！');

        }
        // $this->display();
    }
}