<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Initials extends Component
{
    public string $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $acronym = "";
        $words = preg_split("/\s+/", $this->name);
        foreach ($words as $w) {
            $acronym .= mb_substr($w, 0, 1);
        }

        return view('components.initials')->withInitial($acronym);
    }
}
