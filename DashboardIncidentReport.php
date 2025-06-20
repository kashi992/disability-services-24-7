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
                     <a class="nav-link active" href="./IncidentReportForm.php">Incident Report Form</a>
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
                  <h2 class="title my-4 text-center">Incident Documentation Form Detail</h2>
                  <?php
                     include 'config.php';

                     // Check if 'clientid' is set in the URL and is not empty
                     if(isset($_GET['id']) && !empty($_GET['id'])) {
                         // Retrieve 'clientid' from URL
                         $id = $_GET['id']; 
                         $query = "SELECT * FROM `incidentreportformdetail` WHERE `id` = '$id'";
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
                           <td>1. Fact Finding Manager Name</td>
                           <td><?php echo $row['FactFindingManagerName']; ?></td>
                        </tr>
                        <tr>
                           <td>Manager Address</td>
                           <td><?php echo $row['ManagerAddress']; ?></td>
                        </tr>
                        <tr>
                           <td>Manager Phone</td>
                           <td><?php echo $row['ManagerPhone']; ?></td>
                        </tr>
                        <tr>
                           <td>Manager Email</td>
                           <td><?php echo $row['ManagerEmail']; ?></td>
                        </tr>
                        <tr>
                           <td>Person Name</td>
                           <td><?php echo $row['PersonName']; ?></td>
                        </tr>
                        <tr>
                           <td>Person Address</td>
                           <td><?php echo $row['PersonAddress']; ?></td>
                        </tr>
                        <tr>
                           <td>Person Phone</td>
                           <td><?php echo $row['PersonPhone']; ?></td>
                        </tr>
                        <tr>
                           <td>Person DOB</td>
                           <td><?php echo $row['PersonDOB']; ?></td>
                        </tr>
                        <tr>
                           <td>Person Email</td>
                           <td><?php echo $row['PersonEmail']; ?></td>
                        </tr>
                        <tr>
                           <td>Disable Person Name</td>
                           <td><?php echo $row['DisablePersonName']; ?></td>
                        </tr>
                        <tr>
                           <td>Disable Person Address</td>
                           <td><?php echo $row['DisablePersonAddress']; ?></td>
                        </tr>
                        <tr>
                           <td>Disable Person Phone</td>
                           <td><?php echo $row['DisablePersonPhone']; ?></td>
                        </tr>
                        <tr>
                           <td>Disable Person DOB</td>
                           <td><?php echo $row['DisablePersonDOB']; ?></td>
                        </tr>
                        <tr>
                           <td>Disable Person Email</td>
                           <td><?php echo $row['DisablePersonEmail']; ?></td>
                        </tr>
                        <tr>
                           <td>Disable Person Name (repeat)</td>
                           <td><?php echo $row['DisablePersonNameRepeat']; ?></td>
                        </tr>
                        <tr>
                           <td>Disable Person Address (repeat)</td>
                           <td><?php echo $row['DisablePersonAddressRepeat']; ?></td>
                        </tr>
                        <tr>
                           <td>Disable Person Phone (repeat)</td>
                           <td><?php echo $row['DisablePersonPhoneRepeat']; ?></td>
                        </tr>
                        <tr>
                           <td>Disable Person DOB (repeat)</td>
                           <td><?php echo $row['DisablePersonDOBRepeat']; ?></td>
                        </tr>
                        <tr>
                           <td>Disable Person Email (repeat)</td>
                           <td><?php echo $row['DisablePersonEmailRepeat']; ?></td>
                        </tr>
                        <tr>
                           <td>Worker Name</td>
                           <td><?php echo $row['WorkerName']; ?></td>
                        </tr>
                        <tr>
                           <td>Worker Address</td>
                           <td><?php echo $row['WorkerAddress']; ?></td>
                        </tr>
                        <tr>
                           <td>Worker Phone</td>
                           <td><?php echo $row['WorkerPhone']; ?></td>
                        </tr>
                        <tr>
                           <td>Worker Email</td>
                           <td><?php echo $row['WorkerEmail']; ?></td>
                        </tr>
                        <tr>
                           <td>Witnesses Name</td>
                           <td><?php echo $row['WitnessesName']; ?></td>
                        </tr>
                        <tr>
                           <td>Witnesses Address</td>
                           <td><?php echo $row['WitnessesAddress']; ?></td>
                        </tr>
                        <tr>
                           <td>Witnesses Phone</td>
                           <td><?php echo $row['WitnessesPhone']; ?></td>
                        </tr>
                        <tr>
                           <td>Witnesses Email</td>
                           <td><?php echo $row['WitnessesEmail']; ?></td>
                        </tr>
                        <tr>
                           <td>Date of Event</td>
                           <td><?php echo $row['DateOfEvent']; ?></td>
                        </tr>
                        <tr>
                           <td>Incident Time</td>
                           <td><?php echo $row['IncidentTime']; ?></td>
                        </tr>
                        <tr>
                           <td>Incident Place</td>
                           <td><?php echo $row['IncidentPlace']; ?></td>
                        </tr>
                        <tr>
                           <td>Incident Description</td>
                           <td><?php echo $row['IncidentDescription']; ?></td>
                        </tr>
                        <tr>
                           <td>Events Prior</td>
                           <td><?php echo $row['EventsPrior']; ?></td>
                        </tr>
                        <tr>
                           <td>Risks Involved</td>
                           <td><?php echo $row['RisksInvolved']; ?></td>
                        </tr>
                        <tr>
                           <td>Risk Controls</td>
                           <td><?php echo $row['RiskControls']; ?></td>
                        </tr>
                        <tr>
                           <td>Safety Checked</td>
                           <td><?php echo $row['SafetyChecked']; ?></td>
                        </tr>
                        <tr>
                           <td>Immediate Actions</td>
                           <td><?php echo $row['ImmediateActions']; ?></td>
                        </tr>
                        <tr>
                           <td>Primary Carer</td>
                           <td><?php echo $row['PrimaryCarer']; ?></td>
                        </tr>
                        <tr>
                           <td>Reported to Police</td>
                           <td><?php echo $row['ReportedToPolice']; ?></td>
                        </tr>
                        <tr>
                           <td>Medical Personnel</td>
                           <td><?php echo $row['MedicalPersonnel']; ?></td>
                        </tr>
                        <tr>
                           <td>Other Actions</td>
                           <td><?php echo $row['OtherActions']; ?></td>
                        </tr>
                        <tr>
                           <td>Alleged Reportable Incident</td>
                           <td><?php echo $row['AllegedReportableIncident']; ?></td>
                        </tr>
                        <tr>
                           <td>NDIS Commission</td>
                           <td><?php echo $row['NDISCommission']; ?></td>
                        </tr>
                        <tr>
                           <td>Reportable Incident Date</td>
                           <td><?php echo $row['ReportableIncidentDate']; ?></td>
                        </tr>
                        <tr>
                           <td>Incident Investigation Name</td>
                           <td><?php echo $row['IncidentInvestigationName']; ?></td>
                        </tr>
                        <tr>
                           <td>Investigator Phone</td>
                           <td><?php echo $row['InvestigatorPhone']; ?></td>
                        </tr>
                        <tr>
                           <td>Investigator Email</td>
                           <td><?php echo $row['InvestigatorEmail']; ?></td>
                        </tr>
                        <tr>
                           <td>How Incident Occurred 1</td>
                           <td><?php echo $row['HowIncidentOccurred1']; ?></td>
                        </tr>
                        <tr>
                           <td>How Incident Occurred 2</td>
                           <td><?php echo $row['HowIncidentOccurred2']; ?></td>
                        </tr>
                        <tr>
                           <td>How Incident Occurred 3</td>
                           <td><?php echo $row['HowIncidentOccurred3']; ?></td>
                        </tr>
                        <tr>
                           <td>How Incident Occurred 4</td>
                           <td><?php echo $row['HowIncidentOccurred4']; ?></td>
                        </tr>
                        <tr>
                           <td>How Incident Occurred 5</td>
                           <td><?php echo $row['HowIncidentOccurred5']; ?></td>
                        </tr>
                        <tr>
                           <td>How Incident Impacted 1</td>
                           <td><?php echo $row['HowIncidentImpacted1']; ?></td>
                        </tr>
                        <tr>
                           <td>How Incident Impacted 2</td>
                           <td><?php echo $row['HowIncidentImpacted2']; ?></td>
                        </tr>
                        <tr>
                           <td>How Incident Impacted 3</td>
                           <td><?php echo $row['HowIncidentImpacted3']; ?></td>
                        </tr>
                        <tr>
                           <td>How Incident Impacted 4</td>
                           <td><?php echo $row['HowIncidentImpacted4']; ?></td>
                        </tr>
                        <tr>
                           <td>How Incident Impacted 5</td>
                           <td><?php echo $row['HowIncidentImpacted5']; ?></td>
                        </tr>
                        <tr>
                           <td>Possible Contributing Factors 1</td>
                           <td><?php echo $row['PossibleContributingFactors1']; ?></td>
                        </tr>
                        <tr>
                           <td>Possible Contributing Factors 2</td>
                           <td><?php echo $row['PossibleContributingFactors2']; ?></td>
                        </tr>
                        <tr>
                           <td>Possible Contributing Factors 3</td>
                           <td><?php echo $row['PossibleContributingFactors3']; ?></td>
                        </tr>
                        <tr>
                           <td>Possible Contributing Factors 4</td>
                           <td><?php echo $row['PossibleContributingFactors4']; ?></td>
                        </tr>
                        <tr>
                           <td>Possible Contributing Factors 5</td>
                           <td><?php echo $row['PossibleContributingFactors5']; ?></td>
                        </tr>
                        <tr>
                           <td>Essential Contributing Factors 1</td>
                           <td><?php echo $row['EssentialContributingFactors1']; ?></td>
                        </tr>
                        <tr>
                           <td>Essential Contributing Factors 2</td>
                           <td><?php echo $row['EssentialContributingFactors2']; ?></td>
                        </tr>
                        <tr>
                           <td>Essential Contributing Factors 3</td>
                           <td><?php echo $row['EssentialContributingFactors3']; ?></td>
                        </tr>
                        <tr>
                           <td>Incident Prevented</td>
                           <td><?php echo $row['IncidentPrevented']; ?></td>
                        </tr>
                        <tr>
                           <td>Organisational Issues 1st</td>
                           <td><?php echo $row['OrganisationalIssues1st']; ?></td>
                        </tr>
                        <tr>
                           <td>Organisational Issues 2nd</td>
                           <td><?php echo $row['OrganisationalIssues2nd']; ?></td>
                        </tr>
                        <tr>
                           <td>Organisational Issues 3rd</td>
                           <td><?php echo $row['OrganisationalIssues3rd']; ?></td>
                        </tr>
                        <tr>
                           <td>Organisational Issues 4th</td>
                           <td><?php echo $row['OrganisationalIssues4th']; ?></td>
                        </tr>
                        <tr>
                           <td>Preventative and Corrective 1st</td>
                           <td><?php echo $row['PreventativeAndCorrective1st']; ?></td>
                        </tr>
                        <tr>
                           <td>1st responsibility</td>
                           <td><?php echo $row['FirstResponsibility']; ?></td>
                        </tr>
                        <tr>
                           <td>1st completion date</td>
                           <td><?php echo $row['FirstCompletionDate']; ?></td>
                        </tr>
                        <tr>
                           <td>Preventative and Corrective 2nd</td>
                           <td><?php echo $row['PreventativeAndCorrective2nd']; ?></td>
                        </tr>
                        <tr>
                           <td>2nd responsibility</td>
                           <td><?php echo $row['SecondResponsibility']; ?></td>
                        </tr>
                        <tr>
                           <td>2nd completion date</td>
                           <td><?php echo $row['SecondCompletionDate']; ?></td>
                        </tr>
                        <tr>
                           <td>Preventative and Corrective 3rd</td>
                           <td><?php echo $row['PreventativeAndCorrective3rd']; ?></td>
                        </tr>
                        <tr>
                           <td>3rd responsibility</td>
                           <td><?php echo $row['ThirdResponsibility']; ?></td>
                        </tr>
                        <tr>
                           <td>3rd completion date</td>
                           <td><?php echo $row['ThirdCompletionDate']; ?></td>
                        </tr>
                        <tr>
                           <td>Preventative and Corrective 4th</td>
                           <td><?php echo $row['PreventativeAndCorrective4th']; ?></td>
                        </tr>
                        <tr>
                           <td>4th responsibility</td>
                           <td><?php echo $row['FourthResponsibility']; ?></td>
                        </tr>
                        <tr>
                           <td>4th completion date</td>
                           <td><?php echo $row['FourthCompletionDate']; ?></td>
                        </tr>
                        <tr>
                           <td>INCIDENT RESOLUTION ACTION (A)</td>
                           <td><?php echo $row['IncidentResolutionActionA']; ?></td>
                        </tr>
                        <tr>
                           <td>(A)INCIDENT Responsibility</td>
                           <td><?php echo $row['INCIDENTResponsibilityA']; ?></td>
                        </tr>
                        <tr>
                           <td>(A)INCIDENT Completion Date</td>
                           <td><?php echo $row['INCIDENTCompletionDateA']; ?></td>
                        </tr>
                        <tr>
                           <td>INCIDENT RESOLUTION ACTION (B)</td>
                           <td><?php echo $row['IncidentResolutionActionB']; ?></td>
                        </tr>
                        <tr>
                           <td>(B)INCIDENT Responsibility</td>
                           <td><?php echo $row['INCIDENTResponsibilityB']; ?></td>
                        </tr>
                        <tr>
                           <td>(B)INCIDENT Completion Date</td>
                           <td><?php echo $row['INCIDENTCompletionDateB']; ?></td>
                        </tr>
                        <tr>
                           <td>INCIDENT RESOLUTION ACTION (C)</td>
                           <td><?php echo $row['IncidentResolutionActionC']; ?></td>
                        </tr>
                        <tr>
                           <td>(C)INCIDENT Responsibility</td>
                           <td><?php echo $row['INCIDENTResponsibilityC']; ?></td>
                        </tr>
                        <tr>
                           <td>(C)INCIDENT Completion Date</td>
                           <td><?php echo $row['INCIDENTCompletionDateC']; ?></td>
                        </tr>
                        <tr>
                           <td>INCIDENT RESOLUTION ACTION (D)</td>
                           <td><?php echo $row['IncidentResolutionActionD']; ?></td>
                        </tr>
                        <tr>
                           <td>(D)INCIDENT Responsibility</td>
                           <td><?php echo $row['INCIDENTResponsibilityD']; ?></td>
                        </tr>
                        <tr>
                           <td>(D)INCIDENT Completion Date</td>
                           <td><?php echo $row['INCIDENTCompletionDateD']; ?></td>
                        </tr>
                        <tr>
                           <td>assist persons</td>
                           <td><?php echo $row['AssistPersons']; ?></td>
                        </tr>
                        <tr>
                           <td>CONSULTATION Date</td>
                           <td><?php echo $row['CONSULTATIONDate']; ?></td>
                        </tr>
                        <tr>
                           <td>Person consulted</td>
                           <td><?php echo $row['PersonConsulted']; ?></td>
                        </tr>
                        <tr>
                           <td>incident regarding</td>
                           <td><?php echo $row['IncidentRegarding']; ?></td>
                        </tr>
                        <tr>
                           <td>person believes</td>
                           <td><?php echo $row['PersonBelieves']; ?></td>
                        </tr>
                        <tr>
                           <td>Consultation Done instead</td>
                           <td><?php echo $row['ConsultationDoneInstead']; ?></td>
                        </tr>
                        <tr>
                           <td>how Consultation Done</td>
                           <td><?php echo $row['HowConsultationDone']; ?></td>
                        </tr>
                        <tr>
                           <td>incident resolved</td>
                           <td><?php echo $row['IncidentResolved']; ?></td>
                        </tr>
                        <tr>
                           <td>incident notified</td>
                           <td><?php echo $row['IncidentNotified']; ?></td>
                        </tr>
                        <tr>
                           <td>CONTINUOUS IMPROVEMENT Feedback Date</td>
                           <td><?php echo $row['CONTINUOUSIMPROVEMENTFeedbackDate']; ?></td>
                        </tr>
                        <tr>
                           <td>Worker consulted</td>
                           <td><?php echo $row['WorkerConsulted']; ?></td>
                        </tr>
                        <tr>
                           <td>Worker reports</td>
                           <td><?php echo $row['WorkerReports']; ?></td>
                        </tr>
                        <tr>
                           <td>preventing incident function</td>
                           <td><?php echo $row['PreventingIncidentFunction']; ?></td>
                        </tr>
                        <tr>
                           <td>Incident Management procedures</td>
                           <td><?php echo $row['IncidentManagementProcedures']; ?></td>
                        </tr>
                        <tr>
                           <td>better service</td>
                           <td><?php echo $row['BetterService']; ?></td>
                        </tr>
                        <tr>
                           <td>control failure</td>
                           <td><?php echo $row['ControlFailure']; ?></td>
                        </tr>
                        <tr>
                           <td>Other comments</td>
                           <td><?php echo $row['OtherComments']; ?></td>
                        </tr>
                        <tr>
                           <td>material particular</td>
                           <td><?php echo $row['MaterialParticular']; ?></td>
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