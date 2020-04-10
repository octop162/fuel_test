<?php

class HelloTest extends TestCase {
  public function testAdd() {
    $this->assertEquals(15, 10+5);
  }

  public function testSub() {
    $this->assertEquals(5, 100-95);
  }

  public function testHello() {
    $curl = Request::forge('http://fuel/hello', 'curl');
    $result = $curl->execute();
    $this->assertContains('Hello', $result->response()->body());
  }
}