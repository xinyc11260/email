<?php
namespace app\service;

class SyncService
{
    public function triggerDeltaSync(int $accountId): int
    {
        return 0;
    }

    public function handleGmailWebhook(array $payload, array $headers = []): void
    {
    }

    public function handleGraphWebhook(array $payload, array $headers = []): void
    {
    }
}
