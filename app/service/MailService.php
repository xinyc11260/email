<?php
namespace app\service;

use app\model\MailAccount;
use app\provider\GmailProvider;
use app\provider\GraphProvider;
use app\provider\ImapSmtpProvider;
use app\provider\MailProvider;
use think\facade\App;

class MailService
{
    public function send(array $payload): array
    {
        $provider = $this->resolveProvider($payload['account_id']);

        return $provider->send($payload);
    }

    public function listThreads(array $filters = []): array
    {
        return [];
    }

    public function getThread(int $id): array
    {
        return [];
    }

    public function getMessage(int $id): array
    {
        return [];
    }

    public function getAttachmentUrl(int $messageId, int $attachmentId): string
    {
        return '';
    }

    private function resolveProvider(int $accountId): MailProvider
    {
        $account = MailAccount::findOrFail($accountId);

        return match ($account->provider) {
            'gmail' => App::make(GmailProvider::class)->for($account),
            'graph' => App::make(GraphProvider::class)->for($account),
            default => App::make(ImapSmtpProvider::class)->for($account),
        };
    }
}
