<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $menus = [
        'Dashboard' => 'pages.dashboard',
        'Welcome' => 'pages.welcome',
        'Users' => 'dashboard.users',
        // 'Roles' => 'dashboard.rolesIndex',
        // 'Permissions' => 'dashboard.permissionsIndex',
        // 'About' => 'pages.about',
        // 'Contact' => 'pages.contact',
        // 'Master' => 'pages.master',
    ];

    public function render()
    {
        // dd($this->menus);
        return view('livewire.navbar', ['menus' => $this->menus]);
    }
}
