<?php

namespace BronosPay\Services;

class PublicService extends AbstractService
{

    /**
     * A health check endpoint for BronosPay API.
     *
     * @return mixed
     */
    public function ping()
    {
        return $this->request('get', '/api/gateway/v1/ping');
    }
}
