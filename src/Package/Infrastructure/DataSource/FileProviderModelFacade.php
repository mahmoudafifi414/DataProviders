<?php


namespace Package\Infrastructure\DataSource;

use Illuminate\Support\Facades\App;
use Package\Domain\ICache;

class FileProviderModelFacade
{
    private static string $source;

    public function getFileData(): array
    {
        $cache = App::make(ICache::class);
        //check if data in the cache
        $data = unserialize($cache->get(static::$source));
        //if the data not in cache
        if (!$data) {
            $path = storage_path() . '/JsonDataSource/' . static::$source . '.json';
            $handle = fopen($path, "r");
            $data = '';
            //read file line by line to lead for better performance
            if ($handle) {
                while (($line = fgets($handle)) !== false) {
                    $data .= $line;
                }
                fclose($handle);
                $cache->set(static::$source, serialize($data));
            } else {
                $data = '';
            }
        }
        return json_decode($data, true);
    }
}
