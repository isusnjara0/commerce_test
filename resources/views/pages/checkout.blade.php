@extends('app')

@section('content')
<section>

    @include('assets/header')
  
    <section class="text-gray-600 body-font">
        HELLO FROM CHECKOUT!!
        <div id="ucitavanje" class="animate-spin w-8 h-8"><x-icons.circle-notch  :size="10" /></div>
        <div class="w-full m-4 p-4 bg-gray-200 h-full"><a class="px-4 py-2 bg-blue-500 hover:bg-blue-800" href="checkout/pdf">KLIKNI ZA PDF</a></div>
  </section>



  @include('assets/footer')
  
</section>
@endsection