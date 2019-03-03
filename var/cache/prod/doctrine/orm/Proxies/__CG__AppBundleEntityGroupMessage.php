<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class GroupMessage extends \AppBundle\Entity\GroupMessage implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\GroupMessage' . "\0" . 'message_id', '' . "\0" . 'AppBundle\\Entity\\GroupMessage' . "\0" . 'group_id', '' . "\0" . 'AppBundle\\Entity\\GroupMessage' . "\0" . 'sender_type', '' . "\0" . 'AppBundle\\Entity\\GroupMessage' . "\0" . 'message_sender_id', '' . "\0" . 'AppBundle\\Entity\\GroupMessage' . "\0" . 'message_content', '' . "\0" . 'AppBundle\\Entity\\GroupMessage' . "\0" . 'message_date'];
        }

        return ['__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\GroupMessage' . "\0" . 'message_id', '' . "\0" . 'AppBundle\\Entity\\GroupMessage' . "\0" . 'group_id', '' . "\0" . 'AppBundle\\Entity\\GroupMessage' . "\0" . 'sender_type', '' . "\0" . 'AppBundle\\Entity\\GroupMessage' . "\0" . 'message_sender_id', '' . "\0" . 'AppBundle\\Entity\\GroupMessage' . "\0" . 'message_content', '' . "\0" . 'AppBundle\\Entity\\GroupMessage' . "\0" . 'message_date'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (GroupMessage $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getMessageId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessageId', []);

        return parent::getMessageId();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroupId($groupId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroupId', [$groupId]);

        return parent::setGroupId($groupId);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupId', []);

        return parent::getGroupId();
    }

    /**
     * {@inheritDoc}
     */
    public function setMessageSenderId($messageSenderId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessageSenderId', [$messageSenderId]);

        return parent::setMessageSenderId($messageSenderId);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessageSenderId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessageSenderId', []);

        return parent::getMessageSenderId();
    }

    /**
     * {@inheritDoc}
     */
    public function setMessageContent($messageContent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessageContent', [$messageContent]);

        return parent::setMessageContent($messageContent);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessageContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessageContent', []);

        return parent::getMessageContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setMessageDate($messageDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessageDate', [$messageDate]);

        return parent::setMessageDate($messageDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessageDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessageDate', []);

        return parent::getMessageDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setSenderType($senderType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSenderType', [$senderType]);

        return parent::setSenderType($senderType);
    }

    /**
     * {@inheritDoc}
     */
    public function getSenderType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSenderType', []);

        return parent::getSenderType();
    }

}
