@extends('app')

@section('content')
<section>
    
  @include('assets/header')
  
      <section class="text-gray-600 body-font">
        @include('assets/product_cart')
    </section>



    @include('assets/footer')

</section>
@endsection