<?php

namespace App\View\Components\User\Form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextInput extends Component
{
    public $type;
    public $name;
    public $label;
    public $placeholder;
    public function __construct( $name, $label, $placeholder="",$type="text")
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user.form.text-input');
    }
}
