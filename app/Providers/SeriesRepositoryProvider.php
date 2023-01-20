<?php

namespace App\Providers;

use App\Http\Interface\InterfaceSeriesRepository;
use App\Repositories\SeriesRepository;
use Illuminate\Support\ServiceProvider;

class SeriesRepositoryProvider extends ServiceProvider
{
    public array $bindings = [
        InterfaceSeriesRepository::class => SeriesRepository::class
    ];
}
