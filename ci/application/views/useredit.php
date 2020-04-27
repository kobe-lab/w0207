<!DOCTYPE html>
<html>
    <head>  
 <meta charset="UTF-8">
 <title> Profile Settings</title>
    </head> 
 <body>           
 <h3>Update Profile Information</h3> 
        <?php if (isset($userdata) && !empty($userdata)) { ?>                                         
        <form method="post" action="<?=base_url('updateprofile')?>">            
        <label>Name:</label><br> 
        <input type="text" name="fullname" value="<?=$userdata['fullname']?>" /><br> 
        <label>Given Name:</label><br>
        <input type="text" name="givenname" value="<?=$userdata['givenname']?>" /><br> 
        <label>Family Name:</label><br> 
        <input type="text" name="familyname" value="<?=$userdata['familyname']?>" /><br>
        <label>Email:</label><br>          
        <input type="text" name="email" value="<?=$userdata['email']?>" /><br><br> 
        <label>Password:</label><br>          
        <input type="text" name="password"  /><br><br>   
        <input type="submit" name="update_profile" value="Update Profile" />   
 </form>    
 <?php
        }
 ?>
 </body>
</html>