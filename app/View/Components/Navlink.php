<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navlink extends Component
{
    public $href;
    public $active;

    /**
     * Create a new component instance.
     *
     * @param string $href
     */
    public function __construct($href)
    {
        $this->href = $href;
        // Logika untuk menentukan apakah link ini aktif
        $this->active = request()->is(trim($href, '/')) || request()->is(trim($href, '/') . '/*');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.navlink');
    }
}
