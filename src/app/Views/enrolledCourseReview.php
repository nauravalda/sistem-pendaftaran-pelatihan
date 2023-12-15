<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learn Sphere</title>
    <link rel="stylesheet" href="<?= base_url() ?>/css/app.css?v=1.0">
  </head>

  <body>
<div class="h-full bg-white">

    <section id="Info atas" class="pt-10 px-[72px]">
        <div class="container">
            <div class="flex flex-wrap space-y-6">
                <!-- Tombol back -->
                <div class="w-full self-start text-light-primary gap-2">
                    <button class="flex items-center text-sm font-medium font-['Roboto'] leading-tight">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                    </svg>Back
                    </button>
                </div>

                <!-- Foto Course -->
                <div class="w-full">
                    <img class="flex self-stretch h-72 rounded-3xl" src="https://via.placeholder.com/1504x298" />
                </div>

                <!-- Kartu Informasi -->
                <div class="flex w-full gap-6">
                    <div class="w-[724px] p-[48px] bg-white border flex border-gray-200 rounded-2xl shadow">

                        <div class="w-[448px] space-y-6">
                            <h6 class="text-xl font-bold text-gray-900"><?= $name; ?></h6>
                            <?php
                                // Menggunakan number_format untuk memformat harga menjadi format mata uang rupiah
                                $formattedPrice = 'Rp' . number_format($price, 0, ',', '.');
                            ?>
                            <p class="text-sm flex justify-center items-center font-bold text-light-primary w-24 h-8 border-2 border-gray-200 rounded-lg"><?= $formattedPrice; ?></p>
                            <p class="text-sm text-gray-500"><?= $desc; ?></p>
                            <p class="text-sm text-gray-500"><span class="font-bold">Rating :</span> 5/5 (99 Rating)</p>
                            <p class="text-sm text-gray-500"><?= $tags; ?></p>
                        </div>

                        <div class="w-[50px] border-r border-gray-200 h-auto"></div>
                        <div class="w-[50px] border-l border-gray-200 h-auto"></div>

                        <div class="w-[250px] h-auto space-y-4">
                            <p class="text-sm text-gray-500"><?= $locations; ?></p>
                            <p class="text-sm text-gray-500">Participants: <span class="font-bold"><?= $participants; ?>/100</span></p>
                            <p class="text-sm text-gray-500">Schedule:</p>
                            <span>
                                <p class="text-sm text-gray-500">> Kamis, at 13.00</p>
                                <p class="text-sm text-gray-500">> Jumat, at 14.00</p>
                            </span>
                        </div>

                    </div>

                    <!-- Upcoming Activities Card -->
                        <div class="w-full bg-white border border-gray-200 rounded-2xl shadow p-12">
                            <h6 class="text-2xl font-bold flex justify-center text-gray-900">Upcoming Activities</h6>
                            <div class="mt-5 space-y-4">
                                <div class="w-full bg-light-secondary border border-gray-200 rounded-xl p-4">
                                    <p class="text-sm font-bold text-gray-900">Pertemuan 1</p>
                                    <p class="text-sm text-gray-900">12.00 at Jl.Asap Kebakaran No. 7</p>
                                </div>
                                <div class="w-full bg-light-secondary border border-gray-200 rounded-xl p-4">
                                    <p class="text-sm font-bold text-gray-900">Pertemuan 2</p>
                                    <p class="text-sm text-gray-900">12.00 at Jl.Asap Kebakaran No. 7</p>
                                </div>
                                <div class="w-full bg-light-secondary border border-gray-200 rounded-xl p-4">
                                    <p class="text-sm font-bold text-gray-900">Pertemuan 3</p>
                                    <p class="text-sm text-gray-900">12.00 at Jl.Asap Kebakaran No. 7</p>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Info Bawah -->
    <section id="Info Bawah" class="px-[72px] py-[24px]">
        <div class="container">
            <div class="flex flex-wrap space-y-6">
                <!-- Review -->
                <div class="w-full p-[48px] bg-white border flex border-gray-200 rounded-2xl shadow">
                    <div class="w-[1200px] space-y-6">
                        <h6 class="text-xl font-bold text-gray-900">Featured Review</h6>
                        <!-- Review Personal -->
                        <?php foreach ($data_review as $review) : ?>
                        <div class="w-full p-[16px] bg-light-secondary border-[1px] border-gray-300 rounded-md space-y-2">
                            <div class="flex gap-4 items-center">
                                <div class="flex items-center justify-center w-10 h-10 rounded-full bg-light-primary text-white text-xl"><?= substr($review['name'], 0, 1) ?></div>
                                <div>
                                    <p class="font-semibold"><?= $review['name']; ?></p>
                                    <p class="text-gray-700">Rating : <?= $review['rating']; ?>/5</p>
                                </div>
                            </div>
                            <p class="text-gray-700"><?= $review['desc']; ?></p>
                        </div>
                        <?php endforeach; ?>

                        <!-- Masukkan Review -->
                        <div class="w-full p-[16px] bg-light-secondary border-[1px] border-gray-300 rounded-md space-y-2">
                            <div class="flex justify-between items-center">
                                <div class="flex gap-4 items-center">
                                    <div class="flex items-center justify-center w-10 h-10 rounded-full bg-light-primary text-white text-xl">A</div>
                                    <div class="">
                                        <p class="font-semibold">Aan Bejir</p>
                                        <!-- Input Rating -->
                                        <div class="flex items-center whitespace-nowrap">
                                            <p>Rating : </p>
                                            <input type="num" id="inputRating"
                                                class="border border-[#1D1B20] rounded-md focus:border-gray-500 focus:shadow-sm p-1 h-8 mx-1 w-12 bg-white" autocomplete="off"/>
                                            <p>/5 <span class="text-gray-400">(Max : 5)</span></p>
                                        </div>
                                    </div>
                                </div>
                                <button class="rounded-full bg-light-primary text-white text-base px-4 py-1 h-1/2">Save</button>
                            </div>
                            <!-- Input Review -->
                            <div class="relative h-14 w-full">
                                <label for="inputReview"
                                    class="absolute -top-[5px] left-4 px-1 font-sans text-[#1D1B20] leading-none bg-white w-fit"></label>
                                <input type="text" id="inputReview"
                                    class="border border-[#1D1B20] rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-fit font-sans bg-white"
                                    placeholder="Write your review about this course" autocomplete="off" />
                            </div>
                        </div>

                    </div>
                </div>

                <div class="w-full flex gap-6">
                    <!-- Kartu Kurikulum dan Outcome -->
                    <div class="w-1/2 bg-white border border-gray-200 rounded-2xl shadow p-12 space-y-[10px]">
                        <h6 class="text-xl font-bold text-gray-900">What You'll Learn</h6>
                        <ul class="list-decimal ml-4">
                            <?php foreach ($courseBenefit as $a) : ?>
                            <li><?= $a; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="w-1/2 bg-white border border-gray-200 rounded-2xl shadow p-12 space-y-[10px]">
                        <h6 class="text-xl font-bold text-gray-900">Course Content</h6>
                        <p class="text-gray-900">Python Setup</p>
                        <ul class="list-decimal ml-4">
                            <?php foreach ($courseContent as $a) : ?>
                            <li><?= $a; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div class="w-full">
                    <div class="bg-white border border-gray-200 rounded-2xl shadow p-12 space-y-6">
                        <h6 class="text-xl font-bold text-gray-900">Description</h6>
                        <p class="text-gray-900"><?= $description; ?></p>
                        <ul class="list-decimal ml-4">
                            <li>Command Line Basics</li>
                            <li>Installing Python</li>
                            <li>Running Python Code</li>
                        </ul>
                        <p class="text-gray-900">You will get lifetime access to over 100 lectures plus corresponding Notebooks for the lectures! This course comes with a 30 day money back guarantee! If you are not satisfied in any way, you'll get your money back. Plus you will keep access to the Notebooks as a thank you for trying out the course! So what are you waiting for? Learn Python in a way that will advance your career and increase your knowledge, all in a fun and practical way!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

</body>
</html>