<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'scheb_two_factor.default_trusted_device_manager' shared service.

return $this->services['scheb_two_factor.default_trusted_device_manager'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\Trusted\TrustedDeviceManager(${($_ = isset($this->services['scheb_two_factor.trusted_token_storage']) ? $this->services['scheb_two_factor.trusted_token_storage'] : $this->getSchebTwoFactor_TrustedTokenStorageService()) && false ?: '_'});
