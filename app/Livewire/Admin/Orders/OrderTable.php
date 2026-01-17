<?php

namespace App\Livewire\Admin\Orders;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Order;

class OrderTable extends Component
{
    use WithPagination;

    public $search = '';
    public $filterStatus = '';
    public $sortBy = 'created_at';
    public $sortDirection = 'desc';

    protected $queryString = [
        'search' => ['except' => ''],
        'filterStatus' => ['except' => ''],
        'sortBy' => ['except' => 'created_at'],
        'sortDirection' => ['except' => 'desc'],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function sortByColumn($column)
    {
        if ($this->sortBy === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $column;
            $this->sortDirection = 'desc';
        }
    }

    public function resetFilters()
    {
        $this->reset(['search', 'filterStatus']);
        $this->resetPage();
    }

    public function render()
    {
        $orders = Order::query()
            ->with(['user', 'orderDetails.product'])
            ->when($this->search, function ($query) {
                $query->where('id', 'like', '%' . $this->search . '%')
                    ->orWhereHas('user', function ($q) {
                        $q->where('name', 'like', '%' . $this->search . '%');
                    });
            })
            ->when($this->filterStatus, function ($query) {
                $query->where('status', $this->filterStatus);
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        return view('livewire.admin.orders.order-table', [
            'orders' => $orders,
        ]);
    }
}