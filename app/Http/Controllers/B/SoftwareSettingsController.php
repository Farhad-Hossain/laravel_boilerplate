<?php

namespace App\Http\Controllers\B;

use App\Http\Controllers\Controller;
use App\Models\SoftwareSetting;
use Illuminate\Http\Request;

class SoftwareSettingsController extends Controller
{
    public function index(Request $request)
    {
        $title = 'Software Settings';
        $settings = SoftwareSetting::where('id','>',0)->first();

        if ( $request->isMethod('POST') ) {
            if ( !$settings ) {
                $settings = new SoftwareSetting();
            }
            $attrs = $request->all();
            unset($attrs['_token']);
            $settings->fill($attrs);
            $settings->save();
        }

        return $this->view('pages/settings/index', compact('title','settings'));
    }
}
