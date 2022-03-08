<?php

namespace ManFai\Cms\Http\View\Components;
use Illuminate\View\Component;

class Header extends Component
{
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
        return view('cms::components.header');
        // return view('cms::components.header',['user'=>auth()->user()]);
    }
}
