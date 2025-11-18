<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Softmaco Team — People Behind the Vision</title>
  <link rel="icon" href="images/favicon.ico">
  <link href="css/style.css" rel="stylesheet">
</head>
<body x-data="{ page: 'team', 'loaded': true, 'stickyMenu': false, 'navigationOpen': false, 'scrollTop': false }">
  <!-- ===== Header Start ===== -->
  <?php include 'partials/navbar.php'; ?>
  <!-- ===== Header End ===== -->

  <main>
    <!-- Team Hero -->
    <section class="relative overflow-hidden z-10 pt-40 pb-20 bg-dark">
      <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden -mx-28">
        <div class="absolute -z-1 -top-[110%] left-1/2 -translate-x-1/2 hero-circle-gradient w-full h-[900px] rounded-full max-w-[900px]"></div>
        <div class="absolute top-0 left-1/2 -translate-x-1/2"><img src="images/blur-02.svg" alt="blur" class="max-w-none" /></div>
      </div>
      <div class="mx-auto max-w-[900px] px-4 sm:px-8 xl:px-0 relative text-center pt-20 md:pt-28">
        <span class="hero-subtitle-gradient relative mb-5 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
          <img src="images/icon-title.svg" alt="icon">
          <span class="hero-subtitle-text">Softmaco Team</span>
        </span>
        <h1 class="text-white mb-6 text-4xl font-extrabold sm:text-6xl xl:text-heading-1">People Creating Digital Brilliance</h1>
        <p class="max-w-xl mx-auto font-medium md:text-xl text-white/80">Meet the strategists, designers, and engineers who power our clients’ success.</p>
      </div>
    </section>

    <!-- Leadership Section -->
    <section class="relative z-20 overflow-hidden pt-20 pb-16 bg-dark">
      <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
        <div class="mb-12 text-center">
          <span class="hero-subtitle-gradient relative mb-4 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
            <img src="images/icon-title.svg" alt="icon" />
            <span class="hero-subtitle-text">Leadership</span>
          </span>
          <h2 class="text-white text-3xl sm:text-4xl font-extrabold mb-3">Founders & Directors</h2>
          <p class="text-white/70 max-w-3xl mx-auto">Softmaco is led by digital pioneers who combine product vision with hands-on delivery.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-7.5">
          <div class="rounded-3xl bg-dark relative overflow-hidden pt-12.5 pb-10 px-8 xl:px-10 flex flex-col items-center shadow-xl border border-white/10">
            <img src="images/user-01.png" alt="Mahendra Burdak" class="w-24 h-24 rounded-full mb-6 shadow-lg" />
            <h3 class="font-semibold text-xl text-white mb-1">Mahendra Burdak</h3>
            <p class="text-custom-1 mb-3">Co-Founder & CEO</p>
            <p class="text-white/70 text-center">Guides product direction, client partnerships, and the overall vision for Softmaco.</p>
          </div>
          <div class="rounded-3xl bg-dark relative overflow-hidden pt-12.5 pb-10 px-8 xl:px-10 flex flex-col items-center shadow-xl border border-white/10">
            <img src="images/user-02.png" alt="Sonu Tanwar" class="w-24 h-24 rounded-full mb-6 shadow-lg" />
            <h3 class="font-semibold text-xl text-white mb-1">Sonu Tanwar</h3>
            <p class="text-custom-1 mb-3">Co-Founder & CTO</p>
            <p class="text-white/70 text-center">Heads engineering and innovation, ensuring every solution is future-ready.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Core Team Grid -->
    <!-- <section class="relative z-10 overflow-hidden pt-16 pb-24 bg-dark">
      <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
        <div class="mb-12 text-center">
          <span class="hero-subtitle-gradient relative mb-4 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
            <img src="images/icon-title.svg" alt="icon" />
            <span class="hero-subtitle-text">Product Makers</span>
          </span>
          <h2 class="text-white text-3xl sm:text-4xl font-extrabold mb-3">Core Team</h2>
          <p class="text-white/70 max-w-3xl mx-auto">A multi-disciplinary team covering product strategy, experience, technology, and growth.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7.5">
          <?php
            $teamMembers = [
              ['name' => 'Aditi Rao', 'role' => 'Product Strategist', 'img' => 'images/user-03.png', 'bio' => 'Aligns business goals with digital roadmaps and measurable KPIs.'],
              ['name' => 'Vikram Patel', 'role' => 'Lead UI/UX Designer', 'img' => 'images/user-04.png', 'bio' => 'Designs intuitive interfaces with delightful interactions.'],
              ['name' => 'Nisha Gupta', 'role' => 'Frontend Engineer', 'img' => 'images/user-05.png', 'bio' => 'Builds performant web experiences using modern frameworks.'],
              ['name' => 'Harsh Meena', 'role' => 'Backend Engineer', 'img' => 'images/user-06.png', 'bio' => 'Architects secure, scalable APIs and microservices.'],
              ['name' => 'Divya Khanna', 'role' => 'Mobile Engineer', 'img' => 'images/user-07.png', 'bio' => 'Delivers polished iOS & Android apps with native performance.'],
              ['name' => 'Rohit Sharma', 'role' => 'Brand & Motion Designer', 'img' => 'images/user-08.png', 'bio' => 'Shapes cohesive brand narratives and micro-animations.'],
            ];
            foreach ($teamMembers as $member):
          ?>
          <div class="rounded-3xl bg-dark relative overflow-hidden pt-12 pb-10 px-8 flex flex-col items-center shadow-xl border border-white/10">
            <img src="<?php echo $member['img']; ?>" alt="<?php echo $member['name']; ?>" class="w-20 h-20 rounded-full mb-5 shadow-lg" />
            <h3 class="font-semibold text-lg text-white mb-0.5"><?php echo $member['name']; ?></h3>
            <p class="text-custom-1 mb-3"><?php echo $member['role']; ?></p>
            <p class="text-white/70 text-center"><?php echo $member['bio']; ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section> -->

    <!-- Culture Section -->
    <section class="overflow-hidden pt-16 pb-16 bg-dark">
      <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
        <div class="relative rounded-3xl features-box-border bg-dark/90 overflow-hidden p-10 md:p-16 box-hover">
          <div class="grid lg:grid-cols-2 gap-12 items-center relative z-20">
            <div class="text-center lg:text-left mx-auto">
              <span class="hero-subtitle-gradient relative mb-4 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
                <img src="images/icon-title.svg" alt="icon" />
                <span class="hero-subtitle-text">Team Culture</span>
              </span>
              <h3 class="text-white mb-4 font-bold text-3xl">Collaboration at the Core</h3>
              <p class="text-white/80 mb-4">Daily standups, design critiques, and pair programming sessions keep teams aligned and energized. Learning budgets, guilds, and R&D sprints let everyone experiment with new tech.</p>
              <p class="text-white/80">We celebrate measurable outcomes, transparent communication, and inclusive decision making.</p>
            </div>
            <div class="space-y-5 w-full max-w-[520px] mx-auto">
              <div class="flex items-start gap-4 p-4 rounded-2xl bg-white/5 border border-white/10">
                <img src="images/icon-06.svg" alt="icon" class="w-10 h-10" />
                <div>
                  <h4 class="text-white font-semibold mb-1">Growth Mindset</h4>
                  <p class="text-white/70 text-sm">Weekly learning sessions and mentorship ensure continuous upskilling.</p>
                </div>
              </div>
              <div class="flex items-start gap-4 p-4 rounded-2xl bg-white/5 border border-white/10">
                <img src="images/icon-05.svg" alt="icon" class="w-10 h-10" />
                <div>
                  <h4 class="text-white font-semibold mb-1">Client-First</h4>
                  <p class="text-white/70 text-sm">Every squad works closely with clients to co-create the solution and the roadmap.</p>
                </div>
              </div>
              <div class="flex items-start gap-4 p-4 rounded-2xl bg-white/5 border border-white/10">
                <img src="images/icon-03.svg" alt="icon" class="w-10 h-10" />
                <div>
                  <h4 class="text-white font-semibold mb-1">Global Collaboration</h4>
                  <p class="text-white/70 text-sm">Remote-first with modern tooling—work seamlessly across time zones.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden -mx-20">
            <span class="absolute right-0 bottom-0"><img src="images/blur-03.svg" alt="blur" class="max-w-none" /></span>
            <span class="absolute left-0 top-0"><img src="images/blur-05.svg" alt="blur" class="max-w-none" /></span>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section>
      <div class="max-w-[1170px] mx-auto px-4 sm:px-8 xl:px-0">
        <div class="cta-box-gradient bg-dark rounded-[30px] relative overflow-hidden px-4 py-20 lg:py-24 z-999 text-center">
          <span class="absolute bottom-0 left-0 -z-1"><img src="images/grid.svg" alt="grid" /></span>
          <div class="absolute -z-10 pointer-events-none inset-0 overflow-hidden">
            <span class="absolute left-1/2 bottom-0 -translate-x-1/2 -z-1"><img src="images/blur-22.svg" alt="blur" class="max-w-none" /></span>
            <span class="absolute left-1/2 bottom-0 -translate-x-1/2 -z-1"><img src="images/blur-23.svg" alt="blur" class="max-w-none" /></span>
            <span class="absolute left-1/2 bottom-0 -translate-x-1/2 -z-1"><img src="images/blur-24.svg" alt="blur" class="max-w-none" /></span>
          </div>
          <span class="hero-subtitle-gradient relative mb-4 font-medium text-sm inline-flex items-center gap-2 py-2 px-4.5 rounded-full">
            <img src="images/icon-title.svg" alt="icon" />
            <span class="hero-subtitle-text">Join the Journey</span>
          </span>
          <h2 class="text-white mb-4.5 text-2xl font-extrabold sm:text-4xl">Want to Build with Us?</h2>
          <p class="max-w-[640px] mx-auto font-medium text-white/80 mb-8">We’re always looking for product thinkers, curious designers, and specialists who love crafting world-class digital experiences.</p>
          <a href="#" class="hero-button-gradient inline-flex rounded-lg py-3 px-7 text-white font-medium ease-in duration-300 hover:opacity-80">Work With Softmaco</a>
        </div>
      </div>
    </section>
  </main>

  <!-- ===== Footer Start ===== -->
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
            <img src="images/logo.svg" alt="Logo">
          </a>
          <p class="mb-12 xl:w-4/5">
            From concept to code, Softmaco delivers smart, scalable,
            and creative technology solutions for businesses of every size.
          </p>
          <div class="flex items-center gap-5">
            <a href="#" class="hover:text-white ease-in duration-300">
              <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13 21.9506C18.0533 21.4489 22 17.1853 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 16.8379 5.43552 20.8734 10 21.8V16H7V13H10V9.79586C10 7.47449 11.9695 5.64064 14.285 5.80603L17 5.99996V8.99996H15C13.8954 8.99996 13 9.89539 13 11V13H17L16 16H13V21.9506Z" fill=""></path>
              </svg>
            </a>

            <a href="#" class="hover:text-white ease-in duration-300">
              <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.6125 21.5251C16.4625 21.5251 21.2625 14.2126 21.2625 7.87509C21.2625 7.72509 21.2625 7.46259 21.225 7.23759C22.1625 6.56259 22.9875 5.70009 23.625 4.76259C22.725 5.17509 21.825 5.40009 20.8875 5.51259C21.9 4.91259 22.65 3.97509 22.9875 2.8501C22.05 3.3751 21.075 3.78759 19.9125 4.01259C19.0125 3.0751 17.8125 2.4751 16.425 2.4751C13.7625 2.4751 11.5875 4.65009 11.5875 7.31259C11.5875 7.68759 11.625 8.06259 11.7 8.43759C7.8375 8.17509 4.3125 6.26259 1.9125 3.3751C1.5 4.12509 1.275 4.91259 1.275 5.77509C1.275 7.46259 2.1375 8.88759 3.45 9.75009C2.6625 9.71259 1.9125 9.48759 1.275 9.15009C1.275 9.18759 1.275 9.18759 1.275 9.18759C1.275 11.4751 2.925 13.4626 5.1 13.9126C4.6875 14.0251 4.2375 14.0626 3.9 14.0626C3.6 14.0626 3.2625 14.0251 3 13.9501C3.6375 15.8626 5.4 17.2501 7.5 17.2876C5.85 18.5626 3.7875 19.3501 1.575 19.3501C1.125 19.4251 0.75 19.3501 0.375 19.3126C2.4 20.7376 4.9125 21.5251 7.6125 21.5251Z" fill=""></path>
              </svg>
            </a>

            <a href="#" class="hover:text-white ease-in duration-300">
              <svg class="fill-current" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_368_11839)">
                  <path d="M12 0.674805C5.625 0.674805 0.375 5.8498 0.375 12.2998C0.375 17.3998 3.7125 21.7498 8.3625 23.3248C8.9625 23.4373 9.15 23.0623 9.15 22.7998C9.15 22.5373 9.15 21.7873 9.1125 20.7748C5.8875 21.5248 5.2125 19.1998 5.2125 19.1998C4.6875 17.8873 3.9 17.5123 3.9 17.5123C2.85 16.7623 3.9375 16.7623 3.9375 16.7623C5.1 16.7998 5.7375 17.9623 5.7375 17.9623C6.75 19.7623 8.475 19.2373 9.1125 18.8998C9.225 18.1498 9.525 17.6248 9.8625 17.3248C7.3125 17.0623 4.575 16.0498 4.575 11.6248C4.575 10.3498 5.0625 9.3373 5.775 8.5498C5.6625 8.2873 5.25 7.0873 5.8875 5.4748C5.8875 5.4748 6.9 5.1748 9.1125 6.6748C10.05 6.4123 11.025 6.2623 12.0375 6.2623C13.05 6.2623 14.0625 6.3748 14.9625 6.6748C17.175 5.2123 18.15 5.4748 18.15 5.4748C18.7875 7.0498 18.4125 8.2873 18.2625 8.5498C19.0125 9.3373 19.4625 10.3873 19.4625 11.6248C19.4625 16.0498 16.725 17.0623 14.175 17.3248C14.5875 17.6998 14.9625 18.4498 14.9625 19.4998C14.9625 21.0748 14.925 22.3123 14.925 22.6873C14.925 22.9873 15.15 23.3248 15.7125 23.2123C20.2875 21.6748 23.625 17.3623 23.625 12.2248C23.5875 5.8498 18.375 0.674805 12 0.674805Z" fill=""></path>
                </g>
                <defs>
                  <clipPath id="clip0_368_11839">
                    <rect width="24" height="24" fill="white"></rect>
                  </clipPath>
                </defs>
              </svg>
            </a>
          </div>
          <p class="font-medium mt-5.5">
            SoftMaco All rights reserved.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- ===== Footer End ===== -->
</body>
</html>

