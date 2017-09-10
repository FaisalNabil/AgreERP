$(document).ready(function(){
    var dataArr = [];
    var i = 0;
     $('#addNew').click(function(event){
         event.preventDefault();
          

          var week = $("#week option:selected").val();
        
          var fertilizerId = $("#fertilizerId option:selected").val();
           
          
          var fertilizerTask = $("textarea#fertilizerTask").val();
         
          var insecticideId = $("#insecticideId option:selected").val();
        
          var insecticideTask = $("textarea#insecticideTask").val();
    
          var otherTask = $("textarea#otherTask").val();
 

           
          if ((fertilizerTask.length > 0) && (insecticideTask.length > 0)) {
             
             dataArr[i] = {"week":week, "fertilizerId":fertilizerId, "fertilizerTask":fertilizerTask, "insecticideId":insecticideId, "insecticideTask":insecticideTask, "otherTask":otherTask};
             //var myObj = JSON.parse(dataArr[i]);
             alert(dataArr[i].week);
             i++;

             var tableRow = "<tr>"+ "<td>"+week+"</td>"+ "<td>"+fertilizerId+"</td>" + "<td>"+fertilizerTask+ "</td>"+ "<td>"+ insecticideId +"</td>"+ "<td>"+ insecticideTask+"</td>"+ "<td>"+otherTask +"</td>"+"</tr>";
             $("#cropWeeklyTask").append(tableRow); 
          }else{
            alert("Please Add some value");
          }
           
     });

      $('#sendServer').click(function(){
          var dataArr = [];
          $("tr>td").each(function(){
             dataArr.push($(this).html());
          });  
          
          $.ajax({
                type  : "POST",
                url   : 'app/view/server.php',
                data : "dataArr="+ dataArr,
                success: function(data) {
                    
                    alert(data);// alert the data from the server
                },
                error : function() {
                  alert("error");
                }
          });
      });
     
     
     
     
});
 