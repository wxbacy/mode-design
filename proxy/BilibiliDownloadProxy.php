<?php

require_once __DIR__ . '/Download.php';
require_once __DIR__ . '/BilibiliDownload.php';

class BilibiliDownloadProxy implements Download
{
    private BilibiliDownload $bilibiliDownload;

    private array $cache = [];

    public function __construct()
    {
        $this->bilibiliDownload = new BilibiliDownload();
    }

    public function download(string $url) :string
    {
        // oauth
        if (strpos($url, 'bilibili') === false) {
            throw new Exception('url error');
        }
        // cache
        if (!isset($this->cache[$url])) {
            $this->cache[$url] = $this->bilibiliDownload->download($url);
        }
        return $this->cache[$url];
    }

    public function getCache() :array
    {
        return $this->cache;
    }
}
