<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetitionController extends Controller
{
    public function getPetitions()
    {
        return view('petition.list');
    }

    public function createPetition()
    {
        return view('petition.create');
    }
    public function getSinglePetition()
    {
        return view('petition.petition');
    }
}
