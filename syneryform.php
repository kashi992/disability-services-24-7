<?php
include 'config.php';
//login
if(isset($_POST['logSub'])){
    $em=$_POST['em'];
    $ps=$_POST['pss'];
    $q="SELECT * FROM adminusers WHERE email='$em' AND password='$ps'";
    $result = mysqli_query($con, $q) ;
    $num=mysqli_num_rows($result);
    if($num===1)
    {
        session_start();
        $_SESSION['em']=$em;
         header('location:Dashboard.php');
         exit;
    }
    else{
        echo"<script>alert('Email or Password is wrong');</script>";
        header('location:login.html');
    }
}


//feeback form 

if(isset($_POST['feedSub'])){

    $date = $_POST['date'];
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $telephone = $_POST['tele'];
    $email = $_POST['em'];
    $self = $_POST['self'];
    $disability = $_POST['dis1'];
    $interpreterRequired = $_POST['inter1'];
    $helpDetails = $_POST['help'];
    $complaintDetails = $_POST['comp'];
    $concernOutcome = $_POST['conc'];
    $agreement = $_POST['agree'];
    $registerIncluded = $_POST['reg'];
    $responsiblePerson = $_POST['resp'];
    $referenceNumber = $_POST['ref_num'];

    $feed_insert_Query = "INSERT INTO feedbackandcomplaintsform (TodaysDate, FirstName, SecondName, Telephone, Email, IAmA, ComplaintOnBehalfOfPerson, Interpreter, HelpDetails, ComplaintDetails, RaisingAConcern, Agreement, InternalUseComplaintsRegister, PersonResponsible, ReferenceNumber) VALUES ('$date', '$firstName', '$lastName', '$telephone', '$email', '$self', '$disability', '$interpreterRequired', '$helpDetails', '$complaintDetails', '$concernOutcome', '$agreement', '$registerIncluded', '$responsiblePerson', '$referenceNumber')";
    mysqli_query($con,$feed_insert_Query);
    header('location:thankYou.html?sub');
    // header('location:ClientComplaintsFeedbackForm.html?sub');
}

// Privacy Agreement Form
if(isset($_POST['priSub'])) {
    // Directly assign POST values to variables
    $privCons = $_POST['c-con1'];
    $auth = $_POST['author'];
    $privDig = $_POST['dig1'];
    $nonDisc = $_POST['req'];
    $addDisc = $_POST['p_info'];
    
    // For checkboxes that are expected to be an array
    $withdraw = isset($_POST['not1']) ? implode(", ", $_POST['not1']): '';
    $copyForm = $_POST['sign1'];
    $email = $_POST['em'];
    $decl = $_POST['dec1'];
    $pri_sql = "INSERT INTO privacyconsentform (ClientConsent, Authorised, PrivacyAndDignity, ClientsPersonalInformation, AdditionPeopleCategories, NotwithstandingTheAbove, SignedPrivacyConsent, EmailOrMailAddress, Declaration)VALUES ('$privCons', '$auth', '$privDig', '$nonDisc', '$addDisc', '$withdraw', '$copyForm', '$email', '$decl')";
    mysqli_query($con,$pri_sql);
    // header('location:PrivacyAgreementForm.html?sub');
    header('location:thankYou.html?sub');
    // Process your variables here
}
//Employee Availability Form

// Check if the form was submitted
if (isset($_POST['staffSub'])) {
    // Short variable names for first and last name
    $fn = $_POST['fname'] ;
    $ln = $_POST['lname'] ;

    // Short variable names for each day's availability, directly checking and joining checkbox values
    $availability = [
        'mon' => isset($_POST['mon']) ? implode(", ", $_POST['mon']) : 'None',
        'tue' => isset($_POST['tue']) ? implode(", ", $_POST['tue']) : 'None',
        'wed' => isset($_POST['wed']) ? implode(", ", $_POST['wed']) : 'None',
        'thu' => isset($_POST['thu']) ? implode(", ", $_POST['thu']) : 'None',
        'fri' => isset($_POST['fri']) ? implode(", ", $_POST['fri']) : 'None',
        'sat' => isset($_POST['sat']) ? implode(", ", $_POST['sat']) : 'None',
        'sun' => isset($_POST['sun']) ? implode(", ", $_POST['sun']) : 'None'
    ];
    $staffQuery = "INSERT INTO staffavailabilityform 
                (FirstName, SecondName, MONDAY, TUESDAY, WEDNESDAY, THURSDAY, FRIDAY, SATURDAY, SUNDAY) 
                VALUES 
                ('$fn', '$ln', 
                '{$availability['mon']}', '{$availability['tue']}', '{$availability['wed']}', 
                '{$availability['thu']}', '{$availability['fri']}', '{$availability['sat']}', '{$availability['sun']}')";

    mysqli_query($con,$staffQuery);
    // header('location:EmployeeAvailabilityForm.html?sub');
    header('location:thankYou.html?sub');

}

// Incident Documentation Form
if (isset($_POST['inciSub'])) {

    $mn = $_POST['manager_name'] ?? 'None';
    $ma = $_POST['manager_address'] ?? 'None';
    $mp = $_POST['manager_phone'] ?? 'None';
    $me = $_POST['manager_email'] ?? 'None';

    $pn = $_POST['person_name'] ?? 'None';
    $pa = $_POST['person_address'] ?? 'None';
    $pp = $_POST['person_phone'] ?? 'None';
    $pd = $_POST['person_dob'] ?? 'None';
    $pe = $_POST['person_email'] ?? 'None';

    $dpn = $_POST['dis_person_name'] ?? 'None';
    $dpa = $_POST['dis_person_address'] ?? 'None';
    $dpp = $_POST['dis_person_phone'] ?? 'None';
    $dpd = $_POST['dis_person_dob'] ?? 'None';
    $dpe = $_POST['dis_person_email'] ?? 'None';

    $dp2n = $_POST['dis_person_name2'] ?? 'None';
    $dp2a = $_POST['dis_person_address2'] ?? 'None';
    $dp2p = $_POST['dis_person_phone2'] ?? 'None';
    $dp2d = $_POST['dis_person_dob2'] ?? 'None';
    $dp2e = $_POST['dis_person_email2'] ?? 'None';

    $wn = $_POST['worker_name'] ?? 'None';
    $wa = $_POST['worker_address'] ?? 'None';
    $wp = $_POST['worker_phone'] ?? 'None';
    $we = $_POST['worker_email'] ?? 'None';

    $wni = $_POST['witnesses_name'] ?? 'None';
    $wai = $_POST['witnesses_address'] ?? 'None';
    $wpi = $_POST['witnesses_phone'] ?? 'None';
    $wei = $_POST['witnesses_email'] ?? 'None';

    $de = $_POST['date_of_event'] ?? 'None';
    $ti = $_POST['incident_time'] ?? 'None';
    $pl = $_POST['incident_place'] ?? 'None';
    $di = $_POST['incident_description'] ?? 'None'; 

    $ip = $_POST['events_prior'] ?? 'None';
    $ra = $_POST['risks_involved'] ?? 'None';
    $rc = $_POST['risk_controls'] ?? 'None';
    $sc = $_POST['safety_checked'] ?? 'None';
    $ia = $_POST['immediate_actions'] ?? 'None'; 
    $cc = $_POST['primary_carer'] ?? 'None';
    $rp = $_POST['reported_to_police'] ?? 'None';
    $mc = $_POST['medical_personnel'] ?? 'None';
    $oa = $_POST['other_actions'] ?? 'None'; 
    $ri = $_POST['alle_report_inci'] ?? 'None';
    $nr = $_POST['ndis_commission'] ?? 'None';
    $rd = $_POST['reportable_incident_date'] ?? 'None';

    $in = $_POST['invest_name'] ?? 'None';
    $ip = $_POST['invest_phone'] ?? 'None';
    $ie = $_POST['invest_email'] ?? 'None';

    // Steps that led to the incident
    $o1 = $_POST['incident_occurred1'] ?? 'None';
    $o2 = $_POST['incident_occurred2'] ?? 'None';
    $o3 = $_POST['incident_occurred3'] ?? 'None';
    $o4 = $_POST['incident_occurred4'] ?? 'None';
    $o5 = $_POST['incident_occurred5'] ?? 'None';

    // Impact on persons involved
    $i1 = $_POST['incident_impacted1'] ?? 'None';
    $i2 = $_POST['incident_impacted2'] ?? 'None';
    $i3 = $_POST['incident_impacted3'] ?? 'None';
    $i4 = $_POST['incident_impacted4'] ?? 'None';
    $i5 = $_POST['incident_impacted5'] ?? 'None';

    // Contributing factors
    $f1 = $_POST['pos_contribu_factor1'] ?? 'None';
    $f2 = $_POST['pos_contribu_factor2'] ?? 'None';
    $f3 = $_POST['pos_contribu_factor3'] ?? 'None';
    $f4 = $_POST['pos_contribu_factor4'] ?? 'None';
    $f5 = $_POST['pos_contribu_factor5'] ?? 'None';

    // Essential contributing factors
    $e1 = $_POST['essential_contribu_factor1'] ?? 'None';
    $e2 = $_POST['essential_contribu_factor2'] ?? 'None';
    $e3 = $_POST['essential_contribu_factor3'] ?? 'None';

    // Preventative and corrective actions
    $pc1 = $_POST['preventative_corrective1'] ?? 'None';
    $r1 = $_POST['responsibility1'] ?? 'None';
    $cd1 = $_POST['completion_date1'] ?? 'None';

    $pc2 = $_POST['preventative_corrective2'] ?? 'None';
    $r2 = $_POST['responsibility2'] ?? 'None';
    $cd2 = $_POST['completion_date2'] ?? 'None';

    $pc3 = $_POST['preventative_corrective3'] ?? 'None';
    $r3 = $_POST['responsibility3'] ?? 'None';
    $cd3 = $_POST['completion_date3'] ?? 'None';

    $pc4 = $_POST['preventative_corrective4'] ?? 'None';
    $r4 = $_POST['responsibility4'] ?? 'None';
    $cd4 = $_POST['completion_date4'] ?? 'None';

    // Remedial Actions
    $ra1 = $_POST['inci_resol_action1'] ?? 'None';
    $rr1 = $_POST['inci_responsibility1'] ?? 'None';
    $rcd1 = $_POST['inci_completion_date1'] ?? 'None';

    $ra2 = $_POST['inci_resol_action2'] ?? 'None';
    $rr2 = $_POST['inci_responsibility2'] ?? 'None';
    $rcd2 = $_POST['inci_completion_date2'] ?? 'None';

    $ra3 = $_POST['inci_resol_action3'] ?? 'None';
    $rr3 = $_POST['inci_responsibility3'] ?? 'None';
    $rcd3 = $_POST['inci_completion_date3'] ?? 'None';

    $ra4 = $_POST['inci_resol_action4'] ?? 'None';
    $rr4 = $_POST['inci_responsibility4'] ?? 'None';
    $rcd4 = $_POST['inci_completion_date4'] ?? 'None';

    // Support for Affected Persons
    $ap = $_POST['assist_persons'] ?? 'None';

    // Consultation Details
    $cd = $_POST['consultation_date'] ?? 'None';
    $pc = $_POST['person_consulted'] ?? 'None';
    $ir = $_POST['incident_regarding'] ?? 'None';
    $pb = $_POST['person_believes'] ?? 'None';
    $di = $_POST['consul_done_instead'] ?? 'None';
    $dh = $_POST['consul_done_how'] ?? 'None';
    $ir = $_POST['incident_resolved'] ?? 'None';
    $in = $_POST['incident_notified'] ?? 'None';

    // Continuous Improvement
    $df = $_POST['improve_date_feedback'] ?? 'None';
    $wc = $_POST['worker_consulted'] ?? 'None';
    $wr = $_POST['worker_reports'] ?? 'None';
    $pif = $_POST['prevent_inci_func'] ?? 'None';
    $imp = $_POST['Inci_manag_proce'] ?? 'None';
    $bs = $_POST['better_service'] ?? 'None';
    $cf = $_POST['control_failure'] ?? 'None';
    $oc = $_POST['other_comments'] ?? 'None';

    $inci_rep = $_POST['inci_rep1']?? 'None';
    $inpre = $_POST['incident_prevented'] ?? 'None';
    $oi1 = $_POST['organisational_issues1'] ?? 'None';
    $oi2 = $_POST['organisational_issue2'] ?? 'None'; 
    $oi3 = $_POST['organisational_issues3'] ?? 'None';
    $oi4 = $_POST['organisational_issues4'] ?? 'None';

    $inciQuery = "INSERT INTO incidentreportformdetail (
        FactFindingManagerName, ManagerAddress, ManagerPhone, ManagerEmail, 
        PersonName, PersonAddress, PersonPhone, PersonDOB, PersonEmail, 
        DisablePersonName, DisablePersonAddress, DisablePersonPhone, DisablePersonDOB, DisablePersonEmail, 
        DisablePersonNameRepeat, DisablePersonAddressRepeat, DisablePersonPhoneRepeat, DisablePersonDOBRepeat, DisablePersonEmailRepeat, 
        WorkerName, WorkerAddress, WorkerPhone, WorkerEmail, 
        WitnessesName, WitnessesAddress, WitnessesPhone, WitnessesEmail, 
        DateOfEvent, IncidentTime, IncidentPlace, IncidentDescription, EventsPrior, RisksInvolved, RiskControls, SafetyChecked, ImmediateActions, 
        PrimaryCarer, ReportedToPolice, MedicalPersonnel, OtherActions, AllegedReportableIncident, NDISCommission, ReportableIncidentDate, 
        IncidentInvestigationName, InvestigatorPhone, InvestigatorEmail, 
        HowIncidentOccurred1, HowIncidentOccurred2, HowIncidentOccurred3, HowIncidentOccurred4, HowIncidentOccurred5, 
        HowIncidentImpacted1, HowIncidentImpacted2, HowIncidentImpacted3, HowIncidentImpacted4, HowIncidentImpacted5, 
        PossibleContributingFactors1, PossibleContributingFactors2, PossibleContributingFactors3, PossibleContributingFactors4, PossibleContributingFactors5, 
        EssentialContributingFactors1, EssentialContributingFactors2, EssentialContributingFactors3, 
        IncidentPrevented, OrganisationalIssues1st, OrganisationalIssues2nd, OrganisationalIssues3rd, OrganisationalIssues4th, 
        PreventativeAndCorrective1st, FirstResponsibility, FirstCompletionDate, 
        PreventativeAndCorrective2nd, SecondResponsibility, SecondCompletionDate, 
        PreventativeAndCorrective3rd, ThirdResponsibility, ThirdCompletionDate, 
        PreventativeAndCorrective4th, FourthResponsibility, FourthCompletionDate, 
        IncidentResolutionActionA, INCIDENTResponsibilityA, INCIDENTCompletionDateA, 
        IncidentResolutionActionB, INCIDENTResponsibilityB, INCIDENTCompletionDateB, 
        IncidentResolutionActionC, INCIDENTResponsibilityC, INCIDENTCompletionDateC, 
        IncidentResolutionActionD, INCIDENTResponsibilityD, INCIDENTCompletionDateD, 
        AssistPersons, CONSULTATIONDate, PersonConsulted, IncidentRegarding, PersonBelieves, ConsultationDoneInstead, HowConsultationDone, IncidentResolved, IncidentNotified, 
        CONTINUOUSIMPROVEMENTFeedbackDate, WorkerConsulted, WorkerReports, PreventingIncidentFunction, IncidentManagementProcedures, BetterService, ControlFailure, OtherComments, MaterialParticular
    ) VALUES (
        '$mn', '$ma', '$mp', '$me', 
        '$pn', '$pa', '$pp', '$pd', '$pe', 
        '$dpn', '$dpa', '$dpp', '$dpd', '$dpe', 
        '$dp2n', '$dp2a', '$dp2p', '$dp2d', '$dp2e', 
        '$wn', '$wa', '$wp', '$we', 
        '$wni', '$wai', '$wpi', '$wei', 
        '$de', '$ti', '$pl', '$di', '$ip', '$ra', '$rc', '$sc', '$ia', 
        '$cc', '$rp', '$mc', '$oa', '$ri', '$nr', '$rd', 
        '$in', '$ip', '$ie', 
        '$o1', '$o2', '$o3', '$o4', '$o5', 
        '$i1', '$i2', '$i3', '$i4', '$i5', 
        '$f1', '$f2', '$f3', '$f4', '$f5', 
        '$e1', '$e2', '$e3','$inpre','$oi1','$oi2','$oi3',' $oi4', 
        '$pc1', '$r1', '$cd1', 
        '$pc2', '$r2', '$cd2', 
        '$pc3', '$r3', '$cd3', 
        '$pc4', '$r4', '$cd4', 
        '$ra1', '$rr1', '$rcd1', 
        '$ra2', '$rr2', '$rcd2', 
        '$ra3', '$rr3', '$rcd3', 
        '$ra4', '$rr4', '$rcd4', 
        '$ap', '$cd', '$pc', '$ir', '$pb', '$di', '$dh', '$ir', '$in', 
        '$df', '$wc', '$wr', '$pif', '$imp', '$bs', '$cf', '$oc', '$inci_rep'
    )";
    
    mysqli_query($con, $inciQuery);
    // header('location:IncidentDocumentationForm.html?sub');
    header('location:thankYou.html?sub');

}
//Client Registration Form
if(isset($_POST['clientSub'])){
    // Client Details
$clientFName = $_POST['c-fname'] ?? 'None';
$clientLName = $_POST['c-lname'] ?? 'None';
$clientDOB = $_POST['c-dob'] ?? 'None';
$ndisNum = $_POST['ndis-num'] ?? 'None';
$ndisFunding = isset($_POST['ndis_fun']) ? implode(', ', $_POST['ndis_fun']) : 'None';
$planMgr = $_POST['plan'] ?? 'None';

// Client Address and Contact
$clientAddr = $_POST['c-add'] ?? 'None';
$clientContact = $_POST['c-num'] ?? 'None';
$clientEmail = $_POST['c-email'] ?? 'None';
$contactPref = isset($_POST['c-m1']) ? implode(', ', $_POST['c-m1']) : 'None';

// Representative or Emergency Contact Details
$repFName = $_POST['rep-fname'] ?? 'None';
$repLName = $_POST['rep-lname'] ?? 'None';
$repRel = $_POST['rep-rel'] ?? 'None';
$repAddr = $_POST['rep-add'] ?? 'None';
$repPhone = $_POST['rep-num'] ?? 'None';
$repEmail = $_POST['rep-email'] ?? 'None';
$repContactPref = isset($_POST['rep-m']) ? implode(', ', $_POST['rep-m']) : 'None';

// About the Client
$livingSituation = isset($_POST['liv1']) ? implode(', ', $_POST['liv1']) : 'None';
$aboriginal = $_POST['rad1'] ?? 'None';
$behaviorPlan = $_POST['rad2'] ?? 'None';
$primaryDiagnosis = $_POST['pri-diag'] ?? 'None';
$secondaryDiagnosis = $_POST['sec-diag'] ?? 'None';
$allergies = $_POST['allergy'] ?? 'None';
$medicalDiag = $_POST['med-diag'] ?? 'None';
$clientDoctor = $_POST['c-doc'] ?? 'None';
$legalIssues = $_POST['issue'] ?? 'None';
$communicationType = isset($_POST['com_T']) ? implode(', ', $_POST['com_T']) : 'None';
$culturallyDiverse = $_POST['cul-rad'] ?? 'None';
$awareValues = $_POST['div-rad'] ?? 'None';
$languagesSpoken = isset($_POST['lang1']) ? implode(', ', $_POST['lang1']) : 'None';
$intr = isset($_POST['inter1']) ? implode(', ', $_POST['inter1']) : 'None';
$part = isset($_POST['part1']) ? implode(', ', $_POST['part1']) : 'None';

// Dietary Preferences and Allergies
$diet = isset($_POST['diet']) ? implode(', ', $_POST['diet']) : 'None';
$veg = isset($_POST['veg']) ? implode(', ', $_POST['veg']) : 'None';
$vegan = isset($_POST['vegan']) ? implode(', ', $_POST['vegan']) : 'None';
$dietAller = $_POST['diet-aller'] ?? 'None';
$sensIntol = $_POST['sensor'] ?? 'None';
$favFood = $_POST['favf'] ?? 'None';
$mealAssist = isset($_POST['meal1']) ? implode(', ', $_POST['meal1']) : 'None';

// Mental Health Management
$mentalExp = isset($_POST['exp1']) ? implode(', ', $_POST['exp1']) : 'None';
$mentalSup = $_POST['men-sup'] ?? 'None';
$triggers = $_POST['trig1'] ?? 'None';
$orgSupport = $_POST['trig2'] ?? 'None'; // Assuming "trig2" refers to linked organizations' support.
$medSupport = isset($_POST['med1']) ? 'Yes' : 'No';

// Physical Health Conditions
$conditions = isset($_POST['dis1']) ? implode(', ', $_POST['dis1']) : 'None';
$allergies = $_POST['phy-allergy'] ?? 'None';
$meds = $_POST['foll-med'] ?? 'None';
$medList = $_POST['list-med'] ?? 'None';
$phySup = $_POST['phy-sup'] ?? 'None';

// Traffic Awareness
$trafficAware = isset($_POST['traf1']) ? implode(', ', $_POST['traf1']) : 'None';
$stayGroup = isset($_POST['stay1']) ? implode(', ', $_POST['stay1']) : 'None';
$commApprop = isset($_POST['comm1']) ? implode(', ', $_POST['comm1']) : 'None';
$persSpace = isset($_POST['spac1']) ? implode(', ', $_POST['spac1']) : 'None';
$keepHands = isset($_POST['hand1']) ? implode(', ', $_POST['hand1']) : 'None';
$carSafety = isset($_POST['travel1']) ? implode(', ', $_POST['travel1']) : 'None';
$followInst = isset($_POST['inst1']) ? implode(', ', $_POST['inst1']) : 'None';
$waterSafety = isset($_POST['swim1']) ? implode(', ', $_POST['swim1']) : 'None';
$spendMoney = isset($_POST['mon1']) ? implode(', ', $_POST['mon1']) : 'None';
$sleepRoutine = isset($_POST['rout1']) ? implode(', ', $_POST['rout1']) : 'None';
$addWaterSafety = isset($_POST['wat1']) ? implode(', ', $_POST['wat1']) : 'None';
$addWaterSafety2 = isset($_POST['wat2']) ? implode(', ', $_POST['wat2']) : 'None';
$practicalSupport = $_POST['prac-sup'] ?? 'None';
$providePlans = isset($_POST['help-sup']) ? 'Yes' : 'No';

// Strengths, Likes, Dislikes, Happiness, Unhappiness Indicators, Preferred Communication, Goals, Previous Support, Achievement Opportunities
$strengths = $_POST['stren'] ?? 'None';
$likes = $_POST['likes'] ?? 'None';
$dislikes = $_POST['unlikes'] ?? 'None';
$happyIndic = $_POST['hapy'] ?? 'None';
$unhappyIndic = $_POST['unhapy'] ?? 'None';
$prefComm = $_POST['pre-com'] ?? 'None';
// $yearGoals = $_POST['pre-goal'] ?? 'None';
$preSup = $_POST['prev-sup'] ?? 'None';
$achieveOpport = $_POST['achieve'] ?? 'None';

// Activity and health
$actBB = isset($_POST['act1']) ? implode(', ', $_POST['act1']) : 'None';
$healthAid = $_POST['hel-aid'] ?? 'None';
$skinInt = isset($_POST['skin1']) ? implode(', ', $_POST['skin1']) : 'None';
$skinAid = $_POST['skin-aid'] ?? 'None';
$swalIssues = isset($_POST['swal1']) ? implode(', ', $_POST['swal1']) : 'None';
$swalAid = $_POST['swal-aid'] ?? 'None';
$healthPro = isset($_POST['prof1']) ? implode(', ', $_POST['prof1']) : 'None';
$proAid = $_POST['prof-aid'] ?? 'None';
$musPain = isset($_POST['mus1']) ? implode(', ', $_POST['mus1']) : 'None';
$musAid = $_POST['mus-aid'] ?? 'None';
$nerPain = isset($_POST['ner1']) ? implode(', ', $_POST['ner1']) : 'None';
$nerAid = $_POST['ner-aid'] ?? 'None';

// // Other health concerns
$fallHist = isset($_POST['fall1']) ? implode(', ', $_POST['fall1']) : 'None';
$fallAid = $_POST['fall1-aid'] ?? 'None';
$musIss = isset($_POST['mus-issue']) ? implode(', ', $_POST['mus-issue']) : 'None';
$musIssAid = $_POST['mus-issue-aid'] ?? 'None';
$othHelCon = isset($_POST['hel-ot']) ? implode(', ', $_POST['hel-ot']) : 'None';
$othHelAid = $_POST['hel-ot-aid'] ?? 'None';
$famActDet = $_POST['fam-act'] ?? 'None';
$famTimeDet = $_POST['fam-time'] ?? 'None';

$hobActDet = $_POST['hob-act'] ?? 'None';
$hobTimeDet = $_POST['hob-time'] ?? 'None';
$religionActivity = $_POST['reg-act'] ?? 'None';
$religionDetails = $_POST['reg-time'] ?? 'None';
$outingActivity = $_POST['out-act'] ?? 'None';
$outingDetails = $_POST['out-time'] ?? 'None';
$computerActivity = $_POST['comp-act'] ?? 'None';
$computerDetails = $_POST['comp-time'] ?? 'None';
$employmentActivity = $_POST['emp-act'] ?? 'None';
$employmentDetails = $_POST['emp-time'] ?? 'None';

// Sports
$sportsActivity = $_POST['sp-act'] ?? 'None';
$sportsDetails = $_POST['sp-time'] ?? 'None';
$musicActivity = $_POST['music-act'] ?? 'None';
$musicDetails = $_POST['music-time'] ?? 'None';
$moviesActivity = $_POST['mov-act'] ?? 'None';
$moviesDetails = $_POST['mov-time'] ?? 'None';
$wellBeingActivity = $_POST['well-act'] ?? 'None';
$wellBeingDetails = $_POST['well-time'] ?? 'None';
$foodActivity = $_POST['food-act'] ?? 'None';
$foodDetails = $_POST['food-time'] ?? 'None';
$sexActivity = $_POST['se-act'] ?? 'None';
$sexDetails = $_POST['se-time'] ?? 'None';
$otherActivity = $_POST['oth-act'] ?? 'None';
$otherDetails = $_POST['oth-time'] ?? 'None';

// Behavioral Requirements - Communication
$comReq = $_POST['beh1'] ?? 'None';
$behIssDet = $_POST['beh-issue'] ?? 'None';


$clientQuery="INSERT INTO `clientintakeform`(
    `FirstName`, `SecondName`, `DOB`, `NDISNumber`, `NDISFunding`, `PlanManager`, `Address`, `Contact`, `Email`, `ContactMethod`, `RepresentativeFirstName`, `RepresentativeSecondName`, `RelationshipToClient`, `RepresentativeAddress`, `RepresentativePhone`, `RepresentativeEmail`, `RepresentativeContactMethod`, `LivingSituation`, `AboriginalOrTorres`, `SupportPlan`, `PrimaryDiagnosis`, `SecondaryDiagnosis`, `Allergies`, `MedicalDiagnoses`, `ClientDoctor`, `LegalIssues`, `Communication`, `CulturallyOrLinguistically`, `CulturallyOrDiverse`, `LanguagesSpoken`, `Interpreter`, `Consent`, `Dietary`, `vegetarian`, `vegan`, `dietaryAllergies`, `SensoryIntolerances`, `FavouriteFood`, `MealTimes`, `Experience`, `MentalSupportServices`, `Triggers`, `TriggersManagementPlans`, `RelevantManagementPlans`, `PhysicalHealth`, `PhysicalAllergies`, `FollowingMedications`, `listofMedication`, `PhysicalSupportServices`, `TrafficAwareness`, `CommunicatingAppropriately`, `StayingWithGroup`, `PersonalSpace`, `HandsToMyself`, `TravellingSafely`, `FollowingInstructions`, `Swimming`, `SpendingMoney`, `SleepingRoutine`, `SwimmingCopy`, `SwimmingCopyC`, `PracticalSupportServices`, `RelevantBehaviourPlans`, `Strengths`, `Likes`, `Dislikes`, `WhenHappy`, `WhenUnhappy`, `CommunicationPreferences`, `PreviousSupportPlan`, `DesiredOutcomes`, `HealthActivity`, `HealthTreatments`, `SkinIntegrity`, `SkinTreatments`, `Swallowing`, `SwallowingTreatments`, `HealthProfessionals`, `ProfessionalsAids`, `MuscularPain`, `MuscularPainTreatments`, `NervePain`, `NervePainTreatments`, `Falls`, `FallsTreatments`, `MuscularIssues`, `MuscularIssuesAids`, `HealthConcerns`, `HealthConcernsAids`, `FamilyActivity`, `FamilyTimeSpent`, `HobbiesActivity`, `HobbiesTimeSpent`, `SpiritualityActivity`, `SpiritualityTimeSpent`, `OutingsActivity`, `OutingsTimeSpent`, `ComputerActivity`, `ComputerTimeSpent`, `EmploymentActivity`, `EmploymentTimeSpent`, `SportsActivity`, `SportsTimeSpent`, `MusicActivity`, `MusicTimeSpent`, `MoviesActivity`, `MoviesTimeSpent`, `WellBeingActivity`, `WellBeingTimeSpent`, `FoodActivity`, `FoodTimeSpent`, `IntimacyActivity`, `IntimacyTimeSpent`, `OtherActivity`, `OtherTimeSpent`, `BehaviouralCommunication`, `BehaviouralIssues`
) 
VALUES (
    '$clientFName', '$clientLName', '$clientDOB', '$ndisNum', '$ndisFunding', '$planMgr', '$clientAddr', '$clientContact', '$clientEmail', '$contactPref', '$repFName', '$repLName', '$repRel', '$repAddr', '$repPhone', '$repEmail', '$repContactPref', '$livingSituation', '$aboriginal', '$behaviorPlan', '$primaryDiagnosis', '$secondaryDiagnosis', '$allergies', '$medicalDiag', '$clientDoctor', '$legalIssues', '$communicationType', '$culturallyDiverse', '$awareValues', '$languagesSpoken', '$intr', '$part', '$diet', '$veg', '$vegan', '$dietAller', '$sensIntol', '$favFood', '$mealAssist', '$mentalExp', '$mentalSup', '$triggers', '$orgSupport', '$medSupport', '$conditions', '$allergies', '$meds', '$medList', '$phySup', '$trafficAware', '$commApprop', '$stayGroup', '$persSpace', '$keepHands', '$carSafety', '$followInst', '$waterSafety', '$spendMoney', '$sleepRoutine', '$addWaterSafety', '$addWaterSafety2', '$practicalSupport', '$providePlans', '$strengths', '$likes', '$dislikes', '$happyIndic', '$unhappyIndic', '$prefComm', '$preSup', '$achieveOpport', '$actBB', '$healthAid', '$skinInt', '$skinAid', '$swalIssues', '$swalAid', '$healthPro', '$proAid', '$musPain', '$musAid', '$nerPain', '$nerAid', '$fallHist', '$fallAid', '$musIss', '$musIssAid', '$othHelCon', '$othHelAid', '$famActDet', '$famTimeDet', '$hobActDet', '$hobTimeDet', '$religionActivity', '$religionDetails', '$outingActivity', '$outingDetails', '$computerActivity', '$computerDetails', '$employmentActivity', '$employmentDetails', '$sportsActivity', '$sportsDetails', '$musicActivity', '$musicDetails', '$moviesActivity', '$moviesDetails', '$wellBeingActivity', '$wellBeingDetails', '$foodActivity', '$foodDetails', '$sexActivity', '$sexDetails', '$otherActivity', '$otherDetails', '$comReq', '$behIssDet'
);";
     mysqli_query($con, $clientQuery);
     header('location:thankYou.html?sub');
    //  header('Location:ClientRegistrationForm.html?sub');
}
?>