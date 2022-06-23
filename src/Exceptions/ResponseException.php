<?php

namespace Manuylenko\Telegram\Bot\Api\Exceptions;

use Manuylenko\Telegram\Bot\Api\Entities\Response;

class ResponseException extends EntityException
{
    /**
     * @var Response
     */
    protected $response;


    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response->getDescription(), $response->getErrorCode());

        $this->response = $response;
    }

    /**
     * @return Response
     */
    public function getResponse()
    {
        return $this->response;
    }
}
