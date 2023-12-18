v
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Learn Sphere</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" href="<?= base_url() ?>/css/app.css?v=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
</head>

<body>
    <div class="w-full h-full p-16 pt-20 flex-col justify-start items-start gap-6 inline-flex">
        <div class="self-stretch text-black text-4xl font-medium leading-10">Explore Course</div>
        <div class="w-full relative mt-2 rounded-md shadow-sm">
            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.76 13.27L20.49 19L19 20.49L13.27 14.76C12.2 15.53 10.91 16 9.5 16C5.91 16 3 13.09 3 9.5C3 5.91 5.91 3 9.5 3C13.09 3 16 5.91 16 9.5C16 10.91 15.53 12.2 14.76 13.27ZM9.5 5C7.01 5 5 7.01 5 9.5C5 11.99 7.01 14 9.5 14C11.99 14 14 11.99 14 9.5C14 7.01 11.99 5 9.5 5Z" fill="#49454F" />
                </svg>
            </div>
            <input type="text" name="email" id="email" class="bg-gray-200 block w-full rounded-3xl py-1.5 pl-12 pr-0 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-zinc-600 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 h-12" placeholder="Hinted search text">
        </div>


        <?php if (is_array($courses)) : ?>
            <div class="flex flex-wrap lg:flex-no-wrap justify-start mx-6 my-10 py-4 gap-9">
                <?php foreach ($courses as $courseItem) : ?>
                    <div class="w-96 h-full bg-fuchsia-50 rounded-xl justify-start items-start inline-flex">
                        <div class="w-96 h-full rounded-xl border border-stone-300 flex-col justify-center items-center inline-flex">
                            <div class="self-stretch grow shrink basis-0 flex-col justify-start items-center inline-flex">
                                <div class="self-stretch h-16 pl-6 pr-1 py-3 justify-start items-center inline-flex">
                                    <div class="grow shrink basis-0 h-11 justify-start items-center gap-4 flex">
                                        <div class="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                                            <div class="self-stretch font-bold text-zinc-900 text-base font-sans  leading-normal tracking-tight"><?= $courseItem['provider_name']; ?></div>
                                            <div class="text-zinc-900 text-sm font-sans font-normal  leading-tight tracking-tight">Bandung</div>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($courseItem['url_img'] != null) : ?>
                                    <div class="w-96 h-40  rounded-lg justify-center items-center inline-flex overflow-hidden">
                                        <img class="w-full h-auto" src="<?= $courseItem['url_img']; ?>" />
                                    </div>
                                <?php else : ?>
                                    <div class="w-96 h-40  rounded-lg justify-center items-center inline-flex overflow-hidden">
                                        <img class="w-full h-auto" src="assets/Media.png" />
                                    </div>
                                <?php endif ?>
                                <div class="self-stretch h-60 p-4 flex-col justify-start items-start gap-8 flex">
                                    <div class="self-stretch h-36 flex-col justify-start items-start gap-3 flex">
                                        <div class="self-stretch h-11 flex-col justify-start items-start flex">
                                            <div class="w-80 text-zinc-900 text-base font-sans font-bold  leading-normal tracking-wide"><?= $courseItem['name']; ?></div>
                                        </div>
                                        <div class="rounded-lg border border-stone-300 justify-center items-center inline-flex">
                                            <div class="w-fit px-4 py-1.5 justify-center items-center gap-2 flex">
                                                <div class="text-center text-light-primary text-sm  font-medium  leading-tight tracking-tight">Rp <?= number_format($courseItem['price'],0,',','.'); ?></div>
                                            </div>
                                        </div>
                                        <div class="self-stretch line-clamp-2 text-zinc-700 text-sm font-sans font-normal  leading-tight tracking-tight"><?= $courseItem['desc'] ?></div>
                                    </div>
                                    <div class="self-stretch justify-end items-start gap-2 inline-flex">
                                        <a class="h-10 rounded-full border border-light-primary flex-col justify-center items-center gap-2 inline-flex" href="/courses/<?= $courseItem['id'] ?>/edit">
                                            <div class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
                                                <div class="text-center text-light-primary text-sm font-sans font-medium  leading-tight tracking-tight">Edit</div>
                                            </div>
                                        </a>
                                        <a class="h-10 bg-light-primary rounded-full flex-col justify-center items-center gap-2 inline-flex" href="/courses/<?= $courseItem['id'] ?>">
                                            <div class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
                                                <div class="text-center text-white text-sm font-sans font-medium  leading-tight tracking-tight">View</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?> 
            </div>
        <?php else : ?>
            <h3>No Courses</h3>
            <p>Unable to find any courses for you.</p>
        <?php endif ?>




    </div>

</body>

</html>