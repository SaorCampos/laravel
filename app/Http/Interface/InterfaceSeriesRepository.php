<?php
namespace App\Http\Interface;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Series;

interface InterfaceSeriesRepository
{
   public function add(SeriesFormRequest $request): Series;
}