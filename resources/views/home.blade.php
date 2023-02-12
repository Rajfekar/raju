<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hello Raj</title>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>

<body>

    @livewire('header')
    {{-- @livewire('hello-world') --}}
    {{-- ['user' => $user], key($user->id) --}}


    <main>
        <div style="background-image: url('./Rit1.jpg');" class="main w-full h-screen bg-cover bg-fixed opacity-50">

        </div>
        <div class="h-screen bg-pink-500">

        </div>
        <div class="h-screen bg-yellow-500">

        </div>
        <div class="h-screen bg-cyan-500">

        </div>
    </main>

    @livewireScripts
</body>

</html>