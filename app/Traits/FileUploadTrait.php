<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

trait FileUploadTrait
{
    public function handleUploadFile(Request $request, string $inputName, ?string $oldPath = null, string $path = '/uploads'): ?string
    {
        if ($request->hasFile($inputName)) {

            $image = $request->{$inputName};
            $imageExt = $image->getClientOriginalExtension();
            $imageName = time() . uniqid() . '.' . $imageExt;

            $image->move(public_path($path), $imageName);

            /* delete previous image from storage */
            $exculudedPath = '/default';

            if ($oldPath && File::exists(public_path($oldPath)) && strpos($oldPath, $exculudedPath) !== 0) {
                File::delete(public_path($oldPath));
            }

            return $path . '/' . $imageName;

        }

        return null;
    }
}