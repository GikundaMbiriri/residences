<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Residence;
use Livewire\Component;
use Livewire\WithPagination;

class Homepage extends Component
{

    public $sorting;
    public $pageSize;
    public function mount()
    {
        $this->sorting = "date";
        $this->pageSize = 2;
    }
    use WithPagination;
    public function render()
    {
        if ($this->sorting == "date") {
            $residences = Residence::orderBy('created_at', 'DESC')->paginate($this->pageSize);
        } else if ($this->sorting == "price") {
            $residences = Residence::orderBy('price', 'ASC')->paginate($this->pageSize);
        } else if ($this->sorting == "price-desc") {
            $residences = Residence::orderBy('price', 'DESC')->paginate($this->pageSize);
        } else {
            $residences = Residence::paginate($this->pageSize);
        }
        $categories = Category::all();
        return view('livewire.homepage', ['res' => $residences, 'cats' => $categories])->layout('layouts.base');
    }
}
