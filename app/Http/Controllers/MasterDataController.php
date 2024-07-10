<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterDataController extends Controller
{
    public function getMasterDataList()
    {
        return view('masterdata.index');
    }
}
