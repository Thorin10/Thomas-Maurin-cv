<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.block.exception.filter.ignore_block_exception' shared service.

include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/Exception/Filter/FilterInterface.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/block-bundle/Exception/Filter/IgnoreClassFilter.php';

return $this->services['sonata.block.exception.filter.ignore_block_exception'] = new \Sonata\BlockBundle\Exception\Filter\IgnoreClassFilter('Sonata\\BlockBundle\\Exception\\BlockExceptionInterface');
