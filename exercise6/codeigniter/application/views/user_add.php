<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>User</title> 
   </head> 
   <body> 
         <?php 
            echo form_open('user_controller/add_user');
            echo form_label('name'); 
            echo form_input(array('id'=>'user_id','name'=>user_id')); 
            echo "<br/>"; 
			
            echo form_open('user_controller/add_user');
            echo form_label('nickname'); 
            echo form_input(array('id'=>'nickname','name'=>nickname')); 
            echo "<br/>";

            echo form_open('user_controller/add_user');
            echo form_label('email'); 
            echo form_input(array('id'=>'email','name'=>email')); 
            echo "<br/>";

            echo form_open('user_controller/add_user');
            echo form_label('hadd'); 
            echo form_input(array('id'=>'hadd','name'=>hadd')); 
            echo "<br/>";

            echo form_open('user_controller/add_user');
            echo form_label('gender'); 
            echo form_input(array('id'=>'gender','name'=>gender')); 
            echo "<br/>";

            echo form_open('user_controller/add_user');
            echo form_label('cpnum'); 
            echo form_input(array('id'=>'cpnum','name'=>cpnum')); 
            echo "<br/>";

            echo form_open('user_controller/add_user');
            echo form_label('comment'); 
            echo form_input(array('id'=>'comment','name'=>comment')); 
            echo "<br/>";


			
            echo form_submit(array('id'=>'submit','value'=>'Add')); 
            echo form_close(); 
         ?> 
   </body>
</html>