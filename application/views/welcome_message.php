<!DOCTYPE html>
<html lang="en">
  <head>
<meta charset="utf-8" />

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<meta
  name="viewport"
  content="width=device-width, initial-scale=1, shrink-to-fit=no"
/>

<title>One Sarumaha | Web Developer & UI/UX Designer</title>

<meta
  name="description"
  content="Portofolio One Sarumaha, Web Developer yang berfokus pada pembuatan website modern, responsif, dan aplikasi berbasis Laravel, PHP, JavaScript, dan MySQL."
/>

<meta
  name="keywords"
  content="One Sarumaha, Portofolio, Web Developer, Laravel, PHP, JavaScript, MySQL, Full Stack Developer"
/>

<meta name="author" content="One Sarumaha" />

<!-- Open Graph -->
<meta
  property="og:title"
  content="One Sarumaha | Web Developer & Portofolio"
/>

<meta
  property="og:description"
  content="Portofolio One Sarumaha, Web Developer yang berpengalaman dalam membangun website dan aplikasi modern, responsif, cepat, dan mudah digunakan. Jelajahi proyek, pengalaman, serta teknologi yang saya kuasai."
/>

<meta property="og:type" content="website" />

<meta property="og:url" content="https://onesarumaha.my.id/" />

<meta property="og:image" content="https://onesarumaha.my.id/assets/profile/one.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:type" content="image/png">
<meta property="og:locale" content="id_ID" />

<link rel="canonical" href="https://onesarumaha.my.id/" />
  <link rel="icon" type="image/png" href="<?= base_url('assets/profile')?>/logo-one.png">

  <meta name="theme-color" content="#5540af" />

  <meta property="og:site_name" content="Atom Template" />


  <meta name="twitter:card" content="summary_large_image" />

  <meta name="twitter:site" content="@tailwindmade" />
	<style>
		.experience-list {
			list-style-type: disc;
			padding-left: 24px;
		}

		.experience-list-number {
			list-style-type: decimal;
			padding-left: 24px;
		}
		.swal2-confirm {
			background-color: #2563eb !important;
			color: #fff !important;
			border: none !important;
			border-radius: 6px !important;
			padding: 10px 24px !important;
			font-size: 14px !important;
			font-weight: 600 !important;
			box-shadow: none !important;
		}

		.swal2-confirm:hover {
			background-color: #1d4ed8 !important;
		}

		.swal2-confirm:focus {
			box-shadow: none !important;
		}
	</style>

  <link
    crossorigin="crossorigin"
    href="https://fonts.gstatic.com"
    rel="preconnect"
  />

  <link
    as="style"
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap"
    rel="preload"
  />

  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap"
    rel="stylesheet"
  />

  <link
    href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
    rel="stylesheet"
  />

  <link
    crossorigin="anonymous"
    href="<?= base_url('assets/template/assets/styles/main.min.css') ?>"
    media="screen"
    rel="stylesheet"
  />
  
  <script
    defer
    src="https://unpkg.com/@alpine-collective/toolkit@1.0.0/dist/cdn.min.js"
  ></script>

  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  
</head>


  <body
    :class="{ 'overflow-hidden max-h-screen': mobileMenu }"
    class="relative"
    x-data="{ mobileMenu: false }"
  >
    
    <div id="main" class="relative">
      <div
  x-data="{
    triggerNavItem(id) {
        $scroll(id)
    },
    triggerMobileNavItem(id) {
        mobileMenu = false;
        this.triggerNavItem(id)
    }
}"
>
  <div class="w-full z-50 top-0 py-3 sm:py-5  absolute
  ">
  <div class="container flex items-center justify-between">
    <div>
      <a href="<?= base_url('/')?>">
        <img src="<?= base_url('assets/profile')?>/logo-one.png" class="w-24 lg:w-48" alt="logo image" />
      </a>
    </div>
    <div class="hidden lg:block">
      <ul class="flex items-center">
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#about')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >About</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#services')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Services</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#portfolio')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Portfolio</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#clients')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Clients</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#work')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Work</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#statistics')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Statistics</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#blog')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Blog</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
        <li class="group pl-6">
          
          <span
            @click="triggerNavItem('#contact')"
            class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
            >Contact</span
          >
          
          <span
            class="block h-0.5 w-full bg-transparent group-hover:bg-yellow"
          ></span>
        </li>
        
      </ul>
    </div>
    <div class="block lg:hidden">
      <button @click="mobileMenu = true">
        <i class="bx bx-menu text-4xl text-white"></i>
      </button>
    </div>
  </div>
</div>

<div
  class="pointer-events-none fixed inset-0 z-70 min-h-screen bg-black bg-opacity-70 opacity-0 transition-opacity lg:hidden"
  :class="{ 'opacity-100 pointer-events-auto': mobileMenu }"
>
  <div
    class="absolute right-0 min-h-screen w-2/3 bg-primary py-4 px-8 shadow md:w-1/3"
  >
    <button
      class="absolute top-0 right-0 mt-4 mr-4"
      @click="mobileMenu = false"
    >
      <img src="<?= base_url('assets/template')?>/assets/img/icon-close.svg" class="h-10 w-auto" alt="" />
    </button>

    <ul class="mt-8 flex flex-col">
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#about')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >About</span
        >
        
      </li>
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#services')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Services</span
        >
        
      </li>
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#portfolio')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Portfolio</span
        >
        
      </li>
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#clients')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Clients</span
        >
        
      </li>
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#work')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Work</span
        >
        
      </li>
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#statistics')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Statistics</span
        >
        
      </li>
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#blog')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Blog</span
        >
        
      </li>
      
      <li class="py-2">
        
        <span
          @click="triggerMobileNavItem('#contact')"
          class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white"
          >Contact</span
        >
        
      </li>
      
    </ul>
  </div>
</div>


      <div><div
  class="relative bg-cover bg-center bg-no-repeat py-8"
  style="background-image: url(<?= base_url('assets/template/assets/img/bg-hero.jpg') ?>"
>
  <div
    class="absolute inset-0 z-20 bg-gradient-to-r from-hero-gradient-from to-hero-gradient-to bg-cover bg-center bg-no-repeat"
  ></div>

  <div
    class="container relative z-30 pt-20 pb-12 sm:pt-56 sm:pb-48 lg:pt-64 lg:pb-48"
  >
    <div class="flex flex-col items-center justify-center lg:flex-row">
      <div class="rounded-full border-8 border-primary shadow-xl">
        <img
          src="<?= base_url('assets/profile')?>/one.png"
          class="h-48 rounded-full sm:h-56"
          alt="author"
        />
      </div>
      <div class="pt-8 sm:pt-10 lg:pl-8 lg:pt-0">
        <h1
          class="text-center font-header text-4xl text-white sm:text-left sm:text-5xl md:text-6xl"
        >
          One Sarumaha
        </h1>
        <div
          class="flex flex-col justify-center pt-3 sm:flex-row sm:pt-5 lg:justify-start"
        >
          <div
            class="flex items-center justify-center pl-0 sm:justify-start md:pl-1"
          >
            <p class="font-body text-lg uppercase text-white">Kontak saya</p>
            <div class="hidden sm:block">
              <i class="bx bx-chevron-right text-3xl text-yellow"></i>
            </div>
          </div>
          <div
            class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0"
          >
            <a href="/">
              <i
                class="bx bxl-facebook-square text-2xl text-white hover:text-yellow"
              ></i>
            </a>
            <a href="/" class="pl-4">
              <i
                class="bx bxl-twitter text-2xl text-white hover:text-yellow"
              ></i>
            </a>
            <a href="/" class="pl-4">
              <i
                class="bx bxl-dribbble text-2xl text-white hover:text-yellow"
              ></i>
            </a>
            <a href="/" class="pl-4">
              <i
                class="bx bxl-linkedin text-2xl text-white hover:text-yellow"
              ></i>
            </a>
            <a href="/" class="pl-4">
              <i
                class="bx bxl-instagram text-2xl text-white hover:text-yellow"
              ></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="bg-grey-50" id="about">
  <div class="container flex flex-col items-center py-16 md:py-20 lg:flex-row">
    <div class="w-full text-center sm:w-3/4 lg:w-3/5 lg:text-left">
      <h2
        class="font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
      >
       Profil Singkat
      </h2>
      <h4
        class="pt-6 font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
      >
        One Three Jaya Putra Sarumaha <br>
        <span class="text-primary">Backend Web Developer</span>
      </h4>

      <p class="pt-6 font-body leading-relaxed text-grey-20">
        Saya adalah seorang <strong>Backend Web Developer</strong> yang memiliki minat
        dalam pengembangan aplikasi web yang aman, efisien, dan mudah dikembangkan.
        Berpengalaman menggunakan <strong>PHP, CodeIgniter, Laravel, MySQL/MariaDB</strong>,
        serta melakukan deployment aplikasi pada server <strong>Linux (Ubuntu)</strong>
        dengan <strong>Nginx</strong>.
      </p>

      <p class="pt-4 font-body leading-relaxed text-grey-20">
        Saya telah mengembangkan berbagai sistem berbasis web, seperti
        <strong>Sistem Informasi Kepegawaian</strong>, <strong>Manajemen Cuti</strong>,
        <strong>Delegasi Pegawai</strong>, dan <strong>Dashboard Pendapatan Pegawai</strong>.
        Saya percaya bahwa solusi digital yang baik tidak hanya memiliki tampilan yang
        menarik, tetapi juga didukung oleh backend yang stabil, cepat, dan mudah
        dipelihara.
      </p>

      <p class="pt-4 font-body leading-relaxed text-grey-20">
        Saat ini saya terus mengembangkan kemampuan di bidang backend development,
        REST API, optimasi database, serta mempelajari teknologi modern seperti
        React untuk membangun aplikasi web yang lebih lengkap dan berkualitas.
      </p>
      <div
        class="flex flex-col justify-center pt-6 sm:flex-row lg:justify-start"
      >
        <div class="flex items-center justify-center sm:justify-start">
          <p class="font-body text-lg font-semibold uppercase text-grey-20">
           Hubungi saya
          </p>
          <div class="hidden sm:block">
            <i class="bx bx-chevron-right text-2xl text-primary"></i>
          </div>
        </div>
        <div
          class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0"
        >
          <a href="/">
            <i
              class="bx bxl-facebook-square text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
          <a href="/" class="pl-4">
            <i
              class="bx bxl-twitter text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
          <a href="/" class="pl-4">
            <i
              class="bx bxl-dribbble text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
          <a href="/" class="pl-4">
            <i
              class="bx bxl-linkedin text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
          <a href="/" class="pl-4">
            <i
              class="bx bxl-instagram text-2xl text-primary hover:text-yellow"
            ></i>
          </a>
        </div>
      </div>
    </div>
    <div class="w-full pl-0 pt-10 sm:w-3/4 lg:w-2/5 lg:pl-12 lg:pt-0">
      <div>
        <div class="flex items-end justify-between">
          <h4 class="font-body font-semibold uppercase text-black">
            HTML & CSS
          </h4>
          <h3 class="font-body text-3xl font-bold text-primary">85%</h3>
        </div>
        <div class="mt-2 h-3 w-full rounded-full bg-lila">
          <div class="h-3 rounded-full bg-primary" style="width: 85%"></div>
        </div>
      </div>
      <div class="pt-6">
        <div class="flex items-end justify-between">
          <h4 class="font-body font-semibold uppercase text-black">Python</h4>
          <h3 class="font-body text-3xl font-bold text-primary">70%</h3>
        </div>
        <div class="mt-2 h-3 w-full rounded-full bg-lila">
          <div class="h-3 rounded-full bg-primary" style="width: 70%"></div>
        </div>
      </div>
      <div class="pt-6">
        <div class="flex items-end justify-between">
          <h4 class="font-body font-semibold uppercase text-black">
            Javascript
          </h4>
          <h3 class="font-body text-3xl font-bold text-primary">98%</h3>
        </div>
        <div class="mt-2 h-3 w-full rounded-full bg-lila">
          <div class="h-3 rounded-full bg-primary" style="width: 98%"></div>
        </div>
      </div>
      <div class="pt-6">
        <div class="flex items-end justify-between">
          <h4 class="font-body font-semibold uppercase text-black">Figma</h4>
          <h3 class="font-body text-3xl font-bold text-primary">91%</h3>
        </div>
        <div class="mt-2 h-3 w-full rounded-full bg-lila">
          <div class="h-3 rounded-full bg-primary" style="width: 91%"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container py-16 md:py-20" id="portfolio">
  <h2
    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
  >
    Keahlian Saya
  </h2>
  <h3
    class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
  >
    Layanan yang saya tawarkan
  </h3>

  <div
    class="grid grid-cols-1 gap-6 pt-10 sm:grid-cols-2 md:gap-10 md:pt-12 lg:grid-cols-3"
  >
    <!-- Item 1 -->
    <div class="group rounded px-8 py-12 shadow hover:bg-primary">
      <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
        <div class="hidden group-hover:block">
          <img
            src="<?= base_url('assets/template')?>/assets/img/icon-development-white.svg"
            alt="Pengembangan Web"
          />
        </div>
        <div class="block group-hover:hidden">
          <img
            src="<?= base_url('assets/template')?>/assets/img/icon-development-black.svg"
            alt="Pengembangan Web"
          />
        </div>
      </div>
      <div class="text-center">
        <h3
          class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl"
        >
          Pengembangan Web
        </h3>
        <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
          Membangun aplikasi web dan sistem informasi yang responsif, cepat, serta aman.
        </p>
      </div>
    </div>

    <!-- Item 2 -->
    <div class="group rounded px-8 py-12 shadow hover:bg-primary">
      <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
        <div class="hidden group-hover:block">
          <img
            src="<?= base_url('assets/template')?>/assets/img/icon-content-white.svg"
            alt="Dokumentasi Teknis"
          />
        </div>
        <div class="block group-hover:hidden">
          <img
            src="<?= base_url('assets/template')?>/assets/img/icon-content-black.svg"
            alt="Dokumentasi Teknis"
          />
        </div>
      </div>
      <div class="text-center">
        <h3
          class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl"
        >
          Dokumentasi Teknis
        </h3>
        <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
          Menyusun panduan sistem, dokumentasi API, dan standar operasional secara sistematis.
        </p>
      </div>
    </div>


    <div class="group rounded px-8 py-12 shadow hover:bg-primary">
      <div class="mx-auto h-24 w-24 text-center xl:h-28 xl:w-28">
        <div class="hidden group-hover:block">
          <img
            src="<?= base_url('assets/template')?>/assets/img/icon-email-white.svg"
            alt="Sistem Integrasi"
          />
        </div>
        <div class="block group-hover:hidden">
          <img
            src="<?= base_url('assets/template')?>/assets/img/icon-email-black.svg"
            alt="Sistem Integrasi"
          />
        </div>
      </div>
      <div class="text-center">
        <h3
          class="pt-8 text-lg font-semibold uppercase text-primary group-hover:text-yellow lg:text-xl"
        >
          Sistem Integrasi
        </h3>
        <p class="text-grey pt-4 text-sm group-hover:text-white md:text-base">
          Menghubungkan berbagai sistem dan API untuk efisiensi alur kerja otomatis.
        </p>
      </div>
    </div>

   


  </div>
</div>

<div class="container py-16 md:py-20" id="portfolio">
  <h2
    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
  >
    Portofolio Saya
  </h2>
  <h3
    class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
  >
    Berikut adalah beberapa proyek yang telah saya selesaikan
  </h3>

  <div
    class="mx-auto grid w-full grid-cols-1 gap-8 pt-12 sm:w-3/4 md:gap-10 lg:w-full lg:grid-cols-2"
  >
    <a
      href="/"
      class="mx-auto transform transition-all hover:scale-105 md:mx-0"
    >
      <img
        src="<?= base_url('assets/template')?>/assets/img/portfolio-apple.jpeg"
        class="w-full shadow"
        alt="gambar portofolio"
      />
    </a>
    <a
      href="/"
      class="mx-auto transform transition-all hover:scale-105 md:mx-0"
    >
      <img
        src="<?= base_url('assets/template')?>/assets/img/portfolio-stripe.jpeg"
        class="w-full shadow"
        alt="gambar portofolio"
      />
    </a>
    <a
      href="/"
      class="mx-auto transform transition-all hover:scale-105 md:mx-0"
    >
      <img
        src="<?= base_url('assets/template')?>/assets/img/portfolio-fedex.jpeg"
        class="w-full shadow"
        alt="gambar portofolio"
      />
    </a>
    <a
      href="/"
      class="mx-auto transform transition-all hover:scale-105 md:mx-0"
    >
      <img
        src="<?= base_url('assets/template')?>/assets/img/portfolio-microsoft.jpeg"
        class="w-full shadow"
        alt="gambar portofolio"
      />
    </a>
  </div>
</div>


<div class="container py-16 md:py-20" id="work">
  <h2
    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
  >
    Pengalaman Kerja
  </h2>
  <h3
    class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
  >
    Berikut adalah rekam jejak karir dan pengalaman saya
  </h3>

  <div class="relative mx-auto mt-12 flex w-full flex-col lg:w-2/3">
    <span
      class="left-2/5 absolute inset-y-0 ml-10 hidden w-0.5 bg-grey-40 md:block"
    ></span>

    <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
      <div class="md:w-2/5">
        <div class="flex justify-center md:justify-start">
         <span class="shrink-0 font-header text-lg font-bold tracking-wide text-black lg:text-xl">
            Puskesmas Setiabudi Jakarta
          </span>
          <div class="relative ml-3 hidden w-full md:block">
            <span
              class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"
            ></span>
          </div>
        </div>
      </div>
      <div class="md:w-3/5">
        <div class="relative flex md:pl-18">
          <span
            class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"
          ></span>

          <div class="mt-1 flex">
            <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
            <div class="md:-mt-1 md:pl-8">
              <span class="block font-body font-bold text-grey-40"
                >Juni 2026 - sekarang</span
              >
              <span
                class="block pt-2 font-header text-xl font-bold uppercase text-primary"
                >IT Programmer</span
              >
              <div class="pt-2">
                <span class="block font-body text-black"> Bertanggung jawab mengembangkan aplikasi kepegawaian dan berbagai sistem
					pendukung untuk kebutuhan internal instansi serta pelayanan masyarakat
					menggunakan CodeIgniter 3. Melakukan analisis kebutuhan, pengembangan
					modul, integrasi database MySQL, pengujian aplikasi, perbaikan bug, dan
					maintenance sistem guna memastikan aplikasi berjalan stabil, aman, dan
					sesuai dengan kebutuhan pengguna.</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
      <div class="md:w-2/5">
        <div class="flex justify-center md:justify-start">
          <span class="shrink-0 font-header text-lg font-bold tracking-wide text-black lg:text-xl">
            PT. Herca Cipta Dermal Perdana
          </span>
          <div class="relative ml-3 hidden w-full md:block">
            <span
              class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"
            ></span>
          </div>
        </div>
      </div>
      <div class="md:w-3/5">
        <div class="relative flex md:pl-18">
          <span
            class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"
          ></span>

          <div class="mt-1 flex">
            <i class="bx bxs-right-arrow hidden text-primary md:block"></i>
            <div class="md:-mt-1 md:pl-8">
              <span class="block font-body font-bold text-grey-40"
                >Juli 2023 - Juni 2016</span
              >
              <span
                class="block pt-2 font-header text-xl font-bold uppercase text-primary"
                >Web Developer</span
              >
             <div class="pt-2">
				<p class="font-body text-black">
					Mengembangkan aplikasi Enterprise Resource Planning (ERP) dan sistem
					absensi berbasis web menggunakan Laravel, Yii 2, MySQL, JavaScript,
					dan Bootstrap. Bertanggung jawab dalam pengembangan fitur, integrasi
					database, pemeliharaan sistem, serta peningkatan performa aplikasi
					untuk mendukung operasional perusahaan.
				</p>

				<ol style="list-style-type: decimal; padding-left: 24px;">
					<li>
					Mengembangkan modul ERP meliputi manajemen invoice, customer,
					supplier, gudang, pembelian, penjualan, dan pelaporan.
					</li>
					<li>
					Membangun sistem absensi karyawan berbasis web yang terintegrasi
					dengan perangkat Face Recognition untuk pencatatan kehadiran
					secara real-time.
					</li>
					<li>
					Mengembangkan dashboard monitoring dan laporan operasional untuk
					mendukung pengambilan keputusan manajemen.
					</li>
					<li>
					Berkolaborasi dengan tim dalam pengembangan fitur baru,
					pemeliharaan sistem, debugging, dan optimasi performa aplikasi.
					</li>
				</ol>
			</div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<div class="mt-8 flex flex-col text-center md:flex-row md:text-left">
	<div class="md:w-2/5">
		<div class="flex justify-center md:justify-start">
		<span class="shrink-0 font-header text-lg font-bold tracking-wide text-black lg:text-xl">
			PT. Natural Food Sukses Makmur
		</span>
		<div class="relative ml-3 hidden w-full md:block">
			<span
			class="absolute inset-x-0 top-1/2 h-0.5 -translate-y-1/2 transform bg-grey-70"
			></span>
		</div>
		</div>
	</div>

	<div class="md:w-3/5">
		<div class="relative flex md:pl-18">
		<span
			class="absolute left-8 top-1 hidden h-4 w-4 rounded-full border-2 border-grey-40 bg-white md:block"
		></span>

		<div class="mt-1 flex">
			<i class="bx bxs-right-arrow hidden text-primary md:block"></i>

			<div class="md:-mt-1 md:pl-8">
			<span class="block font-body font-bold text-grey-40">
				Juni 2021 - Juni 2023
			</span>

			<span class="block pt-2 font-header text-xl font-bold uppercase text-primary">
				Web Developer
			</span>

			<div class="pt-2">
				<p class="font-body text-black">
				Mengembangkan dan memelihara aplikasi web perusahaan menggunakan
				PHP, MySQL, JavaScript, HTML, CSS, dan Bootstrap. Bertanggung
				jawab dalam pengembangan fitur baru, optimalisasi performa
				aplikasi, pengelolaan database, serta pemeliharaan sistem agar
				berjalan stabil dan sesuai dengan kebutuhan bisnis.
				</p>

				<ul class="experience-list mt-3 space-y-2 font-body text-black">
					<li>
						Mengembangkan dan memelihara aplikasi web internal perusahaan.
					</li>
					<li>
						Merancang, mengelola, dan mengoptimalkan database MySQL untuk
						meningkatkan performa aplikasi.
					</li>
					<li>
						Mengimplementasikan fitur baru serta melakukan perbaikan bug dan
						peningkatan fungsionalitas aplikasi.
					</li>
					<li>
						Berkolaborasi dengan tim dalam menganalisis kebutuhan pengguna
						dan merancang solusi yang sesuai.
					</li>
					<li>
						Menggunakan Git sebagai version control untuk kolaborasi dan
						manajemen source code.
					</li>
				</ul>

				<div class="mt-3">
					<span class="font-semibold text-black">Tech Stack:</span>
					<span class="text-black">
						PHP, MySQL, JavaScript, HTML, CSS, Bootstrap, Git
					</span>
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	</div>
  </div>
</div>

<div
  class="bg-cover bg-top bg-no-repeat pb-16 md:py-16 lg:py-24"
  style="background-image: url(<?= base_url('assets/template/assets/img/experience-figure.png')?>"
  id="statistics"
>
  <div class="container">
    <div
      class="mx-auto w-5/6 bg-white py-16 shadow md:w-11/12 lg:py-20 xl:py-24 2xl:w-full"
    >
      <div class="grid grid-cols-2 gap-5 md:gap-8 xl:grid-cols-4 xl:gap-5">
        <div
          class="flex flex-col items-center justify-center text-center md:flex-row md:text-left"
        >
          <div>
            <img
              src="<?= base_url('assets/template')?>/assets/img/icon-project.svg"
              class="mx-auto h-12 w-auto md:h-20"
              alt="icon project"
            />
          </div>
          <div class="pt-5 md:pl-5 md:pt-0">
            <h1 class="font-body text-2xl font-bold text-primary md:text-4xl">
              12
            </h1>
            <h4
              class="text-grey-dark font-header text-base font-medium leading-loose md:text-xl"
            >
              Finished Projects
            </h4>
          </div>
        </div>

        <div
          class="flex flex-col items-center justify-center text-center md:flex-row md:text-left"
        >
          <div>
            <img
              src="<?= base_url('assets/template')?>/assets/img/icon-award.svg"
              class="mx-auto h-12 w-auto md:h-20"
              alt="icon award"
            />
          </div>
          <div class="pt-5 md:pl-5 md:pt-0">
            <h1 class="font-body text-2xl font-bold text-primary md:text-4xl">
              3
            </h1>
            <h4
              class="text-grey-dark font-header text-base font-medium leading-loose md:text-xl"
            >
              Awards Won
            </h4>
          </div>
        </div>

        <div
          class="mt-6 flex flex-col items-center justify-center text-center md:mt-10 md:flex-row md:text-left lg:mt-0"
        >
          <div>
            <img
              src="<?= base_url('assets/template')?>/assets/img/icon-happy.svg"
              class="mx-auto h-12 w-auto md:h-20"
              alt="icon happy clients"
            />
          </div>
          <div class="pt-5 md:pl-5 md:pt-0">
            <h1 class="font-body text-2xl font-bold text-primary md:text-4xl">
              8
            </h1>
            <h4
              class="text-grey-dark font-header text-base font-medium leading-loose md:text-xl"
            >
              Happy Clients
            </h4>
          </div>
        </div>

        <div
          class="mt-6 flex flex-col items-center justify-center text-center md:mt-10 md:flex-row md:text-left lg:mt-0"
        >
          <div>
            <img
              src="<?= base_url('assets/template')?>/assets/img/icon-puzzle.svg"
              class="mx-auto h-12 w-auto md:h-20"
              alt="icon puzzle"
            />
          </div>
          <div class="pt-5 md:pl-5 md:pt-0">
            <h1 class="font-body text-2xl font-bold text-primary md:text-4xl">
              99
            </h1>
            <h4
              class="text-grey-dark font-header text-base font-medium leading-loose md:text-xl"
            >
              Bugs Fixed
            </h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="bg-grey-50" id="blog">
  <div class="container py-16 md:py-20">
    <h2
      class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
    >
      I also like to write
    </h2>
    <h4
      class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
    >
      Check out my latest posts!
    </h4>
    <div
      class="mx-auto grid w-full grid-cols-1 gap-6 pt-12 sm:w-3/4 lg:w-full lg:grid-cols-3 xl:gap-10"
    >
      <a href="/post" class="shadow">
        <div
          style="background-image: url(<?= base_url('assets/template/assets/img/post-01.png') ?>"
          class="group relative h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72"
        >
          <span
            class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"
          ></span>
          <span
            class="absolute right-0 bottom-0 mr-4 mb-4 block rounded-full border-2 border-white px-6 py-2 text-center font-body text-sm font-bold uppercase text-white md:text-base"
            >Read More</span
          >
        </div>
        <div class="bg-white py-6 px-5 xl:py-8">
          <span class="block font-body text-lg font-semibold text-black"
            >How to become a frontend developer</span
          >
          <span class="block pt-2 font-body text-grey-20"
            >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.</span
          >
        </div>
      </a>
      <a href="/post" class="shadow">
        <div
          style="background-image: url(<?= base_url('assets/template/assets/img/post-02.png') ?>"
          class="group relative h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72"
        >
          <span
            class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"
          ></span>
          <span
            class="absolute right-0 bottom-0 mr-4 mb-4 block rounded-full border-2 border-white px-6 py-2 text-center font-body text-sm font-bold uppercase text-white md:text-base"
            >Read More</span
          >
        </div>
        <div class="bg-white py-6 px-5 xl:py-8">
          <span class="block font-body text-lg font-semibold text-black"
            >My personal productivity system</span
          >
          <span class="block pt-2 font-body text-grey-20"
            >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.</span
          >
        </div>
      </a>
      <a href="/post" class="shadow">
        <div
          style="background-image: url(<?= base_url('assets/template/assets/img/post-03.png') ?>"
          class="group relative h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72"
        >
          <span
            class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"
          ></span>
          <span
            class="absolute right-0 bottom-0 mr-4 mb-4 block rounded-full border-2 border-white px-6 py-2 text-center font-body text-sm font-bold uppercase text-white md:text-base"
            >Read More</span
          >
        </div>
        <div class="bg-white py-6 px-5 xl:py-8">
          <span class="block font-body text-lg font-semibold text-black"
            >My year in review 2020</span
          >
          <span class="block pt-2 font-body text-grey-20"
            >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.</span
          >
        </div>
      </a>
    </div>
  </div>
</div>

<div class="container py-16 md:py-20" id="contact">
  <h2
    class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl"
  >
    Hubungi Saya
  </h2>
  <h4
    class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl"
  >
    Mari Berdiskusi
  </h4>
  <div class="mx-auto w-full pt-5 text-center sm:w-2/3 lg:pt-6">
    <p class="font-body text-grey-10">
      	Terima kasih telah mengunjungi portfolio saya. Jika Anda memiliki
		pertanyaan, ingin berdiskusi mengenai pengembangan aplikasi, atau
		tertarik untuk bekerja sama, silakan hubungi saya melalui formulir di
		bawah ini. Saya akan dengan senang hati merespons pesan Anda sesegera
		mungkin.
    </p>
  </div>
<form id="contactForm" class="mx-auto w-full pt-10 sm:w-3/4">
    <div class="flex flex-col md:flex-row">
        <input
            class="mr-3 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:w-1/2 lg:mr-5"
            placeholder="Nama"
            type="text"
            id="name"
            name="name"
        />

        <input
            class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-0 md:ml-3 md:w-1/2 lg:ml-5"
            placeholder="Email"
            type="email"
            id="email"
            name="email"
        />
    </div>

    <textarea
        class="mt-6 w-full rounded border-grey-50 px-4 py-3 font-body text-black md:mt-8"
        placeholder="Pesan"
        id="message"
        name="message"
        cols="30"
        rows="10"
    ></textarea>

    <button
        type="submit"
        id="btnSubmit"
        class="mt-6 flex items-center justify-center rounded bg-primary px-8 py-3 font-header text-lg font-bold uppercase text-white hover:bg-grey-20"
    >
        Kirim
        <i class="bx bx-chevron-right relative -right-2 text-3xl"></i>
    </button>
</form>

<div id="response" class="mt-3"></div>
  <div class="flex flex-col pt-16 lg:flex-row">
    <div
      class="w-full border-l-2 border-t-2 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3"
    >
      <div class="flex items-center">
        <i class="bx bx-phone text-2xl text-grey-40"></i>
        <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
          No. HP
        </p>
      </div>
      <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
        0812-7726-0794
      </p>
    </div>
    <div
      class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2"
    >
      <div class="flex items-center">
        <i class="bx bx-envelope text-2xl text-grey-40"></i>
        <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
          Email
        </p>
      </div>
      <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
        onesarumaha10@gmail.com
      </p>
    </div>
    <div
      class="w-full border-l-2 border-t-0 border-r-2 border-b-2 border-grey-60 px-6 py-6 sm:py-8 lg:w-1/3 lg:border-l-0 lg:border-t-2"
    >
      <div class="flex items-center">
        <i class="bx bx-map text-2xl text-grey-40"></i>
        <p class="pl-2 font-body font-bold uppercase text-grey-40 lg:text-lg">
         Alamat
        </p>
      </div>
      <p class="pt-2 text-left font-body font-bold text-primary lg:text-lg">
        Jakarta
      </p>
    </div>
  </div>
</div>

<div
  class="h-72 bg-cover bg-center bg-no-repeat sm:h-64 md:h-72 lg:h-96"
  style="background-image: url('<?= base_url('assets/template/assets/img/map.png') ?>')"
></div>

<div
  class="relative bg-primary bg-cover bg-center bg-no-repeat py-16 bg-blend-multiply lg:py-24"
  style="background-image: url(<?= base_url('assets/template/assets/img/bg-cta.jpg') ?>)"
>
  <div class="container relative z-30">
    <h3
      class="text-center font-header text-3xl uppercase leading-tight tracking-wide text-white sm:text-4xl lg:text-5xl"
    >
      Keep <span class="font-bold">up-to-date</span> <br />
      with what I'm up to
    </h3>
    <form class="mt-6 flex flex-col justify-center sm:flex-row">
      <input
        class="w-full rounded px-4 py-3 font-body text-black sm:w-2/5 sm:py-4 lg:w-1/3"
        type="text"
        id="email"
        placeholder="Give me your Email"
      />
      <button
        class="mt-2 rounded bg-yellow px-8 py-3 font-body text-base font-bold uppercase text-primary transition-colors hover:bg-primary hover:text-white focus:border-transparent focus:outline-none focus:ring focus:ring-yellow sm:ml-2 sm:mt-0 sm:py-4 md:text-lg"
      >
        Join the club
      </button>
    </form>
  </div>
</div>
</div>

      <div class="bg-primary">
  <div class="container flex flex-col justify-between py-6 sm:flex-row">
    <p class="text-center font-body text-white md:text-left">
      © Copyright 2022. • Distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a> •  All right reserved, ATOM.
    </p>
    <div class="flex items-center justify-center pt-5 sm:justify-start sm:pt-0">
      <a href="/">
        <i
          class="bx bxl-facebook-square text-2xl text-white hover:text-yellow"
        ></i>
      </a>
      <a href="/" class="pl-4">
        <i class="bx bxl-twitter text-2xl text-white hover:text-yellow"></i>
      </a>
      <a href="/" class="pl-4">
        <i class="bx bxl-dribbble text-2xl text-white hover:text-yellow"></i>
      </a>
      <a href="/" class="pl-4">
        <i class="bx bxl-linkedin text-2xl text-white hover:text-yellow"></i>
      </a>
      <a href="/" class="pl-4">
        <i class="bx bxl-instagram text-2xl text-white hover:text-yellow"></i>
      </a>
    </div>
  </div>
</div>

    </div>

    <script src="<?= base_url('assets/template/assets/js/main.js') ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script>
	document.addEventListener('DOMContentLoaded', function () {

		const form = document.getElementById('contactForm');
		const btnSubmit = document.getElementById('btnSubmit');

		form.addEventListener('submit', function (e) {
			e.preventDefault();

			const name = document.getElementById('name').value.trim();
			const email = document.getElementById('email').value.trim();
			const message = document.getElementById('message').value.trim();

			// Validasi Nama
			if (name === '') {
				Swal.fire({
					icon: 'warning',
					title: 'Oops...',
					text: 'Nama tidak boleh kosong!'
				});

				document.getElementById('name').focus();
				return;
			}

			// Validasi Email
			if (email === '') {
				Swal.fire({
					icon: 'warning',
					title: 'Oops...',
					text: 'Email tidak boleh kosong!'
				});

				document.getElementById('email').focus();
				return;
			}

			// Validasi Format Email
			const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

			if (!emailPattern.test(email)) {
				Swal.fire({
					icon: 'warning',
					title: 'Oops...',
					text: 'Format email tidak valid!'
				});

				document.getElementById('email').focus();
				return;
			}

			// Validasi Pesan
			if (message === '') {
				Swal.fire({
					icon: 'warning',
					title: 'Oops...',
					text: 'Pesan tidak boleh kosong!'
				});

				document.getElementById('message').focus();
				return;
			}

			// Disable Button
			btnSubmit.disabled = true;
			btnSubmit.innerHTML = 'Mengirim...';

			fetch("<?= base_url('contact/send') ?>", {
				method: "POST",
				body: new FormData(form)
			})
			.then(response => response.json())
			.then(res => {

				if (res.status) {

				Swal.fire({
					icon: 'success',
					title: 'Pesan Berhasil Dikirim',
					text: 'Terima kasih telah menghubungi saya. Saya akan segera membalas pesan Anda.',
					confirmButtonText: 'Tutup',
					confirmButtonColor: '#2563eb'
				});
					form.reset();

				} else {

					Swal.fire({
						icon: 'error',
						title: 'Gagal',
						text: res.message
					});

				}

			})
			.catch(error => {

				Swal.fire({
					icon: 'error',
					title: 'Terjadi Kesalahan',
					text: 'Server sedang bermasalah.'
				});

				console.error(error);

			})
			.finally(() => {

				btnSubmit.disabled = false;
				btnSubmit.innerHTML = 'Kirim <i class="bx bx-chevron-right relative -right-2 text-3xl"></i>';

			});

		});

	});
	</script>
    
  </body>
</html>
