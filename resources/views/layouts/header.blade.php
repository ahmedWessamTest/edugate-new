<nav class="bg-transparent relative z-20">
        <div class="container">
          <div class="flex items-center justify-between mx-auto py-4">
            <a
              href="./index.html"
              class="flex items-center space-x-3 rtl:space-x-reverse"
            >
              <img
                src="../assets/images/navbar/logo.png"
                class="h-8"
                alt="Edugate Logo"
                width="100"
                height="32"
              />
            </a>
            <div
              class="flex items-center md:order-2 space-x-1 md:space-x-0 rtl:space-x-reverse relative"
            >
              <!-- Language Switch Button -->
              <button
                type="button"
                data-dropdown-toggle="language-dropdown-menu"
                aria-label="change language"
                class="inline-flex items-center font-medium justify-center py-2 text-sm text-primary-text-color rounded-lg cursor-pointer"
              >
                <!-- Flag Icon -->
                <svg
                  class="rounded-full me-2"
                  height="14"
                  width="14"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 512 512"
                >
                  <path fill="#006b3f" d="M0 0h512v512H0z"></path>
                  <path fill="#fff" d="M0 0h512v341.3H0z"></path>
                  <path fill="#ce1126" d="M0 0h512v170.7H0z"></path>
                  <path d="M144 256l112-112 112 112-112 112z"></path>
                </svg>

                <!-- Language Text -->
              </button>
              <!-- Dropdown Language -->
              <div
                class="z-50 end-2 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow-sm dropdown-closed hidden"
                id="language-dropdown-menu"
              >
                <ul class="py-2 font-medium" role="none">
                  <li>
                    <a
                      href="/en/index.html"
                      class="block px-4 py-2 text-sm text-primary-text-color hover:bg-gray-100"
                      role="menuitem"
                    >
                      <div class="inline-flex items-center">
                        <svg
                          aria-hidden="true"
                          class="h-3.5 w-3.5 rounded-full ms-2"
                          xmlns="http://www.w3.org/2000/svg"
                          id="flag-icon-css-us"
                          viewBox="0 0 512 512"
                        >
                          <g fill-rule="evenodd">
                            <g stroke-width="1pt">
                              <path
                                fill="#bd3d44"
                                d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                transform="scale(3.9385)"
                              ></path>
                              <path
                                fill="#fff"
                                d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                transform="scale(3.9385)"
                              ></path>
                            </g>
                            <path
                              fill="#192f5d"
                              d="M0 0h98.8v70H0z"
                              transform="scale(3.9385)"
                            ></path>
                            <path
                              fill="#fff"
                              d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                              transform="scale(3.9385)"
                            ></path>
                          </g>
                        </svg>
                        English (US)
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- Mobile Menu Button -->
              <button
                type="button"
                id="mobile-menu-btn"
                class="inline-flex items-center p-2 w-10 h-10 bg-active-color justify-center text-sm text-gray-500 rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 [@media(min-width:1250px)]:hidden"
              >
                <span class="sr-only">Open main menu</span>
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
              class="items-center justify-between hidden [@media(min-width:1250px)]:flex md:order-1"
              id="navbar-items"
            >
              <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border md:space-x-8 space-x-reverse md:flex-row md:mt-0 md:border-0 text-[10px]"
              >
                <li>
                  <a
                    href="/ar/index.html"
                    class="block py-2 px-3 fill-primary-text-color rounded-sm md:bg-transparent md:p-0 nav-link-underline active"
                    aria-current="page"
                  >
                    <svg
                      aria-label="Home"
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
                    href="./about-us/index.html"
                    class="block py-2 px-3 md:p-0 text-primary-text-color rounded-sm nav-link-underline"
                    >من نحن</a
                  >
                </li>
                <li>
                  <a
                    href="./services/index.html"
                    class="block py-2 px-3 md:p-0 text-primary-text-color rounded-sm nav-link-underline"
                    >خدماتنا</a
                  >
                </li>

                <!-- Education Abroad -->
                <li class="relative group/menui-1 mb-0">
                  <a
                    class="flex items-center pt-2 pb-3 px-2 md:p-0 text-primary-text-color rounded-sm"
                    href="./"
                  >
                    الدراسة في الخارج
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
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >نظرة عامة
                      </a>
                    </li>
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >الدراسه في مصر
                      </a>
                    </li>
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >الدراسه في الامارات</a
                      >
                    </li>
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >الدراسه في الخارج</a
                      >
                    </li>
                  </ul>
                </li>

                <li class="relative group/menui-2 mb-0">
                  <a
                    class="flex items-center pt-2 pb-3 px-2 md:p-0 text-primary-text-color rounded-sm"
                  >
                    القطاعات التعليميه
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
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >نظرة عامة
                      </a>
                    </li>
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >الدراسه في مصر
                      </a>
                    </li>
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >الدراسه في الامارات</a
                      >
                    </li>
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >الدراسه في الخارج</a
                      >
                    </li>
                  </ul>
                </li>

                <li class="relative group/menui-3">
                  <a
                    class="flex items-center pt-2 pb-3 px-2 md:p-0 text-primary-text-color rounded-sm"
                  >
                    التعليم حسب الجنسية
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
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >نظرة عامة
                      </a>
                    </li>
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >الدراسه في مصر
                      </a>
                    </li>
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300"
                        >الدراسه في الامارات</a
                      >
                    </li>
                    <li class="hover:bg-gray-100 transition-all duration-300">
                      <a
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2 hover:text-primary-text-color transition-all duration-300 nav-link-underline"
                        >الدراسه في الخارج</a
                      >
                    </li>
                  </ul>
                </li>

                <li>
                  <a
                    href="../ar/blogs/"
                    class="block py-2 px-3 md:p-0 text-primary-text-color rounded-sm nav-link-underline"
                    >المقالات</a
                  >
                </li>

                <li>
                  <a
                    href="../ar/gallery/index.html"
                    class="block py-2 px-3 md:p-0 text-primary-text-color rounded-sm nav-link-underline"
                    >معرض الصور
                  </a>
                </li>

                <li>
                  <a
                    href="./contact-us/index.html"
                    class="block py-2 px-3 md:p-0 text-primary-text-color rounded-sm nav-link-underline"
                    >اتصل بنا
                  </a>
                </li>

                <li>
                  <a
                    href="./general-form/"
                    class="block py-2 px-4 capitalize md:py-0 text-white bg-active-color rounded-2xl"
                    >الدراسة في الخارج
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
                  src="../assets/images/navbar/logo.png"
                  class="h-8"
                  decoding="async"
                  alt="Edugate Logo"
                />
              </a>
              <!-- Menu Items -->
              <ul class="flex flex-col p-4 pb-20 space-y-2 font-medium">
                <li>
                  <a
                    href="/ar/index.html"
                    class="block py-2 px-3 text-primary-text-color nav-link-underline-offcanvas active"
                    >الرئيسية</a
                  >
                </li>
                <li>
                  <a
                    href="./about-us/index.html"
                    class="block py-2 px-3 text-primary-text-color nav-link-underline-offcanvas"
                    >من نحن</a
                  >
                </li>
                <li>
                  <a
                    href="/ar/services/index.html"
                    class="block py-2 px-3 text-primary-text-color nav-link-underline-offcanvas"
                    >خدماتنا</a
                  >
                </li>

                <!-- Education Abroad -->
                <li class="relative group/menui-1">
                  <a
                    class="flex items-center pt-2 pb-3 px-2 md:p-0 text-primary-text-color rounded-sm"
                  >
                    الدراسة في الخارج
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
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >نظرة عامة
                      </a>
                    </li>
                    <li>
                      <a
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >الدراسه في مصر
                      </a>
                    </li>
                    <li>
                      <a
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >الدراسه في الامارات
                      </a>
                    </li>
                    <li>
                      <a
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >الدراسه في الخارج
                      </a>
                    </li>
                  </ul>
                </li>

                <!-- Education nationality - 1st -->
                <li class="relative group/menui-2">
                  <a
                    class="flex items-center pt-2 pb-3 px-2 md:p-0 text-primary-text-color rounded-sm"
                  >
                    القطاعات التعليميه
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
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >نظرة عامة
                      </a>
                    </li>
                    <li>
                      <a
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >الدراسه في مصر
                      </a>
                    </li>
                    <li>
                      <a
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >الدراسه في الامارات
                      </a>
                    </li>
                    <li>
                      <a
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >الدراسه في الخارج
                      </a>
                    </li>
                  </ul>
                </li>

                <!-- Education nationality - 2nd -->
                <li class="relative group/menui-3">
                  <a
                    class="flex items-center pt-2 pb-3 px-2 md:p-0 text-primary-text-color rounded-sm"
                  >
                    التعليم حسب الجنسية
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
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >نظرة عامة
                      </a>
                    </li>
                    <li>
                      <a
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >الدراسه في مصر
                      </a>
                    </li>
                    <li>
                      <a
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >الدراسه في الامارات
                      </a>
                    </li>
                    <li>
                      <a
                        href="./sub-category/index.html"
                        class="block text-alternate-text-color px-4 py-2.5 hover:text-primary-text-color hover:bg-white rounded-md transition-all duration-200 text-[14px] border-l-2 border-transparent hover:border-active-color"
                        >الدراسه في الخارج
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a
                    href="#"
                    class="block py-2 px-3 text-primary-text-color nav-link-underline-offcanvas"
                    >المدونة</a
                  >
                </li>

                <li>
                  <a
                    href="#"
                    class="block py-2 px-3 text-primary-text-color nav-link-underline-offcanvas"
                    >معرض الصور</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block py-2 px-3 text-primary-text-color nav-link-underline-offcanvas"
                    >اتصل بنا</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="block py-2 px-3 text-white bg-active-color rounded-2xl text-center nav-link-underline-offcanvas"
                    >الدراسه في الخارج</a
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