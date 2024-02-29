<div>
    <html>
        <head>
            <!-- Pemanggilan CSS -->
            <link rel="stylesheet" href="{{asset('css/styles.css')}}"> 
            <!-- JUDUL HALAMAN  -->
            <title>
                Task App
            </title>
            <body>
                <header>
                    <!-- Membuat Navbar -->
                    <nav>
                        <ul>
                            <!-- Membuat Text Link -->
                            <li><a href="{{url('task')}}">Home</a></li>
                            <li><a href="{{url('task/create')}}">Create Task</a></li>
                        </ul>
                    </nav>
                </header>

                <!-- Memanggil isi dari kelas Container -->
                <main>
                    <div class="container">@yield('content')</div>
                </main>
                <!-- Membuat Footer -->
                <footer>
                    <p>&copy; {{date('Y')}} Task App</p>
                </footer>
            </body>
        </head>
    </html>
</div>
