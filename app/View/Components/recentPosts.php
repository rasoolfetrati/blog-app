<?php

namespace App\View\Components;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class recentPosts extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $navposts = Post::all()->take(6);
        return view('components.recent-posts',compact('navposts'));
    }
}
