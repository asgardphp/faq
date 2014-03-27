<?php
namespace Asgard\Faq\Controllers;

/**
@Prefix('admin/faq')
*/
class QuestionAdminController extends \Asgard\Admin\Libs\Controller\EntityAdminController {
	static $_entity = 'Asgard\Faq\Entities\Question';
	static $_entities = 'questions';

	public function __construct() {
		$this->_messages = array(
			'modified'			=>	__('Question modified with success.'),
			'created'			=>	__('Question created with success.'),
			'many_deleted'			=>	__('Questions modified with success.'),
			'deleted'			=>	__('Question deleted with success.'),
			'unexisting'			=>	__('This question does not exist.'),
		);
		parent::__construct();
	}
	
	public function formConfigure($entity) {
		$form = new \Asgard\Admin\Libs\Form\AdminEntityForm($entity, $this);
		
		return $form;
	}
}