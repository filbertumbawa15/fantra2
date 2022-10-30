            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
              <div class="section__content section__content--p30">
                <div class="container-fluid">
                  <div class="header-wrap">
                    <form class="form-header" action="" method="POST">
                      <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                      <button class="au-btn--submit" type="button">
                        <i class="zmdi zmdi-search"></i>
                      </button>
                    </form>
                    <div class="header-button">
                      <div class="noti-wrap">
                      </div>
                      <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                          <div class="image">
                            <img src="{{ asset('images/faces/face15.jpg') }}" alt="John Doe" />
                          </div>
                          <div class="content">
                            <a class="js-acc-btn" href="#">Admin</a>
                          </div>
                          <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <div class="account-dropdown js-dropdown">
                              <div class="account-dropdown__footer">
                                <button>
                                  <i class="zmdi zmdi-power"></i>Logout</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </header>
            <!-- HEADER DESKTOP-->

            <script>
              window.onload = () => {
                $('.username').text(JSON.parse(getCookie('user')).name)
              }
            </script>

            <!-- {{ asset('img/undraw_profile.svg') }} -->