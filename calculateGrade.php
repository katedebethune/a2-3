<?php
require('Form.php');

$form = new DWA\Form($_POST);

     $partWeight = 5;
     $a1Weight = 5;
     $a2Weight = 10;
     $a3Weight = 15;
     $a4Weight = 20;
     $lecQuizWeight = 45;
     $lecQuizTotal = 0;
     $a1Total = 0;
     $a2Total = 0;
     $a3Total = 0;
     $a4Total = 0;
     $myScores = 0;
     $a1Score = 0;
     $possible = 100;
    
     $errors = [];

if($form->isSubmitted()) {
    
  
    
    $box = $form->isChosen('box');
    $name = $form->get('name', $default = '');
    
    $errors = $form->validate(
        [
            'name' => 'required|alpha',
            'a1'=> 'numeric',
            'a1Quiz'=> 'numeric',
            'a2'=> 'numeric',
            'a2Quiz'=> 'numeric',
            'a2Review'=> 'numeric',
            'a3'=> 'numeric',
            'a3Quiz'=> 'numeric',
            'a3Review'=> 'numeric',
            'participation' => 'numeric'
          
        ]
    );
    
   for($i = 2; $i <15; $i++){
        
        $lecQuizScore = $form->get('lec'.$i.'Quiz', $default = '');
        if($lecQuizScore!=0){
            
            $lecQuizTotal = $lecQuizTotal+10;
            $myScores+=$lecQuizScore;
        }
       
        
    }
    
    
    $partTotal= $form->get('participation', $default = '');
    $a1Score = $form->get('a1', $default = '');
    $a1QuizScore = $form->get('a1Quiz', $default = '');
    
    $a2Score = $form->get('a2', $default = '');
    $a2QuizScore = $form->get('a2Quiz', $default = '');
    $a2RevScore = $form->get('a2Review', $default = '');
    
    $a3Score = $form->get('a3', $default = '');
    $a3QuizScore = $form->get('a3Quiz', $default = '');
    $a3RevScore = $form->get('a3Review', $default = '');
    
    $a4Score = $form->get('a4', $default = '');
    $a4QuizScore = $form->get('a4Quiz', $default = '');
    $a4RevScore = $form->get('a4Review', $default = '');
    
    $a1Total = $a1Score *.5 + $a1QuizScore * .5;
    $a2Total = $a2Score *.33 + $a2QuizScore * .33 + $a2RevScore*.33;
    $a3Total = $a3Score *.33 + $a3QuizScore * .33 + $a3RevScore*.33;
    $a4Total = $a4Score *.33 + $a4QuizScore * .33 + $a4RevScore*.33;
    
    if($myScores !=0){
        
    $lecQuizScore = round($myScores/$lecQuizTotal*100,2);
        
    }
    
    if($a1Total !=0){
        
        $a1WeightedTot = $a1Total * $a1Weight/100;
    } else { $a1WeightedTot=0; $possible = $possible - $a1Weight;}
    
    
    if($a2Total !=0){
        
        $a2WeightedTot = $a2Total * $a2Weight/100;
    } else { $a2WeightedTot=0; $possible = $possible - $a2Weight;}
    
    if($a3Total !=0){
        
        $a3WeightedTot = $a3Total * $a3Weight/100;
    } else { $a3WeightedTot=0; $possible = $possible - $a3Weight;}
    
    
    
    if($a4Total !=0){
        
        $a4WeightedTot = $a4Total * $a4Weight/100;
    } else { $a4WeightedTot=0; $possible = $possible - $a4Weight;}
    
    
    if($lecQuizScore !=0){
        
        $lecWeightedTot = $lecQuizScore * $lecQuizWeight/100;
    }  else { $lecWeightedTot=0; $possible = $possible - $lecQuizWeight;}
    
    
    if($partTotal !=0){
        
        $partWeightedTot = $partTotal * $partWeight/100;
    } else { $partWeightedTot=0; $possible = $possible -$partWeight;}
    
    
  
    
    $score = $a1WeightedTot + $a2WeightedTot + $a3WeightedTot + $a4WeightedTot + $partWeightedTot + $lecWeightedTot;
    
    $score = round($score/$possible*100,2);
    
}