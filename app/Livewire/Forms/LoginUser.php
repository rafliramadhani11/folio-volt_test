<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginUser extends Form
{
    #[Validate('required|email')]
    public $email = '';

    #[Validate('required')]
    public $password = '';
}
