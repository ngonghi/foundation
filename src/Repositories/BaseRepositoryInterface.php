<?php
namespace LaravelRocket\Foundation\Repositories;

interface BaseRepositoryInterface
{
    /**
     * Get Empty Array or Traversable Object.
     *
     * @return \LaravelRocket\Foundation\Models\Base[]|\Traversable|array
     */
    public function getEmptyList();

    /**
     * Get All Models.
     *
     * @param string $order
     * @param string $direction
     *
     * @return \LaravelRocket\Foundation\Models\Base[]|\Traversable|array
     */
    public function all($order = null, $direction = null);

    /**
     * Get All Enabled Models.
     *
     * @param string $order
     * @param string $direction
     *
     * @return \LaravelRocket\Foundation\Models\Base[]|\Traversable|array
     */
    public function allEnabled($order = null, $direction = null);

    /**
     * Get Models with Order.
     *
     * @param string $order
     * @param string $direction
     * @param int    $offset
     * @param int    $limit
     *
     * @return \LaravelRocket\Foundation\Models\Base[]|\Traversable|array
     */
    public function get($order, $direction, $offset, $limit);

    /**
     * Get Models with Order.
     *
     * @param string $order
     * @param string $direction
     * @param int    $offset
     * @param int    $limit
     *
     * @return \LaravelRocket\Foundation\Models\Base[]|\Traversable|array
     */
    public function getEnabled($order, $direction, $offset, $limit);

    /**
     * @return int
     */
    public function count();

    /**
     * @return int
     */
    public function countEnabled();

    /**
     * @return string
     */
    public function getModelClassName();

    /**
     * Get Empty Array or Traversable Object.
     *
     * @return \LaravelRocket\Foundation\Models\Base;
     */
    public function getBlankModel();

    /**
     * Get a rule for Validator.
     *
     * @return array
     */
    public function rules();

    /**
     * Get a messages for Validator.
     *
     * @return array
     */
    public function messages();

    /**
     * @param \Illuminate\Support\Collection $collection
     * @param string                         $value
     * @param string|null                    $key
     *
     * @return \Illuminate\Support\Collection
     */
    public function pluck($collection, $value, $key = null);
}
