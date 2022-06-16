<?php

namespace ContainerAkpyDWS;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere282a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer526e9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0e1f8 = [
        
    ];

    public function getConnection()
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'getConnection', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'getMetadataFactory', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'getExpressionBuilder', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'beginTransaction', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'getCache', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'transactional', array('func' => $func), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'commit', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->commit();
    }

    public function rollback()
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'rollback', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'getClassMetadata', array('className' => $className), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'createQuery', array('dql' => $dql), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'createNamedQuery', array('name' => $name), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'createQueryBuilder', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'flush', array('entity' => $entity), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'clear', array('entityName' => $entityName), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->clear($entityName);
    }

    public function close()
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'close', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->close();
    }

    public function persist($entity)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'persist', array('entity' => $entity), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'remove', array('entity' => $entity), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'refresh', array('entity' => $entity), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'detach', array('entity' => $entity), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'merge', array('entity' => $entity), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'contains', array('entity' => $entity), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'getEventManager', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'getConfiguration', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'isOpen', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'getUnitOfWork', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'getProxyFactory', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'initializeObject', array('obj' => $obj), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'getFilters', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'isFiltersStateClean', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'hasFilters', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return $this->valueHoldere282a->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer526e9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere282a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere282a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere282a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, '__get', ['name' => $name], $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        if (isset(self::$publicProperties0e1f8[$name])) {
            return $this->valueHoldere282a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere282a;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere282a;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere282a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere282a;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, '__isset', array('name' => $name), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere282a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere282a;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, '__unset', array('name' => $name), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere282a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere282a;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, '__clone', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        $this->valueHoldere282a = clone $this->valueHoldere282a;
    }

    public function __sleep()
    {
        $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, '__sleep', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;

        return array('valueHoldere282a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer526e9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer526e9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer526e9 && ($this->initializer526e9->__invoke($valueHoldere282a, $this, 'initializeProxy', array(), $this->initializer526e9) || 1) && $this->valueHoldere282a = $valueHoldere282a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere282a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere282a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
