<?php

namespace App\Livewire\Admin\Articles;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AddArticle extends Component
{   
    use WithFileUploads;

    public $open = false;
    public $user_id;
    public $title;
    public $content;
    public $thumbnail;
    public $status;
    public $category_id;

    public $categories;
    public $users;

    protected $listeners = [
        'open-add-article' => 'open',
        'close-article-modal' => 'close',
        'trix-updated' => 'setContent',
    ];

    public function setContent($content)
    {
        $this->content = $content;
    }

    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'thumbnail' => 'required|image|max:512',
        'status' => 'required|in:draft,published',
        'category_id' => 'required|exists:blog_categories,id',
    ];

    public function mount()
    {
        $this->refreshCategories();
        $this->refreshUsers();
    }

    public function refreshCategories()
    {
        $this->categories = BlogCategory::orderBy('category')->get();
    }

    public function refreshUsers()
    {
        $this->users = User::orderBy('name')->get();
    }

    public function save()
    {   
        $this->validate();
        $thumbnailPath = null;
        if ($this->thumbnail) {
            $thumbnailPath = $this->thumbnail->store('articles', 'public');
        }

        Blog::create([
            'user_id' => Auth::id(),
            'title' => $this->title,
            'content' => $this->content,
            'thumbnail' => $thumbnailPath,
            'status' => $this->status,
            'slug' => Str::slug($this->title),
            'category_id' => $this->category_id,
        ]);

        $this->dispatch('article-added');
        $this->close();
    } 

    public function open()
    {
        $this->dispatch('close-article-modal')->to('admin.articles.add-article-category');
        $this->open = true;
    }

    public function close()
    {
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.admin.articles.add-article');
    }
}
