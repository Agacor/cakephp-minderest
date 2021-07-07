<?php
use Migrations\AbstractSeed;

class DatabaseSeed extends AbstractSeed
{
    public function run()
    {
        $this->call('ClientesSeed');
        $this->call('ProductosSeed');
    }
}