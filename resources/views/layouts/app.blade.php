<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('inc.header')
<body>
    <div id="app">

         @include('inc.navbar')
        <div class="container py-4">

            <div class="row justify-content-center">
                <div class="col-md-12">

                    {{-- Content --}}
                    @yield('content')

                </div>
            </div>
        </div>
    </div>


    @include('inc.footer')


</body>
</html>
