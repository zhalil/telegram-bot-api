<?php
namespace Telegram;
class Telegram
{
    public function __construct(private ?string $token = null){}

    public function setToken(string $token)
    {
        $this->token = $token;
        return $this;
    }

    public function getToken()
    {
        return $this->token;
    }

    public function sendMessage()
    {

    }

    public function getMe()
    {

    }


}