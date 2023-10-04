<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Section;
use Illuminate\Support\Facades\Auth;

class UserSections extends Component
{
    public function render()
    {
        $sections = Section::where('user_id', Auth::id())->orderBy('order')->get();
        return view('livewire.user-sections', ['sections' => $sections])
            ->layout('layouts.app');
    }

}

