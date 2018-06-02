<html>
    <head>
        <style>
            .errormsg{
                color: red;
               
            }
        </style>
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    </head>
<body>

    <form  method="post" onsubmit="return getdata(event);">
Name: <input id="name" type="text" name="name"><br>
<span id='nameError' class="errormsg" style="display:none;">Error</span><br>
E-mail: <input id='email' type="text" name="email"><br>
<span id='emailError' class="errormsg" style="display:none;">Error</span><br>
mob: <input id="mobno" name='mobno' type="text" ><br>
<span id='mobError' class="errormsg" style="display:none;">Error</span><br>
query: <input id='query' name='query' type="text" ><br>
<span id='queryError' class="errormsg" style="display:none;">Error</span><br>
<input type="submit">
</form>

</body>
<script type="text/javascript">
    function getdata(e){
        var mailFilter= /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var nameFilter=/^([a-zA-Z])+$/;
        var mob=/^([7-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])+$/;
        if($('#name').val()==="" || $('#name').val()==='undefined' || nameFilter.test($('#name').val())===false ){
           $('#nameError').css('display','block'); 
           return false;
        }
        else{
            $('#nameError').css('display','none'); 
        }
                if($('#email').val()==="" || $('#email').val()==='undefined' || mailFilter.test($('#email').val())===false ){
           $('#emailError').css('display','block'); 
           return false;
        }
        else{
            $('#emailError').css('display','none'); 
        }
                if($('#mobno').val()==="" || $('#mobno').val()==='undefined' || mob.test($('#mobno').val())===false ){
           $('#mobError').css('display','block'); 
           return false;
        }
        else{
            $('#mobError').css('display','none'); 
        }
                if($('#query').val()==="" || $('#query').val()==='undefined' ){
           $('#queryError').css('display','block'); 
           return false;
        }
        else{
            $('#queryError').css('display','none'); 
        }
        
        
        
        
    var data = $('form').serialize();
    $.ajax({
        url: 'form.php',
        dataType: 'text',
        type: 'post',
        contentType: 'application/x-www-form-urlencoded',
        data: data,
        success: function(){
            alert('hello');
        },
        error: function(){
            alert('hi');
        }
    });

    e.preventDefault;
    return false;
}
    
    </script>
</html>