<?php 

class TestSuite extends WP_UnitTestCase {
    /**
        Any function starting with test will run as a separate test. 
    */ 
    public function test_1() {
        $this->assertEquals('a', 'a');
    }
    
}