<?php

namespace App\Livewire;
use Livewire\Component;
use App\Models\Section;

class Sections extends Component
{
    public $sections;

    public function mount()
    {
        // Load sections from the database
        $this->loadSections();
    }

    private function loadSections()
    {
        $this->sections = Section::orderBy('order')->get();
    }

    public function moveSection($sectionId, $direction)
    {
        $section = Section::find($sectionId);
        $swapSection = ($direction === 'up')
            ? Section::where('order', '<', $section->order)->orderBy('order', 'desc')->first()
            : Section::where('order', '>', $section->order)->orderBy('order', 'asc')->first();

        if (!$swapSection) {
            return;
        }

        // Swap the order values
        $tempOrder = $section->order;
        $section->order = $swapSection->order;
        $swapSection->order = $tempOrder;

        $section->save();
        $swapSection->save();

        // Reload sections to reflect changes in the component
        $this->loadSections();
    }

    public function updated()
    {
        logger('Component updated');
    }

    public function render()
    {
        return view('livewire.sections')
        ->layout('layouts.app');
    }
}
