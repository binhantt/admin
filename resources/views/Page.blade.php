<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.4.19/dist/full.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-qrTq4Ivah5kA/eC6ovZMl+Uwz0Y1ND+oQD93kpsXDz1UN1fZ+RcU3/eAveokSv5cGpFLMqfFqL9RH6e43YQK8iA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/page.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('image/logo.png') }}">
    <title>{{$title}}</title>
</head>
<body>
    <div>
        <nav class="bg-white border1 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                  <a href="index" class="flex items-center space-x-3 rtl:space-x-reverse">
                      <img src="{{ asset('images/logo.png') }}" class="h-8" alt="Logo Image"/>
                      <h1 class="mb-4-c text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">SHOP<span class="text-blue-600 dark:text-blue-500">BÌNH AN</span>.COM</h1>
                      <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400"></p>
                  </a>
                  <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                      <button type="button" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                        <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="user photo">
                      </button>
                      <!-- Dropdown menu -->
                      <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                        <div class="px-4 py-3">
                        </div>
                        <ul class="py-2" aria-labelledby="user-menu-button">
                        </ul>
                      </div>
                      <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                  </div>
                  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                      <li>
                        <a href="index" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">HOME</a>
                      </li>
                      <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">ĐƠN HÀNG</a>
                      </li>
                      <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">THÔNG BÁO</a>
                      </li>
                      <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">HỔ TRỢ</a>
                      </li>
                    </ul>
                  </div>
            </div>
        </nav>
    </div>
    <div class="flex">
        <div class="w-[20vw]">
                @include('page/sidebar');
        </div>
        <div class="w-[80vw]">
            @include($template);
        </div>
    </div>
   
</body>
</html>
<script>
var selectedData = null;
    
    function handleClick(jsonData) {
        const item = JSON.parse(jsonData);
        selectedData = item;
        showselectModal();
    } 
    function showselectModal() {
        my_modal_3.showModal();
    
        if (selectedData) {
            $('#modal-card-image').text(selectedData.img);
            $('#modal-category').text(selectedData.name);
            $('#modal-money').text(selectedData.gia);
            //console.log(selectedData);
        }
    }
</script>
