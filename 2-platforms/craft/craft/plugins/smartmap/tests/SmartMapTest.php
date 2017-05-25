<?php

class SmartMapTest extends PHPUnit_Framework_TestCase {

	private $SmartMapService;

	public function __construct($name = NULL, array $data = array(), $dataName = '') {
		parent::__construct($name, $data, $dataName);
		$this->SmartMapService = new Craft\SmartMapService;
	}

	public function testTestTesting() {
		$this->assertClassHasAttribute('visitor', 'Craft\SmartMapService');
	}

	/**
	 * @dataProvider ipSampleProvider
	 */
	public function testIpIsValid($ip) {
		$realIp = (bool) $this->SmartMapService->validIp($ip);
		$this->assertTrue($realIp);
	}

	public function ipSampleProvider()
	{
		return array(
			array('104.131.132.139'),
			array('127.0.0.1'),
			//array($_SERVER['REMOTE_ADDR']),
			//array(null),
		);
	}

}