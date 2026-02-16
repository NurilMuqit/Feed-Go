<?php

namespace App\Livewire\User;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Blog;
use App\Models\BlogCategory;

class NewArticle extends Component
{   
    use WithPagination;

    public $selectedCategory = null;
    public $perPage = 6;

    protected $queryString = ['selectedCategory'];

    public function selectCategory($categoryId)
    {
        $this->selectedCategory = $categoryId;
        $this->resetPage(); 
    }

    public function clearFilter()
    {
        $this->selectedCategory = null;
        $this->resetPage();
    }

    public function render()
    {
        $categories = BlogCategory::orderBy('category')->get();

        $articles = Blog::with(['category', 'user'])
            ->where('status', 'published')
            ->when($this->selectedCategory, function($query) {
                $query->where('category_id', $this->selectedCategory);
            })
            ->latest()
            ->paginate($this->perPage);

        return view('livewire.user.new-article', [
            'articles' => $articles,
            'categories' => $categories,
        ]);
    }
}
