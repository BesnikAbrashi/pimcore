<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Bundle\AdminBundle\EventListener\AdminExceptionListener' shared autowired service.

$this->services['Pimcore\Bundle\AdminBundle\EventListener\AdminExceptionListener'] = $instance = new \Pimcore\Bundle\AdminBundle\EventListener\AdminExceptionListener();

$instance->setPimcoreContextResolver(${($_ = isset($this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver']) ? $this->services['Pimcore\Http\Request\Resolver\PimcoreContextResolver'] : $this->getPimcoreContextResolverService()) && false ?: '_'});

return $instance;