<?php

namespace App\Http\Livewire\Auth;

use App\Http\Livewire\BaseComp;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Session;
use Livewire\Component;


class Register extends Component
{
    public $name = "";
    public $email = "";
    public $password = "";
    public $password_confirmation = "";

    public $notification = [];

    public function updatedName()
    {
        $this->validate([
            'name' => 'min:5|required'
        ]);
    }

    public function updatedEmail()
    {
        $this->validate([
            'email' => 'email|required'
        ]);
    }

    public function updatedPassword()
    {
        $this->validate([
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
        ]);
    }

    public function updatedPasswordConfirmation()
    {
        $this->validate([
            'password_confirmation' => 'min:6'
        ]);
    }

    public function register()
    {
        // $data = $this->validate([
        //     'name' => 'min:5|required',
        //     'email' => 'email|required',
        //     'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
        //     'password_confirmation' => 'min:6'
        // ]);

        // try {
        //     User::firstOrCreate([
        //         'name' => $data['name'],
        //         'email' => $data['email'],
        //         'password' => $data['password']
        //     ]);

            $this->dispatchBrowserEvent('notify');
        
        // } catch (\Exception $ex) {
        //     $this->emitSelf('notify');
        //     $this->message = "An error occured during save!";
        // }
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
