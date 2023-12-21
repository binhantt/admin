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
                <button type="button" onclick="my_modal_1.showModal()" class="text-white bg-blue-700 hover:bg-blue-500 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Default</button>
            </div>
        </div>
    </div>
    <div >
    <div class="w-[60vw] overflow-auto h-[60vh]"> 
                <table class="table-auto  border-solid border mt-3 w-[50vw] ">
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
                        @foreach($Admin as $key_admin => $val_admin)
                        <tbody class="w-[50vw] overflow-auto h-3/5" > 
                            <tr class="border-solid">
                            <td class="border-r-2 border-solid px-6 py-4">  {{$val_admin['name']}}</td>
                            <td  class="border-r-2 border-solid px-6 py-4">   {{$val_admin['img']}}</td>
                            <td class="border-r-2  border-solid px-6 py-4">   {{$val_admin['gia']}}</td>
                            <td class="border-r-2  border-solid px-6 py-4">1961</td>
                            <td class="border-r-2  border-solid px-6 py-4 ">
                                
                                <button type="button"   class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Default</button>
                                <button
                                    itemid="{{$val_admin['id']}}"
                                    type="button"
                                    class="delete-button text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800"
                                >
                                    Default
                                </button>

                            </td>
                            </tr>
                            <tr>
                        </tbody>
                        @endforeach
                </table>
        </div>
    </div>
</div>
<dialog id="my_modal_1" class="modal">
  <div class="modal-box">   
    <form method="POST" action="/admin/news/add"> 
        @csrf
    <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tên sản phẩm</label>
    <div class="flex">
      <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
        </svg>
      </span>
      <input type="text" name="name" id="website-admin" class="rounded-none rounded-e-lg bg-gray-50 border border-gray-300 text-gray-900 focus:ring-blue-500 focus:border-blue-500 block flex-1 min-w-0 w-full text-sm p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Bonnie Green">
    </div>
    <label for="website-admin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">giá bán </label>
    <div class="flex">
      <span class="inline-flex items-center px-3 text-sm text-gray-900 bg-gray-200 border border-e-0 border-gray-300 rounded-s-md dark:bg-gray-600 dark:text-gray-400 dark:border-gray-600">
        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z"/>
        </svg>
      </span>
      <input type="number" name="gia" id="number-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="90210" required>         
    </div>
    <div class="flex items-center justify-center w-full mt-5">
    <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
        <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
            </svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span>img </p>
            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
        </div>
        <input id="dropzone-file" name="img" type="file" class="hidden" />
    </label>
</div> 
     <div class="flex mt-2">
       
        <button  class=" btn text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">THêm</button>
        
        <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Dóng</button>
     </div>
      </form>
    </div>
  </div>
  
</dialog>

<script>
$('.delete-button').click(function(){
    console.log( $(this).attr('itemid'))
    $.ajax({
        url: '/admin/news/delete/' + $(this).attr('itemid'),
        type:'DELETE',
        success: function(res){
            location.reload();
        }
    });
});
</script>