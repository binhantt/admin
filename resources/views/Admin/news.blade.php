<div class="ml-20 w-[50vw] text-center ">
    <div>
        <div class="">
            <h1 class="ml-20 mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-3xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">DANH SÁCH </span> SẢN PHẨM</h1>
        </div>
        <div class="flex justify-between items-center">
            <div class="w-[22vw] ">  
                <form>   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                        <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>    
            </div>
            <div class="m-0">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-500 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Default</button>
            </div>
        </div>
    </div>
    <div >
        <table class="table-auto  border-solid border mt-3 w-[50vw]">
            <div class="border-solid">
                <thead class="border-solid border ">
                    <tr>
                      <th class="border-r-2 border-solid px-6 py-4 "> Tên Sản Phẩm </th>
                      <th class="border-r-2 border-solid px-6 py-4">Ảnh </th>
                      <th class="border-r-2 border-solid  px-6 py-4 ">GIá</th>
                      <th class="border-r-2 border-solid px-6 py-4 ">MOTA</th>
                      <th class="border-r-2 border-solid px-6 py-4 ">Thay đổi</th>
                    </tr>
                  </thead>
            </div>
            <div class="w-[50vw] "> 
                @foreach($Admin as $key_admin => $val_admin)
                <tbody > 
                    <tr class="border-solid">
                      <td class="border-r-2 border-solid px-6 py-4">  {{$val_admin['name']}}</td>
                      <td  class="border-r-2 border-solid px-6 py-4">   {{$val_admin['img']}}</td>
                      <td class="border-r-2  border-solid px-6 py-4">   {{$val_admin['gia']}}</td>
                      <td class="border-r-2  border-solid px-6 py-4">1961</td>
                      <td class="border-r-2  border-solid px-6 py-4 ">
                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Default</button>
                        <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Default</button>
                      </td>
                    </tr>
                    <tr>
                </tbody>
                @endforeach
            </div>
        </table>
    </div>
</div>