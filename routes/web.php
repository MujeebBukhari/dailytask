<?php
use App\Http\Controllers\JobController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserRegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;


Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::controller(JobController::class)->group( function(){

    Route::get('/jobs',  'index');
    Route::get('jobs/create',  'create');
    Route::get('/jobs/{job}',  'show')->middleware(['auth']);
    Route::post('/jobs/create',  'store');
    Route::get('jobs/{job}/edit',  'edit')
    ->middleware(['auth'])->can('edit', 'job');
    Route::patch('jobs/{job}',  'update');
    Route::delete('jobs/{job}',  'destroy');
});
Route::controller(UserRegisterController::class)->group( function(){

    Route::get('/register', 'create');
    Route::post('/register', 'store')->name('register.store');
   
});

Route::controller(SessionController::class)->group( function(){

    Route::get('/login', 'login')->name('login');
    Route::post('/login','store');
    Route::post('/logout', 'logout')->name('logout');
   
});




// Route::get('/jobs/{job}', function (Job $job) {

//     $a = 6;
//     $b = 8; 
//     $a = $a + $b; //14
    
//     $b = $a -$b; // 6

//     $a = $a - $b; //8 

//     //  Salary::where('order_by', 'desc')->take(3);


//     //  User::with('posts')->whereCount('comments' > 50 )->get();
   
//         // Illuminate\Support\Arr::first($jobs, function($job) use ($id) {
//         //     return $job['id'] = $id;
//         //     });



//     return view('jobs.show', ['job' => $job]);
// });

// Route::get('jobs/{id}/edit', function($id){
//     $job = Job::find($id);
//     return view('jobs.edit', ['job' => $job]);
// });

// Route::patch('jobs/{id}', function($id){
    
   
// });

// Route::delete('jobs/{id}', function($id){
//     $job = Job::findOrFail($id);
//     $job->delete();
//     return redirect('/jobs');

// });






// Route::get('/jobs', function () {

//     $jobs = Job::with('employer')->latest()->paginate(3);
    
//     return view('jobs.index',
//       [ 'jobs' => $jobs ]);
// });
