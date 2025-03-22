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

