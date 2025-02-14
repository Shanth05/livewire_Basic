<?php

namespace App\Livewire\Student;

use App\Models\Student;
use Livewire\Component;

class CreateStudent extends Component
{
    public $firstName = '';
    public $lastName = '';
    public $fullName = '';

    public function save()
    {
        $this->fullName = $this->firstName . ' ' . $this->lastName;

        $student = new Student(); 
        $student->first_name = $this->firstName; 
        $student->last_name = $this->lastName;   
        $student->full_name = $this->fullName;
        $student->save();
        
        $this->reset(['firstName', 'lastName', 'fullName']);
    }

    public function render()
    {
        return view('livewire.student.create-student');
    }
}
