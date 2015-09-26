# Laravel Storage Cloudinary Adapter Service Provider

This is meant to be a service provider for Laravel 5.* for Storage Cloudinary Adapter.

## Usage

After instalation add to config/filesystems.php:

``` php
'cloudinary' => [
    'driver' => 'cloudinary',
    'api_key' => env('CLOUDINARY_API_KEY'),
    'api_secret' => env('CLOUDINARY_API_SECRET'),
    'cloud_name' => env('CLOUDINARY_CLOUD_NAME'),
],
```
Provide apropriate values in your .env file.

## Contributing

Contributions are **welcome** and will be fully **credited**.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.