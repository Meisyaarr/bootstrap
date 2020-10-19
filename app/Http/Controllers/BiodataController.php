<?php

namespace App\Http\Controllers;

use App\Datadiri;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function __construct()
    {
        $this->datadiri = new Datadiri;
    }
    public function index()
    { 
        $datadiris = Datadiri::all();
        return view('datadiri.index',compact('datadiris'));
    }

    public function create()
    {
        return view('datadiri.create');
    }

    public function edit($id)
    {
        $datadiris = Datadiri::findOrFail($id);
        return view('datadiri.edit',compact('datadiris'));
    }

    public function store()
    {
        $datadiris = Datadiri::create($this->validateRequest());
        $this->storeImage($datadiris);

        return redirect()->back()->with(['success' => 'Data berhasil dibuat']);

    }

    private function validateRequest()
    {
        return tap(request()->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'images' => 'file|image|max:5000',
            'telp' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'ttl' => 'required',
            'asal_sekolah' => 'required',
            'nama_ibu' => 'required',
            'nama_ayah' => 'required',
        ]), function(){
            if(request()->hasFile('images')){
                request()->validate([
                    'images' => 'file|image|max:5000',
                ]);
            }
        }); 
    }

    public function storeImage($datadiri){
        if(request()->has('image')){
            $datadiri->update([
                'images' => request()->images->store('uploads','public'),
            ]);
            $image = Image::make(public_path('storage/'. $datadiri->images))->fit(300,300,null,'top-left');
            
            $image->save();
        }
    }

    public function update(datadiri $datadiri)
    {
        $datadiri->update($this->validateRequest());
        $this->storeImage($datadiri);

        return redirect()->back()->with(['success' => 'Data berhasil dibuat']);

    }

    public function show($id)
    {
        $datadiris = Datadiri::find($id);

        return view('datadiri.show', compact('datadiris'));
    }
}
