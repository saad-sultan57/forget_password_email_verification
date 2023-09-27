<?php
include_once "connection/config.php";
session_start();
if(!isset($_SESSION['username'])){
    header("Location: https://yellowsols.com/saad/rf/login.php");
}
?>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="bonira">
  <meta name="keywords" content="bonira">
  <meta name="author" content="Muhammad Bilal">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>bonira</title>
  <link rel="icon" type="text/css" href="assets/images/favicon.png">
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>
<body data-bs-spy="scroll" data-bs-target="#mynavbarg">
  <div class="container-fluid topbar" id="home">
    <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="top-left">
        <!-- Info List -->
        <ul class="list-style-one">
          <li><i class="fa-regular fa-envelope"></i><a href="mailto:">info@bonira.com</a></li>
          <li><i class="fa fa-phone-volume"></i> <a href="tel:+92(8800)87890">+92 (8800) 87890</a></li>
        </ul>
      </div>
      </div>
      <div class="col-md-4 ">
        <div class="top-right">
        <ul class="social-icon-one">
          <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
          <li><a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
          <li><a href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
        </ul>
      </div>
      </div>
    </div>
    </div>
  </div>
<div class="container-fluid banner-section bg_area px-0">
   <nav class="navbar navbar-expand-xl   navbar-dark" id="myNavbar" >
  <div class="container-fluid ps-0 pe-5">
    <a class="navbar-brand" href="#"><img src="assets/images/logo.png" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item ">
          <a class="nav-link " href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#products">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>

      </ul>
    </div>
    <i class="fa fa-bars" class="mybars" data-bs-toggle="offcanvas" data-bs-target="#demo"></i>
  </div>
</nav>
  <div class="bg-image">
  </div>
  <div class="container">
    <div class="row content-row">
      <div class="col-12 col-md-12 col-lg-8 col-1">
        <h1 class="text-white">Hy! <span class="text-1"><?php echo $_SESSION['username'];?></span> </h1>
        <div class="btn-cover">
          <a href="logout.php" class="btn-theme">
            <span class="btn-title">Logout</span></a>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-4 col-2">
        <img src="assets/images/truck.png" class=" truck">
      </div>
    </div>
  </div>
</div>
<div class="container-fluid features">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3><span class="sub-title">Why Choose Us</span></h3>
        <h2 class="mb-5 title">Mai rapid, sigur și de încredere</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-4 col-lg col-item">
         <a class="features-item">
          <div class="image-cover icon">
          <img src="assets/images/on-time.png">
        </div>
          <h4 class="features-title">Plata la termen</h4>
        </a>
      </div>
      <div class="col-md-4 col-lg col-item">
         <a class="features-item">
          <div class="image-cover icon">
          <img src="assets/images/same-day.png">
        </div>
          <h4 class="features-title">Livrare promptă</h4>
        </a>
      </div>
      <div class="col-md-4 col-lg col-item">
         <a class="features-item">
          <div class="image-cover icon">
          <img src="assets/images/new-product.png">
        </div>
          <h4 class="features-title">Gama variată de produse</h4>
        </a>
      </div>
      <div class="col-md-4 col-lg  col-item">
         <a class="features-item">
          <div class="image-cover icon">
          <img src="assets/images/product.png">
        </div>
          <h4 class="features-title">Produse de calitate</h4>
        </a>
      </div>
      <div class="col-md-4 col-lg col-item">
        <a class="features-item">
          <div class="image-cover icon">
          <img src="assets/images/support.png">
        </div>
          <h4 class="features-title">Servicii personalizate</h4>
        </a>
      </div>
    </div>
  </div>
  </div>
<div class="container-fluid section2 section-padding" id="about">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <div class="about-right">
          <img src="assets/images/about3.jpg" class="w-100">
        </div>
      </div>
      <div class="col-md-7">
        <div class="about-left">
          <h3><span class="sub-title">About Company</span></h3>
          <h2 class="title">Bonira Trading Romania!</h2>
          <p>Suntem o companie specializată în importul și distribuția en-gros a produselor alimentare și non-alimentare, oferind soluții complete pentru partenerii noștri de afaceri. Cu o vastă experiență în industrie, ne-am consolidat poziția ca un importator de încredere și furnizor de produse de calitate la nivelul pieței din România.</p>
          <p>La Bonira Trading Romania, suntem dedicați să satisfacem nevoile partenerilor noștri de afaceri prin oferirea unei game variate și de înaltă calitate de produse en-gros. Colaborăm cu furnizori de top,din străinătate, pentru a aduce în România produse diversificate și competitive.</p>
          <p>Avem o echipă experimentată și specializată în domeniul distribuției en-gros. Ne străduim să identificăm cele mai bune produse pentru clienții noștri, asigurându-ne că acestea îndeplinesc cele mai înalte standarde de calitate și cerințele specifice ale industriei.</p>
        </div>
      </div>
      <div class="col-md-12">
           <p>Datorită relațiilor noastre de încredere cu furnizorii, putem oferi partenerilor noștri o gamă extinsă de produse alimentare și non-alimentare, adaptată nevoilor și cerințelor specifice ale afacerii lor. Indiferent dacă ești un lanț de magazine, un distribuitor sau o companie de catering, suntem aici să îți oferim produsele necesare pentru a-ți dezvolta și îmbunătăți afacerea.</p>
          <p>Ne asigurăm că procesul de distribuție se desfășoară cu profesionalism și eficiență. Echipa noastră se ocupă de toate aspectele logistice pentru a asigura o livrare promptă și fiabilă a produselor. Înțelegem importanța timpului și satisfacția clienților noștri, motiv pentru care punem un accent deosebit pe servicii de înaltă calitate.</p>
          <p>La Bonira Trading Romania, ne mândrim cu relațiile solide pe care le-am construit cu partenerii noștri de afaceri, bazate pe încredere și succes reciproc. Ne angajăm să fim partenerul tău de încredere în ceea ce privește aprovizionarea cu produse de calitate, oferindu-ți soluții complete și sprijin pe tot parcursul colaborării.</p>
          <p>Echipa noastră profesionistă este mereu disponibilă pentru a răspunde întrebărilor tale și a oferi asistență specializată în procesul de comandă și distribuție en-gros.</p>
          <p>Te invităm să explorezi gama noastră diversificată de produse și să ne contactezi pentru orice informație suplimentară. Suntem aici să construim o relație solidă și de succes, contribuind la dezvoltarea afacerii tale.</p>
          <p>Mulțumim că ai ales Bonira Trading Romania!</p>
      </div>
    </div>
  </div>
  </div>
  <div class="container-fluid section-padding bg-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3><span class="sub-title">Products and services</span></h3>
          <h2 class="title">Produse și servicii</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p>Gama noastră variată de produse și servicii este concepută pentru a satisface nevoile diverse ale partenerilor noștri de afaceri. La Bonira Trading Romania, suntem dedicați să oferim soluții complete și produse de calitate, iar colaborarea cu noi vine cu o serie de avantaje distincte.</p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-12">
        <h3 class="mb-5 text-1">Avantajele de a fi partenerul nostru:</h3>
        </div>
        <div class="col-md-6 col-lg-4 mb-5">
          <div class="product-item">
            <div class="image-cover">
            <img src="assets/images/on-time.png">
          </div>
            <h3>Plata la termen</h3>
            <p>Înțelegem importanța fluxului de numerar pentru afacerea ta. De aceea, oferim opțiunea de plată la termen, cu un interval de 30 de zile. Astfel, poți beneficia de flexibilitate financiară și poți gestiona eficient bugetul companiei tale.
            </p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5">
          <div class="product-item">
            <div class="image-cover">
            <img src="assets/images/same-day.png">
          </div>
          <h3>Livrare promptă</h3>
           <p>Înțelegem cât de importantă este promptitudinea în 
aprovizionare. Ne străduim să asigurăm o livrare rapidă și eficientă, astfel încât comenzile tale să fie livrate în termen de 24 de ore de la lansarea acestora. Ai încredere că produsele vor ajunge în timp util și în stare excelentă.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5">
          <div class="product-item">
            <div class="image-cover">
            <img src="assets/images/new-product.png">
          </div>
          <h3>Gama variată de produse</h3>
            Colaborarea cu noi îți oferă acces la o gamă diversificată de produse, de la alimente proaspete și conservate până la produse de curățenie și articole de igienă personală. Indiferent de nevoile afacerii tale, avem soluții pentru a le satisface.
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5">
          <div class="product-item">
            <div class="image-cover">
            <img src="assets/images/product.png">
          </div>
          <h3>Produse de calitate</h3>
            <p>Ne angajăm să oferim produse de cea mai înaltă calitate. Colaborăm cu furnizori de încredere și branduri de top, astfel încât să poți avea încredere în autenticitatea și calitatea produselor noastre.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-5">
          <div class="product-item">
            <div class="image-cover">
            <img src="assets/images/support.png">
          </div>
          <h3>Servicii personalizate</h3>
            <p>Echipa noastră dedicată este aici pentru a răspunde nevoilor și cerințelor specifice ale afacerii tale. Oferim servicii personalizate, inclusiv consiliere în alegerea produselor potrivite, gestionarea comenzilor și asistență logistică. Ne preocupăm de succesul afacerii tale și suntem aici să te sprijinim pe tot parcursul colaborării noastre.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid section-padding bg-2 text-white special-note">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Suntem mândri să construim relații solide și de lungă durată cu partenerii noștri de afaceri. Indiferent de dimensiunea și domeniul de activitate al afacerii tale, ne dorim să fim partenerul tău de încredere, oferindu-ți produse de calitate și servicii impecabile.</p>
          <p class="mb-0">Descoperă gama noastră de produse și servicii și contactează-ne pentru a discuta cum putem răspunde nevoilor tale specifice. Suntem aici să construim o colaborare solidă și de succes!"</p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid contact-section" id="contact">
    <div class="container">
      <div class="row py-5">
        <div class="col-md-5">
          <p>Get Information</p>
          <h3>Contact Information</h3>
          <div class="row py-5">
            <div class="col-md-12 mb-4 left1">
              <div class="row ">
                <div class="col-sm-2 col-md-3 icon">
                  <div class="iconbox">
                    
                    <i class="fa-solid fa-location-dot"></i>
                  </div>
                </div>
                <div class="col-sm-10 col-md-9 address">
                  <h4>601 Turnersburg Hwy. Statesville </h4>
                </div>
              </div>
            </div>
            <div class="col-md-12 mb-4 left1">
              <div class="row">
                <div class="col-sm-2 col-md-3  icon">
                  <div class="iconbox">
                    <i class="fa-solid fa-phone"></i>
                  </div>
                </div>
                <div class="col-sm-10 col-md-9 address">
                  <a href="tel:+92(8800)87890"><h4>+92 (8800) 87890</h4></a>
                  
                </div>
              </div>
            </div>
            <div class="col-md-12 mb-4 left1">
              <div class="row">
                <div class="col-sm-2 col-md-3 icon">
                  <div class="iconbox">
                    <i class="fa-regular fa-envelope"></i>
                  </div>
                </div>
                <div class="col-sm-10 col-md-9 address">
                  <a href="mailto:" ><h4>info@tibyancenter.org</h4></a>
                </div>
              </div>
            </div>
            <div class="col-md-12 mb-4 left1">
              <div class="row">
                <div class="col-sm-2 col-md-3 icon">
                  <div class="iconbox">
                    <i class="fa-solid fa-shop"></i>
                  </div>
                </div>
                <div class="col-sm-10 col-md-9 address">
                  <h4>Mon - Sat: 8 am - 5 pm</h4>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <div class="col-md-7 right1">
          
          <div class="subbox p-5">
            <form>
              <div class="row">
                <div class="col">
                  <label for="">Name</label>
                  <input type="text" class="form-control" placeholder="Enter Name" name="name">
                </div>
                <div class="col">
                  <label for="">Email</label>
                  <input type="email" class="form-control" placeholder="Enter Email" name="email">
                </div>
              </div>
              <div class="mb-3 mt-3">
                <label for="phone" class="form-label">Phone:</label>
                <input type="number" class="form-control" id="phone" placeholder="phone" name="phone">
              </div>
              <label for="comment">Comments:</label>
              <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
              <div class="btn-cover  mt-4">
                <a href="" type="Submit" class="btn-theme  form_btn">
                  <span class="btn-title">Submit Request</span></a>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>


  <!-- footer start -->

<div class="container-fluid footer" >
  <!-- footer_step1 -->
  <div class="container-fluid borb " >
  
    <div class="container">
      <div class="row" >
        <div class="col-md-6 col-lg-4 x1">
          <div class="row ">
            <div class="col-12 col-sm-3 col-md-4 ">
              <div class="sub">
                <div class="iconbox">
                <i class="fa fa-address-book" aria-hidden="true"></i>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-9 col-md-8 text-center text-sm-start first_row">
              <h4>Address</h4>
              <p>601 Turnersburg Hwy. Statesville </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 x1">
          <div class="row ">
            <div class="col-12 col-sm-3 col-md-4 ">
              <div class="sub">
                <div class="iconbox ic">
              <i class="fa fa-message" aria-hidden="true"></i>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-9 col-md-8 text-center text-sm-start first_row">
              <h4>Contact</h4>
              <a href="mailto:" ><p class="mb-0">info@tibyancenter.org</p></a>
              <a href="tel:+92(8800)87890"><p>+92 (8800) 87890</p></a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 x1">
          <div class="row ">
            <div class="col-12 col-sm-3 col-md-4 ">
              <div class="sub">
                <div class="iconbox ic">
               <i class="fa fa-clock" aria-hidden="true"></i>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-9 col-md-8 text-center text-sm-start first_row">
              <h4>Timing</h4>
              <p>Mon - Sat: 8 am - 5 pm</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  </div>
  <!-- footer_step2 -->
  <div class="container foo2" style="padding: 40px 20px;">
    <di class="row">
    <div class="col-md-6 col-lg-6 mb-3">
      <div class="sub">
        <div class="footer1">
          <img src="assets/images/logo.png" class="mb-4" style="width: 215px;">
          <p>We work with a passion of taking challenges and creating new ones in advertising sector.</p>
          <button type="button" class="btn btn-primary mt-4">ABOUT</button>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 col-lg-6 mb-4">
      <div class="sub" style="display: flex;
      justify-content: center;">
        <div class="mylinks">
          <h3>Links</h3>
          <ul class="mt-4">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#contact">Contact</a></li>
            
          </ul>
        </div>
      </div>
    </div>
    
    
  </div>
  </div>



<div class="container-fluid footer_last" >
  <div class="container">
    <div class="row">
      <div class="col-12  col-md-6 f1 "><span>© Copyright 2022 by <a href="#home">Company.com</a></span></div>
      <div class="col-12  col-md-6 f2">
        <div class="icons ">
          <a href="" target="_blank"><i class="fa fa-facebook" ></i></a>
          <a href="" target="_blank"> <i class="fa fa-instagram"></i></a>
          <a href="" target="_blank"><i class="fa fa-twitter"></i></a>
          
         
        </div>
      </div>
    </div>
  </div>
</div>




  <!-- Offcanvas Sidebar -->
  <div class="offcanvas offcanvas-end" id="demo">
    <div class="offcanvas-header">
      <img src="assets/images/logo.png" class="mt-2" width="160px">
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <ul>
        <li><a href="#gome" class="active">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#products">Product</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <div class="row icons-row">
        <div class="icon1">
          <div class="col-md-3 mb-3 me-3">
            <i class="fa fa-phone"></i>
          </div>
          <div class="col-md-9 mb-3 ">
            <p class="mb-0">CALL NOW</p>
            <a href="tel:+92(8800)87890" ><h6>+92 (8800) 87890</h6></a>
          </div>
        </div>

        <div class="icon1">
          <div class="col-md-3 mb-3 me-3">
            <i class="fa fa-message"></i>
          </div>
          <div class="col-md-9 mb-3">
            <p class="mb-0">Send Mail</p>
            <a href="mailto:" ><h6>info@tibyancenter.org</h6></a>
          </div>
        </div>
        <div class="icon1">
          <div class="col-md-3 mb-3 me-3">
            <i class="fa-solid fa-address-book" style="font-size: 34px;
            line-height: 50px;
            color: #d10810;"></i>
          </div>
          <div class="col-md-9 mb-3">
            <p class="mb-0">Address</p>
            <h6>601 Turnersburg Hwy. Statesville</h6>
          </div>
        </div>

        <div class="icon1">
          <div class="col-md-3 mb-3 me-3">
            <i class="fa fa-clock"></i>
          </div>
          <div class="col-md-9 mb-3">
            <p class="mb-0">Timing</p>
            <h6>Mon - Sat: 8 am - 5 pm</h6>
          </div>
        </div>

      </div>

      <div class="row twoiconsrow">
        
        <div class="col-4 c2">
          <a href="" target="_blank"><i class="fa fa-facebook"></i></a>
        </div>
        <div class="col-4 c2">
          <a href="" target="_blank"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="col-4 c1">
          <a href="" target="_blank"><i class="fa fa-twitter"></i></a>

        </div>
      </div>



    </div>
  </div>
  <!-- Offcanvas Sidebar -->

  <!-----------Scroll to Tap---------->
<div class="scroll_to_top" id="scrollToTopBtn">
  <span><i class="fa fa-angle-up"></i></span>
</div>

<!-----------Scroll to Tap---------->


<!-------------------Custom Header-------->

<div class="custom_header" id="myheader" id="mynavbarg">
  <div class="cus_logo">
    <img src="assets/images/logo.png" alt="" srcset="">
  </div>
<div class="links">
  <ul>
     <li><a  href="#home">Home</a></li>
     <li><a  href="#about">About</a></li>
     <li><a  href="#products">Products</a></li>
     <li><a  href="#contact">Contact</a></li>
  </ul>
 
 </div>
 <i class="fa fa-bars" class="mybars" data-bs-toggle="offcanvas" data-bs-target="#demo"></i>

</div>


<script src="https://kit.fontawesome.com/794c9e9389.js" crossorigin="anonymous"></script>


<script src="assets/js/script.js"></script>
</body>
</html>