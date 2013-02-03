<?php

namespace Quotazio\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller as BaseController;

class RegistrationUserPrivate extends BaseController
{
    public function registerAction()
    {
        return $this->container
            ->get('pugx_multi_user.registration_manager')
            ->register('Quotazio\UserBundle\Entity\UserPrivate');
    }
}