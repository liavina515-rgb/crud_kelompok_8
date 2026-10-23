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
                'kode_menu' => 'required | string | min:1 | unique:menu_kantins,kode_menu',
                'nama_menu' => 'required | string | min:1',
                'kategori' => 'required | string | min:1',
                'harga' => 'required | numeric | min:1',
                'stok' => 'required | integer | min:1',
                'status' => 'required | string | min:1',
                'keterangan' => 'nullable | string | min:1',
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
       return view('menu.edit', compact('menu'));
    }


    public function update(Request $request, MenuKantin $menu)
    {
        $data = $request->validate(
            [
                'kode_menu' => 'required | string | min:1| unique:menu_kantins,kode_menu,' . $menu->id,
                'nama_menu' => 'required | string | min:1',
                'kategori' => 'required | string | min:1',
                'harga' => 'required | numeric | min:1',
                'stok' => 'required | integer | min:1',
                'status' => 'required | string | min:1',
                'keterangan' => 'nullable | string | min:1',
            ]
        );

        $menu->update($data);

        return redirect()->route('menu.index')->with('success', 'Menu Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuKantin $menu)
    {
        $menu->delete();
        return redirect()->route('menu.index')->with('success', 'Menu Berhasil dihapus');

    }
}
