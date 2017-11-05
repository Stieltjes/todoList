<?php
 class TaskTest extends PHPUnit_Framework_TestCase
  {
    private $CI;
	
    public function setUp()
    {
      // Load CI instance normally
      //$this->CI = &get_instance();
    }
    public function testGetPost()
    {
	  $task = new Task();
      $this->assertEquals(1, 1);
    }
  }