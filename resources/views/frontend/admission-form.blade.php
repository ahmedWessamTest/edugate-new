@extends("layouts.master")
@section('hero_image', asset('assets/images/home/hero/hero-1600.jpg'))
@push('styles')
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css"
    />
@endpush
@section('content')
<section class="py-28 lg:pb-60">
        <div class="container lg:px-20!">
          <div
            class="relative p-5 pt-16 pb-36 lg:px-16! z-10 rounded-2xl lg:rounded-[70px]"
          >
            <div class="img-bg absolute top-full -end-64" data-hide-mobile>
              <img
                src="{{asset('assets/images/home/counter/arrow.svg')}}"
                width="481"
                height="107"
                class="rtl:-scale-x-[1]"
                role="presentation"
              />
            </div>
            <div
              class="absolute inset-0 rounded-2xl md:rounded-[70px] bg-[#eaf0ee]/70 z-1"
            ></div>
            <div
              class="absolute inset-0 rounded-2xl overflow-hidden md:rounded-[70px]"
            >
              <img
                class="w-full h-full scale-x-150 rounded-2xl md:rounded-[70px]"
                src="{{asset('assets/images/Webp-Dimensions/form-img/1320x1200.webp')}}"
                role="presentation"
              />
            </div>
            <div class="relative z-10">
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
              <div class="text-center mb-8 z-20">
                <h1
                  class="text-alternate-text-color mb-3 text-3xl lg:text-[26px] font-bold leading-relaxed"
                >
                  {{ __('admission.hero_title') }}
                </h1>
                <p class="text-primary-text-color max-w-[660px] mx-auto">
                  {{ __('admission.hero_desc') }}
                </p>
              </div>
              <div
                class="relative rounded-2xl md:rounded-[70px] z-10 border-2 bg-white shadow-sm border-primary-text-color/20 py-10 lg:py-20 px-10 lg:px-0"
              >
                      <img src="{{asset('assets/images/home/blogs/pin.svg')}}" role="presentation" data-hide-mobile loading="lazy" decoding="async" class="absolute -end-5 -top-5 w-20 h-20 translate-y-[-20%] rtl:-scale-x-[1]">
                <form id="studyForm" class="md:w-2/3 mx-auto hide-scrollbar custom-scrollbar">
                  <div class="space-y-5">
                    <!-- Name -->
                    <div class="relative">
                      <input
                        type="text"
                        id="nameInput"
                        placeholder="{{ __('admission.name_placeholder') }}"
                        class="main-input preventNumber"
                      />
                      <small
                        id="nameError"
                        class="text-red-500 text-sm opacity-0 transition-opacity"
                        >{{ __('admission.name_error') }}</small
                      >
                    </div>

                    <!-- Email -->
                    <div class="relative">
                      <input
                        type="email"
                        id="emailInput"
                        placeholder="{{ __('admission.email_placeholder') }}"
                        class="main-input"
                      />
                      <small
                        id="emailError"
                        class="text-red-500 text-sm opacity-0 transition-opacity"
                        >{{ __('admission.email_error') }}</small
                      >
                    </div>

                    <!-- Phone -->
                    <div class="relative phone-input preventText">
                      <input
                        type="tel"
                        id="phoneInput"
                        placeholder="{{ __('admission.phone_placeholder') }}"
                        class="main-input"
                      />
                      <small
                        id="phoneError"
                        class="text-red-500 text-sm opacity-0 transition-opacity"
                        >{{ __('admission.phone_error') }}</small
                      >
                      <input
                        type="text"
                        class="hidden"
                        readonly
                        id="actualPhone"
                      />
                    </div>

                    <!-- Nationality -->
                    <div class="relative">
                      <input
                        type="text"
                        id="nationalityInput"
                        placeholder="{{ __('admission.nationality_placeholder') }}"
                        class="main-input preventNumber"
                      />
                      <small
                        id="nationalityError"
                        class="text-red-500 text-sm opacity-0 transition-opacity"
                        >{{ __('admission.nationality_error') }}</small
                      >
                    </div>

                    <!-- select country -->
                    <div class="relative">
                      <div class="relative">
                        <select
                          id="country"
                          class="main-input appearance-none  "
                        >
                          <option selected >{{ __('admission.country_select') }} </option>
                          <option value="bachelor">{{ __('admission.country_egypt') }}</option>
                          <option value="master">{{ __('admission.country_uae') }}</option>
                          <option value="doctorate">{{ __('admission.country_usa') }}</option>
                        </select>
                        <span
                          class="absolute end-3 top-1/2 fill-primary-text-color -translate-y-1/2"
                        >
                          <svg
                            width="20"
                            height="20"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 640"
                          >
                            <path
                              d="M297.4 438.6C309.9 451.1 330.2 451.1 342.7 438.6L502.7 278.6C515.2 266.1 515.2 245.8 502.7 233.3C490.2 220.8 469.9 220.8 457.4 233.3L320 370.7L182.6 233.4C170.1 220.9 149.8 220.9 137.3 233.4C124.8 245.9 124.8 266.2 137.3 278.7L297.3 438.7z"
                            />
                          </svg>
                        </span>
                      </div>
                      <small
                        id="countryError"
                        class="text-red-500 text-sm opacity-0 transition-opacity"
                        >{{ __('admission.country_error') }}</small
                      >
                    </div>
                    <!-- Study Type -->
                    <div class="relative">
                      <div class="relative">
                        <select
                          id="studyType"
                          class="main-input appearance-none "
                        >
                          <option selected>{{ __('admission.study_type_select') }}</option>
                          <option value="bachelor">{{ __('admission.study_type_bachelor') }}</option>
                          <option value="master">{{ __('admission.study_type_master') }}</option>
                          <option value="doctorate">{{ __('admission.study_type_doctorate') }}</option>
                        </select>
                        <span
                          class="absolute end-3 top-1/2 fill-primary-text-color -translate-y-1/2"
                        >
                          <svg
                            width="20"
                            height="20"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 640"
                          >
                            <path
                              d="M297.4 438.6C309.9 451.1 330.2 451.1 342.7 438.6L502.7 278.6C515.2 266.1 515.2 245.8 502.7 233.3C490.2 220.8 469.9 220.8 457.4 233.3L320 370.7L182.6 233.4C170.1 220.9 149.8 220.9 137.3 233.4C124.8 245.9 124.8 266.2 137.3 278.7L297.3 438.7z"
                            />
                          </svg>
                        </span>
                      </div>
                      <small
                        id="studyTypeError"
                        class="text-red-500 text-sm opacity-0 transition-opacity"
                        >{{ __('admission.study_type_error') }}</small
                      >
                    </div>

                    <!-- Dynamic Fields -->
                     <div class="h-[150px] overflow-y-auto xl:overflow-visible  flex items-center justify-center dynamic-inputs-container border-2 border-dashed  rounded-2xl pt-16 xl:pt-5 p-5 ">
                       <div id="bachelorFields" class="space-y-4 hidden">
                        <div class="grid grid-cols-1 xl:grid-cols-2 gap-2">
                          <div>
                            <input
                              type="text"
                              id="academicBifurcationInput"
                              placeholder="{{ __('admission.bifurcation_placeholder') }}"
                              class="main-input"
                            />
                            <small
                              id="academicBifurcationError"
                              class="text-red-500 text-sm opacity-0 transition-opacity"
                              >{{ __('admission.bifurcation_error') }}</small
                            >
                          </div>
                          <div>
                            <input
                              type="text"
                              id="academicAverageInput"
                              placeholder="{{ __('admission.average_placeholder') }}"
                              class="main-input"
                            />
                            <small
                              id="academicAverageError"
                              class="text-red-500 text-sm opacity-0 transition-opacity"
                              >{{ __('admission.average_error') }}</small
                            >
                          </div>
                        </div>
                       </div>
   
                       <div id="masterFields" class="space-y-4 hidden">
                         <input
                           type="text"
                           id="BachelorsDegreeMajorInput"
                           placeholder="{{ __('admission.bachelor_major_placeholder') }}"
                           class="main-input"
                         />
                         <small
                           id="BachelorsDegreeMajorError"
                           class="text-red-500 text-sm opacity-0 transition-opacity"
                           >{{ __('admission.bachelor_major_error') }}</small
                         >
                       </div>
   
                       <div id="doctorateFields" class="space-y-4 hidden">
                        <div class="grid grid-cols-1 xl:grid-cols-2 gap-2">
                          <div>
                            <input
                              type="text"
                              id="mastersDegreeMajorInput"
                              placeholder="{{ __('admission.master_major_placeholder') }}"
                              class="main-input"
                            />
                            <small
                              id="mastersDegreeMajorError"
                              class="text-red-500 text-sm opacity-0 transition-opacity"
                              >{{ __('admission.master_major_error') }}</small
                            >
                          </div>
    <div>

      <input
        type="text"
        id="requiredSpecializationInput"
        placeholder="{{ __('admission.doctorate_major_placeholder') }}"
        class="main-input"
      />
      <small
        id="requiredSpecializationError"
        class="text-red-500 text-sm opacity-0 transition-opacity"
        >{{ __('admission.doctorate_major_error') }}</small
      >
    </div>
                        </div>
                       </div>
                     </div>
                    <div class="relative">
                      <input
                        type="text"
                        id="AcademicSpecializationInput"
                        placeholder="{{ __('admission.desired_specialization_placeholder') }}"
                        class="main-input"
                      />
                      <small
                        id="AcademicSpecializationError"
                        class="text-red-500 text-sm opacity-0 transition-opacity"
                        >{{ __('admission.desired_specialization_error') }}</small
                      >
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                      <button
                        type="submit"
                        class="px-8 py-3 bg-[#EF4444] hover:bg-[#DC2626] text-white font-bold text-description rounded-2xl transition-all duration-300 transform hover:scale-105 hover:shadow-lg cursor-pointer"
                      >
                        {{ __('admission.submit_btn') }}
                      </button>
                    </div>
                  </div>
                </form>
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
    <script defer src="{{asset('assets/js/general-form.js')}}"></script>
@endpush