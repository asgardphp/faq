<?php
namespace Tests;

class QuestionAdminTest extends \PHPUnit_Framework_TestCase {
	public function test1() {
		$browser = new \Asgard\Utils\Browser;
		$browser->setSession('admin_id', 1);

		$browser->get('admin/questions/1/edit');
		if($browser->last->getCode() == 404)
			return;
		$res = $browser->submit(0, 'admin/questions/1/edit');
		$this->assertTrue($res->getCode() < 300);
	}
}
