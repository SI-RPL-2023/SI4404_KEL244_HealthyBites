<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HealthyBites</title>
  <link rel="shortcut icon" href="./assets/images/Logo-2.svg" type="image/svg+xml" />
  <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
  <main>
    <div class="box">
      <div class="inner-box">
        <div class="forms-wrap">
          <!-- Form Start -->
          <form action="index.html" autocomplete="off" class="sign-in-form">
            <div class="logo">
              <img src="./assets/images/Logo-5.svg" alt="healthybites" />
            </div>
            <!-- Sign in -->
            <div class="heading">
              <h2>Welcome Back</h2>
              <h6>Not registred yet?</h6>
              <a href="#" class="toggle">Sign up</a>
            </div>

            <div class="actual-form">
              <div class="input-wrap">
                <input type="text" minlength="4" class="input-field" autocomplete="off" required />
                <label>Name</label>
              </div>

              <div class="input-wrap">
                <input type="password" minlength="4" class="input-field" autocomplete="off" required />
                <label>Password</label>
              </div>

              <input type="submit" value="Sign In" class="sign-btn" />

              <p class="text">
                Forgotten your password or you login datails?
                <a href="#">Get help</a> signing in
              </p>
            </div>
          </form>
          <!-- Form End -->

          <!-- Form Start -->
          <form action="index.html" autocomplete="off" class="sign-up-form">
            <div class="logo">
              <img src="./assets/images/Logo-5.svg" alt="healthybites" />
            </div>
            <!-- Sign up -->
            <div class="heading">
              <h2>Get Started</h2>
              <h6>Already have an account?</h6>
              <a href="#" class="toggle">Sign in</a>
            </div>

            <div class="actual-form">
              <div class="input-wrap">
                <input type="text" minlength="4" class="input-field" autocomplete="off" required />
                <label>Name</label>
              </div>

              <div class="input-wrap">
                <input type="email" class="input-field" autocomplete="off" required />
                <label>Email</label>
              </div>

              <div class="input-wrap">
                <input type="password" minlength="4" class="input-field" autocomplete="off" required />
                <label>Password</label>
              </div>

              <input type="submit" value="Sign Up" class="sign-btn" />

              <p class="text">
                By signing up, I agree to the
                <a href="#">Terms of Services</a> and
                <a href="#">Privacy Policy</a>
              </p>
            </div>
          </form>
          <!-- Form End -->
        </div>

        <!-- Corousel Start -->
        <div class="carousel">
          <div class="images-wrapper">
            <img src="./assets/images/image1.png" class="image img-1 show" alt="" />
            <img src="./assets/images/image2.png" class="image img-2" alt="" />
            <img src="./assets/images/image3.png" class="image img-3" alt="" />
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
  <script src="./assets/js/app.js"></script>
</body>

</html>