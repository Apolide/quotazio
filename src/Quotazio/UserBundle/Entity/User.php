<?php
namespace Quotazio\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;

/**
* @ORM\Entity
* @ORM\Table(name="user_")
* @ORM\InheritanceType("JOINED")
* @ORM\DiscriminatorColumn(name="type", type="string")
* @ORM\DiscriminatorMap({"user_private" = "UserPrivate", "user_company" = "UserCompany"})
*
*/
abstract class User extends BaseUser
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
}