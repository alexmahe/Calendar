<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
    <link rel="stylesheet" href="read.css" />
    <title>Affichage liste ODJ</title>
</head>

<script defer src="https://code.getmdl.io/1.3.0/material.min.js" type="text/javascript" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../xmlRequest.js"></script>
<script type="text/javascript" src="read2.js"></script>
<script type="text/javascript" src="../elemFunction.js"></script>

<?php include("../header.php") ?>

<main class="mdl-layout__content main-content">
    <div class="page-content">
        <div class="titre-affichage">
            Affichage des odj :
        </div>
    </div>
    <div class="mdl-grid">
        <div class="mdl-cell--2-col"></div>
        <div class="mdl-cell--3-col">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored boutton-show"
                    onclick="showAll(readData);
                             hideElem('div-select-date');
                             emptyElem('output');">

                Show All

            </button>
        </div>
        <div class="mdl-cell--2-col"></div>
        <div class="mdl-cell--3-col">
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored boutton-show"
                    onclick="toggleElemView('div-select-date');
                             emptyElem('output');">

                Select date

            </button>
        </div>
        <div class="mdl-cell--2-col"></div>
        <div class="mdl-cell--12-col"
             id="div-select-date"
             style="display: none">

            <input type="date" id="date" /><br />
            <button onclick="showAll(readData)">Submit</button>

        </div>
        <p class="mdl-cell--12-col" id="output">
        </p>
    </div>
</main>

<?php include("../footer.php") ?>

</html>