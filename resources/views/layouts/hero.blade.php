<div class="relative">
  <!-- Background Image -->
   @if (request()->route()->getName() == 'home')
   <div class="absolute h-full inset-x-0">
     <img src="{{asset('assets/images/home/1.svg')}}" width="100%" height="1080" role="presentation" class="object-cover h-full" fetchpriority="high"
       decoding="sync" />
   </div>
   @endif
  <!-- ================== Hero Section ================== -->
  <section class="relative lg:h-[85vh] z-10">
    <div class="container h-full">
      <div class="inner relative h-full overflow-hidden rounded-lg md:rounded-[150px] flex items-center text-white">
        <!-- Hero Image with High Priority -->
        <picture>
          <source media="(max-width: 600px)" srcset="{{asset('assets/images/home/hero/hero-600.jpg')}}"
            type="image/webp" />

          <source media="(max-width: 1000px)" srcset="{{asset('assets/images/home/hero/hero-1000.jpg')}}"
            type="image/webp" />
          <img src="{{asset('assets/images/home/hero/hero-1600.jpg')}}" alt="Edugate - Your Gateway to Education"
            class="absolute inset-0 w-full h-full object-cover" width="1920" height="1080" />
        </picture>

        <!-- Overlay Layer -->
        <div class="custom-overlay"></div>

        <!-- Content -->
        <div class="relative z-10 p-10 text-center">
          <h1 class="text-white capitalize mb-5 text-main-title font-bold lg:text-start">
            مستقبلك الأكاديمي يبدأ من هنا
          </h1>
          @if (request()->route()->getName() == "home") 
          <p
            class="text-white max-h-[100px] custom-scrollbar overflow-y-auto mb-5 text-sub-title text-center lg:text-start font-medium w-full lg:max-w-[600px]">
            اكتشف عالمك الدراسي الجديد، حيث تجد كل ما تحتاجه معنا و كل
            المعلومات عن الجامعات و التخصصات اكتشف عالمك الدراسي الجديد،
            حيث تجد كل ما تحتاجه معنا و كل
          </p>

          <div class="flex items-center justify-center lg:justify-start gap-x-3 mt-4">
            <a href="./contact-us/index.html" class="bg-white text-primary-text-color py-1 px-1.5 rounded-[25px]">
              انطلق بخطوتك الأولى معنا
            </a>
            <img src="../assets/images/home/hero/arrow.svg" decoding="async" width="60" height="20"
              class="ltr:-scale-x-[1]" role="presentation" />
          </div>
          @elseif(request()->route()->getName() == "about")
          <div
                class="flex items-center justify-center lg:justify-start gap-x-3 mt-4 fill-white"
              >
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 640 640">
                  <path d="M341.8 72.6C329.5 61.2 310.5 61.2 298.3 72.6L74.3 280.6C64.7 289.6 61.5 303.5 66.3 315.7C71.1 327.9 82.8 336 96 336L112 336L112 512C112 547.3 140.7 576 176 576L464 576C499.3 576 528 547.3 528 512L528 336L544 336C557.2 336 569 327.9 573.8 315.7C578.6 303.5 575.4 289.5 565.8 280.6L341.8 72.6zM304 384L336 384C362.5 384 384 405.5 384 432L384 528L256 528L256 432C256 405.5 277.5 384 304 384z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 640 640">
                  <path d="M73.4 297.4C60.9 309.9 60.9 330.2 73.4 342.7L233.4 502.7C245.9 515.2 266.2 515.2 278.7 502.7C291.2 490.2 291.2 469.9 278.7 457.4L173.3 352L544 352C561.7 352 576 337.7 576 320C576 302.3 561.7 288 544 288L173.3 288L278.7 182.6C291.2 170.1 291.2 149.8 278.7 137.3C266.2 124.8 245.9 124.8 233.4 137.3L73.4 297.3z"/>
                </svg>
                <span>من نحن</span>
              </div>
          @endif
        </div>
      </div>
    </div>
  </section>
  @if (request()->route()->getName() == 'Home')
    <!-- ================== About Us Section ================== -->
    <section class="py-18 relative z-10">
      <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-10 lg:gap-x-15">
          <div class="content">
            <div class="flex justify-start items-center gap-x-3 pb-4">
              <h2 class="main-title-ui pb-2">من نحن</h2>
              <img src="{{asset('assets/images/home/about/about-us.svg')}}" alt="about us" loading="lazy" width="20"
                height="88" />
            </div>
            <div class="main-description-ui pb-4 lg:pb-0 overflow-y-auto custom-scrollbar pe-1" style="max-height: 240px">
              نخبة من الاستشاريين الأكاديميين و خبراء التعليم الدوليين
              المعتمدين، متخصصين في مجال خدمات التعليم الدولي و الدراسة في
              الخارج، التسويق التعليمي و تسويق البرامج التعليمية، إدارة
              القبولات الجامعية، و تأمين القبولات المعتمدة في الجامعات
              الموصى بها دوليا و المصنفة عالميا. و تعتبر إديوجيت من أهم
              الشركات التي ساهمت في دعم طلاب الوطن العربي و طلاب الخليج.
              نخبة من الاستشاريين الأكاديميين و خبراء التعليم الدوليين
              المعتمدين، متخصصين في مجال خدمات التعليم الدولي و الدراسة في
              الخارج، التسويق التعليمي و تسويق البرامج التعليمية، إدارة
              القبولات الجامعية، و تأمين القبولات المعتمدة في الجامعات
              الموصى بها دوليا و المصنفة عالميا. و تعتبر إديوجيت من أهم
              الشركات التي ساهمت في دعم طلاب الوطن العربي و طلاب الخليج.
            </div>
          </div>
          <figure>
            <img class="w-full h-full object-cover" loading="lazy" decoding="async"
              src="{{asset('assets/images/home/about/aboutus.webp')}}" alt="about us image" />
          </figure>
        </div>
      </div>
    </section>
  @endif
</div>