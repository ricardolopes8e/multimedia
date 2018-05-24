<?php namespace App\Http\Controllers;



use App\Modalidade;
use App\Organization;
use App\Team;

use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;


class OrganizationController extends Controller
{



    public function __construct()
    {

    }


    /** WEB  */
    /**
     * @return Game (all collections);
     */
    public function index()
    {
        $organizations = Organization::all();
        return view('organizations.index', compact('organizations'));
    }

    public function show(Organization $organization)
    {
        $modalidades = Modalidade::all();
        $teams = $organization->teams;
        return view('organizations.show', compact('organization', 'modalidades', 'teams'));
    }




}
