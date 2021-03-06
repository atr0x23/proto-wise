<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Πρώτο</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <!-- <link rel="stylesheet" href="css/timeline.css"> -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>

   <!-- body -->
   <body class="main-layout">

      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader --> 
            

      <!-- Navbar -->
               <div id="myNav" class="overlay">
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <div class="overlay-content">
                  <a href="#" onclick="closeNav()">Αρχική</a>   
                  <a href="#about" onclick="closeNav()">Η Εταιρεία</a>
                  <a href="#service" onclick="closeNav()">Τα Προϊόντα μας</a>
                  <a href="#download" onclick="closeNav()">Εκδηλώσεις</a>
                  <a href="#testimonial" onclick="closeNav()">Επικοινωνία</a>
                  <a href="#mydownload" onclick="closeNav()">Download</a>
                  </div>
               </div>

            <span class="thanos-shadow" id="trompoukis" onclick="openNav()">&#9776; Menu </span>

      <!-- end navbar -->


      <section class="slider_section">
         <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item">
                  <img class="first-slide" src="images/homepageA.jpg" alt="First slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <img class="hide-small" src="img/onslider.png">
                        <p>Παίξε το κουίζ μας και διεύρυνε το πεδίο των εγκυκλοπαιδικών σου γνώσεων διασκεδάζοντας.</p>
                        <a  href="#">Παιξε το Quiz</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="images/homepage3A.jpg" alt="Second slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h2 class="hide-small">Το γάλα που εμπιστεύεστε για ολόκληρη την οικογένεια!</h2><br>
                        <img class="hide-small" src="img/logo.png">
                        <a  class="hide-big" href="#">Παιξε το Quiz</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/homepage4opacity.jpg" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Παίξε & Μάθε</h1>
                        <p>Παίξε στο quiz μας και διεύρυνε το πεδίο των εγκυκλοπαιδικών σου γνώσεων διασκεδάζοντας!</p>
                        <a  href="#">Παιξε το Quiz</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/homepageB.jpg" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Παίξε & Μάθε</h1>
                        <p>Παίξε στο quiz μας και διεύρυνε το πεδίο των εγκυκλοπαιδικών σου γνώσεων διασκεδάζοντας!</p>
                        <a  href="#">Παιξε το Quiz</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item active">
                  <img class="third-slide" src="images/homepageC.jpg" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Παίξε & Μάθε</h1>
                        <p>Παίξε στο quiz μας και διεύρυνε το πεδίο των εγκυκλοπαιδικών σου γνώσεων διασκεδάζοντας!</p>
                        <a  href="#">Παιξε το Quiz</a>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="images/homepageD.jpg" alt="Third slide">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <h1>Παίξε & Μάθε</h1>
                        <p>Παίξε στο quiz μας και διεύρυνε το πεδίο των εγκυκλοπαιδικών σου γνώσεων διασκεδάζοντας!</p>
                        <a  href="#">Παιξε το Quiz</a>
                     </div>
                  </div>
               </div>             
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
         </div>
      </section>

            


      <!-- about -->
       <div id="about" class="about top_layer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Η Εταιρεία μας</h2>
                     <span>Στις αρχές της δεκαετίας του 1960 οι αγελαδοτρόφοι των Πατρών και της ευρύτερης περιοχής πουλούσαν το γάλα τους σε εργοστάσια της εποχής 
                           και από σπίτι σε σπίτι. Για την καλύτερη όμως οργάνωση και στήριξή τους, αποφάσισαν να συνεργαστούν και να ωφεληθούν από τα πλεονεκτήματα 
                           της δημιουργίας συνεταιρισμού. </span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6"><img src="images/thecompany2.png" alt="img"/></div>
               <div class="col-md-6 mytext titlepage"><span>Έτσι, το 1961, 200 αγελαδοτρόφοι του νομού 
                  Αχαΐας δημιούργησαν τον Αγροτικό Συνεταιρισμό Αγελαδοτρόφων Περιφέρειας Πατρών Βιομηχανία γάλακτος <mark>«ΠΡΩΤΟ»</mark> 
                  Συνεταιρισμός περιορισμένης ευθύνης. Ο σκοπός ίδρυσης του λοιπόν, ήταν και συνεχίζει να είναι η στήριξη του εισοδήματος των 
                  κτηνοτρόφων συνεταιριστών καθώς επίσης και η παροχή γαλακτοκομικών προϊόντων υψηλής ποιότητας στους κατοίκους της ευρύτερης περιοχής.
                  Σήμερα λοιπόν, η τότε ενέργεια του Συνεταιρισμού Αγελαδοτρόφων Περιφέρειας Πατρών αποτελεί μια σύγχρονη καθετοποιημένη μονάδα παραγωγής 
                  γάλακτος και γιαουρτιού πού δίνει τη δυνατότητα στους Πατρινούς αλλά και στις γύρω περιοχές να έχουν φρέσκο, τοπικό γάλα καθημερινά 
                  στο σπίτι τους.</span>
               </div>
            </div>
            
            <div class="titlepage" style="margin-top: 100px;">
               <h3>Χρονοδιάγραμμα Δημιουργίας Συνεταιρισμού</h3>
            </div>
            <!-- Start of Timeline -->
            <!-- <div class="row"> -->
               <br><br>
               <!-- <div class="body-timeline"> -->
                  <div class="timeline">
                     <div class="container-timeline left">
                        <div class="content-timeline">
                        <h2 style="color: #007437;">1960</h2>
                        <p>Το ξεκίνημα έγινε με λήψη δανείου 4.000.000 δρχ από την Αγροτική Τράπεζα. Αγοράστηκε έκταση 22 στρεμμάτων στην Εγλυκάδα Πατρών για να 
                           χτιστεί το εργοστάσιο.</p>
                        </div>
                     </div>
                     <div class="container-timeline right">
                        <div class="content-timeline">
                        <h2 style="color: #007437;">1961</h2>
                        <p>Η έναρξη των εργασιών αποτελεί πλέον πραγματικό γεγονός!</p>
                        </div>
                     </div>
                     <div class="container-timeline left">
                        <div class="content-timeline">
                        <h2 style="color: #007437;">1963</h2>
                        <p>Δυο χρόνια μετά το ξεκίνημα των εργασιών έρχεται επιτέλους και η ολοκλήρωσή τους. 
                           Εν συνεχεία, το εργοστάσιο εξοπλίστηκε με τα πλέον σύγχρονα μηχανήματα της εποχής τα οποία ήταν δωρεά της UNISEF, ενώ η υποχρέωσή του
                           ήταν να τροφοδοτεί με προϊόντα τα ιδρύματα, νοσοκομεία και γηροκομία που ανήκαν στον νομό Αχαΐας.</p>
                        </div>
                     </div>
                     <div class="container-timeline right">
                        <div class="content-timeline">
                        <h2 style="color: #007437;">1964</h2>
                        <p>Στις 2 Ιανουαρίου <b>ξεκινά η λειτουργία του εργοστασίου!</b>
                           Παράλληλα βελτιώνονταν και οι συνθήκες υγιεινής στις φάρμες δίνοντας την βάση για παραγωγή προϊόντων υψηλής ποιότητας.</p>
                        </div>
                     </div>
                     <div class="container-timeline left">
                        <div class="content-timeline">
                        <h2 style="color: #007437;">1980</h2>
                        <p>Άλλη μία χρονιά σταθμός στην ιστορία. Εξοφλείται το δάνειο από την ΑΤΕ και ο συνεταιρισμός γίνεται εξ ολοκλήρου ιδιοκτησία των συνεταίρων.
                           Έκτοτε, τα όργανα διοίκησης του συνεταιρισμού είναι η γενική συνέλευση και το διοικητικό συμβούλιο που ορίζονται μετά από εκλογές μεταξύ 
                           των μελών του.</p>
                        </div>
                     </div>
                  </div>
                  <div style="margin-top: 50px;">
                     <div class="content-timeline">
                        <h2 style="color: #007437;">Σήμερα</h2>
                        <p>Από το ξεκίνημα αλλά και όλα τα χρόνια λειτουργίας του εργοστασίου, η αναβάθμιση και ο εκσυγχρονισμός του είναι συνεχής. Νέα μηχανήματα, μέσα μεταφοράς του γάλακτος, επένδυση σε 
                        ανθρώπινο δυναμικό, πιστοποίηση με συστήματα διασφάλισης ποιότητας είναι τα μέσα που κρατούν τον συνεταιρισμό ψηλά και έτοιμο να ανταπεξέλθει στις προκλήσεις της εποχής.
                        Ψηλά στις προτεραιότητές του είναι και ο κοινωνικός του ρόλος. Χορηγίες σε ιδρύματα και σε εκδηλώσεις του δήμου, πραγματοποίηση εκπαιδευτικών ξεναγήσεων σε μαθητές, 
                        δυνατότητα πραγματοποίησης πρακτικής άσκησης φοιτητών είναι δράσεις που ενδυναμώνουν τους δεσμούς του συνεταιρισμού με την τοπική κοινωνία. </p> 
                     </div>
                     <br>
                  </div>
               <!-- </div> -->
            <!-- </div> -->
            <!-- END of Timeline -->

            <div class="titlepage" style="margin-top: 100px;">
               <h3><b>Υλικό από αρχείο</b></h3>
            </div>

            <div class="row">
               <div class="col-md-6">
                  <p>#1. Τελετή Αγυιασμού, @Εγλυκάδα-1961</p><br>
                  <img class="thanos-shadow" src="img/agiasmos2.jpg" class="w3-round w3-image" alt="photo" width="500" height="333">
               </div>
               <div class="col-md-6 mytext titlepage">
                  <p>#2. Τελετή Αγυιασμού, @Εγλυκάδα-1961</p><br>
                  <img class="thanos-shadow" src="img/agiasmos1.jpg" class="w3-round w3-image" alt="photo" width="500" height="333">
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <p>#3. Πρώτο Οικοδόμημα, @Εγλυκάδα-1962</p><br>
                  <img class="thanos-shadow" src="img/factory2.jpg" class="w3-round w3-image" alt="photo" width="500" height="333">
               </div>
               <div class="col-md-6 mytext titlepage">
                  <p>#4. Πρώτο Οικοδόμημα, @Εγλυκάδα-1962</p><br>
                  <img class="thanos-shadow" src="img/plaka.jpg" class="w3-round w3-image" alt="photo" width="500" height="333">
               </div>
            </div>

         </div>
      </div> 
      <!-- end abouts -->


      <!-- products --> 
      <div id="service" class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Προϊόντα </h2>
                     <span>Ύστερα από αρκετά χρόνια λειτουργίας του συνεταιρισμού, εμπειρία ετών και αρκετές προσπάθειες είμαστε στην ευχάριστη θέση <br> 
                        να σας παρουσιάζουμε σήμερα τα προϊόντα μας σε νέα, ανανεωμένη και πλήρως βολική συσκευασία.</span>
                  </div>
               </div>
            </div>
         </div>
         <div class="container margin-r-l">
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="img/dap.jpg" class="fancybox" rel="ligthbox"> <!-- big -->
                        <img  src="img/bluebg.jpg" class="zoom img-fluid "  alt=""> <!-- small -->
                        </a>
                        <!-- <span class="hoverle">
                        <a href="img/dap.jpg" class="fancybox" rel="ligthbox">Πλήρες-1.0L</a>
                        </span>   -->
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="img/dapCenter.jpg" class="fancybox" rel="ligthbox">
                        <img  src="img/blue-smallbg.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <!-- <span class="hoverle">
                        <a href="img/blue-smallbg.jpg" class="fancybox" rel="ligthbox">Πλήρες-0.5L</a>
                        </span> -->
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="img/dae.jpg" class="fancybox" rel="ligthbox">
                        <img  src="img/greenbg.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <!-- <span class="hoverle">
                        <a href="img/greenbg.jpg" class="fancybox" rel="ligthbox">Ελαφρύ-1.0L</a>
                        </span> -->
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="img/dasCenter.jpg" class="fancybox" rel="ligthbox">
                        <img  src="img/chocolinobg.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <!-- <span class="hoverle">
                        <a href="img/chocolinobg.jpg" class="fancybox" rel="ligthbox">Σοκολατούχο</a>
                        </span>  -->
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="img/dap-bottle.jpg" class="fancybox" rel="ligthbox">
                        <img  src="img/bottlebg.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <!-- <span class="hoverle">
                        <a href="img/bottlebg.jpg" class="fancybox" rel="ligthbox">Μπουκάλι-1.0L</a>
                        </span>  -->
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="service-box">
                     <figure>
                        <a href="img/yogurtbg2.jpg" class="fancybox" rel="ligthbox">
                        <img  src="img/yogurtbg.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <!-- <span class="hoverle">
                        <a href="img/yogurtbg.jpg" class="fancybox" rel="ligthbox">Γιαούρτι</a>
                        </span> -->
                     </figure>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="img/daeCenter.jpg" class="fancybox" rel="ligthbox">
                        <img  src="img/green-smallbg2.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <!-- <span class="hoverle">
                        <a href="img/green-smallbg.jpg" class="fancybox" rel="ligthbox">Ελαφρύ-0.5L</a>
                        </span> -->
                     </figure>
                  </div>
               </div>
               <!-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="img/blue.jpg" class="fancybox" rel="ligthbox">
                        <img  src="img/blue.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <span class="hoverle">
                        <a href="img/blue.jpg" class="fancybox" rel="ligthbox">Fashion</a>
                        </span>
                     </figure>
                  </div>
               </div> -->
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 thumb">
                  <div class="service-box">
                     <figure>
                        <a href="img/allbg.jpg" class="fancybox" rel="ligthbox">
                        <img  src="img/allbg.jpg" class="zoom img-fluid "  alt="">
                        </a>
                        <!-- <span class="hoverle">
                        <a href="img/allbg.jpg" class="fancybox" rel="ligthbox">Όλη η γκάμα</a>
                        </span> -->
                     </figure>
                  </div>
               </div> 
         </div>
      </div>
      <!-- END products --> 

      <div class="content-timeline">
         <p class="w3-center"><em>"Ο Αγροτικός Συν/σμός Αγελ/φων Περ. Πατρών Σ.Π.Ε. είναι ενήμερος στο Εθνικό Μητρώο Αγροτικών Συνεταιρισμών 
         και άλλων συλλογικών φορέων με Αρ.Μητρώου 0702048."</em></p></div> 

      <!-- Events -->
      <div id="download" class="download">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Εκδηλώσεις</h2>
                     <span>Μερικές απο τις εκδηλώσεις στις οποίες ο συνεταιρισμός έχει δώσει το παρόν όπως λχ το Πατρινό Καρναβάλι.</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item"> <img class="first-slide" src="images/events-slider1.jpg" alt="First slide"> </div>
                        <div class="carousel-item"> <img class="second-slide" src="images/events-slider2.jpg" alt="Second slide"> </div>
                        <div class="carousel-item"> <img class="third-slide" src="images/events-slider3.jpg" alt="Third slide"> </div>
                        <div class="carousel-item active"> <img class="third-slide" src="images/events-slider4.jpg" alt="Fourth slide"> </div>
                     </div>
                     <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev"> <i class='fa fa-angle-left'></i></a> <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next"> <i class='fa fa-angle-right'></i></a> 
                  </div>
                  <!-- <div class="read-more">
                     <a href="#">download now</a>
                  </div> -->
               </div>
            </div>
         </div>
      </div>
      <!-- end Events -->

      <!-- myDownload -->
 
      <div id="mydownload" class="download">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="kentrarisma">
                     <h3> Οικονομικά στοιχεία </h3>
                     <button type="button" class="proto-button proto-success" data-toggle="collapse" data-target="#demo">Download</button>
                     <div id="demo" class="collapse">
                        <ul style="text-decoration: none; margin-top: 15px;">
                           <li><a href="downloads/2016.PDF">για το έτος 2016</a></li>
                           <li><a href="downloads/2017.PDF">για το έτος 2017</a></li>
                           <li><a href="downloads/2018.PDF">για το έτος 2018</a></li>
                           <li><a href="downloads/2019.PDF">για το έτος 2019</a></li>
                        </ul>
                     </div>
                  </div>   
               </div>
               
               <div class="col-md-6">
                  <div class="kentrarisma">
                     <h3> Πιστοποιήσεις ISO </h3>
                     <button type="button" class="proto-button proto-success" data-toggle="collapse" data-target="#demo2">Download</button>
                     <div id="demo2" class="collapse">
                        <ul style="text-decoration: none; margin-top: 15px;">
                           <li><a href="downloads/9001.pdf">Το πρότυπο ISO 9001</a></li>
                           <li><a href="downloads/22000.pdf">Το πρότυπο ISO 22000</a></li>
                           <li><a href="downloads/14001.pdf">Το πρότυπο ISO 14001</a></li>
                        </ul>
                     </div>
                  </div>   
               </div> 
            </div>   
         </div>            
      </div>

      <!-- end myDownload -->

        <?php 
    
            if(isset($_POST['submit'])){

            $to      =  "atr0x23@outlook.com";
            $subject =  wordwrap($_POST['subject'],70); // use wordwrap() if lines are longer than 70 characters
            $body    =  $_POST['body']; 
            $header  =  "From: " . $_POST['email'];     
            // send email
            mail($to,$subject,$body,$header); 

            $message_sent = "<div class='alert alert-success' role='alert'> Ευχαριστούμε, το αίτημά σας έχει σταλεί! <mark>:)</mark> </div>";
            $something_is_wrong = "";
            }
        ?>


      <!-- Testimonial -->
      <div id="testimonial" class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h3>Επικοινωνία</h3>
                  </div>
               </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div class="contact">
                    <?php echo $message_sent; ?>
                     <h3>Στείλε μας μήνημα</h3>
                     <form role="form" action="" method="post" id="login-form">
                        <div class="row">
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Όνομα" type="text" required name="subject">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Τηλέφωνο" type="tel" name="phone" pattern="[0-9]{10}">
                           </div>
                           <div class="col-sm-12">
                              <input class="contactus" placeholder="Email" type="text" required name="email">
                           </div>
                           <div class="col-sm-12">
                              <textarea name="body" id="body" class="textarea" required placeholder="Γράψε το μήνυμά σου..." type="text"></textarea>
                           </div>
                           <div class="col-sm-12">
                              <button type="submit" name="submit" class="send">Αποστολή</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>

               <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                  <div id="testimonial_slider" class="carousel slide banner-bg" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img class="first-slide" src="images/contact.jpg">
                           <div class="container">
                              <div class="carousel-caption relat">
                                 <h3>το ήξερες ότι...</h3>
                                 <span><i class="fa fa-quote-left"></i> ( Οι αγελάδες )<i class="fa fa-quote-right"></i></span>
                                 <p>όπου και αν βρίσκονται, την ώρα που βόσκουν ευθυγραμμίζουν το σώμα τους στον μαγνητικό άξονα της Γης! 
                                    Δηλαδή είναι στραμμένες είτε προς τον βορρά είτε προς τον νότο.</p>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <img class="second-slide" src="images/contactB.jpg">
                           <div class="container">
                              <div class="carousel-caption relat">
                                 <h3>Το ήξερες ότι...</h3>
                                 <span><i class="fa fa-quote-left"></i> ( οι αγελάδες )<i class="fa fa-quote-right"></i></span>
                                 <p>βγάζουν περισσότερο γάλα όταν ακούνε μουσική και ότι έχουν πανοραμική όραση σχεδόν 360 μοιρών!
                                    Επίσεις, μια μητέρα αγελάδα μπορεί να θηλάζει το μωρό της έως και τρία χρόνια.</p>
                              </div>
                           </div>
                        </div>
                        <!-- <div class="carousel-item">
                           <img class="third-slide" src="images/testimonial-img.png">
                           <div class="container">
                              <div class="carousel-caption relat">
                                 <h3>Luka due</h3>
                                 <span><i class="fa fa-quote-left"></i> ( foundery )<i class="fa fa-quote-right"></i></span>
                                 <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
                                    The point of using Lorem  </p>
                              </div>
                           </div>
                        </div> -->
                     </div>
                     <a class="carousel-control-prev" href="#testimonial_slider" role="button" data-slide="prev"> <i class='fa fa-angle-right'></i></a> <a class="carousel-control-next" href="#testimonial_slider" role="button" data-slide="next"> <i class='fa fa-angle-left'></i></a> 
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end Testimonial --> 


      <!-- google map -->

      <div style="background-color: white;">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h3>Βρείτε μας στον χάρτη</h3>
                  </div>

                  <div class="hide-small"><iframe src="https://google.gr/maps/d/embed?mid=14IPeDgI8J-UG1RNOXXa2LTdup9sdl9UZ" width="100%" height="560"></iframe></div>
                  <div class="hide-big"><iframe src="https://google.gr/maps/d/embed?mid=14IPeDgI8J-UG1RNOXXa2LTdup9sdl9UZ" width="100%" height="295"></iframe></div> 
               </div>
            </div>
         </div>
      </div>         

      <!-- end google map -->

      <!--footer-->
      <footer class="w3-center w3-padding-64" id="grad1">
         <a href="#" class="send"><i class="fa fa-arrow-up"></i>Αρχική</a>
         <div class="w3-section">
           <p><b>E-mail:</b> <em>info@proto.com.gr, sales@proto.com.gr</em></p>
           <p><b>Phone:</b> <em> +30 (2610) 641 145, 641 144, 641 773</em></p>
           <p><b>Fax:</b> <em>+30 (2610) 642 336</em></p>
         </div>
         <div class="w3-xxlarge w3-section">
         
            <a href="https://www.facebook.com"><i class="fa fa-facebook w3-text-cbcyan2"></i></a>
            <a href="https://www.instagram.com"><i class="fa fa-instagram w3-text-cbcyan2"></i></a>
            <a href="https://twitter.com"><i class="fa fa-twitter w3-text-cbcyan2"></i></a>
            <a href="https://www.linkedin.com"><i class="fa fa-linkedin w3-text-cbcyan2"></i></a>
         </div>
         <p>&#169; Powered by <a href="#home" title="Magnisalis" target="_blank" class="w3-text-cbcyan2">TypoPress &#174;</a></p>
       </footer>
      <!-- footer END -->

      <!-- Javascript files--> 
      <script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });

         /*nav-bar*/
         function openNav() {
         document.getElementById("myNav").style.width = "100%";
         }

         function closeNav() {
         document.getElementById("myNav").style.width = "0%";
         }
      </script> 
   </body>
</html>