<?php

declare(strict_types=1);

namespace PHPStanClone;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AnalyseCommand extends \Symfony\Component\Console\Command\Command
{
    private const NAME = 'analyse';

    protected function configure()
    {
        $this->setName(self::NAME)
            ->setDescription('Analyses source code');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        echo 'execute!!!';
    }
}
