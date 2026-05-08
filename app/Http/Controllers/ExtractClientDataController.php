<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExtractClientDataController extends Controller
{

    public function index($token)
    {

        // SECRET TOKEN CHECK
        if ($token !== env('LIKHA_EXTRACT_TOKEN')) {

            abort(404);
        }

        $clients = DB::table('ugc_creator_profiles')
            ->latest()
            ->paginate(10);

        return view('extract-client-data', compact('clients'));
    }
}
