<?php

namespace ContainerCXpyXbg;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder37990 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd8abc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd3ada = [
        
    ];

    public function getConnection()
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'getConnection', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'getMetadataFactory', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'getExpressionBuilder', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'beginTransaction', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'getCache', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'transactional', array('func' => $func), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->transactional($func);
    }

    public function commit()
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'commit', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->commit();
    }

    public function rollback()
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'rollback', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'getClassMetadata', array('className' => $className), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'createQuery', array('dql' => $dql), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'createNamedQuery', array('name' => $name), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'createQueryBuilder', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'flush', array('entity' => $entity), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'clear', array('entityName' => $entityName), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->clear($entityName);
    }

    public function close()
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'close', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->close();
    }

    public function persist($entity)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'persist', array('entity' => $entity), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'remove', array('entity' => $entity), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'refresh', array('entity' => $entity), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'detach', array('entity' => $entity), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'merge', array('entity' => $entity), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'contains', array('entity' => $entity), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'getEventManager', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'getConfiguration', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'isOpen', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'getUnitOfWork', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'getProxyFactory', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'initializeObject', array('obj' => $obj), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'getFilters', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'isFiltersStateClean', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'hasFilters', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return $this->valueHolder37990->hasFilters();
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

        $instance->initializerd8abc = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder37990) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder37990 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder37990->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, '__get', ['name' => $name], $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        if (isset(self::$publicPropertiesd3ada[$name])) {
            return $this->valueHolder37990->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37990;

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

        $targetObject = $this->valueHolder37990;
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
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37990;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder37990;
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
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, '__isset', array('name' => $name), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37990;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder37990;
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
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, '__unset', array('name' => $name), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37990;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder37990;
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
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, '__clone', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        $this->valueHolder37990 = clone $this->valueHolder37990;
    }

    public function __sleep()
    {
        $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, '__sleep', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;

        return array('valueHolder37990');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd8abc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd8abc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd8abc && ($this->initializerd8abc->__invoke($valueHolder37990, $this, 'initializeProxy', array(), $this->initializerd8abc) || 1) && $this->valueHolder37990 = $valueHolder37990;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder37990;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder37990;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
