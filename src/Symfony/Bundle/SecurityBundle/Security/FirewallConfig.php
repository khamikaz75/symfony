<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bundle\SecurityBundle\Security;

/**
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class FirewallConfig
{
    private $name;
    private $requestMatcher;
    private $securityEnabled;
    private $stateless;
    private $provider;
    private $context;
    private $entryPoint;
    private $accessDeniedHandler;
    private $accessDeniedUrl;
    private $userChecker;
    private $listeners;

    public function __construct($name, $requestMatcher, $securityEnabled = true, $stateless = false, $provider = null, $context = null, $entryPoint = null, $accessDeniedHandler = null, $accessDeniedUrl = null, $userChecker = null, $listeners = array())
    {
        $this->name = $name;
        $this->requestMatcher = $requestMatcher;
        $this->securityEnabled = $securityEnabled;
        $this->stateless = $stateless;
        $this->provider = $provider;
        $this->context = $context;
        $this->entryPoint = $entryPoint;
        $this->accessDeniedHandler = $accessDeniedHandler;
        $this->accessDeniedUrl = $accessDeniedUrl;
        $this->userChecker = $userChecker;
        $this->listeners = $listeners;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string The request matcher service id
     */
    public function getRequestMatcher()
    {
        return $this->requestMatcher;
    }

    public function isSecurityEnabled()
    {
        return $this->securityEnabled;
    }

    public function allowsAnonymous()
    {
        return in_array('anonymous', $this->listeners, true);
    }

    public function isStateless()
    {
        return $this->stateless;
    }

    /**
     * @return string The provider service id
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * @return string The context key
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @return string The entry_point service id
     */
    public function getEntryPoint()
    {
        return $this->entryPoint;
    }

    /**
     * @return string The user_checker service id
     */
    public function getUserChecker()
    {
        return $this->userChecker;
    }

    /**
     * @return string The access_denied_handler service id
     */
    public function getAccessDeniedHandler()
    {
        return $this->accessDeniedHandler;
    }

    public function getAccessDeniedUrl()
    {
        return $this->accessDeniedUrl;
    }

    /**
     * @return array An array of listener keys
     */
    public function getListeners()
    {
        return $this->listeners;
    }
}
