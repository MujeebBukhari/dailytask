<h1>{{$job->title}}</h1>

<p>
    Congrats! Your job has been created!!!!
</p>
<a href="{{ url('/jobs/' . $job->id )}}">View Your Job Listing</a>