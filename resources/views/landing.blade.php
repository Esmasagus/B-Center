<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>B - Center</title>
  <link rel="icon" href="{{ asset("/assets/img/logo.png") }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="{{ asset("/assets/css/style.css") }}">
</head>
<body class="w-full">
  <header class="max-w-screen-xl mx-auto mb-8">
    <nav class="px-4 sm:px-5 py-6 flex items-center justify-between space-x-12">
      <div class="flex items-center space-x-8">
        <div id="logo" class="flex items-center space-x-2">
          <img src="{{ asset("/assets/img/logo.png") }}" class="w-8 h-8" alt="Trippi Logo">
          <h5 class="text-xl font-bold text-[#094067]">B-Center</h5>
        </div>
      </div>
      <div class="lg:hidden">
        <button>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <line x1="4" y1="6" x2="20" y2="6"></line>
            <line x1="4" y1="12" x2="20" y2="12"></line>
            <line x1="4" y1="18" x2="20" y2="18"></line>
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex items-center space-x-5">
        <a href="#tentang-kami" class="px-5 py-3 rounded-md text-[#094067] font-semibold hover:text-[#094067]/75 transition duration-300">Tentang Kami</a>
        <button class="px-5 py-3 rounded-md text-[#094067] font-semibold hover:text-[#094067]/75 transition duration-300">Login</button>
        <button class="w-full lg:w-fit px-3 py-4 bg-[#3DA9FC] flex items-center justify-center text-white font-semibold rounded-md shadow-[0_6px_30px_rgba(61,169,252,0.6)] space-x-2.5 hover:bg-[#3498E4] transition-colors duration-300">
          <svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" fill="white"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg>
                    <span>Register</span>
                  </button>
      </div>
    </nav>
  </header>
  <style>
    header {
      position: fixed;
      top: 0;
      width: 100%;
      background-color: #ffffff; /* Ganti dengan warna latar belakang yang sesuai */
      z-index: 1000; /* Pastikan nilai z-index cukup tinggi untuk menempatkan navbar di atas konten lainnya */
    }

    body {
      /* Padding-top sesuai dengan tinggi navbar agar konten tidak terpotong */
      padding-top: 80px; /* Sesuaikan dengan tinggi navbar Anda */
    }
  </style>
  <main class="max-w-screen-xl mx-auto overflow-x-hidden px-4 sm:px-5">
    <!-- Hero Section -->
    <br>
    <br>
    <section data-aos="fade-up" data-aos-duration="1000" class="grid grid-cols-6 lg:grid-cols-12 mb-20">
      <div class="col-span-6 text-center lg:text-left">
        <span class="inline-block px-3 py-1.5 mb-4 bg-[#3DA9FC] bg-opacity-10 text-[#3DA9FC] font-semibold tracking-wide rounded-full">•Bertransaksi jadi makin satset!</span>
        <h1 class="text-5xl sm:text-6xl md:text-7xl mb-4 font-extrabold text-[#094067] leading-tight"><span class="text-[#3DA9FC]">Business</span> Center</h1>
        <p class="mb-6 text-base md:text-lg tracking-wide leading-8 font-medium text-[#5F6C7B] pr-0 md:pr-4 xl:pr-32">B-Center dapat membantu kamu rekapitulasi laporan BC dengan mudah</p>
        <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6 justify-center lg:justify-start">
          <button class="w-full md:w-fit px-9 py-5 bg-[#3DA9FC] flex items-center justify-center md:justify-start text-white font-semibold rounded-md shadow-[0_6px_30px_rgba(61,169,252,0.6)] hover:bg-[#3498E4] group transition-colors duration-300">
            <span>Lihat Destinasi</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right group-hover:translate-x-1.5 transition duration-300" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <line x1="15" y1="16" x2="19" y2="12"></line>
              <line x1="15" y1="8" x2="19" y2="12"></line>
            </svg>
          </button>
          <button class="w-fit px-9 py-5 flex items-center justify-center md:justify-start text-[#3DA9FC] font-semibold space-x-4 hover:scale-105 transition duration-300">
            <div class="p-4 rounded-full border border-[#3DA9FC]">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                 <rect width="24" height="24" fill="#FFFFFE"/>
                 <path d="M7 4V20L20 12L7 4Z" fill="#3DA9FC"/>
               </svg>          
            </div>
            <span>Galeri Kami</span>
          </button>
        </div>
      </div>
      <div class="col-span-6 pl-24 hidden lg:block">
        <img src="{{ asset("/assets/img/hero-image.webp") }}" alt="">
      </div>
    </section>
    <!-- Partners Section -->
    <section data-aos="fade-right" data-aos-delay="500" data-aos-duration="700" class="w-full flex flex-col lg:flex-row items-center justify-center space-y-11 lg:space-y-0 lg:space-x-11 py-12 mb-24">
      <img src="{{ asset("/assets/img/partners/indofood.png") }}" class="h-[76px] lg:h-[55px] grayscale opacity-20 hover:grayscale-0 hover:opacity-100 transition duration-500" alt="">
      <img src="{{ asset("/assets/img/partners/mayora.png") }}" class="h-[76px] lg:h-[55px] grayscale opacity-20 hover:grayscale-0 hover:opacity-100 transition duration-500" alt="">
      <img src="{{ asset("/assets/img/partners/unilever.png") }}" class="h-[76px] lg:h-[55px] grayscale opacity-20 hover:grayscale-0 hover:opacity-100 transition duration-500" alt="">
      <img src="{{ asset("/assets/img/partners/wings.png") }}" class="h-[76px] lg:h-[55px] grayscale opacity-20 hover:grayscale-0 hover:opacity-100 transition duration-500" alt="">
      <img src="{{ asset("/assets/img/partners/nestle.png") }}" class="h-[76px] lg:h-[55px] grayscale opacity-20 hover:grayscale-0 hover:opacity-100 transition duration-500" alt="">
      <img src="{{ asset("/assets/img/partners/smkbisa.png") }}" class="h-[76px] lg:h-[55px] grayscale opacity-20 hover:grayscale-0 hover:opacity-100 transition duration-500" alt="">
    </section>
    <!-- Favorite Section -->
    {{-- <section data-aos="zoom-in" data-aos-duration="1000" class="py-2 mb-16 text-center lg:text-left">
      <span class="text-[#3DA9FC] inline-block font-semibold leading-tight mb-4">Destinasi Favorit</span>
      <div class="flex items-center justify-between mb-8 lg:mb-5">
        <h3 class="text-4xl text-[#094067] font-extrabold leading-tight w-full lg:w-fit">Top Destinasi Untuk Anak Muda Healing</h3>
        <button class="hidden font-semibold text-[#3DA9FC] leading-tight lg:flex items-center space-x-2">
          Lihat Selengkapnya
          <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <polyline points="9 6 15 12 9 18"></polyline>
          </svg>
        </button>
      </div>
      <div class="grid grid-cols-4 lg:grid-cols-12 gap-y-12 lg:gap-y-0 lg:gap-x-12 mb-8">
        <div class="col-span-4 flex flex-col items-center justify-center rounded-xl hover:scale-105 transition duration-300 cursor-pointer">
          <img src="{{ asset("/assets/img/destination/tangkuban-parahu.webp") }}" class="h-[100%] aspect-video lg:aspect-auto object-cover object-center mb-4 rounded-xl shadow-[0_9px_40px_rgba(9,64,103,0.20)]" alt="">
          <h5 class="text-xl text-[#094067] font-bold mb-3.5">Gunung Tangkuban Parahu</h5>
          <p class="text-sm text-[#5F6C7B] font-medium">Bandung, Indonesia</p>
        </div>
        <div class="col-span-4 flex flex-col items-center justify-center rounded-xl hover:scale-105 transition duration-300 cursor-pointer">
          <img src="{{ asset("/assets/img/destination/sayang-heulang.webp") }}" class="h-[100%] aspect-video lg:aspect-auto object-cover object-center mb-4 rounded-xl shadow-[0_9px_40px_rgba(9,64,103,0.20)]" alt="">
          <h5 class="text-xl text-[#094067] font-bold mb-3.5">Pantai Sayang Heulang</h5>
          <p class="text-sm text-[#5F6C7B] font-medium">Garut, Indonesia</p>
        </div>
        <div class="col-span-4 flex flex-col items-center justify-center rounded-xl hover:scale-105 transition duration-300 cursor-pointer">
          <img src="{{ asset("/assets/img/destination/sekitaran-lembang.webp") }}" class="h-[100%] aspect-video lg:aspect-auto object-cover object-center mb-4 rounded-xl shadow-[0_9px_40px_rgba(9,64,103,0.20)]" alt="">
          <h5 class="text-xl text-[#094067] font-bold mb-3.5">Sekitaran Lembang</h5>
          <p class="text-sm text-[#5F6C7B] font-medium">Bandung, Indonesia</p>
        </div>
      </div>
      <button class="font-semibold text-[#3DA9FC] leading-tight flex lg:hidden items-center mx-auto space-x-2">
        Lihat Selengkapnya
        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <polyline points="9 6 15 12 9 18"></polyline>
        </svg>
      </button>
    </section> --}}
    <!-- Tentang Kami Section -->
    <section class="grid grid-cols-1 lg:grid-cols-2 pt-16 pb-8 lg:pb-56" id="tentang-kami">
      <div data-aos="fade-right" data-aos-duration="700" class="pt-12 text-center lg:text-left">
        <span class="mb-4 text-[#3DA9FC] inline-block font-semibold leading-tight">Mudah Digunakan</span>
        <h2 class="mb-4 text-4xl md:text-5xl text-[#094067] font-extrabold leading-tight pr-0 xl:pr-8">Gaperlu lagi ribet ribet nulis di buku!👍🏻</h2>
        <p class="mb-8 text-base md:text-lg tracking-wide leading-8 font-medium text-[#5F6C7B] pr-0 xl:pr-24">Aplikasi B-Center memudahkan kamu dalam mengelola Business Center 46 tanpa perlu capek menulis laporan harian</p>
        <button class="w-full lg:w-fit px-9 py-5 bg-[#3DA9FC] flex items-center justify-center text-white font-semibold rounded-md shadow-[0_6px_30px_rgba(61,169,252,0.6)] space-x-2.5 hover:bg-[#3498E4] transition-colors duration-300">
<svg style="color: white" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-in"><path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" fill="white"></path><polyline points="10 17 15 12 10 7"></polyline><line x1="15" y1="12" x2="3" y2="12"></line></svg>
          <span>Yuk Register</span>
        </button>
      </div>
      <div data-aos="fade-left" data-aos-duration="700" class="relative">
        <img src="{{ asset("/assets/img/landingbc.png") }}" class="relative lg:absolute top-0 lg:-top-40 -left-32 md:-left-16 lg:-left-40 xl:-left-12 min-w-[420px] sm:min-w-[610px]" alt="">
      </div>
    </section>
    <script>
    // Script untuk menangani smooth scroll ke bagian "Tentang Kami"
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>
    <!-- Nearest Destination Section -->
    <section data-aos="fade-up" data-aos-duration="1000" class="w-full flex flex-col items-center justify-center py-4 mb-40 text-center lg:text-left">
      <span class="mb-4 text-[#3DA9FC] inline-block font-semibold leading-tight">Healing Tanpa Perlu Hilang</span>
      <h2 class="mb-4 text-4xl md:text-5xl text-[#094067] font-extrabold leading-tight">B-Center SMKN 46 </h2>
      <p class="mb-8 text-base md:text-lg tracking-wide leading-8 font-medium text-[#5F6C7B] text-center px-0 lg:px-64">Berikut adalah pinpoint alamat kami</p>
      <style>
        .map-container {
  width: 100%;
  position: relative;
}

.responsive-map-container {
  overflow: hidden;
  position: relative;
  padding-bottom: 75%; /* Sesuaikan dengan rasio aspek peta, contoh: 75% untuk rasio 4:3 */
  height: 0;
}

.responsive-map-container iframe {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
}

      </style>
      <div class="card">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3533505593127!2d106.88141557418258!3d-6.217046960891463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f36a76939ce9%3A0x1dd69348f251fa2a!2sSMK%20Negeri%2046%20Jakarta!5e0!3m2!1sid!2sid!4v1700103945623!5m2!1sid!2sid" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
        <span>Mulai Sekarang</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-arrow-narrow-right group-hover:translate-x-1.5 transition duration-300" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
          <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
          <line x1="5" y1="12" x2="19" y2="12"></line>
          <line x1="15" y1="16" x2="19" y2="12"></line>
          <line x1="15" y1="8" x2="19" y2="12"></line>
        </svg>
      </button>
    </section>
    <!-- Team Penyusun Section -->
    {{-- <section data-aos="fade-down" data-aos-delay="100" data-aos-duration="700" class="relative w-[95%] mx-auto min-h-[742px] py-24 flex flex-col items-center bg-[#D8EEFE] bg-opacity-75 rounded-xl mb-24">
      <span class="mb-4 text-[#3DA9FC] inline-block font-semibold leading-tight">Tim</span>
      <h2 class="mb-4 text-4xl md:text-5xl text-[#094067] font-extrabold leading-tight text-center lg:text-left">Tim Penyusun B-Center</h2>
      <p class="mb-8 text-base md:text-lg tracking-wide leading-8 font-medium text-[#5F6C7B] text-center px-2 lg:px-56">Berikut adalah orang orang kece dibalik aplikasi B-Center😏</p>
      <div class="relative w-full">
        <div class="absolute top-0 left-[-3%] w-[106%]">
          <div class="swiper comment-slider px-5 h-[340px]">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide w-full max-h-[240px] md:max-h-[215px] xl:max-h-[260px] p-8 sm:px-12 sm:py-8 md:p-6 xl:p-8 rounded-xl shadow-lg bg-white flex flex-col justify-between">
                <p class="text-sm sm:text-lg md:text-sm xl:text-base text-[#5F6C7B] leading-relaxed">“Aplikasinya sangat membantu, saya bingung mau ngabisin jatah cuti saya untuk apa, tapi dengan aplikasi ini saya menghabiskan jatah cuti saya untuk liburan, Thank you Trippi.”</p>
                <div class="flex items-center space-x-4">
                  <img src="{{ asset("/assets/img/avatar/sigit-rendang.jpg") }}" class="w-10 xl:w-12 h-10 xl:h-12 rounded-full" alt="">
                  <div class="flex flex-col justify-between">
                    <h6 class="text-[#094067] font-medium">Sigit Rendang</h6>
                    <p class="text-sm text-[#5F6C7B]">Creative Designer</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide w-full max-h-[240px] md:max-h-[215px] xl:max-h-[260px] px-12 py-8 md:p-6 xl:p-8 rounded-xl shadow-lg bg-white flex flex-col justify-between">
                <p class="text-sm sm:text-lg md:text-sm xl:text-base text-[#5F6C7B] leading-relaxed">“Nah ini nih, aplikasi yang cocok banget untuk saya ketika pengen nyentuh rumput, biar ngga nolep terus di rumah, Terima kasih  kepada Ortu saya, teman-teman saya, dan Trippi.”</p>
                <div class="flex items-center space-x-4">
                  <img src="{{ asset("/assets/img/avatar/ilham-jawir.jpg") }}" class="w-10 xl:w-12 h-10 xl:h-12 rounded-full" alt="">
                  <div class="flex flex-col justify-between">
                    <h6 class="text-[#094067] font-medium">Ilham Jawir</h6>
                    <p class="text-sm text-[#5F6C7B]">Discord Moderator</p>
                  </div>
                </div>
              </div>
              <div class="swiper-slide w-full max-h-[240px] md:max-h-[215px] xl:max-h-[260px] px-12 py-8 md:p-6 xl:p-8 rounded-xl shadow-lg bg-white flex flex-col justify-between">
                <p class="text-sm sm:text-lg md:text-sm xl:text-base text-[#5F6C7B] leading-relaxed">“All in one aplikasi yang sangat membantu saya dan keluarga saya dikala ingin pergi berlibur, ga cuma bisa cari destinasi wisata, bahkan bisa booking hotel juga.”</p>
                <div class="flex items-center space-x-4">
                  <img src="{{ asset("/assets/img/avatar/giga-chad.jpg") }}" class="w-10 xl:w-12 h-10 xl:h-12 rounded-full" alt="">
                  <div class="flex flex-col justify-between">
                    <h6 class="text-[#094067] font-medium">Giga Chad</h6>
                    <p class="text-sm text-[#5F6C7B]">CEO PT. Chad Selalu</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
    
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- FAQ Section -->
    {{-- <section data-aos="fade-up" data-aos-delay="50" data-aos-duration="500" class="w-full py-12 flex flex-col items-center mb-24 overflow-x-hidden">
      <span class="mb-4 text-[#3DA9FC] inline-block font-semibold leading-tight">Banyak Yang Nanya</span>
      <h2 class="mb-4 text-4xl md:text-5xl text-[#094067] font-extrabold leading-tight text-center lg:text-left">Pertanyaan Yang Sering Diajukan</h2>
      <p class="mb-12 text-base md:text-lg tracking-wide leading-8 font-medium text-[#5F6C7B] text-center px-0 lg:px-52">Banyak banget yang sering nanya ginian, jadi biar mimin ga cape nih mimin tulisin aja semuanya di section ini. Kalau masih ada yang nanya kepala kau sini mimin genjreng 🤟🏻</p>
      <div class="w-full max-w-2xl text-sm sm:text-base">
        <div class="w-full px-7 py-5 border-b border-[rgba(144,180,206,0.25)] flex items-center justify-between text-[#094067]">
          <span class="w-full font-medium text-base sm:text-lg">Apakah aplikasi ini sudah mendaftar di Kominfo?</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down w-5 sm:w-6 h-5 sm:h-6" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <polyline points="6 9 12 15 18 9"></polyline>
         </svg>
        </div>
        <div class="w-full px-7 py-5 border-b border-[rgba(144,180,206,0.25)] flex items-center justify-between text-[#094067]">
          <span class="w-full font-medium text-base sm:text-lg">Apakah jika saya peduli maka saya lindungi juga?</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down w-5 sm:w-6 h-5 sm:h-6" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <polyline points="6 9 12 15 18 9"></polyline>
         </svg>
        </div>
        <div class="w-full border-b border-[rgba(144,180,206,0.25)] divide-y divide-[rgba(255, 255, 255, 0.1)]  text-white bg-[#3DA9FC] rounded-md shadow-[0_30px_60px_rgba(9,64,103,0.25)]">
          <div class="px-7 py-5 flex items-center justify-between">
            <span class="w-full font-medium text-base sm:text-lg">Apakah aplikasi ini gratis?</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="rotate-180 icon icon-tabler icon-tabler-chevron-down w-5 sm:w-6 h-5 sm:h-6" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </div>
          <div class="px-7 py-5">
            <p>Gratis bang suer, paling ntar ada biaya admin aja pas elu pesen ticket atau booking hotel. Yakali gaada biaya admin, terus adminnya mau dapet duit darimana, masa ngepet 😭</p>
          </div>
        </div>
        <div class="w-full px-7 py-5 border-b border-[rgba(144,180,206,0.25)] flex items-center justify-between text-[#094067]">
          <span class="w-full font-medium text-base sm:text-lg">Apakah ada tutor supaya saya tetap bisa produk terus?</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down w-5 sm:w-6 h-5 sm:h-6" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <polyline points="6 9 12 15 18 9"></polyline>
         </svg>
        </div>
        <div class="w-full px-7 py-5 border-b border-[rgba(144,180,206,0.25)] flex items-center justify-between text-[#094067]">
          <span class="w-full font-medium text-base sm:text-lg">Gatau lagi mau nambah pertanyaan apa</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down w-5 sm:w-6 h-5 sm:h-6" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <polyline points="6 9 12 15 18 9"></polyline>
         </svg>
        </div>
        <div class="w-full px-7 py-5 border-b border-[rgba(144,180,206,0.25)] flex items-center justify-between text-[#094067]">
          <span class="w-full font-medium text-base sm:text-lg">Yodahlah tinggal section CTA sama Footer doang, mending turu</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down w-5 sm:w-6 h-5 sm:h-6" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <polyline points="6 9 12 15 18 9"></polyline>
         </svg>
        </div>
        <div class="w-full px-7 py-5 border-b border-[rgba(144,180,206,0.25)] flex items-center justify-between text-[#094067]">
          <span class="w-full font-medium text-base sm:text-lg">Cara main lato-lato gimana sih?</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down w-5 sm:w-6 h-5 sm:h-6" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <polyline points="6 9 12 15 18 9"></polyline>
         </svg>
        </div>
      </div>
    </section> --}}
    <!-- Hubungi kami Section -->
    {{-- <section data-aos="zoom-in" data-aos-delay="50" data-aos-duration="500" class="relative w-full bg-[#D8EEFE] py-12 rounded-xl shadow-[0_6px_30px_rgba(9,64,103,0.13)] mb-24 overflow-hidden">
      <div class="relative z-10 flex flex-col items-center px-4 sm:px-8">
        <h3 class="text-2xl sm:text-3xl lg:text-4xl text-[#094067] text-center font-bold leading-tight px-0 lg:px-24 xl:px-48 mb-9">Pengen Dapet Info Seputar Destinasi Wisata? Yuk Berlangganan Di Newsletter Kami</h3>
        <div class="w-full flex flex-col sm:flex-row items-center justify-center space-y-2 sm:space-y-0 sm:space-x-4">
          <div class="px-6 py-4 w-full md:w-[550px] bg-white shadow-md rounded-md flex space-x-2 focus-within:ring-2 focus-within:ring-[#3DA9FC] ring-offset-2 transition duration-300">
            <input class="w-full border-none outline-none focus:outline-none" type="text" placeholder="Tulis alamat email kamu disini">
          </div>
          <button class="w-full sm:w-fit bg-[#EF4565] px-6 py-4 text-white font-bold shadow-md shadow-[rgba(239,69,101,0.25)] rounded-md hover:bg-[#d03753] transition-colors duration-300">Subscribe</button>
        </div>
      </div>
      <div class="absolute top-[-140%] left-[-27%] w-[500px] h-[680px] border-8 border-[rgba(255,255,255,0.75)] rounded-full"></div>
      <div class="absolute bottom-[-190%] left-[-25%] w-[500px] h-[680px] rotate-45 border-8 border-[rgba(255,255,255,0.75)] rounded-full"></div>
      <div class="absolute top-[-140%] right-[-27%] w-[500px] h-[680px] border-8 border-[rgba(255,255,255,0.75)] rounded-full"></div>
      <div class="absolute bottom-[-190%] right-[-16%] w-[500px] h-[680px] rotate-45 border-8 border-[rgba(255,255,255,0.75)] rounded-full"></div>
    </section> --}}
    <!-- Footer Section -->
    <section data-aos="fade-down">
      <div class="py-12 grid grid-cols-6 lg:grid-cols-12 gap-y-8 lg:gap-y-0 lg:gap-x-8">
        <div class="col-span-6 space-y-4">
          <img src="{{ asset("/assets/img/logo.png") }}" class="w-9 h-9" alt="">
          <h5 class="text-xl font-bold text-[#094067]">B-Center</h5>
          <p class="text-[#5F6C7B] tracking-wide leading-relaxed pr-8">B-Center adalah aplikasi untuk memudahkan petugas Business Center SMKN 46 membuat laporan penjualan dengan cepat dan efisien</p>
        </div>
        <div class="col-span-6 sm:col-span-2">
          <h6 class="text-[#094067] text-sm font-bold uppercase tracking-wide mb-5">&nbsp</h6>
          <ul class="space-y-2">
            <li>
              <a href="{{ url("#") }}" class="text-[#5F6C7B] hover:text-[#33393f] transition duration-300">&nbsp</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="text-[#5F6C7B] hover:text-[#33393f] transition duration-300">&nbsp</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="text-[#5F6C7B] hover:text-[#33393f] transition duration-300">&nbsp</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="text-[#5F6C7B] hover:text-[#33393f] transition duration-300">&nbsp</a>
            </li>
          </ul>
        </div>
        <div class="col-span-6 sm:col-span-2">
          <h6 class="text-[#094067] text-sm font-bold uppercase tracking-wide mb-5">&nbsp</h6>
          <ul class="space-y-2">
            <li>
              <a href="{{ url("#") }}" class="text-[#5F6C7B] hover:text-[#33393f] transition duration-300">&nbsp</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="text-[#5F6C7B] hover:text-[#33393f] transition duration-300">&nbsp</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="text-[#5F6C7B] hover:text-[#33393f] transition duration-300">&nbsp</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="text-[#5F6C7B] hover:text-[#33393f] transition duration-300">&nbsp</a>
            </li>
          </ul>
        </div>
        <div class="col-span-6 sm:col-span-2">
          <h6 class="text-[#094067] text-sm font-bold uppercase tracking-wide mb-5">&nbsp</h6>
          <ul class="space-y-2">
            <li>
              <a href="{{ url("#") }}" class="text-[#5F6C7B] hover:text-[#33393f] transition duration-300">&nbsp</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="text-[#5F6C7B] hover:text-[#33393f] transition duration-300">&nbsp</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="text-[#5F6C7B] hover:text-[#33393f] transition duration-300">&nbsp</a>
            </li>
            <li>
              <a href="{{ url("#") }}" class="text-[#5F6C7B] hover:text-[#33393f] transition duration-300">&nbsp</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="py-12 border-t border-[rgba(144,180,206,0.25)] text-center text-sm font-bold tracking-wide uppercase text-[#5F6C7B]">
        COPYRIGHT © 2023 — DESIGN BY RSURYA99
      </div>
    </section>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
    const swiper = new Swiper('.comment-slider', {
      // Optional parameters
      loop: true,
      slidesPerView: 1,
      spaceBetween: 30,
      breakpoints: {
        768: {
          slidesPerView: 2,
        },
        // when window width is >= 1024px
        1024: {
          slidesPerView: 3,
        },
      },

      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
      },

      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
</body>
</html>