<?php

use App\Commands\AppTestCommand;
use App\Schedules\AppTestSchedule;
use Baby\Application;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;

require_once __DIR__ . '/vendor/autoload.php';
$config = include __DIR__ . '/app/config.php';

$container = new DI\Container();

$logger = new Logger('app-logger');
$logger->pushHandler(new StreamHandler(__DIR__.'/var/app.log', Logger::DEBUG));
$container->set('app-logger', $logger);

$logger = new Logger('console-logger');
$logger->pushHandler(new StreamHandler('php://stdout', Logger::DEBUG));
$container->set('console-logger', $logger);

$app = new Application($config['name'], $config['version']);
$app->useContainer($container);

//Register all Schedule
$app->schedule(new AppTestSchedule($container));

//Register all Command
$app->add(new AppTestCommand($container));


try {
  $app->run();
} catch (Exception $e) {
}
