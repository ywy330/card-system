<?php
 namespace Illuminate\Foundation\Console; use Illuminate\Console\Command; use Symfony\Component\Console\Input\InputOption; class OptimizeCommand extends Command { protected $name = 'optimize'; protected $description = 'Optimize the framework for better performance (deprecated)'; public function handle() { } protected function getOptions() { return [ ['force', null, InputOption::VALUE_NONE, 'Force the compiled class file to be written (deprecated).'], ['psr', null, InputOption::VALUE_NONE, 'Do not optimize Composer dump-autoload.'], ]; } } 