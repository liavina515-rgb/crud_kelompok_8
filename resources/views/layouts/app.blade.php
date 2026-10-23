<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="utf-8">
        <title>Menu Kantin</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-primary-subtle">
        <nav class="navbar navbar-dark bg-primary mb-4">
            <div class="container">
                <span class="navbar-brand">Menu Kantin</span>
            </div>
        </nav>

        <div class="container">
           @if (session('success'))
               <div class="alert alert-success">{{ session('success') }}</div>
           @endif

           @if ($errors->any())
               <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
               </div>
          @endif

          @yield('content')
         </div>
    </body>
</html>
