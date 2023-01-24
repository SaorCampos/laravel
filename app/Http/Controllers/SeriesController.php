<?php

namespace App\Http\Controllers;

use App\Events\SeriesCreated as EventsSeriesCreated;
use App\Http\Interface\InterfaceSeriesRepository;
use App\Http\Middleware\Autenticador;
use App\Models\Series;
use Illuminate\Http\Request;
use App\Http\Requests\SeriesFormRequest;
use App\Mail\SeriesCreated;
use App\Models\Season;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class SeriesController extends Controller
{ 
    public function __construct(private InterfaceSeriesRepository $repository)
    {
        $this->middleware(Autenticador::class)->except('index');
    }

    public function index(Request $request)
    {
        // $series = Serie::query()->orderBy('nome')->get();
        $series = Series::all();
        $mensagemSucesso = session('mensagem.sucesso');
        return view('series.index')->with('series',$series)->with('mensagemSucesso', $mensagemSucesso);
        // return view('series.index', compact('series'));
    }
    public function create()
    {
        return view('series.create');
    }
    public function store(SeriesFormRequest $request)
    {
        $serie = $this->repository->add($request);
        \App\Events\SeriesCreated::dispatch(
            $serie->nome,
            $serie->id,
            $request->seasonQty,
            $request->episodesPerSeason,
        );
        // $userList = User::all();
        // foreach($userList as $index => $user){
        //     $email = new SeriesCreated(
        //         $serie->nome,
        //         $serie->id,
        //         $request->seasonQty,
        //         $request->episodesPerSeason,
        //     );
        //     $when = now()->addSeconds($index * 5);
        //     Mail::to($user)->later($when, $email);
        // }
        return to_route('series.index')->with('mensagem.sucesso',"Série '{$serie->nome}' adicionada com sucesso");
    }
    public function destroy(Series $series)
    {
        $series->delete();
        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->nome}' removida com sucesso");
    }
    public function edit (Series $series)
    {
        return view('series.edit')->with('series', $series);
    }
    public function update(Series $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();
        return to_route('series.index')->with('mensagem.sucesso', "Série '{$series->nome}' editada com sucesso");
    }
}