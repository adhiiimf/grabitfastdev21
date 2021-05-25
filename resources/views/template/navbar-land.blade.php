@yield('navbar-land')
<section id="navigation"><!--Navbar-->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="d-flex marginleft10">
              <a class="navbar-brand" href="https://telkomuniversity.ac.id/" target="_blank"><img src="assets/telu.png" alt="logo" width="40px" height="auto"></a>
              <a class="navbar-brand" href="/"><img src="assets/logo forcy.png" alt="logo" width="40px" height="auto"></a>
              <a class="navbar-brand" href="/"><img src="assets/logo-main.png" alt="logo" width="40px" height="auto"></a>
            </div>
              <button class="nav-togIcon" type="button" data-bs-toggle="collapse" data-bs-target="#TogglerGo" aria-controls="TogglerGo" aria-expanded="false" aria-label="Toggle navigation">
                <img src="assets/navbar-button.png" alt="logo" width="40px" height="auto">
              </button>
            <div class="collapse navbar-collapse" id="TogglerGo">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 desktop-hide text-center">
                  <li class="nav-item">
                    <a class="nav-link" style="color: #ffffff;background-color:#006442;border-radius: 0.7rem;padding-top: 0.3rem;padding-bottom: 0.3rem;" aria-current="page" href="/tickets" target="_blank">BUY TICKET NOW</a>
                  </li>
                <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/">Home</a>
                      </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/mascot">Mascot</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/theme">Theme</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/lineup">Line Up</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/map">Map</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/aboutus">About Us</a>
                  </li>
                  <li>
                      <div class="d-flex justify-content-center pt-2">
                        <a href="https://www.instagram.com/grabitfasttelkom/" target="_blank">
                          <i class="fab fa-instagram navOA" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com/channel/UCP_j4yhOh9ld2a0Et3UoLkw" target="_blank"><i class="fab fa-youtube navOA" aria-hidden="true"></i></a>
                        <a href="https://vt.tiktok.com/ZSJaxMoyR/"><i class="fab fa-tiktok navOA" aria-hidden="true"></i></a>
                      </div>
                  </li>
                </ul>
            </div>
        </div>
        <div class="text-end d-flex mobile-hide">
            <a href="/tickets" target="_blank"><button class="buttonTicket">
              <div>
                <span>BUY TICKET NOW</span>
              </div>
            </button></a>
        </div>
    </nav>
</section>