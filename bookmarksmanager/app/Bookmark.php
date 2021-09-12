<?php

namespace BookmarksManager;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $fillable = ['user_id', 'name', 'url', 'type'];

    public function saveBookmark($data)
    {
        $this->user_id = auth()->user()->id;
        $this->name = $data['name'];
        $this->url = $data['url'];
        $this->type = $data['type'];
        $this->save();
        return 1;
    }
    public function updateBookmark($data)
    {
        $bookmark = $this->find($data['id']);
        $bookmark->user_id = auth()->user()->id;
        $bookmark->name = $data['name'];
        $bookmark->url = $data['url'];
        $bookmark->type = $data['type'];
        $bookmark->save();
        return 1;
    }
}
