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


        <div class="grid grid-cols-3 justify-evenly items-center w-full my-3 py-4 px-5 gap-9">
            <div class="w-96 h-full bg-fuchsia-50 rounded-xl justify-start items-start inline-flex">
                <div class="w-96 h-full rounded-xl border border-stone-300 flex-col justify-center items-center inline-flex">
                    <div class="self-stretch grow shrink basis-0 flex-col justify-start items-center inline-flex">
                        <div class="self-stretch h-16 pl-6 pr-1 py-3 justify-start items-center inline-flex">
                            <div class="grow shrink basis-0 h-11 justify-start items-center gap-4 flex">
                                <div class="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                                    <div class="self-stretch text-zinc-900 text-base font-medium  leading-normal tracking-tight">Company Name</div>
                                    <div class="text-zinc-900 text-sm font-normal  leading-tight tracking-tight">Bandung</div>
                                </div>
                            </div>
                        </div>
                        <div class="w-96 h-40 justify-center items-center inline-flex">
                            <img class="w-96 h-40" src="assets/Media.png" />
                        </div>
                        <div class="self-stretch h-60 p-4 flex-col justify-start items-start gap-8 flex">
                            <div class="self-stretch h-36 flex-col justify-start items-start gap-3 flex">
                                <div class="self-stretch h-11 flex-col justify-start items-start flex">
                                    <div class="w-80 text-zinc-900 text-base font-normal  leading-normal tracking-wide">Course Bela Diri A</div>
                                    <div class="w-80 text-zinc-700 text-sm font-normal  leading-tight tracking-tight">Kamis, Jumat</div>
                                </div>
                                <div class="rounded-lg border border-stone-300 justify-center items-center inline-flex">
                                    <div class="w-24 px-4 py-1.5 justify-center items-center gap-2 flex">
                                        <div class="text-center text-light-primary text-sm font-medium  leading-tight tracking-tight">Rp 28.000</div>
                                    </div>
                                </div>
                                <div class="self-stretch line-clamp-2 text-zinc-700 text-sm font-normal  leading-tight tracking-tight">Pencak Silat adalah seni bela diri yang tak hanya mengasah kekuatan fisik, tapi juga memperdalam koneksi spiritual dan kultural. Melalui kursus ini, Anda tak hanya akan menguasai teknik-teknik bertarung yang efektif, tetapi juga akan merasakan pertumbuhan dalam disiplin diri, kepercayaan diri, serta pemahaman mendalam akan warisan budaya yang kaya. Bergabunglah dalam kursus ini untuk mengalami transformasi tidak hanya dalam kemampuan fisik, tetapi juga dalam jiwa dan identitas budaya.</div>
                            </div>
                            <div class="self-stretch justify-end items-start gap-2 inline-flex">
                                <div class="h-10 rounded-full border border-light-primary flex-col justify-center items-center gap-2 inline-flex">
                                    <div class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
                                        <div class="text-center text-light-primary text-sm font-medium  leading-tight tracking-tight">Enroll</div>
                                    </div>
                                </div>
                                <div class="h-10 bg-light-primary rounded-full flex-col justify-center items-center gap-2 inline-flex">
                                    <div class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
                                        <div class="text-center text-white text-sm font-medium  leading-tight tracking-tight">View</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="w-96 h-full bg-fuchsia-50 rounded-xl justify-start items-start inline-flex">
                <div class="w-96 h-full rounded-xl border border-stone-300 flex-col justify-center items-center inline-flex">
                    <div class="self-stretch grow shrink basis-0 flex-col justify-start items-center inline-flex">
                        <div class="self-stretch h-16 pl-6 pr-1 py-3 justify-start items-center inline-flex">
                            <div class="grow shrink basis-0 h-11 justify-start items-center gap-4 flex">
                                <div class="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                                    <div class="self-stretch text-zinc-900 text-base font-medium  leading-normal tracking-tight">Company Name</div>
                                    <div class="text-zinc-900 text-sm font-normal  leading-tight tracking-tight">Bandung</div>
                                </div>
                            </div>
                        </div>
                        <div class="w-96 h-40 justify-center items-center inline-flex">
                            <img class="w-96 h-40" src="assets/Media.png" />
                        </div>
                        <div class="self-stretch h-60 p-4 flex-col justify-start items-start gap-8 flex">
                            <div class="self-stretch h-36 flex-col justify-start items-start gap-3 flex">
                                <div class="self-stretch h-11 flex-col justify-start items-start flex">
                                    <div class="w-80 text-zinc-900 text-base font-normal  leading-normal tracking-wide">Course Bela Diri A</div>
                                    <div class="w-80 text-zinc-700 text-sm font-normal  leading-tight tracking-tight">Kamis, Jumat</div>
                                </div>
                                <div class="rounded-lg border border-stone-300 justify-center items-center inline-flex">
                                    <div class="w-24 px-4 py-1.5 justify-center items-center gap-2 flex">
                                        <div class="text-center text-light-primary text-sm font-medium  leading-tight tracking-tight">Rp 28.000</div>
                                    </div>
                                </div>
                                <div class="self-stretch line-clamp-2 text-zinc-700 text-sm font-normal  leading-tight tracking-tight">Pencak Silat adalah seni bela diri yang tak hanya mengasah kekuatan fisik, tapi juga memperdalam koneksi spiritual dan kultural. Melalui kursus ini, Anda tak hanya akan menguasai teknik-teknik bertarung yang efektif, tetapi juga akan merasakan pertumbuhan dalam disiplin diri, kepercayaan diri, serta pemahaman mendalam akan warisan budaya yang kaya. Bergabunglah dalam kursus ini untuk mengalami transformasi tidak hanya dalam kemampuan fisik, tetapi juga dalam jiwa dan identitas budaya.</div>
                            </div>
                            <div class="self-stretch justify-end items-start gap-2 inline-flex">
                                <div class="h-10 rounded-full border border-light-primary flex-col justify-center items-center gap-2 inline-flex">
                                    <div class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
                                        <div class="text-center text-light-primary text-sm font-medium  leading-tight tracking-tight">Enroll</div>
                                    </div>
                                </div>
                                <div class="h-10 bg-light-primary rounded-full flex-col justify-center items-center gap-2 inline-flex">
                                    <div class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
                                        <div class="text-center text-white text-sm font-medium  leading-tight tracking-tight">View</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="w-96 h-96 bg-fuchsia-50 rounded-xl border border-stone-300 flex-col justify-center items-center inline-flex">
                    <div class="w-96 h-96 p-2.5"></div>
                </div> -->
            </div>


            <div class="w-96 h-full bg-fuchsia-50 rounded-xl justify-start items-start inline-flex">
                <div class="w-96 h-full rounded-xl border border-stone-300 flex-col justify-center items-center inline-flex">
                    <div class="self-stretch grow shrink basis-0 flex-col justify-start items-center inline-flex">
                        <div class="self-stretch h-16 pl-6 pr-1 py-3 justify-start items-center inline-flex">
                            <div class="grow shrink basis-0 h-11 justify-start items-center gap-4 flex">
                                <div class="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                                    <div class="self-stretch text-zinc-900 text-base font-medium  leading-normal tracking-tight">Company Name</div>
                                    <div class="text-zinc-900 text-sm font-normal  leading-tight tracking-tight">Bandung</div>
                                </div>
                            </div>
                        </div>
                        <div class="w-96 h-40 justify-center items-center inline-flex">
                            <img class="w-96 h-40" src="assets/Media.png" />
                        </div>
                        <div class="self-stretch h-60 p-4 flex-col justify-start items-start gap-8 flex">
                            <div class="self-stretch h-36 flex-col justify-start items-start gap-3 flex">
                                <div class="self-stretch h-11 flex-col justify-start items-start flex">
                                    <div class="w-80 text-zinc-900 text-base font-normal  leading-normal tracking-wide">Course Bela Diri A</div>
                                    <div class="w-80 text-zinc-700 text-sm font-normal  leading-tight tracking-tight">Kamis, Jumat</div>
                                </div>
                                <div class="rounded-lg border border-stone-300 justify-center items-center inline-flex">
                                    <div class="w-24 px-4 py-1.5 justify-center items-center gap-2 flex">
                                        <div class="text-center text-light-primary text-sm font-medium  leading-tight tracking-tight">Rp 28.000</div>
                                    </div>
                                </div>
                                <div class="self-stretch line-clamp-2 text-zinc-700 text-sm font-normal  leading-tight tracking-tight">Pencak Silat adalah seni bela diri yang tak hanya mengasah kekuatan fisik, tapi juga memperdalam koneksi spiritual dan kultural. Melalui kursus ini, Anda tak hanya akan menguasai teknik-teknik bertarung yang efektif, tetapi juga akan merasakan pertumbuhan dalam disiplin diri, kepercayaan diri, serta pemahaman mendalam akan warisan budaya yang kaya. Bergabunglah dalam kursus ini untuk mengalami transformasi tidak hanya dalam kemampuan fisik, tetapi juga dalam jiwa dan identitas budaya.</div>
                            </div>
                            <div class="self-stretch justify-end items-start gap-2 inline-flex">
                                <div class="h-10 rounded-full border border-light-primary flex-col justify-center items-center gap-2 inline-flex">
                                    <div class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
                                        <div class="text-center text-light-primary text-sm font-medium  leading-tight tracking-tight">Enroll</div>
                                    </div>
                                </div>
                                <div class="h-10 bg-light-primary rounded-full flex-col justify-center items-center gap-2 inline-flex">
                                    <div class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
                                        <div class="text-center text-white text-sm font-medium  leading-tight tracking-tight">View</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="w-96 h-96 bg-fuchsia-50 rounded-xl border border-stone-300 flex-col justify-center items-center inline-flex">
                    <div class="w-96 h-96 p-2.5"></div>
                </div> -->
            </div>


            <div class="w-96 h-full bg-fuchsia-50 rounded-xl justify-start items-start inline-flex">
                <div class="w-96 h-full rounded-xl border border-stone-300 flex-col justify-center items-center inline-flex">
                    <div class="self-stretch grow shrink basis-0 flex-col justify-start items-center inline-flex">
                        <div class="self-stretch h-16 pl-6 pr-1 py-3 justify-start items-center inline-flex">
                            <div class="grow shrink basis-0 h-11 justify-start items-center gap-4 flex">
                                <div class="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                                    <div class="self-stretch text-zinc-900 text-base font-medium  leading-normal tracking-tight">Company Name</div>
                                    <div class="text-zinc-900 text-sm font-normal  leading-tight tracking-tight">Bandung</div>
                                </div>
                            </div>
                        </div>
                        <div class="w-96 h-40 justify-center items-center inline-flex">
                            <img class="w-96 h-40" src="assets/Media.png" />
                        </div>
                        <div class="self-stretch h-60 p-4 flex-col justify-start items-start gap-8 flex">
                            <div class="self-stretch h-36 flex-col justify-start items-start gap-3 flex">
                                <div class="self-stretch h-11 flex-col justify-start items-start flex">
                                    <div class="w-80 text-zinc-900 text-base font-normal  leading-normal tracking-wide">Course Bela Diri A</div>
                                    <div class="w-80 text-zinc-700 text-sm font-normal  leading-tight tracking-tight">Kamis, Jumat</div>
                                </div>
                                <div class="rounded-lg border border-stone-300 justify-center items-center inline-flex">
                                    <div class="w-24 px-4 py-1.5 justify-center items-center gap-2 flex">
                                        <div class="text-center text-light-primary text-sm font-medium  leading-tight tracking-tight">Rp 28.000</div>
                                    </div>
                                </div>
                                <div class="self-stretch line-clamp-2 text-zinc-700 text-sm font-normal  leading-tight tracking-tight">Pencak Silat adalah seni bela diri yang tak hanya mengasah kekuatan fisik, tapi juga memperdalam koneksi spiritual dan kultural. Melalui kursus ini, Anda tak hanya akan menguasai teknik-teknik bertarung yang efektif, tetapi juga akan merasakan pertumbuhan dalam disiplin diri, kepercayaan diri, serta pemahaman mendalam akan warisan budaya yang kaya. Bergabunglah dalam kursus ini untuk mengalami transformasi tidak hanya dalam kemampuan fisik, tetapi juga dalam jiwa dan identitas budaya.</div>
                            </div>
                            <div class="self-stretch justify-end items-start gap-2 inline-flex">
                                <div class="h-10 rounded-full border border-light-primary flex-col justify-center items-center gap-2 inline-flex">
                                    <div class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
                                        <div class="text-center text-light-primary text-sm font-medium  leading-tight tracking-tight">Enroll</div>
                                    </div>
                                </div>
                                <div class="h-10 bg-light-primary rounded-full flex-col justify-center items-center gap-2 inline-flex">
                                    <div class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
                                        <div class="text-center text-white text-sm font-medium  leading-tight tracking-tight">View</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="w-96 h-96 bg-fuchsia-50 rounded-xl border border-stone-300 flex-col justify-center items-center inline-flex">
                    <div class="w-96 h-96 p-2.5"></div>
                </div> -->
            </div>



            <div class="w-96 h-full bg-fuchsia-50 rounded-xl justify-start items-start inline-flex">
                <div class="w-96 h-full rounded-xl border border-stone-300 flex-col justify-center items-center inline-flex">
                    <div class="self-stretch grow shrink basis-0 flex-col justify-start items-center inline-flex">
                        <div class="self-stretch h-16 pl-6 pr-1 py-3 justify-start items-center inline-flex">
                            <div class="grow shrink basis-0 h-11 justify-start items-center gap-4 flex">
                                <div class="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                                    <div class="self-stretch text-zinc-900 text-base font-medium  leading-normal tracking-tight">Company Name</div>
                                    <div class="text-zinc-900 text-sm font-normal  leading-tight tracking-tight">Bandung</div>
                                </div>
                            </div>
                        </div>
                        <div class="w-96 h-40 justify-center items-center inline-flex">
                            <img class="w-96 h-40" src="assets/Media.png" />
                        </div>
                        <div class="self-stretch h-60 p-4 flex-col justify-start items-start gap-8 flex">
                            <div class="self-stretch h-36 flex-col justify-start items-start gap-3 flex">
                                <div class="self-stretch h-11 flex-col justify-start items-start flex">
                                    <div class="w-80 text-zinc-900 text-base font-normal  leading-normal tracking-wide">Course Bela Diri A</div>
                                    <div class="w-80 text-zinc-700 text-sm font-normal  leading-tight tracking-tight">Kamis, Jumat</div>
                                </div>
                                <div class="rounded-lg border border-stone-300 justify-center items-center inline-flex">
                                    <div class="w-24 px-4 py-1.5 justify-center items-center gap-2 flex">
                                        <div class="text-center text-light-primary text-sm font-medium  leading-tight tracking-tight">Rp 28.000</div>
                                    </div>
                                </div>
                                <div class="self-stretch line-clamp-2 text-zinc-700 text-sm font-normal  leading-tight tracking-tight">Pencak Silat adalah seni bela diri yang tak hanya mengasah kekuatan fisik, tapi juga memperdalam koneksi spiritual dan kultural. Melalui kursus ini, Anda tak hanya akan menguasai teknik-teknik bertarung yang efektif, tetapi juga akan merasakan pertumbuhan dalam disiplin diri, kepercayaan diri, serta pemahaman mendalam akan warisan budaya yang kaya. Bergabunglah dalam kursus ini untuk mengalami transformasi tidak hanya dalam kemampuan fisik, tetapi juga dalam jiwa dan identitas budaya.</div>
                            </div>
                            <div class="self-stretch justify-end items-start gap-2 inline-flex">
                                <div class="h-10 rounded-full border border-light-primary flex-col justify-center items-center gap-2 inline-flex">
                                    <div class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
                                        <div class="text-center text-light-primary text-sm font-medium  leading-tight tracking-tight">Enroll</div>
                                    </div>
                                </div>
                                <div class="h-10 bg-light-primary rounded-full flex-col justify-center items-center gap-2 inline-flex">
                                    <div class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
                                        <div class="text-center text-white text-sm font-medium  leading-tight tracking-tight">View</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="w-96 h-96 bg-fuchsia-50 rounded-xl border border-stone-300 flex-col justify-center items-center inline-flex">
                    <div class="w-96 h-96 p-2.5"></div>
                </div> -->
            </div>


            <div class="w-96 h-full bg-fuchsia-50 rounded-xl justify-start items-start inline-flex">
                <div class="w-96 h-full rounded-xl border border-stone-300 flex-col justify-center items-center inline-flex">
                    <div class="self-stretch grow shrink basis-0 flex-col justify-start items-center inline-flex">
                        <div class="self-stretch h-16 pl-6 pr-1 py-3 justify-start items-center inline-flex">
                            <div class="grow shrink basis-0 h-11 justify-start items-center gap-4 flex">
                                <div class="grow shrink basis-0 flex-col justify-start items-start inline-flex">
                                    <div class="self-stretch text-zinc-900 text-base font-medium  leading-normal tracking-tight">Company Name</div>
                                    <div class="text-zinc-900 text-sm font-normal  leading-tight tracking-tight">Bandung</div>
                                </div>
                            </div>
                        </div>
                        <div class="w-96 h-40 justify-center items-center inline-flex">
                            <img class="w-96 h-40" src="assets/Media.png" />
                        </div>
                        <div class="self-stretch h-60 p-4 flex-col justify-start items-start gap-8 flex">
                            <div class="self-stretch h-36 flex-col justify-start items-start gap-3 flex">
                                <div class="self-stretch h-11 flex-col justify-start items-start flex">
                                    <div class="w-80 text-zinc-900 text-base font-normal  leading-normal tracking-wide">Course Bela Diri A</div>
                                    <div class="w-80 text-zinc-700 text-sm font-normal  leading-tight tracking-tight">Kamis, Jumat</div>
                                </div>
                                <div class="rounded-lg border border-stone-300 justify-center items-center inline-flex">
                                    <div class="w-24 px-4 py-1.5 justify-center items-center gap-2 flex">
                                        <div class="text-center text-light-primary text-sm font-medium  leading-tight tracking-tight">Rp 28.000</div>
                                    </div>
                                </div>
                                <div class="self-stretch line-clamp-2 text-zinc-700 text-sm font-normal  leading-tight tracking-tight">Pencak Silat adalah seni bela diri yang tak hanya mengasah kekuatan fisik, tapi juga memperdalam koneksi spiritual dan kultural. Melalui kursus ini, Anda tak hanya akan menguasai teknik-teknik bertarung yang efektif, tetapi juga akan merasakan pertumbuhan dalam disiplin diri, kepercayaan diri, serta pemahaman mendalam akan warisan budaya yang kaya. Bergabunglah dalam kursus ini untuk mengalami transformasi tidak hanya dalam kemampuan fisik, tetapi juga dalam jiwa dan identitas budaya.</div>
                            </div>
                            <div class="self-stretch justify-end items-start gap-2 inline-flex">
                                <div class="h-10 rounded-full border border-light-primary flex-col justify-center items-center gap-2 inline-flex">
                                    <div class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
                                        <div class="text-center text-light-primary text-sm font-medium  leading-tight tracking-tight">Enroll</div>
                                    </div>
                                </div>
                                <div class="h-10 bg-light-primary rounded-full flex-col justify-center items-center gap-2 inline-flex">
                                    <div class="self-stretch grow shrink basis-0 px-6 py-2.5 justify-center items-center gap-2 inline-flex">
                                        <div class="text-center text-white text-sm font-medium  leading-tight tracking-tight">View</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="w-96 h-96 bg-fuchsia-50 rounded-xl border border-stone-300 flex-col justify-center items-center inline-flex">
                    <div class="w-96 h-96 p-2.5"></div>
                </div> -->
            </div>
        </div>




    </div>

</body>

</html>