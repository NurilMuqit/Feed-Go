<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Dropdown extends Component
{
    public bool $open = false;

    public string $label = 'Use';
    public array $items = [];
    public string $align = 'right';
    public string $buttonClass = '';
    public string $menuClass = '';
    public string $itemClass = '';
    public string $svgClass = '';
    public bool $showGreeting = false;

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
