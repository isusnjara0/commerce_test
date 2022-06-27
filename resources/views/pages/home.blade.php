@extends('app')

@section('content')
<section class="w-full mx-auto bg-white lg:w-[1024px] lg:px-16 dark:bg-slate-800">

  @include('assets/header')



      <section class="text-gray-600 body-font shadow">
        <div class="container py-24 mx-auto">
          <div class="flex flex-wrap">


            @foreach ($products as $item)

            <div class="product lg:w-1/4 md:w-1/2 p-4 w-full border cursor-pointer relative">
                <a class="block relative h-48 rounded overflow-hidden" name='id' href="/details/{{ $item->id }}">
                  <div id="ucitavanje" class="ucitavanje w-full h-full absolute z-50 flex justify-center items-center"><div class="w-1/4 animate-spin"><x-icons.circle-notch  :size="10" /></div></div>
                <img loading="lazy" alt="ecommerce"
                    class="slika_proizvoda object-cover object-center w-full h-full block"
                    src="images/{{ $item->image }}" style=" " onerror="if (this.src != 'https://dummyimage.com/480x270') this.src = 'https://dummyimage.com/480x270';">
                </a>
                <div class="proizvod mt-4 p-2 relative">
                    <div class="opis relative">
                        <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">
                            CATEGORY</h3>
                        <h2 class="text-gray-900 title-font text-lg font-medium" name='name' >{{ $item->name }}</h2>
                        <p class="mt-1" name='price' >{{ $item->price }}kn</p>
                    </div>
                </div>
                @include('assets/buttons') 
            </div>
           
            @endforeach

          </div>

            <div class="bg-white px-4 py-3 mt-16 flex items-center justify-between border-t border-gray-200 sm:px-6">

              {{$products->links('pagination::tailwind')}}
   
            </div>


        </div>
        
      </section>



      @include('assets/footer')

  <section class="img_details invisible fixed grid place-items-center w-screen h-screen inset-0 z-50 bg-[#00000080]">
    <div class="img_close absolute top-8 right-8 bg-stone-50 hover:bg-stone-800 hover:text-white right"><x-icons.x/></div>
    <a class="block relative w-4/5 h-4/5 mx-auto rounded overflow-hidden">
      <img loading="lazy" alt="ecommerce"
          class="mx-auto object-cover object-center w-full h-full block"
          src="https://dummyimage.com/1920x1080" style=" ">
      </a>
  </section>

</section>
@endsection