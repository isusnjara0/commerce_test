@extends('app')

@section('content')
<section>

<div class="bg-blue-500 w-screen h-screen grid content-center justify-center">
    <div class="mb-8 mx-auto w-48"><span class="text-white"><x-icons.screw-wrench :size="10"/></span></div>
    <div class="bg-slate-800 w-fit">
      <span class="text-white px-4">ERROR 503</span>
      <span class="border-l px-4 font-serif text-slate-300">Stranica se trenutno održava, tu smo za 10min :)</span>
      </div>
</div>

</section>
@endsection