<?php

require_once __DIR__ . '/MobilePhoneSpec.php';

class MobilePhone
{
    private string $sn;

    private MobilePhoneSpec $mobilePhoneSpec;

    public function __construct(string $sn, MobilePhoneSpec $mobilePhoneSpec)
    {
        $this->sn = $sn;
        $this->mobilePhoneSpec = $mobilePhoneSpec;
    }

    public function getSN() :string
    {
        return $this->sn;
    }

    public function getSpec() :MobilePhoneSpec
    {
        return $this->mobilePhoneSpec;
    }
}
