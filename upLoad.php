<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
          <form action="upLoadPage.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="500000"/>
            Select file to upload:
            <input type="file" name="myfile">
            <input type="submit" value="Upload">
        </form>
        
        <?php
        // put your code her
        ?>
    </body>
</html>
