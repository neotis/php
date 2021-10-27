<?php /** @noinspection ALL */

namespace App\Kernel;

use App\Kernel\interfaces\Position;
use Neotis\Filesystem\File;

class Kernel
{
    use bootstrap;

    private File $fileSystem;
    private static Kernel $instance;
    private array $positions;

    private function __construct()
    {
        $this->fileSystem = new File();
        $this->requireBootstraps();
    }

    public static function getInstance(): Kernel
    {
        if (self::$instance)
        {
            self::$instance = new Kernel();
        }
        return self::$instance;
    }

    public function setPosition(string $name, Position $object, $replace = false)
    {
        $this->positions[$name] = $object;
    }

    public function fire(): void
    {
        try {
            foreach ($this->positions as $object) {
                (new $object)->start();
            }
        } catch (\Exception $e){
            throw new \Exception($e->getMessage());
        }
    }
}