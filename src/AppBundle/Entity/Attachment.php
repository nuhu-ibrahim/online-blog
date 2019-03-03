<?php
// src/AppBundle/Entity/Attachment.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="attachmenttbl")
*/
class Attachment
{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $attachment_id;
   
    /**
    * @ORM\Column(type="integer")
    * @Assert\NotBlank(groups={"add","edit"},message = "Choose the course whose document you want to upload.")
    */
    private $course_id;
    
    /**
    * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(groups={"add"},message = "Choose the document to upload.")
    */
    private $attachment;
    
    /**
    * @ORM\Column(type="string", length=100)
    * @Assert\NotBlank(groups={"add","edit"},message = "Provide a document description.")
    */
    private $attachment_desc;

    /**
     * Get attachmentId
     *
     * @return integer
     */
    public function getAttachmentId()
    {
        return $this->attachment_id;
    }

    /**
     * Set courseId
     *
     * @param integer $courseId
     *
     * @return Attachment
     */
    public function setCourseId($courseId)
    {
        $this->course_id = $courseId;

        return $this;
    }

    /**
     * Get courseId
     *
     * @return integer
     */
    public function getCourseId()
    {
        return $this->course_id;
    }

    /**
     * Set courseTitle
     *
     * @param string $courseTitle
     *
     * @return Attachment
     */
    public function setCourseTitle($courseTitle)
    {
        $this->course_title = $courseTitle;

        return $this;
    }

    /**
     * Get courseTitle
     *
     * @return string
     */
    public function getCourseTitle()
    {
        return $this->course_title;
    }

    /**
     * Set attachment
     *
     * @param string $attachment
     *
     * @return Attachment
     */
    public function setAttachment($attachment)
    {
        $this->attachment = $attachment;

        return $this;
    }

    /**
     * Get attachment
     *
     * @return string
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * Set attachmentDesc
     *
     * @param string $attachmentDesc
     *
     * @return Attachment
     */
    public function setAttachmentDesc($attachmentDesc)
    {
        $this->attachment_desc = $attachmentDesc;

        return $this;
    }

    /**
     * Get attachmentDesc
     *
     * @return string
     */
    public function getAttachmentDesc()
    {
        return $this->attachment_desc;
    }
}
