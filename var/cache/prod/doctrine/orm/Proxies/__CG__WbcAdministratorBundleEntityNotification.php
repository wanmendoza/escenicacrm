<?php

namespace Proxies\__CG__\Wbc\AdministratorBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Notification extends \Wbc\AdministratorBundle\Entity\Notification implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'id', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'title', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'message', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'type', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'action', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'seen', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'checked', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'created_at', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'created_by', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'updated_at', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'updated_by', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'from', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'to', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'path', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'params', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'target'];
        }

        return ['__isInitialized__', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'id', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'title', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'message', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'type', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'action', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'seen', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'checked', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'created_at', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'created_by', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'updated_at', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'updated_by', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'from', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'to', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'path', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'params', '' . "\0" . 'Wbc\\AdministratorBundle\\Entity\\Notification' . "\0" . 'target'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Notification $proxy) {
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
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setMessage($message)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessage', [$message]);

        return parent::setMessage($message);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessage', []);

        return parent::getMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setAction($action)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAction', [$action]);

        return parent::setAction($action);
    }

    /**
     * {@inheritDoc}
     */
    public function getAction()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAction', []);

        return parent::getAction();
    }

    /**
     * {@inheritDoc}
     */
    public function setSeen($seen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSeen', [$seen]);

        return parent::setSeen($seen);
    }

    /**
     * {@inheritDoc}
     */
    public function getSeen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSeen', []);

        return parent::getSeen();
    }

    /**
     * {@inheritDoc}
     */
    public function setChecked($checked)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChecked', [$checked]);

        return parent::setChecked($checked);
    }

    /**
     * {@inheritDoc}
     */
    public function getChecked()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChecked', []);

        return parent::getChecked();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy($createdBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', [$createdBy]);

        return parent::setCreatedBy($createdBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedBy($updatedBy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedBy', [$updatedBy]);

        return parent::setUpdatedBy($updatedBy);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedBy', []);

        return parent::getUpdatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setFrom(\Wbc\AdministratorBundle\Entity\User $from = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFrom', [$from]);

        return parent::setFrom($from);
    }

    /**
     * {@inheritDoc}
     */
    public function getFrom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFrom', []);

        return parent::getFrom();
    }

    /**
     * {@inheritDoc}
     */
    public function setTo(\Wbc\AdministratorBundle\Entity\User $to = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTo', [$to]);

        return parent::setTo($to);
    }

    /**
     * {@inheritDoc}
     */
    public function getTo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTo', []);

        return parent::getTo();
    }

    /**
     * {@inheritDoc}
     */
    public function setPath($path)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPath', [$path]);

        return parent::setPath($path);
    }

    /**
     * {@inheritDoc}
     */
    public function getPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', []);

        return parent::getPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setParams($params)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParams', [$params]);

        return parent::setParams($params);
    }

    /**
     * {@inheritDoc}
     */
    public function getParams()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParams', []);

        return parent::getParams();
    }

    /**
     * {@inheritDoc}
     */
    public function setTarget($target)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTarget', [$target]);

        return parent::setTarget($target);
    }

    /**
     * {@inheritDoc}
     */
    public function getTarget()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTarget', []);

        return parent::getTarget();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
