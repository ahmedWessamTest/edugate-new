<nav class=" top-0 left-0 right-0 z-20 transition-all duration-300" style="z-index: 999;" id="mainNav">
        <div class="container">
          <div class="flex items-center justify-between mx-auto py-4">
            <a
              href="./index.html"
              class="flex items-center space-x-3 rtl:space-x-reverse"
            >
              <img
                src="{{ asset('assets/images/navbar/logo.png') }}"
                class="h-8"
                alt="Edugate Logo"
                width="100"
                height="32"
              />
            </a>
            <div
              class="flex items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse relative gap-2"
            >
              <!-- Language Switch Button -->
              <button
                type="button"
                data-dropdown-toggle="language-dropdown-menu"
                aria-label="{{ __('general.aria_change_language') }}"
                class="font-medium py-2 text-sm text-primary-text-color cursor-pointer block"
              >
                <!-- Flag Icon -->
                {{app()->getLocale() == 'ar' ? 'Ar':'En'}}
                <!-- Language Text -->
              </button>
              <!-- Dropdown Language -->
              <div
                class="z-50 end-2 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dropdown-closed hidden"
                style="z-index: 999;"
                id="language-dropdown-menu"
              >
                <ul class="py-2 font-medium" role="none">
                  <li>
                    <a
                      href="{{ LaravelLocalization::getLocalizedURL(app()->getLocale() === 'ar' ? 'en' : 'ar', null, [], true) }}"
                      class="block px-4 py-2 text-sm text-primary-text-color hover:bg-gray-100"
                      role="menuitem"
                    >
                      <div class="inline-flex items-center">
                        {{app()->getLocale() == 'ar' ? __('general.lang_english_us') : __('general.lang_arabic_eg')}}                       
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- Mobile Menu Button -->
              <button
                type="button"
                id="mobile-menu-btn"
                class="inline-flex items-center p-2 w-10 h-10 bg-active-color justify-center text-sm text-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 xl:hidden"
              >
                <span class="sr-only">{{ __('general.aria_open_menu') }}</span>
                <svg
                  class="w-5 h-5 text-white"
                  aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 17 14"
                >
                  <path
                    stroke="currentColor"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15"
                  ></path>
                </svg>
              </button>
            </div>
            <!-- NavBar In Desktop -->
            <div
              class="items-center justify-between hidden xl:flex md:order-1"
              id="navbar-items"
            >
              <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border md:space-x-8 space-x-reverse md:flex-row md:mt-0 md:border-0 text-[10px]"
              >
                <li>
                  <a
                    href="{{ route('home') }}"
                    class="block py-2 px-3 fill-primary-text-color rounded-sm md:bg-transparent md:p-0 nav-link-underline {{ request()->routeIs('home') ? 'active' : '' }}"
                    aria-current="page"
                  >
                    <svg
                      aria-label="{{ __('general.aria_home') }}"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 512 512"
                      width="20"
                    >
                      <path
                        d="M277.8 8.6c-12.3-11.4-31.3-11.4-43.5 0l-224 208c-9.6 9-12.8 22.9-8 35.1S18.8 272 32 272l16 0 0 176c0 35.3 28.7 64 64 64l288 0c35.3 0 64-28.7 64-64l0-176 16 0c13.2 0 25-8.1 29.8-20.3s1.6-26.2-8-35.1l-224-208zM240 320l32 0c26.5 0 48 21.5 48 48l0 96-128 0 0-96c0-26.5 21.5-48 48-48z"
                      ></path>
                    </svg>
                  </a>
                </li>
                <li>
                  <a
                    href="{{route('about')}}"
                    class="block py-2 px-3 md:p-0 text-primary-text-color rounded-sm nav-link-underline {{ request()->routeIs('about') ? 'active' : '' }}"
                    >{{ __('general.nav_about') }}</a
                  >
                </li>
                <li>
                  <a
                    href="{{ route('services') }}"
                    class="block py-2 px-3 md:p-0 text-primary-text-color rounded-sm nav-link-underline {{ request()->routeIs('services') ? 'active' : '' }}"
                    >{{ __('general.nav_services') }}</a
                  >
                </li>

                <!-- Education Abroad -->
                <li class="relative group/menui-1 mb-0">
                  <a
                    class="flex items-center pt-2 pb-3 px-2 md:p-0 text-primary-text-color rounded-sm"
                    href=""
                  >
                    {{ __('general.nav_study_abroad') }}
                    <svg
                      class="w-2.5 h-2.5 ms-2.5"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 10 6"
                    >
                      <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 4 4 4-4"
                      ></path>
                    </svg>
                  </a>
                  <ul
                    class="absolute top-full rounded-[25px] z-99 overflow-hidden left-0 w-full bg-white hidden group-hover/menui-1:block"
                  >
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >{{ __('general.dropdown_overview') }}
                      </a>
                    </li>
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >{{ __('general.dropdown_study_egypt') }}
                      </a>
                    </li>
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >{{ __('general.dropdown_study_uae') }}</a
                      >
                    </li>
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >{{ __('general.dropdown_study_abroad') }}</a
                      >
                    </li>
                  </ul>
                </li>

                <li class="relative group/menui-2 mb-0">
                  <a
                    class="flex items-center pt-2 pb-3 px-2 md:p-0 text-primary-text-color rounded-sm"
                  >
                    {{ __('general.nav_educational_sectors') }}
                    <svg
                      class="w-2.5 h-2.5 ms-2.5"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 10 6"
                    >
                      <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 4 4 4-4"
                      ></path>
                    </svg>
                  </a>
                  <ul
                    class="absolute top-full rounded-[25px] z-99 overflow-hidden left-0 w-full bg-white hidden group-hover/menui-2:block"
                  >
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >{{ __('general.dropdown_overview') }}
                      </a>
                    </li>
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >{{ __('general.dropdown_study_egypt') }}
                      </a>
                    </li>
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >{{ __('general.dropdown_study_uae') }}</a
                      >
                    </li>
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >{{ __('general.dropdown_study_abroad') }}</a
                      >
                    </li>
                  </ul>
                </li>

                <li class="relative group/menui-3">
                  <a
                    class="flex items-center pt-2 pb-3 px-2 md:p-0 text-primary-text-color rounded-sm"
                  >
                    {{ __('general.nav_education_by_nationality') }}
                    <svg
                      class="w-2.5 h-2.5 ms-2.5"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 10 6"
                    >
                      <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 4 4 4-4"
                      ></path>
                    </svg>
                  </a>
                  <ul
                    class="absolute top-full rounded-[25px] z-99 overflow-hidden left-0 w-full bg-white hidden group-hover/menui-3:block"
                  >
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >{{ __('general.dropdown_overview') }}
                      </a>
                    </li>
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >{{ __('general.dropdown_study_egypt') }}
                      </a>
                    </li>
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >{{ __('general.dropdown_study_uae') }}</a
                      >
                    </li>
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300 nav-link-underline"
                        >{{ __('general.dropdown_study_abroad') }}</a
                      >
                    </li>
                  </ul>
                </li>

                <li>
                  <a
                    href="{{route('blogs')}}"
                    class="block py-2 px-3 md:p-0 text-primary-text-color rounded-sm nav-link-underline"
                    >{{ __('general.nav_blogs') }}</a
                  >
                </li>

                <li>
                  <a
                    href="{{route('gallery')}}"
                    class="block py-2 px-3 md:p-0 text-primary-text-color rounded-sm nav-link-underline"
                    >{{ __('general.nav_gallery') }}
                  </a>
                </li>

                <li>
                  <a
                    href="{{route('contact-us')}}"
                    class="block py-2 px-3 md:p-0 text-primary-text-color rounded-sm nav-link-underline"
                    >{{ __('general.nav_contact') }}
                  </a>
                </li>

                <li>
                  <a
                    href="{{route('admission-form')}}"
                    class="block py-2 px-4 capitalize md:py-0 text-white bg-active-color rounded-2xl"
                    >{{ __('general.nav_study_abroad') }}
                  </a>
                </li>
              </ul>
            </div>
            <!-- OffCanvas Menu -->
            <div
              id="mobile-menu"
              class="fixed top-0 start-0 w-80 h-full bg-white z-50 transform translate-x-full ltr:-translate-x-full transition-transform duration-300 overflow-y-auto"
            >
              <a
                href="/ar/index.html"
                class="flex items-center space-x-3 rtl:space-x-reverse m-4 py-4 sticky top-0 bg-white z-10 border-b border-gray-100"
              >
                <img
                  src="{{ asset('assets/images/navbar/logo.png') }}"
                  class="h-8"
                  decoding="async"
                  alt="Edugate Logo"
                />
              </a>
              <!-- Menu Items -->
              <ul class="flex flex-col p-4 pb-20 space-y-2 font-medium">
                <li>
                  <a
                    href="{{ route('home') }}"
                    class="block py-2 px-3 text-primary-text-color nav-link-underline-offcanvas {{ request()->routeIs('home') ? 'active' : '' }}"
                    >{{ __('general.nav_home') }}</a
                  >
                </li>
                <li>
                  <a
                    href="{{ route('about') }}"
                    class="block py-2 px-3 text-primary-text-color nav-link-underline-offcanvas {{ request()->routeIs('about') ? 'active' : '' }}"
                    >{{ __('general.nav_about') }}</a
                  >
                </li>
                <li>
                  <a
                    href="{{ route('services') }}"
                    class="block py-2 px-3 text-primary-text-color nav-link-underline-offcanvas {{ request()->routeIs('services') ? 'active' : '' }}"
                    >{{ __('general.nav_services') }}</a
                  >
                </li>

                <!-- Education Abroad -->
                <li class="relative group/menui-1">
                  <a
                    class="flex items-center pt-2 pb-3 px-2 md:p-0 text-primary-text-color rounded-sm"
                  >
                    {{ __('general.nav_study_abroad') }}
                    <svg
                      class="w-2.5 h-2.5 ms-2.5"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 10 6"
                    >
                      <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 4 4 4-4"
                      ></path>
                    </svg>
                  </a>
                  <ul
                    class="space-y-1 bg-gray-50 rounded-lg transition-all duration-300 ease-in-out"
                  >
                    <li>
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >{{ __('general.dropdown_overview') }}
                      </a>
                    </li>
                    <li>
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >{{ __('general.dropdown_study_egypt') }}
                      </a>
                    </li>
                    <li>
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >{{ __('general.dropdown_study_uae') }}
                      </a>
                    </li>
                    <li>
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >{{ __('general.dropdown_study_abroad') }}
                      </a>
                    </li>
                  </ul>
                </li>

                <!-- Education nationality - 1st -->
                <li class="relative group/menui-2">
                  <a
                    class="flex items-center pt-2 pb-3 px-2 md:p-0 text-primary-text-color rounded-sm"
                  >
                    {{ __('general.nav_educational_sectors') }}
                    <svg
                      class="w-2.5 h-2.5 ms-2.5"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 10 6"
                    >
                      <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 4 4 4-4"
                      ></path>
                    </svg>
                  </a>
                  <ul
                    class="space-y-1 bg-gray-50 rounded-lg transition-all duration-300 ease-in-out"
                  >
                    <li>
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >{{ __('general.dropdown_overview') }}
                      </a>
                    </li>
                    <li>
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >{{ __('general.dropdown_study_egypt') }}
                      </a>
                    </li>
                    <li>
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >{{ __('general.dropdown_study_uae') }}
                      </a>
                    </li>
                    <li>
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >{{ __('general.dropdown_study_abroad') }}
                      </a>
                    </li>
                  </ul>
                </li>

                <!-- Education nationality - 2nd -->
                <li class="relative group/menui-3">
                  <a
                    class="flex items-center pt-2 pb-3 px-2 md:p-0 text-primary-text-color rounded-sm"
                  >
                    {{ __('general.nav_education_by_nationality') }}
                    <svg
                      class="w-2.5 h-2.5 ms-2.5"
                      aria-hidden="true"
                      xmlns="http://www.w3.org/2000/svg"
                      fill="none"
                      viewBox="0 0 10 6"
                    >
                      <path
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m1 1 4 4 4-4"
                      ></path>
                    </svg>
                  </a>
                  <ul
                    class="space-y-1 bg-gray-50 rounded-lg transition-all duration-300 ease-in-out"
                  >
                    <li>
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >{{ __('general.dropdown_overview') }}
                      </a>
                    </li>
                    <li>
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >{{ __('general.dropdown_study_egypt') }}
                      </a>
                    </li>
                    <li>
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >{{ __('general.dropdown_study_uae') }}
                      </a>
                    </li>
                    <li>
                      <a
                        href="{{route('subCategory')}}"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >{{ __('general.dropdown_study_abroad') }}
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="{{ route('blogs') }}"
                    class="block py-2 px-3 text-primary-text-color nav-link-underline-offcanvas {{ request()->routeIs('blogs') ? 'active' : '' }}"
                    >{{ __('general.nav_blog') }}</a
                  >
                </li>

                <li>
                  <a
                    href="{{ route('gallery') }}"
                    class="block py-2 px-3 text-primary-text-color nav-link-underline-offcanvas {{ request()->routeIs('gallery') ? 'active' : '' }}"
                    >{{ __('general.nav_gallery') }}</a
                  >
                </li>
                <li>
                  <a
                    href="{{ route('contact-us') }}"
                    class="block py-2 px-3 text-primary-text-color nav-link-underline-offcanvas {{ request()->routeIs('contact-us') ? 'active' : '' }}"
                    >{{ __('general.nav_contact') }}</a
                  >
                </li>
                <li>
                  <a
                    href="{{ route('admission-form') }}"
                    class="block py-2 px-3 text-white bg-active-color rounded-2xl text-center nav-link-underline-offcanvas"
                    >{{ __('general.nav_study_abroad') }}</a
                  >
                </li>
              </ul>
            </div>

            <!-- Overlay -->
            <div
              id="menu-overlay"
              class="fixed inset-0 bg-black/50 hidden z-40"
            ></div>
          </div>
        </div>
      </nav>