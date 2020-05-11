<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User
{

    /** 
     * @ORM\Id
     * @ORM\Column(type="string", length=45, unique=true, nullable=false)
     */

    protected $user_name;


    /** 
     * @ORM\Column(type="string", length=45, nullable=false) 
     */
    protected $user_password;

    public function getUser_name()
    {
        return $this->user_name;
    }

    public function getUser_password()
    {
        return $this->user_password;
    }
}
?>