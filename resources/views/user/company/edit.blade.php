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
      </div><!-- Head Profile Section-->
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
          <!--Companies info navigation-->
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
          <!--Companies Social Media navigation-->
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
          <!--Companies Culture navigation-->
        </ul>
      </div>
      <!--Navigation Section-->
    </div> <!-- Left Section -->
    <div class="container i-profile w-75 right">
      <div id="tabcompanyinfo" class="content active">
        <h4 class="manrope">Company Profile</h4>
        <p>Here is company profile</p>
        <form action="" method="POST">
          <div class="info d-flex position-relative manrope">
            <div>
              <ul>
                <li class="mabo-30px">
                  <p>Legal Name</p>
                  <input type="text" class="form-control" style="width: 70%" name="legalName" value="" required>
                </li>
                <li class="mabo-30px">
                  <p>Url Company</p>
                  <input type="text" class="form-control" style="width: 70%" name="legalName" value="" required>
                </li>
                <li class="mabo-30px">
                  <p>Country</p>
                  <input type="text" class="form-control" style="width: 70%" name="legalName" value="" required>
                </li>
                <li class="mabo-30px">
                  <p>City</p>
                  <input type="text" class="form-control" style="width: 70%" name="legalName" value="" required>
                </li>
                <li class="mabo-30px">
                  <p>Phone</p>
                  <input type="text" class="form-control" style="width: 70%" name="legalName" value="" required>
                </li>
              </ul>
            </div>
            <div>
              <ul>
                <li class="mabo-30px">
                  <p>Company Name</p>
                  <input type="text" class="form-control" style="width: 70%" name="legalName" value="" required>
                </li>
                <li class="mabo-50px">
                  <p>Profile Company</p>
                  <label for="image">
                    <div style="width: 100px; height: 100px; border-radius: 5px; border: 3px solid #526A8E; border-style: dashed;" class="d-flex justify-content-center align-items-center">
                      <em class="icon ni ni-camera" style="font-size: 30px;"></em>
                    </div>
                  </label>
                  <input type="file" id="image" style="opacity: 0;" name="legalName" value="" required>
                </li>
                <li class="mabo-30px">
                  <p>Province</p>
                  <input type="text" class="form-control" style="width: 70%" name="legalName" value="" required>
                </li>
                <li class="mabo-30px">
                  <p>Adress</p>
                  <input type="text" class="form-control" style="width: 70%" name="legalName" value="" required>
                </li>
                <li class="mabo-30px">
                  <p>Email</p>
                  <input type="text" class="form-control" style="width: 70%" name="legalName" value="" required>
                </li>
              </ul>
              <button type="submit" class="btn btn-primary">
                <em class="icon ni ni-pen2" style="font-size: 20px;"></em> Save Companies Info
              </button>
            </div>
          </div>
        </form>
      </div>
      <!--Companies Info Section-->
      <div id="tabsocialmedia" class="content">
        <h4 class="manrope">Social Media Companies</h4>
        <p class="mabo-50px">Here is Social Media company profile</p>
        <ul class="flex flex-wrap">
          <li class="mabo-50px w-50">
            <p>WhatsApp</p>
            <input type="text" class="form-control" style="width: 70%" name="legalName" value="" required>
          </li>
          <li class="mabo-50px w-50">
            <p>Linkedin</p>
            <input type="text" class="form-control" style="width: 70%" name="legalName" value="" required>
          </li>
          <li class="mabo-50px w-50">
            <p>Skype</p>
            <input type="text" class="form-control" style="width: 70%" name="legalName" value="" required>
          </li>
          <li class="mabo-50px w-50">
            <p>Instagram</p>
            <input type="text" class="form-control" style="width: 70%" name="legalName" value="" required>
          </li>
        </ul>
        <div class="click-add-wewenang click-add d-flex justify-content-center align-items-center manrope" style="width: 35%">
          + Add
        </div>
      </div>
      <!--Social Media Section-->
      <div id="cultureinfo" class="content">
        <form action="" method="POST">
          <div>
            <h4 class="manrope">Culture Companies</h4>
            <p class="mabo-30px">Here is Culture in company</p>
            <div class="wraper-visi-misi">
              <h5 class="text-primary manrope mabo-30px">Visi - Misi</h5>
              <h6 class="manrope mabo-10px">VISI</h6>
              <input type="text" class="form-control" style="width: 70%" name="legalName" value="" required>
              <h6 class="manrope mabo-10px matop-30px">MISI</h6>
              <ul class="mabo-20px misi-wrapper">
                <input type="text" class="form-control mabo-10px" style="width: 70%" name="legalName" value="" required>
                <input type="text" class="form-control mabo-10px" style="width: 70%" name="legalName" value="" required>
              </ul>
              <div class="click-add-misi click-add d-flex justify-content-center align-items-center manrope">
                + Add
              </div>
            </div>
            <div class="wraper-visi-misi">
              <h5 class="text-primary manrope matop-30px mabo-30px">Struktur Organisasi</h5>
              <h6 class="manrope mabo-10px">Jabatan</h6>
              <input type="text" class="form-control mabo-20px" style="width: 70%" name="legalName" value="" required>
              <h6 class="manrope mabo-10px">Job Description</h6>
              <textarea class="form-control" name="legalName" value="">
              </textarea>
              <h6 class="manrope mabo-10px matop-30px">Wewenang</h6>
              <ul class="mabo-20px wewenang-wrapper">
                <input type="text" class="form-control mabo-10px" style="width: 70%" name="legalName" value="" required>
                <input type="text" class="form-control mabo-10px" style="width: 70%" name="legalName" value="" required>
              </ul>
              <div class="click-add-wewenang click-add d-flex justify-content-center align-items-center manrope">
                + Add
              </div>
            </div>
            <div class="matop-30px">
              <h5 class="text-primary manrope mabo-30px">Work Culture</h5>
              <ul class="flex flex-wrap" style="padding: 10px; box-sizing: boder-box;">
                <li class="mabo-50px w-50">
                  <p style="font-size: 14px">Work Hour</p>
                  <input type="text" class="form-control" style="width: 70%" name="legalName" value="" required>
                </li>
                <li class="mabo-50px w-50">
                  <p style="font-size: 14px">Uniform Work</p>
                  <label for="image">
                    <div style="width: 100px; height: 100px; border-radius: 5px; border: 3px solid #526A8E; border-style: dashed;" class="d-flex justify-content-center align-items-center">
                      <em class="icon ni ni-camera" style="font-size: 30px;"></em>
                    </div>
                  </label>
                  <input type="file" id="image" style="opacity: 0;" name="legalName" value="" required>
                </li>
                <li class="mabo-50px w-50">
                  <p style="font-size: 14px">Employment Type</p>
                  <input type="text" class="form-control" style="width: 70%" name="legalName" value="" required>
                </li>
                <li class="mabo-50px w-50">
                  <p>Facilities</p>
                  <ul style="margin-top: -16px; font-weight: bold;" class="facilities-wrapper">
                    <input type="text" class="form-control mabo-10px" style="width: 70%" name="legalName" value="" required>
                    <input type="text" class="form-control mabo-10px" style="width: 70%" name="legalName" value="" required>
                  </ul>
                  <div class="click-add-facilities click-add d-flex justify-content-center align-items-center manrope">
                    + Add
                  </div>
                </li>
              </ul>
            </div>
            <button type="submit" class="btn btn-primary">
              <em class="icon ni ni-pen2" style="font-size: 20px;"></em> Edit Companies Culture
            </button>
          </div>
        </form>
      </div>
      <!--Culture Companies-->
    </div>
    <!--Right Section-->
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

    function inputElement() {
      const input = document.createElement('input')
      input.type = 'text'
      input.name = 'legalName'
      input.style.width = '70%'
      input.classList.add("mabo-10px", "form-control")
      return input
    }

    document.querySelector(".click-add-misi").addEventListener("click", function() {
      document.querySelector(".misi-wrapper").appendChild(inputElement())
    })

    document.querySelector(".click-add-wewenang").addEventListener("click", function() {
      document.querySelector(".wewenang-wrapper").appendChild(inputElement())
    })

    document.querySelector(".click-add-facilities").addEventListener("click", function() {
      document.querySelector(".facilities-wrapper").appendChild(inputElement())
    })
  </script>
</x-dashboard>
