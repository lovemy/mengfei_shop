<?php
/** 
* @author      lnc2014
* @date 2015-4-24 上午11:11:06 
*
*	管理控制器
*/ 
class AdminController extends CController{
	
	
	public function actionIndex(){
		$this->render('index');
	}
}