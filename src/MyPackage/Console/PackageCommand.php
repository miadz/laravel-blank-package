<?php namespace MyVendor\MyPackage\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class PackageCommand extends Command
{
	/**
	 * @var string $name The console command name.
	 */
	protected $name = 'mypackage:command';

	/**
	 * @var string $description The console command description.
	 */
	protected $description = 'Command Description.';

	/**
	 * Create a new command instance.
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$option = $this->option('name');
		$argument = $this->argument('name');
		
		// Do something
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [
			['required', null, InputOption::VALUE_REQUIRED, 'A required option'],
			['optional', null, InputOption::VALUE_OPTIONAL, 'An optional option'],
			['switch', null, InputOption::VALUE_NONE, 'An option switch.']
		];
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [
			['required', null, InputArgument::REQUIRED, 'A required argument.'],
			['optional', null, InputArgument::OPTIONAL, 'An Optional argument.']
		];
	}
}
