<?php
/**
 * This file is part of the Objective PHP project
 *




 
 * More info about Objective PHP on www.objective-php.org
 *
 * @license http://opensource.org/licenses/GPL-3.0 GNU GPL License 3.0
 */

namespace ObjectivePHP\ServicesFactory;


/**
 * Class ServicesFactoryAwareTrait
 *
 * @package ObjectivePHP\ServicesFactory
 */
trait ServicesFactoryAccessorsTrait
{
    /**
     * @var ServicesFactory
     */
    protected $servicesFactory;

    /**
     * @param ServicesFactory $servicesFactory
     *
     * @return $this
     */
    public function setServicesFactory(ServicesFactory $servicesFactory)
    {
        $this->servicesFactory = $servicesFactory;

        return $this;
    }

    /**
     * @return ServicesFactory
     */
    public function getServicesFactory(): ServicesFactory
    {
        return $this->servicesFactory;
    }

    /**
     * @return bool
     */
    public function hasServicesFactory(): bool
    {
        return (bool)$this->servicesFactory;
    }
}
