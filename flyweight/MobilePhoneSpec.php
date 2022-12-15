<?php

class MobilePhoneSpec
{
    private string $title;

    private string $brand;

    private string $desc;

    public function __construct(string $title, string $brand, string $desc)
    {
        $this->title = $title;
        $this->brand = $brand;
        $this->desc = $desc;
    }

    public function getTitle() :string
    {
        return $this->title;
    }

    public function getBrand() :string
    {
        return $this->brand;
    }

    public function getDesc() :string
    {
        return $this->desc;
    }
}
