## Baby-cli: Starter Project from Baby CLI micro-framework based on Symfony Console (commands, schedules)

[![Baby Logo](https://raw.githubusercontent.com/rreynaldo/baby/main/logo.png)](https://github.com/rreynaldo/baby)

## Install

> composer create-project rreynaldo/baby-cli:dev-main my_project_name


## Create your first Command in folder src/Commands  


```
<?php

namespace App\Commands;


use Psr\Container\ContainerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Logger\ConsoleLogger;
use Symfony\Component\Console\Output\OutputInterface;

class AppTestCommand extends Command
{
    protected static $defaultName = 'app:test:command';
    protected ContainerInterface $container;

    /**
     * AppTestCommand constructor.
     */
    public function __construct(ContainerInterface $container)
    {
        parent::__construct();
        $this->container = $container;
    }


    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->container->get('console-logger')->info('Running');
        return Command::SUCCESS;
    }
}
```

## Create your first Scheluder in folder src/Schedules

```
<?php

namespace App\Commands;


use Psr\Container\ContainerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Logger\ConsoleLogger;
use Symfony\Component\Console\Output\OutputInterface;

class AppTestCommand extends Command
{
    protected static $defaultName = 'app:test:command';
    protected ContainerInterface $container;

    /**
     * AppTestCommand constructor.
     */
    public function __construct(ContainerInterface $container)
    {
        parent::__construct();
        $this->container = $container;
    }


    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->container->get('console-logger')->info('Running');
        return Command::SUCCESS;
    }
}

```

