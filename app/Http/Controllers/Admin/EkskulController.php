<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use App\Models\Ekskul;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EkskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ekskul = Ekskul::paginate(10);
        
        return view('admin.ekskul.index', compact('ekskul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(@$request->ekskul_id) {
            $ekskul = Ekskul::find($request->ekskul_id);
            $images = $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $images['image'] = $request->file('image')->store('ekskul', 'public');

            $ekskul->images()->create($images);

            return back()->with('success', 'Gambar berhasil ditambahkan');
        }

        $attr = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $attr['logo'] = $request->file('logo')->store('ekskul', 'public');

        Ekskul::create($attr);

        return back()->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Ekskul::findOrFail($id);

        return view('admin.ekskul.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Ekskul::find($id);

        $attr = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if($request->hasFile('logo')) {
            $attr['logo'] = $request->file('logo')->store('ekskul', 'public');

            // delete old image
            deleteImage($data->image);
        }

        $data->update($attr);

        return back()->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // delete galeri kegiatan
        if(@request()->type == 'galeri') {
            $image = Image::findOrFail($id);

            // delete old image
            deleteImage($image->image);

            $image->delete();

            return back()->with('success', 'Gambar berhasil dihapus');
        }

        $data = Ekskul::find($id);

        // delete old image
        deleteImage($data->image);

        $data->delete();

        return back()->with('success', 'Data berhasil dihapus');
    }
}
