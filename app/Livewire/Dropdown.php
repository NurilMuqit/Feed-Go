<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Dropdown extends Component
{
    public $open = false;

    public $label = 'Use';
    public $items = [];
    public $align = 'right';
    public $buttonClass = '';
    public $menuClass = '';
    public $itemClass = '';
    public $svgClass = '';
    public $showGreeting = false;

    public function toggle()
    {
        $this->open = ! $this->open;
    }

    public function close()
    {
        $this->open = false;
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('beranda');
    }

    public function render()
    {
        return view('livewire.dropdown');
    }
}
