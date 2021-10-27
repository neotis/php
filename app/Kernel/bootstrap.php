<?php

namespace App\Kernel;

trait bootstrap
{
    private function bootstrapDirectories()
    {
        $directories = Methods::directories(APP_PATH . 'bootstrap');
        print_r($directories);
        die;
    }

    protected function requireBootstraps()
    {
        $this->bootstrapDirectories();
    }
}