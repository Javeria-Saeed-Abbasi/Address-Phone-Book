<?php
//For Uploading Profile Picture
      if (isset($_POST['signup'])) {
        $file = $_FILES ['profileavatar'];
        print_r($file);
        $fileName = $_FILES ['file']['name'];
        $fileTmpName = $_FILES ['file']['tmp_name'];
        $fileSize = $_FILES ['file']['size'];
        $fileError = $_FILES ['file']['error'];
        $fileType = $_FILES ['file']['type'];

        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array ('jpg' , 'jpeg' , 'png');

        if(in_array($fileActualExt, $allowed))  {
            if($fileError === 0) {
                if ($fileSize < 100000)  {
                  $fileNameNew = uniqueid ('' , true) .".".$fileActualExt;
                  $fileDestination = './upload-pics/'.$fileNameNew;
                  move_uploaded_file ( $fileTmpName , $fileDestination); 
                  // header ("Location: ");
                }
                else{
                  echo "Your file is too big!";
                }
            }
            else{
              echo "There was an error uploading your file!";
            }
        }
        else{
          echo "You cannot upload files of this type! ";
        }

    }


    ?>
    