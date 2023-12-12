

<div class="tb overflow-x-auto border-spacing-x-72">
    <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">DANH SÁCH </span> SẢN PHẨM</h1>
<div class="button-1">
    <div class="searchBox">

        <input class="searchInput" type="text" name="" placeholder="Search something">
        <button class="searchButton" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 29 29" fill="none">
            <g clip-path="url(#clip0_2_17)">
            <g filter="url(#filter0_d_2_17)">
            <path d="M23.7953 23.9182L19.0585 19.1814M19.0585 19.1814C19.8188 18.4211 20.4219 17.5185 20.8333 16.5251C21.2448 15.5318 21.4566 14.4671 21.4566 13.3919C21.4566 12.3167 21.2448 11.252 20.8333 10.2587C20.4219 9.2653 19.8188 8.36271 19.0585 7.60242C18.2982 6.84214 17.3956 6.23905 16.4022 5.82759C15.4089 5.41612 14.3442 5.20435 13.269 5.20435C12.1938 5.20435 11.1291 5.41612 10.1358 5.82759C9.1424 6.23905 8.23981 6.84214 7.47953 7.60242C5.94407 9.13789 5.08145 11.2204 5.08145 13.3919C5.08145 15.5634 5.94407 17.6459 7.47953 19.1814C9.01499 20.7168 11.0975 21.5794 13.269 21.5794C15.4405 21.5794 17.523 20.7168 19.0585 19.1814Z" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" shape-rendering="crispEdges"></path>
            </g>
            </g>
            <defs>
            <filter id="filter0_d_2_17" x="-0.418549" y="3.70435" width="29.7139" height="29.7139" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"></feFlood>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></feColorMatrix>
            <feOffset dy="4"></feOffset>
            <feGaussianBlur stdDeviation="2"></feGaussianBlur>
            <feComposite in2="hardAlpha" operator="out"></feComposite>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"></feColorMatrix>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2_17"></feBlend>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2_17" result="shape"></feBlend>
            </filter>
            <clipPath id="clip0_2_17">
            <rect width="28.0702" height="28.0702" fill="white" transform="translate(0.403503 0.526367)"></rect>
            </clipPath>
            </defs>
            </svg>
        </button>
     </div>
<div class="button-2"> 
    <button class="button-3">
        <span class="circle1"></span>
        <span class="circle2"></span>
        <span class="circle3"></span>
        <span class="circle4"></span>
        <span class="circle5"></span>
        <span class="text">THÊM</span>
    </button>
</div> 
</div>
    <table class="table w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="binh text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 p py-3">
                     name
                </th>
                <th scope="col" class="px-6 p py-3">
                    img
                </th>
                <th scope="col" class="px-6 p py-3">
                   gia1
                </th>
                <th scope="col" class="px-6 p py-3">
                    mon ta
                </th>
                <th scope="col" class=" px-2 p py-3">
                    thay doi
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($Admin as $key_admin => $val_admin)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td scope="row" class="px-6 py-4 ">
                            {{$val_admin['name']}}
                        </td>
                        <td class="px-6 py-4">
                            {{$val_admin['img']}}
                        </td>
                        <td class="px-6 py-4">
                            {{$val_admin['gia']}}
                        </td>
                        <td class="px-6 py-4">
                            
                        </td> 
                        <td class=" px-2 py-3 di">
                            <button class="button1" for="svgIcon">
                              <svg xmlns="http://www.w3.org/2000/svg" class="svgIcon" height="16" name="svgIcon" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path class="fa-secondary" for="svgIcon" opacity=".4" d="M362.7 19.3c25-25 65.5-25 90.5 0l39.4 39.4c25 25 25 65.5 0 90.5L433 209 303 79l59.7-59.7z"/><path class="fa-primary" d="M433 209L303 79 52.8 329.3c-6.6 6.6-11.5 14.8-14.1 23.8L1 481.2C-1.5 489.7 .8 498.8 7 505s15.3 8.5 23.7 6.1l128.2-37.7c9-2.6 17.2-7.5 23.8-14.1L433 209z"/></svg>
                              </button>
                            <button class="button">
                                <svg viewBox="0 0 448 512" class="svgIcon"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path></svg>
                              </button>
                        </td>
                    </tr> 
            @endforeach
    </table>
   
</div>
<style>
  .table{
   border: 0.1em solid #e5e7eb;
  }
    .border-spacing-x-72{
        border: 1px none;
        width: 1000px;
        height: auto;
    }
    .tb{
        position: absolute;
        top: 100px;
        left: 400px;
    }
    .px-2{
        padding-left:5px;
        padding-right: 5px; 
        width: 150px;
        text-align: center;
    }
    th{

        color:black;
    }
    td{
        background: white;
        color:black;
    }
    .button {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: white ;
  border: none;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 1px solid  #e5e7eb;
  cursor: pointer;
  overflow: hidden;
  position: relative;
  margin:1em ;
}
.button:hover svg .fa-primary {
      fill: white; /* Đổi màu sắc fill của phần primary của SVG thành trắng */
    }

    .button1:hover svg .fa-secondary {
      fill: white; /* Đổi màu sắc fill của phần secondary của SVG thành trắng */
    }
.svgIcon {
  width: 12px;

}

.svgIcon path {
  fill: black;
}
.button1:hover svg{
  fill: white;
}
.button:hover {
  border-radius: 50px;
  transition-duration: .3s;
  background-color: rgb(255, 69, 69);
  align-items: center;
}
.button1 {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background-color: white ;
  border: none;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 1px solid  #e5e7eb;
  cursor: pointer;
  overflow: hidden;
  position: relative;
  margin: 1em;
}
.button1:hover {
  border-radius: 50px;
  transition-duration: .3s;
  background-color: rgb(69, 255, 85);
  align-items: center;

}

.di{
    display: flex;
    
}
.button-1{
    margin-bottom: 20px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.button-3{
  font-family: Arial, Helvetica, sans-serif;
  font-weight: bold;
  color: white;
  background: var(--gradient-2, linear-gradient(90deg, #2AF598 0%, #009EFD 100%));
  padding-left: 70px;
  padding-right: 70px;
  padding-top: 10px;
  padding-bottom: 10px;
  border: none;
  border-radius: 20px;
  position: relative;
  cursor: pointer;
  overflow: hidden;
  font-size: 15px;
  
}

.button-3 span:not(:nth-child(6)) {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  height: 15px;
  width: 50px;
  background-color: #0c66ed;
  border-radius: 50%;
  transition: .6s ease;
}

.button-3 span:nth-child(6) {
  position: relative;
}

.button-3 span:nth-child(1) {
  transform: translate(-3.3em, -4em);
}

.button-3 span:nth-child(2) {
  transform: translate(-6em, 1.3em);
}

.button-3 span:nth-child(3) {
  transform: translate(-.2em, 1.8em);
}

.button-3 span:nth-child(4) {
  transform: translate(3.5em, 1.4em);
}

.button-3 span:nth-child(5) {
  transform: translate(3.5em, -3.8em);
}

.button-3:hover span:not(:nth-child(6)) {
  transform: translate(-50%, -50%) scale(4);
  transition: 1.5s ease;
}
.searchBox {
  display: flex;
  max-width: 230px;
  align-items: center;
  justify-content: space-between;
  gap: 8px;
  border-radius: 50px;
  position: relative;
  border: 1px solid var(--gradient-2, linear-gradient(90deg, #2AF598 0%, #009EFD 100%));
}

.searchButton {
  color: white;
  position: absolute;
  right: 8px;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: var(--gradient-2, linear-gradient(90deg, #2AF598 0%, #009EFD 100%));
  border: 0;
  display: inline-block;
  transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
}
/*hover effect*/
button:hover {
  color: #fff;
  background-color: #1A1A1A;
  box-shadow: rgba(216, 213, 213, 0.5) 0 10px 20px;
  transform: translateY(-3px);
}
/*button pressing effect*/
button:active {
  box-shadow: none;
  transform: translateY(0);
}

.searchInput {

  background: none;
  outline: none;
  background: none;
  color: black;
  font-size: 15px;
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 10px;
  padding-bottom: 10px;
  outline: none;
}
.searchInput input:hover{
    border: none;
}
.mb-4{
    text-align: center
}
</style>
