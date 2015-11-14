<?php
    $target_dir = "Upload/";
    $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
    $upload_ok = 1;
    
    if(isset($_POST["submit"]))
    {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check!==false)
        {
            echo "File is an image " .$check["mime"].". </br>";
            $upload_ok = 1;
        }
        
        else
        {
            echo "File is not a Image";
            $upload_ok = 0;    
        }
        
        if (file_exists($target_file)) {
          echo "Sorry, file already exists.";
            $upload_ok = 0;
            
        }
      
            
        if ($upload_ok == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        }
        else
        {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
            {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            }
            else
            {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        
        
    }
    