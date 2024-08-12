@props(['job'])
<x-panel class=" flex flex-col text-center">
        <div class="text-sm self-start">
          {{$job->employer->name}}
        </div>
        <div class=" py-8">
           <h3 class="font-bold group-hover:text-blue-600 text-xl transition-colors duration-300">
           <a target="_blank" href="{{$job->url}}">{{$job->title}}</a>
           </h3>
            <p class="text-sm mt-4">{{$job->schedule}}-From {{$job->salary}}</p>
        </div>
        <div class="flex items-center justify-between mt-auto">
           <div class="space-x-1">
           @foreach($job->tags as $tag)
           <x-tag size='small' :$tag/>
           @endforeach
           
           
           </div>
           <x-employer-logo :employer="$job->employer"  :width="42"/>
        </div>
       
</x-panel>