<?php

namespace App\Traits;

use Illuminate\Http\Request;
use File;

trait FileUploadTrait
{
    function uploadImage(Request $request, string $inputName, ?string $oldPath = null, string $path = '/uploads'): ?string
    {
        $im = "";
        if ($request->hasFile($inputName)) {
            $image = $request->{$inputName};
            $ext = $image->getClientOriginalExtension();
            $imageName = 'media_' . uniqid() . '.' . $ext;
            $image->move(public_path($path), $imageName);
            $im = $imageName;
            // Delete provious image form storage

            $excludedFolder = '/default';
            if ($oldPath && File::exists(public_path($oldPath)) && strpos($oldPath, $excludedFolder) !== 0) {
                File::delete(public_path($oldPath));
            }
            return $path . '/' . $imageName;
        }
        return null;
    }
}
