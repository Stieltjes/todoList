<?php
 class TaskTest extends PHPUnit_Framework_TestCase
  {  
  
	private $CI;
     
    public function setUp()
    {
        $this->CI = &get_instance();
		$this->CI->load->model('Task');
    }
	  
    
    public function testSetPass()
    {
	   $this->assertEquals(true, $this->CI->Task->setTask("aaa 111"));
       $this->assertEquals(1, $this->CI->Task->setPriority(1));
	   $this->assertEquals(2, $this->CI->Task->setSize(2));
	   $this->assertEquals(4, $this->CI->Task->setGroup(4));
    }
	
	
	public function testSetFail()
    {
	   $this->assertEquals(false, $this->CI->Task->setTask("(*&(&(("));
       $this->assertEquals(-1, $this->CI->Task->setPriority(4));
	   $this->assertEquals(-1, $this->CI->Task->setSize(4));
	   $this->assertEquals(-1, $this->CI->Task->setGroup(7));
    }
  }
