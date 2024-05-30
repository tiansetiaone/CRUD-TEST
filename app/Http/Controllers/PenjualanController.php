<?php

namespace App\Http\Controllers;

use App\Models\Dtlpenjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{

    // public $sortColumn = 'nama_barang';
    // public $sortDirection = 'asc';

    public function index(){
        $dtlpenjualan = Dtlpenjualan::all();
        // $dtlpenjualan = Dtlpenjualan::sortable();
        return view ('penjualan.index',compact(['dtlpenjualan']));
    }

    public function create(){
        return view('penjualan.create');
    }

    public function store(Request $request){
        Dtlpenjualan::create($request->except(['_token','submit']));
        return redirect('/');
    }

    public function edit($id){
        $dtlpenjualan = Dtlpenjualan::find($id);
        return view('penjualan.edit',compact(['dtlpenjualan']));
    }

    public function update($id, Request $request){
        $dtlpenjualan = Dtlpenjualan::find($id);
        $dtlpenjualan->update($request->except(['_token','submit']));
        return redirect('/');
    }

    public function destroy($id){
        $dtlpenjualan = Dtlpenjualan::find($id);
        $dtlpenjualan->delete();
        return redirect('/');
    }

    public function search(Request $request) {
        if($request->has('search')) {
            $dtlpenjualan = Dtlpenjualan::where('nama_barang','LIKE','%'.$request->search.'%')
            ->get();
        }
        else {
            $dtlpenjualan = Dtlpenjualan::all();
        }
        return view ('penjualan.index',['dtlpenjualan' => $dtlpenjualan]);
    }

    // public function sort($columnName){
    //     $this->sortColumn = $columnName;
    //     $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc';
    // }

    public function indexPaging()
{
    $dtlpenjualan = Dtlpenjualan::paginate(5);

    return view('penjualan.index-paging')->with('dtlpenjualan', $dtlpenjualan);
}

public function indexSorting()
{
    $dtlpenjualan = Dtlpenjualan::sortable()->paginate(5);

    return view('penjualan.index-sorting')->with('dtlpenjualan', $dtlpenjualan);
}
}
