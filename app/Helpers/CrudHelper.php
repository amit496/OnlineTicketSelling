<?php

if (!function_exists('UploadImage')) {
    function uploadImage($request = null, $name_attr = null, $image_path = null)
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

if (!function_exists('status')) {
    function status($value, $route)
    {
        if($value == 1){
            return '<a href="' . $route . '" class="btn btn-sm btn-gradient-success waves-effect waves-light"><em class="fas fa-check-circle"></em></a>';
        }elseif($value == 0){
            return '<a href="' . $route . '" class="btn btn-sm btn-gradient-danger waves-effect waves-light"><em class="fas fas fa-times-circle"></em></a>' ;
        }
    }
}

if (!function_exists('updateStatus')) {
    function updateStatus($data)
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

if (!function_exists('deleteImage')) {
    function deleteImage($path)
    {
        if($path && file_exists(public_path($path))){
            unlink(public_path($path));
        }
    }
}

