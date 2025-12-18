@extends("layouts.master")
@push('styles')
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css"
    />
    <link rel="stylesheet" href="{{asset('assets/css/form-validation.css')}}" />
@endpush
@section('content')

      <section class="py-28 lg:pb-60">
        <div class="container md:px-20!">
          
          <div class="relative p-5 pt-16 pb-36 md:px-16! z-10 rounded-2xl md:rounded-[70px]">
            <div
        class="img-bg absolute top-full -end-64"
        data-hide-mobile
      >
        <img
          src="{{asset('assets/images/home/counter/arrow.svg')}}"
          width="481"
          height="107"
          class="rtl:-scale-x-[1]"
          role="presentation"
        />
      </div>
            <div
              class="absolute inset-0 rounded-2xl md:rounded-[70px] bg-[#eaf0ee]/70 z-1 "
            ></div>
            <div class="absolute -inset-0.5 overflow-hidden rounded-2xl md:rounded-[70px]" >
              <img
                class="w-full xl:scale-x-150 h-full object-cover rounded-2xl md:rounded-[70px]"
                srcset="{{ asset('assets/images/Webp-Dimensions/form-img/640x1460.webp') }} w640, {{ asset('assets/images/Webp-Dimensions/form-img/800x1430.webp') }} w800, {{ asset('assets/images/Webp-Dimensions/form-img/1000x1430.webp') }} w1000, {{ asset('assets/images/Webp-Dimensions/form-img/1340x1430.webp') }} w1340"
                src="{{ asset('assets/images/Webp-Dimensions/form-img/1340x1430.webp') }}"
                role="presentation"
              />
            </div>
            <div class="relative">
              <div
        class="img-bg absolute top-1/2 start-0 translate-x-11/12 ltr:-translate-x-11/12 -translate-y-1/2"
        data-hide-mobile
      >
        <img
          src="{{asset('assets/images/home/counter/arrow.svg')}}"
          width="481"
          height="107"
          class="ltr:-scale-x-[1]"
          role="presentation"
        />
      </div>
      <div class="relative rounded-2xl md:rounded-[70px] z-10 border-2  bg-white shadow-sm py-4 border-primary-text-color/20 p-8 lg:p-10">
        <form
          data-validate="true"
          class="lg:w-2/3 mx-auto"
        >
          <!-- Form Header -->
          <h1
            class="text-primary-text-color text-center mb-8 text-3xl lg:text-[26px] font-bold leading-relaxed"
          >
            {{ __('contact.title') }}
          </h1>

          <!-- Name Field -->
          <div class="mb-10 relative">
            <input
              type="text"
              id="name"
              name="name"
              placeholder="{{ __('contact.name_placeholder') }}"
              class="main-input preventNumber"
            />
          </div>

          <!-- Email Field -->
          <div class="mb-10 relative">
            <input
              type="email"
              id="email"
              name="email"
              placeholder="{{ __('contact.email_placeholder') }}"
              class="main-input"
            />
          </div>

          <!-- Phone Field -->
          <div class="mb-10 relative phone-input">
            <input
              type="tel"
              id="phone"
              name="phone"
              placeholder="{{ __('contact.phone_placeholder') }}"
              class="main-input"
            />
            <input type="tel" class="hidden" readonly id="actualPhone" />
          </div>

          <!-- Message Field -->
          <div class="mb-10 relative">
            <textarea
              id="message"
              name="message"
              rows="6"
              placeholder="{{ __('contact.message_placeholder') }}"
              class="main-input resize-none"
            ></textarea>
          </div>

          <!-- Submit Button -->
          <div class="text-center">
            <button
              type="submit"
              class="px-8 py-3 bg-[#EF4444] hover:bg-[#DC2626] text-white font-bold text-description rounded-2xl transition-all duration-300 transform hover:scale-105 hover:shadow-lg cursor-pointer"
            >
              {{ __('contact.btn_submit') }}
            </button>
          </div>
        </form>
        
      </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 items-center z-10 relative mt-10 text-alternate-text-color text-lg">
                <address class="not-italic space-y-4 fill-[#EF4444] mb-4">
                    <a href="mailto:sales@edgateuae.com" id="edugateEmail" class="flex items-center gap-2">
                    <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" aria-labelledby="edugateEmail" viewBox="0 0 512 512">
                      <path d="M48 64c-26.5 0-48 21.5-48 48 0 15.1 7.1 29.3 19.2 38.4l208 156c17.1 12.8 40.5 12.8 57.6 0l208-156c12.1-9.1 19.2-23.3 19.2-38.4 0-26.5-21.5-48-48-48L48 64zM0 196L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-188-198.4 148.8c-34.1 25.6-81.1 25.6-115.2 0L0 196z"/>
                    </svg>
                      sales@edgateuae.com
                    </a>
                    <a href="mailto:sales@edgateuae.com" id="edugateEmail" class="flex items-center gap-2">
                    <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                      <path d="M0 188.6C0 84.4 86 0 192 0S384 84.4 384 188.6c0 119.3-120.2 262.3-170.4 316.8-11.8 12.8-31.5 12.8-43.3 0-50.2-54.5-170.4-197.5-170.4-316.8zM192 256a64 64 0 1 0 0-128 64 64 0 1 0 0 128z"/>
                    </svg>
                      {{ __('contact.address_dubai') }}

                    </a>
                </address>
                <div class="[&_iframe]:w-full [&_iframe]:border-4! [&_iframe]:border-white! [&_iframe]:rounded-3xl">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.0876244916276!2d31.216345999999998!3d30.0343439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145847eacaf7adfd%3A0xf55de03861a346ef!2sEGEC%20-%20Egyptian%20Gulf%20for%20Educational%20Consultant!5e0!3m2!1sar!2seg!4v1762953269752!5m2!1sar!2seg" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
          </div>
        </div>
      </section>

@endsection
@push('scripts')
<script
      defer
      src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput.min.js"
    ></script>
    <script defer src="{{asset('assets/js/form-validation.js')}}"></script>
@endpush