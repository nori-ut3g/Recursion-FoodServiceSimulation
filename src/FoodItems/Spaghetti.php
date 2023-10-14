<?php
namespace FoodItems;

class Spaghetti extends FoodItem
{
    const CATEGORY = "Spaghetti";
    public function __construct()
    {
        $name = "Spaghetti";
        $description = "made with eggs, hard cheese, cured pork, and black pepper.";
        $price = 23.0;
        $preparationMinTime = 5;
        parent::__construct($name, $description, $price, $preparationMinTime);
    }
}