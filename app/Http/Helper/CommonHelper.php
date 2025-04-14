<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

if (!function_exists('ErrorMessage')) {
    function ErrorMessage($errors)
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

if (!function_exists('SuccessErrorMessage')) {
    function SuccessErrorMessage()
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

if (!function_exists('UploadImage')) {
    function UploadImage($request = null, $name_attr = null, $id = null, $image_url = null, $image_path = null)
    {
        if ($request->hasFile($name_attr)) {
            $image = $request->file($name_attr);
            $name = Str::uuid() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('image/' . $image_path);

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            try {
                $image->move($destinationPath, $name);
                return 'image/' . $image_path . '/' . $name;
            } catch (\Exception $e) {
                Log::error('Image Upload Error: ' . $e->getMessage());
                return null;
            }
        }

        return null;
    }
}

if (!function_exists('Status')) {
    function Status($value, $route)
    {
        if($value == 1){
            return '<a href="' . $route . '" class="btn btn-gradient-success waves-effect waves-light">Active</a>' ;
        }elseif($value == 0){
            return '<a href="' . $route . '" class="btn btn-gradient-danger waves-effect waves-light">Inactive</a>' ;
        }
    }
}

if (!function_exists('UpdateStatus')) {
    function UpdateStatus($data)
    {
        if($data->status == 1){
            $data->status = 0;
        }else{
            $data->status = 1;
        }

        if($data->update()){
            return redirect()->back()->with('success', 'Status successfully update.');
        }else{
            return redirect()->back()->with('error', 'Status not update.');
        }
    }
}

if (!function_exists('DeleteImage')) {
    function DeleteImage($path)
    {
        if($path && file_exists(public_path($path))){ 
            unlink(public_path($path));
        }
    }
}

