<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;


Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/jobs/{id}', function ($id) {

    $jobs = [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50000'
            ],
            [
                'id' => 2,
                'title' => 'Professor',
                'salary' => '$70000'
            ],
            [
                'id' => 3,
                'title' => 'Programmer',
                'salary' => '$510000'
            ],
            [
                'id' => 4,
                'title' => 'Teacher',
                'salary' => '$30000'
            ]

        ];
        // Illuminate\Support\Arr::first($jobs, function($job) use ($id) {
        //     return $job['id'] = $id;
        //     });


        $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});



Route::get('/jobs', function () {
    return view('jobs',  [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50000'
            ],
            [
                'id' => 2,
                'title' => 'Professor',
                'salary' => '$70000'
            ],
            [
                'id' => 3,
                'title' => 'Programmer',
                'salary' => '$510000'
            ],
            [
                'id' => 4,
                'title' => 'Teacher',
                'salary' => '$30000'
            ]

        ]

    ]);
});
