<?php
require("../../connection/conect.php");
$news = $con -> query ("select * from news LIMIT 5");
while($result = mysqli_fetch_array($news))
{
	echo '
		<div class="news-info">
            <div class="news-thumb">';if($result[4] == ''){echo "Bhevu High School News";}else{
				if($result[5] == 'video/mp4')
				{
					echo '
						<!-- 16:9 aspect ratio -->
					<div class="embed-responsive embed-responsive-16by9">
					  <iframe class="embed-responsive-item" src="documents/'.$result[4].'"></iframe>
					</div>
					';
				}
				else
				{
					echo '<img src="documents/'.$result[4].'" alt="News Image">';
				}
			}
			echo'</div>
            <div class="news-cnt">
              <h3>'.$result[1].'</h3>
              <div class="news-tags">
                <ul class="time">
                  <li><i class="fa fa-user" aria-hidden="true"></i> by Admin</li>
                  <li><i class="fa fa-clock-o" aria-hidden="true"></i>'.$result[3].'</li>
                </ul>
              </div>
              <p>'.$result[2].'</p>
            </div>
          </div>
	';
}
?>
<!--<ul class="tags pull-right">
                  <li><a href="classic-news.php?Comment='.'Comments'.'">Comment</a></li>
                </ul>-->