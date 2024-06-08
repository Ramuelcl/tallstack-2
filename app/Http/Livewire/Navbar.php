<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $menus = [
        'Dashboard' => 'pages.index',
        'Welcome' => 'pages.welcome',
        'Users' => 'users.usersIndex',
        'Roles' => 'users.rolesIndex',
        'Permissions' => 'users.permissionsIndex',
        'About' => 'pages.about',
        'Contact' => 'pages.contact',
        'Master' => 'pages.master',
    ];

    public function render()
    {
        // dd($this->menus);
        return view('livewire.navbar', ['menus' => $this->menus]);
    }
}
