@if (Session::get('success'))
    <script>swal("Good job!", "You clicked the button!", "success");</script>
@endif
<div class="w-full max-w-xs mx-auto my-auto">
    <form action="upload" method="POST" class="shadow-md rounded px-8 pt-6 pb-8">
    @csrf
    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
        Naziv proizvoda
        </label>
        <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" placeholder="Naziv proizvoda">
        <p class="text-red-500 text-xs italic">Molimo unesite naziv proizvoda.</p>
    </div>
    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
        Cijena proizvoda
        </label>
        <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="price" name="price" type="number" step=".01" placeholder="00.00">
        <p class="text-red-500 text-xs italic">Molimo unesite cijenu.</p>
    </div>

    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
        Slika proizvoda
        </label>
        <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="image" name="image" type="text" placeholder="Slika proizvoda">
        <p class="text-red-500 text-xs italic">Molimo odaberite sliku.</p>
    </div>



    <div class="flex items-center justify-between">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-24 rounded focus:outline-none focus:shadow-outline" type="submit">
        Upload
        </button>
    </div>
    </form>
    <p class="text-center text-gray-500 text-xs"></p>
</div>