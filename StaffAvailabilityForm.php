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
    <title> Care28</title>
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
                  <p>9 Emmetts Mews, Deer Park, VIC 3023</p>
               </div>
               <div class="side-info-social">
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                  <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
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
                     <a class="nav-link" href="./PrivacyConsentForm.php">Privacy Consent Form</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link active" href="./StaffAvailabilityForm.php">Staff Availability Form</a>
                  </li>

               </ul>
               <div class="tab-content" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-form5" role="tabpanel" aria-labelledby="pills-form5-tab"
                     tabindex="0">
                     <h2 class="title my-4 text-center">Employee Availability Form</h2>
                     <div class="table-responsive">
                        <table class="table table-bordered">
                           <thead>
                              <tr>
                                 <th>ID</th>
                                 <th>First Name</th>
                                 <th>MONDAY</th>
                                 <th>TUESDAY</th>
                                 <th>Details</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                 include 'config.php';
                                 $c=1;
                                 $result=mysqli_query($con,"SELECT * FROM `staffavailabilityform`");
                                    while($row=mysqli_fetch_assoc($result)){
                              ?>
                              <tr>
                                 <td><?php echo $c++?></td>
                                 <td><?php echo $row['FirstName']?></td>
                                 <td><?php echo $row['MONDAY']?></td>
                                 <td><?php echo $row['TUESDAY']?></td>
                                 <td><a href="DashboardStaffAvailability.php?id=<?php echo $row['id'];?>" class="prime-btn">View Detail</a></td>
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