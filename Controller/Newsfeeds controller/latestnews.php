<?php
require("../../connection/conect.php");
$latest = $con -> query ("select * from news order by timestamp desc LIMIT 3");
while ($latestresult = mysqli_fetch_array($latest))
{
	echo
	'<br>
                <div class="row">
                  <div class="col-sm-4"> <a class="hover-img" href="#"> <img src="documents/'.$latestresult[4].'" alt="News Image"> </a> </div>
                  <div class="col-sm-8 meta-info">
                    <h3><a href="javascript:void(0)">'.$latestresult['1'].'</a></h3>
                    <div class="meta">'.$latestresult[3].'</div>
                  </div>
                </div>
				<hr>
	';
}
?>