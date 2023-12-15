<form class="w-[50vw] my-12 ml-40 mt-10">   
    <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="search" id="search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
    </div>
</form>
<div class="fixed1 ">
    <fieldset class="border-solid border-2 border-sky-500 ... rounded-md flex">
        <legend>
            <h1 class="mb-4-c ht text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Danh sách
                <span class="text-blue-600 dark:text-blue-500">
                    Sản phẩm
                </span>
            </h1>
        </legend>
        @foreach($Admin as $key_admin => $val_admin)
            <div class="card scroll-m-3 boder" onclick="handleClick('{{ json_encode($val_admin) }}')">
                <div class="card-image"> {{$val_admin['img']}}</div>
                <div class="category"> {{$val_admin['name']}} </div>
                <div class="heading">
                    <div class="author"> By <span class="name"> {{$val_admin['gia']}}</span></div>
                </div>
            </div>
        @endforeach
    </fieldset>
    
    <dialog id="my_modal_3" class="modal">
        <div class="modal-box pt-8 pl-8 pr-8 pb-8 ">
            <div class="card-image h-60" id="modal-card-image"></div>
            <div class="category tx" id="modal-category"></div>
            <div class="author tx">BY <span class="money tx" id="modal-money"></span></div>
            <form method="dialog">
                <div class="di-colg">
                    <button class="bg-blue-500 hover:bg-deep-red text-white font-bold py-2 px-4 rounded focus:outline-none">
                        Mua
                      </button>
                     <button class="bg-red-500 hover:bg-deep-red text-white font-bold py-2 px-4 rounded focus:outline-none">
                             Đóng
                     </button>
                </div>
            </form>
        </div>
        
    </dialog>