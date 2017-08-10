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
     
     var i = 0;
     // About Fertilizer
     $('#aboutFertilizer').click(function(event){
         event.preventDefault();

          var FertilizerName   = $("#FertilizerName").val();
          var FertilizerAmount = $("#FertilizerAmount").val();
          if(isNaN(FertilizerAmount)){
          	alert("Please insert amount of Fertilizer!");
          }else{
           
          	if(FertilizerName.length>0){
          		 i++;
          		var fertilizerTableRow = "<tr>"+ "<td>"+ i +"</td>"+ "<td>"+FertilizerName+"</td>"+ "<td>"+FertilizerAmount+"</td>"+"</tr>";
          		$("#Fertilizer").append(fertilizerTableRow); 
          	}
          }
          //var TextAreaValue = $("textarea#ValueAboutWeek").val();

          /*if (TextAreaValue.length > 0) {
             var tableRow = "<tr>"+ "<td>"+week+"</td>"+ "<td>"+TextAreaValue+"</td>"+"</tr>";
             $("#FertilizerNameAmount").append(tableRow); 
          }else{
          	alert("Please Add some value");
          }*/
           
     });
});
 