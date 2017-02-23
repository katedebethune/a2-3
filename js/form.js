$(document).ready(function () {
    
    $("#help").click(function(e) {
        
        e.preventDefault();
        $("#assignmentHelp").toggleClass("hidden");
        $("#lectureHelp").toggleClass("hidden");
        $("#checkboxHelp").toggleClass("hidden");
        $("#nameHelp").toggleClass("hidden");
        
    });
    
});