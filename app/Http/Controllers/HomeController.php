<?php

namespace App\Http\Controllers;

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

    public function floraDanFauna()
    {
        return view('floraDanFauna');
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
}
