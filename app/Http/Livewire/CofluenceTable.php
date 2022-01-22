<?php

namespace App\Http\Livewire;

use App\Models\Configuration;
use App\Models\SentCofluence;
use Livewire\Component;

class CofluenceTable extends Component
{
    public $cofluences;

    protected $listeners = ['reloadCofluences' => 'reloadCofluences'];

    public function mount()
    {
        $this->reloadCofluences();
    }

    public function render()
    {
        return view('livewire.cofluence-table');
    }

    public function reloadCofluences()
    {
        $strategy_id = Configuration::where('var', 'strategy')->first()->value;
        $this->cofluences = SentCofluence::where('strategy_id', $strategy_id)->orderby('created_at', 'desc')->limit(10)->get();
    }
}
