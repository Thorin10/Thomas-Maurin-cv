<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.admin.doctrine_orm.form.type.choice_field_mask' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/sonata-project/admin-bundle/Form/Type/ChoiceFieldMaskType.php';

return $this->services['sonata.admin.doctrine_orm.form.type.choice_field_mask'] = new \Sonata\AdminBundle\Form\Type\ChoiceFieldMaskType();
