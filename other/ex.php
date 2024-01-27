		





			 <?php

                 if(isset($_POST["Submit"])){
                 	$val = $_POST["search"];
                 echo "$val";
                  echo '<script type="text/javascript">'; 
                   echo 'alert("review your answer")'; 
                  echo 'window.location.href = "index.php"';
                 echo '</script>'; 
                 }
                ?>