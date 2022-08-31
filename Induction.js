function ViewVehicleIDPage()
{
    var x0 = document.getElementById("StartInductionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("VehicleIDPage");
    x1.style.display = "block";
    var x2 = document.getElementById("VehicleTypePage");
    x2.style.display = "none";
    var x3 = document.getElementById("VehicleMeasurementsPage");
    x3.style.display = "none";
    var x4 = document.getElementById("TruckPrimeMoverDetailsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("TankTrailerDetailsPage");
    x5.style.display = "none";
    var x6 = document.getElementById("CompartmentDetailsPage");
    x6.style.display = "none";
    var x7 = document.getElementById("FeaturesChecklistPage");
    x7.style.display = "none";
    var x8 = document.getElementById("VehiclePartsDetailsPage");
    x8.style.display = "none";
    var x9 = document.getElementById("CertificatesReportsPage");
    x9.style.display = "none";
    var x10 = document.getElementById("ImportantDatesPage");
    x10.style.display = "none";
    var x11 = document.getElementById("VehicleStatusPage");
    x11.style.display = "none";
    var x12 = document.getElementById("InductionCompletePage");
    x12.style.display = "none";
}

function ViewVehicleTypePage()
{
    var x0 = document.getElementById("StartInductionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("VehicleIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("VehicleTypePage");
    x2.style.display = "block";
    var x3 = document.getElementById("VehicleMeasurementsPage");
    x3.style.display = "none";
    var x4 = document.getElementById("TruckPrimeMoverDetailsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("TankTrailerDetailsPage");
    x5.style.display = "none";
    var x6 = document.getElementById("CompartmentDetailsPage");
    x6.style.display = "none";
    var x7 = document.getElementById("FeaturesChecklistPage");
    x7.style.display = "none";
    var x8 = document.getElementById("VehiclePartsDetailsPage");
    x8.style.display = "none";
    var x9 = document.getElementById("CertificatesReportsPage");
    x9.style.display = "none";
    var x10 = document.getElementById("ImportantDatesPage");
    x10.style.display = "none";
    var x11 = document.getElementById("VehicleStatusPage");
    x11.style.display = "none";
    var x12 = document.getElementById("InductionCompletePage");
    x12.style.display = "none";

    //This triggers the ajax function
    //vtypeinfo();

    // console.log('hello');
}

function vtypeinfo() {

    //This is where the magic happens

    //I have picked up the TLName and HaulierName via their IDs and populated them in variables.
    
    let TLName = $('#TLName').val();
    let HaulierName = $('#HaulierName').val();
        

    //I initiate the ajax post request to the desired php file which will retrieve our data

    //You can see in the data property underneath the url property I have defined the namespaces for the individual variables
    //in order to access when they are received in the php file

    $.ajax(
        {
        type: "POST",
        url: 'vehicletypeinfo.php',
        data: {TLName:TLName, HaulierName: HaulierName},
        success: function(response)
        {
            //This is where we receive our response from the said php file

            //JSON.parse basically makes the response readible for the javascript if it's from another language like we have PHP
            let result = JSON.parse(response);

            $('#TLNameres').html(result['TLName']);
            $('#HNameres').html(result['HaulierName']);
            $('#LIDateres').html(result['LastInspectionDate']);
            $('#CStatusres').html(result['CurrentComplianceStatus']);
            
            //This is for you to see the array we receive from the php file.
            console.log(result);

            //I have listed a few IDs here and have already set some up stairs to be populated with data 
            //TLNameres (done), HNameres (done), LIDateres (done), FDetectres ARemarksres CStatusres (done), ATakenres NPartyres
       }
   }
   );
 
}

function ViewVehicleMeasurementsPage()
{
    var x0 = document.getElementById("StartInductionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("VehicleIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("VehicleTypePage");
    x2.style.display = "none";
    var x3 = document.getElementById("VehicleMeasurementsPage");
    x3.style.display = "block";
    var x4 = document.getElementById("TruckPrimeMoverDetailsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("TankTrailerDetailsPage");
    x5.style.display = "none";
    var x6 = document.getElementById("CompartmentDetailsPage");
    x6.style.display = "none";
    var x7 = document.getElementById("FeaturesChecklistPage");
    x7.style.display = "none";
    var x8 = document.getElementById("VehiclePartsDetailsPage");
    x8.style.display = "none";
    var x9 = document.getElementById("CertificatesReportsPage");
    x9.style.display = "none";
    var x10 = document.getElementById("ImportantDatesPage");
    x10.style.display = "none";
    var x11 = document.getElementById("VehicleStatusPage");
    x11.style.display = "none";
    var x12 = document.getElementById("InductionCompletePage");
    x12.style.display = "none";
}

function ViewTruckPrimeMoverDetailsPage()
{
    var x0 = document.getElementById("StartInductionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("VehicleIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("VehicleTypePage");
    x2.style.display = "none";
    var x3 = document.getElementById("VehicleMeasurementsPage");
    x3.style.display = "none";
    var x4 = document.getElementById("TruckPrimeMoverDetailsPage");
    x4.style.display = "block";
    var x5 = document.getElementById("TankTrailerDetailsPage");
    x5.style.display = "none";
    var x6 = document.getElementById("CompartmentDetailsPage");
    x6.style.display = "none";
    var x7 = document.getElementById("FeaturesChecklistPage");
    x7.style.display = "none";
    var x8 = document.getElementById("VehiclePartsDetailsPage");
    x8.style.display = "none";
    var x9 = document.getElementById("CertificatesReportsPage");
    x9.style.display = "none";
    var x10 = document.getElementById("ImportantDatesPage");
    x10.style.display = "none";
    var x11 = document.getElementById("VehicleStatusPage");
    x11.style.display = "none";
    var x12 = document.getElementById("InductionCompletePage");
    x12.style.display = "none";
}

function ViewTankTrailerDetailsPage()
{
    var x0 = document.getElementById("StartInductionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("VehicleIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("VehicleTypePage");
    x2.style.display = "none";
    var x3 = document.getElementById("VehicleMeasurementsPage");
    x3.style.display = "none";
    var x4 = document.getElementById("TruckPrimeMoverDetailsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("TankTrailerDetailsPage");
    x5.style.display = "block";
    var x6 = document.getElementById("CompartmentDetailsPage");
    x6.style.display = "none";
    var x7 = document.getElementById("FeaturesChecklistPage");
    x7.style.display = "none";
    var x8 = document.getElementById("VehiclePartsDetailsPage");
    x8.style.display = "none";
    var x9 = document.getElementById("CertificatesReportsPage");
    x9.style.display = "none";
    var x10 = document.getElementById("ImportantDatesPage");
    x10.style.display = "none";
    var x11 = document.getElementById("VehicleStatusPage");
    x11.style.display = "none";
    var x12 = document.getElementById("InductionCompletePage");
    x12.style.display = "none";
}

function ViewCompartmentDetailsPage()
{
    var x0 = document.getElementById("StartInductionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("VehicleIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("VehicleTypePage");
    x2.style.display = "none";
    var x3 = document.getElementById("VehicleMeasurementsPage");
    x3.style.display = "none";
    var x4 = document.getElementById("TruckPrimeMoverDetailsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("TankTrailerDetailsPage");
    x5.style.display = "none";
    var x6 = document.getElementById("CompartmentDetailsPage");
    x6.style.display = "block";
    var x7 = document.getElementById("FeaturesChecklistPage");
    x7.style.display = "none";
    var x8 = document.getElementById("VehiclePartsDetailsPage");
    x8.style.display = "none";
    var x9 = document.getElementById("CertificatesReportsPage");
    x9.style.display = "none";
    var x10 = document.getElementById("ImportantDatesPage");
    x10.style.display = "none";
    var x11 = document.getElementById("VehicleStatusPage");
    x11.style.display = "none";
    var x12 = document.getElementById("InductionCompletePage");
    x12.style.display = "none";
}

function ViewFeaturesChecklistPage()
{
    var x0 = document.getElementById("StartInductionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("VehicleIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("VehicleTypePage");
    x2.style.display = "none";
    var x3 = document.getElementById("VehicleMeasurementsPage");
    x3.style.display = "none";
    var x4 = document.getElementById("TruckPrimeMoverDetailsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("TankTrailerDetailsPage");
    x5.style.display = "none";
    var x6 = document.getElementById("CompartmentDetailsPage");
    x6.style.display = "none";
    var x7 = document.getElementById("FeaturesChecklistPage");
    x7.style.display = "block";
    var x8 = document.getElementById("VehiclePartsDetailsPage");
    x8.style.display = "none";
    var x9 = document.getElementById("CertificatesReportsPage");
    x9.style.display = "none";
    var x10 = document.getElementById("ImportantDatesPage");
    x10.style.display = "none";
    var x11 = document.getElementById("VehicleStatusPage");
    x11.style.display = "none";
    var x12 = document.getElementById("InductionCompletePage");
    x12.style.display = "none";
}

function ViewVehiclePartsDetailsPage()
{
    var x0 = document.getElementById("StartInductionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("VehicleIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("VehicleTypePage");
    x2.style.display = "none";
    var x3 = document.getElementById("VehicleMeasurementsPage");
    x3.style.display = "none";
    var x4 = document.getElementById("TruckPrimeMoverDetailsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("TankTrailerDetailsPage");
    x5.style.display = "none";
    var x6 = document.getElementById("CompartmentDetailsPage");
    x6.style.display = "none";
    var x7 = document.getElementById("FeaturesChecklistPage");
    x7.style.display = "none";
    var x8 = document.getElementById("VehiclePartsDetailsPage");
    x8.style.display = "block";
    var x9 = document.getElementById("CertificatesReportsPage");
    x9.style.display = "none";
    var x10 = document.getElementById("ImportantDatesPage");
    x10.style.display = "none";
    var x11 = document.getElementById("VehicleStatusPage");
    x11.style.display = "none";
    var x12 = document.getElementById("InductionCompletePage");
    x12.style.display = "none";
}

function ViewCertificatesReportsPage()
{
    var x0 = document.getElementById("StartInductionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("VehicleIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("VehicleTypePage");
    x2.style.display = "none";
    var x3 = document.getElementById("VehicleMeasurementsPage");
    x3.style.display = "none";
    var x4 = document.getElementById("TruckPrimeMoverDetailsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("TankTrailerDetailsPage");
    x5.style.display = "none";
    var x6 = document.getElementById("CompartmentDetailsPage");
    x6.style.display = "none";
    var x7 = document.getElementById("FeaturesChecklistPage");
    x7.style.display = "none";
    var x8 = document.getElementById("VehiclePartsDetailsPage");
    x8.style.display = "none";
    var x9 = document.getElementById("CertificatesReportsPage");
    x9.style.display = "block";
    var x10 = document.getElementById("ImportantDatesPage");
    x10.style.display = "none";
    var x11 = document.getElementById("VehicleStatusPage");
    x11.style.display = "none";
    var x12 = document.getElementById("InductionCompletePage");
    x12.style.display = "none";
}

function ViewImportantDatesPage()
{
    var x0 = document.getElementById("StartInductionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("VehicleIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("VehicleTypePage");
    x2.style.display = "none";
    var x3 = document.getElementById("VehicleMeasurementsPage");
    x3.style.display = "none";
    var x4 = document.getElementById("TruckPrimeMoverDetailsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("TankTrailerDetailsPage");
    x5.style.display = "none";
    var x6 = document.getElementById("CompartmentDetailsPage");
    x6.style.display = "none";
    var x7 = document.getElementById("FeaturesChecklistPage");
    x7.style.display = "none";
    var x8 = document.getElementById("VehiclePartsDetailsPage");
    x8.style.display = "none";
    var x9 = document.getElementById("CertificatesReportsPage");
    x9.style.display = "none";
    var x10 = document.getElementById("ImportantDatesPage");
    x10.style.display = "block";
    var x11 = document.getElementById("VehicleStatusPage");
    x11.style.display = "none";
    var x12 = document.getElementById("InductionCompletePage");
    x12.style.display = "none";
}

function ViewVehicleStatusPage()
{
    var x0 = document.getElementById("StartInductionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("VehicleIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("VehicleTypePage");
    x2.style.display = "none";
    var x3 = document.getElementById("VehicleMeasurementsPage");
    x3.style.display = "none";
    var x4 = document.getElementById("TruckPrimeMoverDetailsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("TankTrailerDetailsPage");
    x5.style.display = "none";
    var x6 = document.getElementById("CompartmentDetailsPage");
    x6.style.display = "none";
    var x7 = document.getElementById("FeaturesChecklistPage");
    x7.style.display = "none";
    var x8 = document.getElementById("VehiclePartsDetailsPage");
    x8.style.display = "none";
    var x9 = document.getElementById("CertificatesReportsPage");
    x9.style.display = "none";
    var x10 = document.getElementById("ImportantDatesPage");
    x10.style.display = "none";
    var x11 = document.getElementById("VehicleStatusPage");
    x11.style.display = "block";
    var x12 = document.getElementById("InductionCompletePage");
    x12.style.display = "none";
}

function ViewInductionCompletePage()
{
    var x0 = document.getElementById("StartInductionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("VehicleIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("VehicleTypePage");
    x2.style.display = "none";
    var x3 = document.getElementById("VehicleMeasurementsPage");
    x3.style.display = "none";
    var x4 = document.getElementById("TruckPrimeMoverDetailsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("TankTrailerDetailsPage");
    x5.style.display = "none";
    var x6 = document.getElementById("CompartmentDetailsPage");
    x6.style.display = "none";
    var x7 = document.getElementById("FeaturesChecklistPage");
    x7.style.display = "none";
    var x8 = document.getElementById("VehiclePartsDetailsPage");
    x8.style.display = "none";
    var x9 = document.getElementById("CertificatesReportsPage");
    x9.style.display = "none";
    var x10 = document.getElementById("ImportantDatesPage");
    x10.style.display = "none";
    var x11 = document.getElementById("VehicleStatusPage");
    x11.style.display = "none";
    var x12 = document.getElementById("InductionCompletePage");
    x12.style.display = "block";
    document.getElementById("SubmitButton").click();
}