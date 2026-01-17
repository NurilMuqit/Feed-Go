<?php

namespace App\Livewire\Admin\Articles;

use Livewire\Component;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\User;
use Livewire\WithFileUploads;

class EditArticle extends Component
{   
    use WithFileUploads;

    public $open = false;
    public $articleId;

    public $user_id;
    public $title;
    public $content;
    public $thumbnail;
    public $status;
    public $category_id;
    public $old_thumbnail;

    protected $listeners = [
        'open-edit-article' => 'open',
        'trix-updated' => 'updateContent',
    ];

    public function updateContent($value)
    {
    $this->content = $value;
    }
    
    protected function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'thumbnail' => 'nullable|image|max:512',
            'status' => 'required|in:draft,published',
            'category_id' => 'required|exists:blog_categories,id',
        ];
    }

    public function open($id)
    {      
        $article = Blog::findOrFail($id);

        $this->articleId = $article->id;
        $this->user_id = $article->user_id;
        $this->title = $article->title;
        $this->content = $article->content;
        $this->status = $article->status;
        $this->category_id = $article->category_id;
        $this->old_thumbnail = $article->thumbnail;
    
        $this->open = true;
        $this->dispatch('trix-load', content: $this->content);
    }

    public function save()
    {
        $this->validate();

        $thumbnailPath = $this->old_thumbnail;

        if ($this->thumbnail) {
            if ($this->old_thumbnail && \Storage::disk('public')->exists($this->old_thumbnail)) {
                \Storage::disk('public')->delete($this->old_thumbnail);
            }
            $thumbnailPath = $this->thumbnail->store('articles', 'public');
        }

        $article = Blog::findOrFail($this->articleId);
        $article->update([
            'user_id' => $this->user_id,
            'title' => $this->title,
            'content' => $this->content,
            'thumbnail' => $thumbnailPath,
            'status' => $this->status,
            'category_id' => $this->category_id,
        ]);

        $this->dispatch('article-updated');
        $this->close();
    }

    public function close()
    {
        $this->reset();
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.admin.articles.edit-article',[
            'categories' => BlogCategory::all(),
            'users' => User::all(),
        ]);
    }
}
