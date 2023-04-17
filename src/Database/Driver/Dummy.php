<?php
namespace App\Database\Driver;
use Cake\Database\Driver\Mysql;

/**
 * @method null getMaxAliasLength()
 * @method int getConnectRetries()
 * @method bool supports(string $feature)
 * @method bool inTransaction()
 */
class Dummy extends Mysql
{
    public function connect(): bool
    {
        return true;
    }
}
