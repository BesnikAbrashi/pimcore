<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Bundle\CoreBundle\Command\Bundle\Helper\PostStateChange' shared autowired service.

return $this->services['Pimcore\Bundle\CoreBundle\Command\Bundle\Helper\PostStateChange'] = new \Pimcore\Bundle\CoreBundle\Command\Bundle\Helper\PostStateChange(${($_ = isset($this->services['Pimcore\Cache\Symfony\CacheClearer']) ? $this->services['Pimcore\Cache\Symfony\CacheClearer'] : $this->services['Pimcore\Cache\Symfony\CacheClearer'] = new \Pimcore\Cache\Symfony\CacheClearer()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Tool\AssetsInstaller']) ? $this->services['Pimcore\Tool\AssetsInstaller'] : $this->services['Pimcore\Tool\AssetsInstaller'] = new \Pimcore\Tool\AssetsInstaller()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});
