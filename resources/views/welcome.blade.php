<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>KHEMRAJ-FEKAR</title>

    <!-- Fonts -->
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="/css/tailwind.css">
    <link rel="stylesheet" href="/css/fontawesome.min.css">
    <link rel="stylesheet" href="/css/css2.css">
    <link rel="stylesheet" href="/css/custom.css">

</head>

<body class="bg-gray-200">
    {{-- NavBar --}}
    <!-- PRELOADER -->
    <div id="preloader">
        <div class="loader_line"></div>
    </div>
    <!-- /PRELOADER -->


    <div
        class=" dark:bg-[#111111] bg-homeBg min-h-screen dark:bg-homeBg-dark bg-no-repeat bg-center bg-cover bg-fixed md:pb-16 w-full bg-pink-300">
        <div class="z-50">
            <!-- container start -->
            <div class="container">
                <!-- header start for large screens -->
                <header class="flex justify-between items-center fixed top-0 left-0 w-full lg:static z-[1111111111]">
                    <div class="flex justify-between w-full px-4 lg:px-0 bg-[#F3F6F6] lg:bg-transparent ">
                        <div class="flex justify-between w-full items-center space-x-4 lg:my-8 my-5">
                            <!-- website logo -->
                            <a class="text-5xl font-semibold" href="/">
                                <h1 id="rajfekar">RAJ FEKAR</h1>
                            </a>
                            <div class="flex items-center">
                                <!-- light and dark mode button -->
                                <button id="theme-toggle-mobile" type="button"
                                    class="dark-light-btn lg:hidden w-[44px] h-[44px] ml-2">
                                    <i id="theme-toggle-dark-icon-mobile" class="fa-solid text-xl fa-moon hidden"></i>
                                    <i id="theme-toggle-light-icon-mobile" class="fa-solid fa-sun text-xl hidden"></i>
                                </button>
                                <!-- mobile toggle button -->
                                <button id="menu-toggle" type="button" class="menu-toggle-btn">
                                    <i id="menu-toggle-open-icon" class="fa-solid fa-bars text-xl "></i>
                                    <i id="menu-toggle-close-icon" class="fa-solid fa-xmark text-xl hidden  "></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- header items two for large screens -->
                    <nav id="menubar" class="sm:hidden lg:block">
                        <ul class="flex my-12">
                            <li>
                                <a class="menu-item-two-active" href="{{url('/')}}">
                                    <span class="mr-2 text-base">
                                        <i class="fa-solid fa-house"></i>
                                    </span> Home </a>
                            </li>
                            <li>
                                <a class="menu-item-two" href="{{url('/rit/login/')}}">
                                    <span class="mr-2 text-base">
                                        <i class="fa-solid fa-house"></i>
                                    </span> RIT </a>
                            </li>
                            <li>
                                <a href="#about_section" class="menu-item-two">
                                    <span class="mr-2 text-base">
                                        <i class="fa-regular fa-user"></i>
                                    </span> About </a>
                            </li>
                            <li>
                                <a class="menu-item-two" href="#resume_section">
                                    <span class="mr-2 text-base">
                                        <i class="fa-regular fa-file-lines"></i>
                                    </span> Resume </a>
                            </li>
                            <li>
                                <a class="menu-item-two">
                                    <span class="mr-2 text-base">
                                        <i class="fas fa-briefcase"></i>
                                    </span> Works </a>
                            </li>
                            <li>
                                <a class="menu-item-two">
                                    <span class="mr-2 text-base">
                                        <i class="fa-brands fa-blogger"></i>
                                    </span> Blogs </a>
                            </li>
                            <li>
                                <a class="menu-item-two" href="#contact_section">
                                    <span class="mr-2 text-base">
                                        <i class="fa-solid fa-address-book"></i>
                                    </span> Contact </a>
                            </li>
                            <li>
                                <!-- light and dark mode button -->
                                <button id="theme-toggle" type="button" class="dark-light-btn w-[44px] h-[44px] ml-2">
                                    <i id="theme-toggle-dark-icon" class="fa-solid text-xl fa-moon hidden"></i>
                                    <i id="theme-toggle-light-icon" class="fa-solid fa-sun text-xl hidden"></i>
                                </button>
                            </li>
                        </ul>
                    </nav>

                    <!-- mobile menu start -->
                    <nav id="navbar" class="hidden lg:hidden">
                        <ul
                            class="block rounded-b-[20px] shadow-md absolute left-0 top-20 z-[22222222222222] w-full bg-white dark:bg-[#1d1d1d]">
                            <li>
                                <a class="mobile-menu-items-active">
                                    <span class="mr-2 text-xl">
                                        <i class="fa-solid fa-house"></i>
                                    </span> Home </a>
                            </li>
                            <li>
                                <a class="mobile-menu-items" href="{{url('/rit/login')}}">
                                    <span class="mr-2 text-xl">
                                        <i class="fa-solid fa-house"></i>
                                    </span> RIT </a>
                            </li>
                            <li>
                                <a href="#about_section" class="mobile-menu-items">
                                    <span class=" mr-2 text-xl">
                                        <i class="fa-regular fa-user"></i>
                                    </span> About </a>
                            </li>
                            <li>
                                <a class="mobile-menu-items" href="#resume_section">
                                    <span class="mr-2 text-xl">
                                        <i class="fa-regular fa-file-lines"></i>
                                    </span> Resume </a>
                            </li>
                            <li>
                                <a class="mobile-menu-items">
                                    <span class="mr-2 text-xl">
                                        <i class="fas fa-briefcase"></i>
                                    </span> Works </a>
                            </li>
                            <li>
                                <a class="mobile-menu-items">
                                    <span class="mr-2 text-xl">
                                        <i class="fa-brands fa-blogger"></i>
                                    </span> Blogs </a>
                            </li>
                            <li>
                                <a class="mobile-menu-items" href="#contact_section">
                                    <span class="mr-2 text-xl">
                                        <i class="fa-solid fa-address-book"></i>
                                    </span> Contact </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- mobile menu end -->
                </header>
                <!-- header  end -->

                <!-- Home page contant start -->
                <div id="homepoint"
                    class="flex flex-col items-center h-[100vh] md:h-[90vh] lg:h-[80vh] xl:h-[71vh] justify-center aos-init aos-animate"
                    data-aos="fade">
                    <!-- personal image -->
                    <img id="profilepic" class="rounded-full w-[250px] h-[250px] 2xl:w-[280px] 2xl:h-[280px]"
                        src="./images/A1.jpg" alt="about avatar" />
                    <h3 class="mt-6 mb-1 text-5xl font-semibold dark:text-white"> Khemraj Fekar </h3>
                    <p class="mb-4 text-[#7B7B7B]">Full Stack Developer</p>
                    <!-- social link and social  buttons -->
                    <div class="flex space-x-3">
                        <!-- facebook link -->
                        <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
                            <span class="socialbtn text-[#1773EA]">
                                <i class="fa-brands fa-facebook-f"></i>
                            </span>
                        </a>
                        <!-- twitter link -->
                        <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer">
                            <span class="socialbtn text-[#1C9CEA]">
                                <i class="fa-brands fa-twitter"></i>
                            </span>
                        </a>
                        <!-- dribbble icon and link -->
                        <a href="https://dribbble.com/" target="_blank" rel="noopener noreferrer">
                            <span class="socialbtn text-[#e14a84]">
                                <i class="fa-brands fa-dribbble"></i>
                            </span>
                        </a>
                        <!-- linkedin icon and link -->
                        <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer">
                            <span class="socialbtn text-[#0072b1]">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </span>
                        </a>
                    </div>
                    <!-- dowanload button -->
                    <a class="dowanload-btn" href="{{url('/images/img/RajResume.pdf')}}">
                        <img src="./images/img/dowanload.png" alt="icon" class="mr-2" />Download CV </a>
                </div>
                <!-- Home page contant End -->
            </div>
        </div>
    </div>


    {{-- about me --}}
    <!-- about page contant start -->
    <div>
        <div class="container lg:rounded-2xl bg-white dark:bg-[#111111] px-4 sm:px-5 md:px-10 lg:px-20">
            <div data-aos="fade" class="aos-init aos-animate">
                <div id="about_section" class="py-12">
                    <!-- about page title -->
                    <h2 class="after-effect after:left-52 mt-12 lg:mt-0"> About Me </h2>
                    <div class="grid grid-cols-12 md:gap-10 pt-4 md:pt-[40px] items-center">
                        <div class="col-span-12 md:col-span-12">
                            <!-- about me image -->
                            <img class="w-full  object-cover overflow-hidden rounded-[35px] mb-3 md:mb-0"
                                src="{{url('/images/img/qrcoderit.jpg')}}" alt="about image" />
                        </div>
                        <div class="col-span-12 md:col-span-12 space-y-2.5">
                            <!-- who am i content  -->
                            <div class="md:mr-12 xl:mr-16">
                                <h3 class="text-4xl font-medium dark:text-white mb-2.5"> Who am I? </h3>
                                <p class="text-gray-lite dark:text-color-910 leading-7"> I'm Khemraj Fekar </p>
                                <p class="text-gray-lite leading-7 mt-2.5 dark:text-color-910">When i was in high school
                                    i want to became a software engineer. my strongest point is that i can learn from my
                                    atmoshphere.
                                    my aim is to make world open and connected.
                                </p>
                            </div>

                            <!-- personal info -->
                            <div>
                                <h3 class="text-4xl font-medium my-5 dark:text-white"> Personal Info </h3>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div class="flex">
                                        <span
                                            class="text-oriange dark:bg-color-990 shadow-icon mr-2.5 flex items-center justify-center rounded-md text-2xl w-12 text-">
                                            <i class="fa-solid fa-mobile-screen-button"></i>
                                        </span>
                                        <div class="space-y-1">
                                            <p class="text-xs text-gray-lite dark:text-color-910"> Phone
                                            </p>
                                            <h6 class="font-medium dark:text-white"> <a href=”tel:7697477107“> +91
                                                    7697477107 </a></h6>
                                        </div>
                                    </div>

                                    <div class="flex">
                                        <span
                                            class="text-oriange-lite dark:bg-color-990 shadow-icon mr-2.5 flex items-center justify-center rounded-md text-2xl w-12 text-">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </span>
                                        <div class="space-y-1">
                                            <p class="text-xs text-gray-lite dark:text-color-910"> Location
                                            </p>
                                            <h6 class="font-medium dark:text-white"> Raipur,Chattisagarh, India </h6>
                                        </div>
                                    </div>

                                    <div class="flex">
                                        <span
                                            class="text-green dark:bg-color-990 shadow-icon mr-2.5 flex items-center justify-center rounded-md text-2xl w-12 text-">
                                            <i class="fa-solid fa-envelope-open-text"></i>
                                        </span>
                                        <div class="space-y-1">
                                            <p class="text-xs text-gray-lite dark:text-color-910"> Email
                                            </p>
                                            <h6 class="font-medium dark:text-white"> <a
                                                    href="mailto:rajfekar.123@gmail.com">rajfekar.123@gmail.com</a></h6>
                                        </div>
                                    </div>

                                    <div class="flex">
                                        <span
                                            class="text-color-50 dark:bg-color-990 shadow-icon mr-2.5 flex items-center justify-center rounded-md text-2xl w-12 text-">
                                            <i class="fa-solid fa-calendar-days"></i>
                                        </span>
                                        <div class="space-y-1">
                                            <p class="text-xs text-gray-lite dark:text-color-910"> Birthday
                                            </p>
                                            <h6 class="font-medium dark:text-white"> August 31, 2001 </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- whai i do contain -->
                <div class="pb-12">
                    <h3 class="text-[35px] dark:text-white font-medium pb-5"> What I do! </h3>
                    <div class="grid gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
                        <div class="about-box dark:bg-transparent bg-[#fcf4ff]">
                            <img class="w-10 h-10 object-contain block" src="{{url('/images/img/icon.svg')}}"
                                alt="icon" />
                            <div class="space-y-2">
                                <h3 class="dark:text-white text-2xl font-semibold"> Ui/Ux Design </h3>
                                <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]">I design US & UI of Website and
                                    Android app prototype design using figma , figjam. </p>
                            </div>
                        </div>

                        <div class="about-box dark:bg-transparent bg-[#fefaf0]">
                            <img class="w-10 h-10 object-contain block" src="{{url('/images/img/icon1.svg')}}"
                                alt="icon" />
                            <div class="space-y-2">
                                <h3 class="dark:text-white text-2xl font-semibold"> App Development </h3>
                                <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> I Develop Applications using
                                    React-Native CLI for cross flateforms. Android, IOS etc. </p>
                            </div>
                        </div>

                        <div class="about-box dark:bg-transparent bg-[#fcf4ff]">
                            <img class="w-10 h-10 object-contain block" src="{{url('/images/img/icon5.svg')}}"
                                alt="icon" />
                            <div class="space-y-2">
                                <h3 class="dark:text-white text-2xl font-semibold"> Web Development </h3>
                                <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]">My favourate is Web Development
                                    I am a TALL Stack & MERN Stack Developer.
                                </p>

                            </div>
                        </div>

                        <div class="about-box dark:bg-transparent bg-[#fff4f4]">
                            <img class="w-10 h-10 object-contain block" src="{{url('/images/img/icon3.svg')}}"
                                alt="icon" />
                            <div class="space-y-2">
                                <h3 class="dark:text-white text-2xl font-semibold"> Photography </h3>
                                <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> I like to capture lovely
                                    moments in my camera. </p>
                            </div>
                        </div>

                        <div class="about-box dark:bg-transparent bg-[#fff0f8]">
                            <img class="w-10 h-10 object-contain block" src="{{url('/images/img/icon4.svg')}}"
                                alt="icon" />
                            <div class="space-y-2">
                                <h3 class="dark:text-white text-2xl font-semibold">Blogging</h3>
                                <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]">i also like to write some
                                    technical contents.</p>
                            </div>
                        </div>

                        <div class="about-box dark:bg-transparent bg-[#f3faff]">
                            <img class="w-10 h-10 object-contain block" src="{{url('/images/img/icon2.svg')}}"
                                alt="icon" />
                            <div class="space-y-2">
                                <h3 class="dark:text-white text-2xl font-semibold"> Video Editing </h3>
                                <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> My Video Editing is amazing.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- what i do contain end -->


            </div>
        </div>
    </div>
    <!-- about section end  -->



    <!-- resume page contant start -->
    <section class="bg-white lg:rounded-2xl dark:bg-[#111111]">
        <div data-aos="fade" class="aos-init aos-animate">
            <div class="container sm:px-5 md:px-10 lg:px-20">
                <div id="resume_section" class="py-12 px-4">
                    <h2 class="after-effect after:left-44 mb-[40px] mt-12 lg:mt-0"> Resume </h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-6">
                        <!-- eductation contain -->
                        <div>
                            <div class="flex items-center space-x-2 mb-4">
                                <i class="fa-solid text-6xl text-[#F95054] fa-graduation-cap"></i>
                                <h4 class="text-5xl dark:text-white font-medium"> Education </h4>
                            </div>

                            <div
                                class="py-4 dark:bg-transparent bg-[#fff4f4] pl-5 pr-3 space-y-2 mb-6 rounded-lg dark:border-[#212425] dark:border-2">
                                <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">2016-2017</span>
                                <h3 class="text-xl dark:text-white"> 10th | CGBSE | 85.83% </h3>
                                <p class="dark:text-[#b7b7b7]"> Ganpat Sindhi Higher Secondary School, Purani basti
                                    Raipur </p>
                            </div>

                            <div
                                class="py-4 dark:bg-transparent bg-[#fff1fb] pl-5 pr-3 space-y-2 rounded-lg mb-6 dark:border-[#212425] dark:border-2">
                                <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">2018 - 2019</span>
                                <h3 class="text-xl dark:text-white"> 12th | CGBSE | 80.80% </h3>
                                <p class="dark:text-[#b7b7b7]"> Ganpat Sindhi Higher Secondary School, Purani basti
                                    Raipur </p>
                            </div>

                            <div
                                class="py-4 dark:bg-transparent bg-[#fff4f4] pl-5 pr-3 space-y-2 rounded-lg dark:border-[#212425] dark:border-2">
                                <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">2019-2023</span>
                                <h3 class="text-xl dark:text-white">B.Tech | CSE | 8.3 CGPA</h3>
                                <p class="dark:text-[#b7b7b7]"> Raipur Institute Of Technology,Raipur C.G. </p>
                            </div>

                        </div>

                        <div>
                            <!-- Experience contain -->
                            <div class="flex items-center space-x-2 mb-4">
                                <i class="fa-solid text-6xl text-[#F95054] fa-briefcase"></i>
                                <h4 class="text-5xl dark:text-white font-medium"> Experience </h4>
                            </div>

                            <div
                                class="py-4 dark:bg-transparent bg-[#eef5fa] pl-5 pr-3 space-y-2 mb-6 rounded-lg dark:border-[#212425] dark:border-2">
                                <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">2022-23</span>
                                <h3 class="text-xl dark:text-white"> Laravel </h3>
                                <p class="dark:text-[#b7b7b7]"> work as a back-end intern in ARTP technology hydrabad.
                                </p>
                            </div>

                            <div
                                class="py-4 dark:bg-transparent bg-[#f2f4ff] pl-5 pr-3 space-y-2 rounded-lg mb-6 dark:border-[#212425] dark:border-2">
                                {{-- <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">2015-2017</span>
                                <h3 class="text-xl dark:text-white"> Cr. Web Developer </h3>
                                <p class="dark:text-[#b7b7b7]">ib-themes ltd.</p> --}}
                            </div>

                            <div
                                class="py-4 dark:bg-transparent bg-[#eef5fa] pl-5 pr-3 space-y-2 rounded-lg dark:border-[#212425] dark:border-2">
                                {{-- <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">2008</span>
                                <h3 class="text-xl dark:text-white">Best Writter</h3>
                                <p class="dark:text-[#b7b7b7]"> Online Typodev Soluation Ltd. </p> --}}
                            </div>
                        </div>

                        <div>
                            <!-- award content -->
                            <div class="flex items-center space-x-2 mb-4">
                                <i class="fa-solid fa-award text-6xl text-[#F95054]"></i>
                                <h4 class="text-5xl dark:text-white font-medium"> Awards </h4>
                            </div>

                            <div
                                class="py-4 dark:bg-transparent bg-[#fcf4ff]  pl-5 pr-3 space-y-2 mb-6  rounded-lg dark:border-[#212425] dark:border-2">
                                <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">2021-2022</span>
                                <h3 class="text-xl dark:text-white"> Chess </h3>
                                <p class="dark:text-[#b7b7b7]"> i awarded for getting first position in chess game.</p>
                            </div>

                            <div
                                class="py-4 dark:bg-transparent bg-[#fcf9f2] pl-5 pr-3 space-y-2 rounded-lg mb-6 dark:border-[#212425] dark:border-2">
                                <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">2022-23</span>
                                <h3 class="text-xl dark:text-white"> QRcode based Attendance system</h3>
                                <p class="dark:text-[#b7b7b7]">I got prize for qrcode based attendance management
                                    systeme.</p>
                            </div>

                            <div
                                class="py-4 dark:bg-transparent bg-[#fcf4ff] pl-5 pr-3 space-y-2 rounded-lg dark:border-[#212425] dark:border-2">
                                {{-- <span class="text-tiny text-gray-lite dark:text-[#b7b7b7]">2022</span> --}}
                                {{-- <h3 class="text-xl dark:text-white">Best Freelancer</h3> --}}
                                {{-- <p class="dark:text-[#b7b7b7]"> Fiver &amp; Upwork Level 2 &amp; Top Rated
                                </p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- working skills -->
            <div class="container bg-[#f8fbfb] dark:bg-[#0D0D0D] py-12 px-4 sm:px-5 md:px-10 lg:px-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div class="col-span-1">
                        <h4 class="text-5xl dark:text-white font-medium mb-6"> Technical Skills </h4>
                        <div class="mb-5">
                            <div class="flex justify-between mb-1">
                                <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6]">Web
                                    Design</span>
                                <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6">85%</span>
                            </div>
                            <div class="w-full bg-[#edf2f2] rounded-full h-1 dark:bg-[#1c1c1c]">
                                <div class="bg-[#FF6464] h-1 rounded-full" style="width: 85%"></div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <div class="flex justify-between mb-1">
                                <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6]">Mobile
                                    App</span>
                                <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6">65%</span>
                            </div>
                            <div class="w-full bg-[#edf2f2] rounded-full h-1 dark:bg-[#1c1c1c]">
                                <div class="bg-[#9272d4] h-1 rounded-full" style="width: 65%"></div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <div class="flex justify-between mb-1">
                                <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6]">FIGMA</span>
                                <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6">75%</span>
                            </div>
                            <div class="w-full bg-[#edf2f2] rounded-full h-1 dark:bg-[#1c1c1c]">
                                <div class="bg-[#5185d4] h-1 rounded-full" style="width: 75%"></div>
                            </div>
                        </div>

                        <div class="mb-5">
                            <div class="flex justify-between mb-1">
                                <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6]">Photoshope</span>
                                <span class=" font-semibold text-[#526377] dark:text-[#A6A6A6">90%</span>
                            </div>
                            <div class="w-full bg-[#edf2f2] rounded-full h-1 dark:bg-[#1c1c1c]">
                                <div class="bg-[#ca56f2] h-1 rounded-full" style="width: 90%"></div>
                            </div>
                        </div>
                    </div>

                    <!-- button group -->
                    <div class="col-span-1">
                        <h4 class="text-5xl dark:text-white font-medium mb-8"> Knowledges </h4>
                        <div class="flex gap-x-3 gap-y-3 md:gap-y-6 md:gap-x-4 flex-wrap">
                            <button class="resume-btn">HTML</button>
                            <button class="resume-btn">CSS</button>
                            <button class="resume-btn">JAVASCRIPT</button>
                            <button class="resume-btn">TYPESCRIPT</button>
                            <button class="resume-btn">C</button>
                            <button class="resume-btn">C++</button>
                            <button class="resume-btn">JAVA</button>
                            <button class="resume-btn">PYTHON</button>
                            <button class="resume-btn">R</button>
                            <button class="resume-btn">PHP</button>
                            <button class="resume-btn">VISUAL BASIC</button>
                            <button class="resume-btn">LARAVEL</button>
                            <button class="resume-btn">CODE IGNITOR</button>
                            <button class="resume-btn">REACT</button>
                            <button class="resume-btn">NEXTJS</button>
                            <button class="resume-btn">NODEJS</button>
                            <button class="resume-btn">REACT NATIVE CLI</button>
                            <button class="resume-btn">EXPRESS JS</button>
                            <button class="resume-btn">BOOTSTRAP</button>
                            <button class="resume-btn">TAILWIND</button>
                            <button class="resume-btn">ALPINE JS</button>
                            <button class="resume-btn">LIVEWIRE</button>
                            <button class="resume-btn">JQUERY</button>
                        </div>
                    </div>
                    <!-- end button group -->
                </div>
            </div>



        </div>
    </section>
    <!-- resume page contant End -->




    <!-- Home page contant start -->
    <div class="bg-white lg:rounded-2xl dark:bg-[#111111]">
        <div data-aos="fade" class="aos-init aos-animate">
            <div class="container px-4 sm:px-5 md:px-10 lg:px-20">
                <div id="contact_section" class="py-12">
                    <h2 class="after-effect after:left-40 mb-[40px] mt-12 lg:mt-0">Contact</h2>
                    <div class="lg:flex gap-x-20">
                        <!-- personal contact information -->
                        <div class="w-full lg:w-[40%] xl:w-[30%] space-y-6">
                            <div
                                class="flex flex-wrap bg-[#fcf4ff] dark:bg-transparent p-[30px] dark:border-[#212425] dark:border-2 gap-2 rounded-xl">
                                <span class="w-8 mt-2">
                                    <img src="/images/img/phone-call.png" alt="icon" class="text-4xl dark:text-white" />
                                </span>
                                <div class="space-y-2">
                                    <p class="text-xl font-semibold dark:text-white"> Phone : </p>
                                    <p class="text-gray-lite text-lg dark:text-[#A6A6A6]"> +91 7697477107 </p>
                                    <p class="text-gray-lite text-lg dark:text-[#A6A6A6]"> +91 8770416202 </p>
                                </div>
                            </div>
                            <div
                                class="flex flex-wrap dark:bg-transparent bg-[#eefbff] p-[30px] dark:border-[#212425] dark:border-2 gap-2 rounded-xl">
                                <span class="w-8 mt-2">
                                    <img src="/images/img/email.png" alt="icon" class="text-4xl dark:text-white" />
                                </span>
                                <div class="space-y-2">
                                    <p class="text-xl font-semibold dark:text-white"> Email : </p>
                                    <p class="text-gray-lite text-lg dark:text-[#A6A6A6]"> rajfekar.123@gmail.com
                                    </p>
                                    <p class="text-gray-lite text-lg dark:text-[#A6A6A6]"> khemrajfekar.123@gmail.com
                                    </p>
                                </div>
                            </div>

                            <div
                                class="flex flex-wrap dark:bg-transparent bg-[#f2f4ff] p-[30px] dark:border-[#212425] dark:border-2 gap-2 rounded-xl">
                                <span class="w-8 mt-2">
                                    <img src="/images/img/map.png" alt="icon" class="text-4xl dark:text-white" />
                                </span>
                                <div class="space-y-2">
                                    <p class="text-xl font-semibold dark:text-white"> Address : </p>
                                    <p class="text-gray-lite text-lg dark:text-[#A6A6A6]"> Shree Dudhadhari Math Mandir
                                    </p>
                                    <p class="text-gray-lite text-lg dark:text-[#A6A6A6]"> Math Para, Raipur, C.G.
                                        INDIA </p>
                                </div>
                            </div>
                        </div>

                        <div class="w-full mt-8 lg:mt-0 lg:w-[60%] xl:w-[70%]">
                            <div data-aos="fade"
                                class="dark:border-[#212425] dark:border-2 mb-16 md:p-[48px] p-4 bg-color-810 rounded-xl dark:bg-[#111111] mb-[30px] md:mb-[60px] aos-init aos-animate">
                                <h3 class="text-4xl">
                                    <span class="text-gray-lite dark:text-[#A6A6A6]">I'm always open to
                                        discussing product</span>
                                    <br />
                                    <span class="font-semibold dark:text-white">design work or
                                        partnerships.</span>
                                </h3>

                                <form id="myForm" action="https://formspree.io/f/mayzeaaj" method="POST">
                                    <!-- name input -->
                                    <div class="relative z-0 w-full mt-[40px] mb-8 group">
                                        <input type="text" id="name" name="name"
                                            class="block autofill:bg-transparent py-2.5 px-0 w-full text-sm text-gray-lite bg-transparent border-0 border-b-[2px] border-[#B5B5B5] appearance-none dark:text-white dark:border-[#333333] dark:focus:border-[#FF6464] focus:outline-none focus:ring-0 focus:border-[#FF6464] peer"
                                            placeholder=" " required="" />
                                        <label for="name"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-color-910 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#FF6464] peer-focus:dark:text-[#FF6464] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">Name
                                            *</label>
                                    </div>

                                    <!-- email input  -->
                                    <div class="relative z-0 w-full mb-8 group">
                                        <input type="email" name="user_email"
                                            class="block autofill:text-red-900 needed py-2.5 px-0 w-full text-sm text-gray-lite bg-transparent border-0 border-b-[2px] border-[#B5B5B5] appearance-none dark:text-white dark:border-[#333333] dark:focus:border-[#FF6464] focus:outline-none focus:ring-0 focus:border-[#5185D4] peer"
                                            placeholder=" " id="user_email" required="" />
                                        <label for="user_email"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-color-910 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#5185D4] peer-focus:dark:text-[#FF6464] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">Email
                                            *</label>
                                    </div>

                                    <!-- massage input -->
                                    <div class="relative z-0 w-full mb-8 group">
                                        <input type="text" name="message"
                                            class="block autofill:bg-yellow-200 py-2.5 px-0 w-full text-sm text-gray-lite bg-transparent border-0 border-b-[2px] border-[#B5B5B5] appearance-none dark:text-white dark:border-[#333333] dark:focus:border-[#FF6464] focus:outline-none focus:ring-0 focus:border-[#CA56F2] peer"
                                            placeholder=" " id="message" required="" />
                                        <label for="message"
                                            class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-color-910 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-[#CA56F2] peer-focus:dark:text-[#FF6464] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-8">Message
                                            *</label>
                                    </div>

                                    <div
                                        class="transition-all duration-300 ease-in-out inline-block hover:bg-gradient-to-r from-[#FA5252] to-[#DD2476] rounded-lg mt-3">
                                        <!-- submit buttons -->
                                        <input type="submit"
                                            class="transition ease-in duration-200 font-semibold cursor-pointer border-color-910 hover:border-transparent px-6 py-2 rounded-lg border-[2px] hover:text-white dark:text-white"
                                            value="Submit" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- footer  start-->
            <footer class="overflow-hidden bg-[#f8fbfb] dark:bg-[#212425] rounded-b-2xl">
                <p class="text-center py-6 text-gray-lite dark:text-color-910"> © All {{date('Y')}} Rights Reserved
                    by <a class="hover:text-[#FA5252] duration-300 transition"
                        href="https://themeforest.net/user/ib-themes" target="_blank" rel="noopener noreferrer">Khemraj
                        Fekar</a>. </p>
            </footer>
            <!-- footer ends -->
        </div>
    </div>

    <script src="/js/main.js"></script>
    <script src="/js/jquary.min.js"></script>

</html>