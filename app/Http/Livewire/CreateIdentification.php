<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CreateIdentification extends Component
{
	public $date;

	public function mount()
	{
		$this->date = now()->format('Y-m-d');
	}

    public function render()
    {
        return view('livewire.create-identification');
    }
}
