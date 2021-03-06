<?php
// src/AppBundle/Entity/Message.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="group_messagetbl")
*/
class GroupMessage
{
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $message_id;
    
    /**
    * @ORM\Column(type="integer")
    */
    private $group_id;
    
    /**
    * @ORM\Column(type="integer")
    */
    private $sender_type;
    
    /**
    * @ORM\Column(type="integer")
    */
    private $message_sender_id;
    
    /**
    * @ORM\Column(type="text")
     * @Assert\NotBlank(message = "Message cannot be blank.")
    */
    private $message_content;

    /**
    * @ORM\Column(type="datetime")
    */
    private $message_date;


    /**
     * Get messageId
     *
     * @return integer
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * Set groupId
     *
     * @param integer $groupId
     *
     * @return GroupMessage
     */
    public function setGroupId($groupId)
    {
        $this->group_id = $groupId;

        return $this;
    }

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
     * Set messageSenderId
     *
     * @param integer $messageSenderId
     *
     * @return GroupMessage
     */
    public function setMessageSenderId($messageSenderId)
    {
        $this->message_sender_id = $messageSenderId;

        return $this;
    }

    /**
     * Get messageSenderId
     *
     * @return integer
     */
    public function getMessageSenderId()
    {
        return $this->message_sender_id;
    }

    /**
     * Set messageContent
     *
     * @param string $messageContent
     *
     * @return GroupMessage
     */
    public function setMessageContent($messageContent)
    {
        $this->message_content = $messageContent;

        return $this;
    }

    /**
     * Get messageContent
     *
     * @return string
     */
    public function getMessageContent()
    {
        return $this->message_content;
    }

    /**
     * Set messageDate
     *
     * @param \DateTime $messageDate
     *
     * @return GroupMessage
     */
    public function setMessageDate($messageDate)
    {
        $this->message_date = $messageDate;

        return $this;
    }

    /**
     * Get messageDate
     *
     * @return \DateTime
     */
    public function getMessageDate()
    {
        return $this->message_date;
    }

    /**
     * Set senderType
     *
     * @param integer $senderType
     *
     * @return GroupMessage
     */
    public function setSenderType($senderType)
    {
        $this->sender_type = $senderType;

        return $this;
    }

    /**
     * Get senderType
     *
     * @return integer
     */
    public function getSenderType()
    {
        return $this->sender_type;
    }
}
