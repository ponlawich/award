<?php

 function toThaiNumber_function($str_digit)
   {
          //if เพื่อแปลงตัวเลขอารบิกเป็นเลขไทย
          if($str_digit=="1") { $str_result="๑";}
          elseif($str_digit=="2") { $str_result="๒";}
          elseif($str_digit=="3") { $str_result="๓";}
          elseif($str_digit=="4") { $str_result="๔";}
          elseif($str_digit=="5") { $str_result="๕";}
          elseif($str_digit=="6") { $str_result="๖";}
          elseif($str_digit=="7") { $str_result="๗";}
          elseif($str_digit=="8") { $str_result="๘";}
          elseif($str_digit=="9") { $str_result="๙";}
          elseif($str_digit=="0") { $str_result="๐";}
          else { $str_result = $str_digit;}
  
          return $str_result; //ส่งผลลัพธ์กลับส่วนที่เรียกใช้
    }
 
   function toThaiNumber($int_number)
   {
      $str_number = str_split($int_number); //นำตัวเลขมาตัดเป็นหลักๆ ใส่ใน Array
      $int_numberlength = count($str_number); //หาจำนวนหลักว่าทั้งหมดกี่หลัก
      for($i=0;$i<$int_numberlength;$i++) //วนลูปจำนวนรอบเท่ากับจำนวนหลักของเลขที่ทำการแปลง
      {
            //นำตัวเลขแต่ละหลักมาแปลงใน Function toThaiNumber_function แล้วเก็บผลลัพธ์ต่อๆ กัน
            $str_result .= toThaiNumber_function($str_number[$i]);
      }
      return $str_result; //ส่งผลลัพธ์กลับส่วนที่เรียกใช้
    }

?>