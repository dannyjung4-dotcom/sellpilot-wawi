<?php
namespace App\Connectors;

interface ConnectorInterface
{
    public function connect(): bool;
    public function sync(): array;
}
