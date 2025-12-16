@extends("layouts.master")
@section('title', 'services')
@section('content')
@push('styles')
 <style>
      /* Loading screen critical styles */
      .loading-screen {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        will-change: opacity;
      }
      .loading-screen.hidden {
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
      }
      .main-bg-image {
        position: absolute;
        inset-inline-end: 0;
        height: 100%;
        width: 50%;
      }
      .swiper-pagination {
        position: static;
        margin-top: .9375rem !important;
        margin:auto;
        transform: translate(0) !important;
        .swiper-pagination-bullet {
          background-color: transparent;
          border:3px solid #e4e4e4;
          height: 25px;
          width: 50px;
          border-radius: 999px;
          opacity: 1;
          &.swiper-pagination-bullet-active{
            background-color: #e4e4e4;
          }
        }
      }
      /* h6 inside parent */
.service-wrapper h6 {
  color: #D0D0D0;
}

.service-wrapper figure {
  background-color: #D0D0D0;
  transition: all 200ms;
}

.service-wrapper .inner:hover h6 {
  color: var(--color-primary-text-color);
}

.service-wrapper .inner:hover figure {
  background-color: var(--color-primary-text-color);
}

    </style>
@endpush
<section class="py-20 lg:pt-52">
        <div class="container">
          <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-center gap-y-5 gap-x-3 service-wrapper">
            <!-- Item 2 -->
             @for ($i = 0; $i < 7; $i++)
             <div class="inner">
               <figure class=" w-[200px] h-[200px] mx-auto rounded-full flex items-center justify-center">
                   <img
                     loading="lazy"
                     decoding="async"
                     src="{{asset('assets/images/services/1.svg')}}"
                     alt="logo" width="150" 
                     />
                 </figure>
               <h6
                 class="text-[#D0D0D0] text-center font-bold text-description pt-5 pb-3">
                 قبولات جامعية
               </h6>
               <p
                 class="text-alternate-text-color leading-10 text-center font-light">
                 نقدم لك مجموعة متكاملة من الخدمات التعليمية المصممة خصيصاً
                 لتناسب احتياجاتك الأكاديمية والمهنية
               </p>
             </div>
             @endfor
          </div>
        </div>
      </section>
      <!-- ================== Blogs ================== -->
        <section class="pb-56 pt-10">
          <h6
            class="main-title-ui mx-auto mb-20 before:w-[20%] relative after:top-0"
          >
            <img
              src="{{asset('assets/images/home/blogs/pin.svg')}}"
              role="presentation"
              loading="lazy"
              decoding="async"
              class="absolute start-0 translate-x-[65%] w-10 h-10 ltr:-translate-x-[65%] translate-y-[-20%]"
            />
            بعض المقالات الهامه
          </h6>

          <div class="container px-5 relative z-10">
            <div
              class="grid grid-cols-1 gap-x-8 gap-y-5 md:grid-cols-2 lg:grid-cols-3"
            >
            @for ($i = 0; $i < 3; $i++)
            <article
            class="blog [content-visibility:auto] group shadow-md rounded-[25px] overflow-hidden [contain-intrinsic-size:350px]"
          >
          <a href="{{route('blog-detail', 'test')}}" >
            <div class="overflow-hidden w-full aspect-2/1 relative">
              <img
                class="h-full group-hover:scale-110 duration-500 w-full object-cover"
                src="{{asset('assets/images/home/blogs/blogs.webp')}}"
                alt="Blog Featured Image"
                loading="lazy"
                decoding="async"
              />
              <div
                class="img-date absolute left-0 p-2 font-medium bg-primary-text-color rounded-tr-[25px] bottom-2.5"
              >
                <span class="text-white text-[14px] capitalize">
                  9 aug 2025
                </span>
              </div>
            </div>
            <div class="content bg-white py-4 px-3">
              <h4
                title=" التعليم في الخارج"
                class="text-primary-text-color text-sub-title mb-4 block font-medium line-clamp-1"
              >
                التعليم في الخارج
              </h4>
              <p class="line-clamp-2 text-sm text-alternate-text-color mb-2" title=" اصبح الكثير من طلاب الدول العربية يرغبون في الدراسة في الخارج">
                اصبح الكثير من طلاب الدول العربية يرغبون في الدراسة في الخارج
              </p>
              <span
                class="block text-primary-text-color mb-2 font-light"
              >
                المزيد ...</
              >
            </div>
          </a>
        </article>
            @endfor
             
            </div>
            
        <div
          data-hide-mobile
          class="img-bg absolute bottom-0 end-12 -translate-x-1/2 translate-y-full rtl:-scale-x-[1]"
        >
          <img
            width="481"
            height="207"
            src="{{asset('assets/images/home/counter/arrow.svg')}}"
            role="presentation"
            loading="lazy"
            decoding="async"
          />
        </div>
          </div>
        </section>
      @endsection