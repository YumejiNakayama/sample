<?php

namespace App\http\composers;

use illuminate\view\View;

class hellocomposer
{
    public function compose(View $view)
    {
        $view->with('view_message', 'this view is "'
            . $view->getName() . '"!!');
    }
}
