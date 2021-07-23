<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CmsController extends Controller
{
    public function makeInclude() {
        for ($i = 101; $i <= 233; $i++) {
            $path = '../resources/views/content/index/' . 'index_editor' . $i . '.blade.php';
            File::put($path, 'test content');
        }
        dd('end');
    }
}
