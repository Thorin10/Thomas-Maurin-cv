<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.block.service.rss' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/Block/BlockServiceInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/Block/Service/BlockServiceInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/Block/Service/AbstractBlockService.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/Block/Service/AdminBlockServiceInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/Block/Service/AbstractAdminBlockService.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/Block/Service/RssBlockService.php';

return $this->services['sonata.block.service.rss'] = new \Sonata\BlockBundle\Block\Service\RssBlockService('sonata.block.rss', ${($_ = isset($this->services['templating']) ? $this->services['templating'] : $this->load(__DIR__.'/getTemplatingService.php')) && false ?: '_'});
