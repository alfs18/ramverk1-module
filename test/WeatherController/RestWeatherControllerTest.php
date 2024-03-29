<?php

// namespace Anax\WeatherController;
//
// use Anax\DI\DIFactoryConfig;
// use PHPUnit\Framework\TestCase;
//
// /**
//  * Test the RestWeatherController.
//  */
// class RestWeatherControllerTest extends TestCase
// {
//     /**
//      * Test the route "index" GET.
//      */
//     public function testIndexActionGet()
//     {
//         global $di;
//
//         // Setup di
//         $di = new DIFactoryConfig();
//         $di->loadServices(ANAX_INSTALL_PATH . "/config/di");
//
//         // Use a different cache dir for unit test
//         $di->get("cache")->setPath(ANAX_INSTALL_PATH . "/test/cache");
//
//         // Setup the controller
//         $controller = new RestWeatherController();
//         $controller->setDI($di);
//         $controller->initialize();
//
//         // Test the container action
//         $res = $controller->indexActionGet();
//         $this->assertIsObject($res);
//     }
//
//
//
//     /**
//      * Test the route "index" POST.
//      * Post valid ip-address.
//      */
//     public function testIndexActionPostInvalid()
//     {
//         // Setup di
//         $di = new DIFactoryConfig();
//         $di->loadServices(ANAX_INSTALL_PATH . "/config/di");
//
//         // Use a different cache dir for unit test
//         $di->get("cache")->setPath(ANAX_INSTALL_PATH . "/test/cache");
//
//         // Setup the controller
//         $controller = new RestWeatherController();
//         $controller->setDI($di);
//         $controller->initialize();
//
//         // Do the test and assert it
//         $controller->indexActionGet();
//         $_POST["check"] = "172.217.11.";
//         $res = $controller->indexActionPost();
//         $this->assertIsObject($res);
//     }
//
//
//     /**
//      * Test the route "index" POST.
//      * Post valid ip-address.
//      * Post valid coordinates.
//      */
//     public function testIndexActionPostValid()
//     {
//         // Setup di
//         $di = new DIFactoryConfig();
//         $di->loadServices(ANAX_INSTALL_PATH . "/config/di");
//
//         // Use a different cache dir for unit test
//         $di->get("cache")->setPath(ANAX_INSTALL_PATH . "/test/cache");
//
//         // Setup the controller
//         $controller = new RestWeatherController();
//         $controller->setDI($di);
//         $controller->initialize();
//
//         // Test valid ip address and assert it
//         $controller->indexActionGet();
//         $_POST["check"] = "172.217.11.23";
//         $_POST["check1"] = "past";
//         $_POST["check2"] = "daily";
//         $res = $controller->indexActionPost();
//         $this->assertIsObject($res);
//
//         // Test valid coordinates and assert it
//         $controller->indexActionGet();
//         $_POST["check"] = "56.1619112,13.7062347";
//         $_POST["check1"] = "past";
//         $_POST["check2"] = "hourly";
//         $res = $controller->indexActionPost();
//         $this->assertIsObject($res);
//     }
//
//     /**
//      * Test the route "index" POST.
//      * Post valid coordinates, $period = toCome.
//      */
//     public function testIndexActionPostToCome()
//     {
//         // Setup di
//         $di = new DIFactoryConfig();
//         $di->loadServices(ANAX_INSTALL_PATH . "/config/di");
//
//         // Use a different cache dir for unit test
//         $di->get("cache")->setPath(ANAX_INSTALL_PATH . "/test/cache");
//
//         // Setup the controller
//         $controller = new RestWeatherController();
//         $controller->setDI($di);
//         $controller->initialize();
//
//         // Test valid coordinates and assert it
//         $controller->indexActionGet();
//         $_POST["check"] = "56.1619112,13.7062347";
//         $_POST["check1"] = "toCome";
//         $_POST["check2"] = "hourly";
//         $res = $controller->indexActionPost();
//         $this->assertIsObject($res);
//     }
// }
