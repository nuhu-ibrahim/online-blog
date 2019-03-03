<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="grouptbl")
*/
class Group
{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $group_id;
    
    /**
    * @ORM\Column(type="integer")
    */
    private $attachment_id;
   

    /**
     * Get groupId
     *
     * @return integer
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Set attachmentId
     *
     * @param integer $attachmentId
     *
     * @return Group
     */
    public function setAttachmentId($attachmentId)
    {
        $this->attachment_id = $attachmentId;

        return $this;
    }

    /**
     * Get attachmentId
     *
     * @return integer
     */
    public function getAttachmentId()
    {
        return $this->attachment_id;
    }
}
