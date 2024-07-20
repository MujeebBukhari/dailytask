<?php
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;


Route::view('/', 'home');
Route::view('/contact', 'contact');

Route::controller(JobController::class)->group( function(){

    Route::get('/jobs',  'index');
    Route::get('jobs/create',  'create');
    Route::get('/jobs/{job}',  'show');
    Route::post('/jobs/create',  'store');
    Route::get('jobs/{job}/edit',  'edit');
    Route::patch('jobs/{job}',  'update');
    Route::delete('jobs/{job}',  'destroy');
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
