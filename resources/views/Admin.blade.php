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
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" href="{{ asset('image/house-door-fill.svg') }}">
  <title>{{$title}}</title>
</head>
<body>
  <div class=" flex flex-col bg-gray-100">
    <div class="">
      <div class="">
        @include('Admin/index');
      </div>
      <div class="">
        @include('Admin/sidebar');
      </div>
    </div>
    <div class="flex justify-end mr-20 ">
      @include($template);
    </div>
  </div>
</body>
<script>

</script>
</html>