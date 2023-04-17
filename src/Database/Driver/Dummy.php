<?php
namespace App\Database\Driver;
use Cake\Database\DriverInterface;
use Cake\Database\Query;
use Cake\Database\QueryCompiler;
use Cake\Database\Schema\SchemaDialect;
use Cake\Database\Schema\TableSchema;
use Cake\Database\StatementInterface;
use Cake\Database\ValueBinder;
use Closure;
use PDO;

/**
 * @method null getMaxAliasLength()
 * @method int getConnectRetries()
 * @method bool supports(string $feature)
 * @method bool inTransaction()
 */
class Dummy implements DriverInterface
{
    public function getConnection()
    {
        // TODO: Implement getConnection() method.
    }

    public function setConnection($connection)
    {
        // TODO: Implement setConnection() method.
    }

    public function prepare($query): StatementInterface
    {
        // TODO: Implement prepare() method.
    }

    public function beginTransaction(): bool
    {
        // TODO: Implement beginTransaction() method.
    }

    public function commitTransaction(): bool
    {
        // TODO: Implement commitTransaction() method.
    }

    public function rollbackTransaction(): bool
    {
        // TODO: Implement rollbackTransaction() method.
    }

    public function releaseSavePointSQL($name): string
    {
        // TODO: Implement releaseSavePointSQL() method.
    }

    public function savePointSQL($name): string
    {
        // TODO: Implement savePointSQL() method.
    }

    public function rollbackSavePointSQL($name): string
    {
        // TODO: Implement rollbackSavePointSQL() method.
    }

    public function disableForeignKeySQL(): string
    {
        // TODO: Implement disableForeignKeySQL() method.
    }

    public function enableForeignKeySQL(): string
    {
        // TODO: Implement enableForeignKeySQL() method.
    }

    public function supportsDynamicConstraints(): bool
    {
        // TODO: Implement supportsDynamicConstraints() method.
    }

    public function supportsSavePoints(): bool
    {
        // TODO: Implement supportsSavePoints() method.
    }

    public function quote($value, $type): string
    {
        // TODO: Implement quote() method.
    }

    public function supportsQuoting(): bool
    {
        // TODO: Implement supportsQuoting() method.
    }

    public function queryTranslator(string $type): Closure
    {
        // TODO: Implement queryTranslator() method.
    }

    public function schemaDialect(): SchemaDialect
    {
        // TODO: Implement schemaDialect() method.
    }

    public function quoteIdentifier(string $identifier): string
    {
        // TODO: Implement quoteIdentifier() method.
    }

    public function schemaValue($value): string
    {
        // TODO: Implement schemaValue() method.
    }

    public function schema(): string
    {
        // TODO: Implement schema() method.
    }

    public function lastInsertId(?string $table = null, ?string $column = null)
    {
        // TODO: Implement lastInsertId() method.
    }

    public function enableAutoQuoting(bool $enable = true)
    {
        // TODO: Implement enableAutoQuoting() method.
    }

    public function disableAutoQuoting()
    {
        // TODO: Implement disableAutoQuoting() method.
    }

    public function isAutoQuotingEnabled(): bool
    {
        // TODO: Implement isAutoQuotingEnabled() method.
    }

    public function compileQuery(Query $query, ValueBinder $binder): array
    {
        // TODO: Implement compileQuery() method.
    }

    public function newCompiler(): QueryCompiler
    {
        // TODO: Implement newCompiler() method.
    }

    public function newTableSchema(string $table, array $columns = []): TableSchema
    {
        // TODO: Implement newTableSchema() method.
    }

    public function __call($name, $arguments)
    {
        // TODO: Implement @method null getMaxAliasLength()
        // TODO: Implement @method int getConnectRetries()
        // TODO: Implement @method bool supports(string $feature)
        // TODO: Implement @method bool inTransaction()
    }

    public function connect(): bool
    {
        return true;
    }

    public function disconnect(): void
    {
        // TODO: Implement disconnect() method.
    }

    public function enabled(): bool
    {
        return true;
    }

    public function isConnected(): bool
    {
        return true;
    }
}
