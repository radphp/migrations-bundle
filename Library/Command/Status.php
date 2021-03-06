<?php

namespace Migrations\Library\Command;

use Phinx\Console\Command\Status as StatusCommand;
use Migrations\Library\ConfigurationTrait;
use Symfony\Component\Console\Input\InputArgument;

/**
 * Status Command
 *
 * @package Migrations\Library\Command
 */
class Status extends StatusCommand
{
    use ConfigurationTrait;

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this->setName('status')
            ->setDescription('Show migration status')
            ->addOption('--format', '-f', InputArgument::OPTIONAL, 'The output format: text or json. Defaults to text.')
            ->setHelp('The status command prints a list of all migrations, along with their current status')
            ->addOption('--bundle', '-b', InputArgument::OPTIONAL, 'The bundle containing the migrations');
    }
}
