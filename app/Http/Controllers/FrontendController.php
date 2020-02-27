<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;
use App\Film;
use App\Restoran;
use App\Budaya;
use App\Artikel;
use App\Kategori;
use App\User;


class FrontendController extends Controller
{
    public function front()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->paginate(3);
        $restoran = Restoran::all();
        $budaya = Budaya::all();
        $film = Film::all();
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.front', compact('artikel', 'film', 'budaya', 'restoran', 'kategori', 'tag'));
    }

    public function about()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->paginate(3);
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.about', compact('artikel', 'kategori', 'tag'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function calendar()
    {
        return view('backend.calendar');
    }

    public function archive()
    {
        return view('frontend.archive');
    }

    public function restoran()
    {
        return view('frontend.restoran');
    }

    public function budaya()
    {
        return view('frontend.budaya');
    }

    public function singlebudaya(Budaya $budaya)
    {
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.single-budaya',compact ('budaya', 'kategori', 'tag'));
    }

    public function singlerestoran(Restoran $restoran)
    {
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.single-restoran',compact ('restoran', 'kategori', 'tag'));
    }

    public function singlefilm(Film $film)
    {
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.single-film',compact ('film', 'kategori', 'tag'));
    }

    public function blog()
    {
        $artikel = Artikel::orderBy('created_at', 'desc')->paginate(3);
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.archive', compact('artikel', 'kategori', 'tag'));
    }

    public function singleblog(Artikel $artikel)
    {
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.single-post', compact('artikel', 'kategori', 'tag'));
    }


    public function blogtag(Tag $tag)
    {
        $artikel = $tag->Artikel()->latest()->paginate(5);
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.archive', compact('artikel', 'kategori', 'tag'));
    }

    public function blogkategori(Kategori $kategori)
    {
        $artikel = $kategori->Artikel()->latest()->paginate(5);
        $kategori = Kategori::all();
        $tag = Tag::all();
        return view('frontend.archive', compact('artikel', 'kategori', 'tag'));
    }

    public function index()
    {
        $menu = Kategori::take(3)->get();
        $top = Article::where('headline', 0)->orderBy('created_at', 'desc')->take(5)->get();
        $headline = Article::where('headline', 1)->orderBy('created_at', 'desc')->take(3)->get();
        $article = Article::select('articles.title', 'articles.slug', 'headline', 'image', 'categories.title as categories', 'users.name as author')
            ->join('users', 'users.id', '=', 'articles.user_id')
            ->join('categories', 'categories.id', '=', 'articles.category_id')
            ->paginate(2);
        $trending = Article::inRandomOrder()->take(3)->get();
        $latest = Article::orderBy('created_at', 'desc')->take(4)->get();

        $response = [
            'success' => true,
            'data' => ['menu' => $menu, 'top' => $top, 'headline' => $headline, 'article' => $article, 'trending' => $trending, 'latest' => $latest],
            'message' => 'Berhasil.'
        ];

        return response()->json($response, 200);
    }

    public function most()
    {
        $artikel = Artikel::take(6)->get();
        $tag = Tag::all();
        $kategori = Kategori::all();

        $response = [
            'Success' => true,
            'data' => ['artikel' => $artikel, 'tag' => $tag, 'kategori' => $kategori],
            'message' => 'Artikel berhasil ditemukan'
        ];
        return response()->json($response, 200);
    }

    public function kpop()
    {
        $artikel = Artikel::take(1)->get();
        $tag = Tag::all();
        $kategori = Kategori::all();

        $response = [
            'Success' => true,
            'data' => ['artikel' => $artikel, 'tag' => $tag, 'kategori' => $kategori],
            'message' => 'Artikel berhasil ditemukan'
        ];
        return response()->json($response, 200);
    }

    public function trending()
    {
        $artikel = Artikel::take(4)->get();
        $tag = Tag::all();
        $kategori = Kategori::all();

        $response = [
            'Success' => true,
            'data' => ['artikel' => $artikel, 'tag' => $tag, 'kategori' => $kategori],
            'message' => 'Artikel berhasil ditemukan'
        ];
        return response()->json($response, 200);
    }

    public function restoran1()
    {
        $restoran = Restoran::all();

        $response = [
            'Success' => true,
            'data' => ['restoran' => $restoran],
            'message' => 'Restoran berhasil ditemukan'
        ];
        return response()->json($response, 200);
    }

    public function film1()
    {
        $film = Film::take(4)->get();

        $response = [
            'Success' => true,
            'data' => ['film' => $film],
            'message' => 'Film berhasil ditemukan'
        ];
        return response()->json($response, 200);
    }

    public function budaya1()
    {
        $budaya = Budaya::take(4)->get();

        $response = [
            'Success' => true,
            'data' => ['budaya' => $budaya],
            'message' => 'Budaya berhasil ditemukan'
        ];
        return response()->json($response, 200);
    }

    public function kategori()
    {
        $kategori = Kategori::take(3)->get();
        $tag = Tag::all();
        $artikel = Artikel::all();

        $response = [
            'Success' => true,
            'data' => ['artikel' => $artikel, 'tag' => $tag, 'kategori' => $kategori],
            'message' => 'Kategori berhasil ditemukan'
        ];
        return response()->json($response, 200);
    }

    public function tag()
    {
        $tag = Tag::take(3)->get();
        $kategori = Kategori::all();
        $artikel = Artikel::all();

        $response = [
            'Success' => true,
            'data' => ['artikel' => $artikel, 'tag' => $tag, 'kategori' => $kategori],
            'message' => 'Tag berhasil ditemukan'
        ];
        return response()->json($response, 200);
    }
}
