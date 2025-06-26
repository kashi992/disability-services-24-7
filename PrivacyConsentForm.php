<?php
session_start();

if(!isset($_SESSION['em'])) {
    header('Location: login.html');
    exit;
}

?>

<!doctype html>
<html class="no-js" lang="zxx">
<head>
   <meta charset="utf-8">
   <meta htslc-equiv="x-ua-compatible" content="ie=edge">
    <title> Disability Services 24/7</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- favicon -->
      <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
      <link rel="manifest" href="assets/img/favicon/site.webmanifest">

   <!-- CSS here -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/main.css">
      <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

   <div class="dashboardPage">
      <!-- header area start -->
      <header>
         <div class="header-sec header-3">
            <div class="header-exgency bg-white shadow">
               <div class="container-fluid">
                  <div class="row align-items-center">
                     <div class="col-6">
                        <div class="header-logo">
                           <a href="Dashboard.html"><img src="assets/img/mainLogo.png" alt="logo"></a>
                        </div>
                     </div>
                     <div class="col-6 text-end">
                        <div class="main-menu">
                           <ul>
                              <li class="has-dropdown m-0">
                                 <a href="" class="p-0"><img src="./assets/img/blog/postbox-user-1.png" alt=""></a>
                                 <ul class="sub-menu">
                                    <li><a  href="logout.php">Log out</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->

      <!-- offcanvas area start -->
      <div class="offcanvas__sec">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
               <button class="offcanvas__close-btn offcanvas-close-btn">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                     <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                  </svg>
               </button>
            </div>
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo logo">
                     <a href="index.html">
                        <img src="assets/img/mainLogo.png" alt="logo">
                     </a>
                  </div>
               </div>
               <div class="main-menu-mobile"></div>
               <div class="offcanvas__btn">
                  <a href="contact.html" class="prime-btn">Getting Started <i class="fa-regular fa-chevron-right"></i></a>
               </div>
               <div class="side-info-contact">
                  <span>we are here</span>
                  <a target="_blank" href="https://maps.app.goo.gl/CBrKrHB2X2RqvUFN8">78 Long Forest AveHarkness VIC 3337</a>
               </div>
               <div class="side-info-social">
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>
                  
                 
               </div>
            </div>
         </div>
      </div>
      <div class="body_Overlay"></div>
      <!-- offcanvas area end -->

      <main>
         <div class="">
            <div class="dashboadHero">
               <ul class="nav nav-pills" id="pills-tab" role="tablist">
                  <li class="text-end mb-4">
                     <img src="./assets/img/icon/leftChevron.svg" alt="" class="chevIcon leftChev">
                     <img src="./assets/img/icon/rightChevron.svg" alt="" class="chevIcon rightChev">
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" href="./Dashboard.php">Client Registration Form</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" href="./IncidentReportForm.php">Incident Report Form</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" href="./FeedbackComplaintsForm.php">Feedback and Complaints Form</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link active" href="./PrivacyConsentForm.php">Privacy Consent Form</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" href="./StaffAvailabilityForm.php">Staff Availability Form</a>
                  </li>

               </ul>
               <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-form4" role="tabpanel" aria-labelledby="pills-form4-tab" tabindex="0">
                     <h2 class="title my-4 text-center">Privacy Agreement Form</h2>
                     <div class="table-responsive">
                        <table class="table table-bordered">
                           <thead>
                              <tr>
                                 <th>ID</th>
                                 <th>Client Consent</th>
                                 <th>Privacy And Dignity</th>
                                 <th>Authorised</th>
                                 <th>Details</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                 include 'config.php';
                                 $c=1;
                                 $result=mysqli_query($con,"SELECT * FROM `privacyconsentform`");
                                    while($row=mysqli_fetch_assoc($result)){
                              ?>
                              <tr>
                                 <td><?php echo $c++?></td>
                                 <td><?php echo $row['ClientConsent']?></td>
                                 <td><?php echo $row['PrivacyAndDignity']?></td>
                                 <td><?php echo $row['Authorised']?></td>
                                 <td><a href="DashboardPrivacyConsent.php?id=<?php echo $row['id'];?>" class="prime-btn">View Detail</a></td>
                              </tr>
                              <?php
                                    };
                              ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>

   </div>
   <!-- JS here -->
   
   <!-- JS here -->
   <script src="assets/js/jQuerry/jquery.js"></script>
   
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/swiper-bundle.js"></script>
   
   
   
   
   <script src="assets/js/purecounter.js"></script>
   <script src="assets/js/countdown.js"></script>
   <script src="assets/js/purecounter.js"></script>
   <script src="assets/js/countdown.js"></script>
   <script src="assets/js/wow.js"></script>
   
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/main.js"></script>
</body>


</html>