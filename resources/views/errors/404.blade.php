@extends('app')

@section('content')
<section>

<div class="bg-red-500 w-screen h-screen grid content-center justify-center">
    <div class="mb-8 mx-auto"><span class="text-white text-9xl">;(</span></div>
    <div class="bg-slate-800 w-fit">
      <span class="text-white px-4">ERROR 404</span>
      <span class="border-l px-4 font-serif text-slate-300">Vise sreće drugi put!</span>
      </div>
    <div class="bg-green-600 mx-auto mt-8 p-2 rounded-xl hover:bg-green-400"><a class="" type="button" href="{{ route('homepage')}} ">NATRAG</a></div>
</div>

</section>
@endsection