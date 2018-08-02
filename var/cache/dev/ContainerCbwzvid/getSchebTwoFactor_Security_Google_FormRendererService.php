<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'scheb_two_factor.security.google.form_renderer' shared service.

if ($lazyLoad) {
    return $this->services['scheb_two_factor.security.google.form_renderer'] = $this->createProxy('DefaultTwoFactorFormRenderer_892ae3f', function () {
        return \DefaultTwoFactorFormRenderer_892ae3f::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) {
            $wrappedInstance = $this->load('getSchebTwoFactor_Security_Google_FormRendererService.php', false);

            $proxy->setProxyInitializer(null);

            return true;
        });
    });
}

return new \Scheb\TwoFactorBundle\Security\TwoFactor\Provider\DefaultTwoFactorFormRenderer(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, '@SchebTwoFactor/Authentication/form.html.twig');
