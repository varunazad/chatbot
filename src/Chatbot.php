<?php

namespace VarunGh\Chatbot;

class Chatbot
{
    public function greet(string $name): string
    {
        return "Hello, $name! How can I help you today? hello dear";
    }

    public function auth()
    {
        return new class {
            public function asyncstat() {
                return "Authentication status checked";
            }
        };
    }
}
