<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Komik;
use Illuminate\Support\Facades\Auth;

class BookmarkComponent extends Component
{
    public $komik;

    public function toggleBookmark()
    {
        $user = Auth::user();

        // if ($user) {
        //     if ($user->bookmarks->contains($this->komik)) {
        //         $user->bookmarks()->detach($this->komik);
        //     } else {
        //         $user->bookmarks()->attach($this->komik);
        //     }
        // }
    }

    public function render()
    {
        return view('livewire.bookmark-component');
    }
}
