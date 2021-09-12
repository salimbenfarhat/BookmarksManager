<?php

namespace BookmarksManager\Http\Controllers;

use BookmarksManager\Bookmark;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{   
    public function home()
    {
       return view('bookmark.home');
    }
    public function index()
    {
        $bookmarks = Bookmark::where('user_id', auth()->user()->id)->get();
        return view('bookmark.index',compact('bookmarks'));
    }
    public function add()
    {
       return view('bookmark.add');
    }
    public function store(Request $request)
    {
        $bookmark = new Bookmark();
        $data = $this->validate($request, [
            'name'=>'required',
            'url'=> 'required',
            'type'=> 'required'
        ]);
        $bookmark->saveBookmark($data);
        return redirect('/home')->with('success', 'Le site a bien été ajouté dans les Favoris !');
    }
    public function edit($id)
    {
        $bookmark = Bookmark::where('user_id', auth()->user()->id)->where('id', $id)->first();
        return view('bookmark.edit', compact('bookmark', 'id'));
    }
    public function update(Request $request, $id)
    {
        $bookmark = new Bookmark();
        $data = $this->validate($request, [
            'name'=>'required',
            'url'=> 'required',
            'type'=> 'required'
        ]);
        $data['id'] = $id;
        $bookmark->updateBookmark($data);
        return redirect('/home')->with('success', 'Modification du Favoris effectuée avec succès !');
    }
    public function destroy($id)
    {
        $bookmark = Bookmark::find($id);
        $bookmark->delete();
        return redirect('/home')->with('success', 'Suppression du Favoris effectuée avec succès !');
    }
}
