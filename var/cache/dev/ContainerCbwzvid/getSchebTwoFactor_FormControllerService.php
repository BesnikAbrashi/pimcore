<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'scheb_two_factor.form_controller' shared service.

return $this->services['scheb_two_factor.form_controller'] = new \Scheb\TwoFactorBundle\Controller\FormController(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['scheb_two_factor.provider_registry']) ? $this->services['scheb_two_factor.provider_registry'] : $this->load('getSchebTwoFactor_ProviderRegistryService.php')) && false ?: '_'}, ${($_ = isset($this->services['scheb_two_factor.firewall_context']) ? $this->services['scheb_two_factor.firewall_context'] : $this->load('getSchebTwoFactor_FirewallContextService.php')) && false ?: '_'}, false);
