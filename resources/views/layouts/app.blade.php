<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/product.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/summernote-bs4.css')}}">

    

    
</head>
<body>
    @include('inc.navbar')
        <main class="py-4">
            @include('inc.messages')
            @yield('content')
        </main>
    <script src="{{ asset('js/app.js') }}"></script>
     <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/summernote-bs4.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
     $('.summernote').summernote(
        {
           height: 300,
      }
      );
   });
    </script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
    @include('inc.footer')
</body>
</html>
