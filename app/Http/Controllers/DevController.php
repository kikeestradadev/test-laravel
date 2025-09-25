<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;

class DevController extends Controller
{
    public function checkChanges()
    {
        // Only work in development
        if (!app()->environment('local')) {
            return response()->json(['hasChanges' => false]);
        }

        $viewsPath = resource_path('views');
        $cacheKey = 'last_file_check';

        // Get last check time
        $lastCheck = Cache::get($cacheKey, 0);

        // Get all view files
        $viewFiles = collect(File::allFiles($viewsPath))
            ->filter(function ($file) {
                return in_array($file->getExtension(), ['php', 'blade.php']);
            });

        // Check if any file was modified after last check
        $hasChanges = $viewFiles->contains(function ($file) use ($lastCheck) {
            return $file->getMTime() > $lastCheck;
        });

        // Update last check time
        Cache::put($cacheKey, time(), 60); // Cache for 1 minute

        return response()->json(['hasChanges' => $hasChanges]);
    }
}
