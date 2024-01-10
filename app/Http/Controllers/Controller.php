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
            $data['title'] = array_key_exists('title', $data) ? $data['title'] : '';

            $subView = view($subView, $data)->render();

            if ( $this->ajax ) {
                return [
                    'title'=> $data['title'],
                    'html'=> $subView
                ];

            } else {
                return view($this->defaultView, [
                    'subView' => $subView,
                    'title'=> $data['title'],
                ]);

            }

        } catch (\Exception $e) {
            return [
                'html' => $e->getMessage(),
            ];

        }
        
    }
}
