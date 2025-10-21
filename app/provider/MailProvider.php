<?php
namespace app\provider;

interface MailProvider
{
    public function for($account): self;

    public function send(array $payload): array;

    public function startWatch(): void;

    public function stopWatch(): void;

    public function syncDelta(): int;
}
