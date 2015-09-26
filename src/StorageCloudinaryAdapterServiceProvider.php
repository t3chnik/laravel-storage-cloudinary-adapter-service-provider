<?php

namespace T3chnik\LaravelStorageCloudinaryAdapterServiceProvider;

use T3chnik\FlysystemCloudinaryAdapter\CloudinaryAdapter;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use Cloudinary\Api;
use Storage;

class StorageCloudinaryAdapterServiceProvider extends ServiceProvider
{
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        Storage::extend('cloudinary', function ($app, $config) {
            return new Filesystem(new CloudinaryAdapter($config, new Api));
        });
    }
}
