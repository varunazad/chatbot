<?php

namespace VarunGh\Chatbot;

use Illuminate\Support\ServiceProvider;

class ChatbotServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Bind the Chatbot class as a singleton
        $this->app->singleton('chatbot', function ($app) {
            return new Chatbot();
        });
    }

    /**
     * Bootstrap services.
     */
   public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/chatbot.php' => config_path('chatbot.php'),
            ], 'chatbot-config');
        }
    }

}