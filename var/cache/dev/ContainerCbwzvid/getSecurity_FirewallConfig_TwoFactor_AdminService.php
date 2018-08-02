<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall_config.two_factor.admin' shared service.

return $this->services['security.firewall_config.two_factor.admin'] = new \Scheb\TwoFactorBundle\Security\TwoFactor\TwoFactorFirewallConfig(array('auth_form_path' => '/admin/login/2fa', 'check_path' => '/admin/login/2fa-verify', 'default_target_path' => '/admin', 'always_use_default_target_path' => false, 'auth_code_parameter_name' => '_auth_code', 'trusted_parameter_name' => '_trusted', 'multi_factor' => false));
