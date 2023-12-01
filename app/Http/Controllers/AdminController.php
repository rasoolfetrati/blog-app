<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminController extends Controller
{
    public function Start()
    {
        return view('AdminArea.Admin');
    }
    public function Index()
    {
        $posts = Post::with('user')->get();
        return view('AdminArea.Admin-Index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('AdminArea.Admin-Create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Title' => ['required'],
            'Description' => ['required'],
            'Image' => ['required', 'image'],
            'Text' => ['required'],
            'category_id' => ['required'],
        ]);

        $post = new Post();
        $post->Title = $request->Title;
        $post->Description = $request->Description;
        $post->Text = $request->Text;
        $post->IsEmergency = boolval($request->IsEmergency);
        $post->category_id = $request->category_id;
        $post->user_id = Auth::id();

        $fileName = time() . '_' . $request->Image->getClientOriginalName();
        $filePath = $request->Image->storeAs('uploads', $fileName);
        $post->Image = 'storage/' . $filePath;
        $post->save();

        return redirect()->route('IndexPost');
    }

    public function edit(int $id)
    {
        $post = Post::findOrfail($id);
        $categories = Category::all();
        return view('AdminArea.Admin-Edit', compact('categories', 'post'));
    }

    public function update(Request $request)
    {
        // dd($request);
        $request->validate([
            'Title' => ['required'],
            'Description' => ['required'],
            'Text' => ['required'],
            'category_id' => ['required'],
        ]);
        $post = Post::findOrfail($request->id);

        if ($request->hasFile('Image')) {
            $request->validate([
                'Image' => ['required', 'image'],
            ]);
            $fileName = time() . "_" . $request->Image->getClientOriginalName();
            $filePath = $request->Image->storeAs('uploads', $fileName);
            File::delete(public_path($post->Image));
            $post->Image = 'storage/' . $filePath;
        }
        $post->Title = $request->Title;
        $post->Description = $request->Description;
        $post->Text = $request->Text;
        $post->IsEmergency = boolval($request->IsEmergency);
        $post->category_id = $request->category_id;
        $post->user_id = Auth::id();



        $post->save();

        return redirect()->route('IndexPost');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $post = Post::findOrfail($id);

        $post->delete();

        return redirect()->back();
    }

    public function RegisterPage()
    {
        return view('AdminArea.register');
    }

    public function LoginPage()
    {
        return view('AdminArea.login');
    }


    public function store_comment(Request $request)
    {
        $request->validate([
            'message' => 'required'
        ]);

        $comment = new Comment();
        $comment->Text = $request->message;
        $comment->IsConfirm = false;
        $comment->post_id = $request->post_id;
        $comment->user_id = Auth::id();
        $comment->save();

        return redirect()->route('Posts.show', $request->post_id);
    }

    public function show_comments()
    {
        $comments = Comment::with(['post','user'])->where('IsConfirm', false)->get();
        return view('AdminArea.Admin-comments', compact('comments'));
    }

    public function update_comments($id)
    {
        $comment = Comment::findOrfail($id);
        $comment->IsConfirm = true;
        $comment->save();
        return redirect()->route('show_comments');
    }

    public function delete_comments($id)
    {
        $comment = Comment::findOrfail($id);
        $comment->delete();
        return redirect()->route('show_comments');
    }
}
