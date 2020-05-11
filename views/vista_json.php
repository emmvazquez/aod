<?php 


    echo FCPATH;
        if ( ! write_file('/Applications/XAMPP/xamppfiles/htdocs/aod/archivo.json', json_encode($contenido,JSON_PRETTY_PRINT)))
        {
                echo 'Unable to write the file';
        }
        else
        {
                echo 'File written!';
        }
    ?>
