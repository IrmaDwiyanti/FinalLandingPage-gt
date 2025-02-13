<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BeritaUserController extends Controller
{
    // Menampilkan berita berdasarkan user yang login
    public function index() {
        $berita = Berita::where('user_id', Auth::id())->paginate(10); 
        return view('pages copy.dashboard.berita.index', compact('berita'));
    }

    // Menampilkan form tambah berita
    public function create() {
        return view('pages copy.dashboard.berita.create');
    }

    // Menampilkan form edit berita
    public function edit($id) {
        $berita = Berita::where('user_id', Auth::id())->findOrFail($id); 
        return view('pages copy.dashboard.berita.edit', compact('berita'));
    }

    // Menyimpan berita baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'author' => 'required',
            'date' => 'required|date',
            'content' => 'required',
            /* 'status' => 'required|in:0,1', */
        ]);

       /*  $status = $request->input('status', '0'); */
       $path = null;
       if ($request->hasFile('image')) {
           $path = $request->file('image')->store('images', 'public');
       }
   
       // Proses konten berita
       $description = $request->content;
       $dom = new \DomDocument();
   
       // Load deskripsi baru ke DOMDocument
       @$dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
   
       // Proses tag <img> dalam konten
       $imageFile = $dom->getElementsByTagName('img');
       $newImages = [];
       foreach ($imageFile as $item => $image) {
           $data = $image->getAttribute('src');
   
           // Jika gambar berbentuk base64, simpan ke server
           if (strpos($data, 'base64') !== false) {
               list($type, $data) = explode(';', $data);
               list(, $data) = explode(',', $data);
               $imageData = base64_decode($data);
   
               // Tentukan nama file unik
               $image_name = "/upload/" . time() . $item . '.png';
               $path = public_path() . $image_name;
   
               // Simpan gambar ke server
               file_put_contents($path, $imageData);
   
               // Perbarui atribut src dengan path gambar baru
               $image->removeAttribute('src');
               $image->setAttribute('src', $image_name);
   
               // Tambahkan ke daftar gambar baru
               $newImages[] = $path;
           }
       }
   
       // Simpan kembali deskripsi yang telah diperbarui
       $description = $dom->saveHTML();
   
       // Simpan data ke database
       Berita::create([
           'title' => $request->title,
           'author' => $request->author,
           'date' => $request->date,
           'content' => $description,
           'image' => $path,
/*            'status' => $request->status,
 */           'user_id' => Auth::id(),
       ]);

        return redirect()->route('pages copy.dashboard.berita.index')->with('success', 'Berita berhasil ditambahkan.');
    }

    // Mengupdate berita
    public function update(Request $request, $id) {
        $berita = Berita::where('user_id', Auth::id())->findOrFail($id); 

        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'date' => 'required|date',
            'content' => 'required|string',
            /* 'status' => 'required|in:0,1', */
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        /* $status = $request->input('status', '0'); */

        $berita->title = $request->title;
        $berita->author = $request->author;
        $berita->date = $request->date;
/*         $berita->content = $request->content;
 */       /*  $berita->status = $request->status; */

        // Proses deskripsi dan gambar dalam konten
        $description = $request->content;
        $dom = new \DomDocument();
    
        // Inisialisasi variabel untuk gambar lama dan baru
        $oldImages = [];
        $newImages = [];
    
        // Ambil gambar lama dari konten saat ini (jika ada)
        if (!empty($berita->content)) {
            $oldDom = new \DomDocument();
            @$oldDom->loadHtml($berita->content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    
            foreach ($oldDom->getElementsByTagName('img') as $img) {
                $src = $img->getAttribute('src');
                if (strpos($src, '/upload/') !== false) {
                    $oldImages[] = public_path($src); // Path penuh ke gambar lama
                }
            }
        }
    
        // Load deskripsi baru ke DOMDocument
        @$dom->loadHtml($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    
        // Proses tag <img> pada deskripsi baru
        $imageFile = $dom->getElementsByTagName('img');
        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
    
            // Jika gambar berbentuk base64, simpan ke server
            if (strpos($data, 'base64') !== false) {
                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);
                $imageData = base64_decode($data);
    
                // Tentukan nama file unik
                $image_name = "/upload/" . time() . $item . '.png';
                $path = public_path() . $image_name;
    
                // Simpan gambar ke server
                file_put_contents($path, $imageData);
    
                // Perbarui atribut src dengan path gambar baru
                $image->removeAttribute('src');
                $image->setAttribute('src', $image_name);
    
                // Tambahkan ke daftar gambar baru
                $newImages[] = $path;
            } else {
                // Tambahkan gambar yang sudah ada ke daftar baru
                $newImages[] = public_path($data);
            }
        }
    
        // Simpan kembali deskripsi yang telah diperbarui
        $description = $dom->saveHTML();
        $berita->content = $description;
    
        // Hapus gambar lama yang tidak ada di deskripsi baru
        $imagesToDelete = array_diff($oldImages, $newImages);
        foreach ($imagesToDelete as $imagePath) {
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    
        // Proses gambar utama (opsional)
        if ($request->hasFile('image')) {
            // Hapus gambar utama lama jika ada
            if ($berita->image && Storage::exists('public/' . $berita->image)) {
                Storage::delete('public/' . $berita->image);
            }
    
            // Simpan gambar utama baru
            $imagePath = $request->file('image')->store('images', 'public');
            $berita->image = $imagePath;
        }
    
        // Simpan perubahan ke database
        $berita->save();

        return redirect()->route('pages copy.dashboard.berita.index')->with('success', 'Berita berhasil diperbarui.');
    }

    // Menampilkan detail berita
    public function show($id) {
        $berita = Berita::findOrFail($id);
        return view('pages copy.dashboard.berita.detail', compact('berita'));
    }

    // Menghapus berita
    public function delete($id)
    {
        $berita = Berita::where('user_id', Auth::id())->findOrFail($id);

        // Hapus gambar jika ada
        if ($berita->image) {
            $imagePath = $berita->image; // Path langsung dari database
            if (Storage::disk('public')->exists($imagePath)) {
                Storage::disk('public')->delete($imagePath); // Hapus file di storage
            }
        }

              // Hapus gambar dalam konten jika ada
        if ($berita->content) {
            $dom = new \DomDocument();
            @$dom->loadHtml($berita->content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    
            foreach ($dom->getElementsByTagName('img') as $img) {
                $src = $img->getAttribute('src');
    
                // Periksa apakah path gambar menggunakan folder '/upload/'
                if (strpos($src, '/upload/') !== false) {
                    $imagePath = public_path($src);
                    if (file_exists($imagePath)) {
                        unlink($imagePath); // Hapus file secara langsung
                    }
                }
            }
        }
    
        // Hapus data berita
        $berita->delete();
    

        return redirect()->route('pages copy.dashboard.berita.index')->with('success', 'Berita berhasil dihapus.');
    }

    // Menampilkan berita terbaru di halaman home
public function home()
    {
        $berita_terbaru = Berita::where('status', '1') 
            ->orderBy('date', 'desc') 
            ->take(4) 
            ->get();
    
            
        // Pastikan data dikirimkan dengan benar ke view
        return view('home', compact('berita_terbaru'));
    }
    

    public function slideBerita()
    {
    $berita_terbaru = Berita::where('status', '1') 
        ->orderBy('date', 'desc') 
        ->paginate(6);

    return view('beritaslide', compact('berita_terbaru'));
    }

    public function contentberita($slug = null)
{
    // Jika slug ada, cari berita dengan slug tersebut
    if ($slug) {
        $berita = Berita::where('slug', $slug)->first();
    } else {
        // Jika tidak ada slug, tampilkan berita pertama
        $berita = Berita::first();  // Fallback ke berita pertama
    }

    // Jika berita tidak ditemukan, tampilkan halaman utama
    if (!$berita) {
        return redirect()->route('home')->with('error', 'Berita tidak ditemukan.');
    }

    // Ambil berita terbaru
    $berita_terbaru = Berita::where('status', '1')
        ->orderBy('date', 'desc')
        ->take(4)
        ->get();

    return view('contentberita', compact('berita', 'berita_terbaru'));
}
}
