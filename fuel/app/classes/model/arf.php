<?php

class Model_Arf extends Orm\Model{
	protected static $_table_name ='arf_t';
	protected static $_primary_key = array('arf_id');
	protected static $_properties = array(
		'arf_id',
		'user_id',
		'title',
		'content',
		'arf_date',
		'arf_expiry_date',
		'post_to',
		'viewable_to',
		'confirm_by',
		'remarks',
		'status'
	);

	public static function insert_break($id){

		$content_query = Model_Arf::find($id);
		$original_content = $content_query->content;

		$counted = count_chars($original_content);
		return $original_content;
	}

	public static function get_arf_if($id){
		return $id;
	}
}