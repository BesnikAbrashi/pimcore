<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Pimcore\Bundle\CoreBundle\Command\Composer\NormalizeConfigCommand' shared autowired service.

return $this->services['Pimcore\Bundle\CoreBundle\Command\Composer\NormalizeConfigCommand'] = new \Pimcore\Bundle\CoreBundle\Command\Composer\NormalizeConfigCommand(${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem()) && false ?: '_'}, ${($_ = isset($this->services['Pimcore\Composer\Config\ConfigMerger']) ? $this->services['Pimcore\Composer\Config\ConfigMerger'] : $this->load('getConfigMergerService.php')) && false ?: '_'});