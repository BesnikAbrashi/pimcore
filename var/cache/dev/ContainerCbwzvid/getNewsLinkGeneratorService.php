<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'AppBundle\LinkGenerator\NewsLinkGenerator' shared autowired service.

return $this->services['AppBundle\LinkGenerator\NewsLinkGenerator'] = new \AppBundle\LinkGenerator\NewsLinkGenerator(${($_ = isset($this->services['cmf_routing.router']) ? $this->services['cmf_routing.router'] : $this->getCmfRouting_RouterService()) && false ?: '_'});