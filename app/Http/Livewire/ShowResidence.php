<?php

namespace App\Http\Livewire;

use App\Models\Residence;
use Livewire\Component;

class ShowResidence extends Component
{
    public $res_id;
    public function mount($id)
    {
        $this->res_id = $id;
    }
    public function render()
    {
        $residence = Residence::where('id', $this->res_id)->first();
        $related = Residence::where('category_id', $residence->category_id)->inRandomOrder()->limit(5)->get();
        return view('livewire.show-residence', ['res' => $residence, 'related' => $related])->layout('layouts.base');
    }
}
