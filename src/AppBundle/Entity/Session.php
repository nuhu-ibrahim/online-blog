<?php
// src/AppBundle/Entity/Session.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="sessiontbl")
*/
class Session

{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $session_id;
    
    /**
    * @ORM\Column(type="string", length=100)
    * @Assert\NotBlank(groups={"add","edit"}, message = "Provide the session title.")
    */
    private $session_title;

    /**
     * Get sessionId
     *
     * @return integer
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Set sessionTitle
     *
     * @param string $sessionTitle
     *
     * @return Session
     */
    public function setSessionTitle($sessionTitle)
    {
        $this->session_title = $sessionTitle;

        return $this;
    }

    /**
     * Get sessionTitle
     *
     * @return string
     */
    public function getSessionTitle()
    {
        return $this->session_title;
    }
}
