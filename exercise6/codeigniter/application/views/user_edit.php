<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8"> 
      <title>User</title> 
   </head> 
	
   <body> 
      <form method = "" action = "">
		
         <?php 
            echo form_open('user_controller/update_user'); 
            echo form_hidden('old_user_id',$old_user_id); 
            echo form_label('user_id'); 
            echo form_input(array('id'=>'user_id',
               'name'=>'user_id','value'=>$records[0]->roll_no)); 
            echo "<br/>"; 
				
            echo form_label('nickname'); 
            echo form_input(array('id'=>'nickname','name'=>'nickname',
               'value'=>$records[0]->name)); 
            echo "<br/>"; 

            echo form_label('email'); 
            echo form_input(array('id'=>'email','name'=>'email',
               'value'=>$records[0]->name)); 
            echo "<br/>"; 

            echo form_label('hadd'); 
            echo form_input(array('id'=>'hadd','name'=>'hadd',
               'value'=>$records[0]->name)); 
            echo "<br/>"; 

            echo form_label('gender'); 
            echo form_input(array('id'=>'gender','name'=>'gender',
               'value'=>$records[0]->name)); 
            echo "<br/>"; 

            echo form_label('cpnum'); 
            echo form_input(array('id'=>'cpnum','name'=>'cpnum',
               'value'=>$records[0]->name)); 
            echo "<br/>"; 

            echo form_label('comment'); 
            echo form_input(array('id'=>'comment','name'=>'comment',
               'value'=>$records[0]->name)); 
            echo "<br/>"; 
				
            echo form_submit(array('id'=>'submit','value'=>'Edit')); 
            echo form_close();
         ?> 
			
      </form> 
   </body>
	
</html>