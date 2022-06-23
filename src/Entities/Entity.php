<?php

namespace Manuylenko\Telegram\Bot\Api\Entities;

use Exception;
use ReflectionObject;
use Manuylenko\Telegram\Bot\Api\Entities\Bot\BotEntity;
use Manuylenko\Telegram\Bot\Api\Entities\Inline\Content\InputMessageContent;
use Manuylenko\Telegram\Bot\Api\Entities\Inline\QueryResult\InlineQueryResult;
use Manuylenko\Telegram\Bot\Api\Entities\Keyboards\KeyboardEntity;
use Manuylenko\Telegram\Bot\Api\Entities\Media\InputMedia;
use Manuylenko\Telegram\Bot\Api\Entities\Passport\Elements\Errors\PassportElementError;
use Manuylenko\Telegram\Bot\Api\Entities\Payments\LabeledPrice;
use Manuylenko\Telegram\Bot\Api\Utils;

/**
 * [+]
 */
abstract class Entity
{
    /**
     * @var array
     */
    protected $__instances = [];


    /**
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        foreach ($data as $p => $v) {
            if ($v !== null) {
                $this->set($p, $v);
            }
        }
    }

    /**
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->getRawData());
    }

    /**
     * @param string $string
     *
     * @return static
     */
    public static function fromJson($string)
    {
        return new static(json_decode($string, true));
    }

    /**
     * @return array
     */
    public function getRawData()
    {
        $data = [];
        $reflection = new ReflectionObject($this);

        foreach ($reflection->getProperties() as $prop) {
            if ($prop->isPublic()) {
                $data[$prop->getName()] = $prop->getValue($this);
            }
        }

        return $data;
    }

    /**
     * @param mixed $data
     *
     * @return mixed
     */
    protected function flatten($data)
    {
        if ($data instanceof Entity) {
            $data = $data->getRawData();
        }

        if (is_array($data)) {
            foreach ($data as $k => $v) {
                $data[$k] = $this->flatten($v);
            }
        }

        return $data;
    }

    /**
     * @param string $prop
     * @param mixed $value
     *
     * @return $this
     */
    protected function set($prop, $value)
    {
        $this->{$prop} = $this->flatten($value);

        return $this;
    }

    /**
     * @param string $prop
     *
     * @return bool
     */
    protected function has($prop)
    {
        return isset($this->{$prop});
    }

    /**
     * @param string $prop
     *
     * @return mixed|null
     */
    protected function get($prop)
    {
        return $this->has($prop) ? $this->{$prop} : null;
    }

    /**
     * @param string $prop
     * @param string $class
     *
     * @return array
     */
    protected function getArray($prop, $class)
    {
        return is_array($data = $this->get($prop)) ? Utils::makeEntitiesArray($class, $data) : [];
    }

    /**
     * @param string $prop
     * @param string $class
     *
     * @return array
     */
    protected function getArrayOfArray($prop, $class)
    {
        $arr = array();
        $data = $this->get($prop);

        if (is_array($data)) {
            foreach ($data as $k => $d) {
                if (is_array($d)) {
                    $arr[$k] = Utils::makeEntitiesArray($class, $d);
                }
            }
        }

        return $arr;
    }

    /**
     * @param string $prop
     *
     * @return $this
     */
    protected function remove($prop)
    {
        if ($this->has($prop)) {
            unset($this->{$prop});
        }

        return $this;
    }

    /**
     * @return array
     */
    protected function subEntities()
    {
        return [];
    }

    /**
     * @param string $method
     * @param array $params
     *
     * @return $this|mixed|null
     */
    public function __call($method, array $params = [])
    {
        $prop = substr($method, 3);
        $prop = preg_replace('/[A-Z]/', '_$0', $prop);
        $prop = ltrim($prop, '_');
        $prop = mb_strtolower($prop);

        $type = substr($method, 0, 3);

        switch ($type) {
            case 'get':
                if (isset($this->__instances[$prop])) {
                    return $this->__instances[$prop];
                }

                $data = $this->get($prop);

                if ($data != null) {
                    $subEntities = $this->subEntities();
                    $entity = isset($subEntities[$prop]) ? $subEntities[$prop] : null;

                    if ($entity != null) {
                        $object = is_array($entity) ? Utils::makeEntitiesArray($entity[0], $data) : new $entity($data);
                        $this->__instances[$prop] = $object;

                        return $object;
                    }

                    return $data;
                }
                break;
            case 'set':
                if ($this instanceof BotEntity ||
                    $this instanceof ChatAdministratorRights ||
                    $this instanceof ChatPermissions ||
                    $this instanceof InlineQueryResult ||
                    /*$this instanceof InputFile ||*/
                    $this instanceof InputMedia ||
                    $this instanceof InputMessageContent ||
                    $this instanceof KeyboardEntity ||
                    $this instanceof LabeledPrice ||
                    $this instanceof MessageEntity ||
                    $this instanceof PassportElementError ||
                    $this instanceof User
                ) {
                    if (! isset($params[0])) {
                        throw new Exception(sprintf('Отсутствуют параметры метода %s::%s()', get_class($this), $method));
                    }

                    return $this->set($prop, $params[0]);
                } else {
                    throw new Exception(sprintf('Метод %s::%s() не найден', get_class($this), $method));
                }
        }

        return null;
    }
}
