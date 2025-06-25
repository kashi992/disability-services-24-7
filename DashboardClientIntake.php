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
                     <a class="nav-link active" href="./Dashboard.php">Client Registration Form</a>
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
                     <a class="nav-link" href="./StaffAvailabilityForm.php">Staff Availability Form</a>
                  </li>

               </ul>
               <div class="tab-content">

                  <h2 class="title my-4 text-center">Client Registration Form Detail</h2>
                  <?php
                     include 'config.php';

                     // Check if 'clientid' is set in the URL and is not empty
                     if(isset($_GET['clientid']) && !empty($_GET['clientid'])) {
                         $clientid = $_GET['clientid']; 
                         $query = "SELECT * FROM `clientintakeform` WHERE `ClientID` = '$clientid'";
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
                              <td>Client First Name</td>
                              <td><?php echo $row['FirstName']; ?></td>
                           </tr>
                           <tr>
                              <td>Client Second Name</td>
                              <td><?php echo $row['SecondName']; ?></td>
                           </tr>
                           <tr>
                              <td>Client DOB</td>
                              <td><?php echo $row['DOB']; ?></td>
                           </tr>
                           <tr>
                              <td>NDIS Number</td>
                              <td><?php echo $row['NDISNumber']; ?></td>
                           </tr>
                           <tr>
                              <td>NDIS Funding</td>
                              <td><?php echo $row['NDISFunding']; ?></td>
                           </tr>
                           <tr>
                              <td>Plan Manager</td>
                              <td><?php echo $row['PlanManager']; ?></td>
                           </tr>
                           <tr>
                              <td>Client Address</td>
                              <td><?php echo $row['Address']; ?></td>
                           </tr>
                           <tr>
                              <td>Client Contact</td>
                              <td><?php echo $row['Contact']; ?></td>
                           </tr>
                           <tr>
                              <td>Client Email</td>
                              <td><?php echo $row['Email']; ?></td>
                           </tr>
                           <tr>
                              <td>Contact Method</td>
                              <td><?php echo $row['ContactMethod']; ?></td>
                           </tr>
                           <tr>
                              <td>Representative First Name</td>
                              <td><?php echo $row['RepresentativeFirstName']; ?></td>
                           </tr>
                           <tr>
                              <td>Representative Second Name</td>
                              <td><?php echo $row['RepresentativeSecondName']; ?></td>
                           </tr>
                           <tr>
                              <td>Relationship TO Client</td>
                              <td><?php echo $row['RelationshipToClient']; ?></td>
                           </tr>
                           <tr>
                              <td>Representative Address</td>
                              <td><?php echo $row['RepresentativeAddress']; ?></td>
                           </tr>
                           <tr>
                              <td>Representative Phone</td>
                              <td><?php echo $row['RepresentativePhone']; ?></td>
                           </tr>
                           <tr>
                              <td>Representative Email</td>
                              <td><?php echo $row['RepresentativeEmail']; ?></td>
                           </tr>
                           <tr>
                              <td>Representative Contact Method</td>
                              <td><?php echo $row['RepresentativeContactMethod']; ?></td>
                           </tr>
                           <tr>
                              <td>Living Situation</td>
                              <td><?php echo $row['LivingSituation']; ?></td>
                           </tr>
                           <tr>
                              <td>Aboriginal or Torres</td>
                              <td><?php echo $row['AboriginalOrTorres']; ?></td>
                           </tr>
                           <tr>
                              <td>Support Plan</td>
                              <td><?php echo $row['SupportPlan']; ?></td>
                           </tr>
                           <tr>
                              <td>Primary Diagnosis</td>
                              <td><?php echo $row['PrimaryDiagnosis']; ?></td>
                           </tr>
                           <tr>
                              <td>Secondary Diagnosis</td>
                              <td><?php echo $row['SecondaryDiagnosis']; ?></td>
                           </tr>
                           <tr>
                              <td>Allergies</td>
                              <td><?php echo $row['Allergies']; ?></td>
                           </tr>
                           <tr>
                              <td>Medical Diagnoses</td>
                              <td><?php echo $row['MedicalDiagnoses']; ?></td>
                           </tr>
                           <tr>
                              <td>Client's Doctor</td>
                              <td><?php echo $row['ClientDoctor']; ?></td>
                           </tr>
                           <tr>
                              <td>Legal Issues</td>
                              <td><?php echo $row['LegalIssues']; ?></td>
                           </tr>
                           <tr>
                              <td>Communication</td>
                              <td><?php echo $row['Communication']; ?></td>
                           </tr>
                           <tr>
                              <td>Culturally or Linguistically</td>
                              <td><?php echo $row['CulturallyOrLinguistically']; ?></td>
                           </tr>
                           <tr>
                              <td>Culture & Diversity</td>
                              <td><?php echo $row['CulturallyOrDiverse']; ?></td>
                           </tr>
                           <tr>
                              <td>Languages Spoken</td>
                              <td><?php echo $row['LanguagesSpoken']; ?></td>
                           </tr>
                           <tr>
                              <td>Interpreter</td>
                              <td><?php echo $row['Interpreter']; ?></td>
                           </tr>
                           <tr>
                              <td>Consent</td>
                              <td><?php echo $row['Consent']; ?></td>
                           </tr>
                           <tr>
                              <td>Dietary</td>
                              <td><?php echo $row['Dietary']; ?></td>
                           </tr>
                           <tr>
                              <td>Vegetarian</td>
                              <td><?php echo $row['vegetarian']; ?></td>
                           </tr>
                           <tr>
                              <td>Vegan</td>
                              <td><?php echo $row['vegan']; ?></td>
                           </tr>
                           <tr>
                              <td>Dietary Allergies</td>
                              <td><?php echo $row['dietaryAllergies']; ?></td>
                           </tr>
                           <tr>
                              <td>Sensory/Intolerances</td>
                              <td><?php echo $row['SensoryIntolerances']; ?></td>
                           </tr>
                           <tr>
                              <td>Favourite Food</td>
                              <td><?php echo $row['FavouriteFood']; ?></td>
                           </tr>
                           <tr>
                              <td>Mealtimes</td>
                              <td><?php echo $row['MealTimes']; ?></td>
                           </tr>
                           <tr>
                              <td>Experience</td>
                              <td><?php echo $row['Experience']; ?></td>
                           </tr>
                           <tr>
                              <td>Mental Support Services</td>
                              <td><?php echo $row['MentalSupportServices']; ?></td>
                           </tr>
                           <tr>
                              <td>Triggers</td>
                              <td><?php echo $row['Triggers']; ?></td>
                           </tr>
                           <tr>
                              <td>Triggers Management Plans</td>
                              <td><?php echo $row['TriggersManagementPlans']; ?></td>
                           </tr>
                           <tr>
                              <td>Relevant Management Plans</td>
                              <td><?php echo $row['RelevantManagementPlans']; ?></td>
                           </tr>
                           <tr>
                              <td>Physical Health</td>
                              <td><?php echo $row['PhysicalHealth']; ?></td>
                           </tr>
                           <tr>
                              <td>Physical Allergies</td>
                              <td><?php echo $row['PhysicalAllergies']; ?></td>
                           </tr>
                           <tr>
                              <td>Following Medications</td>
                              <td><?php echo $row['FollowingMedications']; ?></td>
                           </tr>
                           <tr>
                              <td>List of Medications</td>
                              <td><?php echo $row['listofMedication']; ?></td>
                           </tr>
                           <tr>
                              <td>Physical Support Services</td>
                              <td><?php echo $row['PhysicalSupportServices']; ?></td>
                           </tr>
                           <tr>
                              <td>Traffic Awareness</td>
                              <td><?php echo $row['TrafficAwareness']; ?></td>
                           </tr>
                           <tr>
                              <td>Staying with Group</td>
                              <td><?php echo $row['StayingWithGroup']; ?></td>
                           </tr>
                           <tr>
                              <td>Personal Space</td>
                              <td><?php echo $row['PersonalSpace']; ?></td>
                           </tr>
                           <tr>
                              <td>Hands to Myself</td>
                              <td><?php echo $row['HandsToMyself']; ?></td>
                           </tr>
                           <tr>
                              <td>Travelling Safely</td>
                              <td><?php echo $row['TravellingSafely']; ?></td>
                           </tr>
                           <tr>
                              <td>Following Instructions</td>
                              <td><?php echo $row['FollowingInstructions']; ?></td>
                           </tr>
                           <tr>
                              <td>Swimming</td>
                              <td><?php echo $row['Swimming']; ?></td>
                           </tr>
                           <tr>
                              <td>Spending Money</td>
                              <td><?php echo $row['SpendingMoney']; ?></td>
                           </tr>
                           <tr>
                              <td>Sleeping Routine</td>
                              <td><?php echo $row['SleepingRoutine']; ?></td>
                           </tr>
                           <tr>
                              <td>Swimming (copy)</td>
                              <td><?php echo $row['SwimmingCopy']; ?></td>
                           </tr>
                           <tr>
                              <td>Swimming (copy) (copy)</td>
                              <td><?php echo $row['SwimmingCopyC']; ?></td>
                           </tr>
                           <tr>
                              <td>Practical Support Services</td>
                              <td><?php echo $row['PracticalSupportServices']; ?></td>
                           </tr>
                           <tr>
                              <td>Relevant Behaviour Plans</td>
                              <td><?php echo $row['RelevantBehaviourPlans']; ?></td>
                           </tr>
                           <tr>
                              <td>Strengths</td>
                              <td><?php echo $row['Strengths']; ?></td>
                           </tr>
                           <tr>
                              <td>Likes</td>
                              <td><?php echo $row['Likes']; ?></td>
                           </tr>
                           <tr>
                              <td>Don’t Like</td>
                              <td><?php echo $row['Dislikes']; ?></td>
                           </tr>
                           <tr>
                              <td>When I Am Happy</td>
                              <td><?php echo $row['WhenHappy']; ?></td>
                           </tr>
                           <tr>
                              <td>When I Am Unhappy</td>
                              <td><?php echo $row['WhenUnhappy']; ?></td>
                           </tr>
                           <tr>
                              <td>Communicate Prefer</td>
                              <td><?php echo $row['CommunicationPreferences']; ?></td>
                           </tr>
                           <tr>
                              <td>Previous Support Plan</td>
                              <td><?php echo $row['PreviousSupportPlan']; ?></td>
                           </tr>
                           <tr>
                              <td>Achieve Desired Outcomes</td>
                              <td><?php echo $row['DesiredOutcomes']; ?></td>
                           </tr>
                           <tr>
                              <td>Health Activity</td>
                              <td><?php echo $row['HealthActivity']; ?></td>
                           </tr>
                           <tr>
                              <td>Health Treatments</td>
                              <td><?php echo $row['HealthTreatments']; ?></td>
                           </tr>
                           <tr>
                              <td>Skin Integrity</td>
                              <td><?php echo $row['SkinIntegrity']; ?></td>
                           </tr>
                           <tr>
                              <td>Skin Treatments</td>
                              <td><?php echo $row['SkinTreatments']; ?></td>
                           </tr>
                           <tr>
                              <td>Swallowing</td>
                              <td><?php echo $row['Swallowing']; ?></td>
                           </tr>
                           <tr>
                              <td>Swallowing Treatments</td>
                              <td><?php echo $row['SwallowingTreatments']; ?></td>
                           </tr>
                           <tr>
                              <td>Health Professionals</td>
                              <td><?php echo $row['HealthProfessionals']; ?></td>
                           </tr>
                           <tr>
                              <td>Professionals Aids</td>
                              <td><?php echo $row['ProfessionalsAids']; ?></td>
                           </tr>
                           <tr>
                              <td>Muscular Pain</td>
                              <td><?php echo $row['MuscularPain']; ?></td>
                           </tr>
                           <tr>
                              <td>Muscular Pain Treatments</td>
                              <td><?php echo $row['MuscularPainTreatments']; ?></td>
                           </tr>
                           <tr>
                              <td>Nerve Pain</td>
                              <td><?php echo $row['NervePain']; ?></td>
                           </tr>
                           <tr>
                              <td>Nerve Pain Treatments</td>
                              <td><?php echo $row['NervePainTreatments']; ?></td>
                           </tr>
                           <tr>
                              <td>Falls</td>
                              <td><?php echo $row['Falls']; ?></td>
                           </tr>
                           <tr>
                              <td>Falls Treatments</td>
                              <td><?php echo $row['FallsTreatments']; ?></td>
                           </tr>
                           <tr>
                              <td>Muscular Issues</td>
                              <td><?php echo $row['MuscularIssues']; ?></td>
                           </tr>
                           <tr>
                              <td>Muscular Issues Aids</td>
                              <td><?php echo $row['MuscularIssuesAids']; ?></td>
                           </tr>
                           <tr>
                              <td>Health Concerns</td>
                              <td><?php echo $row['HealthConcerns']; ?></td>
                           </tr>
                           <tr>
                              <td>Health Concerns Aids</td>
                              <td><?php echo $row['HealthConcernsAids']; ?></td>
                           </tr>
                           <tr>
                              <td>Family Activity</td>
                              <td><?php echo $row['FamilyActivity']; ?></td>
                           </tr>
                           <tr>
                              <td>Family Time Spent</td>
                              <td><?php echo $row['FamilyTimeSpent']; ?></td>
                           </tr>
                           <tr>
                              <td>Hobbies Activity</td>
                              <td><?php echo $row['HobbiesActivity']; ?></td>
                           </tr>
                           <tr>
                              <td>Hobbies Time Spent</td>
                              <td><?php echo $row['HobbiesTimeSpent']; ?></td>
                           </tr>
                           <tr>
                              <td>Spirituality Activity</td>
                              <td><?php echo $row['SpiritualityActivity']; ?></td>
                           </tr>
                           <tr>
                              <td>Spirituality Time Spent</td>
                              <td><?php echo $row['SpiritualityTimeSpent']; ?></td>
                           </tr>
                           <tr>
                              <td>Outings Activity</td>
                              <td><?php echo $row['OutingsActivity']; ?></td>
                           </tr>
                           <tr>
                              <td>Outings Time Spent</td>
                              <td><?php echo $row['OutingsTimeSpent']; ?></td>
                           </tr>
                           <tr>
                              <td>Computer Activity</td>
                              <td><?php echo $row['ComputerActivity']; ?></td>
                           </tr>
                           <tr>
                              <td>Computer Time Spent</td>
                              <td><?php echo $row['ComputerTimeSpent']; ?></td>
                           </tr>
                           <tr>
                              <td>Employment Activity</td>
                              <td><?php echo $row['EmploymentActivity']; ?></td>
                           </tr>
                           <tr>
                              <td>Employment Time Spent</td>
                              <td><?php echo $row['EmploymentTimeSpent']; ?></td>
                           </tr>
                           <tr>
                              <td>Sports Activity</td>
                              <td><?php echo $row['SportsActivity']; ?></td>
                           </tr>
                           <tr>
                              <td>Sports Time Spent</td>
                              <td><?php echo $row['SportsTimeSpent']; ?></td>
                           </tr>
                           <tr>
                              <td>Music Activity</td>
                              <td><?php echo $row['MusicActivity']; ?></td>
                           </tr>
                           <tr>
                              <td>Music Time Spent</td>
                              <td><?php echo $row['MusicTimeSpent']; ?></td>
                           </tr>
                           <tr>
                              <td>Movies Activity</td>
                              <td><?php echo $row['MoviesActivity']; ?></td>
                           </tr>
                           <tr>
                              <td>Movies Time Spent</td>
                              <td><?php echo $row['MoviesTimeSpent']; ?></td>
                           </tr>
                           <tr>
                              <td>Well-being Activity</td>
                              <td><?php echo $row['WellBeingActivity']; ?></td>
                           </tr>
                           <tr>
                              <td>Well-being Time Spent</td>
                              <td><?php echo $row['WellBeingTimeSpent']; ?></td>
                           </tr>
                           <tr>
                              <td>Food Activity</td>
                              <td><?php echo $row['FoodActivity']; ?></td>
                           </tr>
                           <tr>
                              <td>Food Time Spent</td>
                              <td><?php echo $row['FoodTimeSpent']; ?></td>
                           </tr>
                           <tr>
                              <td>Intimacy Activity</td>
                              <td><?php echo $row['IntimacyActivity']; ?></td>
                           </tr>
                           <tr>
                              <td>Intimacy Time Spent</td>
                              <td><?php echo $row['IntimacyTimeSpent']; ?></td>
                           </tr>
                           <tr>
                              <td>Other Activity</td>
                              <td><?php echo $row['OtherActivity']; ?></td>
                           </tr>
                           <tr>
                              <td>Other Time Spent</td>
                              <td><?php echo $row['OtherTimeSpent']; ?></td>
                           </tr>
                           <tr>
                              <td>Behavioural Communication</td>
                              <td><?php echo $row['BehaviouralCommunication']; ?></td>
                           </tr>
                           <tr>
                              <td>Behavioural Issues</td>
                              <td><?php echo $row['BehaviouralIssues']; ?></td>
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