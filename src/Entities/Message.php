<?php

namespace Telegram\Entities;

class Message
{
    public function __construct(
        private int|string|null $chatId = null,
        private ?string $message = null
    ){}

    public function addId(int|string $chatId): static
    {
        return $this;
    }
    public function addMessage(string|int $text): static
    {
        $this->message = $text;
        return $this;
    }
}