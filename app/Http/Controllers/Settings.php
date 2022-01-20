<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Valuestore\Valuestore;

class Settings extends Controller
{
    private $settings;
    function __construct()
    {
        $this->settings = Valuestore::make(storage_path('app/settings.json'));
        $this->settings->put('arr', [1,2,3]);
    }
    // Settings page
    public function page()
    {
        return view('settings.settings', [
            'settings' => $this->settings->all()
        ]);
    }
    // Update settings value
    public function update($key, $value)
    {
        if(!empty($key)){
            $this->settings->put($key, $value);
        }
    }
    // Get Settings value
    public function get($key)
    {
        return $this->settings->get($key, '');
    }
}
