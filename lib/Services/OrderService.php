<?php

namespace BronosPay\Services;

use BronosPay\Resources\CreateOrder;
use BronosPay\Resources\Checkout;
use BronosPay\Resources\Order;

class OrderService extends AbstractService
{
    /**
     * Create order at BronosPay and redirect shopper to invoice (payment_url).
     *
     * @param  string[] $params
     * @return CreateOrder|mixed
     */
    public function create(array $params = [])
    {
        return $this->request('post', '/api/gateway/v1/orders', $params);
    }


    /**
     * Cancel order at BronosPay and redirect shopper to failed page.
     *
     * @param  string $id
     * @return Order|mixed
     */
    public function cancel(string $id)
    {
        return $this->request('put', $this->buildPath('/api/gateway/v1/orders/%s/cancel', $id));
    }

    /**
     * Retrieving information of a specific order by BronosPay order ID.
     *
     * @param  string $id
     * @return Order|mixed
     */
    public function get(string $id)
    {
        return $this->request('get', $this->buildPath('/api/gateway/v1/orders/%s', $id));
    }

    /**
     * Retrieving information of all placed orders.
     *
     * @param  string[] $params
     * @return Order[]|mixed
     */
    public function list(array $params = [])
    {
        return $this->request('get', '/api/gateway/v1/orders', $params);
    }
}
