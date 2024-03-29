<?php
namespace App\Repositories;

use App\Http\Interface\InterfaceSeriesRepository;
use App\Http\Requests\SeriesFormRequest;
use App\Models\Episode;
use App\Models\Season;
use App\Models\Series;

use Illuminate\Support\Facades\DB;

class SeriesRepository implements InterfaceSeriesRepository
{
    public function add(SeriesFormRequest $request): Series
    {
       DB::beginTransaction();
        $serie = Series::create($request->all());
        $seasons = [];
        for($i = 1; $i <= $request->seasonQty; $i++) {
            $seasons[] = [
                'series_id' => $serie->id,
                'number' => $i,
            ];
        }
        Season::insert($seasons);
        $episodes = [];
        foreach($serie->seasons as $season){
            for($j = 1; $j <= $request->episodesPerSeason; $j++){
                $episodes[] = [
                    'season_id' => $season->id,
                    'number' => $j,
                ];
            }
        }
        Episode::insert($episodes);
        DB::commit();
        return $serie;
    }
}