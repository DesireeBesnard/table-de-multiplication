<?php 
// start index part
    if (!empty($_GET) && isset($_GET['tableindexvalue'])){   
        $listValueOption = $_GET['tableindexvalue'];
        echo '<div class="bg-white affichageresult mx-auto josephin pb-3">';
        echo '<h3 class="mx-auto mt-2 pt-3">Table du '.$listValueOption.'</h3>'; 
    }
    for ($i=1; $i <= 10; $i++){
        if (isset($listValueOption)){
            echo $listValueOption.'*'.$i.'='.$listValueOption*$i."<br/>";
        }
        }

    echo '</div>';

// end index part

// start multiselection part

    if (!empty($_POST) && isset($_POST['secondtable'])){
        
        foreach($_POST['secondtable'] as $tableauvaleurs){
            if($tableauvaleurs == 0){
                continue;
            }
            
            // echo "<div class=' mr-5 mb-5 pl-5'>";
            echo "<div class='bg-white multiselectionresult mx-auto josephin mb-4 pt-3 pb-3'>";
            echo '<h3 class="text-center"> Table du '.$tableauvaleurs.'</h3>';
                for ($i=1; $i <= 10; $i++){
                    echo "<div class='text-center'>";
                    echo $tableauvaleurs.'x' .$i. '=' .$i*$tableauvaleurs;
                    echo" </div>";
                }
            echo "</div>";
        }

    }   
// end multiselection part


// start revision part

// end revision part

?>