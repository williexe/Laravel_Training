<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public string $message;
    /**
     * Create a new component instance.
     */
    public function __construct($message)
    {
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}

// class Person 
// {
//     public string $name ;
//     public string $height ;

//     public function __construct($name,$height) 
//     {
//         $this->name = $name ;
//         $this->height = $height ;
//     }

    
// }

// $person1 = new Person('Willie','208');
// $person2 = new Person('Batsirai','155');
// $person3 = new Person('Maanda','194');

// $person1->height ;
// $person2->name ;
// $person3->name ;
