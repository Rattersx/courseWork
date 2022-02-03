<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="{{ csrf_token() }}">

{{-- LINKMETA --}}
{{-- <meta property="og:url" content="{{url()->current()}}" />
<meta property="og:image" content="{{config('app.url')}}/@yield('og.image')">
<meta property="og:title" content="@yield(og:title)" /> --}}


{{-- FONTS --}}

{{-- STYLES --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

<link rel="stylesheet" href="{{mix('css/app.css')}}">

{{-- SCRIPTS --}}

{{-- <title>{{ @yield('title', 'Blog') }}</title> --}}
<title>Blog</title>

<livewire:styles>
