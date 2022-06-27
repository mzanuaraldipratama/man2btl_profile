<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ekskul;
use App\Models\Employe;
use App\Models\Galeri;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Registration;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    // galeri
    public function galeri()
    {
        $galeri = Galeri::latest()->get();
        $kategori = Category::all();
        $kegiatan = Galeri::where('category_id', 'kegiatan')->get();
        return view('galeri', compact('galeri', 'kegiatan','kategori'));
    }

    // mapel
    public function mapel()
    {
        $kelas = Kelas::latest()->get();
        return view('mapel', compact('kelas'));
    }

    // ekskul
    public function ekskul()
    {
        $ekskul = Ekskul::latest()->get();
        return view('ekskul', compact('ekskul'));
    }

    // guru
    public function guru()
    {
        $guru = Employe::all();
        return view('guru' , compact('guru'));
    }

    // psb
    public function psb()
    {
        return view('psb');
    }
    public function formpsb()
    {
        return view('formpsb');
    }
    public function formpsb_store( Request $request)
    {
        $data = $request->all();
        // dds($data);
        $regis = Registration::create($data);
        return back()->with('success', 'Pendaftaran anda berhasil');
    }
}
