<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <nav>
        <div>

        </div>
    </nav>
    <nav class="px-20 py-5 h-40  bg-purple-900 text-white shadow md:flex md:items-center md:justify-between items">
        <div class="flex justify-between items-center">
            <span class="text-4xl md:-mt-14 -mt-0 font-[Poppins} cursor-pointer md:text-4xl text-lg">RIT RAIPUR</span>
            <span class="text-3xl cursor-pointer md:hidden block mx-2 ">
                <a onclick="Menu()"> <i id="menu" class="fa-solid fa-list"></i></a>
            </span>

        </div>
        <ul class="flex md:-mt-10 -mt-0">
            <li class="mx-4 my-6  md:my-0"><a href="#" class="text-3xl mt-2 hover:text-blue-500 duration-500"><i id="fb"
                        class="fa-brands fa-facebook"></i></a></li>
            <li class="mx-4 my-6  md:my-0"><a href="#" class="text-3xl mt-2 hover:text-cyan-500 duration-500"><i id="tw"
                        class="fa-brands fa-twitter"
                        style=" --fa-bounce-start-scale-x: 1; --fa-bounce-start-scale-y: 1; --fa-bounce-jump-scale-x: 1.5; --fa-bounce-jump-scale-y: 1; --fa-bounce-land-scale-x: 1; --fa-bounce-land-scale-y: 1; ">
                    </i></a></li>
            <li class="mx-4 my-6  md:my-0"><a href="#" class="text-3xl mt-2 hover:text-pink-400 duration-500"><i
                        id="insta" class="fa-brands fa-instagram"></i></a></li>
            <li class="mx-4 my-6  md:my-0"><a href="#" class="text-3xl mt-2 hover:text-green-500 duration-500"><i
                        id="wp" class="fa-brands fa-whatsapp" style="--fa-flip-x: 1; --fa-flip-y: 0;"></i></a></li>
            <!-- <li>rajfekar.123@gmail.com</li> -->
        </ul>

        <ul id="menulist"
            class="mt-24 md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-purple-900 w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500 ">
            <li class="mx-4 my-6 mt-10  md:my-0"><a href="#"
                    class="text-xl mt-10 hover:bg-purp hover:text-black duration-500 uppercase hover:bg-white"> Home</a>
            </li>
            <li class="mx-4 my-6 mt-10  md:my-0"><a href="{{url('/rit/login')}}"
                    class="text-xl  hover:text-black duration-500 uppercase hover:bg-white"> Login</a></li>
            <li class="mx-4 my-6 mt-10  md:my-0"><a href="#"
                    class="text-xl mt-10 hover:text-black duration-500 uppercase hover:bg-white"> Gallery</a></li>
            {{-- <li class="mx-4 my-6 mt-10  md:my-0"><a href="#"
                    class="text-xl mt-10 hover:text-black duration-500 uppercase hover:bg-white"> Faculties</a></li>
            --}}
            <li class="mx-4 my-6 mt-10  md:my-0"><a href="#"
                    class="text-xl mt-10 hover:text-black duration-500 uppercase hover:bg-white"> Press Release</a></li>
            <li id="aboutus" class="mx-4 my-6 mt-10  md:my-0"><a href="#"
                    class="text-xl mt-10 hover:text-black duration-500 uppercase hover:bg-white"> About</a></li>
            <li id="contactus" class="mx-4 my-6 mt-10  md:my-0"><a href="#"
                    class="text-xl mt-10 hover:text-black duration-500 uppercase hover:bg-white"> Contact</a></li>
        </ul>

    </nav>
</div>