<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative z-10" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
    <!--
      Background backdrop, show/hide based on slide-over state.
  
      Entering: "ease-in-out duration-500"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in-out duration-500"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
  
    <div class="fixed inset-0 overflow-hidden">
      <div class="absolute inset-0 overflow-hidden">
        <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
          <!--
            Slide-over panel, show/hide based on slide-over state.
  
            Entering: "transform transition ease-in-out duration-500 sm:duration-700"
              From: "translate-x-full"
              To: "translate-x-0"
            Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
              From: "translate-x-0"
              To: "translate-x-full"
          -->
          <div class="pointer-events-auto w-screen max-w-md">
            <div class="flex h-full flex-col bg-white shadow-xl">
              <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
                <div class="flex items-start justify-between">
                  <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
                  <div class="ml-3 flex h-7 items-center" id="btnclose">
                    <button type="button" class="-m-2 p-2 text-gray-400 hover:text-gray-500">
                      <span class="sr-only">Close panel</span>
                      <!-- Heroicon name: outline/x -->
                      <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                    </button>
                  </div>
                </div>
  
                <div class="mt-8">
                  <div class="flow-root">
                    <ul role="list" class="-my-6 divide-y divide-gray-200">
                      <?php $total = 0 ?>
                      <?php $kol = 0 ?>
                      @if(session('cart'))
                      @foreach(session('cart') as $id => $p)

                      <?php $total += $p['price'] * $p['quantity'] ?>
                      <?php $kol += 1 ?>

                            <li class="flex py-6">
                                <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                <img src="/images/{{$p['image']}}" alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch." class="h-full w-full object-cover object-center">
                                </div>
        
                                <div class="ml-4 flex flex-1 flex-col">
                                <div>
                                    <div class="flex justify-between text-base font-medium text-gray-900">
                                    <h3>
                                        <a href="#"> {{$p['name']}} </a>
                                    </h3>
                                    <p class="ml-4">{{$p['price']}}kn</p>
                                    </div>
                                    <p class="mt-1 text-sm text-gray-500">Blue</p>
                                </div>
                                <div class="flex flex-1 items-end justify-between text-sm">
                                    <p class="text-gray-500">Qty {{$p['quantity']}}</p>
        
                                    <div class="flex">
                                    <button class="remove-from-cart font-medium text-indigo-600 hover:text-indigo-500" data-id="{{ $id }}">Remove</button>
                                    </div>
                                </div>
                                </div>
                            </li>
                        @endforeach
                      @endif
  
                      <!-- More products... -->
                    </ul>
                  </div>
                </div>
              </div>
  
              <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                <div class="flex justify-between text-base font-medium text-gray-900">
                  <p>Subtotal</p>
                  <p> {{ $total }}kn</p>
                </div>
                <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                <div class="mt-6">
                  <a href="{{ route('checkout') }}" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
                </div>
                <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                  <p>
                    or <button  id="cart_shop_button" type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Continue Shopping<span aria-hidden="true"> &rarr;</span></button>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
         $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            function sweetConfirm(callback) {
            swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Proizvod je maknut iz košare!", {
      icon: "success",
    });
    callback(true);
  } else {
    swal("Poof! Proizvod je sačuvan od brisanja!");
  }
 

});}
sweetConfirm(function (confirmed) {
            if(confirmed) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });
         });
</script>
  @section('scripts')


    <script type="text/javascript">
      

       /* $(".update-cart").click(function (e) {
           e.preventDefault();

           var ele = $(this);

            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });*/

       /* $(".remove-from-cart").click(function (e) {
          alert('radi!');
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });*/

    </script>

@endsection