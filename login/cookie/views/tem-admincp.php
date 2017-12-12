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
#ss{
    margin: 30px auto;
    padding-top: 50px;
    background-color: white;
    width: 500px;
    text-align: center;
    height: 350px;
}
#ss h1{
    padding: 10px 10px;
    font-size: 18px;
}
#ss a{
    color: blue;
    text-decoration: none;
}
</style>          
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">

</script> 
</head>
<body>
    <section>
        <div id="ss">
        <h1>Xin chào <b style="color: red;"><?php echo $this->session->userdata('username'); ?></b>, bạn đang vào hệ thống Admincp</h1>   
        <h1><a href="<?php echo base_url('subform3/thoat.html') ?>">Thoát hệ thống.</a></h1>      
        </div>        
    </section>
</body>
</html>