<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return view('sidebar.artikel'); // Pastikan view ini ada
    }
}
//     // Menampilkan daftar artikel
//     public function index()
//     {
//         $articles = Article::all();
//         return view('artikel.index', compact('articles'));
//     }

//     // Menampilkan form untuk membuat artikel baru
//     public function create()
//     {
//         return view('articles.create');
//     }

//     // Menyimpan artikel baru ke database
//     public function store(Request $request)
//     {
//         $request->validate([
//             'title' => 'required',
//             'content' => 'required',
//         ]);

//         Article::create($request->all());

//         return redirect()->route('articles.index')
//                          ->with('success', 'Article created successfully.');
//     }

//     // Menampilkan form untuk mengedit artikel
//     public function edit($id)
//     {
//         $article = Article::find($id);
//         return view('articles.edit', compact('article'));
//     }

//     // Memperbarui artikel yang sudah ada
//     public function update(Request $request, $id)
//     {
//         $request->validate([
//             'title' => 'required',
//             'content' => 'required',
//         ]);

//         $article = Article::find($id);
//         $article->update($request->all());

//         return redirect()->route('articles.index')
//                          ->with('success', 'Article updated successfully.');
//     }

//     // Menghapus artikel dari database
//     public function destroy($id)
//     {
//         $article = Article::find($id);
//         $article->delete();

//         return redirect()->route('articles.index')
//                          ->with('success', 'Article deleted successfully.');
//     }
// }
