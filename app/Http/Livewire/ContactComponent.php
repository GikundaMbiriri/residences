<?php

namespace App\Http\Livewire;

use App\Mail\ContactMail;
use Mail;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $msg;
    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'phone' => 'required',
        'msg' => 'required',
    ];
    public function sendmail()
    {
        $this->validate();
        $details = [
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'msg' => $this->msg,

        ];
        Mail::to('petermbiriri8957@gmail.com')->send(new ContactMail($details));
        session()->flash('message', 'message sent successfully');
    }
    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.base');
    }
}
