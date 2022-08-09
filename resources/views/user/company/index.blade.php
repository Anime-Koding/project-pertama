<x-dashboard>
  <div class="container d-flex position-relative w-100 bg-white manrope">
    <div class="left w-25 position-relative">
      <div class="profile container d-flex align-items-center justify-content-around">
        <div>
          <img style="height: 100px;" class="rounded-circle" src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Default_pfp.jpg?20200418092106">
        </div>
        <div class="name-company">
          <p>Resumenya</p>
          <p>resumenya@gmail.com</p>
        </div>
      </div>
      <div class="navigation w-100 manrope">
        <ul>
          <a id="btn" href="#tabcompanyinfo">
            <div class="nav-button w-100 d-flex align-items-center justify-content-between">
              <div class="d-flex">
                <em class="icon ni ni-briefcase" style="font-size: 25px;"></em>
                <li style="font-size: 14px;margin-left: 10px;">
                  Companies Info
                </li>
              </div>
              <li>></li>
            </div>
          </a>
          <a id="btn" href="#tabsocialmedia">
            <div class="nav-button w-100 d-flex align-items-center justify-content-between">
              <div class="d-flex">
                <em class="icon ni ni-briefcase" style="font-size: 25px;"></em>
                <li style="font-size: 14px;margin-left: 10px;">
                  Social Media Companies
                </li>
              </div>
              <li>></li>
            </div>
          </a>
          <a id="btn" href="#cultureinfo">
            <div class="nav-button w-100 d-flex align-items-center justify-content-between">
              <div class="d-flex">
                <em class="icon ni ni-briefcase" style="font-size: 25px;"></em>
                <li style="font-size: 14px;margin-left: 10px;">
                  Culture Info
                </li>
              </div>
              <li>></li>
            </div>
          </a>
        </ul>
      </div>
    </div> <!-- Left Section -->
    <div class="container i-profile w-75 right">
      <div id="tabcompanyinfo" class="content active">
        <h4 class="manrope">Company Profile</h4>
        <p>Here is company profile</p>
        <div class="info d-flex position-relative manrope">
          <div>
            <ul>
              <li class="mabo-30px">
                <p>Legal Name</p>
                <p class="text manrope">Resumenya</p>
              </li>
              <li class="mabo-30px">
                <p>Url Company</p>
                <a href="" class="text manrope text-primary">resumenya.com</a>
              </li>
              <li class="mabo-30px">
                <p>Country</p>
                <p class="text manrope">Indonesia</p>
              </li>
              <li class="mabo-30px">
                <p>City</p>
                <p class="text manrope">none</p>
              </li>
              <li class="mabo-30px">
                <p>Phone</p>
                <p class="text manrope">087*********</p>
              </li>
            </ul>
          </div>
          <div>
            <ul>
              <li class="mabo-30px">
                <p>Company Name</p>
                <p class="text manrope">Resumenya</p>
              </li>
              <li class="mabo-50px">
                <p>Profile Company</p>
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Default_pfp.jpg?20200418092106" id="logo" style="height: 80px" />
              </li>
              <li class="mabo-30px">
                <p>Province</p>
                <p class="text manrope">none</p>
              </li>
              <li class="mabo-30px">
                <p>Adress</p>
                <p class="text manrope">none</p>
              </li>
              <li class="mabo-30px">
                <p>Email</p>
                <p class="text manrope">resumenya~@gmail.com</p>
              </li>
            </ul>
            <a href="/company/profile/edit" class="btn-edit">
              <em class="icon ni ni-pen2" style="font-size: 20px;"></em> Edit Companies Info
            </a>
          </div>
        </div>
      </div>
      <div id="tabsocialmedia" class="content">
        <h4 class="manrope">Social Media Companies</h4>
        <p class="mabo-50px">Here is Social Media company profile</p>
        <ul class="flex flex-wrap">
          <li class="mabo-50px w-50">
            <p>WhatsApp</p>
            <p class="text manrope">087*********</p>
          </li>
          <li class="mabo-50px w-50">
            <p>Linkedin</p>
            <p class="text manrope">resume_nya</p>
          </li>
          <li class="mabo-50px w-50">
            <p>Skype</p>
            <p class="text manrope">resume_nya</p>
          </li>
          <li class="mabo-50px w-50">
            <p>Instagram</p>
            <p class="text manrope">resumenya</p>
          </li>
        </ul>
        <a href="/company/profile/edit#tabsocialmedia" class="text-primary add-other-btn">
          + Add Other
        </a>
      </div>
      <div id="cultureinfo" class="content">
        <div>
          <h4 class="manrope">Culture Companies</h4>
          <p class="mabo-30px">Here is Culture in company</p>
          <div class="wraper-visi-misi">
            <h5 class="text-primary manrope mabo-30px">Visi - Misi</h5>
            <h6 class="manrope mabo-10px">VISI</h6>
            <p class="bold">"Menjadi Perusahaan teknologi Dunia yang Terpecaya"</p>
            <h6 class="manrope mabo-10px">MISI</h6>
            <ul class="mabo-20px male-20px">
              <li class=" list-disc manrope">"Menjadi Perusahaan teknologi Dunia yang Terpecaya"</li>
              <li class=" list-disc manrope">"Menjadi Perusahaan teknologi Dunia yang Terpecaya"</li>
              <li class=" list-disc manrope">"Menjadi Perusahaan teknologi Dunia yang Terpecaya"</li>
              <li class=" list-disc manrope">"Menjadi Perusahaan teknologi Dunia yang Terpecaya"</li>
              <li class=" list-disc manrope">"Menjadi Perusahaan teknologi Dunia yang Terpecaya"</li>
            </ul>
          </div>
          <div class="wraper-visi-misi">
            <h5 class="text-primary manrope matop-30px mabo-30px">Struktur Organisasi</h5>
            <h6 class="manrope mabo-10px">Jabatan - <span class="text-primary">Direksi</span></h6>
            <p>Organ perusahaan yang berwenang dan bertanggung jawab penuh atas pengurusan perseroan untuk kepentingan perseroan Sesuai dengan maksud dan tujuan perseroan serta mewakili perseroan, baik di dalam maupun di luar pengadilan sesuai ketentuan Anggaran Dasar.p>
            <h6 class="manrope mabo-10px">Wewenang</h6>
            <ul class="mabo-20px male-20px">
              <li class=" list-disc manrope">Memimpin dan mengurus perusahaan sesuai dengan kepentingan dan tujuan perusahaan.</li>
              <li class=" list-disc manrope">Menguasai, memelihara dan mengurus kekayaan.</li>
              <li class=" list-disc manrope">Direksi mengatur pola pembagian tugas masing-masing.</li>
            </ul>
          </div>
          <div class="matop-30px">
            <h5 class="text-primary manrope mabo-30px">Work Culture</h5>
            <ul class="flex flex-wrap" style="padding: 10px; box-sizing: boder-box;">
              <li class="mabo-50px w-50">
                <p style="font-size: 14px">Work Hour</p>
                <p style="font-weight: bold; font-size: 18px; margin-top: -20px;">8 jam</p>
              </li>
              <li class="mabo-50px w-50">
                <p style="font-size: 14px">Uniform Work</p>
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/ac/Default_pfp.jpg?20200418092106" id="logo" style="height: 80px" />
              </li>
              <li class="mabo-50px w-50">
                <p style="font-size: 14px">Employment Type</p>
                <p style="font-weight: bold; font-size: 18px; margin-top: -20px;">Remote</p>
              </li>
              <li class="mabo-50px w-50">
                <p>Facilities</p>
                <ul style="margin-top: -16px; font-weight: bold;">
                  <li class="list-disc">
                    Uang Makan
                  </li>
                  <li class="list-disc">
                    Komputer/Laptop
                  </li>
                  <li class="list-disc">
                    Wifi
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <a href="http://localhost:8000/company/profile/edit#cultureinfo" style="border: 1px solid #F57039; padding: 10px 20px; border-radius: 3px ; position: absolute; right: 50px;">
            <em class="icon ni ni-pen2" style="font-size: 20px;"></em> Edit Companies Culture
          </a>
        </div>
      </div>
    </div>
  </div>
  <script>
    const button = document.querySelectorAll("#btn")
    button.forEach((element, index) => {
      element.addEventListener("click", () => {
        const content = document.querySelectorAll(".content")
        content.forEach((el) => {
          el.style.display = "none"
        })
        content[index].style.display = "block"
      })
    });
  </script>
</x-dashboard>
