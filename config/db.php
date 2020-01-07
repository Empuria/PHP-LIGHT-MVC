<?php // Spot2 ORM Configuration
function spot() {
    static $spot;
    if ($spot === null) {
      $cfg = new \Spot\Config();
      $cfg->addConnection('mysql', [
          'dbname' => 'testmvc',
          'user' => 'root',
          'password' => 'rootroot',
          'host' => 'localhost',
          'driver' => 'pdo_mysql',
      ]);
      $spot = new \Spot\Locator($cfg);
    }
    return $spot; 
}