<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Career Path: Captcha Verification</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,900" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome Icons -->
     <!-- Font Awesome Icons --><link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <header role="banner">
     
     <nav class="navbar navbar-expand-md navbar-dark bg-light">
       <div class="container">
         <img src="images/logo.png" width="200" height="200" alt="Career Path Logo">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav absolute-right">
             <li class="nav-item">
               <a href="login.html" class="nav-link active">Login</a>
             </li>
             <li class="nav-item">
               <a href="register.php" class="nav-link">Register</a>
             </li>
           </ul>
           
         </div>
       </div>
     </nav>
   </header>
   <!-- END header -->

   <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
     <div class="container">
       <div class="row align-items-center site-hero-inner justify-content-center">
         <div class="col-md-8 text-center">
         <h1>Human Verification</h1>
           <div class="mb-5 element-animate">
           </div>
         </div>
       </div>
     </div>
   </section>
   <!-- END section -->

    <section class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 box">
                    <h2 class="mb-5">Complete the CAPTCHA to Continue</h2>
    <div class="container">
      <div class="wrapper">
        <canvas id="canvas" width="200" height="70"></canvas>
        <button id="reload-button">
          <i class="fa-solid fa-arrow-rotate-right"></i>
        </button>
      </div>
      <input
        type="text"
        id="user-input"
        placeholder="Enter the text in the image"
      />
      <button id="submit-button" class="btn btn-primary">Submit</button>
    </div>
    <!-- Script -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="script.js"></script>
    
    <script>
        //Initial References
let submitButton = document.getElementById("submit-button");
let userInput = document.getElementById("user-input");
let canvas = document.getElementById("canvas");
let reloadButton = document.getElementById("reload-button");
let text = "";

//Generate Text
const textGenerator = () => {
  let generatedText = "";
  /* String.fromCharCode gives ASCII value from a given number */
  // total 9 letters hence loop of 3
  for (let i = 0; i < 3; i++) {
    //65-90 numbers are capital letters
    generatedText += String.fromCharCode(randomNumber(65, 90));
    //97-122 are small letters
    generatedText += String.fromCharCode(randomNumber(97, 122));
    //48-57 are numbers from 0-9
    generatedText += String.fromCharCode(randomNumber(48, 57));
  }
  return generatedText;
};

//Generate random numbers between a given range
const randomNumber = (min, max) =>
  Math.floor(Math.random() * (max - min + 1) + min);

//Canvas part
function drawStringOnCanvas(string) {
  //The getContext() function returns the drawing context that has all the drawing properties and functions needed to draw on canvas
  let ctx = canvas.getContext("2d");
  //clear canvas
  ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
  //array of text color
  const textColors = ["rgb(0,0,0)", "rgb(130,130,130)"];
  //space between letters
  const letterSpace = 150 / string.length;
  //loop through string
  for (let i = 0; i < string.length; i++) {
    //Define initial space on X axis
    const xInitialSpace = 25;
    //Set font for canvas element
    ctx.font = "20px Roboto Mono";
    //set text color
    ctx.fillStyle = textColors[randomNumber(0, 1)];
    ctx.fillText(
      string[i],
      xInitialSpace + i * letterSpace,
      randomNumber(25, 40),
      100
    );
  }
}

//Initial Function
function triggerFunction() {
  //clear Input
  userInput.value = "";
  text = textGenerator();
  console.log(text);
  //Randomize the text so that everytime the position of numbers and small letters is random
  text = [...text].sort(() => Math.random() - 0.5).join("");
  drawStringOnCanvas(text);
}

//call triggerFunction for reload button
reloadButton.addEventListener("click", triggerFunction);

//call triggerFunction when page loads
window.onload = () => triggerFunction();

//When user clicks on submit
submitButton.addEventListener("click", () => {
  const userInputValue = userInput.value;

  // Utiliser Fetch API pour envoyer les données au serveur
  fetch('verifyCaptcha.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: `captcha=${userInputValue}&expectedCaptcha=${text}`
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      window.location.href = data.redirectUrl;
    } else {
      alert("Incorrect");
      triggerFunction();
    }
  })
  .catch(error => {
    console.error('Error:', error);
  });
});

    </script>
  </body>
</html>
