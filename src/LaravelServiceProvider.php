<?php

namespace Arkade\Apparel21;

use GuzzleHttp;
use Illuminate\Support\ServiceProvider;

class LaravelServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Client::class, function ($app)
        {
            $client = new Client(config('services.apparel21.base_url'));

            if (config('services.apparel21.username') || config('services.apparel21.password')) {
                $client->setCredentials(
                    config('services.apparel21.username'),
                    config('services.apparel21.password')
                );
            }

            $this->setupRecorder($client);

            return $client;
        });
    }

    /**
     * Setup recorder middleware if the HttpRecorder package is bound.
     *
     * @param  Client $client
     * @return Client
     */
    protected function setupRecorder(Client $client)
    {
        $httpRecorderClass = 'Arkade\HttpRecorder\Integrations\Guzzle\MiddlewareFactory';
        if (! class_exists($httpRecorderClass) || ! $factory = $this->app->make($httpRecorderClass)) {
            return $client;
        }

        $stack = GuzzleHttp\HandlerStack::create();

        $stack->push($factory->make(['apparel21', 'outgoing']));

        return $client->setupClient($stack);
    }
}
