<x-layout>

<div class="space-y-10">
  <section class="text-center pt-6">
    
    <h1 class="font-bold text-4xl ">Lets Find Your Next Job</h1>
    <x-forms.form method="GET" action="/search" class="mt-6">
      <x-forms.input name="q" :label="false" placeholder="Web Developer ..."/>
</x-forms.form>
    <!-- <form action="" class="mt-6">
    <input type="text" placeholder="Web Developer..." class="bg-white/5 border-white/10 rounded-xl w-full max-w-xl px-5 py-4">

    </form> -->
  
  </section>
<section class="pt-10">
   <x-section-heading>Featured Jobs</x-section-heading>
  <div class="grid lg:grid-cols-3 gap-8 mt-6 ">
 
   @foreach($featured as $job)
  <x-job-card :$job/>
  @endforeach

  </div>
</section>
<section>
<x-section-heading>Tags</x-section-heading>
<div class="space-x-1 mt-6">
@foreach($tags as $tag)
<x-tag size="base" :$tag/>
@endforeach
</div>
</section>
<section>
<x-section-heading>Recent Jobs</x-section-heading>
<div class="mt-6 space-y-6 ">
 
  @foreach($jobs as $job)
  <x-job-card-wide :$job/>
 

  @endforeach



</div>

    
   
</section>
</div>

</x-layout>