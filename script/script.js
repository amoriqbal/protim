$(document).ready(function()
{
  $(".submit").hover(function()
  {
    $(this).css("background-color", "blue");
  }, function()
  {
    $(this).css("background-color", "green");
  });
  $("#submit-reg").click(function()
  {
    var uname = $("#uname").val();
    var passwd = $("#passwd").val();
    if(passwd.length<6)
    {
      alert("Password must be atleast 6 characters long");
    }
    else
    {
    try{
      $.ajax(
        {
            type:'post',
          url: "./php/register.php",
          data:
            {
                uname: uname,
                passwd: passwd
            },
          success: function(response)
                   {
                     console.log("lolololol".response);
                     alert("hello");
                     /*if(response==1)
                     {
                       window.location.href = "cultural_home.html";
                     }*/
                     
                     
                   }
        });
        }catch(e)
        {
        console.log("error");
        }

    }
  });
});
