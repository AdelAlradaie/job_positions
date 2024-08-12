
@php 
$classes = "p-2 bg-white/5 rounded-xl  border border-transparent  group  hover:border-blue-800 transition-colors duration-300"
@endphp

<div {{$attributes->merge([ "class"=>$classes])}}>

{{$slot}}

</div>