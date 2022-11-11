<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ 'css/app.css' }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body class="bg-[#F4F4F4]">
    <x-header-index/>
    <div class="xl:px-[150px] px-10">
        <div class="flex flex-wrap-reverse">
            <div class="lg:w-1/2 flex-row my-auto">
                <div class="pt-5">
                    <h1 class="font-bold text-3xl mb-5">DEEPression</h1>
                    <p class="text-justify leading-loose">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptas,
                        voluptatibus est. Doloribus
                        deleniti quas omnis placeat nam consequatur ea, sapiente non perferendis nostrum nesciunt maxime
                        aut. Maiores recusandae aliquid culpa.</p>
                </div>
                <div class="mt-5">
                    <button
                        class="bg-[#007DFE] rounded-full shadow-sm p-2 w-[150px] h-[50px] hover:shadow-slate-500 hover:bg-[#3A7EC5]">
                        <span class="text-white font-semibold">Let Us Help</span>
                    </button>
                </div>
            </div>
            <div class="lg:w-1/2 flex-row">
                <div class="    ">
                    <img src="{{ 'img/home-removebg.png' }}" alt="" class="w-screen">
                </div>
            </div>
        </div>
    </div>
    <div class="xl:px-[150px] px-10">
        <div class="flex flex-wrap">
            <div class="lg:w-1/2 flex-row">
                <div class="    ">
                    {{-- dibelakang gambar --}}
                    {{-- <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                        <path fill="#A2CFFF" d="M46.7,-72.6C57.5,-65.7,61.2,-47.7,65.7,-31.8C70.3,-15.8,75.8,-2.1,75.3,11.8C74.9,25.8,68.6,39.9,58.9,51.1C49.2,62.3,36.2,70.7,22.3,73.7C8.4,76.8,-6.4,74.5,-18.8,68.8C-31.3,63,-41.3,53.7,-51.2,43.6C-61.2,33.5,-71,22.6,-72.1,10.8C-73.3,-1.1,-65.7,-13.8,-59.5,-27.2C-53.4,-40.6,-48.8,-54.6,-39.1,-62C-29.4,-69.4,-14.7,-70.2,1.6,-72.7C18,-75.3,35.9,-79.5,46.7,-72.6Z" transform="translate(100 100)" />
                      </svg> --}}
                    <img src="{{ 'img/depresi-removebg.png' }}" alt="" class="w-screen">
                </div>
            </div>
            <div class="lg:w-1/2 flex-row my-auto">
                <div class="pt-5">
                    <h1 class="font-bold text-3xl mb-5">What Is Depression?</h1>
                    <p class="text-justify leading-loose">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptas,
                        voluptatibus est. Doloribus
                        deleniti quas omnis placeat nam consequatur ea, sapiente non perferendis nostrum nesciunt maxime
                        aut. Maiores recusandae aliquid culpa.</p>
                </div>
                <button class="mt-5 bg-[#A2CFFF] w-[150px] h-[50px] rounded-full">
                    <span class="text-[#007DFE] font-semibold">Learn More</span>
                </button>
            </div>

        </div>
    </div>
    <div class="xl:px-[150px] px-10">
        <div class="text-center">
            <h2 class="text-2xl font-bold py-5">
                About
                <span class="mt-2 mx-auto place-content-center block w-16 h-1 bg-[#007DFE] rounded-md"></span>
            </h2>
        </div>
        <p class="text-justify leading-loose">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis corporis sapiente necessitatibus,
            molestiae voluptatum sequi facere culpa. Commodi accusantium mollitia laboriosam quas? Provident
            exercitationem eaque incidunt dolores aliquam voluptates labore.
        </p>
    </div>
    <div class="xl:px-[150px] px-10">
        <div class="text-center">
            <h2 class="text-2xl font-bold py-5">
                Symptoms
                <span class="mt-2 mx-auto place-content-center block w-16 h-1 bg-[#007DFE] rounded-md"></span>
            </h2>
        </div>

        <div class="flex flex-wrap lg:grid lg:gap-3 grid-flow-col">
            <div class="mt-5 h-52 max-w-screen-sm rounded shadow-xl bg-white">
                <div class="text-center font-semibold">
                    <p class="pt-5">Title</p>
                </div>
                <p class="p-3 text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus et
                    consectetur, non asperiores rem soluta officiis aliquid rerum quisquam recusandae minima, libero nam
                    alias est laborum, tempore voluptate. Blanditiis, est?</p>
                {{-- Dihover --}}
                {{-- <span class="mt-2 mx-auto place-content-center block max-w-screen-sm h-1 bg-[#007DFE] rounded-md bottom-0 hover:duration-75"></span> --}}
            </div>
            <div class="mt-5 h-52 max-w-screen-sm rounded shadow-xl bg-white">
                <div class="text-center font-semibold">
                    <p class="pt-5">Title</p>
                </div>
                <p class="p-3 text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus et
                    consectetur, non asperiores rem soluta officiis aliquid rerum quisquam recusandae minima, libero nam
                    alias est laborum, tempore voluptate. Blanditiis, est?</p>
            </div>
            <div class="mt-5 h-52 max-w-screen-sm rounded shadow-xl bg-white">
                <div class="text-center font-semibold">
                    <p class="pt-5">Title</p>
                </div>
                <p class="p-3 text-justify">Lorem ipsum dolor sit amet co nsectetur, adipisicing elit. Temporibus et
                    consectetur, non asperiores rem soluta officiis aliquid rerum quisquam recusandae minima, libero nam
                    alias est laborum, tempore voluptate. Blanditiis, est?</p>
            </div>
        </div>
    </div>
    <div class="xl:px-[150px] px-10 mt-10">
        <div class="text-center">
            <span class="text-[#007DFE] font-semibold text-xl lg:text-2xl">Depression</span>
            <h1 class="text-xl font-bold text-[#5D7FA2] lg:text-2xl">What Should We Do</h1>
            <span class="mt-2 mx-auto place-content-center block w-16 h-1 bg-[#007DFE] rounded-md"></span>
            <p class="leading-8 text-justify mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
                quae
                doloribus
                consequuntur beatae. Deleniti, molestias! Illum, dolorum numquam nostrum debitis vitae id rem cumque
                eius, iusto, itaque quas quidem alias!</p>
        </div>
        <div class="flex flex-wrap-reverse" data-aos="fade-left">
            <div class="lg:w-1/2 flex-row my-auto">
                <div class="pt-5">
                    <h1 class="font-bold text-3xl mb-5 text-[#5D7FA2]">
                        Visualize A Happy Memory
                    </h1>
                    <p class="text-justify leading-loose">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptas,
                        voluptatibus est. Doloribus
                        deleniti quas omnis placeat nam consequatur ea, sapiente non perferendis nostrum nesciunt maxime
                        aut. Maiores recusandae aliquid culpa.</p>
                </div>
            </div>
            <div class="lg:w-1/2 flex-row">
                <div class="    ">
                    <img src="{{ 'img/home-removebg.png' }}" alt="" class="w-screen">
                </div>
            </div>
        </div>
        <div class="flex flex-wrap" data-aos="fade-right">
            <div class="lg:w-1/2 flex-row">
                <div class="">
                    <img src="{{ 'img/depresi.jpg' }}" alt="" class="w-screen bg-slate-700">
                </div>
            </div>
            <div class="lg:w-1/2 flex-row my-auto">
                <div class="pt-5">
                    <h1 class="font-bold text-3xl mb-5">What Is Depression?</h1>
                    <p class="text-justify leading-loose">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptas,
                        voluptatibus est. Doloribus
                        deleniti quas omnis placeat nam consequatur ea, sapiente non perferendis nostrum nesciunt maxime
                        aut. Maiores recusandae aliquid culpa.</p>
                </div>
            </div>

        </div>
        <div class="flex flex-wrap-reverse" data-aos="fade-left">
            <div class="lg:w-1/2 flex-row my-auto">
                <div class="pt-5">
                    <h1 class="font-bold text-3xl mb-5 text-[#5D7FA2]">Visualize A Happy Memory</h1>
                    <p class="text-justify leading-loose">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Voluptas,
                        voluptatibus est. Doloribus
                        deleniti quas omnis placeat nam consequatur ea, sapiente non perferendis nostrum nesciunt maxime
                        aut. Maiores recusandae aliquid culpa.</p>
                </div>
            </div>
            <div class="lg:w-1/2 flex-row">
                <div class="">
                    <img src="{{ 'img/home-removebg.png' }}" alt="" class="w-screen">
                </div>
            </div>
        </div>
    </div>
    <div class="lg:px-[150px] px-10 mt-10">
        <div class="text-center">
            <h1 class="text-3xl text-[#5D7FA2] font-semibold">Have Question in mind?
            </h1>
            <p class="text-3xl text-[#5D7FA2] font-semibold">Let us help you
            </p>

        </div>
        <div class="text-center mt-4">
            <input type="email"
                class="h-10 w-52 pb-1 pl-4 border rounded-full shadow-lg peer placeholder:text-slate-500 invalid:text-pink-600"
                placeholder="you@example.com">
            <button
                class="rounded-full h-10 w-[120px] bg-[#007DFE] text-white hover:bg-[#3A7EC5] hover:shadow">Send</button>
            <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">Please provide a valid email address
            </p>
        </div>
    </div>
    <footer class="p-3">
        <div class="text-center">
            <p>Copyright 2022</p>
        </div>
    </footer>
</body>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>
