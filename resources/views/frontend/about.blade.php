@extends("layouts.master")
@section('hero_title', __('about.our_story_title'))
@section('hero_image', asset('assets/images/home/hero/hero-1600.jpg'))
@push('styles')
    <style>
        .editor-ui ul {
        color: var(--color-primary-text-color);
      }
      .editor-ui ul li {
        padding-inline-start: 30px;
        position: relative;
      }
      .editor-ui ul li::before {
        content: "";
        position: absolute;
        inset-inline-start: 0;
        top: 50%;
        transform: translateY(-50%) scaleX(-1);
        width: 25px;
        height: 25px;
        background-image: url("{{asset('assets/images/home/blogs/pin.svg')}}");
        background-size: contain;
        background-repeat: no-repeat;
      }
      html[dir="ltr"] .editor-ui ul li::before {
        transform: translateY(-50%);
      }
    </style>
@endpush
@section('content')
    <section class="py-20 relative z-10">
        <div class="container px-5 relative z-20">
            <div class="content">
                <div class="flex justify-start items-center gap-x-3 pb-4">
                    <h2 class="main-title-ui pb-2 before:start-0!">{{ __('about.our_story_title') }}</h2>
                    <svg class="rotate-y-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="20" height="88" viewBox="0 0 20 88" role="presentation">
                        <image width="20" height="88"
                            xlink:href="data:image/png;base64,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">
                        </image>
                    </svg>
                </div>
                <div id="about-content"
                    class="main-description-ui text-start leading-11 editor-ui relative p-7 border-primary-text-color border-3 rounded-[35px] lg:pe-70">
                    <div class="overflow-y-auto overflow-x-hidden pe-2 custom-scrollbar" style="max-height: 460px;">
                        <!-- Content will be injected here from backend/text editor -->
                        <!-- !this class width will be removed after the content is injected -->
                         <div dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
                           <p class="leading-11">
                               {{ __('about.our_story_text') }}
                           </p>
                           <ul>
                               <li>
                                   {{ __('about.our_story_point') }}
                               </li>
                               <li>
                                   {{ __('about.our_story_point') }}
                               </li>
                               <li>
                                   {{ __('about.our_story_point') }}
                               </li>
                               <li>
                                   {{ __('about.our_story_point') }}
                               </li>
                           </ul>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-image absolute top-[50%] translate-y-[-20%] end-0 z-10 ltr:-scale-x-[1]" data-hide-mobile>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="353" height="580"
                xml:space="preserve" version="1.1" viewBox="0 0 353 580">
                <image width="353" height="580"
                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAWEAAAJECAYAAADHdpXPAAAKOmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAASImdU3dYU3cXPvfe7MFKiICMsJdsgQAiI+whU5aoxCRAGCGGBNwDERWsKCqyFEWqAhasliF1IoqDgqjgtiBFRK3FKi4cfaLP09o+/b6vX98/7n2f8zvn3t9533MAaAEhInEWqgKQKZZJI/292XHxCWxiD6BABgLYAfD42ZLQKL9oAIBAXy47O9LfG/6ElwOAKN5XrQLC2Wz4/6DKl0hlAEg4ADgIhNl8ACQfADJyZRJFfBwAmAvSFRzFKbg0Lj4BANVQ8JTPfNqnnM/cU8EFmWIBAKq4s0SQKVDwTgBYnyMXCgCwEAAoyBEJcwGwawBglCHPFAFgrxW1mUJeNgCOpojLhPxUAJwtANCk0ZFcANwMABIt5Qu+4AsuEy6SKZriZkkWS0UpqTK2Gd+cbefiwmEHCHMzhDKZVTiPn86TCtjcrEwJT7wY4HPPn6Cm0JYd6Mt1snNxcrKyt7b7Qqj/evgPofD2M3se8ckzhNX9R+zv8rJqADgTANjmP2ILygFa1wJo3PojZrQbQDkfoKX3i35YinlJlckkrjY2ubm51iIh31oh6O/4nwn/AF/8z1rxud/lYfsIk3nyDBlboRs/KyNLLmVnS3h8Idvqr0P8rwv//h7TIoXJQqlQzBeyY0TCXJE4hc3NEgtEMlGWmC0S/ycT/2XZX/B5rgGAUfsBmPOtQaWXCdjP3YBjUAFL3KVw/XffQsgxoNi8WL3Rz3P/CZ+2+c9AixWPbFHKpzpuZDSbL5fmfD5TrCXggQLKwARN0AVDMAMrsAdncANP8IUgCINoiId5wIdUyAQp5MIyWA0FUASbYTtUQDXUQh00wmFohWNwGs7BJbgM/XAbBmEEHsM4vIRJBEGICB1hIJqIHmKMWCL2CAeZifgiIUgkEo8kISmIGJEjy5A1SBFSglQge5A65FvkKHIauYD0ITeRIWQM+RV5i2IoDWWiOqgJaoNyUC80GI1G56Ip6EJ0CZqPbkLL0Br0INqCnkYvof3oIPoYncAAo2IsTB+zwjgYFwvDErBkTIqtwAqxUqwGa8TasS7sKjaIPcHe4Ag4Bo6Ns8K54QJws3F83ELcCtxGXAXuAK4F14m7ihvCjeM+4Ol4bbwl3hUfiI/Dp+Bz8QX4Uvw+fDP+LL4fP4J/SSAQWARTgjMhgBBPSCMsJWwk7CQ0EU4R+gjDhAkikahJtCS6E8OIPKKMWEAsJx4kniReIY4QX5OoJD2SPcmPlEASk/JIpaR60gnSFdIoaZKsQjYmu5LDyALyYnIxuZbcTu4lj5AnKaoUU4o7JZqSRllNKaM0Us5S7lCeU6lUA6oLNYIqoq6illEPUc9Th6hvaGo0CxqXlkiT0zbR9tNO0W7SntPpdBO6Jz2BLqNvotfRz9Dv0V8rMZSslQKVBEorlSqVWpSuKD1VJisbK3spz1NeolyqfES5V/mJClnFRIWrwlNZoVKpclTlusqEKkPVTjVMNVN1o2q96gXVh2pENRM1XzWBWr7aXrUzasMMjGHI4DL4jDWMWsZZxgiTwDRlBjLTmEXMb5g9zHF1NfXp6jHqi9Qr1Y+rD7IwlgkrkJXBKmYdZg2w3k7RmeI1RThlw5TGKVemvNKYquGpIdQo1GjS6Nd4q8nW9NVM19yi2ap5VwunZaEVoZWrtUvrrNaTqcypblP5UwunHp56SxvVttCO1F6qvVe7W3tCR1fHX0eiU65zRueJLkvXUzdNd5vuCd0xPYbeTD2R3ja9k3qP2OpsL3YGu4zdyR7X19YP0Jfr79Hv0Z80MDWYbZBn0GRw15BiyDFMNtxm2GE4bqRnFGq0zKjB6JYx2ZhjnGq8w7jL+JWJqUmsyTqTVpOHphqmgaZLTBtM75jRzTzMFprVmF0zJ5hzzNPNd5pftkAtHC1SLSotei1RSydLkeVOy75p+Gku08TTaqZdt6JZeVnlWDVYDVmzrEOs86xbrZ/aGNkk2Gyx6bL5YOtom2Fba3vbTs0uyC7Prt3uV3sLe759pf01B7qDn8NKhzaHZ9Mtpwun75p+w5HhGOq4zrHD8b2Ts5PUqdFpzNnIOcm5yvk6h8kJ52zknHfBu3i7rHQ55vLG1clV5nrY9Rc3K7d0t3q3hzNMZwhn1M4Ydjdw57nvcR+cyZ6ZNHP3zEEPfQ+eR43HfU9DT4HnPs9RL3OvNK+DXk+9bb2l3s3er7iu3OXcUz6Yj79PoU+Pr5rvbN8K33t+Bn4pfg1+4/6O/kv9TwXgA4IDtgRcD9QJ5AfWBY4HOQctD+oMpgVHBVcE3w+xCJGGtIeioUGhW0PvzDKeJZ7VGgZhgWFbw+6Gm4YvDP8+ghARHlEZ8SDSLnJZZFcUI2p+VH3Uy2jv6OLo27PNZstnd8QoxyTG1MW8ivWJLYkdjLOJWx53KV4rXhTflkBMiEnYlzAxx3fO9jkjiY6JBYkDc03nLpp7YZ7WvIx5x+crz+fNP5KET4pNqk96xwvj1fAmFgQuqFowzufyd/AfCzwF2wRjQndhiXA02T25JPlhinvK1pSxVI/U0tQnIq6oQvQsLSCtOu1Velj6/vSPGbEZTZmkzKTMo2I1cbq4M0s3a1FWn8RSUiAZXOi6cPvCcWmwdF82kj03u03GlElk3XIz+Vr5UM7MnMqc17kxuUcWqS4SL+pebLF4w+LRJX5Lvl6KW8pf2rFMf9nqZUPLvZbvWYGsWLCiY6XhyvyVI6v8Vx1YTVmdvvqHPNu8krwXa2LXtOfr5K/KH17rv7ahQKlAWnB9ndu66vW49aL1PRscNpRv+FAoKLxYZFtUWvRuI3/jxa/svir76uOm5E09xU7FuzYTNos3D2zx2HKgRLVkScnw1tCtLdvY2wq3vdg+f/uF0uml1TsoO+Q7BstCytrKjco3l7+rSK3or/SubKrSrtpQ9WqnYOeVXZ67Gqt1qouq3+4W7b6xx39PS41JTelewt6cvQ9qY2q7vuZ8XbdPa1/Rvvf7xfsHD0Qe6Kxzrqur164vbkAb5A1jBxMPXv7G55u2RqvGPU2spqJDcEh+6NG3Sd8OHA4+3HGEc6TxO+PvqpoZzYUtSMvilvHW1NbBtvi2vqNBRzva3dqbv7f+fv8x/WOVx9WPF5+gnMg/8fHkkpMTpySnnpxOOT3cMb/j9pm4M9c6Izp7zgafPX/O79yZLq+uk+fdzx+74Hrh6EXOxdZLTpdauh27m39w/KG5x6mnpde5t+2yy+X2vhl9J654XDl91efquWuB1y71z+rvG5g9cON64vXBG4IbD29m3Hx2K+fW5O1Vd/B3Cu+q3C29p32v5kfzH5sGnQaPD/kMdd+Pun97mD/8+Kfsn96N5D+gPygd1Rute2j/8NiY39jlR3MejTyWPJ58UvCz6s9VT82efveL5y/d43HjI8+kzz7+uvG55vP9L6a/6JgIn7j3MvPl5KvC15qvD7zhvOl6G/t2dDL3HfFd2Xvz9+0fgj/c+Zj58eNv94Tz+8WoiUIAAAAJcEhZcwAALiMAAC4jAXilP3YAACKLSURBVHic7d3pkxxFmufxX+kGXSCQQCCX0AE0h5huoHu619p6e8ZsbF7F3xTr/9L6ix3bNzM7u9vW3VzNcIOQQCFAEjrQiY6SauwBLyZJeVRlVmWGx/H9mKWOiKwqV6v5yesJ98cXlpaWhDQX/AZJWyRtkrRZ0ob42jjytruS7ku6UhWl/QwAE1sYegi74C1cd8bXDkkPx9fW+JrUTUl/roryxhyHC6BnbIY3KC74XZL2xNejMXBnwT7PC5LenNHnAzAAvQ9hF7z9GZ+QtE/S3ilnt9OaVaADGIjehrAL3soLz8cAtjpuE75t6OsA6IlehrAL3h6m/bf4UG2WFiUtF9Hvj4S7XTsr6dM5/FmsZPJc/Lu6KOnrqiivzvrrAMijlyEs6fE1BPAtSdck3YivW/F1W9IdC+CqKBt9iumCt/LG70ZWY1gd+1kX/HVJX0k6UxWlPRAE0FF9DWFbNrbajPZSfF2WdLUqSgvattk3thxu2Y5YanneBW9/htNxhnwvwxgBrENfQ/hCrM/ag7hlNnv8RtJ5C96mZ7VrNMk/DMsrPV5ywZ+R9EVVlPZnBdABvV0n7IJfiA/lrCzxXRfrqHGziNW2rS48DfuH5mRVlDwoBFqutyHcFzGIn5T01BpWelyNDwvPdmTmDwwOIdwhLviNMYhdLLXYbH8S12MYW92Yv3CgRQjhjnLB26aTA5IOSdo+xcz446ooz815eAAmRAj3gAveluQdjmWLSdh64w+qorwy56EBWAUh3CMu+O0xjA/WLG0bV0n6qCpKWwsNIANCuL87Bo9Ieia24FxtzfRHkr6kXgw0jxDuf5vOozGQV5sZfxdbca620QXADBHCw3mI92ycGa+0osLWFn/Q4NCAwWuquxgysppvVZTvS/pXSSutjLDOcwCGOBN2wT8d+yHYt81n4lKqdgyuZ1zwtsb4eGJp26dVUX6SaVjAILViJuyCt94Hv4qhsE3SsfitM+Ygbmf+N0kWuFYDXor/8H2We2zA0GSfCcceD3+MncFGnauK8q+ZhjUo9nfAdx3AcGfChxMBbOiT2xACGBhoCMclVHZqRGrt6okMQwKAQc2ED9dsJvikKko71QIAem1D5lOQLYTH2dFCX2QYEgAMaiZ8oOYcOJsF2yGaANB7OUPYmsykZsFfZxgLAAwnhF3wuyTtrtk2y5N6AIORaya8P3HtXjzGHQAGI1cIp5qP2zlodPACMCiNh7AL3rYlWzli3NmmxwIAudkysaZZn4hxS/GYdnS7kfwLkh6JvYntxI47uccFtN2GloTwlaoobZccuuv1uOJlV/z5d/F0aAAtC+HUqohLGcaB2W68eWzssoXxq7FBE4AWhXCqWQ+n/nbb/bi6JfUA1koUANoQwrFumNold63JcWC24g7Hj2tuH40N+wG0YCZsKyNSrjc8DsxYVZQn7aea23/ngufoJKClIbxYFWXqW1l0z39Iupi4bg/oXo+1YwAZQzhVirjd8Bgw37LEGzUN+e1ZwCsZhgW0WtMhnJoJMQvukbjr8c34sG7c09SHgbwhnPp6bFXumaoobbXLezW3j8ddkwBacLIGeqoqytPxBOdxdpLKLzMMCWilNoQwi/n7y2bD3yeu73XBuwzjATT0EE5tTeaJeU/Frejv1Nx+Ma4bBwat6RC+39LZOOakKkpbsmZriMdZAL+UYUhAqzQdgKkTlHkw138f15QlDrjgUw2dgMFoOoQvxjaHo1KzJPRI3IxjGzlSmA1j0BaWlpo90i22N7RWh7ZM6VxVlHRQGwgX/GuSnkrcersqSo62wiA1HsIYLhf8w5L+IfEdmJ2y/W9xxx0wKDwUQ2OqorTtzF8kbm23jM4wJCA7QhhN+7TmYeyzLnj+/4jB4f/0yNFb4rPErYest0SGIQFZEcLIwUoSqUNAj2UYC5AVIYxcS9ZOJW7tcMHvyzAkIBtCGLmcqmljygM6DAohjJy14S8Tt+glgkEhhJHTicRKibpz6oBeYrMGsnLB27FHR2NDnzNVUX6Te0xAkwhhAMiIcgQAZEQIA0BGhDAAZEQIA0BGhDAAZEQIA0BGhDAAZNS6LaIu+N3x6KPLVVGmOm0BQG+0arOGC/5lSYfjbxcl/YUz6AD0WWvKES74nSMBvDxLf8UFv5BxWAAwjBCOJyuMs2A+kGEsADC4EL5Uc/bY85w9BqCvWhNuVVFaDfjzmhnyoQxDAoDhhHB0UtLtmpN4W7eSAwB6FcLx7LHUSbxbrSyRYUgAMJwQjuzIm5uJ64dd8LsyjAcAhhPCVVHel/Rx4pYtVTueYUgAMJwQNlVRfiXpYuLWHhf8wQxDAoD+75gbFUsPf4gz4FG2jO1fq6JMPcBDT8Tt6y/G1THnJH0Uv0sCeqWVM2FTFeXVuFpi3GbbSZdhSGiIC97+jn8n6XFJ2yUdkfRC7nEBgwrh6JOah3RPuuBdhvGgGY/Gf2xHPZFpLMBwQzguWXu35vZLLvjUVmd031LNMkWgd1odwqYqyguSvkjcspnSqzT46aXU9vVN/F2jj1ofwtFHNWWJPZKOZRgPmg9hw65J9E4nQjj2lXin5ttUa/BjYYz+h/B4nRjovE6EsInN3U8kbtm3qK+54LdkGBbmo53rJoEhh/DIaonLiet2HNKvqBn23sbcAwAGHcJVUdoM6e2ab1f30eSnH6qirCtH8I8seqdTIWyqorQHdH+ruW0tL59seEiYsRXallKmQO90LoRNVZRna3bTKZYldjQ8JMxW3YzX1o0DvdLJEB5ZtpY6idlmUS9lGA/mX/tlJoze6WwIx2Yub0q6VXNAKPr3/0tbqgj0SmdD2MROahbE4921Uiso0P2ZMF3U0DudDmFTFaUF7ltxRmzfrn4r6b3c48K62JLDcfdiLxGgV3qxDTQ+qDvrgt9Az9leSG28oX80eqnzM+FRBHBvpDqmEcLopV6FMHqDEMZgEMJoIztNYxwhjF4ihNGVEL6eYRzA3BHCaKPUjscbGcYBzB0hjFaJR1al/n/JTBi9RAijbXYlri3VnKwCdB4hjDaetDzuWmxjCvQOIYy2eSRx7bsM4wAaQQijCyFMLxD0FiGM1nDBP1xzmCchjN4ihNH2Zu7WvpKVEeithaUlnncsc8EftSOSYhh8Kelj+lE0ywX/G0lPjFz6tCpKO+AV6CVmwpELfq+kF+O3w9ZdzgL5713wqW+PMT/WH/qD+I/g2wQw+o6ZcOSCt5Oan6vZqfXXqij5lhjAzDETXn1brPUx+L0L/vGGxwNgAAjh//KVNYavuWclid+64J9peEwAeo5yxAgXvD2QeyHWg+tUdnwSR+0AmAVCOMEFf1DS8RW+U7gq6Y2qKOlnAGBdCOEaLvjHJP26ZvOAuRuf3p9veGgAeoQQXoEL3h7K/aamv+2yT+NaVv6HBDA1QngVLnhbM/xLSftXeNslSW9VRXmrwaEB6AFCeLrddC/UbK1dLk/8rSrKuhUWAPAAQngKca3wqzWnAS87JelDtjsDmAQhPCUX/DZJr0nas8LbbPXEO1VR2s8AUIsQXvt64udjs586NhO2vgef89AOQB1CeP3liV9JstlxnctxVsxpwQAeQAivkwt+a1w9sW+Ft92LdeIvGhwagA4ghGfEBX8krp5YqR+HBfHnDQ4LQMvRwGdGqqI8KenfJV1Z4W2HGhwSgA4ghGeoKsprkv5f3EWX+haDZWsAfoZyxJy44B+JD+1GtzzbA7ozGiAX/BZJT8fNLl+zuxD4ESE8Ry54+07jgCQ7Rfh8VZS2vXmoDy//MLKKxHYX/l9WjACEMJpZU/33kuwMv1Enq6K0s+SAQaMmjHl7NhHAZmOGsQCtQwhj3idYpw5PXT5OChg8Qhjz7MX8Wk3XOStFXMwwLKB1CGHMnAt+c2yGv7lmG/dHGYYFtBIhjHmsCPl1zWkkdyS9SZtP4L8Qwpj1Sgjrt2zn842zZTicPgKMsaN70DEueJtlHo1/f9/YqyXtMl9Z4Rio96qivNDweIDWY51wNzc+/MNYvdWax3+S82glF/wrK/TGYE0wUIMQ7hgXvAWdBZ5qHnpZGH/bcAnCxnOw5i22RfmtpsYDdA3liO5ZXOHeo5J+64K/GMP4YgMP4aw/xlM1b7F/DN6Z5xiArmMm3DEueNtp9ntJuyZ4+9zCOC5De61mN5yx+u9fq6K0hvYAahDCHeSC3xQfzB2dcPvvTMPYBf9Q7Aexs+YtBDAwIUK4++0hrTfDMxMuN7QQPlEV5fl1fE07Zfp1SfaAsK4E8QYBDEyGEO4BF/y22KPBTRjGdvrHZ5LOTrO0zQV/WNJLNVuRFZfLvc1mDGByhHCPuOCtb/GxKcL4us2MJZ1ZKYxj/feVFR7AGTvE9P2WrFcGOoMQ7qFYs312ijD+3tbySjpdFeVi4oQQewBnAZ+yFA8wtY8HMCVCuMfWEMZ24sWXkk7Z9uLYCe2/r/Dw7248suncjIcODAYhPJwwPjLFAzyr6dpZeEsr7IK7Fh/AcUQRsA6E8PBWUyyHcarN5KTOxF4QK20cATABQniA4oM2C+LDKyw1S1mM4TvIE6OBeSCEByxuO3Zx04fVf+tWPVjpwd7LUfXAjBHCWG7C80Rc3mb9J5bZhov/Q90XmB9CGKkdcbYeeCkuWbNZMIA5IYQBICOONwKAjAhhAMiIpu79WulgKxxu0sEM6A5qwt0PXmuqfiCubtgYtxK/vZ52lQ30QbaDSi/FxkE2XmCwCOFuBu/jkp6W9GTNdzN3JP3vtnU0c8H/fmwJnG2P/tr6VVRFaaEMDA7liO70C94XZ7uPT/D3tiXuhGvNxgoX/I6xADYb4iz+gAv+emweVDE7xpAQwu09R87W6z4Wg3eS8+RG2eaK22qX1Rq974gN419wwX8V1ygzO0bvUY5oT6300Ri69npkHStXrsWa8FW1jAvejkXaP+WfxWbH1I7RW4Rwni3CO2PQLr92rXBkkCZsyv5V7O1gRxe1+c/uYvOg3VN86L1YO2Z2jN4hhBsQm6MfirPd3ROekDxJ8H4Tg/eyOsYFvzuG8VNTlsWYHaNXCOFmAvgPM6i/21+Uha0tPTvXxnLDOkoxT8d/pJgdY3AI4Tlzwf8iHjG01tnuhXiM/Pm+z/zieXaHYihP890Cs2N01qBDOK5CsKVcNhu7WxXl93P4Gs/H4+gnXdVwMW5kuFgV5U0NUJwdH4iBPM3KEGbH6JzOh3DcvLBp5LV57LUl8fut8TW+AsH+4323oXKEnVLx3cjrMg3TZzo7PivpraooV1saB2TV6hB2wT8dH2ZtHgnY8cCddROiP1dFad/+z4wL/uEYJBti4F6pitI2J2C+s+N3q6I8PeehAeuycOB//o+dI8ujNsagWBiZuW2Kv98wMhNZPiTSZhnfzCNQXPAvxzPQmvZ+VZSnMnxdzH52/HlVlB82ODRgahawf9T6POeC/9Msl0nFEoMtX8rBarJosaoofyjhuOA/WGV2PNPvaIC2blveEDtjvanZWc/GhbWyeuzHfVn6NQRVUS7Gg0i/GJkd74/foZ2YdVkJaHPviJnWZa0frgv+TNxdNS0rct8de90Z+/XtkWu34soIevD2YHZsdeDcYwFyhPA8Hn7Yf0xX4gJ+m9ksjryWA3Vx/BVnRwDQ2RC2meRykC3/bCG4PFNcXgx/L/76q6ooz816YLEXLg/IAPQ+hP8l/voeayoBoFmtXicMtIkLfl/se3y5i02T0E6EMDABF/zxsWWT9hDwZOxix39EWDNCGJjseKl/qrl9Kz67sHPyaB6EqRHCwGT9P/5xlbfZg+oq7tIbZOMlrA0hDKztpOg6S7HZ/ok2n3KC9iCEgQm44K373i/iBqJJNydZL2h27mFFhDAwfRgfis2lrB3qJGwr/Gex2RX/weFnCGFg7U2mrIvbkSlaa1q3wRPxBBD+w8MPCGFgnVzwe2MTK/t5Et/HMK7oWQJCGJgRF7zNiI/FE6Qn6QR4O4axLW8jjAeKEAZmzAX/UJwZH5zwSCbCeMAIYWC+D/GOxJ12y6fRrBbGn8Yw5j/MgSCEgTlzwW+OKypsdmzBvBqOZRoQQhhoiAt+YwzjY6ssb7O+2P+rwaGhB03dAawi1ntPuuC/XCWMaSk7IMyEgfbNjD+sivLzjENDgwhhoB1hbBs/rFHQxaooz+ceE5pDCANARjM9JRkAMB1CGAAyIoQBICNCGAAyIoQBICNCGBjGtmm0FEvUgJ5ywe+R9Kok6+p2Q9J7HLXUPoQw0EMueOtn/E+JbdGnJX1QFeVipqFhDOUIoJ8equlLYT2O/xhPA0ELEMJAP9kRSndWCOjfuuB/Sb04P8oRQE/F2e5rqzSUvyXpb9SK8yGEgR5zwVtJ4hVJT67y1pOSPqqKkjaaDSOEgQFwwVuXtuOrzIqvSnq7KsprDQ5t8AhhYFizYgvi/Su87X7sZ3yqwaENGiEMDIwL/qkYxiudd2c9jd+pirLu4R5mhBAGBsgFv03SLyXtXeWh3ZtVUV5ucGiDQwgDA+aCPyLphRWWqy7FB3YctzQnhDAwcC74XXF7884V3nY2LmW72+DQBoEQBmBBbDPhFyUdXuFt1n/iDVZPzBYhDOAnLvj9sVa8qeYti/GBnc2MMQOEMICfccHbqc+vS7IyRZ1Pq6L8pMFh9RYhDKCuPHE8Nvyp842kt6qiJETWgQY+AB5g25eronxXkr3qtjLvXyWkMQFCGECtqiit//CfJN2uecuOhofUO4QwgBXFzRr/Lum7mn4TWAdCGMCqqqK03XP/P3Zbux9f1l/iTO6xdR0P5gCs5eikBdpezgYhDAAZUY4AgIwIYQDIiBAGgIwIYQDIiBAGgIwIYQDIiBAGgIwIYQDIiBAGgIwIYQDIqO4IEwCYGxf8Rkl20vNuSZckfTHUXhTMhAHk8JqkX8TG8C/Z72NjoMEhhAE0ygW/VdITY5eflPSKBogQBtC0urLDQRf88xoYQhhAo6qivGs14Jrbz7ngn9GAEMIAcvhA0rc19152wVuteBAIYQCNiysh3qg5t84e0L3qgn9UA0AIA8iiKsp7kv4i6UZNNv3aBf+weo4QBpBNVZR3JP1Zkh0kOs5WUfzGBb9ZPUYIA8iqKsqbcUa8mLi9s+9riAlhANlVRXlV0luSUicP75V0XD1FCANohaooz8dVEymHXPCH1EOEMIDWqIry1ApriF/u44oJQhhA27wvyWbFdSsmtqlHCGEArVIV5VKsD1+vWTHxugu+N9nVmz8IgP6oinIxbuZIrZiwksTL6glCGEArVUVpM+F3VnhQd0A9QAgDaK2qKM9K+rTm9isu+B3qOEIYQKtVRfmJpHOJWxtjfdh+7ixCGEAXvCPJdtaldtR1eiMHIQygKz2I36xpCO9c8E4dRQgD6ISqKK9I+nCFjRydbPRDCAPo2o66b2pOjt+uDiKEAXTNu4n68P2avsStRwgD6GJ9+K8joWu/fyde75yFpaVU5zgAaDf3Y49h6yNxOx6X1EmEMABkRDkCADIihAEgI0IYADIihAEgI0IYADIihAEgI0IYADIihAEgI0IYADIihAEgI0IYADIihAEgI0IYADIihAEgIzsSBAAGwQVvmXdM0g5JlySdqooyaz9fQhjAkPxG0mPx1/vjuXTv5RwQ5QgAg+CC3z4SwMueccHvUkaEMIChuFdz/QVlRAgDGISqKG9JOpe4tc8Fv1eZEMIAhuRDSakHcS/Gg0MbRwgDGIyqKK9LOp24ZXXhpzMMiRAGMDif1NSHf+GCbzwTCWEAg1IV5W1JJxK3HpJ0qOnxEMIAhuikJAvjcc+64Dc2ORBCGMDgVEW5WDMb3mprh5scCyEMYKi+kPR94vqxuL25EYQwgEGqivK+pM8St7ZIOtzUOAhhAEN2WtKNxPUjTc2GCWEAg1X92EGtbjbcSG2YEAYwdGdWmA3PfaUEIQxg0Kr62bCtlDg4769PCAOAfpgNp1ZKHJ33LjpCGMDgVfWzYdtFd2CeX5sQBoAfVTW76I5qjghhANBP64ZTu+h2uOCfmNfXJYQB4Ofrhu/qQUc0J4QwAPy8p8SXetDjLvjdmgNCGAB+7pQkK000UhsmhAHgwbPovtaDnnLBb9OMEcIA8KDPE9fsDLo9mjFCGADGVEV5VdK349cl3dSMEcIAkPa+JCtNLPuyKsrvNGMLS0up058BAO7HBj6PWhjHk5pnjhAGgIwoRwBARoQwAGRECANARoQwAGRECANARoQwAGRECANARoQwAGRECANARoQwAGRECANARoQwAGRECANARoQwAGRECANARoQwAGRECAPAOrngN7ng7SDQqXGyBgCskQv+IUmvS3pE0h1J71ZFeXaaz8FMGADW7pUYwGaLpFdd8Jun+QSEMACsnR0COsoOBn1ymk9ACAPA2l1LXHtimk9ACAPA2p1PXNvrgp84WwlhAFi71EO4TZIem/QTEMIAsEZVUVo54mbi1sR1YUIYANbn3HrqwoQwAMw+hB9ywe+c5IMJYQBYn4uSFhPX907ywYQwAKxDVZT3JV1I3No3yccTwgCwft8mru2ZZKkaIQwA8wlh2z23Z7UPJIQBYJ2qorxRs1Rt1ZIEIQwA85sNP77aBxHCADC/EN61Wlc1QhgAZrdUbdzCanVhQhgAZqAqyjs1XdVW7CNBCAPAfGfDK9aFCWEAmJ0L09aFCWEAmH9dePwEjp8QwgAw27rw9cQtQhgAGnIpcY0QBoCGXE5ce9QFb2WJBxDCADD/ELYjj3ak3kwIA8BsXa/pL5wsSRDCADBDVVEu1ZUkUu8nhAFg9i7XtLZ8ACEMALN3RpKduDHqq9QbF5aWbOYMAJglF7yVH47GGXBVFeXXqfcRwgCQEeUIAMiIEAaAjAhhAMiIEAaAjAhhAMiIEAaAjAhhAMiIEAaAjAhhAMiIEAaAjAhhAMiIEAaAjAhhAMiIEAaAjAhhAMiIEAaAjAhhAMiIEAaAjDbl/OIAMBQu+AVJu+Pk93JVlD+cLccZcwAwZy54O+zzt5L2xEtXJP2pKspFyhEAMH8HRwJYcUZ82H5BCAPA/D2cuLbTfiCEAWD+7iSubbMfCGEAmL/biWtb7QdCGADm71biGiEMABnLEZtd8BsIYQDIMxM2WwhhAMgzEzbbCGEAmLOqKO9Lupu4xUwYABqSCuHNhDAA5AvhTYQwADSDcgQAZMRMGAAyYiYMABkxEwaAjO4lrhHCAJBxJryREAaAZtiGjXHMhAEgYzmCBj4A0JDFxDVmwgCQsRxBTRgAMs6EFwhhAMiIEAaAfKgJA0BDKEcAQEZLqYuEMABkRAgDQDO+TyxTu00IA0ADqqK03hEfj5Un3l9YWkqWKQAAc+CC3ylph6QrVVHeJIQBICPKEQCQESEMABkRwgCQESEMABkRwgCQESEMABkRwgCQESEMABkRwgCQESEMABkRwgCQESEMABkRwgCQESEMABkRwgCQESEMABkRwgCQESEMABltyvnFAWBIXPB7JO2SdLkqyit2jTPmAKABLvjnJD0/cun9qihPEcIAMGcueKs6/PNYCXhR0r9QEwaA+Xs48QzOgnkDIQwA87c1ce1eVZT3CGEAyBPCt+wHQhgA5m9b4tod+4EQBoD5YyYMAC0L4dv2AyEMAHnKEcyEAaAhDyWuEcIAkHEm/L39QAgDwBy54LfWZC0hDAAN7ZZLIYQBIFMp4nZVlPftF4QwADT/UO6HWbAhhAFgvrYnrhHCAJAxhG8u/4IQBoDmH8xdX/4FIQwAc+KCX6gJYWbCANDQQzkL4nGEMAA0IDULtqVpPJgDgAbsTFz7virKnw73JIQBoNmVET89lDOEMAA0OxO+NvobQhgA5mdH4hozYQCYNxf8ppq+EYQwAGSaBRtCGAAydk+7O3qBEAaA+fgurgkedX78TYQwAMxBVZR2htw7ku5IWooB/OH4+xaWln5aMwwAmAMX/IblJu7jCGEAyIhyBABkRAgDQEaEMABkRAgDQEaEMABkRAgDQEaEMABkRAgDQEaEMABkRAgDQEaEMABkRAgDQEaEMABkRAgDQEaEMABkRAgDQEaEMABkRAgDwIy44HfZa5qP4XgjAJjBGXKSfi1pX7x0SdJfqqJcXO1jmQkDwPodHAlgs0fSM5N8ICEMAOs3GsDLtk/ygYQwAKyDC35B0uOJW1cn+XhCGADW51FJGxPXv53kgwlhAFif1Cz4VlWU1yf5YEIYAGYfwhcm/WBCGADWyAW/MZYjxhHCANDQLHjDWuvBhhAGgNkuTbteFeWtST8BIQwAsw3h89N8AkIYANbABW+bMR5O3CKEASDTLPiepIvTfBJCGABmF8IXq6K8P80nIYQBYG1L0x5fbynCEMIAML29NflJCANAA56oWZp2Y9pPRAgDwPRd01IhfFZrQAgDwHQekbQ1cf2c1oAQBoDppGbBdyRd1hoQwgAwnf2Ja+eqolzTgZ2EMABMyAW/Q5K9ZlKKMIQwAEzuqcS1+2tZmraMEAaAyT1ZU4qw7cprQggDwOQNe3Ynbn2jdSCEAWDts+B1lSIMIQwAk9mTuHahKsq7WgdCGAAmY2uBx32tdSKEAWAyJyTdHvm9bc74Suu0sLS0pvXFADA4LvgtsYWlrYY4v9YNGqMIYQDIiHIEAGRECANARoQwAGRECANARoQwAGRECANARoQwAGRECANARoQwAGRECANARoQwAGRECANARoQwAGRECANARoQwAGRECANARoQwAGS0KecXB4C2cME/J+kZSXbc0OdVUZ5s4usyEwYweC74A5Kel7RV0jZJL7ng9zXxtQlhAJCOJq7ZgZ5zRwgDGDQX/B5JuxK3bjTx9QlhAEN3OHHNjrT/uokvTggDGCwXvNV/9ydunamK8m4TYyCEAQzZIUkLieunmhoAIQxgkFzwG2IIj7tQFeW1psZBCAMYqqfjkrRss2BDCAMYqiOJa99LOtfkIAhhAIPjgt9bsyztVFWUtmOuMYQwgCE6kri2KOl00wMhhAEMigt+h6TUluTTTS1LG0UIAxiao4lrS00/kFtGCAMYDBe8rYawZj3jzlVFeTPDkAhhAIOrBW9IXP9cmRDCAAbBBb+pZnPGpaooLykTQhjAUByStDlx/YQyIoQBDGWL8pHEretVUTa6OWMcIQxgCA7EEzNaNQs2hDCAXnPBW5e0Y4lbtyR9pcwIYQBDaNSzPXHdDvO8r8wIYQB9nwU/m7h1J8cW5RRCGECfPSnJtimnZsHWKyI7QhhAnz2buGb9Ib5USxDCAPp8ftzumnaVjTfqqUMIA+ire7Exz/i1LI166hDCAHqp+nG2+9nY5Q+qorSHcq2xsLTUaBN5AGiUC36PpJ2SvquK8opahhAGgIwoRwBARoQwAGRECANARoQwAGRECANARoQwAGRECANARoQwAGRECANARoQwAGRECANARoQwAGRECANARoQwAGRECANARptyfnEAmJYLfouk7ZKuVkVpxxV1Gk3dAXSGC/6gpOPxu3g7vuiNqigvqsMoRwDoBBf89pEANpvj7zuNEAbQFS8nMmuHOo4QBtB6LvgnJO1L3LqgjiOEAbSaC95y6qXELXug9aE6jhAG0HZH4mqIcaeroryqjiOEAbSWC36bpOcSt2xlxEfqAUIYQNsfxm1MXP+4KkoL4s4jhAG0kgt+r6T9iVtWgvhSPUEIA2jrw7jjNbffq4qyN7vMCGEAbXSs5mHcmaooL6lHCGEAreKCf1jSs4lbd/uwJG0cIQygbZ6rySZ7GHdbPUMIA2ibnYlr3/XpYdwoQhhA21wa+/1S3x7GjaKfMIC2+USSbdKw5Wl3rA5cFaXNhHvpPwEX4T1OV3304gAAAABJRU5ErkJggg==" />
            </svg>
        </div>
    </section>
    <!-- ================== Vision, Mission & Goals Section ================== -->
    <section class="py-20 bg-[#eaf0ee]/70 relative z-10">
        <div class="container px-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-10 items-center">
                <div class="mission-content">
                    <!-- Vision Section -->
                    <div class="mb-5">
                        <p class="main-sub-title mb-2 text-primary-text-color font-semibold px-5 text-justify">
                            {{ __('about.vision_title') }}
                        </p>
                        <!-- Content will be injected here from backend/text editor -->
                        <div id="vision-content"
                            class="main-description-ui p-5 lg:max-h-[170px] lg:overflow-y-auto bg-[#f0f2f4] shadow-md leading-8">
                            <p>
                                {{ __('about.vision_text') }}
                            </p>
                        </div>
                    </div>

                    <!-- Mission Section -->
                    <div class="mb-5">
                        <p class="main-text-sub-title mb-2 text-primary-text-color font-semibold px-5 text-justify">
                            {{ __('about.mission_title') }}
                        </p>
                        <!-- Content will be injected here from backend/text editor -->
                        <div id="mission-content"
                            class="main-description-ui lg:max-h-[170px] lg:overflow-y-auto p-5 bg-[#f0f2f4] shadow-md leading-8">
                            <p>
                                {{ __('about.mission_text') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Goals Section -->
                <div>
                    <figure class="w-full h-full">
                        <img class="w-full h-full" src="{{asset('assets/images/about-us/cover.webp')}}" loading="lazy"
                            decoding="async" width="100%" height="466" alt="about us" />
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- group the above section to avoid repeated the translate y value -->
      <div class="translate-y-[150px] relative z-20">
        <!-- ================== CTA Section ================== -->
        <section class="relative py-20 z-20">
          <div class="container relative">
            <div
              class="w-full relative z-4 mx-auto rounded-[40px] overflow-hidden text-white flex items-center lg:justify-start justify-center h-[190px] px-5 lg:px-10 pt-4 pb-10"
            >
              <!-- Background Image -->
              <img
                src="{{asset('assets/images/about-us/layer-banner.webp')}}"
                role="presentation"
                class="absolute inset-0 w-full h-full object-cover"
                loading="lazy"
                decoding="async"
              />

              <div class="custom-overlay bg-active-color/70"></div>

              <div class="title realative z-10">
                <p
                  class="text-sub-title xl:text-[25px] 2xl:text-[30px] text-white font-bold"
                >
                  {{ __('about.cta_title') }}
                </p>
                <span class="text-description text-white">
                  {{ __('about.cta_subtitle') }}
                </span>
              </div>
            </div>
            <div class="absolute bottom-0 end-5 z-5" data-hide-mobile>
              <img
                width="300"
                src="{{asset('assets/images/about-us/person.webp')}}"
                loading="lazy"
                decoding="async"
                role="presentation"
              />
            </div>
          </div>
          <div
            class="img-bg absolute bottom-0 start-0 rtl:-scale-x-[1] translate-y-[50%]"
            data-hide-mobile
          >
            <svg
              role="presentation"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              width="581"
              height="207"
              viewBox="0 0 581 207"
              class="-scale-x-[1]"
            >
              <image
                width="581"
                height="207"
                xlink:href="data:image/png;base64,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"
              ></image>
            </svg>
          </div>
        </section>

        <!-- ================== Partners Section ================== -->
        <section class="py-20 relative z-10">
          <div class="container px-5">
            <div class="text-center mb-12">
              <h2 class="main-title-ui before:left-0 inline-block">{{ __('about.partners_title') }}</h2>
            </div>

            <!-- Partners Slider -->
            <div class="partners-swiper-container relative">
              <div class="swiper partners-swiper">
                <div class="swiper-wrapper">
                  <!-- Partner 1 -->
                  <div class="swiper-slide">
                    <div class="flex items-center justify-center p-6">
                      <img
                        src="{{asset('assets/images/about-us/partners.webp')}}"
                        alt="Partner 1"
                        class="max-h-24 w-auto object-contain grayscale hover:grayscale-0 transition-all duration-300"
                        loading="lazy"
                        decoding="async"
                      />
                    </div>
                  </div>
                  <!-- Partner 2 -->
                  <div class="swiper-slide">
                    <div class="flex items-center justify-center p-6">
                      <img
                        src="{{asset('assets/images/about-us/partners.webp')}}"
                        alt="Partner 2"
                        class="max-h-24 w-auto object-contain grayscale hover:grayscale-0 transition-all duration-300"
                        loading="lazy"
                        decoding="async"
                      />
                    </div>
                  </div>
                  <!-- Partner 3 -->
                  <div class="swiper-slide">
                    <div class="flex items-center justify-center p-6">
                      <img
                        src="{{asset('assets/images/about-us/partners.webp')}}"
                        alt="Partner 3"
                        class="max-h-24 w-auto object-contain grayscale hover:grayscale-0 transition-all duration-300"
                        loading="lazy"
                        decoding="async"
                      />
                    </div>
                  </div>
                  <!-- Partner 4 -->
                  <div class="swiper-slide">
                    <div class="flex items-center justify-center p-6">
                      <img
                        src="{{asset('assets/images/about-us/partners.webp')}}"
                        alt="Partner 4"
                        class="max-h-24 w-auto object-contain grayscale hover:grayscale-0 transition-all duration-300"
                        loading="lazy"
                        decoding="async"
                      />
                    </div>
                  </div>
                  <!-- Partner 4 -->
                  <div class="swiper-slide">
                    <div class="flex items-center justify-center p-6">
                      <img
                        src="{{asset('assets/images/about-us/partners.webp')}}"
                        alt="Partner 4"
                        class="max-h-24 w-auto object-contain grayscale hover:grayscale-0 transition-all duration-300"
                        loading="lazy"
                        decoding="async"
                      />
                    </div>
                  </div>
                  <!-- Partner 4 -->
                  <div class="swiper-slide">
                    <div class="flex items-center justify-center p-6">
                      <img
                        src="{{asset('assets/images/about-us/partners.webp')}}"
                        alt="Partner 4"
                        class="max-h-24 w-auto object-contain grayscale hover:grayscale-0 transition-all duration-300"
                        loading="lazy"
                        decoding="async"
                      />
                    </div>
                  </div>
                  <!-- Add more partners as needed After this section -->
                </div>
              </div>

              <!-- Navigation buttons -->
              <button
                aria-label="Next Partner"
                id="partners-next"
                class="swiper-button-next absolute top-1/2 -translate-y-1/2 start-0 z-10 bg-primary-text-color text-white! p-3 rounded-full hover:bg-opacity-90 transition-all duration-300 cursor-pointer ltr:rotate-180"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-6 w-6"
                  fill="#fff"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M15 19l-7-7 7-7"
                  />
                </svg>
              </button>
              <button
                aria-label="Previous Partner"
                id="partners-prev"
                class="swiper-button-prev absolute top-1/2 -translate-y-1/2 end-0 z-10 bg-primary-text-color text-white! p-3 rounded-full hover:bg-opacity-90 transition-all duration-300 cursor-pointer ltr:rotate-180"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-6 w-6"
                  fill="#fff"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M9 5l7 7-7 7"
                  />
                </svg>
              </button>
            </div>
          </div>
        </section>

        <!-- ================== Blogs ================== -->
        <section class="pb-[250px] lg:pb-[400px] pt-10">
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
            {{ __('home.blogs_title') }}
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
                {{ __('home.read_more') }}</span>
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
        <!-- ================== Start Footer ================== -->
       
      </div>
@endsection