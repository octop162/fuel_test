<?php

namespace Fuel\Core;

class DbTestCase extends \PHPUnit_Extensions_Database_TestCase {
  public function getConnection() {
    $db = \Database_Connection::instance();
    return $this->createDefaultDBConnection($db->connection(), 'db');
  }

  public function getDataSet() {
    return $this->createFlatXmlDataset(APPPATH."tests/fixture/defaultBook.xml");
  }

  public function setDataSet() {}

  public function testHogeHoge() {

  }
}