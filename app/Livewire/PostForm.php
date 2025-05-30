<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithPagination;

class PostForm extends Component
{
    use WithPagination;

    public $title;
    public $body;

   

    public function save()
    {
        $this->validate([
            'title' => 'required|string|min:3',
            'body' => 'required|string|min:5',
        ], [
            'title.required' => 'Title is required!',
            'body.min' => 'Body must be at least 5 characters.',
        ]);

        Post::create([
            'title' => $this->title,
            'body' => $this->body,
        ]);
        $this->reset(['title', 'body']);
        session()->flash('message', 'Post added successfully!');
    }

    public function render()
    {
        $posts = Post::latest()->paginate(2);
        return view('livewire.post-form', compact('posts'));
    }
}
