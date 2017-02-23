<?php
require('formValidator.php');
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
                <form>
                    <h2 class="centerText">Grade Calculator</h2>
                    <div id="formHead">
                        <h2 class="centerText">Grades for:</h2>
                        <input type='text' class='centerElement centerText' name='name' value='<?=$form->prefill(' name ', 'Enter Your Name ')?>'>
                        <div id="nameHelp" class="centerText help hidden">Enter your name **This field is required**</div>
                    </div>
                    <h2  class='centerText formBreak'>Lecture Quizzes</h2>
                    <fieldset class='centerText'>
                        <label >Quiz 1:
                            <select>
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
                            Quiz 2:
                            <select>
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
                            <select>
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
                            <select>
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
                            <select>
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
                            <select>
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
                            <select>
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
                            <select>
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
                            <select>
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
                            <select>
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
                            <select>
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
                            <select>
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
                            <select>
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
                            <select>
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
                            <input type="text"> </label>
                        <label> Quiz:
                            <input type="text">
                        </label>
                    </fieldset>

                    <fieldset>
                        <label> A2:
                            <input type="text"> </label>
                        <label> Quiz:
                            <input type="text">
                        </label>
                        <label> Peer Review:
                            <input type="text">
                        </label>
                    </fieldset>

                    <fieldset>
                        <label> A3:
                            <input type="text"> </label>
                        <label> Quiz:
                            <input type="text">
                        </label>
                        <label> Peer Review:
                            <input type="text">
                        </label>
                    </fieldset>
                    <div id="assignmentHelp" class="centerText help hidden">Enter your grades for each assignment. Each assignment is out of 10 i.e. 97% = 9.7/10</div>
                    <h2 class='centerText formBreak'>Participation</h2>
                    <fieldset>
                        <label> Participation:
                            <input type="text">
                        </label>
                    </fieldset>
                    <fieldset>
                        <label> Show Grading Parameters:
                            <input type="checkbox">
                        </label>
                    </fieldset>
                    <div id="checkboxHelp" class="centerText help hidden">Checkbox will display grade weights with results. Participation will be out of 10. i.e. 85% = 8.5 out of 10. Any zeros will not be counted because we have not completed the course yet. A zero does not mean incomplete</div>
                    <input type='submit' class='btn centerElement centerText'>
                    <br>
                    <button id="help" class="centerElement"><img src="img/help.jpg" alt = "help button">Help</button>
                    <br>
                    <?php if(isset($errors)): ?>
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