<?php

namespace App\Http\Controllers;

use App\Anggota;
use App\Senjata;
use Illuminate\Http\Request;

class FourierController extends Controller
{
    /**
     * Show data per page
     *
     * @var integer
     */
    private $paginate = 10;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggotas = Anggota::paginate($this->paginate);
        return view('fourier.index', compact('anggotas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fourier.formCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|unique:anggotas|max:255',
            'pangkat'   => 'required|max:255',
            'nrp'       => 'required|unique:anggotas|numeric',
            'type'      => 'required|max:255',
            'nosenjata' => 'required|unique:senjatas,nosenjata'
        ]);

        $anggota = new Anggota;
        $anggota->name    = $request->name;
        $anggota->pangkat = $request->pangkat;
        $anggota->nrp     = $request->nrp;
        $anggota->save();

        $senjata = new Senjata;
        $senjata->anggota_id = $anggota->id;
        $senjata->type       = $request->type;
        $senjata->nosenjata  = $request->nosenjata;
        $senjata->save();

        return redirect()->route('fourier.index')->with('success', 'Menambahkan data anggota');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anggota = Anggota::find($id);
        return view('fourier.showDetail', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anggota = Anggota::find($id);
        return view('fourier.formEdit', compact('anggota'));
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
        $anggota = Anggota::find($id);

        $request->validate([
            'name'      => 'required|max:255|unique:anggotas,name,'.$anggota->id,
            'pangkat'   => 'required|max:255',
            'nrp'       => 'required|numeric|unique:anggotas,nrp,'.$anggota->id,
            'type'      => 'required|max:255',
            'nosenjata' => 'required|unique:senjatas,nosenjata,'.$anggota->id
        ]);

        $anggota = Anggota::findOrFail($id);
        $anggota->name               = $request->name;
        $anggota->pangkat            = $request->pangkat;
        $anggota->nrp                = $request->nrp;
        $anggota->senjata->type      = $request->type;
        $anggota->senjata->nosenjata = $request->nosenjata;
        $anggota->senjata->save();
        $anggota->save();

        return redirect()->route('fourier.index')->with('success', 'Mengubah data anggota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = Anggota::findorFail($id);
        $anggota->delete();

        return redirect()->route('fourier.index')->with('success', 'Menghapus data anggota');
    }
}
