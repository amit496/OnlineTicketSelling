<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

if (!function_exists('ErrorMessage')) {
    function errorMessage($errors)
    {
        if ($errors->any()) {
            $errorHTML = '<div class="alert alert-danger" style="margin-bottom: 0;">';
            $errorHTML .= '<ul style="margin: 0;padding: 0 10px;">';

            foreach ($errors->all() as $error) {
                $errorHTML .= '<li>' . e($error) . '</li>';
            }

            $errorHTML .= '</ul></div>';

            return $errorHTML;
        }

        return '';
    }
}

if (!function_exists('successErrorMessage')) {
    function successErrorMessage()
    {
        if(session('success')){
            return '<div class="alert alert-success" style="margin-bottom: 0;color:#034e2a">'
             .    session("success")  .
            '</div>' ;
        }elseif(session('error')){
            return '<div class="alert alert-danger" style="margin-bottom: 0;color:#871607">'
             .  session("error")  .
            '</div>' ;
        }
    }
}
