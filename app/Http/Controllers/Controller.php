<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    public $ajax = false;
    public $defaultView = 'base';

    public function __construct(Request $request)
    {
        if ( $request->ajax() ) {
            $this->ajax = true;
        }
    }

    public function view($subView, $data=[])
    {
        try {
            $subView = view($subView, $data);
            if ( $this->ajax ) {
                return $subView;
            } else {
                return view($this->defaultView, [
                    'subView' => $subView
                ]);
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
        
    }
}
