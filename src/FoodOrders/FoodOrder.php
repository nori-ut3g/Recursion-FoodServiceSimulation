<?php
namespace FoodOrders;

class FoodOrder
{
    private array $items;
    private int $orderTime;

    public function __construct(array $items)
    {
        $this->items = $items;
        $this->orderTime = time();
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function getOrderTime(): int
    {
        return $this->orderTime;
    }
}