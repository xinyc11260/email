<?php
namespace app\provider;

use app\model\MailAccount;

class ImapSmtpProvider implements MailProvider
{
    private MailAccount $account;

    public function for($account): self
    {
        $this->account = $account;

        return $this;
    }

    public function send(array $payload): array
    {
        return ['message_id' => null, 'thread_id' => null];
    }

    public function startWatch(): void
    {
    }

    public function stopWatch(): void
    {
    }

    public function syncDelta(): int
    {
        return 0;
    }
}
