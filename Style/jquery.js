$(document).ready(function()
  {
    
    $(".disa").click(function()
      {
          if($(this).prop("checked")==true)
              {
                  $(".disa1").prop("disabled",true);
              }
          else
              {
                  $(".disa1").prop("disabled",false);   
              }
      });

    $(".disa1").click(function()
      {
          if($(".disa1").prop("checked")==true)
              {
                  $(".disa").prop("disabled",true);
              }
          else
              {
                  $(".disa").prop("disabled",false);   
              }
      });
 });
 
 function Submit(data)
  { 
    let urll=new URL(location.href).origin;
    urll=urll+"/Assignment-05/Server/InputRequest.php";
      $.ajax(
        {
          url:urll,
          type:'POST',
          data:JSON.stringify(data),
          success:function(success)
            {
              document.getElementById("alert_register").style.display="block";
              $("#registerForm")[0].reset();
            },
          
          error: function (jqXHR, textStatus, errorThrown)
            {
              alert("Try Again!");
            }
        });
  }
 
function showRecords()
  {
    let urll=new URL(location.href).origin;
    urll=urll+"/Assignment-05/Server/ReadRequest.php";
    $.get(urll,function(data,status)
      {
        if(status.localeCompare("success")==0)
          {
            $("#no-data-alert").css("display","none");
            for (key in data.records) 
              {
                $("#data_table").css("display","block");
                $("#list_table_id").append("<tr>"+"<td style='text-align:center;'>"+data.records[key].Timestamp+"</td>"+"<td style='text-align:center;'>"+data.records[key].Name+"</td>"+"<td style='text-align:center;'>"+data.records[key].Age+"</td>"+"<td style='text-align:center;'>"+data.records[key].email+"</td>"+"<td style='text-align:center;'>"+data.records[key].Platform+"</td></tr>");
              }
          } 
        else
          { 
            alert("f"); 
          }
      });
  }
