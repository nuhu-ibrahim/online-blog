<?php
// src/AppBundle/Entity/Message.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
* @ORM\Entity
* @ORM\Table(name="messagetbl")
*/
class Message
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
    * @ORM\Column(type="integer")
    */
    private $message_reciever;


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
     * Set messageSenderId
     *
     * @param integer $messageSenderId
     *
     * @return Message
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
     * @return Message
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
     * @return Message
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
     * Set messageReciever
     *
     * @param integer $messageReciever
     *
     * @return Message
     */
    public function setMessageReciever($messageReciever)
    {
        $this->message_reciever = $messageReciever;

        return $this;
    }

    /**
     * Get messageReciever
     *
     * @return integer
     */
    public function getMessageReciever()
    {
        return $this->message_reciever;
    }
}
