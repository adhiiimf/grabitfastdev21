@yield('navbar-land')
<section id="navigation"><!--Navbar-->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <div class="d-flex marginleft10">
              <a class="navbar-brand" href="/"><img src="assets/telu.png" alt="logo" width="40px" height="auto"></a>
              <a class="navbar-brand" href="/"><img src="assets/logo forcy.png" alt="logo" width="40px" height="auto"></a>
              <a class="navbar-brand" href="/"><img src="assets/logo-main.png" alt="logo" width="40px" height="auto"></a>
            </div>
              <button class="nav-togIcon" type="button" data-bs-toggle="collapse" data-bs-target="#TogglerGo" aria-controls="TogglerGo" aria-expanded="false" aria-label="Toggle navigation">
                <img src="assets/navbar-button.png" alt="logo" width="40px" height="auto">
              </button>
            <div class="collapse navbar-collapse" id="TogglerGo">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 desktop-hide text-center">
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
                        <a href="https://www.instagram.com/grabitfasttelkom/" target="_blank"><img class="navOA" src="assets/instagram.png" alt=""></a>
                        <a href="https://www.youtube.com/channel/UCP_j4yhOh9ld2a0Et3UoLkw" target="_blank"><img class="navOA" src="assets/youtube.png" alt=""></a>
                        <a href=""><img class="navOA" src="assets/line.png" alt=""></a>
                      </div>
                  </li>
                </ul>
            </div>
        </div>
        <div class="text-end d-flex">
            <div class="tagline-fonts">Express Your Creativity</div>
        </div>
    </nav>
</section>