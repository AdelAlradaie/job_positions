@props(['job'])
<x-panel class=" flex gap-x-6  ">
    <div>
    <x-employer-logo :employer="$job->employer" />
    </div>
    <div class="flex flex-1 flex-col  ">
        <a class="text-gray-400 self-start  text-sm"> {{$job->employer->name}}</a>
        <h3 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-300">
          <a target="_blank" href="{{$job->url}}">
          {{$job->title}}
          </a>
        </h3>
        <p class="text-sm mt-auto text-gray-400">{{$job->schedule}}-From {{$job->salary}}</p>


    </div>
   
        <div>
        @foreach($job->tags as $tag)
           <x-tag size='small' :$tag/>
           @endforeach
        </div>
 
       
 

</x-panel>
