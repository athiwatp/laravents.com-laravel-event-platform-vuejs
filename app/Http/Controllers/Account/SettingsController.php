<?php

namespace App\Http\Controllers\Account;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingsController extends Controller
{
    public function getSettings()
    {
        return view('account.settings.index');
    }
}
