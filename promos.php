<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="description" content="A Premium investment and asset management organisation">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="Insurance Asset management Best">
    <title>BAS Promos</title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pagePiling.js/1.5.6/jquery.pagepiling.css">-->
    <link rel="stylesheet" href="css/careers.css">
    <link rel="stylesheet" href="css/wealth.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Josefin+Sans&family=Young+Serif&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Poppins:wght@300&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6c1ada6317.js" crossorigin="anonymous"></script>
    <noscript>Please Enable javascript to use this website</noscript>
</head>
<body>
<?php include_once "header.php"?>
  <section class="main-banner">
      <div class="animate__animated animate__fadeInLeft">
          <h1>Get Your Corporate Needs Sorted Out At the Best Price <span style="color: rgb(120, 0, 0); font-size: 4.5rem">Up to 50%</span></h1>
          <p>
            Secure your financial success with BAS Group today. 
            Take advantage of our one-off services at 
            half the cost. If you love what we do, we can explore ongoing 
            collaboration. If not, we stand by our commitment with a money-back 
            guarantee. Don't miss out—grab this limited-time opportunity!
          </p>
          
      </div>
      <div class="main-banner-image animate__animated animate__fadeInRight">

          <img src="images/happy-lady.png" alt="">
      </div>
  </section>
  <div class="available-offers">
    <div class="offers" style="">
          <div class="offer-writ">
            <p>Accounting <i class="fa-solid fa-arrow-right"></i></p>
         </div>
         <div class="offer-image offer-image-accounting" style="">
            <div class="offer-image-cover">
              <p>
                We're offering a special opportunity for you to 
                experience our in-house accounting services at an exclusive 50% discount—allowing 
                you to focus on your business while we take care of your financial interests. 
                From managing primary books of account to handling VAT returns and more, 
                our team is committed to delivering comprehensive reports tailored to your needs.
              </p>
              <a href="#proposal" class="form-link">Get Started</a>
              <a href="https://wa.link/7090ir" class="whatsapp-link" target="_blank"><i class="fa-brands fa-whatsapp"></i>Chat With Us</a>
            </div>
         </div>
    </div>
    <div class="offers" style="">
          <div class="offer-writ">
            <p>Audit<i class="fa-solid fa-arrow-right"></i></p>
         </div>
         <div class="offer-image offer-image-accounting" style="">
            <div class="offer-image-cover">
              <p>
              Ensure reliability and compliance with a one-off audit from BAS Group. Our specialized 
              audit services provide peace of mind and a dedicated contact for 
              your business concerns. Act now and benefit from a 50% discount 
              on our expert audit and assurance offerings. If you love the 
              experience, we can discuss structuring a recurring service. 
              Not satisfied? Rest assured with our money-back guarantee clause.
              </p>
              <a href="#proposal" class="form-link">Get Started</a>
              <a href="https://wa.link/7090ir" class="whatsapp-link"  target="_blank"><i class="fa-brands fa-whatsapp"></i>Chat With Us</a>
            </div>
         </div>
    </div>
    <div class="offers" style="">
          <div class="offer-writ">
            <p>Tax Compliance and Advisory<i class="fa-solid fa-arrow-right"></i></p>
         </div>
         <div class="offer-image offer-image-accounting" style="">
            <div class="offer-image-cover">
              <p>
              Navigate the complexities of tax with a one-off collaboration 
              with BAS Group. Our expert tax advisers will work with you to 
              legitimately minimize your tax burden. Enjoy a 50% discount on 
              our key tax services, covering business tax, personal income 
              tax, employment tax (P.A.Y.E), international tax, Value Added 
              Tax (VAT), and tax investigations.
              </p>
              <a href="#proposal" class="form-link">Get Started</a>
              <a href="https://wa.link/7090ir" class="whatsapp-link"  target="_blank"><i class="fa-brands fa-whatsapp"></i>Chat With Us</a>
            </div>
         </div>
    </div>
  </div>
  <div class="proposal" id="proposal">
        <h3 class="text-center">Request for a Proposal</h3>
        <div class="form">
            <form action="" method="post" id="complaint-form">
                <div class="form-divs">
                    <input type="text" name="firstname" id="firstname" required placeholder="First Name:"/>
                    <input type="text" name="lastname" id="lastname" required placeholder="Last Name"/>
                </div>
                <div class="form-divs">
                    <input type="email" name="email" id="email" required placeholder="Email:">
                    <input type="text" name="phone" id="phone" required placeholder="Phone Number:">
                </div>
                <div class="form-divs">
                    <textarea name="message" id="message" cols="30" rows="5" required placeholder="Message:"></textarea>
                </div>
                <div class="checkbox-div">
                    <input type="checkbox" name="privacy-policy" id="privacy-policy" required >
                    <label for="privacy-policy">I agree to the Privacy Policy</label>
                </div>
                <div id="result"></div>
                <div class="form-divs">
                    <button type="submit" id="submit">Send Request <span id="loader"><i class="fa-regular fa-circle fa-fade"></i></span></button>
                </div>
            </form>
        </div>
        <div class="other-services">
          <div class="animated-element">
              <a href="wealth"><h5><strong>BAS Wealth</strong></h5></a>
          </div>
          <div class="animated-element">
              <a href="bas-capital"><h5> <strong>BAS Capital</strong></h5></a>
          </div>
          <div class="animated-element">
              <a href="finance"><h5><strong>BAS Finance</strong></h5></a>
          </div>
          <div class="animated-element">
              <a href="insurance"><h5><strong>BAS Insurance</strong></h5></a>
          </div>
        </div>
  </div>
  <?php include_once "footer.php"?>

