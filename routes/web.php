<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CausesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
})->name('home');

Route::get('/causes', [CausesController::class, 'index'])->name('causes');
Route::get('/projects/health', [ProjectController::class, 'health'])->name('projects.health');
Route::get('/projects/education', [ProjectController::class, 'education'])->name('projects.education');
Route::get('/projects/evangelism', [ProjectController::class, 'evangelism'])->name('projects.evangelism');
Route::get('/projects/leadership', [ProjectController::class, 'leadership'])->name('projects.leadership');
Route::get('/causes/{cause}', [CausesController::class, 'show'])->name('causes.show');
Route::resource('/donation', DonationController::class)->only(['index', 'store', 'show']);
Route::get('about-us', [AboutController::class, 'index'])->name('aboutus');
Route::resource('contact-us', ContactController::class)->only(['index', 'store']);

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('newsletter', function () {
    request()->validate(['email' => 'required|email']);

    $mailchimp = new \MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us18'
    ]);

    try {
        $response = $mailchimp->lists->addListMember('8d7f60f522', [
            'email_address' => request('email'),
            'status' => 'subscribed'
        ]);
    } catch (\Exception $e) {
        throw \Illuminate\Validation\ValidationException::withMessages([
            'email' => 'This email could not be added to our newsletter list!. Try using another Active Email'
        ]);
    }
    return redirect('/')->with('success', 'You are now signed up for our newletter!');
});

require __DIR__ . '/auth.php';
