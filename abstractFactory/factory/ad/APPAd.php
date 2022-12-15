<?php

// APP广告投放
interface APPAd
{
    // 服务端归因
    public function serverAscribe();

    // 客户端sdk归因
    public function sdkAscribe();

    // 事件回传
    public function eventCallback();
}