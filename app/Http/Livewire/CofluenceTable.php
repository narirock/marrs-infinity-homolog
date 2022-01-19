<?php

namespace App\Http\Livewire;

use App\Models\SentCofluence;
use Livewire\Component;

class CofluenceTable extends Component
{
    public $cofluences;
    public function mount()
    {
        $this->cofluences = SentCofluence::orderby('created_at', 'desc')->limit(10)->get();
    }
    public function render()
    {
        return view('livewire.cofluence-table');
    }
}
