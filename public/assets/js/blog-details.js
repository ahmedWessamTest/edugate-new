
function createContactBox() {
  const isEn = document.documentElement.dir !== "rtl"
  const contactDiv = document.createElement("div");
  contactDiv.innerHTML = isEn ? `
    <div class="md:px-0! relative container my-4">
  <div class="relative mx-auto rounded-lg lg:rounded-[70px] overflow-hidden h-full px-10 pt-4 pb-10 flex items-center justify-center">
    <!-- Background image -->
    <img src="../../assets/images/home/Banner/1200x500.webp" srcset="
        ../../assets/images/home/Banner/600x250.webp   600w,
        ../../assets/images/home/Banner/900x400.webp   900w,
        ../../assets/images/home/Banner/1200x500.webp 1200w
      " sizes="(max-width: 640px) 100vw, (max-width: 1024px) 80vw, 1200px" width="1200" height="500" class="absolute inset-0 w-full h-full object-cover" loading="lazy" decoding="async" role="presentation">

    <!-- Overlay -->
    <div class="custom-overlay"></div>

    <!-- Content -->
    <div class="content relative z-10 flex flex-col h-full w-full">
      <!-- Centered Text -->
      <div class="top flex-1 flex flex-col justify-center items-center text-center">
        <p class="font-medium! text-white!" style="font-size:20px;">
          Ready to take the first step toward enrollment
        </p>
        <p class="text-white!" style="font-weight:bold">
          in the best accredited universities
        </p>
      </div>

      <!-- Buttons Container -->
      <div class="buttons-container">
        <!-- WhatsApp Button -->
        <!-- Call Now Button -->
        <a href="tel:$" class="btn call-btn whatsapp">
          <span class="btn-icon"><svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path d="M380.9 97.1c-41.9-42-97.7-65.1-157-65.1-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480 117.7 449.1c32.4 17.7 68.9 27 106.1 27l.1 0c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3 18.6-68.1-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6zM325.1 300.5c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6z"/></svg></span>
          Whatsapp
        </a>
        <!-- Call Now Button -->
        <a href="tel:$" class="btn call-btn">
          <span class="btn-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"  viewBox="0 0 512 512">
          <path d="M160.2 25C152.3 6.1 131.7-3.9 112.1 1.4l-5.5 1.5c-64.6 17.6-119.8 80.2-103.7 156.4 37.1 175 174.8 312.7 349.8 349.8 76.3 16.2 138.8-39.1 156.4-103.7l1.5-5.5c5.4-19.7-4.7-40.3-23.5-48.1l-97.3-40.5c-16.5-6.9-35.6-2.1-47 11.8l-38.6 47.2C233.9 335.4 177.3 277 144.8 205.3L189 169.3c13.9-11.3 18.6-30.4 11.8-47L160.2 25z"/></svg></span>
          Call Now
        </a>
      </div>

      <!-- Bottom Line -->
      <div class="line mb-1 text-start">
        <p class="text-white! font-light!">
          Contact us now to schedule a consultation and learn more about us
        </p>
      </div>
      <div class="flex items-center justify-center gap-2 text-white">
        <div class="grow h-px bg-white"></div>
        <a href="${whatsappUrl}" class="w-fit px-2 whitespace-nowrap font-light">Start with us now</a>
      </div>
    </div>
  </div>
</div>

  ` :
  `
       <div class="md:px-0! relative container my-4">
  <div class="relative mx-auto rounded-lg lg:rounded-[70px] overflow-hidden h-full px-10 pt-4  flex items-center justify-center">
    <!-- Background image -->
    <img src="../../assets/images/home/Banner/1200x500.webp" srcset="
        ../../assets/images/home/Banner/600x250.webp   600w,
        ../../assets/images/home/Banner/900x400.webp   900w,
        ../../assets/images/home/Banner/1200x500.webp 1200w
      " sizes="(max-width: 640px) 100vw, (max-width: 1024px) 80vw, 1200px" width="1200" height="500" class="absolute inset-0 w-full h-full object-cover" loading="lazy" decoding="async" role="presentation">

    <!-- Overlay -->
    <div class="custom-overlay"></div>

    <!-- Content -->
    <div class="content relative z-10 flex flex-col h-full w-full">
      <!-- Centered Text -->
      <div class="top flex-1 flex flex-col justify-center items-center text-center">
        <p class="font-medium! text-white!" style="font-size:20px;">
           مستعد لاتخاذ الخطوه الاول نحو الالتحاق 
        </p>
        <p class="text-white!" style="font-weight:bold">
           بافضل الجامعات المعتمده 
        </p>
      </div>

      <!-- Buttons Container -->
      <div class="buttons-container">
        <!-- WhatsApp Button -->
        <!-- Call Now Button -->
        <a href="tel:$" class="btn call-btn whatsapp">
          <span class="btn-icon"><svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
          <path d="M380.9 97.1c-41.9-42-97.7-65.1-157-65.1-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480 117.7 449.1c32.4 17.7 68.9 27 106.1 27l.1 0c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3 18.6-68.1-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1s56.2 81.2 56.1 130.5c0 101.8-84.9 184.6-186.6 184.6zM325.1 300.5c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8s-14.3 18-17.6 21.8c-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7s-12.5-30.1-17.1-41.2c-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2s-9.7 1.4-14.8 6.9c-5.1 5.6-19.4 19-19.4 46.3s19.9 53.7 22.6 57.4c2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4s4.6-24.1 3.2-26.4c-1.3-2.5-5-3.9-10.5-6.6z"/></svg></span>
          واتس اب
        </a>
        <!-- Call Now Button -->
        <a href="tel:$" class="btn call-btn">
          <span class="btn-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"  viewBox="0 0 512 512">
          <path d="M160.2 25C152.3 6.1 131.7-3.9 112.1 1.4l-5.5 1.5c-64.6 17.6-119.8 80.2-103.7 156.4 37.1 175 174.8 312.7 349.8 349.8 76.3 16.2 138.8-39.1 156.4-103.7l1.5-5.5c5.4-19.7-4.7-40.3-23.5-48.1l-97.3-40.5c-16.5-6.9-35.6-2.1-47 11.8l-38.6 47.2C233.9 335.4 177.3 277 144.8 205.3L189 169.3c13.9-11.3 18.6-30.4 11.8-47L160.2 25z"/></svg></span>
          اتصل الان
        </a>
      </div>
    </div>
  </div>
</div>
        
  `;
  return contactDiv;
}

function generateRandomId() {
  return 'id-' + Math.random().toString(36).substring(2, 9);
}

function generateTableOfContents() {
  const container = document.getElementById("articleContainer");
  
  const tocContainer = document.querySelectorAll(".tableOfContents ul");
  console.log(tocContainer);
  
  tocContainer.forEach((con)=> {
    con.innerHTML = "";
  
    const headings = container.querySelectorAll("h2");
    
    headings.forEach((heading,index) => {
      const id = generateRandomId();
      heading.setAttribute("id", id);
  
      const li = document.createElement("li");
      const a = document.createElement("a");
      a.textContent = `${index + 1}- ${heading.textContent}`;
      a.href = "#";
      a.className = `block transition-all duration-300 hover:text-main-green`;
  
      a.addEventListener("click", (e) => {
        e.preventDefault();
        heading.scrollIntoView({ behavior: "smooth", block: "center" });
      });
  
      li.appendChild(a);
      con.appendChild(li);
    });
  })
}

function insertContactBox() {
  const container = document.getElementById("articleContainer");  
  const paragraphs = [...container.querySelectorAll("p")].filter(p => {
  return !p.closest("table");
})
  paragraphs.forEach((h2, index) => {
    if ((index + 1) % 8 === 0) {
      const contactDiv = createContactBox();
      h2.insertAdjacentElement("beforebegin", contactDiv);
    }
  });
}

// ✅ شغل بس دول
insertContactBox();
generateTableOfContents();
