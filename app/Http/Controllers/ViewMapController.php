<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewMapController extends Controller
{
    public function viewMap($desa)
    {
        switch (strtoupper($desa)) {
            case 'BANGAK':
                return $this->bangak();
            case 'BANYUDONO':
                return $this->banyudono();
            case 'BATAN':
                return $this->batan();
            case 'CANGKRINGAN':
                return $this->cangkringan();
            case 'DENGGUNGAN':
                return $this->denggungan();
            case 'DUKUH':
                return $this->dukuh();
            case 'JEMBUNGAN':
                return $this->jembungan();
            case 'JIPANGAN':
                return $this->jipangan();
            case 'KETAON':
                return $this->ketaon();
            case 'KUWRAN':
                return $this->kuwran();
            case 'NGARU_ARU':
                return $this->ngaru_aru();
            case 'SAMBON':
                return $this->sambon();
            case 'TANJUNGSARI':
                return $this->tanjungsari();
            case 'TRAYU':
                return $this->trayu();
            default:
                abort(404, 'Map not found.');
        }
    }


    public function bangak()
    {
        return view('maps.bangak');
    }

    public function banyudono()
    {
        return view('maps.banyudono');
    }

    public function batan()
    {
        return view('maps.batan');
    }

    public function cangkringan()
    {
        return view('maps.cangkringan');
    }

    public function denggungan()
    {
        return view('maps.denggungan');
    }

    public function dukuh()
    {
        return view('maps.dukuh');
    }

    public function jembungan()
    {
        return view('maps.jembungan');
    }

    public function jipangan()
    {
        return view('maps.jipangan');
    }

    public function ketaon()
    {
        return view('maps.ketaon');
    }

    public function kuwran()
    {
        return view('maps.kuwran');
    }

    public function ngaru_aru()
    {
        return view('maps.ngaru_aru');
    }

    public function sambon()
    {
        return view('maps.sambon');
    }

    public function tanjungsari()
    {
        return view('maps.tanjungsari');
    }

    public function trayu()
    {
        return view('maps.trayu');
    }
}
