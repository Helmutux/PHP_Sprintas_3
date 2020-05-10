
<?php
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once "vendor/autoload.php";

$isDevMode = true;
$proxyDir = null;
$cache = null;
$useSimpleAnnotationReader = false;
$config = Setup::createAnnotationMetadataConfiguration(array("src"), $isDevMode, $proxyDir, $cache, $useSimpleAnnotationReader);

$conn = array(
    "dbname" => "mano_tvs",
    "user" => "root",
    "password" => "mysql",
    "host" => "localhost",
    "driver" => "pdo_mysql"
);

$entityManager = EntityManager::create($conn, $config);
