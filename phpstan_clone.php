<?php declare(strict_types=1);

require_once "./vendor/autoload.php";

use PHPStanClone\AnalyseCommand;

$version = 'Version Unknown';

$application = new Symfony\Component\Console\Application(
    'PHPStan - PHP Static Analysis Tool',
    $version
);
$application->add(new AnalyseCommand());
$application->run();
