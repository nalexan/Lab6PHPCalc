<!DOCTYPE html>
<html>
<head>
    <title>ITS 362- Nathan Alexander - Lab 6 PHP</title>
    <link rel="stylesheet" href="NathanAlexander-LabphpCSS.css">
    <h1> ITS 362 - Nathan's Grade Calculator - Lab 6 PHP</h1>
 


    
</head>

<body>
    <div>
    

<form name="mainGradeForm" action="" method="post">
   <div><table>
  <tr>
    <th colspan="5" class="TableGroupName">Lab Assignments</th>
    <td class="NoGroup"></td>
    <th colspan="5" class="TableGroupName">Participation</th>
  </tr>
  <tr class="TableGroupColor" >
    <td>Lab 1: <input type="number" name="Lab1"  value="<?php echo isset($_POST['Lab1']) ? $_POST['Lab1'] : '0' ?>" min="0" max="25" required></td>
    <td>Lab 2: <input type="number" name="Lab2"  value="<?php echo isset($_POST['Lab2']) ? $_POST['Lab2'] : '25' ?>" min="0" max="25" ></td>
    <td>Lab 3: <input type="number" name="Lab3"  value="<?php echo isset($_POST['Lab3']) ? $_POST['Lab3'] : '24' ?>" min="0" max="25" ></td>
    <td>Lab 4: <input type="number" name="Lab4"  value="<?php echo isset($_POST['Lab4']) ? $_POST['Lab4'] : '' ?>" min="0" max="25" ></td>
    <td>Lab 5:&nbsp &nbsp<input type="number" name="Lab5"  value="<?php echo isset($_POST['Lab5']) ? $_POST['Lab5'] : '25' ?>" min="0" max="25" ></td>
    <td class="NoGroup"></td>
    <td>1:&nbsp&nbsp <input type="number" name="Part1"  value="<?php echo isset($_POST['Part1']) ? $_POST['Part1'] : '5' ?>" min="0" max="5" ></td>
    <td>2:&nbsp&nbsp <input type="number" name="Part2"  value="<?php echo isset($_POST['Part2']) ? $_POST['Part2'] : '3' ?>" min="0" max="5" ></td>
    <td>3:&nbsp&nbsp <input type="number" name="Part3"  value="<?php echo isset($_POST['Part3']) ? $_POST['Part3'] : '5' ?>" min="0" max="5" ></td>
    <td>4:&nbsp&nbsp <input type="number" name="Part4"  value="<?php echo isset($_POST['Part4']) ? $_POST['Part4'] : '2' ?>" min="0" max="5" ></td>
    <td>5:&nbsp&nbsp <input type="number" name="Part5"  value="<?php echo isset($_POST['Part5']) ? $_POST['Part5'] : '5' ?>" min="0" max="5" ></td>
  </tr>
  <tr class="TableGroupColor" >
    <td>Lab 6: <input type="number" name="Lab6"  value="<?php echo isset($_POST['Lab6']) ? $_POST['Lab6'] : '19' ?>" min="0" max="25" ></td>
    <td>Lab 7: <input type="number" name="Lab7"  value="<?php echo isset($_POST['Lab7']) ? $_POST['Lab7'] : '23' ?>" min="0" max="25" ></td>
    <td>Lab 8: <input type="number" name="Lab8"  value="<?php echo isset($_POST['Lab8']) ? $_POST['Lab8'] : '11' ?>" min="0" max="25" ></td>
    <td>Lab 9: <input type="number" name="Lab9"  value="<?php echo isset($_POST['Lab9']) ? $_POST['Lab9'] : '25' ?>" min="0" max="25" ></td>
    <td>Lab 10: <input type="number" name="Lab10"  value="<?php echo isset($_POST['Lab10']) ? $_POST['Lab10'] : '25' ?>" min="0" max="25" ></td>
    <td class="NoGroup"></td>
    <td>6:&nbsp&nbsp <input type="number" name="Part6"  value="<?php echo isset($_POST['Part6']) ? $_POST['Part6'] : '5' ?>" min="0" max="5" ></td>
    <td>7:&nbsp&nbsp <input type="number" name="Part7"  value="<?php echo isset($_POST['Part7']) ? $_POST['Part7'] : '5' ?>" min="0" max="5" ></td>
    <td>8:&nbsp&nbsp <input type="number" name="Part8"  value="<?php echo isset($_POST['Part8']) ? $_POST['Part8'] : '1' ?>" min="0" max="5" ></td>
    <td>9:&nbsp&nbsp <input type="number" name="Part9"  value="<?php echo isset($_POST['Part9']) ? $_POST['Part9'] : '3' ?>" min="0" max="5" ></td>
    <td>10: <input type="number" name="Part10"  value="<?php echo isset($_POST['Part10']) ? $_POST['Part10'] : '5' ?>" min="0" max="5" ></td>
  </tr>
   
  <tr  class="TableGroupColor">
    <th colspan="5" class="TableGroupName">Quizes</th>
    <td class="NoGroup"></td>
    <td>11: <input type="number" name="Part11"  value="<?php echo isset($_POST['Part11']) ? $_POST['Part11'] : '5' ?>" min="0" max="5" ></td>
    <td>12: <input type="number" name="Part12"  value="<?php echo isset($_POST['Part12']) ? $_POST['Part12'] : '5' ?>" min="0" max="5" ></td>
    <td>13: <input type="number" name="Part13"  value="<?php echo isset($_POST['Part13']) ? $_POST['Part13'] : '5' ?>" min="0" max="5" ></td>
    <td>14: <input type="number" name="Part14"  value="<?php echo isset($_POST['Part14']) ? $_POST['Part14'] : '5' ?>" min="0" max="5" ></td>
    <td>15: <input type="number" name="Part15"  value="<?php echo isset($_POST['Part15']) ? $_POST['Part15'] : '5' ?>" min="0" max="5" ></td>
  </tr>
  <tr>
    <td class="TableGroupColor">Quiz 1: <input type="number" name="Quiz1"  value="<?php echo isset($_POST['Quiz1']) ? $_POST['Quiz1'] : '8' ?>" min="0" max="10"></td>
    <td class="TableGroupColor">Quiz 2: <input type="number" name="Quiz2"  value="<?php echo isset($_POST['Quiz2']) ? $_POST['Quiz2'] : '10' ?>" min="0" max="10"></td>
    <td class="TableGroupColor">Quiz 3: <input type="number" name="Quiz3"  value="<?php echo isset($_POST['Quiz3']) ? $_POST['Quiz3'] : '10' ?>" min="0" max="10"></td>
    <td class="TableGroupColor">Quiz 4: <input type="number" name="Quiz4"  value="<?php echo isset($_POST['Quiz4']) ? $_POST['Quiz4'] : '9' ?>" min="0" max="10"></td>
    <td class="TableGroupColor">Quiz 5:&nbsp &nbsp<input type="number" name="Quiz5"  value="<?php echo isset($_POST['Quiz5']) ? $_POST['Quiz5'] : '10' ?>" min="0" max="10"></td>
    <td class="NoGroup"></td>
    <td class="TableGroupColor">16: <input type="number" name="Part16"  value="<?php echo isset($_POST['Part16']) ? $_POST['Part16'] : '4' ?>" min="0" max="5" ></td>
    <td class="TableGroupColor">17: <input type="number" name="Part17"  value="<?php echo isset($_POST['Part17']) ? $_POST['Part17'] : '4' ?>" min="0" max="5" ></td>
    <td class="TableGroupColor">18: <input type="number" name="Part18"  value="<?php echo isset($_POST['Part18']) ? $_POST['Part18'] : '5' ?>" min="0" max="5" ></td>
    <td class="TableGroupColor">19: <input type="number" name="Part19"  value="<?php echo isset($_POST['Part19']) ? $_POST['Part19'] : '3' ?>" min="0" max="5" ></td>
    <td class="TableGroupColor">20: <input type="number" name="Part20"  value="<?php echo isset($_POST['Part20']) ? $_POST['Part20'] : '5' ?>" min="0" max="5"></td>
  </tr>
  <tr>
     <td class="TableGroupColor">Quiz 6: <input type="number" name="Quiz6"  value="<?php echo isset($_POST['Quiz6']) ? $_POST['Quiz6'] : '10' ?>" min="0" max="10"></td>
    <td class="TableGroupColor">Quiz 7: <input type="number" name="Quiz7"  value="<?php echo isset($_POST['Quiz7']) ? $_POST['Quiz7'] : '7' ?>" min="0" max="10"></td>
    <td class="TableGroupColor">Quiz 8: <input type="number" name="Quiz8"  value="<?php echo isset($_POST['Quiz8']) ? $_POST['Quiz8'] : '9' ?>" min="0" max="10"></td>
    <td class="TableGroupColor">Quiz 9: <input type="number" name="Quiz9"  value="<?php echo isset($_POST['Quiz9']) ? $_POST['Quiz9'] : '10' ?>" min="0" max="10"></td>
    <td class="TableGroupColor">Quiz 10: <input type="number" name="Quiz10"  value="<?php echo isset($_POST['Quiz10']) ? $_POST['Quiz10'] : '10' ?>" min="0" max="10"></td>
    <td></td>
    <td class="TableGroupColor">21: <input type="number" name="Part21"  value="<?php echo isset($_POST['Part21']) ? $_POST['Part21'] : '5' ?>" min="0" max="5"></td>
    <td class="TableGroupColor">22: <input type="number" name="Part22"  value="<?php echo isset($_POST['Part22']) ? $_POST['Part22'] : '4' ?>" min="0" max="5" ></td>
    <td class="TableGroupColor">23: <input type="number" name="Part23"  value="<?php echo isset($_POST['Part23']) ? $_POST['Part23'] : '1' ?>" min="0" max="5"></td>
    <td class="TableGroupColor">24: <input type="number" name="Part24"  value="<?php echo isset($_POST['Part24']) ? $_POST['Part24'] : '5' ?>" min="0" max="5"></td>
    <td class="TableGroupColor">25: <input type="number" name="Part25"  value="<?php echo isset($_POST['Part25']) ? $_POST['Part25'] : '4' ?>" min="0" max="5"></td>
  </tr>
  <tr>
    <th colspan="2">Exams</th>
    <td class="NoGroup"></td>
    <th>Extra Credit</th>
    <th>Project</th>
    <td  class="NoGroup"></td>

    <td class="TableGroupColor">26: <input type="number" name="Part26"  value="<?php echo isset($_POST['Part26']) ? $_POST['Part26'] : '5' ?>" min="0" max="5"></td>
    <td class="TableGroupColor">27: <input type="number" name="Part27"  value="<?php echo isset($_POST['Part27']) ? $_POST['Part27'] : '4' ?>" min="0" max="5"></td>
    <td class="TableGroupColor">28: <input type="number" name="Part28"  value="<?php echo isset($_POST['Part28']) ? $_POST['Part28'] : '5' ?>" min="0" max="5"></td>
    <td class="TableGroupColor">29: <input type="number" name="Part29"  value="<?php echo isset($_POST['Part29']) ? $_POST['Part29'] : '5' ?>" min="0" max="5"></td>
    <td class="TableGroupColor">30: <input type="number" name="Part30"  value="<?php echo isset($_POST['Part30']) ? $_POST['Part30'] : '5' ?>" min="0" max="5"></td>
  </tr>
  
  <tr>
    <td class="TableGroupColor">Exam 1: <input type="number" name="Exam1"  value="<?php echo isset($_POST['Exam1']) ? $_POST['Exam1'] : '75' ?>" min="0" max="100"></td>
    <td class="TableGroupColor">Exam 2: <input type="number" name="Exam2"  value="<?php echo isset($_POST['Exam2']) ? $_POST['Exam2'] : '94' ?>" min="0" max="100"></td>
    <td></td>
    <td class="TableGroupColor">Extra Credit: <input type="number" name="ExtraCredit"  value="<?php echo isset($_POST['ExtraCredit']) ? $_POST['ExtraCredit'] : '20' ?>" min="0" max="25"></td>
     <td class="TableGroupColor">Project:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="number" name="Project"  value="<?php echo isset($_POST['Project']) ? $_POST['Project'] : '88' ?>" min="0" max="100" ></td>
    <td  class="NoGroup"></td>
    <td></td>
      <td><input type="submit" name="submit" value="Submit" class="button2" /></td>
      <td></td>
      <td><button type="reset" value="Reset"  >Reset</button></td>
      <td></td>
  </tr>
  
</table>
       </div>
    
</form>




<?php
       

// isset() is a built-in function that allows information to be collected from an input such as a button
        if(!isset($_POST['submit'])){ // postback --> some values have been posted from the form

 }else{ // Retrieve the $_POST fields
//******************************************************************************
        $Lab1 = $_POST["Lab1"];
        $Lab2 = $_POST["Lab2"];
		$Lab3 = $_POST["Lab3"];
		$Lab4 = $_POST["Lab4"];
		$Lab5 = $_POST["Lab5"];
		$Lab6 = $_POST["Lab6"];
		$Lab7 = $_POST["Lab7"];
		$Lab8 = $_POST["Lab8"];
		$Lab9 = $_POST["Lab9"];
		$Lab10 = $_POST["Lab10"];
        
        $LabTotal = $Lab1 + $Lab2 + $Lab3 + $Lab4 + $Lab5 + $Lab6 + $Lab7 + $Lab8 + $Lab9 + $Lab10;
        
        $LabGrade = ($LabTotal / 250) * 30;
         $LabGrade = number_format($LabGrade, 2, '.', ',');
            
//******************************************************************************
        $Quiz1 = $_POST["Quiz1"];
        $Quiz2 = $_POST["Quiz2"];
        $Quiz3 = $_POST["Quiz3"];
        $Quiz4 = $_POST["Quiz4"];
        $Quiz5 = $_POST["Quiz5"];
        $Quiz6 = $_POST["Quiz6"];
        $Quiz7 = $_POST["Quiz7"];
        $Quiz8 = $_POST["Quiz8"];
        $Quiz9 = $_POST["Quiz9"];
        $Quiz10 = $_POST["Quiz10"];

        $QuizTotal = $Quiz1 + $Quiz2 + $Quiz3 + $Quiz4 + $Quiz5 + $Quiz6 + $Quiz7 + $Quiz8 + $Quiz9 + $Quiz10;
            
        $QuizGrade = ($QuizTotal / 100) * 10;
        $QuizGrade = number_format($QuizGrade, 2, '.', ',');
    
//******************************************************************************
		$Part1 = $_POST["Part1"];
        $Part2 = $_POST["Part2"];
        $Part3 = $_POST["Part3"];
        $Part4 = $_POST["Part4"];
        $Part5 = $_POST["Part5"];
        $Part6 = $_POST["Part6"];
        $Part7 = $_POST["Part7"];
        $Part8 = $_POST["Part8"];
        $Part9 = $_POST["Part9"];
        $Part10 = $_POST["Part10"];
        $Part11 = $_POST["Part11"];
        $Part12 = $_POST["Part12"];
        $Part13 = $_POST["Part13"];
        $Part14 = $_POST["Part14"];
        $Part15 = $_POST["Part15"];
        $Part16 = $_POST["Part16"];
        $Part17 = $_POST["Part17"];
        $Part18 = $_POST["Part18"];
        $Part19 = $_POST["Part19"];
        $Part20 = $_POST["Part20"];
        $Part21 = $_POST["Part21"];
        $Part22 = $_POST["Part22"];
        $Part23 = $_POST["Part23"];
        $Part24 = $_POST["Part24"];
        $Part25 = $_POST["Part25"];
        $Part26 = $_POST["Part26"];
        $Part27 = $_POST["Part27"];
        $Part28 = $_POST["Part28"];
        $Part29 = $_POST["Part29"];
        $Part30 = $_POST["Part30"];
        
        
        $PartTotal = $Part1 + $Part2 + $Part3 + $Part4 + $Part5 + $Part6 + $Part7 + $Part8 + $Part9 + $Part10 + $Part11 + $Part12 + $Part13 + $Part14 + $Part15 + $Part16 + $Part17 + $Part18 + $Part19 + $Part20 + $Part21 + $Part22 + $Part23 + $Part24 + $Part25 + $Part26 + $Part27 + $Part28 + $Part29 + $Part30;
        $PartGrade = ($PartTotal / 150) * 10;
        $PartGrade = number_format($PartGrade, 2, '.', ',');
//******************************************************************************

		$Exam1 = $_POST["Exam1"];
		$Exam2 = $_POST["Exam2"];
            
        $ExamTotal = $Exam1 + $Exam2;
            
		$ExamGrade = ($ExamTotal / 200) * 30;
        $ExamGrade = number_format($ExamGrade, 2, '.', ',');
//******************************************************************************
		$ProjectTotal = $_POST["Project"];
        $ProjectGrade = ($ProjectTotal / 100) * 20;
        $ProjectGrade = number_format($ProjectGrade, 2, '.', ',');
//******************************************************************************
		$ExtraTotal = $_POST["ExtraCredit"];
		$ExtraGrade = ($ExtraTotal / 25) * 5;
        $ExtraGrade = number_format($ExtraGrade, 2, '.', ',');
//******************************************************************************
 
        $FinalPercent = $LabGrade + $QuizGrade + $PartGrade + $ExamGrade + $ProjectGrade + $ExtraGrade;
            
//******************************************************************************            
            
        if (isset($FinalPercent))
{
	if ($FinalPercent >= 90)
	{
	   $FinalLetter = "A";
	}
	elseif ($FinalPercent >= 80 and $FinalPercent < 90)
	{
        $FinalLetter = "B";
	}
	elseif ($FinalPercent >= 70 and $FinalPercent < 80)
	{
        $FinalLetter = "C";
	}
	else if ($FinalPercent >= 60 and $FinalPercent < 70)
	{
	   $FinalLetter = "D";
	}
	else if ($FinalPercent < 60)
	{
	   $FinalLetter = "F";
	}
}

        }
            
    ?>


</div>
<div align="left">
    <table id="results">
  <tr>
    <th colspan="3">Weighted Percentages</th>
      <th class="NoGroup"></th>
    <th colspan="3">Final Grades</th>
  </tr>
  <tr class="TableGroupColor2" >
    <td class="TableGroupLeft">Labs:</td>
    <td colspan="2" class="TableGroupRight"><span id="displayLab">
    <?php if (isset($LabGrade)){ echo $LabGrade . "% out of 30%"; } ?>
    </span></td>
    <td class="NoGroup"></td>
    <td class="TableGroupLeft">Final Percentage:</td>
    <td colspan="2" class="TableGroupRight"><span id="displayTotal"><?php if (isset($FinalPercent)){ echo $FinalPercent . "%"; } ?></span></td>
  </tr>
  <tr  class="TableGroupColor2" >
    <td class="TableGroupLeft">Quizes:</td>
    <td colspan="2" class="TableGroupRight"><span id="displayQuiz">
    <?php if (isset($QuizGrade)){ echo $QuizGrade  . "% out of 10%"; } ?></span></td>
    <td></td>
    <td class="TableGroupLeft">Final Letter Grade:</td>
    <td colspan="2" class="FinalGradeSpace"><span id="displayLetter"><?php if (isset($FinalLetter)){ echo $FinalLetter; } ?></span></td>
  </tr>
  <tr  class="TableGroupColor2" >
    <td class="TableGroupLeft">Participation:</td>
    <td colspan="2" class="TableGroupRight"><span id="displayPart">
    <?php if (isset($PartGrade)){ echo $PartGrade  . "% out of 10%"; } ?></span></td>
    <td colspan="4" class="NoGroup"></td>
  </tr>
  <tr  class="TableGroupColor2" >
    <td class="TableGroupLeft">Exams:</td>
    <td colspan="2" class="TableGroupRight"><span id="displayExam">
    <?php if (isset($ExamGrade)){ echo $ExamGrade  . "% out of 30%"; } ?></span></td>
    <td colspan="4" class="NoGroup"></td>
  </tr>
  <tr  class="TableGroupColor2" >
    <td class="TableGroupLeft">Project:</td>
    <td colspan="2" class="TableGroupRight"><span id="displayProject">
    <?php if (isset($ProjectGrade)){ echo $ProjectGrade  . "% out of 20%"; } ?></span></td>
    <td colspan="4" class="NoGroup"></td>
  </tr>
  <tr  class="TableGroupColor2" >
    <td class="TableGroupLeft">Extra Credit:</td>
    <td colspan="2" class="TableGroupRight"><span id="displayExtra">
    <?php if (isset($ExtraGrade)){ echo $ExtraGrade  . "% out of 5%"; } ?></span></td>
    <td colspan="4" class="NoGroup"></td>
  </tr>
  </table>
</div>



</body>

</html>
