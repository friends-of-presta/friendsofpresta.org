<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\App;

class FacebookChat extends Component
{
    /**
     * The app id
     *
     * @var string
     */
    public $appid;

    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct()
    {
        $this->appid = config('services.facebook.appid');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        if ($this->appid) {
            return view('components.facebook.chat');
        }

        return '';
    }
}