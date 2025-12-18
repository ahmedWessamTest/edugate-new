<script defer src="{{asset('assets/js/mobile-optimizer.js')}}"></script>
<script defer src="{{asset('vendors/swiper-bundle.min.js')}}"></script>
<script defer src="{{asset('assets/js/main.js')}}"></script>
@if (request()->route()->getName() == 'home')
<script defer src="{{asset('assets/js/init-swiper-home.js')}}" ></script>
@elseif (request()->route()->getName() == 'about')
<script src="{{asset('assets/js/init-swiper-about-us.js')}}" defer></script>
@endif
<script>
  document.addEventListener("DOMContentLoaded",function(){
    Array.from(document.images).forEach(img => {
      img.addEventListener("error", element => {
        element.target.src = "{{ asset('assets/images/Webp-Dimensions/fallback.webp') }}"
        element.target.style = 'object-fit:contain'
      })
    })
  })
</script>