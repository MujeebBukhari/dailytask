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

// Route::get('/contact', function () {
//     return view('contact');
// });
Route::view('/contact', 'contact');
Route::get('/jobs/create', function(){

   return view("jobs.create");
});
Route::post('jobs/create', function(){

    request()->validate(
        [
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1, 
    ]);
    return redirect('jobs');
});

Route::get('/jobs/{job}', function (Job $job) {

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



    return view('jobs.show', ['job' => $job]);
});

Route::get('jobs/{id}/edit', function($id){
    $job = Job::find($id);
    return view('jobs.edit', ['job' => $job]);
});

Route::patch('jobs/{id}', function($id){
    
    request()->validate(
        [
            'title' => ['required', 'min:3'],
            'salary' => ['required'],
        ]);

        $job = Job::findOrFail($id);
      
        // $job->title = request('title');
        // $job->salary = request('salary');
        // $job->save();

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
        ]);

        return redirect('jobs/' .  $job->id);
});

Route::delete('jobs/{id}', function($id){
    $job = Job::findOrFail($id);
    $job->delete();
    return redirect('/jobs');

});






Route::get('/jobs', function () {

    $jobs = Job::with('employer')->latest()->paginate(3);
    
    return view('jobs.index',
      [ 'jobs' => $jobs ]);
});
