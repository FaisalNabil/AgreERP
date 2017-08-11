$(document).ready(function(){

     $('#aboutCrops').click(function(event){
         event.preventDefault();

          var week = $("#week option:selected").val();
          var TextAreaValue = $("textarea#ValueAboutWeek").val();

          if (TextAreaValue.length > 0) {
             var tableRow = "<tr>"+ "<td>"+week+"</td>"+ "<td>"+TextAreaValue+"</td>"+"</tr>";
             $("#weekAndTask").append(tableRow); 
          }else{
            alert("Please Add some value");
          }
           
     });
     // insecticide
     $('#insecticideBtn').click(function(event){
         event.preventDefault();
          
          var week = $("#weekName option:selected").val();
          var TextAreaValue = $("textarea#taskThisWeek").val();

          if (TextAreaValue.length > 0) {
             var tableRow = "<tr>"+ "<td>"+week+"</td>"+ "<td>"+TextAreaValue+"</td>"+"</tr>";
             $("#insecticideList").append(tableRow); 
          }else{
            alert("Please Add some value");
          }
           
     });

     // othertask
     $('#otherTaskBtn').click(function(event){
         event.preventDefault();
          
          var week = $("#otherTaskweekName option:selected").val();
          var TextAreaValue = $("textarea#otherTaskThisWeek").val();

          if (TextAreaValue.length > 0) {
             var tableRow = "<tr>"+ "<td>"+week+"</td>"+ "<td>"+TextAreaValue+"</td>"+"</tr>";
             $("#otherTaskList").append(tableRow); 
          }else{
            alert("Please Add some value");
          }
           
     });
     
     
});
 