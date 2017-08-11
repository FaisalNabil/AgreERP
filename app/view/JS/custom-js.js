$(document).ready(function(){

     $('#fertilizerBtn').click(function(event){
         event.preventDefault();

          var week = $("#week option:selected").val();
          var TextAreaValue = $("textarea#FertilizerTask").val();
		  var fertilizerName = $("#fertilizer option:selected").val();

          if (TextAreaValue.length > 0) {
             var tableRow = "<tr>"+ "<td>"+week+"</td>"+ "<td>"+fertilizerName+"</td>"+" <td>"+TextAreaValue+"</td>"+"</tr>";
             $("#fertilizerList").append(tableRow); 
          }else{
            alert("Please Add some value");
          }
           
     });
     // insecticide
     $('#insecticideBtn').click(function(event){
         event.preventDefault();
          
          var week = $("#weekName option:selected").val();
          var TextAreaValue = $("textarea#InserticideTask").val();
		  var insecticideName = $("#insecticide option:selected").val();

          if (TextAreaValue.length > 0) {
             var tableRow = "<tr>"+ "<td>"+week+"</td>"+ "<td>"+insecticideName+"</td>"+" <td>"+TextAreaValue+"</td>"+"</tr>";
             $("#insecticideList").append(tableRow); 
          }else{
            alert("Please Add some value");
          }
           
     });

     // othertask
     $('#otherTaskBtn').click(function(event){
         event.preventDefault();
          
          var week = $("#otherTaskweekName option:selected").val();
          var TextAreaValue = $("textarea#otherTask").val();

          if (TextAreaValue.length > 0) {
             var tableRow = "<tr>"+ "<td>"+week+"</td>"+ "<td>"+TextAreaValue+"</td>"+"</tr>";
             $("#otherTaskList").append(tableRow); 
          }else{
            alert("Please Add some value");
          }
           
     });
     
     
});
 