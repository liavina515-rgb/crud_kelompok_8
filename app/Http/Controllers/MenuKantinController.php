<?php

namespace App\Http\Controllers;

use App\Models\MenuKantin;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class MenuKantinController extends Controller
{
   public function MenuKantin()
   {
       return [
        [
            'kode_menu' => 'MENU-001',
            'nama_menu' => 'Nasi Goreng',
            'kategori' => 'Makanan',
            'harga' => 15000,
            'stok' => 10,
            'status' => 'Tersedia',
            'keterangan' => 'Nasi goreng spesial dengan telur dan ayam.',
        ],
        [
            'kode_menu' => 'MENU-002',
            'nama_menu' => 'Es Teh Manis',
            'kategori' => 'Minuman',
            'harga' => 5000,
            'stok' => 20,
            'status' => 'Tersedia',
            'keterangan' => 'Es teh manis segar untuk menemani makan siang.',
        ],
        [
            'kode_menu' => 'MENU-003',
            'nama_menu' => 'Roti Bakar Cokelat',
            'kategori' => 'Snack',
            'harga' => 8000,
            'stok' => 15,
            'status' => 'Tersedia',
            'keterangan' => 'Roti yang lembut diisi dengan coklat dan dibakar menggunakan mentega',
        ],
       ];
   }
    public function index()
    {
        $menus = MenuKantin::latest()->get();
        return view('menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('menus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
         'kode_menu' => ['required', 'string', Rule::unique(MenuKantin::class, 'kode_menu')],
        'nama_menu'  => 'required|string|max:100',
        'kategori'   => 'required|in:Makanan,Minuman,Snack',
        'harga'      => 'required|integer|min:1',
        'stok'       => 'required|integer|min:0',
        'status'     => 'required|in:Tersedia,Habis',
        'keterangan' => 'nullable|string',
    ]);


      MenuKantin::create($data);
      return redirect()->route('menus.index')->with('success', 'Menu berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(MenuKantin $menu)
    {
         return redirect()->route('menus.edit', $menu);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MenuKantin $menu)
    {
        return view('menus.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MenuKantin $menu)
    {
        $data = $request->validate([
        'kode_menu'  => ['required', 'string', Rule::unique(MenuKantin::class, 'kode_menu')->ignore($menu->id)],
        'nama_menu'  => 'required|string|max:100',
        'kategori'   => 'required|string',
        'harga'      => 'required|integer|min:0',
        'stok'       => 'required|integer|min:0',
        'status'     => 'required|in:Tersedia,Habis',
        'keterangan' => 'nullable|string',
    ]);

    $menu->update($data);

    return redirect()->route('menus.index')->with('success', 'Menu berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MenuKantin $menu)
    {
        $menu->delete();

         return redirect()->route('menus.index')->with('success', 'Menu berhasil dihapus.');
    }
}
