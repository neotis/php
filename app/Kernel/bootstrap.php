<?php

namespace App\Kernel;

trait bootstrap
{
    private function bootstrapDirectories()
    {
        $directories = $this->fileSystem->directories(APP_PATH . 'bootstrap');
        print_r($directories);
        die;
    }

    protected function requireBootstraps()
    {
        $this->bootstrapDirectories();
    }
}