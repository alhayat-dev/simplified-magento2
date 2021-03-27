<?php

/**
 * PLEASE ENTER ONE LINE SHORT DESCRIPTION OF CLASS
 *
 * Class HelloWorld
 * @package SimplifiedMagento\CustomCliCommand\Console\Command
 */

namespace SimplifiedMagento\CustomCliCommand\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class HelloWorld extends Command
{
    protected function configure()
    {
        $this->setName('training:hello_world')
            ->setDescription('This command simply print hello world')
            ->setAliases(['hw']);
        $this->setDefinition([
            new InputArgument(
                'name',
                InputArgument::OPTIONAL,
                "The name of the person",
                null,
            )
        ]);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('hello world ' . $input->getArgument('name'));
    }
}
