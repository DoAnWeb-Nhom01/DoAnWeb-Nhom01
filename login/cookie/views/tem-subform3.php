<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?> by www.hoangcode.com</title>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="description" content="<?php echo $description; ?>" />
<meta name="keywords" content="<?php echo $keywords; ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>	
<link rel="Shortcut Icon" href="#" type="image/x-icon" />	
<link href="<?php echo base_url('pub/css/styles.css') ?>" rel="stylesheet" />  
<style type="text/css">
#main{
    width:960px;
    margin:50px auto;
    font-family:raleway;
}
span{
    color:red;
}
h2{
    background-color: #4DCF6C;
    text-align:center;
    border-radius: 5px 5px 0 0;
    margin: -10px -40px;
    padding: 30px;
    color: white;
    font-size: 18px;
}
hr{
    border:0;
    border-bottom:1px solid #4DCF6C;
    margin: 10px -40px;
    margin-bottom: 30px;
}
#login{
    width:300px;
    float: left;
    border-radius: 10px;
    font-family:raleway;
    border: 2px solid #4DCF6C;
    padding: 10px 40px 25px;
    margin-top: -8px;
}
input[type=text],input[type=password], input[type=email]{
    width:99.5%;
    padding: 10px;
    margin-top: 8px;
    border: 1px solid #ccc;
    padding-left: 5px;
    font-size: 16px;
    font-family:raleway;
}
input[type=submit]{
    width: 100%;
    background-color:#4DCF6C;
    color: white;
    border: 2px solid #4DCF6C;
    padding: 10px;
    font-size:20px;
    cursor:pointer;
    border-radius: 5px;
    margin-bottom: 15px;
}
#profile{
    padding:50px;
    border:1px dashed grey;
    font-size:20px;
    background-color:#DCE6F7;
}
#logout{
    float: right;
    padding: 5px;
    border: dashed 1px gray;
    margin-top: -126px;
    margin-right: 36px;
    font-size: 20px;
}
a{
    text-decoration:none;
    color: cornflowerblue;
}
i{
    color: cornflowerblue;
}
.error_msg{
    color:red;
    font-size: 16px;
}
.message{
    position: absolute;
    font-weight: bold;
    font-size: 28px;
    color: #6495ED;
    left: 262px;
    width: 500px;
    text-align: center;
    margin-top: -46px;
}
#note{
    clear: left;
    padding-top: 20px;
    margin-left: 20px;
}
</style>          
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#submit").click(function(){
        $("#form").submit();  // jQuey's submit function applied on form.
    });
});
</script> 
</head>
<body>
    <div class="header-wrapper">
        <div class="ct-wrapper">
            <div class="home_demo">
                <!-- demo -->             
                <div class="content_wrapper">
                    <div class="demo_ct">	
                        <div id="main">
                            <div id="login">
                                        <h2>Ghi nhớ khi đăng nhập cùng CodeIgniter</h2>
                                        <hr/>
                                        <form action="<?php echo base_url('subform3/submit.html') ?>" method="post" accept-charset="utf-8">                
                                        <div class="error_msg"><?php if (isset($error)) {echo $error;} ?></div>                
                                        
                                        <label>UserName  :</label>
                                        <input type="text" name="username" id="name" placeholder="username" required=""/><br/><br/>
                                        <div class="error_msg"><?php echo form_error('username'); ?></div> 
                                        
                                        <label>Password  :</label>
                                        <input type="password" name="password" id="password" placeholder="**********" required=""/><br/><br/>
                                        <div class="error_msg"><?php echo form_error('password'); ?></div> 
                                        
                                        <input type="checkbox" name="remember_me"/> Remember Me<br/><br/>
                                        
                                        <input type="submit" value=" Login " name="submit"/><br/>
                                        </form>            
                            </div>
                            <div id="note"><span><b>Note : </b></span> Sử dụng tên đăng nhập và mật khâu dưới đây : <br/>
                                <b>Username : </b>Hoangcode.com&nbsp;&nbsp;&nbsp;<b>Password : </b>123456<br/>
                            </div>
                        </div>
                    </div> 
                    <hr />                   
                    <div class="divlive">
                        <a class="live" href="#" title="TUTORIALS">TUTORIALS</a>
                        <a class="download" style="color: white; text-decoration: none;" href="#" title="Download Script">Download Script</a>
                    </div>                   
                </div>
                <!-- and demo -->  
                <div class="fo">             
                    <h1>DEMO - <?php echo $title; ?> by www.hoangcode.com</h1>
                    <h1>Tutorial : <a href="#" target="_blank">Submit Form codeigniter cùng Jquery phần 1</a></h1>       
                </div>         
            </div>
        </div>
    </div>
</body>
</html>