<?php

namespace App\View\Components;

use App\Traits\HasAssign;
use Illuminate\View\Component;

class EditGroup extends Component
{
    use HasAssign;
    public $modul;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($modul)
    {
        $this->modul = $modul;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $group = $this->GetGroupActive();
        $data = $this->getGroupModul($this->modul);
        return view('components.edit-group',compact("group","data"));
    }
}
