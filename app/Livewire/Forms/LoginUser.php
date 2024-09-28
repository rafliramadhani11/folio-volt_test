<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginUser extends Form
{
    #[Validate('required|email|unique:users')]
    public $email = '';

    #[Validate('required|min:5')]
    public $password = '';
}
