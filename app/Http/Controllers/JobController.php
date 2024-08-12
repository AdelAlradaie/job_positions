<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class JobController extends Controller
{
   
    public function index()
    {
        $jobs = Job::with(["employer",'tags'])->latest()->get();
        $featured = Job::with(["employer",'tags'])->where("featured",true)->latest()->get();
        $tags=Tag::with("jobs")->get();

        return view("jobs.index",[
            "featured"=>$featured,
            "jobs"=>$jobs,
            "tags"=>$tags
        ]);
    }

   
    public function create()
    {
        return view("jobs.create");
    }

    
    public function store(Request $request)
    {
        
        $attributes = $request->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required', Rule::in(['Part Time', 'Full Time'])],
            'url' => ['required', 'active_url'],
            'tags' => ['nullable'],
        ]);
        $attributes['featured'] = $request->has('featured');
        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

        if ($attributes['tags'] ?? false) {
            foreach (explode(',', $attributes['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/');
    }

    

    
    
}
