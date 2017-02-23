<?php
require('formDemoLogic.php');
?>



    <!DOCTYPE html>
    <html lang='en'>

    <head>
        <meta charset="utf-8" />
        <title>DWA15 Grade Calculator</title>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/flatly/bootstrap.min.css" rel="stylesheet">
        <link href="css/a2.css" rel="stylesheet"> </head>

    <body>
        <div id="gradeForm">
            <form>
                <h2 class="centerText">Grade Calculator</h2>
                <div id="formHead">
                    <h2 class="centerText">Grades for:</h2>
                    <input type='text' class='centerElement centerText' name='name' value='<?=$form->prefill(' name ', 'Enter Your Name ')?>'>
                </div>
                <h2 id='formBreak' class='centerText'>Lecture Quizzes</h2>
                <fieldset>
                    <label> Quiz 1:
                        <input type="text">
                    </label>
                    <label> Quiz 2:
                        <input type="text">
                    </label>
                    <label> Quiz 3:
                        <input type="text">
                    </label>
                    <label> Quiz 4:
                        <input type="text">
                    </label>
                </fieldset>

                <h2 id='formBreak' class='centerText'>Assignments</h2>
                <fieldset>
                    <label> A1:
                        <input type="text"> Quiz:
                        <input type="text"> </label>
                    <label> A2:
                        <input type="text"> Quiz:
                        <input type="text"> Peer Review:
                        <input type="text"> </label>
                    <label> A3:
                        <input type="text"> Quiz:
                        <input type="text"> Peer Review:
                        <input type="text"> </label>
                    <label> A4:
                        <input type="text"> Quiz:
                        <input type="text"> Peer Review:
                        <input type="text"> </label>
                </fieldset>

                <h2 id='formBreak' class='centerText'>Participation</h2>
                <fieldset>
                    <label> Participation:
                        <input type="text">
                    </label>
                </fieldset>


                <input type='submit' class='btn centerElement centerText'>
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
    </body>

    </html>