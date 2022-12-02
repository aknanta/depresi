<div>
    <nav class="pt-8 top-0 left-0">
        <div class="px-7 xl:px-[150px] 3xl:px-[300px] 4xl:px-[400px]">
            <div class="bg-light px-6 py-4 w-full rounded-md backdrop-blur-3xl lg:bg-transparent lg:px-0">
                <div class="flex flex-col lg:flex-row w-full place-content-between lg:place-items-center">
                    <div class="flex justify-between">
                        <div class="select-none cursor-pointer">
                            <div class="w-fit h-fit">
                                <span>LOGO</span>
                            </div>
                        </div>
                        <div class="lg:hidden space-x-2 block" id="hamburger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-align-justify cursor-pointer">
                                <line x1="21" y1="10" x2="3" y2="10"></line>
                                <line x1="21" y1="6" x2="3" y2="6"></line>
                                <line x1="21" y1="14" x2="3" y2="14"></line>
                                <line x1="21" y1="18" x2="3" y2="18"></line>
                            </svg>
                        </div>
                    </div>
                    <div class="space-y-5 mt-4 lg:mt-0 lg:space-y-0 lg:space-x-16 lg:flex lg:place-items-center hidden">
                        <a class="text-base text-black select-none hover:text-white font-semibold cursor-pointer" href="{{ '/' }}">
                            Home</a>
                        <a class="text-base text-black select-none hover:text-white font-semibold cursor-pointer" href="{{ 'about' }}">
                            About</a>
                        <a class="text-base text-black select-none hover:text-white font-semibold cursor-pointer" href="{{ '/konsultasi-form' }}">
                            Services</a>
                    </div>
                    <div class="hidden lg:block mt-5 lg:mt-0">
                        <button
                            class="px-8 py-2.5 text-sm font-medium bg-buttonLight text-black hover:brightness-90 rounded transition-all select-none cursor-pointer">
                        <a href="{{ '/login' }}">Log In</a>
                        </button>
                    </div>


                </div>

            </div>
        </div>
    </nav>
</div>
