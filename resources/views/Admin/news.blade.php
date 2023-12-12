\<div class="text-lg ">
    <div class = "content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">
    <nav class = "flex px-5 py-3 text-gray-700  rounded-lg bg-gray-50 dark:bg-[#1E293B] " aria-label="Breadcrumb">
    </nav>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                        TÊN SẢN PHẨM
                    </th>
                    <th scope="col" class="px-6 py-3">
                        HÌNH ẢNh
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50 dark:bg-gray-800">
                         GIÁ CẢ
                    </th>
                    <th scope="col" class="px-6 py-3">
                        THAY 
                   </th>
                </tr>
            </thead>
                <!-- Open the modal using ID.showModal() method -->
             <button type="button" onclick="OpenCreateModal('')" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" onclick="my_modal_1.showModal()">THÊM</button>
                    <dialog id="my_modal_1" class="modal">
                      
                    <div class="modal-box">   
                        <h1 class="h1">THÊM SẢN PHẨM</h1>
                            {{-- TENSANPHAM --}}
                            <div class="w-100">
                                <div class="relative w-full min-w-[300px] h-10">
                                  <input
                                  id="name"
                                    class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    placeholder="" /><label
                                    class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-gray-200 peer-focus:before:!border-gray-900 after:border-blue-gray-200 peer-focus:after:!border-gray-900">TÊN Sản PHẨM
                                  </label>
                                </div>
                              </div>  
                              {{-- gia --}}
                              <div class="w-100">
                                <div class="relative w-full min-w-[300px] h-10">
                                  <input 
                                  id="gia"
                                    class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    placeholder=" " /><label
                                    class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-gray-200 peer-focus:before:!border-gray-900 after:border-blue-gray-200 peer-focus:after:!border-gray-900">GIá BÁN
                                  </label>
                                </div>
                             </div>
                                                                             
                              {{-- mota --}}
                              <div class="w-100">
                                <div class="relative w-full min-w-[300px] h-20">
                                    <input
                                    id ="mo_ta"
                                    class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    placeholder=" " /><label
                                    class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-gray-200 peer-focus:before:!border-gray-900 after:border-blue-gray-200 peer-focus:after:!border-gray-900">MÔ TẢ
                                    </label>
                                </div>
                              </div>
                              <div class="binhan">
                                    {{-- FILE --}}
                                        <div class="w-100">
                                            <div class="relative w-full min-w-[300px] h-10">
                                                <div class="avatar2">
                                                    <div class="w-70 rounded">
                                                    <img  id="imgPreview" class="img2"name="img" src="data:image/png;base64,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" />
                                                    </div>
                                                <input id="photo"  type="file" name="img">
                                            </div>
                                        
                                    </div>
                                    </div>
                                    {{-- Loai? --}}     
                                    <form method="dialog" >   
                                        <div class="dialog">
                                        <button class="btn2  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">ĐĂNG LÊN</button>                          
                                        <!-- if there is a button in form, it will close the modal -->
                                        <button class="btn3 text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Close</button>
                                        </div>
                                    </form>
                                </div>
                </div>
            </div>

            </dialog>
            <tbody>
                @foreach($Admin as $key_admin => $val_admin)
                <tr class="border-b border-gray-200 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                       {{$val_admin['name']}}
                    </th>
                    <td class="px-6 py-4">
                        {{$val_admin['img']}}
                    </td>
                    <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                        {{$val_admin['gia']}}
                    </td>
                    <td class="px-6 py-4">  
                        {{-- onclick="console.log('{{ json_encode($val_admin) }}')" --}}
                        <button onclick=" OpenEditModal('{{ json_encode($val_admin) }}')" type="button"class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                              </svg>
                        </button>
                        <button type="button" onclick=" OpenDellet( {{$val_admin['id']}})" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                  </svg>
                        </button>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
            </form>
            </dialog>
            {{-- xoa --}}
            <dialog id="my_modal_3" class="modal">
                <div class="DELLET">
                    <div class="fled">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                    </svg>
                    </div>
                    <form method="dialog" class="modal-backdrop">
                        <button class="btn1 botton-left text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Đóng</button>
                        <button class=" btn text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">Xóa</button>
                    </form>
                    </dialog>
                  </div>
    </div>
    <script>
        function OpenEditModal(i){
            my_modal_1.showModal();
            const item =JSON.parse(i);
            //console.log(i);
            $('#name').val(item.name);
            $('#gia').val(item.gia);
            //$('#mo_ta').val(item.mota);
            console.log(item);
        }
        function OpenCreateModal(){
            my_modal_1.showModal();
        ;
            //console.log(i);
            $('#name').val('');
            $('#gia').val('');
            //$('#mo_ta').val(item.mota);
        }
        function OpenDellet(id){
            console.log(id);
            my_modal_3.showModal();
        }
        $(document).ready(()=>{
  $('#photo').change(function(){
    const file = this.files[0];
    console.log(file);
    if (file){
      let reader = new FileReader();
      reader.onload = function(event){
        console.log(event.target.result);
        $('#imgPreview').attr('src', event.target.result);
      }
      reader.readAsDataURL(file);
    }
  });
});
    </script>
    <style>
        .modal-box{
            padding-left: 300px;
            padding-right: 300px;
            padding-bottom: 400px;
            padding-top: 61px;
            border-radius: 20px; 

        }
        .dong{
            margin-left: 300px;
            margin-bottom: 50px
        }
        . h1{
            margin-left: 20px;
        }
        .dong1{
            margin-left: 150px;
        }
        .fled{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .DELLET{
            padding: 50px;
            
        }
        .botton-left{
            margin-right: 100px
        }
        .h1{
            text-align: center;
        }
        .dialog{
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 300px;
        }
        .btn2{
            width: 400px;
            height: 50px;
        }
        .btn{
            width: 100px;
            height: 40px;
        }
        .w-100{
            margin:10px; 
        }
        .img2{
            width: 100%;
            height: 12em;
            object-fit: cover;
        }
        .btn3{
            margin-left: 500px;
            width: 100px;
            height: 40px;
        }
        .binhan{
            display: flex;
            flex-direction: column;
            position: relative;
        }

    </style>