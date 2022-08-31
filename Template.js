function ViewInspectionIDPage()
{
    var x0 = document.getElementById("StartInspectionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("InspectionIDPage");
    x1.style.display = "block";
    var x2 = document.getElementById("PreviousInspectionSummaryPage");
    x2.style.display = "none";
    var x3 = document.getElementById("ExpiryDatesCheckPage");
    x3.style.display = "none";
    var x4 = document.getElementById("VehicleDocumentsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("SafetyEquipmentChecklistPage");
    x5.style.display = "none";
    var x6 = document.getElementById("TyresInspectionPage");
    x6.style.display = "none";
    var x7 = document.getElementById("LightsInspectionPage");
    x7.style.display = "none";
    var x8 = document.getElementById("HornsBuzzersInspectionPage");
    x8.style.display = "none";
    var x9 = document.getElementById("SwitchesValvesCablesPage");
    x9.style.display = "none";
    var x10 = document.getElementById("CoversPipesGuardsPage");
    x10.style.display = "none";
    var x11 = document.getElementById("MiscellaneousPartsPage");
    x11.style.display = "none";
    var x12 = document.getElementById("AdditionalRemarksPage");
    x12.style.display = "none";
    var x13 = document.getElementById("ConclusiveRemarksPage");
    x13.style.display = "none";
    var x14 = document.getElementById("CurrentInspectionSummaryPage");
    x14.style.display = "none";
    var x15 = document.getElementById("InspectionCompletePage");
    x15.style.display = "none";
}

function ViewPreviousInspectionSummaryPage()
{
    var x0 = document.getElementById("StartInspectionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("InspectionIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("PreviousInspectionSummaryPage");
    x2.style.display = "block";
    var x3 = document.getElementById("ExpiryDatesCheckPage");
    x3.style.display = "none";
    var x4 = document.getElementById("VehicleDocumentsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("SafetyEquipmentChecklistPage");
    x5.style.display = "none";
    var x6 = document.getElementById("TyresInspectionPage");
    x6.style.display = "none";
    var x7 = document.getElementById("LightsInspectionPage");
    x7.style.display = "none";
    var x8 = document.getElementById("HornsBuzzersInspectionPage");
    x8.style.display = "none";
    var x9 = document.getElementById("SwitchesValvesCablesPage");
    x9.style.display = "none";
    var x10 = document.getElementById("CoversPipesGuardsPage");
    x10.style.display = "none";
    var x11 = document.getElementById("MiscellaneousPartsPage");
    x11.style.display = "none";
    var x12 = document.getElementById("AdditionalRemarksPage");
    x12.style.display = "none";
    var x13 = document.getElementById("ConclusiveRemarksPage");
    x13.style.display = "none";
    var x14 = document.getElementById("CurrentInspectionSummaryPage");
    x14.style.display = "none";
    var x15 = document.getElementById("InspectionCompletePage");
    x15.style.display = "none";
    GetPreviousInspectionSummaryPageOne();
    GetPreviousInspectionSummaryPageTwo();
}

function GetPreviousInspectionSummaryPageOne()
{
    //Get value of TLName using the id #TLName. Then put it in a variable like so.
    let TLName = $('#TLName').val();
    //Initiate AJAX POST request
    $.ajax
    (
        {
            type: "POST",
            url: 'vehicletypeinfo.php', //PHP file where data from database is retrieved
            data: {TLName:TLName},
            success: function(response)
            {
                //This is where we receive our response from the said php file
                //JSON.parse basically makes the response readible for the javascript if it's from another language like we have PHP
                let result = JSON.parse(response);
                $('#PreviousInspectionSummaryTLName').html(result['TLName']); //Format: $('#ID of element we want to give this retrieved value to').html(result['Field in database whose value we want to fill in the element']);
                $('#PreviousInspectionSummaryHaulierName').html(result['HaulierName']);
                $('#PreviousInspectionSummaryInspectionDate').html(result['LastInspectionDate']);
                $('#PreviousInspectionSummaryLastCalibrationTestExpiryDate').html(result['LastCalibrationTestExpiryDate']);
                $('#PreviousInspectionSummaryExplosivesLicenseExpiryDate').html(result['ExplosivesLicenseExpiryDate']);
                $('#PreviousInspectionSummaryLastHydroTestExpiryDate').html(result['LastHydroTestExpiryDate']);
                //This is for you to see the array we receive from the php file.
                console.log(result);
            }
        }
    )
}

function GetPreviousInspectionSummaryPageTwo()
{
    let TLName = $('#PreviousInspectionSummaryTLName').val();
    //console.log("Hereeee");
    $.ajax
    (
        {
            type: "POST",
            url: 'InspectionChecklistPreviousSummaryPageTwoExtraction.php', //PHP file where data from database is retrieved
            data: {TLName:TLName},
            success: function(response)
            {
                let result = JSON.parse(response);
                $('#PreviousInspectionSummaryLocation').html(result['Location']);
                $('#PreviousInspectionSummaryInspectionSummary').html(result['InspectionSummary']);
                $('#PreviousInspectionSummaryComplianceStatus').html(result['ComplianceStatus']);
                $('#PreviousInspectionSummaryActionStatus').html(result['ActionStatus']);
                $('#PreviousInspectionSummaryNotify').html(result['Notify']);
                //This is for you to see the array we receive from the php file.
                console.log(result);
            }
        }
    )
}

function ViewExpiryDatesCheckPage()
{
    var x0 = document.getElementById("StartInspectionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("InspectionIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("PreviousInspectionSummaryPage");
    x2.style.display = "none";
    var x3 = document.getElementById("ExpiryDatesCheckPage");
    x3.style.display = "block";
    var x4 = document.getElementById("VehicleDocumentsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("SafetyEquipmentChecklistPage");
    x5.style.display = "none";
    var x6 = document.getElementById("TyresInspectionPage");
    x6.style.display = "none";
    var x7 = document.getElementById("LightsInspectionPage");
    x7.style.display = "none";
    var x8 = document.getElementById("HornsBuzzersInspectionPage");
    x8.style.display = "none";
    var x9 = document.getElementById("SwitchesValvesCablesPage");
    x9.style.display = "none";
    var x10 = document.getElementById("CoversPipesGuardsPage");
    x10.style.display = "none";
    var x11 = document.getElementById("MiscellaneousPartsPage");
    x11.style.display = "none";
    var x12 = document.getElementById("AdditionalRemarksPage");
    x12.style.display = "none";
    var x13 = document.getElementById("ConclusiveRemarksPage");
    x13.style.display = "none";
    var x14 = document.getElementById("CurrentInspectionSummaryPage");
    x14.style.display = "none";
    var x15 = document.getElementById("InspectionCompletePage");
    x15.style.display = "none";
}

function ViewVehicleDocumentsPage()
{
    var x0 = document.getElementById("StartInspectionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("InspectionIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("PreviousInspectionSummaryPage");
    x2.style.display = "none";
    var x3 = document.getElementById("ExpiryDatesCheckPage");
    x3.style.display = "none";
    var x4 = document.getElementById("VehicleDocumentsPage");
    x4.style.display = "block";
    var x5 = document.getElementById("SafetyEquipmentChecklistPage");
    x5.style.display = "none";
    var x6 = document.getElementById("TyresInspectionPage");
    x6.style.display = "none";
    var x7 = document.getElementById("LightsInspectionPage");
    x7.style.display = "none";
    var x8 = document.getElementById("HornsBuzzersInspectionPage");
    x8.style.display = "none";
    var x9 = document.getElementById("SwitchesValvesCablesPage");
    x9.style.display = "none";
    var x10 = document.getElementById("CoversPipesGuardsPage");
    x10.style.display = "none";
    var x11 = document.getElementById("MiscellaneousPartsPage");
    x11.style.display = "none";
    var x12 = document.getElementById("AdditionalRemarksPage");
    x12.style.display = "none";
    var x13 = document.getElementById("ConclusiveRemarksPage");
    x13.style.display = "none";
    var x14 = document.getElementById("CurrentInspectionSummaryPage");
    x14.style.display = "none";
    var x15 = document.getElementById("InspectionCompletePage");
    x15.style.display = "none";
}

function ViewSafetyEquipmentChecklistPage()
{
    var x0 = document.getElementById("StartInspectionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("InspectionIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("PreviousInspectionSummaryPage");
    x2.style.display = "none";
    var x3 = document.getElementById("ExpiryDatesCheckPage");
    x3.style.display = "none";
    var x4 = document.getElementById("VehicleDocumentsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("SafetyEquipmentChecklistPage");
    x5.style.display = "block";
    var x6 = document.getElementById("TyresInspectionPage");
    x6.style.display = "none";
    var x7 = document.getElementById("LightsInspectionPage");
    x7.style.display = "none";
    var x8 = document.getElementById("HornsBuzzersInspectionPage");
    x8.style.display = "none";
    var x9 = document.getElementById("SwitchesValvesCablesPage");
    x9.style.display = "none";
    var x10 = document.getElementById("CoversPipesGuardsPage");
    x10.style.display = "none";
    var x11 = document.getElementById("MiscellaneousPartsPage");
    x11.style.display = "none";
    var x12 = document.getElementById("AdditionalRemarksPage");
    x12.style.display = "none";
    var x13 = document.getElementById("ConclusiveRemarksPage");
    x13.style.display = "none";
    var x14 = document.getElementById("CurrentInspectionSummaryPage");
    x14.style.display = "none";
    var x15 = document.getElementById("InspectionCompletePage");
    x15.style.display = "none";
}

function ViewTyresInspectionPage()
{
    var x0 = document.getElementById("StartInspectionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("InspectionIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("PreviousInspectionSummaryPage");
    x2.style.display = "none";
    var x3 = document.getElementById("ExpiryDatesCheckPage");
    x3.style.display = "none";
    var x4 = document.getElementById("VehicleDocumentsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("SafetyEquipmentChecklistPage");
    x5.style.display = "none";
    var x6 = document.getElementById("TyresInspectionPage");
    x6.style.display = "block";
    var x7 = document.getElementById("LightsInspectionPage");
    x7.style.display = "none";
    var x8 = document.getElementById("HornsBuzzersInspectionPage");
    x8.style.display = "none";
    var x9 = document.getElementById("SwitchesValvesCablesPage");
    x9.style.display = "none";
    var x10 = document.getElementById("CoversPipesGuardsPage");
    x10.style.display = "none";
    var x11 = document.getElementById("MiscellaneousPartsPage");
    x11.style.display = "none";
    var x12 = document.getElementById("AdditionalRemarksPage");
    x12.style.display = "none";
    var x13 = document.getElementById("ConclusiveRemarksPage");
    x13.style.display = "none";
    var x14 = document.getElementById("CurrentInspectionSummaryPage");
    x14.style.display = "none";
    var x15 = document.getElementById("InspectionCompletePage");
    x15.style.display = "none";
}

function ViewLightsInspectionPage()
{
    var x0 = document.getElementById("StartInspectionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("InspectionIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("PreviousInspectionSummaryPage");
    x2.style.display = "none";
    var x3 = document.getElementById("ExpiryDatesCheckPage");
    x3.style.display = "none";
    var x4 = document.getElementById("VehicleDocumentsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("SafetyEquipmentChecklistPage");
    x5.style.display = "none";
    var x6 = document.getElementById("TyresInspectionPage");
    x6.style.display = "none";
    var x7 = document.getElementById("LightsInspectionPage");
    x7.style.display = "block";
    var x8 = document.getElementById("HornsBuzzersInspectionPage");
    x8.style.display = "none";
    var x9 = document.getElementById("SwitchesValvesCablesPage");
    x9.style.display = "none";
    var x10 = document.getElementById("CoversPipesGuardsPage");
    x10.style.display = "none";
    var x11 = document.getElementById("MiscellaneousPartsPage");
    x11.style.display = "none";
    var x12 = document.getElementById("AdditionalRemarksPage");
    x12.style.display = "none";
    var x13 = document.getElementById("ConclusiveRemarksPage");
    x13.style.display = "none";
    var x14 = document.getElementById("CurrentInspectionSummaryPage");
    x14.style.display = "none";
    var x15 = document.getElementById("InspectionCompletePage");
    x15.style.display = "none";
}

function ViewHornsBuzzersInspectionPage()
{
    var x0 = document.getElementById("StartInspectionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("InspectionIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("PreviousInspectionSummaryPage");
    x2.style.display = "none";
    var x3 = document.getElementById("ExpiryDatesCheckPage");
    x3.style.display = "none";
    var x4 = document.getElementById("VehicleDocumentsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("SafetyEquipmentChecklistPage");
    x5.style.display = "none";
    var x6 = document.getElementById("TyresInspectionPage");
    x6.style.display = "none";
    var x7 = document.getElementById("LightsInspectionPage");
    x7.style.display = "none";
    var x8 = document.getElementById("HornsBuzzersInspectionPage");
    x8.style.display = "block";
    var x9 = document.getElementById("SwitchesValvesCablesPage");
    x9.style.display = "none";
    var x10 = document.getElementById("CoversPipesGuardsPage");
    x10.style.display = "none";
    var x11 = document.getElementById("MiscellaneousPartsPage");
    x11.style.display = "none";
    var x12 = document.getElementById("AdditionalRemarksPage");
    x12.style.display = "none";
    var x13 = document.getElementById("ConclusiveRemarksPage");
    x13.style.display = "none";
    var x14 = document.getElementById("CurrentInspectionSummaryPage");
    x14.style.display = "none";
    var x15 = document.getElementById("InspectionCompletePage");
    x15.style.display = "none";
}

function ViewSwitchesValvesCablesPage()
{
    var x0 = document.getElementById("StartInspectionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("InspectionIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("PreviousInspectionSummaryPage");
    x2.style.display = "none";
    var x3 = document.getElementById("ExpiryDatesCheckPage");
    x3.style.display = "none";
    var x4 = document.getElementById("VehicleDocumentsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("SafetyEquipmentChecklistPage");
    x5.style.display = "none";
    var x6 = document.getElementById("TyresInspectionPage");
    x6.style.display = "none";
    var x7 = document.getElementById("LightsInspectionPage");
    x7.style.display = "none";
    var x8 = document.getElementById("HornsBuzzersInspectionPage");
    x8.style.display = "none";
    var x9 = document.getElementById("SwitchesValvesCablesPage");
    x9.style.display = "block";
    var x10 = document.getElementById("CoversPipesGuardsPage");
    x10.style.display = "none";
    var x11 = document.getElementById("MiscellaneousPartsPage");
    x11.style.display = "none";
    var x12 = document.getElementById("AdditionalRemarksPage");
    x12.style.display = "none";
    var x13 = document.getElementById("ConclusiveRemarksPage");
    x13.style.display = "none";
    var x14 = document.getElementById("CurrentInspectionSummaryPage");
    x14.style.display = "none";
    var x15 = document.getElementById("InspectionCompletePage");
    x15.style.display = "none";
}

function ViewCoversPipesGuardsPage()
{
    var x0 = document.getElementById("StartInspectionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("InspectionIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("PreviousInspectionSummaryPage");
    x2.style.display = "none";
    var x3 = document.getElementById("ExpiryDatesCheckPage");
    x3.style.display = "none";
    var x4 = document.getElementById("VehicleDocumentsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("SafetyEquipmentChecklistPage");
    x5.style.display = "none";
    var x6 = document.getElementById("TyresInspectionPage");
    x6.style.display = "none";
    var x7 = document.getElementById("LightsInspectionPage");
    x7.style.display = "none";
    var x8 = document.getElementById("HornsBuzzersInspectionPage");
    x8.style.display = "none";
    var x9 = document.getElementById("SwitchesValvesCablesPage");
    x9.style.display = "none";
    var x10 = document.getElementById("CoversPipesGuardsPage");
    x10.style.display = "block";
    var x11 = document.getElementById("MiscellaneousPartsPage");
    x11.style.display = "none";
    var x12 = document.getElementById("AdditionalRemarksPage");
    x12.style.display = "none";
    var x13 = document.getElementById("ConclusiveRemarksPage");
    x13.style.display = "none";
    var x14 = document.getElementById("CurrentInspectionSummaryPage");
    x14.style.display = "none";
    var x15 = document.getElementById("InspectionCompletePage");
    x15.style.display = "none";
}

function ViewMiscellaneousPartsPage()
{
    var x0 = document.getElementById("StartInspectionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("InspectionIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("PreviousInspectionSummaryPage");
    x2.style.display = "none";
    var x3 = document.getElementById("ExpiryDatesCheckPage");
    x3.style.display = "none";
    var x4 = document.getElementById("VehicleDocumentsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("SafetyEquipmentChecklistPage");
    x5.style.display = "none";
    var x6 = document.getElementById("TyresInspectionPage");
    x6.style.display = "none";
    var x7 = document.getElementById("LightsInspectionPage");
    x7.style.display = "none";
    var x8 = document.getElementById("HornsBuzzersInspectionPage");
    x8.style.display = "none";
    var x9 = document.getElementById("SwitchesValvesCablesPage");
    x9.style.display = "none";
    var x10 = document.getElementById("CoversPipesGuardsPage");
    x10.style.display = "none";
    var x11 = document.getElementById("MiscellaneousPartsPage");
    x11.style.display = "block";
    var x12 = document.getElementById("AdditionalRemarksPage");
    x12.style.display = "none";
    var x13 = document.getElementById("ConclusiveRemarksPage");
    x13.style.display = "none";
    var x14 = document.getElementById("CurrentInspectionSummaryPage");
    x14.style.display = "none";
    var x15 = document.getElementById("InspectionCompletePage");
    x15.style.display = "none";
}

function ViewAdditionalRemarksPage()
{
    var x0 = document.getElementById("StartInspectionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("InspectionIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("PreviousInspectionSummaryPage");
    x2.style.display = "none";
    var x3 = document.getElementById("ExpiryDatesCheckPage");
    x3.style.display = "none";
    var x4 = document.getElementById("VehicleDocumentsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("SafetyEquipmentChecklistPage");
    x5.style.display = "none";
    var x6 = document.getElementById("TyresInspectionPage");
    x6.style.display = "none";
    var x7 = document.getElementById("LightsInspectionPage");
    x7.style.display = "none";
    var x8 = document.getElementById("HornsBuzzersInspectionPage");
    x8.style.display = "none";
    var x9 = document.getElementById("SwitchesValvesCablesPage");
    x9.style.display = "none";
    var x10 = document.getElementById("CoversPipesGuardsPage");
    x10.style.display = "none";
    var x11 = document.getElementById("MiscellaneousPartsPage");
    x11.style.display = "none";
    var x12 = document.getElementById("AdditionalRemarksPage");
    x12.style.display = "block";
    var x13 = document.getElementById("ConclusiveRemarksPage");
    x13.style.display = "none";
    var x14 = document.getElementById("CurrentInspectionSummaryPage");
    x14.style.display = "none";
    var x15 = document.getElementById("InspectionCompletePage");
    x15.style.display = "none";
}

function ViewConsclusiveRemarksPage()
{
    var x0 = document.getElementById("StartInspectionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("InspectionIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("PreviousInspectionSummaryPage");
    x2.style.display = "none";
    var x3 = document.getElementById("ExpiryDatesCheckPage");
    x3.style.display = "none";
    var x4 = document.getElementById("VehicleDocumentsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("SafetyEquipmentChecklistPage");
    x5.style.display = "none";
    var x6 = document.getElementById("TyresInspectionPage");
    x6.style.display = "none";
    var x7 = document.getElementById("LightsInspectionPage");
    x7.style.display = "none";
    var x8 = document.getElementById("HornsBuzzersInspectionPage");
    x8.style.display = "none";
    var x9 = document.getElementById("SwitchesValvesCablesPage");
    x9.style.display = "none";
    var x10 = document.getElementById("CoversPipesGuardsPage");
    x10.style.display = "none";
    var x11 = document.getElementById("MiscellaneousPartsPage");
    x11.style.display = "none";
    var x12 = document.getElementById("AdditionalRemarksPage");
    x12.style.display = "none";
    var x13 = document.getElementById("ConclusiveRemarksPage");
    x13.style.display = "block";
    var x14 = document.getElementById("CurrentInspectionSummaryPage");
    x14.style.display = "none";
    var x15 = document.getElementById("InspectionCompletePage");
    x15.style.display = "none";
}

function ViewCurrentInspectionSummaryPage()
{
    var x0 = document.getElementById("StartInspectionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("InspectionIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("PreviousInspectionSummaryPage");
    x2.style.display = "none";
    var x3 = document.getElementById("ExpiryDatesCheckPage");
    x3.style.display = "none";
    var x4 = document.getElementById("VehicleDocumentsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("SafetyEquipmentChecklistPage");
    x5.style.display = "none";
    var x6 = document.getElementById("TyresInspectionPage");
    x6.style.display = "none";
    var x7 = document.getElementById("LightsInspectionPage");
    x7.style.display = "none";
    var x8 = document.getElementById("HornsBuzzersInspectionPage");
    x8.style.display = "none";
    var x9 = document.getElementById("SwitchesValvesCablesPage");
    x9.style.display = "none";
    var x10 = document.getElementById("CoversPipesGuardsPage");
    x10.style.display = "none";
    var x11 = document.getElementById("MiscellaneousPartsPage");
    x11.style.display = "none";
    var x12 = document.getElementById("AdditionalRemarksPage");
    x12.style.display = "none";
    var x13 = document.getElementById("ConclusiveRemarksPage");
    x13.style.display = "none";
    var x14 = document.getElementById("CurrentInspectionSummaryPage");
    x14.style.display = "block";
    var x15 = document.getElementById("InspectionCompletePage");
    x15.style.display = "none";
}

function ViewInspectionCompletePage()
{
    var x0 = document.getElementById("StartInspectionPage");
    x0.style.display = "none";
    var x1 = document.getElementById("InspectionIDPage");
    x1.style.display = "none";
    var x2 = document.getElementById("PreviousInspectionSummaryPage");
    x2.style.display = "none";
    var x3 = document.getElementById("ExpiryDatesCheckPage");
    x3.style.display = "none";
    var x4 = document.getElementById("VehicleDocumentsPage");
    x4.style.display = "none";
    var x5 = document.getElementById("SafetyEquipmentChecklistPage");
    x5.style.display = "none";
    var x6 = document.getElementById("TyresInspectionPage");
    x6.style.display = "none";
    var x7 = document.getElementById("LightsInspectionPage");
    x7.style.display = "none";
    var x8 = document.getElementById("HornsBuzzersInspectionPage");
    x8.style.display = "none";
    var x9 = document.getElementById("SwitchesValvesCablesPage");
    x9.style.display = "none";
    var x10 = document.getElementById("CoversPipesGuardsPage");
    x10.style.display = "none";
    var x11 = document.getElementById("MiscellaneousPartsPage");
    x11.style.display = "none";
    var x12 = document.getElementById("AdditionalRemarksPage");
    x12.style.display = "none";
    var x13 = document.getElementById("ConclusiveRemarksPage");
    x13.style.display = "none";
    var x14 = document.getElementById("CurrentInspectionSummaryPage");
    x14.style.display = "none";
    var x15 = document.getElementById("InspectionCompletePage");
    x15.style.display = "block";
    document.getElementById("SubmitButton").click();
}
