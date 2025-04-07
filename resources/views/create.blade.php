<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Contact Form</title>
</head>

<body>
    <div id="contact-us" class="overflow-hidden bg-white py-6 px-4 dark:bg-slate-900 sm:px-6 lg:px-8 lg:py-8">
        <div class="relative mx-auto max-w-xl">
            <svg class="absolute left-full translate-x-1/2 transform" width="404" height="404" fill="none"
                viewBox="0 0 404 404" aria-hidden="true">
                <defs>
                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200 dark:text-slate-600"
                            fill="currentColor"></rect>
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)"></rect>
            </svg>
            <svg class="absolute right-full bottom-0 -translate-x-1/2 transform" width="404" height="404"
                fill="none" viewBox="0 0 404 404" aria-hidden="true">
                <defs>
                    <pattern id="85737c0e-0916-41d7-917f-596dc7edfa27" x="0" y="0" width="20" height="20"
                        patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200 dark:text-slate-800"
                            fill="currentColor"></rect>
                    </pattern>
                </defs>
                <rect width="404" height="404" fill="url(#85737c0e-0916-41d7-917f-596dc7edfa27)"></rect>
            </svg>
            <div class="text-center">
                <span class="flex justify-center"><img src="/logo.jpg" class="w-20 rounded" alt=""></span>
                <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 dark:text-slate-200 sm:text-4xl">Kace
                    Developerz Contact Us
                </h2>
                <p class="mt-4 text-lg leading-6 text-gray-500 dark:text-slate-400">Please use the form below to contact
                    us.
                    Thank you!
                </p>
                @if(session('success'))
                    <div class="mt-5 flex items-center justify-between p-5 leading-normal text-green-600 bg-green-100 rounded-lg"
                        role="alert">
                        <p>{{ session('success') }}</p>

                        <svg onclick="return this.parentNode.remove();"
                            class="inline w-4 h-4 fill-current ml-2 hover:opacity-80 cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464zM359.5 133.7c-10.11-8.578-25.28-7.297-33.83 2.828L256 218.8L186.3 136.5C177.8 126.4 162.6 125.1 152.5 133.7C142.4 142.2 141.1 157.4 149.7 167.5L224.6 256l-74.88 88.5c-8.562 10.11-7.297 25.27 2.828 33.83C157 382.1 162.5 384 167.1 384c6.812 0 13.59-2.891 18.34-8.5L256 293.2l69.67 82.34C330.4 381.1 337.2 384 344 384c5.469 0 10.98-1.859 15.48-5.672c10.12-8.562 11.39-23.72 2.828-33.83L287.4 256l74.88-88.5C370.9 157.4 369.6 142.2 359.5 133.7z" />
                        </svg>
                    </div>
                @endif
                @if(session('error'))
                    <div class="mt-5 flex items-center justify-between p-5 leading-normal text-red-600 bg-red-100 rounded-lg"
                        role="alert">
                        <p>{{ session('error') }}</p>

                        <svg onclick="return this.parentNode.remove();"
                            class="inline w-4 h-4 fill-current ml-2 hover:opacity-80 cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 464c-114.7 0-208-93.31-208-208S141.3 48 256 48s208 93.31 208 208S370.7 464 256 464zM359.5 133.7c-10.11-8.578-25.28-7.297-33.83 2.828L256 218.8L186.3 136.5C177.8 126.4 162.6 125.1 152.5 133.7C142.4 142.2 141.1 157.4 149.7 167.5L224.6 256l-74.88 88.5c-8.562 10.11-7.297 25.27 2.828 33.83C157 382.1 162.5 384 167.1 384c6.812 0 13.59-2.891 18.34-8.5L256 293.2l69.67 82.34C330.4 381.1 337.2 384 344 384c5.469 0 10.98-1.859 15.48-5.672c10.12-8.562 11.39-23.72 2.828-33.83L287.4 256l74.88-88.5C370.9 157.4 369.6 142.2 359.5 133.7z" />
                        </svg>
                    </div>
                @endif
            </div>
            <div class="mt-12">
                <form action="{{ route('kace.contact') }}" method="POST"
                    class="grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:gap-x-8">
                    @csrf
                    <div class="sm:col-span-2">
                        <label for="name"
                            class="block text-sm font-medium text-gray-700 dark:text-slate-400">Name</label>
                        <div class="mt-1">
                            <input name="name" type="text" id="name" autocomplete="organization"
                                class="border border-gray-300 block w-full rounded-md py-3 px-4 shadow-sm focus:border-sky-500 focus:ring-sky-500 dark:border-white/5 dark:bg-slate-700/50 dark:text-white">
                        </div>
                        @error('name')
                            <div class=" text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email"
                            class="block text-sm font-medium text-gray-700 dark:text-slate-400">Email</label>
                        <div class="mt-1">
                            <input name="email" id="email" type="email" autocomplete="email"
                                class="border border-gray-300 block w-full rounded-md py-3 px-4 shadow-sm focus:border-sky-500 focus:ring-sky-500 dark:border-white/5 dark:bg-slate-700/50 dark:text-white">
                        </div>
                        @error('email')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="subject"
                            class="block text-sm font-medium text-gray-700 dark:text-slate-400">Subject</label>
                        <div class="mt-1">
                            <input name="subject" id="subject" type="text" autocomplete="subject"
                                class="border border-gray-300 block w-full rounded-md py-3 px-4 shadow-sm focus:border-sky-500 focus:ring-sky-500 dark:border-white/5 dark:bg-slate-700/50 dark:text-white">
                        </div>
                        @error('subject')
                            <div class="text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message"
                            class="block text-sm font-medium text-gray-700 dark:text-slate-400">Message</label>
                        <div class="mt-1">
                            <textarea name="message" id="message" rows="4"
                                class="border border-gray-300 block w-full rounded-md py-3 px-4 shadow-sm focus:border-sky-500 focus:ring-sky-500 dark:border-white/5 dark:bg-slate-700/50 dark:text-white"></textarea>
                        </div>
                        @error('message')
                            <div class=" text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex justify-end sm:col-span-2">
                        <button type="submit"
                            class="inline-flex items-center rounded-md px-4 py-2 font-medium focus:outline-none focus-visible:ring focus-visible:ring-sky-500 shadow-sm sm:text-sm transition-colors duration-75 text-sky-500 border border-sky-500 hover:bg-sky-50 active:bg-sky-100 disabled:bg-sky-100 dark:hover:bg-gray-900 dark:active:bg-gray-800 dark:disabled:bg-gray-800 disabled:cursor-not-allowed">
                            <span>Send Message</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
