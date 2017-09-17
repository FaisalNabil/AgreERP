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

     $('input[type=checkbox]').click(function(){
       var name = $(this).attr("name");
       if ($('#'+name).is(':checked')) {

         var res = name.split("_");

         var status='';

        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!

        var yyyy = today.getFullYear();
        if(dd<10){
            dd='0'+dd;
        } 
        if(mm<10){
            mm='0'+mm;
        } 
        var today = yyyy+'-'+mm+'-'+dd;

         //fertilizer
         if (res[0]=='fertilizertask') { 
            if($('#insecticidetask_'+res[1]+'_'+res[2]).is(':checked') && $('#othertask_'+res[1]+'_'+res[2]).is(':checked')){
              status='7'
              //alert(status);
            }
            if($('#insecticidetask_'+res[1]+'_'+res[2]).is(':checked') && !$('#othertask_'+res[1]+'_'+res[2]).is(':checked')){
              status='4'
              //alert(status);
            }
            if(!$('#insecticidetask_'+res[1]+'_'+res[2]).is(':checked') && $('#othertask_'+res[1]+'_'+res[2]).is(':checked')){
              status='5'
              //alert(status);
            }
            if(!$('#insecticidetask_'+res[1]+'_'+res[2]).is(':checked') && !$('#othertask_'+res[1]+'_'+res[2]).is(':checked')){
              status='1'
              //alert(status);
            }
         }

         //insecticide
         if (res[0]=='insecticidetask') {
            if($('#fertilizertask_'+res[1]+'_'+res[2]).is(':checked') && $('#othertask_'+res[1]+'_'+res[2]).is(':checked')){
              status='7'
              //alert(status);
            }
            if($('#fertilizertask_'+res[1]+'_'+res[2]).is(':checked') && !$('#othertask_'+res[1]+'_'+res[2]).is(':checked')){
              status='4'
              //alert(status);
            }
            if(!$('#fertilizertask_'+res[1]+'_'+res[2]).is(':checked') && $('#othertask_'+res[1]+'_'+res[2]).is(':checked')){
              status='6'
              //alert(status);
            }
            if(!$('#fertilizertask_'+res[1]+'_'+res[2]).is(':checked') && !$('#othertask_'+res[1]+'_'+res[2]).is(':checked')){
              status='2'
              //alert(status);
            }
         }

         //other
         if (res[0]=='othertask') {
            if($('#fertilizertask_'+res[1]+'_'+res[2]).is(':checked') && $('#insecticidetask_'+res[1]+'_'+res[2]).is(':checked')){
              status='7'
              //alert(status);
            }
            if($('#fertilizertask_'+res[1]+'_'+res[2]).is(':checked') && !$('#insecticidetask_'+res[1]+'_'+res[2]).is(':checked')){
              status='5'
              //alert(status);
            }
            if(!$('#fertilizertask_'+res[1]+'_'+res[2]).is(':checked') && $('#insecticidetask_'+res[1]+'_'+res[2]).is(':checked')){
              status='6'
              //alert(status);
            }
            if(!$('#fertilizertask_'+res[1]+'_'+res[2]).is(':checked') && !$('#insecticidetask_'+res[1]+'_'+res[2]).is(':checked')){
              status='3'
              //alert(status);
            }
         }
           
          $.ajax({
                  type  : "POST",
                  url   : 'app/view/cultivation_weeklytask_ajax.php',
                  data : {status: status, weekid: res[2], date: today},
                  success: function(data) {
                      
                      //alert(data);// alert the data from the server
                  },
                  error : function() {
                    alert(data);
                  }
            });

       }
          
    }); 
     
     
});

function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("span")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "block";
        } else {
            li[i].style.display = "none";

        }
    }
}