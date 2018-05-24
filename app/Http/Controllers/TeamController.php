<?php namespace App\Http\Controllers;



use App\Modalidade;
use App\Team;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;


class TeamController extends Controller
{



    /**
     * GameController constructor.
     * @param GameRepositoryInterface $gameRepository
     */
    public function __construct()
    {

    }


    /** WEB  */
    /**
     * @return Game (all collections);
     */
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }

    public function show(Team $team)
    {
        $modalidades = Modalidade::all();
        return view('teams.show', compact('team'));
    }




}
