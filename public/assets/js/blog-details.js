
function createContactBox() {
  const isEn = document.documentElement.dir !== "rtl"
  const contactDiv = document.createElement("div");
  contactDiv.innerHTML = isEn ? `
    <div class="md:px-0! relative container h-[300px] my-4">
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
                <p class="text-[25px]! font-medium! text-white!">
                  Ready to take the first step toward enrollment
                </p>
                <p class=" text-white!">
                  in the best accredited universities
                </p>
              </div>

              <!-- Bottom Line -->
              <div class="line mb-1 text-start">
                <p class="text-white! font-light!">
                  Contact us now to schedule a consultation and learn more about us
                </p>
              </div>
              <div class="flex items-center justify-center gap-2 text-white">
                <div class="grow h-px bg-white"></div>
                <a  href="${whatsappUrl}" class="w-fit px-2 whitespace-nowrap font-light">Start with us now</a>
              </div>
            </div>
          </div>
        </div>

  ` :
  `
        <div class="md:px-0! relative container h-[300px] my-4">
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
                <p class="text-[25px]! font-medium! text-white!">
                  مستعد لاتخاذ الخطوه الاول نحو الالتحاق
                </p>
                <p class="font-bold! text-white!">
                  بافضل الجامعات المعتمده
                </p>
              </div>

              <!-- Bottom Line -->
              <div class="line mb-1 text-start">
                <p class="text-white! font-light!">
                  تواصل معانا الان لتحديد موعد استشاره ومعرفه المزيد عنا
                </p>
              </div>
              <div class="flex items-center justify-center gap-2 text-white">
                <div class="grow h-px bg-white"></div>
                <a href="${whatsappUrl}" class="w-fit px-2 whitespace-nowrap font-light">ابدا معنا الان</a>
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
