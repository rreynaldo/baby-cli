<?php

namespace App\Schedules;

use Baby\Task\AbstractScheduledTask;
use Baby\Task\Schedule;
use Psr\Container\ContainerInterface;

class AppTestSchedule extends AbstractScheduledTask
{
  protected ContainerInterface $container;

  /**
   * AppTestSchedule constructor.
   */
  public function __construct(ContainerInterface $container)
  {
    parent::__construct();
    $this->container = $container;
  }

  protected function initialize(Schedule $schedule)
  {
    $schedule->everyMinutes(1);
  }

  public function run()
  {
      $this->container->get('app-logger')->info('Running');
  }
}
