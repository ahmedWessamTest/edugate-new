@extends("layouts.master")
@section('title', 'Home')
@section('content')
  <!-- ================== Our Services Section ================== -->
  <div class="service relative overflow-hidden pt-5 pb-20 [content-visibility:auto]">
    <!-- Background image -->
    <img srcset="
                  ../assets/images/home/services/600x250.webp   600w,
                  ../assets/images/home/services/900x400.webp   900w,
                  ../assets/images/home/services/1200x500.webp 1200w
                " src="../assets/images/home/services/1200x500.webp"
      sizes="(width <= 600px) 600px, (width >= 900px) 900px,(width >= 1200px) 1200px" width="1200" height="500"
      class="absolute inset-0 w-full h-full object-cover" loading="lazy" decoding="async" role="presentation" />

    <div class="container relative z-10">
      <div class="grid grid-cols-12 gap-y-3">
        <div class="col-span-12 lg:col-span-8 flex justify-center items-center">
          <div class="content py-15 lg:py-0">
            <div class="relative w-fit">
              <img src="../assets/images/home/services/decorative.svg" role="presentation"
                class="absolute top-0 start-0 -translate-y-full" loading="lazy" decoding="async" width="48" height="48" />
              <h3 class="main-title-ui">خدماتنا</h3>
            </div>
            <div class="text-description text-alternate-text-color max-w-[80%] overflow-y-auto" style="max-height: 100px">
              نقدم لك مجموعة متكاملة من الخدمات التعليمية المصممة خصيصاً
              لتناسب احتياجاتك الأكاديمية والمهنية. وتشمل:
            </div>
          </div>
        </div>
        <div class="col-span-12 lg:col-span-4 flex flex-col lg:flex-row items-center gap-4">
          <div class="swiper mySwiper lg:h-[500px] relative">
            <div class="swiper-wrapper overflow-visible! h-full px-1">
              <div class="swiper-slide service-slider">
                <div class="item h-full flex flex-col justify-between">
                  <span>
                    <img src="../assets/images/home/services/edu.svg" width="40" height="49" role="presentation"
                      loading="lazy" decoding="async" class="h-[50]" />
                  </span>
                  <p class="text-primary-text-color text-sub-title font-medium mb-2 line-clamp-1">
                    التقديم على الجامعات العالمية
                  </p>
                  <div
                    class="inner w-[98%] border-alternate-text-color text-alternate-text-color text-description border-2 p-3 rounded-xl">
                    <div class="overflow-y-auto custom-scrollbar" style="height: 85px">
                      دعم كامل في تجهيز الملفات، كتابة الخطابات، و التقديم
                      على أرقى الجامعات
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide service-slider">
                <div class="item h-full flex flex-col justify-between">
                  <span>
                    <img src="../assets/images/home/services/qus.svg" class="w-10 py-2" role="presentation" width="40"
                      height="56" loading="lazy" decoding="async" />
                  </span>
                  <p class="text-primary-text-color text-sub-title font-medium mb-2 line-clamp-1">
                    قبولات اللغة
                  </p>
                  <div
                    class="inner w-[98%] border-alternate-text-color text-alternate-text-color text-description border-2 p-3 rounded-xl">
                    <div class="overflow-y-auto custom-scrollbar" style="height: 85px">
                      تحسين المهارات في مجالات متنوعة كاللغة، الترجمة،
                      وريادة الأعمال
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide service-slider">
                <div class="item h-full flex flex-col justify-between">
                  <span>
                    <img src="../assets/images/home/services/lang.svg" role="presentation" decoding="async" loading="lazy"
                      width="40" height="53" />
                  </span>
                  <p class="text-primary-text-color text-sub-title font-medium mb-2 line-clamp-1">
                    استشارات أكاديمية مخصصة
                  </p>
                  <div class="inner w-[98%] text-alternate-text-color text-description border-2 p-3 rounded-xl">
                    <div class="overflow-y-auto custom-scrollbar" style="height: 85px">
                      نساعدك في اختيار التخصص و الجامعة المناسبة لمهاراتك و
                      طموحاتك
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide service-slider">
                <div class="item h-full flex flex-col justify-between">
                  <span>
                    <img src="../assets/images/home/services/edu.svg" width="40" height="49" role="presentation"
                      loading="lazy" decoding="async" />
                  </span>
                  <p class="text-primary-text-color text-sub-title font-medium mb-2 line-clamp-1">
                    قبولات اللغة
                  </p>
                  <div class="overflow-y-auto custom-scrollbar"></div>
                  <div
                    class="inner w-[98%] border-alternate-text-color text-alternate-text-color text-description border-2 p-3 rounded-xl">
                    <div class="overflow-y-auto custom-scrollbar" style="height: 85px">
                      نساعدك في اختيار التخصص و الجامعة المناسبة لمهاراتك و
                      طموحاتك نساعدك في اختيار التخصص و الجامعة المناسبة
                      لمهاراتك و طموحاتك
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="p-2 lg:p-0">
            <div class="nav flex lg:flex-col gap-5 items-center justify-center h-full">
              <!-- Previous Button (Vertical - Up) -->

              <svg width="24" height="24" viewBox="0 0 24 24"
                class="fa-solid ltr:order-1 ltr:lg:order-0 lg:-rotate-90 fa-arrow-up cursor-pointer hover:opacity-75 transition-opacity duration-200 text-xl"
                fill="none" id="prevBtnLg" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 5L16 12L9 19" stroke="#f64148" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
              <!-- Next Button (Vertical - Down) -->
              <svg width="26" height="26" viewBox="0 0 26 26"
                class="fa-solid -rotate-180 lg:rotate-90 fa-arrow-up cursor-pointer hover:opacity-75 transition-opacity duration-200 text-xl"
                fill="none" id="nextBtnLg" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 5L16 12L9 19" stroke="#f64148" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ================== Our Counter Section ================== -->
  <section class="relative -top-6 [content-visibility:auto]">
    <div class="container">
      <div
        class="w-full relative mx-auto rounded-4xl overflow-hidden text-white flex items-center justify-center px-5 lg:px-10 pt-4 pb-10">
        <!-- Background Image -->
        <img srcset="
              {{asset('assets/images/home/counter/counter-img/600x250.webp')}}   600w,
              {{asset('assets/images/home/counter/counter-img/900x400.webp')}}   900w,
              {{asset('assets/images/home/counter/counter-img/1200x500.webp')}} 1200w
              " src="{{asset('assets/images/home/counter/counter-img/1200x500.webp')}}"
          sizes="(max-width: 640px) 100vw, (max-width: 1024px) 80vw, 1200px" width="1200" height="500"
          class="absolute inset-0 w-full h-full object-cover" loading="lazy" decoding="async" role="presentation" />

        <div class="custom-overlay"></div>
        <div class="flex flex-col md:flex-row w-full h-full items-center justify-between relative z-10 gap-6 md:gap-0">
          <div role="group" aria-labelledby="Free-consultations"
            class="item flex flex-col items-center justify-center px-5 lg:px-10 w-full md:w-auto">
            <img src="{{asset('./assets/images/home/counter/pod.svg')}}" class="pb-2" width="40" height="53"
              role="presentation" loading="lazy" decoding="async" />

            <h3 class="text-white text-2xl lg:text-main-title font-bold mb-2">
              660
            </h3>
            <p id="Free-consultations" class="text-white text-[14px]">
              استشارات مجانية ودعم
            </p>
          </div>
          <!-- Divider: vertical on desktop, horizontal on mobile -->
          <span class="hidden md:block w-0.5 h-32 bg-white"></span>
          <span class="block md:hidden w-full h-0.5 bg-white"></span>

          <div role="group" aria-labelledby="students-who"
            class="item flex flex-col items-center justify-center px-5 lg:px-10 w-full md:w-auto">
            <img src="{{asset('assets/images/home/counter/stu.svg')}}" class="pb-2" role="presentation" width="50"
              height="42" loading="lazy" decoding="async" />
            <h3 class="text-white text-2xl lg:text-main-title font-bold mb-2">
              1500
            </h3>
            <p id="students-who" class="text-white text-[14px]">
              طالب تم التحاقهم
            </p>
          </div>
          <!-- Divider: vertical on desktop, horizontal on mobile -->
          <span class="hidden md:block w-0.5 h-32 bg-white"></span>
          <span class="block md:hidden w-full h-0.5 bg-white"></span>

          <div role="group" aria-labelledby="different-nationalities"
            class="item flex flex-col items-center justify-center px-5 lg:px-10 w-full md:w-auto">
            <img src="{{asset('assets/images/home/counter/world.svg')}}" class="pb-2" role="presentation" loading="lazy"
              width="48" height="58" />
            <h3 class="text-white text-2xl lg:text-main-title font-bold mb-2">
              3
            </h3>
            <p id="different-nationalities" class="text-white text-[14px]">
              جنسيات مختلفة
            </p>
          </div>
          <!-- Divider: vertical on desktop, horizontal on mobile -->
          <span class="hidden md:block w-0.5 h-32 bg-white"></span>
          <span class="block md:hidden w-full h-0.5 bg-white"></span>

          <div role="group" aria-labelledby="accredited-university"
            class="item flex flex-col items-center justify-center px-5 lg:px-10 w-full md:w-auto">
            <img src="{{asset('assets/images/home/counter/flag.svg')}}" class="pb-2" role="presentation" loading="lazy"
              decoding="async" width="40" height="48" />
            <h3 class="text-white text-2xl lg:text-main-title font-bold mb-2">
              60
            </h3>
            <p id="accredited-university" class="text-white text-[14px]">
              جامعة معتمدة
            </p>
          </div>
        </div>
      </div>
    </div>
    <div data-hide-mobile class="img-bg absolute bottom-0 start-0 translate-y-full ltr:-scale-x-[1]">
      <img width="681" height="307" src="{{asset('assets/images/home/counter/arrow.svg')}}" role="presentation"
        loading="lazy" decoding="async" />
    </div>
  </section>
  <!-- ================== Wy Us ================== -->
  <section class="py-16">
    <div class="container lg:px-16!">
      <div class="grid grid-cols-12">
        <div class="col-span-12 lg:col-span-6 content-center">
          <div class="content">
            <h4 class="main-title-ui before:hidden">ليه تختارنا؟</h4>
            <p
              class="text-description main-title-ui before:w-[25%] before:rounded-2xl w-fit text-alternate-text-color pb-3">
              لأن مستقبلك يستاهل الأفضل
            </p>
          </div>
        </div>

        <div class="col-span-12 lg:col-span-6 text-center">
          <div class="flex flex-col lg:flex-row items-center lg:items-start justify-center gap-4 h-full">
            <div class="options flex flex-col w-full lg:w-auto gap-3 lg:gap-0 lg:h-full">
              <div
                class="option py-10 h-full bg-primary-text-color px-2 lg:py-2 flex items-center justify-center rounded-[25px] border-transparent">
                <p class="text-white line-clamp-2">
                  تجهيز احترافي لكل المستندات .
                </p>
              </div>
              <div
                class="option py-10 h-full lg:-mt-7 bg-active-color px-2 lg:py-2 rounded-[25px] flex items-center justify-center border-3 border-white">
                <p class="text-white line-clamp-2">
                  شبكة عالمية من الشركاء الأكاديميين .
                </p>
              </div>
              <div
                class="option py-10 h-full lg:-mt-7 bg-primary-text-color px-2 lg:py-2 rounded-[25px] flex items-center justify-center border-3 border-white">
                <p class="text-white line-clamp-2">دعم قوي مستمر وفعال</p>
              </div>
            </div>

            <div class="biger-image h-full">
              <img src="{{asset('assets/images/home/whyus/whyus.png')}}" alt="Why Choose Us Illustration" loading="lazy"
                decoding="async" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonials Section -->
  <section class="py-20 relative overflow-hidden">
    <div class="px-5 lg:px-0 h-full">
      <div class="flex flex-col lg:flex-row-reverse gap-8 lg:gap-0 items-center justify-end">
        <!-- Testimonial Slider (Light Card) -->
        <div
          class="w-full lg:w-[600px] xl:w-[675px] bg-white rounded-[25px] shadow-lg pt-15 p-6 relative z-40 h-[80%] lg:translate-x-[90px] ltr:lg:-translate-x-[90px]">
          <!-- Paper clip icon -->
          <div class="absolute -top-4 left-[50%] translate-x-[-50%]">
            <img src="../assets/images/home/testimonials/review.svg" role="presentation" loading="lazy" decoding="async"
              width="72" height="49" />
          </div>

          <!-- Quote marks -->
          <div class="absolute top-6 right-6">
            <svg xmlns="http://www.w3.org/2000/svg" height="32" width="32" viewBox="0 0 640 640">
              <path fill="#adb7b8"
                d="M96 280C96 213.7 149.7 160 216 160L224 160C241.7 160 256 174.3 256 192C256 209.7 241.7 224 224 224L216 224C185.1 224 160 249.1 160 280L160 288L224 288C259.3 288 288 316.7 288 352L288 416C288 451.3 259.3 480 224 480L160 480C124.7 480 96 451.3 96 416L96 280zM352 280C352 213.7 405.7 160 472 160L480 160C497.7 160 512 174.3 512 192C512 209.7 497.7 224 480 224L472 224C441.1 224 416 249.1 416 280L416 288L480 288C515.3 288 544 316.7 544 352L544 416C544 451.3 515.3 480 480 480L416 480C380.7 480 352 451.3 352 416L352 280z" />
            </svg>
          </div>

          <!-- Swiper container -->
          <div class="testimonials-swiper swiper h-full">
            <div class="swiper-wrapper">
              <!-- Testimonial Slide 1 -->
              @for ($i = 0; $i < 3; $i++)
                <div class="swiper-slide">
                  <div class="flex flex-col h-full">
                    <p class="text-description text-alternate-text-color mb-6 max-h-[150px] overflow-y-auto">
                      موقع مميز جدا و بيعطي فرص هائلة للطلاب و الحصول علي
                      الدعم الكامل في تخصص بيوفر لهم الجامعات المستهدفة بشكل و
                      حجم مختلف بيعبر عن خبرة بهذه الصدد و الحماس فنحن نؤمن ان
                      كل طالب سيشكل الحكم موقع مميز جدا و بيعطي فرص هائلة
                      للطلاب و الحصول علي الدعم الكامل في تخصص بيوفر لهم
                      الجامعات المستهدفة بشكل و حجم مختلف بيعبر عن خبرة بهذه
                      الصدد و الحماس فنحن نؤمن ان كل طالب سيشكل الحكم موقع
                      مميز جدا و بيعطي فرص هائلة للطلاب و الحصول علي الدعم
                      الكامل في تخصص بيوفر لهم الجامعات المستهدفة بشكل و حجم
                      مختلف بيعبر عن خبرة بهذه الصدد و الحماس فنحن نؤمن ان كل
                      طالب سيشكل الحكم
                    </p>
                    <div class="mt-auto flex gap-5 items-center justify-end">
                      <div>
                        <p class="font-bold text-primary-text-color">
                          محمد أحمد
                        </p>
                        <p class="text-gray-500">طالب</p>
                      </div>
                      <div class="w-12 h-12 rounded-full overflow-hidden ml-4">
                        <img src="{{asset('assets/images/home/whyus/whyus.png')}}" alt="محمد أحمد"
                          class="w-full h-full object-cover" loading="lazy" decoding="async" />
                      </div>
                    </div>
                  </div>
                </div>
              @endfor
            </div>
          </div>
          <!-- Navigation buttons -->
          <div class="flex justify-between mt-4">
            <button id="testimonial-next" class="cursor-pointer ltr:order-1" aria-label="Next testimonial">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 5L16 12L9 19" stroke="#1CB280" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </button>
            <button id="testimonial-prev" class="cursor-pointer" aria-label="Previous testimonial">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 19L8 12L15 5" stroke="#1CB280" stroke-width="2" stroke-linecap="round"
                  stroke-linejoin="round" />
              </svg>
            </button>
          </div>
        </div>

        <!-- Green Card with Background Image -->
        <div
          class="w-full lg:w-1/2 bg-primary-text-color rounded-[25px] lg:rounded-s-none overflow-hidden relative lg:h-[400px]">
          <!-- Background image -->
          <img src="{{asset('assets/images/home/testimonials/1200x500.webp')}}" srcset="
                    {{asset('assets/images/home/testimonials/600x250.webp')}}   600w,
                    {{asset('assets/images/home/testimonials/900x400.webp')}}   900w,
                    {{asset('assets/images/home/testimonials/1200x500.webp')}} 1200w
                  " sizes="(max-width: 640px) 100vw, (max-width: 1024px) 80vw, 1200px" width="1200" height="500"
            class="absolute inset-0 w-full h-full object-cover" loading="lazy" decoding="async" role="presentation" />

          <!-- Green overlay -->
          <div class="absolute inset-0 bg-primary-text-color/80 z-10"></div>

          <!-- Content -->
          <div class="relative z-20 px-5 py-15 md:ps-15 md:pe-25 h-full flex flex-col justify-center">
            <h5 class="text-white main-title-ui before:bg-white">الاراء</h5>
            <p class="text-white mb-6 text-description text-justify lg:max-h-[210px] lg:overflow-y-auto">
              نخبة من الاستشاريين الأكاديميين و خبراء التعليم الدوليين
              المعتمدين، متخصصين في مجال خدمات التعليم الدولي و الدراسة في
              الخارج، التسويق التعليمي و تسويق البرامج التعليمية، إدارة
              القبولات الجامعية، و تأمين القبولات المعتمدة في الجامعات
              الموصى بها دوليا و المصنفة عالميا. و تعتبر إديوجيت من أهم
              الشركات التي ساهمت في دعم طلاب الوطن العربي و طلاب الخليج.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================== Banner ================== -->
  <section class="relative pb-[100px]">
    <div class="md:px-0! container h-[430px]">
      <div
        class="relative mx-auto rounded-lg lg:rounded-[70px] overflow-hidden text-white h-full px-10 pt-4 pb-10 flex items-center justify-center">
        <!-- Background image -->
        <img src="{{asset('assets/images/home/Banner/1200x500.webp')}}" srcset="
                  {{asset('assets/images/home/Banner/600x250.webp')}}   600w,
                  {{asset('assets/images/home/Banner/900x400.webp')}}   900w,
                  {{asset('assets/images/home/Banner/1200x500.webp')}} 1200w
                " sizes="(max-width: 640px) 100vw, (max-width: 1024px) 80vw, 1200px" width="1200" height="500"
          class="absolute inset-0 w-full h-full object-cover" loading="lazy" decoding="async" role="presentation" />

        <!-- Overlay -->
        <div class="custom-overlay"></div>

        <!-- Content -->
        <div class="content relative z-10 flex flex-col h-full w-full">
          <!-- Centered Text -->
          <div class="top flex-1 flex flex-col justify-center items-center text-center">
            <p class="text-[25px] font-medium md:line-clamp-1 mb-3">
              مستعد لاتخاذ الخطوه الاول نحو الالتحاق
            </p>
            <p class="text-main-title font-bold md:line-clamp-1">
              بافضل الجامعات المعتمده
            </p>
          </div>

          <!-- Bottom Line -->
          <div class="line mb-1 text-start">
            <p class="text-white font-light">
              تواصل معانا الان لتحديد موعد استشاره ومعرفه المزيد عنا
            </p>
          </div>
          <div class="flex items-center justify-center gap-2 text-white">
            <div class="grow h-px bg-white"></div>
            <span class="w-fit px-2 whitespace-nowrap font-light">ابدا معنا الان</span>
          </div>
        </div>
      </div>
    </div>
    <div class="img-bg absolute bottom-0 end-0 translate-y-[50%] [content-visibility:auto] [contain-intrinsic-size:210px]"
      data-hide-mobile>
      <img src="{{asset('assets/images/home/counter/arrow.svg')}}" width="581" height="207" role="presentation"
        class="-scale-x-[1]" />
    </div>
  </section>
  <!-- ================== Blogs ================== -->
  <section class="pb-[200px]">
    <h6 class="main-title-ui mx-auto mb-20 before:left-0 before:w-[20%] relative after:top-0">
      <img src="{{asset('assets/images/home/blogs/pin.svg')}}" role="presentation" loading="lazy" decoding="async"
        class="absolute start-0 translate-x-[65%] w-10 h-10 ltr:-translate-x-[65%] translate-y-[-20%]" />
      بعض المقالات الهامه
    </h6>

    <div class="container px-5 relative z-10">
      <div class="grid grid-cols-1 gap-x-8 gap-y-5 md:grid-cols-2 lg:grid-cols-3">
        @for ($i = 0; $i < 3; $i++)
          <article
            class="blog [content-visibility:auto] group shadow-md rounded-[25px] overflow-hidden [contain-intrinsic-size:350px]">
            <a href="./blog-details/index.html" class="">
              <div class="overflow-hidden w-full aspect-2/1 relative">
                <img class="h-full group-hover:scale-110 duration-500 w-full object-cover"
                  src="{{asset('assets/images/home/blogs/blogs.webp')}}" alt="Blog Featured Image" loading="lazy"
                  decoding="async" />
                <div class="img-date absolute left-0 p-2 font-medium bg-primary-text-color rounded-tr-[25px] bottom-2.5">
                  <span class="text-white text-[14px] capitalize">
                    9 aug 2025
                  </span>
                </div>
              </div>
              <div class="content bg-white py-4 px-3">
                <h4 title=" التعليم في الخارج"
                  class="text-primary-text-color text-sub-title mb-4 block font-medium line-clamp-1">
                  التعليم في الخارج
                </h4>
                <p class="line-clamp-2 text-sm text-alternate-text-color mb-2"
                  title=" اصبح الكثير من طلاب الدول العربية يرغبون في الدراسة في الخارج">
                  اصبح الكثير من طلاب الدول العربية يرغبون في الدراسة في
                  الخارج
                </p>
                <span class="block text-primary-text-color mb-2 font-light">
                  المزيد ...</span>
              </div>
            </a>
          </article>
        @endfor
      </div>
    </div>
  </section>
@endsection