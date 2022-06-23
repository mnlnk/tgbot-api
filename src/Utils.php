<?php

namespace Manuylenko\Telegram\Bot\Api;

use Manuylenko\Telegram\Bot\Api\Entities\Entity;
use Manuylenko\Telegram\Bot\Api\Exceptions\ValueException;

class Utils
{
    /**
     * Создает массив сущностей из данных.
     *
     * @param string $class
     * @param array|string $data
     *
     * @return array
     */
    public static function makeEntitiesArray($class, $data)
    {
        $arr = [];
        foreach (self::toArray($data) as $d) {
            if ($d) {
                $arr[] = new $class($d);
            }
        }

        return $arr;
    }

    /**
     * Конвертирует данные в массив.
     *
     * @param mixed $data
     *
     * @return array
     */
    public static function toArray($data)
    {
        return is_array($data) ? $data : array($data);
    }

    /**
     * Конвертирует данные в Json-строку.
     *
     * @param mixed $data
     * @param bool $required
     *
     * @return string
     */
    public static function toJson($data, $required = true)
    {
        if ($required && $data === null) {
            throw new ValueException('Отсутствует значение для конвертирования в json-строку');
        }

        if (is_array($data)) {
            foreach ($data as $k => $v) {
                $data[$k] = self::toJson($v, false);
            }

            $data = '['.implode(',', $data).']';
        } else {
            $data = $data instanceof Entity ? $data->toJson() : json_encode($data);
        }

        return $data;
    }

    /**
     * Конвертирует данные в Json-строку, если нет данных возвращает null.
     *
     * @param mixed $data
     *
     * @return string|null
     */
    public static function toJsonOrNull($data)
    {
        return $data !== null ? self::toJson($data, false) : null;
    }

    /**
     * Проверяет число.
     *
     * @param int|float|null $value
     * @param int|float|null $min
     * @param int|float|null $max
     * @param bool|null $required
     * @param int|float|null $default
     *
     * @return int|float|null
     */
    public static function checkNum($value, $min = null, $max = null, $required = null, $default = null)
    {
        if ($value === null) {
            if ($required) {
                throw new ValueException('Значение является обязательным');
            }
            return $default;
        }

        if (! is_numeric($value)) {
            throw new ValueException('Значение не является числом');
        }

        if ($min !== null && $value < $min) {
            throw new ValueException('Значение ниже допустимого');
        }

        if ($max !== null && $value > $max) {
            throw new ValueException('Значение превышает допустимое');
        }

        return $value;
    }

    /**
     * Проверяет строку.
     *
     * @param string|null $value
     * @param int|null $min
     * @param int|null $max
     * @param bool|null $required
     * @param string|null $default
     *
     * @return string|null
     */
    public static function checkStr($value, $min = null, $max = null, $required = null, $default = null)
    {
        if ($value === null) {
            if ($required) {
                throw new ValueException('Значение является обязательным');
            }
            return $default;
        }

        if (! is_string($value)) {
            throw new ValueException('Значение не является строкой');
        }

        $len = mb_strlen($value);
        if ($min !== null && $len < $min) {
            throw new ValueException("Значение слишком короткое");
        }

        if ($max !== null && $len > $max) {
            throw new ValueException('Значение превышает допустимую длину');
        }

        return $value;
    }
}
