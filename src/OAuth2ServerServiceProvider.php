<?php

namespace o2l\OAuth2Server;

use LucaDegasperi\OAuth2Server\OAuth2ServerServiceProvider as BaseServiceProvider;

class OAuth2ServerServiceProvider extends BaseServiceProvider {

    public function boot() {}

    public function register() {
        parent::register();
        $this->registerConfiguration();
    }

    public function registerAssets() {}

    public function registerConfiguration() {
        $this->app->configure("oauth2");
    }

}
