<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HealthyBites</title>
    <link
      rel="shortcut icon"
      href="{{url('/assets/user/images/Logo-2.svg')}}"
      type="image/svg+xml"
    />
    <link rel="stylesheet" href="{{url('/assets/user/css/style.css')}}" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            @if (session()->has('registerSuccess'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  {{ session('registerSuccess') }}
                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                        @endif

              @if (session()->has('loginError'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
        @endif
            <!-- Form Start -->
            
            <form action="/login" method="post" autocomplete="off" class="sign-in-form">
              @csrf
              <div class="logo">
                <img src="{{url('/assets/user/images/Logo-5.svg')}}" alt="healthybites" />
              </div>


              <!-- Sign in -->
              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    name="email"
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    name="password"
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign In" class="sign-btn" />

              </div>
            </form>
            <!-- Form End -->

            <!-- Form Start -->
            <form action="/register" method="post" enctype="multipart/form-data" autocomplete="off" class="sign-up-form">
              @csrf
              <div class="logo">
                <img src="{{url('/assets/user/images/Logo-5.svg')}}" alt="healthybites" />
              </div>
              <!-- Sign up -->
              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    name="name"
                    type="text"
                    minlength="4"
                    class="input-field @error('name') is-invalid @enderror"
                    autocomplete="off"
                    required
                  />
                  <label>Name</label>
                  @error('name')
                                        <div class="invalid-feedback">
                                        {{$message}}
                                        </div>
                  @enderror
                </div>

                <div class="input-wrap">
                  <input
                    name="email"
                    type="email"
                    class="input-field @error('email') is-invalid @enderror"
                    autocomplete="off"
                    required
                  />
                  <label>Email</label>
                  @error('email')
                                        <div class="invalid-feedback">
                                        {{$message}}
                                        </div>
                  @enderror
                </div>

                <div class="input-wrap">
                  <input
                    name="password"
                    type="password"
                    minlength="4"
                    class="input-field @error('password') is-invalid @enderror"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                  @error('password')
                                        <div class="invalid-feedback">
                                        {{$message}}
                                        </div>
                  @enderror
                </div>

                <div class="input-wrap">
                  <input
                    name="foto_user"
                    type="file"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Insert Photo</label>
                </div>

                <div class="input-wrap">
                  <input
                    name="alamat"
                    type="Alamat"
                    class="input-field @error('alamat') is-invalid @enderror"
                    autocomplete="off"
                    required
                  />
                  <label>Alamat</label>
                  @error('alamat')
                                        <div class="invalid-feedback">
                                        {{$message}}
                                        </div>
                  @enderror
                </div>  

                <br>

                <input type="submit" value="Sign Up" class="sign-btn" />

              </div>
            </form>
            <!-- Form End -->
          </div>

          <!-- Corousel Start -->
          <div class="carousel">
            <div class="images-wrapper">
              <img
                src="{{url('/assets/user/images/image1.png')}}"
                class="image img-1 show"
                alt=""
              />
              <img
                src="{{url('/assets/user/images/image2.png')}}"
                class="image img-2"
                alt=""
              />
              <img
                src="{{url('/assets/user/images/image3.png')}}"
                class="image img-3"
                alt=""
              />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Customize your own food</h2>
                  <h2>Reserve for better place</h2>
                  <h2>Invite someone to taste me</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
          <!-- Carousel End -->
        </div>
      </div>
    </main>

    <!-- Javascript file -->
    <script src="{{url('/assets/user/js/app.js')}}"></script>
  </body>
</html>
