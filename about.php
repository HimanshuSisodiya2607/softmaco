<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Softmaco — Creative Digital Solutions</title>
  <link rel="icon" href="images/favicon.ico" />
  <link href="css/style.css" rel="stylesheet" />
</head>
<body x-data="{ page: 'about', 'loaded': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }">
  <!-- ===== Header Start ===== -->
  <?php include 'partials/navbar.php'; ?>
  <!-- ===== Header End ===== -->
  <main>
    <!-- Hero Section -->
    <section class="relative overflow-hidden z-10 pt-40 pb-24 bg-dark">
      <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden -mx-28">
        <div class="absolute -z-1 -top-[120%] left-1/2 -translate-x-1/2 hero-circle-gradient w-full h-[900px] rounded-full max-w-[900px]"></div>
        <div class="absolute top-0 left-1/2 -translate-x-1/2"><img src="images/blur-02.svg" alt="blur" class="max-w-none"/></div>
      </div>
      <div class="mx-auto max-w-[900px] px-4 sm:px-8 xl:px-0 relative text-center pt-20 md:pt-28">
        <span class="hero-subtitle-gradient relative mb-5 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
          <img src="images/icon-title.svg" alt="icon" />
          <span class="hero-subtitle-text">About Softmaco</span>
        </span>
        <h1 class="text-white mb-7 text-4xl font-extrabold sm:text-6xl xl:text-7xl leading-tight">About Softmaco — Creative Digital Solutions</h1>
        <p class="max-w-xl mx-auto mb-6 font-medium md:text-xl text-white/80">We help businesses succeed with next-gen UI/UX, web & app development, and smart digital branding. Beautifully crafted technology for a brighter tomorrow.</p>
      </div>
    </section>
    
    <!-- Mission Section -->
    <section class="overflow-hidden pt-16 lg:pt-22 xl:pt-27.5 bg-dark">
      <div class="max-w-[1222px] mx-auto px-4 sm:px-8 xl:px-0">
        <div class="wow fadeInUp text-center">
          <span class="hero-subtitle-gradient relative mb-4 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
            <img src="images/icon-title.svg" alt="icon" />
            <span class="hero-subtitle-text"> Our Mission </span>
          </span>
          <h2 class="text-white mb-3 text-2xl font-extrabold sm:text-4xl xl:text-heading-2">Empowering Digital Potential</h2>
          <p class="max-w-[600px] mx-auto mb-5 font-medium text-white/70">Our mission is to help companies solve real business challenges by crafting digital products that are beautiful, reliable, and ready for the future. We believe in purposeful design, transparent process, and client success.</p>
        </div>
      </div>
    </section>

    <!-- Who We Are Section -->
    <section class="overflow-hidden pt-16 pb-16 lg:pt-22 xl:pt-27.5 bg-dark">
      <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
        <div class="relative rounded-3xl features-box-border bg-dark/90 overflow-hidden p-10 md:p-16 box-hover">
          <div class="flex flex-col md:flex-row items-center md:items-start gap-10 md:gap-16">
            <div>
              <span class="hero-subtitle-gradient relative mb-4 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
                <img src="images/icon-title.svg" alt="icon" />
                <span class="hero-subtitle-text">Who We Are</span>
              </span>
              <h3 class="text-white mb-4 font-bold text-2xl sm:text-3xl lg:text-4xl">A Modern IT Company For the Digital Age</h3>
              <p class="text-white/80 font-medium max-w-xl">Softmaco is a team of technology and design experts delivering UI/UX, web & app development, graphic design, branding, and digital growth solutions. We blend creative vision with technical excellence to build standout products for every client.</p>
            </div>
            <div class="max-w-xs min-w-[180px] mx-auto">
              <img src="images/big-icon.svg" alt="Digital Solutions" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Values Section -->
    <section class="overflow-hidden pt-16 pb-10 lg:pt-22 xl:pt-27.5 bg-dark">
      <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
        <div class="mb-9 text-center">
          <span class="hero-subtitle-gradient relative mb-4 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
            <img src="images/icon-title.svg" alt="icon" />
            <span class="hero-subtitle-text">Our Values</span>
          </span>
          <h3 class="text-white mb-2.5 font-bold text-2xl sm:text-3xl lg:text-4xl">What Drives Us</h3>
        </div>
        <div class="flex flex-wrap justify-center gap-7.5">
          <div class="group relative overflow-hidden text-center py-8 px-7.5 rounded-3xl features-box-border bg-dark/70 w-full sm:w-1/2 lg:w-1/4">
            <span class="icon-border relative max-w-[60px] w-full h-16 rounded-full inline-flex items-center justify-center mb-7 mx-auto bg-white/10"><img src="images/icon-01.svg" alt="Innovation" /></span>
            <h4 class="font-bold text-white mb-2">Innovation</h4>
            <p class="font-medium text-white/70">Bold ideas, modern tools, relentless improvement.</p>
          </div>
          <div class="group relative overflow-hidden text-center py-8 px-7.5 rounded-3xl features-box-border bg-dark/70 w-full sm:w-1/2 lg:w-1/4">
            <span class="icon-border relative max-w-[60px] w-full h-16 rounded-full inline-flex items-center justify-center mb-7 mx-auto bg-white/10"><img src="images/icon-05.svg" alt="Quality" /></span>
            <h4 class="font-bold text-white mb-2">Quality</h4>
            <p class="font-medium text-white/70">Pixel-perfect, user-first, high-performance delivery.</p>
          </div>
          <div class="group relative overflow-hidden text-center py-8 px-7.5 rounded-3xl features-box-border bg-dark/70 w-full sm:w-1/2 lg:w-1/4">
            <span class="icon-border relative max-w-[60px] w-full h-16 rounded-full inline-flex items-center justify-center mb-7 mx-auto bg-white/10"><img src="images/icon-04.svg" alt="Transparency" /></span>
            <h4 class="font-bold text-white mb-2">Transparency</h4>
            <p class="font-medium text-white/70">Clear process. Honest communication. Trusted partnership.</p>
          </div>
          <div class="group relative overflow-hidden text-center py-8 px-7.5 rounded-3xl features-box-border bg-dark/70 w-full sm:w-1/2 lg:w-1/4">
            <span class="icon-border relative max-w-[60px] w-full h-16 rounded-full inline-flex items-center justify-center mb-7 mx-auto bg-white/10"><img src="images/icon-03.svg" alt="Client Satisfaction" /></span>
            <h4 class="font-bold text-white mb-2">Client Satisfaction</h4>
            <p class="font-medium text-white/70">Your results come first—every decision, every project.</p>
          </div>
        </div>
      </div>
    </section>



    <!-- Why Choose Us Section -->
    <section class="overflow-hidden pt-16 pb-8 lg:pt-22 xl:pt-27.5 bg-dark">
      <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
        <div class="mb-9 text-center">
          <span class="hero-subtitle-gradient relative mb-4 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
            <img src="images/icon-title.svg" alt="icon" />
            <span class="hero-subtitle-text">Why Choose Us</span>
          </span>
          <h3 class="text-white mb-2.5 font-bold text-2xl sm:text-3xl lg:text-4xl">Built For Success</h3>
        </div>
        <div class="flex flex-wrap justify-center gap-7.5">
          <div class="group relative overflow-hidden text-center py-8 px-7.5 rounded-3xl features-box-border bg-dark/70 w-full sm:w-1/2 lg:w-1/3">
            <span class="icon-border relative max-w-[50px] w-full h-[46px] rounded-full inline-flex items-center justify-center mb-6 mx-auto bg-white/10"><img src="images/icon-07.svg" alt="Reliable Delivery" /></span>
            <h4 class="font-bold text-white mb-2">Reliable Delivery</h4>
            <p class="font-medium text-white/70">On time, every time—with clear communication.</p>
          </div>
          <div class="group relative overflow-hidden text-center py-8 px-7.5 rounded-3xl features-box-border bg-dark/70 w-full sm:w-1/2 lg:w-1/3">
            <span class="icon-border relative max-w-[50px] w-full h-[46px] rounded-full inline-flex items-center justify-center mb-6 mx-auto bg-white/10"><img src="images/icon-05.svg" alt="Creative Approach" /></span>
            <h4 class="font-bold text-white mb-2">Creative Approach</h4>
            <p class="font-medium text-white/70">Strategy, design, and dev—fused for beautiful results.</p>
          </div>
          <div class="group relative overflow-hidden text-center py-8 px-7.5 rounded-3xl features-box-border bg-dark/70 w-full sm:w-1/2 lg:w-1/3">
            <span class="icon-border relative max-w-[50px] w-full h-[46px] rounded-full inline-flex items-center justify-center mb-6 mx-auto bg-white/10"><img src="images/icon-04.svg" alt="Clean Code" /></span>
            <h4 class="font-bold text-white mb-2">Clean Code</h4>
            <p class="font-medium text-white/70">Modern standards, scalable architecture, readable code.</p>
          </div>
          <div class="group relative overflow-hidden text-center py-8 px-7.5 rounded-3xl features-box-border bg-dark/70 w-full sm:w-1/2 lg:w-1/3">
            <span class="icon-border relative max-w-[50px] w-full h-[46px] rounded-full inline-flex items-center justify-center mb-6 mx-auto bg-white/10"><img src="images/icon-03.svg" alt="Modern Design" /></span>
            <h4 class="font-bold text-white mb-2">Modern Design</h4>
            <p class="font-medium text-white/70">Futuristic, accessible interfaces that convert.</p>
          </div>
          <div class="group relative overflow-hidden text-center py-8 px-7.5 rounded-3xl features-box-border bg-dark/70 w-full sm:w-1/2 lg:w-1/3">
            <span class="icon-border relative max-w-[50px] w-full h-[46px] rounded-full inline-flex items-center justify-center mb-6 mx-auto bg-white/10"><img src="images/icon-02.svg" alt="Dedicated Support" /></span>
            <h4 class="font-bold text-white mb-2">Dedicated Support</h4>
            <p class="font-medium text-white/70">We’re there for every client from idea to launch—and beyond.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section>
      <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
        <div class="cta-box-gradient bg-dark rounded-[30px] relative overflow-hidden px-4 py-20 lg:py-25 z-999">
          <span class="absolute bottom-0 left-0 -z-1"><img src="images/grid.svg" alt="grid"></span>
          <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
            <span class="absolute left-1/2 bottom-0 -translate-x-1/2 -z-1"><img src="images/blur-22.svg" alt="blur" class="max-w-none" /></span>
            <span class="absolute left-1/2 bottom-0 -translate-x-1/2 -z-1"><img src="images/blur-23.svg" alt="blur" class="max-w-none" /></span>
            <span class="absolute left-1/2 bottom-0 -translate-x-1/2 -z-1"><img src="images/blur-24.svg" alt="blur" class="max-w-none" /></span>
          </div>
          <div class="wow fadeInUp text-center">
            <span class="hero-subtitle-gradient relative mb-4 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
              <img src="images/icon-title.svg" alt="icon" />
              <span class="hero-subtitle-text">Let’s Build Something Amazing Together</span>
            </span>
            <h2 class="text-white mb-4.5 text-2xl font-extrabold sm:text-4xl xl:text-heading-2">Ready to Work With Softmaco?</h2>
            <p class="max-w-[714px] mx-auto font-medium mb-9 text-white/80">Let’s collaborate on your next big idea, product, or brand. Experience innovation, reliability, and quality—every step of the way.</p>
            <a href="#" class="hero-button-gradient inline-flex rounded-lg py-3 px-7 text-white font-medium ease-in duration-300 hover:opacity-80">Get in Touch</a>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Footer start (reuse) -->
  <footer class="relative z-10 pb-17.5 lg:pb-22.5 xl:pb-27.5">
    <div class="absolute bottom-0 left-0 w-full flex flex-col gap-3 -z-1 opacity-50">
      <div class="w-full h-[1.24px] footer-bg-gradient"></div>
      <div class="w-full h-[2.47px] footer-bg-gradient"></div>
      <div class="w-full h-[3.71px] footer-bg-gradient"></div>
      <div class="w-full h-[4.99px] footer-bg-gradient"></div>
      <div class="w-full h-[6.19px] footer-bg-gradient"></div>
      <div class="w-full h-[7.42px] footer-bg-gradient"></div>
      <div class="w-full h-[8.66px] footer-bg-gradient"></div>
      <div class="w-full h-[9.90px] footer-bg-gradient"></div>
      <div class="w-full h-[13px] footer-bg-gradient"></div>
    </div>
    <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0 relative pt-17.5">
      <div class="w-full h-[1px] footer-divider-gradient absolute top-0 left-0"></div>
      <div class="flex flex-wrap justify-between">
        <div class="mb-10 max-w-[571px] w-full">
          <a class="mb-8.5 inline-block" href="index.php">
            <img src="images/logo.svg" alt="Logo" />
          </a>
          <p class="mb-12 xl:w-4/5">From concept to code, Softmaco delivers smart, scalable, and creative technology solutions for businesses of every size.</p>
          <div class="flex items-center gap-5">
            <a href="#" class="hover:text-white ease-in duration-300"><svg class="fill-current" width="24" height="24" viewBox="0 0 24 24"><path d="M13 21.9506C18.0533 21.4489 22 17.1853 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 16.8379 5.43552 20.8734 10 21.8V16H7V13H10V9.79586C10 7.47449 11.9695 5.64064 14.285 5.80603L17 5.99996V8.99996H15C13.8954 8.99996 13 9.89539 13 11V13H17L16 16H13V21.9506Z"></path></svg></a>
            <a href="#" class="hover:text-white ease-in duration-300"><svg class="fill-current" width="24" height="24" viewBox="0 0 24 24"><path d="M7.6125 21.5251C16.4625 21.5251 21.2625 14.2126 21.2625 7.87509C21.2625 7.72509 21.2625 7.46259 21.225 7.23759C22.1625 6.56259 22.9875 5.70009 23.625 4.76259C22.725 5.17509 21.825 5.40009 20.8875 5.51259C21.9 4.91259 22.65 3.97509 22.9875 2.8501C22.05 3.3751 21.075 3.78759 19.9125 4.01259C19.0125 3.0751 17.8125 2.4751 16.425 2.4751C13.7625 2.4751 11.5875 4.65009 11.5875 7.31259C11.5875 7.68759 11.625 8.06259 11.7 8.43759C7.8375 8.17509 4.3125 6.26259 1.9125 3.3751C1.5 4.12509 1.275 4.91259 1.275 5.77509C1.275 7.46259 2.1375 8.88759 3.45 9.75009C2.6625 9.71259 1.9125 9.48759 1.275 9.15009C1.275 9.18759 1.275 9.18759 1.275 9.18759C1.275 11.4751 2.925 13.4626 5.1 13.9126C4.6875 14.0251 4.2375 14.0626 3.9 14.0626C3.6 14.0626 3.2625 14.0251 3 13.9501C3.6375 15.8626 5.4 17.2501 7.5 17.2876C5.85 18.5626 3.7875 19.3501 1.575 19.3501C1.125 19.4251 0.75 19.3501 0.375 19.3126C2.4 20.7376 4.9125 21.5251 7.6125 21.5251Z"></path></svg></a>
            <a href="#" class="hover:text-white ease-in duration-300"><svg class="fill-current" width="24" height="24" viewBox="0 0 24 24"><g clip-path="url(#clip0_368_11839)"><path d="M12 0.674805C5.625 0.674805 0.375 5.8498 0.375 12.2998C0.375 17.3998 3.7125 21.7498 8.3625 23.3248C8.9625 23.4373 9.15 23.0623 9.15 22.7998C9.15 22.5373 9.15 21.7873 9.1125 20.7748C5.8875 21.5248 5.2125 19.1998 5.2125 19.1998C4.6875 17.8873 3.9 17.5123 3.9 17.5123C2.85 16.7623 3.9375 16.7623 3.9375 16.7623C5.1 16.7998 5.7375 17.9623 5.7375 17.9623C6.75 19.7623 8.475 19.2373 9.1125 18.8998C9.225 18.1498 9.525 17.6248 9.8625 17.3248C7.3125 17.0623 4.575 16.0498 4.575 11.6248C4.575 10.3498 5.0625 9.3373 5.775 8.5498C5.6625 8.2873 5.25 7.0873 5.8875 5.4748C5.8875 5.4748 6.9 5.1748 9.1125 6.6748C10.05 6.4123 11.025 6.2623 12.0375 6.2623C13.05 6.2623 14.0625 6.3748 14.9625 6.6748C17.175 5.2123 18.15 5.4748 18.15 5.4748C18.7875 7.0498 18.4125 8.2873 18.2625 8.5498C19.0125 9.3373 19.4625 10.3873 19.4625 11.6248C19.4625 16.0498 16.725 17.0623 14.175 17.3248C14.5875 17.6998 14.9625 18.4498 14.9625 19.4998C14.9625 21.0748 14.925 22.3123 14.925 22.6873C14.925 22.9873 15.15 23.3248 15.7125 23.2123C20.2875 21.6748 23.625 17.3623 23.625 12.2248C23.5875 5.8498 18.375 0.674805 12 0.674805Z"></path></g><defs><clipPath id="clip0_368_11839"><rect width="24" height="24" fill="white" /></clipPath></defs></svg></a>
          </div>
          <p class="font-medium mt-5.5">SoftMaco All rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>
