<?php
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;


Route::get('/', [UserController::class, 'jobs']);
// Route::get('/', function () {
//     $jobs = Job::all();
   
//     return view('home');
// });

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/jobs/{id}', function ($id) {

    $a = 6;
    $b = 8; 
    $a = $a + $b; //14
    
    $b = $a -$b; // 6

    $a = $a - $b; //8 

    //  Salary::where('order_by', 'desc')->take(3);


    //  User::with('posts')->whereCount('comments' > 50 )->get();
   
        // Illuminate\Support\Arr::first($jobs, function($job) use ($id) {
        //     return $job['id'] = $id;
        //     });


        $job = Job::find($id);

    return view('job', ['job' => $job]);
});



Route::get('/jobs', function () {
    return view('jobs',
      [ 'jobs' => Job::all() ]);
});
