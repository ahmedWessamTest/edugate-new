 <footer
        class="relative z-10 py-10 pt-14 [content-visibility:auto] [contain-intrinsic-size:885px]"
      >
        <!-- Footer Background Image -->
        <img
          src="{{asset('assets/images/footer/footer-750x400.webp')}}"
          srcset="
            {{asset('assets/images/footer/footer-750x400.webp')}}   750w,
            {{asset('assets/images/footer/footer-1260x500.webp')}} 1260w,
            {{asset('assets/images/footer/footer-1300x600.webp')}} 1300w
          "
          sizes="(max-width: 768px) 100vw, 1300px"
          role="presentation"
          class="absolute inset-0 w-full rounded-ss-[100px] h-full object-cover"
          loading="lazy"
          decoding="async"
        />
        <div
          class="bg-white text-end p-3 rounded-e-full relative w-full mb-6 md:mb-0 max-w-[300px] z-10 start-0 py-3"
        >
          <img
            src="{{asset('assets/images/navbar/logo.png')}}"
            alt="Edugate Logo"
            class="object-contain inline-block"
            loading="lazy"
            decoding="async"
            width="120"
            height="32"
          />
        </div>
        <!-- Green overlay -->
        <div
          class="absolute inset-0 bg-primary-text-color/70 rounded-ss-[100px] z-1"
        ></div>

        <div class="container px-5 relative z-20 text-center md:text-start">
          <div
            class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-4 gap-y-8 gap-x-24"
          >
            <!-- About Edugate -->
            <div class="about-edugate flex items-center">
              <p class="text-white mb-5 text-justify">
                {{ __('general.footer_about_text') }}
              </p>
            </div>

            <!-- Important Links -->
            <div class="important-links">
              <h2 class="text-white font-bold text-[25px] mb-5">{{ __('general.footer_important_links') }}</h2>
              <ul>
                <li>
                  <a
                    href="{{ route('home') }}"
                    class="block py-2 text-white hover:text-gray-200"
                    >{{ __('general.footer_home') }}</a
                  >
                </li>
                <li>
                  <a
                    href="{{ route('services') }}"
                    class="block py-2 text-white hover:text-gray-200"
                    >{{ __('general.footer_services') }}</a
                  >
                </li>
                <li>
                  <a
                    href="{{ route('blogs') }}"
                    class="block py-2 text-white hover:text-gray-200"
                    >{{ __('general.footer_blogs') }}</a
                  >
                </li>
                <li>
                  <a href="{{ route('gallery') }}" class="block py-2 text-white hover:text-gray-200"
                    >{{ __('general.footer_gallery') }}</a
                  >
                </li>
                
              </ul>
            </div>

            <!-- Information -->
            <div class="information">
              <h2 class="text-white font-bold text-[25px] mb-5">{{ __('general.footer_information') }}</h2>
              <ul>
                <li>
                  <a href="{{ route('admission-form') }}" class="block py-2 text-white hover:text-gray-200"
                    >{{ __('general.footer_start_with_us') }}</a
                  >
                </li>
                <li>
                  <a href="{{ route('about') }}" class="block py-2 text-white hover:text-gray-200"
                    >{{ __('general.footer_about_us') }}</a
                  >
                </li>
                <li>
                  <a href="#" class="block py-2 text-white hover:text-gray-200"
                    >{{ __('general.footer_privacy_policy') }}</a
                  >
                </li>
              </ul>
            </div>

            <!-- Contact Us -->
            <div class="contact-us">
              <h2 class="text-white font-bold text-[25px] mb-5">{{ __('general.footer_contact_us') }}</h2>
              <div class="flex items-center mb-4">
                <a
                  href="mailto:sales@edugateuae.com"
                  class="flex items-center text-white hover:text-gray-200"
                >
                  <svg
                    class="h-5 w-5 me-3 fill-current"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"
                  >
                    <path
                      d="M48 64c-26.5 0-48 21.5-48 48 0 15.1 7.1 29.3 19.2 38.4l208 156c17.1 12.8 40.5 12.8 57.6 0l208-156c12.1-9.1 19.2-23.3 19.2-38.4 0-26.5-21.5-48-48-48L48 64zM0 196L0 384c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-188-198.4 148.8c-34.1 25.6-81.1 25.6-115.2 0L0 196z"
                    />
                    \
                  </svg>
                  sales@edugateuae.com
                </a>
              </div>
              <div class="flex items-center">
                <a
                  href="tel:0123456789"
                  class="flex items-center text-white hover:text-gray-200"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512"
                    width="20"
                    height="20"
                    class="me-3 fill-current"
                  >
                    <path
                      d="M160.2 25C152.3 6.1 131.7-3.9 112.1 1.4l-5.5 1.5c-64.6 17.6-119.8 80.2-103.7 156.4 37.1 175 174.8 312.7 349.8 349.8 76.3 16.2 138.8-39.1 156.4-103.7l1.5-5.5c5.4-19.7-4.7-40.3-23.5-48.1l-97.3-40.5c-16.5-6.9-35.6-2.1-47 11.8l-38.6 47.2C233.9 335.4 177.3 277 144.8 205.3L189 169.3c13.9-11.3 18.6-30.4 11.8-47L160.2 25z"
                    />
                  </svg>
                  0123456789
                </a>
              </div>
            </div>
          </div>

          <!-- Social Media Icons -->
          <ul class="flex space-x-4 relative z-10 py-8 justify-end">
            <li>
              <a
                href="#"
                aria-label="{{ __('general.social_tiktok') }}"
                class="fill-primary-text-color w-10 h-10 bg-white flex items-center justify-center rounded-[10px] line-clamp-4"
              >
                <svg
                  width="30"
                  height="30"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M448.5 209.9c-44 .1-87-13.6-122.8-39.2l0 178.7c0 33.1-10.1 65.4-29 92.6s-45.6 48-76.6 59.6-64.8 13.5-96.9 5.3-60.9-25.9-82.7-50.8-35.3-56-39-88.9 2.9-66.1 18.6-95.2 40-52.7 69.6-67.7 62.9-20.5 95.7-16l0 89.9c-15-4.7-31.1-4.6-46 .4s-27.9 14.6-37 27.3-14 28.1-13.9 43.9 5.2 31 14.5 43.7 22.4 22.1 37.4 26.9 31.1 4.8 46-.1 28-14.4 37.2-27.1 14.2-28.1 14.2-43.8l0-349.4 88 0c-.1 7.4 .6 14.9 1.9 22.2 3.1 16.3 9.4 31.9 18.7 45.7s21.3 25.6 35.2 34.6c19.9 13.1 43.2 20.1 67 20.1l0 87.4z"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a
                href="#"
                aria-label="{{ __('general.social_twitter') }}"
                class="fill-primary-text-color w-10 h-10 bg-white flex items-center justify-center rounded-[10px] line-clamp-4"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="30"
                  height="30"
                  viewBox="0 0 512 512"
                >
                  <path
                    d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103l0-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a
                href="#"
                aria-label="{{ __('general.social_whatsapp') }}"
                class="fill-primary-text-color w-10 h-10 bg-white flex items-center justify-center rounded-[10px] line-clamp-4"
              >
                <svg
                  width="30"
                  height="30"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M380.9 97.1c-41.9-42-97.7-65.1-157-65.1-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480 117.7 449.1c32.4 17.7 68.9 27 106.1 27l.1 0c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3 18.6-68.1-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6zM325.1 300.5c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6z"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a
                href="#"
                aria-label="{{ __('general.social_linkedin') }}"
                class="fill-primary-text-color w-10 h-10 bg-white flex items-center justify-center rounded-[10px] line-clamp-4"
              >
                <svg
                  width="30"
                  height="30"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M100.3 448l-92.9 0 0-299.1 92.9 0 0 299.1zM53.8 108.1C24.1 108.1 0 83.5 0 53.8 0 39.5 5.7 25.9 15.8 15.8s23.8-15.8 38-15.8 27.9 5.7 38 15.8 15.8 23.8 15.8 38c0 29.7-24.1 54.3-53.8 54.3zM447.9 448l-92.7 0 0-145.6c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7l0 148.1-92.8 0 0-299.1 89.1 0 0 40.8 1.3 0c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3l0 164.3-.1 0z"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a
                href="#"
                aria-label="{{ __('general.social_x') }}"
                class="fill-primary-text-color w-10 h-10 bg-white flex items-center justify-center rounded-[10px] line-clamp-4"
              >
                <svg
                  width="30"
                  height="30"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M357.2 48L427.8 48 273.6 224.2 455 464 313 464 201.7 318.6 74.5 464 3.8 464 168.7 275.5-5.2 48 140.4 48 240.9 180.9 357.2 48zM332.4 421.8l39.1 0-252.4-333.8-42 0 255.3 333.8z"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a
                href="#"
                aria-label="{{ __('general.social_instagram') }}"
                class="fill-primary-text-color w-10 h-10 bg-white flex items-center justify-center rounded-[10px] line-clamp-4"
              >
                <svg
                  width="30"
                  height="30"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M224.3 141a115 115 0 1 0 -.6 230 115 115 0 1 0 .6-230zm-.6 40.4a74.6 74.6 0 1 1 .6 149.2 74.6 74.6 0 1 1 -.6-149.2zm93.4-45.1a26.8 26.8 0 1 1 53.6 0 26.8 26.8 0 1 1 -53.6 0zm129.7 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM399 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a
                href="#"
                aria-label="{{ __('general.social_facebook') }}"
                class="fill-white"
              >
                <svg
                  width="40"
                  height="40"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"
                >
                  <path
                    d="M64 32C28.7 32 0 60.7 0 96L0 416c0 35.3 28.7 64 64 64l98.2 0 0-145.8-52.8 0 0-78.2 52.8 0 0-33.7c0-87.1 39.4-127.5 125-127.5 16.2 0 44.2 3.2 55.7 6.4l0 70.8c-6-.6-16.5-1-29.6-1-42 0-58.2 15.9-58.2 57.2l0 27.8 83.6 0-14.4 78.2-69.3 0 0 145.8 129 0c35.3 0 64-28.7 64-64l0-320c0-35.3-28.7-64-64-64L64 32z"
                  />
                </svg>
              </a>
            </li>
          </ul>

          <!-- Copyright -->
          <div
            class="text-center mt-10 relative z-10 flex items-center justify-center gap-2"
          >
            <a
              href="https://digitalbondmena.com"
              target="_blank"
              class="text-white"
            >
              {{ __('general.footer_copyright_for') }}
            </a>
            <a href="https://digitalbondmena.com" target="_blank">
              <img
                class="h-6"
                loading="lazy"
                decoding="async"
                width="31"
                height="24"
                src="{{asset('assets/images/footer/digital-bond-logo.webp')}}"
                alt="Digital Bond"
              />
            </a>
          </div>
        </div>
      </footer>