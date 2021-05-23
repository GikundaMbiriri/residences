<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Carbon\Carbon;
use App\Models\Residence;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class UploadResidence extends Component
{
    use WithFileUploads;
    public $name;
    public $image;
    public $acc;
    public $details;
    public $price;
    public $loc;
    public $size;
    public $category_id;
    protected $rules = [
        'name' => 'required|min:6',

        'image' => 'required',
        'acc' => 'required',
        'details' => 'required',
        'price' => 'required',
        'loc' => 'required',
        'size' => 'required',
        'category_id' => 'required',

    ];
    public function res()
    {
        $this->validate();
        $residence = new Residence();
        $residence->name = $this->name;
        $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
        $this->image->storeAs('products', $imageName);
        $residence->image = $imageName;
        $residence->occ = $this->acc;
        $residence->details = $this->details;
        $residence->price = $this->price;
        $residence->location = $this->loc;
        $residence->size = $this->size;
        $residence->category_id = $this->category_id;
        $residence->user_id = Auth::user()->id;
        $residence->save();
        session()->flash('message', 'Category created successfully');
    }
    public function render()
    {

        $categories = Category::all();
        return view('livewire.upload-residence', ['cats' => $categories])->layout('layouts.base');
    }
}
