<?php
if(!defined('_ENV_'))
	define('_ENV_', 'test');
require_once(__dir__.'/../../../asgard.php');
Asgard::load();

class QuestionAdminTest extends PHPUnit_Framework_TestCase {
	public function setUp(){
		\Schema::dropAll();
		ORMManager::autobuild();
		\BundlesManager::loadEntityFixturesAll();
	}
	public function tearDown(){}

	public function test1() {
		$browser = new Browser;
		$browser->session['admin_id'] = 1;

		$browser->get('admin/questions/1/edit');
		if($browser->last->getCode() == 404)
			return;
		$res = $browser->submit(0, 'admin/questions/1/edit');
		$this->assertTrue($res->getCode() < 300);
	}
}
