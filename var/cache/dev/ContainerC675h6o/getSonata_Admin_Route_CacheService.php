<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.admin.route.cache' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Route/RoutesCache.php';

return $this->services['sonata.admin.route.cache'] = new \Sonata\AdminBundle\Route\RoutesCache(($this->targetDirs[0].'/sonata/admin'), true);
