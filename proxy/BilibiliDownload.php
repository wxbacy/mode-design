<?php

require_once __DIR__ . '/Download.php';

class BilibiliDownload implements Download
{
    public function download(string $url) :string
    {
        return base64_encode($url);
    }
}
