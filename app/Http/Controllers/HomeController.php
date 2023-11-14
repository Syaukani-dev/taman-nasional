<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function scan()
    {
        return view('scan');
    }

    public function sejarah()
    {
        return view('sejarah');
    }

    public function konservasi()
    {
        return view('konservasi');
    }

    public function mitigasi()
    {
        return view('mitigasi');
    }

    public function floraFauna()
    {
        return view('floraFauna');
    }

    public function celepuk()
    {
        return view('celepuk');
    }

    public function elang()
    {
        return view('elang');
    }

    public function hadiah()
    {
        return view('hadiah');
    }

    public function monyet()
    {
        return view('monyet');
    }

    public function pasang()
    {
        return view('pasang');
    }

    public function puspa()
    {
        return view('puspa');
    }

    public function tesek()
    {
        return view('tesek');
    }

    public function updateKonservasiStatus()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Update the 'konservasi' column to 1
        $user->update(['konservasi' => 1]);

        return view('konservasi'); // Load the "konservasi" view
    }

    public function updateFloradanFaunaStatus()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Update the 'konservasi' column to 1
        $user->update(['flora_dan_fauna' => 1]);

        return view('floraFauna'); // Load the "konservasi" view
    }

    public function updateMitigasiStatus()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Update the 'konservasi' column to 1
        $user->update(['mitigasi' => 1]);

        return view('mitigasi'); // Load the "konservasi" view
    }

    public function updateSejarahStatus()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Update the 'konservasi' column to 1
        $user->update(['sejarah' => 1]);

        return view('sejarah'); // Load the "konservasi" view
    }

    public function klaimHadiah()
    {
        return view('hadiah');
    }
}
