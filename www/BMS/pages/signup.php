<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bank Website</title>
    <link rel="stylesheet" href="./utils/signup.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
  </head>
  <body>
    <div class="header">
      <div class="h-logo">Rohans Bank</div>
      <div class="h-to">
        <a href="/Index.html#about-section">About Us</a>
        <a href="./login.html">Log In</a>
      </div>
    </div>
    <div class="main">
      <div class="container">
        <h1>Create Your Bank Account</h1>
        <form id="signup-form"  method="post" action="registersave.php" >
          <div class="form-group">
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" required />
          </div>
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required />
          </div>
          <div class="form-group">
            <label for="password">Create Password</label>
            <div class="password-container">
              <input type="password" id="password1" name="password1" required />
            </div>
          </div>
          <button type="submit">Sign Up</button>
        </form>
        <p class="terms">
          By signing up, you agree to our <a href="#">Terms of Service</a> and
          <a href="#">Privacy Policy</a>.
        </p>
      </div>
    </div>

    <script>
      

        form.addEventListener("submit", function (e) {
          e.preventDefault();
          // Here you would typically send the form data to your server
          <?php
          include'registersave.php';
?>
          console.log("Form submitted");
          alert("Signup successful!");
        });
      
    </script>
  </body>
</html>
