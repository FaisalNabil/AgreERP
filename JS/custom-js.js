$(document).ready(function(){
     $('#aboutCrops').click(function(){
         event.preventDefault();
          var week = $("#week option:selected").val();
          var TextAreaValue = $("textarea#ValueAboutWeek").val();

          if (TextAreaValue.length > 0) {
             var tableRow = "<tr>"+ "<td>"+week+"</td>"+ "<td>"+TextAreaValue+"</td>"+"</tr>";
             $("#weekAndTask").append(tableRow); 
          }
           
     });
});
 