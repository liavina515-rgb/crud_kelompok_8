<?php

namespace App\Http\Controllers;

use App\Models\MenuKantin;
use Illuminate\Http\Request;

class MenuKantinController extends Controller
{
   public function index(){
    $menus = MenuKantin::latest()->get();
    return view('menu.index', compact('menus'));
   }

    public function create()
    {
       return view ('menu.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'kode_menu' => 'required | string | max:10 | unique:menu_kantins,kode_menu',
                'nama_manu' => 'required | string | max:100',
                'kategori' => 'required | string | max:255',
                'harga' => 'required | string | max:0',
                'stok' => 'required | string | max:0',
                'status' => 'required | string | max:255',
                'keterangan' => 'nullable | string | max:100',
            ]
        );

    MenuKantin::create($data);

    return redirect()->route('menu.index')->with('succes','Menu ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MenuKantin $menuKantin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MenuKantin $menuKantin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuKantin $menuKantin)
    {
        $menuKantin->delete();
        return redirect()->route('menu.index')->with('success', 'Menu Berhasil dihapus');

    }
}
