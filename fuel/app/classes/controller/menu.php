<?php

class Controller_Menu extends Controller_Template{

	public function action_index(){
		$data = array();
		$this->template->title = 'template';
		$this->template->content = View::forge('menu/index', $data, false);
	}

	public function action_login(){
		$data = array();
		$this->template->title = 'Login';
		$this->template->content = View::forge('menu/login', $data, false);
	}

	public function action_student_affairs(){
		$arfs = Model_Arf::find('all', array(
    		'where' => array(
        		array('status', 'active'),
    		),
		));


		//$arfs = Model_Arf::find('all', array('where',));
		$data = array('arf_data' => $arfs);
		$this->template->content = View::forge('menu/student_affairs', $data, false);
	}

	public function action_announcement($id){
		$arfs = Model_Arf::find($id);
		$data = array('arf_body' => $arfs);
		$this->template->content = View::forge('menu/announcement', $data, false);
	}

	public function is_content_link_clicked(){

	}
/*
	$entry = Model_Article::find('all', array(
    'where' => array(
        array('category_id', 1),
        'or' => array(
            array('category_id', 2),
        ),
    ),
));
*/
}