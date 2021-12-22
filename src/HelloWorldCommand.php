<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorldCommand extends Command
{
    // the name of the command (the part after "bin/console")
    protected static $defaultName = 'app:hello-world';
    protected static $defaultDescription = "This command say hello world";

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln("Hello World");

        return Command::SUCCESS;
    }
}
