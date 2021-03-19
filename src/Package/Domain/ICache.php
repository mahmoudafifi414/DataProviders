<?php


namespace Package\Domain;


interface ICache
{
    public function get(string $key);

    public function set(string $key, $value);
}
