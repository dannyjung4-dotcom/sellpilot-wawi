<?php
namespace App\Connectors;

require_once __DIR__ . '/ConnectorInterface.php';

final class ModifiedConnector implements ConnectorInterface
{
    public function __construct(
        private readonly string $baseUrl,
        private readonly string $apiKey
    ) {
    }

    public function connect(): bool
    {
        return $this->baseUrl !== '' && $this->apiKey !== '';
    }

    public function sync(): array
    {
        return [
            'status' => 'not_configured',
            'message' => 'Modified Connector ist vorbereitet, aber noch nicht konfiguriert.',
        ];
    }
}
