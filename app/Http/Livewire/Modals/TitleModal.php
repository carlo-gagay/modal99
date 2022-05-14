<?php

namespace App\Http\Livewire\Modals;

use App\Models\TempTitle;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class TitleModal extends Component
{
    public $show = false;
    public $listener = [
        'showTitleModal' => 'showModal',
        'notify' => 'closeModal'
    ];

    public $title = '';
    public $description = '';

    protected $rules = [
        'title' => 'required|min:6',
        'description' => 'required|min:6'
    ];

    public function closeModal()
    {
        $this->show = false;
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();

        try{
            TempTitle::create([
                'title' => $this->title,
                'description' => $this->description
            ]);
    
            $this->dispatchBrowserEvent('notify', [
                'type' => 'success',
                'message' => 'New title has been saved successfully!'
            ]);
        }catch(\Exception $ex) {
            $this->dispatchBrowserEvent('notify', [
                'type' => 'error',
                'message' => $ex->getMessage()
            ]);
        }
    }

    public function showModal()
    {
        $this->show = true;
    }

    public function render()
    {
        return view('livewire.modals.title-modal');
    }
}
