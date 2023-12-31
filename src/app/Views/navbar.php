<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SkillHub</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="<?= base_url() ?>/css/app.css?v=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
</head>

<body>

    <div class="w-screen h-20 bg-ref-primary-primary95 justify-evenly inline-flex items-center fixed z-30 left-0">
        <button class='flex w-20 h-20 justify-center items-center' onclick="window.location.href = '/courses ';">
            <div class="origin-center rotate-[-15deg] w-10 h-10 relative">
                <img class="w-10 h-10 left-[0.02px] top-[0.08px] absolute origin-top-left" src="/assets/BrandLogo.png" />
            </div>
        </button>
        <div class='lg:w-1/2 md:w-1/3 sm'></div>
        <div class='flex inline-flex gap-40'>
            <button class="h-14 px-1 flex flex-col py-2 rounded-2xl justify-center items-center hover:bg-ref-primary-primary90"onclick="window.location.href = '/courses';">
                <div class=" rounded-full justify-center items-center inline-flex">
    
                    <div class="px-4 py-1 justify-center items-center flex">
                        <div class="w-6 h-6 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.0933 13.27L20.8233 19L19.3333 20.49L13.6033 14.76C12.5333 15.53 11.2433 16 9.83325 16C6.24325 16 3.33325 13.09 3.33325 9.5C3.33325 5.91 6.24325 3 9.83325 3C13.4233 3 16.3333 5.91 16.3333 9.5C16.3333 10.91 15.8633 12.2 15.0933 13.27ZM9.83325 5C7.34325 5 5.33325 7.01 5.33325 9.5C5.33325 11.99 7.34325 14 9.83325 14C12.3233 14 14.3333 11.99 14.3333 9.5C14.3333 7.01 12.3233 5 9.83325 5Z"
                                    fill="#1D192B" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="text-center text-zinc-900 text-xs font-semibold  leading-none tracking-wide">
                    Explore</div>
            </button>
            <button class="h-14 px-1 flex flex-col py-2 rounded-2xl justify-center items-center hover:bg-ref-primary-primary90"onclick="window.location.href = '/mycourses';">
                <div class=" rounded-full justify-center items-center inline-flex">
                    <div class="px-4 py-1 justify-center items-center flex">
                        <div class="w-6 h-6 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M9.17 6L11.17 8H20V18H4V6H9.17ZM10 4H4C2.9 4 2.01 4.9 2.01 6L2 18C2 19.1 2.9 20 4 20H20C21.1 20 22 19.1 22 18V8C22 6.9 21.1 6 20 6H12L10 4Z"
                                    fill="#1D192B" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="text-center text-zinc-900 text-xs font-semibold  leading-none tracking-wide">
                    My Courses</div>
            </button>
            <button class="h-14 px-1 flex flex-col py-2 rounded-2xl justify-center items-center hover:bg-ref-primary-primary90"onclick="window.location.href = '/schedule';">
                <div class=" rounded-full justify-center items-center inline-flex">
    
                    <div class="px-4 py-1 justify-center items-center flex">
                        <div class="w-6 h-6 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M19 4H18V2H16V4H8V2H6V4H5C3.89 4 3 4.9 3 6V20C3 21.1 3.89 22 5 22H19C20.1 22 21 21.1 21 20V6C21 4.9 20.1 4 19 4ZM19 20H5V9H19V20ZM6.5 13C6.5 11.62 7.62 10.5 9 10.5C10.38 10.5 11.5 11.62 11.5 13C11.5 14.38 10.38 15.5 9 15.5C7.62 15.5 6.5 14.38 6.5 13Z"
                                    fill="#49454F" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="text-center text-zinc-900 text-xs font-semibold  leading-none tracking-wide">
                    Schedule</div>
            </button>
            <button class="h-14 px-1 flex flex-col py-1 gap-1 rounded-2xl justify-center items-center hover:bg-ref-primary-primary90"onclick="window.location.href = '/';">
                <div class=" rounded-full justify-center items-center inline-flex">
    
                    <div class="px-4 py-1 justify-center items-center flex">
                        <div class="w-6 h-6 relative">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12 4C9.79 4 8 5.79 8 8C8 10.21 9.79 12 12 12C14.21 12 16 10.21 16 8C16 5.79 14.21 4 12 4ZM14 8C14 6.9 13.1 6 12 6C10.9 6 10 6.9 10 8C10 9.1 10.9 10 12 10C13.1 10 14 9.1 14 8ZM18 17C17.8 16.29 14.7 15 12 15C9.3 15 6.2 16.29 6 17.01V18H18V17ZM4 17C4 14.34 9.33 13 12 13C14.67 13 20 14.34 20 17V20H4V17Z"
                                    fill="#49454F" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="text-center text-zinc-900 text-xs font-semibold  leading-none tracking-wide">
                    Profile</div>
            </button>
            <button 
                    onclick="window.location.href = '/logout';"
                    class="flex flex-col py-2 rounded-full justify-center items-center inline-flex hover:bg-fuchsia-100">
                        <div class="px-4 py-1 justify-center items-center inline-flex">
                            <div class="w-6 h-6 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M19 7V11H6.83L10.41 7.41L9 6L3 12L9 18L10.41 16.59L6.83 13H21V7H19Z" fill="#49454F" />
                                </svg>
                            </div>
                        </div>
                        <div class="self-stretch text-center text-zinc-700 text-xs font-sans font-semibold leading-none tracking-wide">Logout</div>
                    </button>
        </div>
    </div>

</body>

</html>