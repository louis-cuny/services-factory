<?php

/**
 * This file is part of the Objective PHP project
 *
 * More info about Objective PHP on www.objective-php.org
 *
 * @license http://opensource.org/licenses/GPL-3.0 GNU GPL License 3.0
 */

namespace ObjectivePHP\ServicesFactory\Config;

use ObjectivePHP\Config\Directive\AbstractMultiComplexDirective;
use ObjectivePHP\Config\Directive\IgnoreDefaultInterface;

/**
 * Class ServiceDefinition
 *
 * @package ObjectivePHP\ServicesFactory\Config
 */
class ServiceDefinition extends AbstractMultiComplexDirective implements IgnoreDefaultInterface
{
    const KEY = 'services';

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $class;

    /**
     * @var array
     */
    protected $params = [];

    /**
     * @var array
     */
    protected $setters = [];

    /**
     * @var bool
     */
    protected $static = true;

    /**
     * @var string[]
     */
    protected $aliases = [];

    /**
     * ClassServiceConfig constructor.
     *
     * @param array $parameters
     *
     * @throws \ObjectivePHP\Config\Exception\ParamsProcessingException
     */
    public function __construct(array $parameters = [])
    {
        $this->hydrate($parameters);
    }

    /**
     * Get Id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * Set Id
     *
     * @param string $id
     *
     * @return $this
     */
    public function setId(string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get Class
     *
     * @return string
     */
    public function getClass(): string
    {
        return $this->class;
    }

    /**
     * Set Class
     *
     * @param string $class
     *
     * @return $this
     */
    public function setClass(string $class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get Params
     *
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * Set Params
     *
     * @param array $params
     *
     * @return $this
     */
    public function setParams(array $params)
    {
        $this->params = $params;

        return $this;
    }

    /**
     * Get Setters
     *
     * @return array
     */
    public function getSetters(): array
    {
        return $this->setters;
    }

    /**
     * Set Setters
     *
     * @param array $setters
     *
     * @return $this
     */
    public function setSetters(array $setters)
    {
        $this->setters = $setters;

        return $this;
    }

    /**
     * Get Static
     *
     * @return bool
     */
    public function isStatic(): bool
    {
        return $this->static;
    }

    /**
     * Set Static
     *
     * @param bool $static
     *
     * @return $this
     */
    public function setStatic(bool $static)
    {
        $this->static = $static;

        return $this;
    }

    /**
     * Get Alias
     *
     * @return string[]
     */
    public function getAliases(): array
    {
        return $this->aliases;
    }

    /**
     * Set Alias
     *
     * @param string[] $aliases
     *
     * @return $this
     */
    public function setAliases(array $aliases)
    {
        $this->aliases = $aliases;

        return $this;
    }

    /**
     * Returns the service specification
     *
     * @return array
     */
    public function getSpecifications(): array
    {
        return [
            'class' => $this->getClass(),
            'params' => $this->getParams(),
            'setters' => $this->getSetters(),
            'static' => $this->isStatic(),
            'aliases' => $this->getAliases()
        ];
    }
}
