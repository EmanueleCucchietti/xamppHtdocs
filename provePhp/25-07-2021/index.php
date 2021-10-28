<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js">	</script>
    <title>Emanuele Cucchietti</title>
</head>

<body>
    <dir id="bgImg" class="img-fluid">
        <div class="container bg-gradient" id="container1">

            <!-- APRE HEADER -->
            <div class="row" id="header">
                <div class="card-title justify-content-center">

                    <!-- APRE TITOLO -->
                    <p class="h1 text-center">
                        Questionario Educazione Civica
                    </p>
                    <!-- CHIUDE TITOLO-->

                    <!-- APRE SOTTOTITOLO -->
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-sm-10 col-md-8">
                                <p class="h3 text-center">
                                    Leggi le seguenti domande e rispondi in modo personale attraverso le liste o le aree
                                    in cui scrivere
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- CHIUDE SOTTOTITOLO-->

                </div>
            </div> <!-- FINITO -->
            <!-- CHIUDE HEADER -->

            <?php

                    for($i = 0; $i<5; $i++){

                        
                    ?>
                    <div class="row justify-content-center">
                        <div class="col-3"></div>
                        <div class="col-sm-10 col-md-10 col-lg-10 m-3">

                            <!-- APRE DOMANDA 1 -- CON LIST -->


                            <div class="card" style="width: auto; padding: 1em; margin: 0;">
                                <div class="card-body">
                                    <h5 class="card-title">Ti manca poterti collegare ad internet (social, chat, navigazione)
                                        quando sei impossibilitato a farlo (ad esempio in aereo / nave / zone senza copertura)?
                                    </h5>

                                    <div id="form1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="reRdbtn1" id="reRdbtn1-0"
                                                checked autocomplete="off">
                                            <label class="form-check-label" for="reRdbtn1-0">
                                                Decisamente sì
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="reRdbtn1" id="reRdbtn1-1" autocomplete="off">
                                            <label class="form-check-label" for="reRdbtn1-1">
                                                Più sì che no
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="reRdbtn1" id="reRdbtn1-2" autocomplete="off">
                                            <label class="form-check-label" for="reRdbtn1-2">
                                                Più no che sì
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="reRdbtn1" id="reRdbtn1-3" autocomplete="off">
                                            <label class="form-check-label" for="reRdbtn1-3">
                                                Decisamente No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- CHIUDE DOMANDA 1 -- CON LIST-->

                        </div>
                        <div class="col-3"></div>
                    </div> <!-- FINITA -->
                <?php
                }
            ?>

            <!-- APRE DOMANDA s1 CONTAINER-->
            
            <!-- CHIUDE DOMANDA 1 CONTAINER-->

            <!-- APRE BOTTONI CONTAINER-->
            <div class="row justify-content-center">
                <div class="col-3"></div>
                <div class="col-sm-10 col-md-10 col-lg-10 m-3">

                    <!-- APRE CARD BOTTONE -->

                    <div class="card" style="width: auto; padding: 1em; margin: 0;">
                        <div class="card-body">
                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-6 align-items-center">
                                            <button type="button" class="btn btn-primary" style="width: 100%;"
                                                id="btnInvia">Invia</button>

                                        </div>
                                        <div class="col-6 align-items-center">
                                            <button type="button" class="btn btn-primary" style="width: 100%"
                                                id="btnLeggi">Leggi Local Storage</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CHIUDE CARD BOTTONE -->

                </div>
                <div class="col-3"></div>
            </div> <!-- DA METTERE COLLEGAMENTI-->
            <!-- CHIUDE BOTTONO CONTAINER-->
        </div>
    </dir>

</body>

</html>