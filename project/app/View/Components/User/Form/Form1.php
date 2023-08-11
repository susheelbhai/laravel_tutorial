<?php

namespace App\View\Components\User\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Form1 extends Component
{
    public $action;
    public $method;
    public function __construct($action, $method='post')
    {
        $this->action= $action;
        $this->method= $method;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user.form.form1');
    }
}
