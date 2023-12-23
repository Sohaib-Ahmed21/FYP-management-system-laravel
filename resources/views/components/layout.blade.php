<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            laravel: '#ef3b2d',
            // You can customize additional colors here
            primary: '#3498db',
            secondary: '#2ecc71',
            background: '#f0f0f0',
            text: '#333333',
          },
        },
      },
    };
  </script>
  <title>Open House Management</title>
</head>

<body class="mb-48">
  <nav class="flex justify-between items-center mb-4 bg-white h-[10vh] text-dark">
    <span class="font-bold uppercase ml-3">
      @auth{{ auth()->user()->name }}@endauth
    </span>

    <ul class="flex space-x-6 mr-6 text-lg">
      @auth
        <li>
          @if(isset(auth()->user()->role) && auth()->user()->role=="admin")
          <a href="/admin/dashboard">Dashboard</a>
          @elseif(isset(auth()->user()->role) && auth()->user()->role=="guest")
          <a href="/guest/home">Dashboard</a>
          @else
          <a href="/student/project">Dashboard</a>
          @endif
        </li>
        @if(isset(auth()->user()->role) && auth()->user()->role=="guest")
        <li>
          <span>
            <a href="/guest/preferences">Preferences</a>
          </span>
        </li>
        @elseif(isset(auth()->user()->role) && auth()->user()->role=="student")
        <li>
          <span>
            <a href="/student/project/edit">Edit Project</a>
          </span>
        </li>
        @endif
        <li>
          <form class="inline" method="POST" action="/user/logout">
            @csrf
            <button type="submit">
              Logout
            </button>
          </form>
        </li>
      @else
        <li>
          <a href="/register" class="hover:text-background">Register</a>
        </li>
        <li>
          <a href="/login" class="hover:text-background">Login</a>
        </li>
      @endauth
    </ul>
  </nav>

  <main>
    {{ $slot }}
  </main>

  <x-flash-message />
</body>

</html>
