<?php

namespace App\Livewire\Admin\Articles;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Blog;

class ArticleTable extends Component
{   
    use WithPagination;

    protected $paginationTheme = 'tailwind';

    protected $listeners = [
        'article-added' => '$refresh',
        'article-updated' => '$refresh',
        'article-deleted' => '$refresh',
    ];

    public function getArticlesProperty()
    {
        return Blog::with('category')
        
            ->paginate(5);
    }

    public function updateStatus($articleId, $status)
    {
    if (! in_array($status, ['draft', 'published'])) {
        return;
    }

    Blog::where('id', $articleId)->update([
        'status' => $status,
    ]);

    $this->dispatch('article-updated');
    }

    public function render()
    {
        return view('livewire.admin.articles.article-table');
    }
}
