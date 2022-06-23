<?php

namespace Manuylenko\Telegram\Bot\Api;

use Manuylenko\Telegram\Bot\Api\Entities\Response;
use Manuylenko\Telegram\Bot\Api\Exceptions\CurlException;
use Manuylenko\Telegram\Bot\Api\Exceptions\JsonException;
use Manuylenko\Telegram\Bot\Api\Exceptions\ResponseException;

class Request
{
    /**
     * Экземпляр cUrl.
     *
     * @var resource
     */
    protected $curl;

    /**
     * Опции cUrl.
     *
     * @var array
     */
    protected $curlOptions = [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 60,
        CURLOPT_CONNECTTIMEOUT => 5,
        CURLOPT_POST => null,
        CURLOPT_POSTFIELDS => null
    ];


    /**
     * Конструктор.
     *
     * @param string $url
     * @param array $data
     */
    public function __construct($url, array $data = [])
    {
        $this->curlOptions[CURLOPT_URL] = $url;

        if ($data) {
            $this->curlOptions = array_replace($this->curlOptions, [
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => $this->clearData($data)
            ]);
        }
    }

    /**
     * Очищает массив данных от пустых значений.
     *
     * @param array $data
     *
     * @return array
     */
    protected function clearData(array $data)
    {
        foreach ($data as $k => $v) {
            if ($v == null) {
                unset($data[$k]);
            } else {
                if (is_array($v)) {
                    $data[$k] = $this->clearData($v);
                }
            }
        }

        return $data;
    }

    /**
     * Отправляет запрос на сервер телеграм.
     *
     * @return Response
     *
     * @throws CurlException
     * @throws JsonException
     * @throws ResponseException
     */
    public function send()
    {
        $this->curl = curl_init();
        if ($this->curl === false) {
            throw new CurlException('Ошибка инициализации cUrl.');
        }

        curl_setopt_array($this->curl, $this->curlOptions);
        $json = curl_exec($this->curl);
        if ($json === false) {
            throw new CurlException(curl_error($this->curl), curl_errno($this->curl));
        }

        $data = json_decode($json, true);
        if (json_last_error()) {
            throw new JsonException(json_last_error_msg(), json_last_error());
        }

        $response = new Response($data);
        if (! $response->getOk()) {
            throw new ResponseException($response);
        }

        return $response;
    }

    /**
     * Деструктор.
     */
    public function __destruct()
    {
        if ($this->curl) {
            curl_close($this->curl);
        }
    }
}
