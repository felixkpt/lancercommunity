<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

use App\Http\Controllers\MyTestController;
use App\Models\Post;
use Glhd\Gretel\Routing\ResourceBreadcrumbs;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

require __DIR__.'/auth.php';
require __DIR__.'/web-home.php';
require __DIR__.'/web-posts.php';
require __DIR__.'/web-pages.php';
require __DIR__.'/web-authors.php';
require __DIR__.'/web-google-auth.php';
require __DIR__.'/web-contact.php';
require __DIR__.'/web-reviews.php';

require __DIR__.'/web-admin.php';


//Fallback/Catchall Route
Route::fallback(function () {
    $title = 'Oops! Nothing was found';
    return view('errors.404', compact('title'));
});
