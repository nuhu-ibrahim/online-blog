<?php
// src/AppBundle/Entity/User.php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Table(name="app_users")
* @ORM\Entity(repositoryClass="AppBundle\Entity\UserRepository")
*/
class User implements UserInterface, \Serializable
{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"add","edit"},message="Provide user's surname")
    */
    private $surname;
    
    /**
    * @ORM\Column(type="string", length=100, nullable=true)
    */
    private $othername;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"add","edit"},message="Provide user's firstname")
    */
    private $firstname;
    
    /**
    * @ORM\Column(type="string", length=25)
     * @Assert\NotBlank(groups={"add"}, message = "Provide user's username")
    */
    private $username;
    
    /**
    * @ORM\Column(type="string", length=64)
     * @Assert\NotBlank(groups={"add", "update"},message = "Provide your old password")
    */
    private $password;
    
    /**
    * @ORM\Column(type="string", length=60)
     * @Assert\NotBlank(groups={"add","edit"},message = "Provide user's email")
     * @Assert\Email(groups={"add","edit"},message="Provide a valid email address")
    */
    private $email;
    
    /**
    * @ORM\Column(name="is_active", type="boolean")
    */
    private $isActive;

    /**
    * @ORM\Column(type="string", length=60)
     * @Assert\NotBlank(groups={"add","edit"}, message = "Choose user's role")
    */
    private $role;

    public function __construct()
    {
        $this->isActive = true;
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid(null, true));
    }
    
    public function getUsername()
    {
        return $this->username;
    }
    
    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }
    
    public function getPassword()
    {
        return $this->password;
    }
    
    public function getRoles()
    {
        return array(/*'ROLE_ADMIN'*/$this->role);
    }
    
    public function eraseCredentials()
    {
    }
    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->email,
            $this->password,
            // see section on salt below
            // $this->salt,
        ));
    }
    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->email,
            $this->password,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return User
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set othername
     *
     * @param string $othername
     *
     * @return User
     */
    public function setOthername($othername)
    {
        $this->othername = $othername;

        return $this;
    }

    /**
     * Get othername
     *
     * @return string
     */
    public function getOthername()
    {
        return $this->othername;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }
}
