<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'pimcore.analytics.google.fallback_service_locator' shared autowired service.

return $this->services['pimcore.analytics.google.fallback_service_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array('Pimcore\\Analytics\\Google\\Config\\SiteConfigProvider' => function () {
    return ${($_ = isset($this->services['Pimcore\Analytics\Google\Config\SiteConfigProvider']) ? $this->services['Pimcore\Analytics\Google\Config\SiteConfigProvider'] : $this->load('getSiteConfigProviderService.php')) && false ?: '_'};
}, 'Pimcore\\Analytics\\Google\\Tracker' => function () {
    return ${($_ = isset($this->services['Pimcore\Analytics\Google\Tracker']) ? $this->services['Pimcore\Analytics\Google\Tracker'] : $this->getTrackerService()) && false ?: '_'};
}));
