
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Auth\LoginController;




// Route::get('/', function () {
//     return view('welcome');
// });


// Auth::routes();
// Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/login', [PortfolioController::class, 'loginPage'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/', [PortfolioController::class, 'index'])->name('index');

Route::post('/contact/store', [PortfolioController::class, 'contactStore'])->name('contact.store');
Route::post('/project-form/store', [PortfolioController::class, 'projectFormStore'])->name('project.form.store');

Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

    Route::get('/admin/dashboard', [BackendController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/contacts', [BackendController::class, 'contactList'])->name('admin.contacts');
    Route::get('/admin/contacts/{id}', [BackendController::class, 'contactShow'])->name('admin.contacts.show');
    Route::delete('/admin/contacts/delete/{id}', [BackendController::class, 'contactDestroy'])->name('admin.contacts.delete');

    Route::get('/admin/projects', [ProjectController::class, 'index'])->name('admin.projects.index');
    Route::get('/admin/projects/create', [ProjectController::class, 'create'])->name('admin.projects.create');
    Route::post('/admin/projects/store', [ProjectController::class, 'store'])->name('admin.projects.store');
    Route::get('/admin/projects/edit/{id}', [ProjectController::class, 'edit'])->name('admin.projects.edit');
    Route::put('/admin/projects/update/{id}', [ProjectController::class, 'update'])->name('admin.projects.update');
    Route::delete('/admin/projects/delete/{id}', [ProjectController::class, 'destroy'])->name('admin.projects.delete');

    Route::get('/admin/project-submissions', [BackendController::class, 'projectSubmissions'])->name('admin.project-submissions');
    Route::get('/admin/project-submissions/{id}', [BackendController::class, 'projectSubmissionShow'])->name('admin.project-submissions.show');
    Route::put('/admin/project-submissions/{id}/status', [BackendController::class, 'projectSubmissionStatus'])->name('admin.project-submissions.status');
    Route::delete('/admin/project-submissions/delete/{id}', [BackendController::class, 'projectSubmissionDestroy'])->name('admin.project-submissions.delete');

});

// Redirect all 404 errors to the home page
Route::fallback(function () {
    return redirect()->route('index');
});
