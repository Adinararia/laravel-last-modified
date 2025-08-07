<?php

declare(strict_types=1);

namespace Adinaria\LastModified\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static void set(\Illuminate\Support\Carbon|null $updated_at)
 * @method static \Illuminate\Support\Carbon|null get()
 *
 * @see \Adinaria\LastModified\LastModified
 */
class LastModified extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-last-modified';
    }
}
