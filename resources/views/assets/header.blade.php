
<nav class="body-font border bg-white dark:bg-slate-900">
    <div
      class="container flex flex-col flex-wrap px-5 py-2 mx-auto md:items-center md:flex-row ">
      <a href="/"
        class="flex items-center justify-center p-2 border w-40 mb-4 font-medium title-font md:mb-0 hover:cursor-pointer mx-auto md:mx-0">
        <span>CVIJEĆARNICA</span><x-icons.flower-icon />
      </a>
      <nav
        class="flex flex-wrap items-center justify-center text-base md:ml-auto md:mr-auto">
        <a href="#"
          class="mr-5 text-sm font-semibold  hover:text-gray-800">Pricing</a>
        <a href="#"
          class="mr-5 text-sm font-semibold  hover:text-gray-800">Kontakt</a>
        <a href="#" onclick='<script>swal({
          text: "Hello world!",
        })</script>'
          class="mr-5 text-sm font-semibold hover:text-gray-800">Services</a>
        <a href="{{ route('welcome')}}"
          class="mr-5 text-sm font-semibold hover:text-gray-800">WELCOME</a>
         
      </nav>

 
      <div class="flex space-x-2 justify-center mx-4">
        <div class="p-4 body-font rounded-full active:bg-stone-500/50 focus:border-white">
          <button id="menu-btn" type="button" class="flex justify-center items-center inline-block rounded-full bg-blue-600 text-white leading-normal uppercase shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-9 h-9">
            <x-icons.dots-vertical />
          </button>
        </div>

                    <ul
              class="
                dropdown-menu
                min-w-max
                absolute
                hidden
                bg-white
                text-base
                z-50
                float-left
                py-2
                list-none
                text-left
                rounded-lg
                shadow-lg
                mt-1
                hidden
                m-0
                bg-clip-padding
                border-none
              "
              aria-labelledby="dropdownMenuButton1"
            >
              <li>
                <a
                  class="
                    dropdown-item
                    text-sm
                    py-2
                    px-4
                    font-normal
                    block
                    w-full
                    whitespace-nowrap
                    bg-transparent
                    hover:bg-gray-100
                  "
                  href="#"
                  >Action</a
                >
              </li>
              <li>
                <a
                  class="
                    dropdown-item
                    text-sm
                    py-2
                    px-4
                    font-normal
                    block
                    w-full
                    whitespace-nowrap
                    bg-transparent
                    hover:bg-gray-100
                  "
                  href="#"
                  >Another action</a
                >
              </li>
              <li>
                <a
                  class="
                    dropdown-item
                    text-sm
                    py-2
                    px-4
                    font-normal
                    block
                    w-full
                    whitespace-nowrap
                    bg-transparent
                    hover:bg-gray-100
                  "
                  href="#"
                  >Something else here</a
                >
              </li>
            </ul>

      </div>



      <!---
      <div class="flex justify-center">
        <div>
          <div class="dropdown relative">
            <button
              class="
                dropdown-toggle
                px-6
                py-2.5
                bg-blue-600
                text-white
                font-medium
                text-xs
                leading-tight
                uppercase
                rounded
                shadow-md
                hover:bg-blue-700 hover:shadow-lg
                focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                active:bg-blue-800 active:shadow-lg active:text-white
                transition
                duration-150
                ease-in-out
                flex
                items-center
                whitespace-nowrap
              "
              type="button"
              id="dropdownMenuButton1"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Dropdown button
              <svg
                aria-hidden="true"
                focusable="false"
                data-prefix="fas"
                data-icon="caret-down"
                class="w-2 ml-2"
                role="img"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 320 512"
              >
                <path
                  fill="currentColor"
                  d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
                ></path>
              </svg>
            </button>
            <ul
              class="
                dropdown-menu
                min-w-max
                absolute
                hidden
                bg-white
                text-base
                z-50
                float-left
                py-2
                list-none
                text-left
                rounded-lg
                shadow-lg
                mt-1
                hidden
                m-0
                bg-clip-padding
                border-none
              "
              aria-labelledby="dropdownMenuButton1"
            >
              <li>
                <a
                  class="
                    dropdown-item
                    text-sm
                    py-2
                    px-4
                    font-normal
                    block
                    w-full
                    whitespace-nowrap
                    bg-transparent
                    text-gray-700
                    hover:bg-gray-100
                  "
                  href="#"
                  >Action</a
                >
              </li>
              <li>
                <a
                  class="
                    dropdown-item
                    text-sm
                    py-2
                    px-4
                    font-normal
                    block
                    w-full
                    whitespace-nowrap
                    bg-transparent
                    text-gray-700
                    hover:bg-gray-100
                  "
                  href="#"
                  >Another action</a
                >
              </li>
              <li>
                <a
                  class="
                    dropdown-item
                    text-sm
                    py-2
                    px-4
                    font-normal
                    block
                    w-full
                    whitespace-nowrap
                    bg-transparent
                    text-gray-700
                    hover:bg-gray-100
                  "
                  href="#"
                  >Something else here</a
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
      ---->

      <button href="#" id="kosarica"
        class="flex justify-center items-center space-x-2 px-8 py-3 mt-4 font-semibold text-blue-700 transition duration-500 ease-in-out transform bg-white border rounded-lg lg:inline-flex lg:mt-px hover:border-blue-800 hover:bg-blue-700 hover:text-white focus:ring focus:outline-none">
        <x-icons.shopping-cart /> <span>(<span>{{ count((array) session('cart')) }}</span>) kom</span>
      </button>
    </div>
</nav>
<section id="shopping_cart" class="invisible">
  @include('assets/shopping_cart')
</section>