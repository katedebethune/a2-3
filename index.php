<?php
require('calculateGrade.php');
?>



    <!DOCTYPE html>
    <html lang='en'>

    <head>
        <meta charset="utf-8" />
        <title>DWA15 Grade Calculator</title>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css" rel="stylesheet">
        <link href="css/a2.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rye" rel="stylesheet" />
    </head>

    <body>

        <?php include("includes/header.php")?>

            <div id="gradeForm">
                <form method='post' action='index.php'>
                    <h2 class="centerText">Grade Calculator</h2>
                    <div id="formHead">
                        <h2 class="centerText">Grades for:</h2>
                        <input type='text' class='centerElement centerText' name='name' id='name' ?>'>
                        <div id="nameHelp" class="centerText help hidden">Enter your name **This field is required**</div>
                    </div>
                    <h2 class='centerText formBreak'>Lecture Quizzes</h2>
                    <fieldset class='centerText'>
                        <label for='lec1Quiz'>Quiz 1:
                            <select name='lec1Quiz' id='lec1Quiz'>
                                <option value="0">0</option>
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
                        </label>
                        <label for='lec2Quiz'>
                            Quiz 2:
                            <select name='lec2Quiz' id='lec2Quiz'>
                                <option value="0">0</option>
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
                        </label>
                        <label>
                            Quiz 3:
                            <select name='lec3Quiz' id='lec3Quiz'>
                                <option value="0">0</option>
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
                        </label>
                        <label>
                            Quiz 4:
                            <select name='lec4Quiz' id='lec4Quiz'>
                                <option value="0">0</option>
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
                        </label>
                    </fieldset>
                    <fieldset class='centerText'>
                        <label>Quiz 5:
                            <select name='lec5Quiz' id='lec5Quiz'>
                                <option value="0">0</option>
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
                        </label>
                        <label>
                            Quiz 6:
                            <select name='lec6Quiz' id='lec6Quiz'>
                                <option value="0">0</option>
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
                        </label>
                        <label>
                            Quiz 7:
                            <select name='lec7Quiz' id='lec7Quiz'>
                                <option value="0">0</option>
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
                        </label>
                        <label>
                            Quiz 8:
                            <select name='lec8Quiz' id='lec8Quiz'>
                                <option value="0">0</option>
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
                        </label>
                    </fieldset>

                    <fieldset class='centerText'>
                        <label>Quiz 9:
                            <select name='lec9Quiz' id='lec9Quiz'>
                                <option value="0">0</option>
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
                        </label>
                        <label>
                            Quiz 10:
                            <select name='lec10Quiz' id='lec10Quiz'>
                                <option value="0">0</option>
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
                        </label>
                        <label>
                            Quiz 11:
                            <select name='lec11Quiz' id='lec11Quiz'>
                                <option value="0">0</option>
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
                        </label>
                        <label>
                            Quiz 12:
                            <select name='lec12Quiz' id='lec12Quiz'>
                                <option value="0">0</option>
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
                        </label>
                    </fieldset>

                    <fieldset class='centerText'>
                        <label>Quiz 13:
                            <select name='lec13Quiz' id='lec13Quiz'>
                                <option value="0">0</option>
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
                        </label>
                        <label>
                            Quiz 14:
                            <select name='lec14Quiz' id='lec14Quiz'>
                                <option value="0">0</option>
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
                        </label>
                    </fieldset>
                    <div id="lectureHelp" class="centerText help hidden">Select your lecture quiz grades from the dropdowns above.</div>
                    <h2 class='centerText formBreak'>Assignments</h2>
                    <fieldset>
                        <label> A1:
                            <input type="text" name='a1' id='a1' value='<?=$form->prefill(' a1 ', '0 ')?>'>
                        </label>
                        <label> Quiz:
                            <input type="text" name='a1Quiz' id='a2Quiz' value='<?=$form->prefill(' a1Quiz ', '0 ')?>'>
                        </label>
                    </fieldset>

                    <fieldset>
                        <label> A2:
                            <input type="text" name='a2' id='a2' value='<?=$form->prefill(' a2 ', '0 ')?>'>
                        </label>
                        <label> Quiz:
                            <input type="text" name='a2Quiz' id='a2Quiz' value='<?=$form->prefill(' a2Quiz ', '0 ')?>'>
                        </label>
                        <label> Peer Review:
                            <input type="text" name='a2Review' id='a2Review' value='<?=$form->prefill(' a2Review ', '0 ')?>'>
                        </label>
                    </fieldset>

                    <fieldset>
                        <label> A3:
                            <input type="text" name='a3' id='a3' value='<?=$form->prefill(' a3 ', '0 ')?>'> </label>
                        <label> Quiz:
                            <input type="text" name='a3Quiz' id='a3Quiz' value='<?=$form->prefill(' a3Quiz ', '0 ')?>'>
                        </label>
                        <label> Peer Review:
                            <input type="text" name='a3Review' id='a3Review' value='<?=$form->prefill(' a3Review ', '0 ')?>'>
                        </label>
                    </fieldset>

                    <fieldset>
                        <label> A4:
                            <input type="text" name='a4' id='a4' value='<?=$form->prefill(' a4 ', '0 ')?>'> </label>
                        <label> Quiz:
                            <input type="text" name='a4Quiz' id='a4Quiz' value='<?=$form->prefill(' a4Quiz ', '0 ')?>'>
                        </label>
                        <label> Peer Review:
                            <input type="text" name='a4Review' id='a4Review' value='<?=$form->prefill(' a4Review ', '0 ')?>'>
                        </label>
                    </fieldset>

                    <div id="assignmentHelp" class="centerText help hidden">Enter your grades for each assignment. Each assignment is out of 100 i.e. 97 </div>
                    <h2 class='centerText formBreak'>Participation</h2>
                    <fieldset>
                        <label> Participation:
                            <input type="text" name='participation' id='participation' value='<?=$form->prefill(' participation ', '0 ')?>'>
                        </label>
                    </fieldset>
                    <fieldset>
                        <label> Show Grading Parameters:
                            <input type="checkbox" name='box' id='box' <?php if($form->isChosen('box')) echo 'CHECKED' ?>>
                        </label>
                    </fieldset>
                    <div id="checkboxHelp" class="centerText help hidden">Checkbox will display grade weights with results. Participation will be out of 100. i.e. 85. Any zeros will not be counted because we have not completed the course yet. A zero does not mean incomplete</div>



                    <?php if(isset($score)& !$errors): ?>



                        <?php if(isset($box) & $box ==1): ?>

                            <h2 class='centerText formBreak'>Grade Weights</h2>

                            <div id="rowOdd" class="centerText bold">Lecture Quizzes =
                                <?=$lecQuizWeight?>% of final grade</div>
                            <div id="rowEven" class="centerText bold">A1 =
                                <?=$a1Weight?>% of final grade</div>
                            <div id="rowOdd" class="centerText bold">A2 =
                                <?=$a2Weight?>% of final grade</div>
                            <div id="rowEven" class="centerText bold">A3 =
                                <?=$a3Weight?>% of final grade</div>
                            <div id="rowOdd" class="centerText bold">Participation =
                                <?=$partWeight?>% of final grade</div>


                            <h2 class='centerText formBreak'>Score For: <?=$name?> </h2>

                            <div id="rowOdd" class="centerText bold">Your Lecture Quiz Score
                                <br>
                                <?=$lecQuizScore?>%</div>
                            <div id="rowEven" class="centerText bold">Your A1 Score
                                <br>
                                <?=$a1Total?>%</div>
                            <div id="rowOdd" class="centerText bold">Your A2 Score
                                <br>
                                <?=$a2Total?>%</div>
                            <div id="rowEven" class="centerText bold">Your A3 Score
                                <br>
                                <?=$a3Total?>%</div>
                            <div id="rowOdd" class="centerText bold">Your A4 Score
                                <br>
                                <?=$a4Total?>%</div>
                            <div id="rowEven" class="centerText bold">Your Participation Score
                                <br>
                                <?=$partTotal?>%</div>
                            <div id="rowOdd" class="centerText bold">Your Total Score
                                <br>
                                <?=$score?>%</div>

                            <?php endif; ?>

                                <?php if(isset($box) & $box ==0): ?>

                                    <h2 class='centerText formBreak'>Score For: <?=$name?> </h2>

                                    <div id="rowOdd" class="centerText bold">Your Lecture Quiz Score
                                        <br>
                                        <?=$lecQuizScore?>%</div>
                                    <div id="rowEven" class="centerText bold">Your A1 Score
                                        <br>
                                        <?=$a1Total?>%</div>
                                    <div id="rowOdd" class="centerText bold">Your A2 Score
                                        <br>
                                        <?=$a2Total?>%</div>
                                    <div id="rowEven" class="centerText bold">Your A3 Score
                                        <br>
                                        <?=$a3Total?>%</div>
                                    <div id="rowOdd" class="centerText bold">Your A4 Score
                                        <br>
                                        <?=$a4Total?>%</div>
                                    <div id="rowEven" class="centerText bold">Your Participation Score
                                        <br>
                                        <?=$partTotal?>%</div>
                                    <div id="rowOdd" class="centerText bold">Your Total Score
                                        <br>
                                        <?=$score?>%</div>

                                    <?php endif; ?>

                                        <?php endif; ?>




                                            <input type='submit' class='btn centerElement centerText'>
                                            <br>
                                            <button id="help" class="centerElement"><img src="img/help.jpg" alt="help button">Help</button>
                                            <br>
                                            <?php if($errors): ?>
                                                <div class='alert alert-danger'>
                                                    <ul>
                                                        <?php foreach($errors as $error): ?>
                                                            <li>
                                                                <?=$error?>
                                                            </li>
                                                            <?php endforeach; ?>
                                                    </ul>
                                                </div>
                                                <?php endif; ?>

                </form>
            </div>


            <script type="text/javascript" src="js/form.js"></script>
    </body>


    </html>