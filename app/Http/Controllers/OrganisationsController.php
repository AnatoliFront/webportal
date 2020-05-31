<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class OrganisationsController extends Controller
{
    public function search(Request $request) {
        $region = App\Regions::where('name', $request['search'])->get();
        $organisations = App\Organisations::where('region_id', $region[0]->id)->get();
        return $organisations;
    }

    public function index() {
       return view('organisations');
    }
}
