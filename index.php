<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>

    <div class="container-fluid">
        <div class="container mt-5 mb-5">
            <div class="row">
                <h1 class="mx-auto">Table de multiplication</h1>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5 mb-5">
        <div class="container">
            <h2 class="text-center mb-4">Etape 1</h2>
            <div class="row">
                <form class="mx-auto" action="" method="post">
                    <div class="form-row align-items-center">
                        <div class="col-12">
                            <select class="custom-select" id="inlineFormCustomSelect" name="tablemultiplication">
                                <option selected>Choisir</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="col-12 d-flex justify-content-center"> <button type="submit"
                                class="btn btn-primary btn-sm mt-3">Valider</button></div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="text-center">
        <?php 
            $listValueOption = $_POST['tablemultiplication'];
            echo "<h3> Table du $listValueOption </h3><br/>";
            for ($nombre=1; $nombre <= 10; $nombre++){
            if(isset($listValueOption)){
            echo $listValueOption.'*'.$nombre.'='.$listValueOption*$nombre."<br/>";
            }
            }
        ?>
    </div>


    <div class="container-fluid">
        <div class="container">
            <h2 class="text-center mt-5 mb-4">Etape 2</h2>
            <div class="row">
                <form class="mx-auto secondtable d-flex flex-wrap" action="" method="post">

                    <div class="d-flex mr-3">
                        <input type="checkbox" name="table[]" value="1" id="table_1" class="mr-2 mt-1"> <label for="table_1">Table du 1</label>
                    </div>

                    <div class="d-flex mr-3">
                        <input type="checkbox" name="table[]" value="2" id="table_2" class="mr-2 mt-1"> <label for="table_2">Table du 2</label>
                    </div>

                    <div class="d-flex mr-3">
                        <input type="checkbox" name="table[]" value="3" id="table_3" class="mr-2 mt-1"> <label for="table_3">Table du 3</label>
                    </div>

                    <div class="d-flex mr-3">
                        <input type="checkbox" name="table[]" value="4" id="table_4" class="mr-2 mt-1"> <label for="table_4">Table du 4</label>
                    </div>

                    <div class="d-flex mr-3">
                        <input type="checkbox" name="table[]" value="5" id="table_5" class="mr-2 mt-1"> <label for="table_5">Table du 5</label>
                    </div>

                    <div class="d-flex mr-3">
                        <input type="checkbox" name="table[]" value="6" id="table_6" class="mr-2 mt-1"> <label for="table_6">Table du 6</label>
                    </div>

                    <div class="d-flex mr-3">
                        <input type="checkbox" name="table[]" value="7" id="table_7" class="mr-2 mt-1"> <label for="table_7">Table du 7</label>
                    </div>

                    <div class="d-flex mr-3">
                        <input type="checkbox" name="table[]" value="8" id="table_8" class="mr-2 mt-1"> <label for="table_8">Table du 8</label>
                    </div>

                    <div class="d-flex mr-3">
                    <input type="checkbox" name="table[]" value="9" id="table_9" class="mr-2 mt-1"> <label for="table_9">Table du 9</label>
                    </div>

                    <div class="d-flex mr-3">
                        <input type="checkbox" name="table[]" value="10" id="table_10" class="mr-2 mt-1"> <label for="table_10">Table du 10</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm mt-3 mx-auto">Valider</button>
                </form>
            </div>

            <div class="row d-flex flex-wrap mt-5">

                    <?php
                    foreach($_POST['table'] as $tableauvaleurs)
                    {
                        echo "<div class='mr-5 mb-5 pl-5'>";
                        echo '<h3 class="text-center"> Table du '.$tableauvaleurs.'</h3>';
                        for ($nombre=1; $nombre <= 10; $nombre++)
                        {
                            echo "<div class='text-center'>";
                            echo $nombre.'x' .$tableauvaleurs. '=' .$nombre*$tableauvaleurs;
                            echo" </div>";
                        }
                        echo "</div>";
                    }
                    ?>
                
            </div>
        </div>
    </div>




    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src='js/script.js' async></script>



</body>

</html>