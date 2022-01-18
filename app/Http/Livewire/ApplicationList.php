<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Application;

class ApplicationList extends Component
{
    public $salary;

    public function mount()
    {
        $this->salary = request()->query('salary', $this->salary);
    }

    public function render()
    {
        // dd($this->salary);
        // if($this->salary === null){
        //     $items = Application::with('Job')->latest()->paginate();
        // }
        // else{
        //     $items = Application::with('Job')
        //             ->where('salary', '<=', $this->salary)
        //             ->where('status', '!=', 'rejected')
        //             ->latest()
        //             ->paginate();
        // }

        return view('livewire.application-list', [
            'items' => $this->salary === null ?
            Application::with('Job')->latest()->paginate() :
            Application::with('Job')
                    ->where('salary', '<=', $this->salary)
                    ->where('status', '!=', 'rejected')
                    ->latest()
                    ->paginate()
        ]);
    }
}
