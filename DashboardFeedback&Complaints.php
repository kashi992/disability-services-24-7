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
                                    <li><a href="">Log out</a></li>
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
                     <a class="nav-link active" href="./FeedbackComplaintsForm.php">Feedback and Complaints Form</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" href="./PrivacyConsentForm.php">Privacy Consent Form</a>
                  </li>
                  <li class="nav-item" role="presentation">
                     <a class="nav-link" href="./StaffAvailabilityForm.php">Staff Availability Form</a>
                  </li>

               </ul>
               <div class="tab-content">
                  <h2 class="title my-4 text-center">Client's Complaints and Feedback Form Detail</h2>
                  <?php
                     include 'config.php';

                     // Check if 'clientid' is set in the URL and is not empty
                     if(isset($_GET['id']) && !empty($_GET['id'])) {
                         // Retrieve 'clientid' from URL
                         $id = $_GET['id']; 
                         $query = "SELECT * FROM `feedbackandcomplaintsform` WHERE `id` = '$id'";
                        $result = mysqli_query($con, $query);
                        if($result && mysqli_num_rows($result) > 0) {
                           $row = mysqli_fetch_assoc($result); } 
                  } else {
                       header("Location: Dashboard.php");
                       exit(); 
                   }
                  
                  ?>
                  <div class="table-responsive">
                     <table class="table table-bordered">
                        <thead>
                           <tr>
                              <th>Attribute</th>
                              <th>Value</th>
                           </tr>
                        </thead>
                        <tbody>
                        <tr>
                        <tr>
                           <td>1. provide details: Today’s date</td>
                           <td><?php echo $row['TodaysDate']; ?></td>
                        </tr>
                        <tr>
                           <td>First Name</td>
                           <td><?php echo $row['FirstName']; ?></td>
                        </tr>
                        <tr>
                           <td>Second Name</td>
                           <td><?php echo $row['SecondName']; ?></td>
                        </tr>
                        <tr>
                           <td>Telephone</td>
                           <td><?php echo $row['Telephone']; ?></td>
                        </tr>
                        <tr>
                           <td>Email</td>
                           <td><?php echo $row['Email']; ?></td>
                        </tr>
                        <tr>
                           <td>I am a</td>
                           <td><?php echo $row['IAmA']; ?></td>
                        </tr>
                        <tr>
                           <td>2. complaint on behalf of person</td>
                           <td><?php echo $row['ComplaintOnBehalfOfPerson']; ?></td>
                        </tr>
                        <tr>
                           <td>3. Interpreter</td>
                           <td><?php echo $row['Interpreter']; ?></td>
                        </tr>
                        <tr>
                           <td>Help details</td>
                           <td><?php echo $row['HelpDetails']; ?></td>
                        </tr>
                        <tr>
                           <td>4. complaint details</td>
                           <td><?php echo $row['ComplaintDetails']; ?></td>
                        </tr>
                        <tr>
                           <td>5. raising a concern</td>
                           <td><?php echo $row['RaisingAConcern']; ?></td>
                        </tr>
                        <tr>
                           <td>6. Agreement</td>
                           <td><?php echo $row['Agreement']; ?></td>
                        </tr>
                        <tr>
                           <td>10. Internal Use Complaints Register</td>
                           <td><?php echo $row['InternalUseComplaintsRegister']; ?></td>
                        </tr>
                        <tr>
                           <td>Person responsible</td>
                           <td><?php echo $row['PersonResponsible']; ?></td>
                        </tr>
                        <tr>
                           <td>Reference Number</td>
                           <td><?php echo $row['ReferenceNumber']; ?></td>
                        </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>


      </main>


   </div>
   <!-- JS here -->
   <script src="assets/js/jQuerry/jquery.js"></script>>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/main.js"></script>
</body>



</html>