<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Uteq | Welkom</title>

    <!-- Fonts -->
{{--    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">--}}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased">
    <div class="bg-gradient-to-tr from-[#B19E7D] to-[#40A9D1]">
        <div class="hidden md:block z-10 flex gap-2 items-center mb-4 text-white absolute right-24 top-10">
            <a href="#work">Work</a>
            •
            <a href="#about">About</a>
            •
            <a href="#contact">Contact</a>
        </div>

        <div class="relative flex items-top justify-center min-h-screen">
            <fieldset class="text-white font-light items-center border border border-white px-8 md:px-16 mx-8 md:mx-16 py-8 w-full my-8 rounded-xl">
                <legend class="px-4">
                    <div class="flex gap-4 items-center">
                        <img src="/images/logo-small-white.svg" class="mx-auto w-[120px] md:w-[350px] top-[-5px] md:top-[-15px] relative">
                        <div>[Web]technology for U</div>
                    </div>
                </legend>

                <div class="block md:hidden z-10 flex gap-2 items-center mt-4 mb-8 text-white">
                    <a href="#work">WORK</a>
                    •
                    <a href="#about">ABOUT</a>
                    •
                    <a href="#contact">CONTACT</a>
                </div>

                <div class="">
                    <div class="flex flex-col gap-16 md:gap-32 max-w-2xl mx-auto">

                        <div>
                            <h2 class="text-3xl md:text-5xl mb-4 md:leading-[52px] font-serif">
                                Solid online solutions using future proof technology
                            </h2>
                            <div class="text-xl mb-4">We design and build web- sites, shops and applications.</div>
                        </div>

                        <div id="work">
                            <h2 class="text-2xl md:text-4xl mb-4 md:leading-[48px]">Work</h2>
                            <div class="flex flex-col gap-2 opacity-80 text-lg leading-8">
                                <p>A few examples of the products we are proud of.</p>
                            </div>

                            <div class="md:flex gap-16 items-start mt-16">

                                <div class="flex-1 shadow-2xl my-4 md:my-0">
                                    <img src="/images/optocht.webp" />
                                </div>

                                <div class="flex-1">
                                    <div class="text-xl mb-4">
                                        Ticket system
                                    </div>

                                    <div class="flex flex-col gap-2 opacity-80 text-lg leading-8">
                                        <p>We designed and build a ticket system for the Allegorische Optocht of VVV St.Nicolaasga.</p>
                                        <p>This system creates a QR code that will be scanned on entering the event.</p>
                                        <p>The volunteers scanning the QR codes use our web app that directly shows it when the ticket is valid.</p>

                                        <a href="https://optocht.uteq.nl" class="underline text-yellow-100 flex gap-2 items-center" target="_blank">
                                            Ticket system
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="md:flex gap-16 items-start mt-16">

                                <div class="flex-1">
                                    <div class="text-xl mb-4">
                                        Safesent
                                    </div>

                                    <div class="flex flex-col gap-2 opacity-80 text-lg leading-8">
                                        <p>We designed and build a free web application for sending privacy-sensitive files to your accountant.</p>

                                        <a href="https://safesent.nl" class="underline text-yellow-100 flex gap-2 items-center" target="_blank">
                                            Safesent.nl
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                        </a>
                                    </div>
                                </div>

                                <div class="flex-1 shadow-2xl my-4 md:my-0">
                                    <img src="/images/safesent.webp" />
                                </div>
                            </div>
                        </div>

                        <div id="about">
                            <h2 class="text-2xl md:text-4xl mb-4 md:leading-[48px]">About Uteq</h2>
                            <div class="flex flex-col gap-2 opacity-80 text-lg leading-8">
                                <p>Designing and building things that people love to use is what makes our heart tick the most.</p>
                                <p>Our main focus is building future proof systems. Sometimes this means reinventing the wheel, making it function just a bit better.</p>
                                <p>You might say that we love to try out new stuff. This has its payoffs, but we believe in the future. We rather create something small and new than something big that is old before it hits the market.</p>
                            </div>

                            <div class="flex flex-col md:grid grid-cols-2 gap-4 mt-8">
                                <div>
                                    <h3 class="text-xl mb-2">Our specialism</h3>
                                    <ul class="opacity-80 flex flex-col gap-1 pl-4 border-l">
                                        <li> Automating your work </li>
                                        <li> From Excelsheets to application </li>
                                        <li> Designing future proof technology </li>
                                        <li> Solving the unsolvable </li>
                                        <li> Using Laravel Framework (PHP) </li>
{{--                                        <li> Being your <a href="https://www.wikiwand.com/en/Q_(James_Bond)" class="text-success" target="_blank">Q</a> </li>--}}
                                    </ul>
                                </div>

                                <div>
                                    <h3 class="text-xl mb-2">Our manifest</h3>
                                    <ul class="opacity-80 flex flex-col gap-1 pl-4 border-l">
                                        <li> Quality before deadlines </li>
                                        <li> Implicit design over documentation </li>
                                        <li> Clean and simple over complex </li>
                                        <li> Macro before micro </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="text-lg mt-8">
                                To summarise, might we design<br /> and build something really cool for you?
                            </div>
                            <a href="mailto:info@uteq.nl?subject=Lets%20talk%20about%20my%20project%21&body=Tell%20us%20as%20much%20as%20you%20can%20about%0A-%20your%20online%20project%0A-%20your%20planning%0A-%20your%20budget%0A-%20%E2%80%A6%0A%0AJust%20about%20anything%20that%20gives%20a%20good%20start%21"
                               class="inline-block border p-4 rounded mt-4 inline-flex gap-2 opacity-80"
                            >
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                Let's start talking
                            </a>
                        </div>

                        <div id="contact">
                            <div class="text-dark mt-4">
                                <h2 class="text-2xl md:text-4xl mb-4">Contact</h2>

                                <div class="max-w-lg flex flex-col gap-1">
                                    <div class="flex gap-2">
                                        <div class="opacity-60 w-12">EMAIL</div>
                                        <div>info@uteq.nl</div>
                                    </div>

                                    <div class="flex gap-2">
                                        <div class="opacity-60 w-12">VAT</div>
                                        <div>NL003362950B45</div>
                                    </div>

                                    <div class="flex gap-2">
                                        <div class="opacity-60 w-12">IBAN</div>
                                        <div>NL26 KNAB 0401 7906 06</div>
                                    </div>

                                    <div class="flex gap-2">
                                        <div class="opacity-60 w-12">COC</div>
                                        <div>53331540</div>
                                    </div>

                                    <div class="flex gap-2">
                                        <div class="opacity-60 w-12">WORK</div>
                                        <div>
                                            <a href="https://github.com/uteq" target="_blank" class="flex gap-1 items-center">
                                                Github
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</body>
</html>
