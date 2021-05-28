<?php
session_start();
require('functions.php');

if(isset($_POST['submit'])){

		if ($file1=="" && $file2=="" && $file3=="" && $file4=="") {
			updateDetails();
		}
		elseif ($file1!="" && $file2=="" && $file3=="" && $file4=="") {
			updateWithImage($file1, $temp1, image1);
		}
		elseif ($file1=="" && $file2!="" && $file3=="" && $file4=="") {
			updateWithImage($file2, $temp2, image2);
		}
		elseif ($file1=="" && $file2=="" && $file3!="" && $file4=="") {
			updateWithImage($file3, $temp3, image3);
		}
		elseif ($file1=="" && $file2=="" && $file3=="" && $file4!="") {
			updateWithImage($file4, $temp4, image4);
		}
}

?>