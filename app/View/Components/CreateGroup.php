<?php

namespace App\View\Components;

use App\Traits\HasAssign;
use Illuminate\View\Component;

class CreateGroup extends Component
{
    use HasAssign;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $group = $this->GetGroupActive();
        $public = $this->getFirstPublic();
        return view('components.create-group',compact("group","public"));
    }
}
