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
                                <option value="3">4</option>
                                <option value="3">5</option>
                                <option value="3">6</option>
                                <option value="3">7</option>
                                <option value="3">8</option>
                                <option value="3">9</option>
                                <option value="3">10</option>
                            </select>
                        </div>
                        <div class="col-12 d-flex justify-content-center"> <button type="submit"
                                class="btn btn-primary btn-sm mt-3">Submit</button></div>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <div class="text-center">
        <?php 
            $listValueOption = $_POST['tablemultiplication'];
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
            <div class="row d-flex flex-wrap">
                <form class="mx-auto" action="" method="post">
                    <div class="d-flex mr-3">
                        <p class="inputintitule">Table du 1 </p><input class="mt-2" type="checkbox" id="check1"
                            onclick="function1()" value="1">
                    </div>
                    <div class="d-flex mr-3">
                        <p class="inputintitule">Table du 2 </p><input class="mt-2" type="checkbox" id="check2"
                            onclick="function2()" value="2">
                    </div>
                    <div class="d-flex mr-3">
                        <p class="inputintitule">Table du 3 </p><input class="mt-2" type="checkbox" id="check3"
                            onclick="function3()" value="3">
                    </div>
                    <div class="d-flex mr-3">
                        <p class="inputintitule">Table du 4 </p><input class="mt-2" type="checkbox" id="check4"
                            onclick="function4()" value="4">
                    </div>
                    <div class="d-flex mr-3">
                        <p class="inputintitule">Table du 5 </p><input class="mt-2" type="checkbox" id="check5"
                            onclick="function5()" value="5">
                    </div>
                    <div class="d-flex mr-3">
                        <p class="inputintitule">Table du 6 </p><input class="mt-2" type="checkbox" id="check6"
                            onclick="function6()" value="6">
                    </div>
                    <div class="d-flex mr-3">
                        <p class="inputintitule">Table du 7 </p><input class="mt-2" type="checkbox" id="check7"
                            onclick="function7()" value="7">
                    </div>
                    <div class="d-flex mr-3">
                        <p class="inputintitule">Table du 8 </p><input class="mt-2" type="checkbox" id="check8"
                            onclick="function8()" value="8">
                    </div>
                    <div class="d-flex mr-3">
                        <p class="inputintitule">Table du 9 </p><input class="mt-2" type="checkbox" id="check9"
                            onclick="function9()" value="9">
                    </div>
                    <div class="d-flex mr-3">
                        <p class="inputintitule">Table du 10</p> <input class="mt-2" type="checkbox" id="check10"
                            onclick="function10()" value="10">
                    </div>
                </form>
            </div>

            <div class="row d-flex flex-wrap mt-5">
                <p id="text1" style="display:none" class="mr-5">
                    <?php echo "Salut!"; ?>
                </p>
                <p id="text2" style="display:none" class="mr-5">Checkbox2 is CHECKED!</p>
                <p id="text3" style="display:none" class="mr-5">Checkbox3 is CHECKED!</p>
                <p id="text4" style="display:none" class="mr-5">Checkbox4 is CHECKED!</p>
                <p id="text5" style="display:none" class="mr-5">Checkbox5 is CHECKED!</p>
                <p id="text6" style="display:none" class="mr-5">Checkbox6 is CHECKED!</p>
                <p id="text7" style="display:none" class="mr-5">Checkbox7 is CHECKED!</p>
                <p id="text8" style="display:none" class="mr-5">Checkbox8 is CHECKED!</p>
                <p id="text9" style="display:none" class="mr-5">Checkbox9 is CHECKED!</p>
                <p id="text10" style="display:none" class="mr-5">Checkbox10 is CHECKED!</p>
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