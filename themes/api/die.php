<?php
class testExitMem
{
    public function __destruct()
    {
        echo memory_get_usage() . "\n";
    }
}

function shutdown()
{
		$a = str_repeat("Hello", 4242);
    echo memory_get_usage() . "\n";
}

echo memory_get_usage() . "\n";
$foo = new testExitMem();
register_shutdown_function('shutdown');

exit();