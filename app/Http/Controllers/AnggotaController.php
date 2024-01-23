<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    
    public function Home()
    {
        // Logika untuk menampilkan halaman anggota
        return view('Sunmori.Home');
    }
    
    public function Pendaftaran()
    {
        // Logika untuk menampilkan halaman anggota
        return view('Sunmori.Pendaftaran');
    }
    
    // public function create()
    // {
    //     return view('Sunmori.Pendaftaran');
    // }
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'email' => 'required|email|unique:anggotas,email',
            'id_card' => 'required',
            'gender' => 'required',
            'birthdate' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
    
        // Handle file upload
        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('img'), $imageName);
    
            // Simpan path foto ke dalam database
            $photoPath = 'img/' . $imageName;
        }
    
        // Simpan anggota ke dalam database
        Anggota::create([
            'photo' => $photoPath ?? null, // Jika foto diunggah, gunakan path; jika tidak, gunakan null
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'id_card' => $validatedData['id_card'],
            'gender' => $validatedData['gender'],
            'birthdate' => $validatedData['birthdate'],
            'address' => $validatedData['address'],
            'phone' => $validatedData['phone'],
        ]);
    
        return redirect()->route('Sunmori.Anggota')->with('success', 'Anggota berhasil ditambahkan!');
    }
    




    public function index()
    {
        $anggotas = Anggota::all();
        return view('Sunmori.Anggota', compact('anggotas'));
    }
}
