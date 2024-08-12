@props(['tag','size'=>'base'])

@php
$classes = "bg-white/10  font-bold rounded-xl  hover:bg-white/25 transition-colors duration-300";
if($size === 'base'){
$classes .= " px-5 py-1 text-sm";
}
if($size === 'small'){
$classes .= " text-2xs px-3 py-1";
}
@endphp
<a 
{{$attributes->merge(["class"=>$classes])}} 
href="/tags/{{strtolower($tag->name)}}">
   {{$tag->name}}
 </a>