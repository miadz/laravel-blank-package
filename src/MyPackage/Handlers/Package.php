<?php
namespace MyVendor\MyPackage\Handlers;

use Illuminate\Config\Repository;

class Package
{
	/**
	 * @var \Illuminate\Config\Repository
	 */
	protected $config;

	/**
	 * Constructor.
	 *
	 * @param  \Illuminate\Config\Repository     $config
	 */
	public function __construct(Repository $config)
	{
		$this->config = $config;
	}
}