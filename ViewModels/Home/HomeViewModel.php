<?php

namespace NewCart\ViewModels\Home;


class HomeViewModel
{
    private $topProductsList = [];
    private $availableDiscounts;

    private $productId;
    private $productName;
    private $productPrice;
    private $discount;
    private $quantity;

    public function __construct(/*$topProductsList, $availableDiscounts = null*/)
    {
        //$this->setTopProductsList($topProductsList);
        //$this->setAvailableDiscounts($availableDiscounts);
    }

    /**
     * @return array
     */
    public function getTopProductsList()
    {
        return $this->topProductsList;
    }

    /**
     * @param array $topProductsList
     * @return array $topProductsList
     */
    public function setTopProductsList($topProductsList)
    {
        $this->topProductsList = $topProductsList;
        //return $this;
    }

    /**
     * @return mixed
     */
    public function getAvailableDiscounts()
    {
        return $this->availableDiscounts;
    }

    /**
     * @param mixed $availableDiscounts
     * @return float $availableDiscounts
     */
    public function setAvailableDiscounts($availableDiscounts)
    {
        $this->availableDiscounts = $availableDiscounts;
        //return $this;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param mixed $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    /**
     * @return mixed
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * @param mixed $productPrice
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param mixed $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }



}