<?php

/*====================Paginnation==================*/
=======
/*======Paginnation====*/
>>>>>>> 81609555af0c87f80bb728d44f9d3f0bd022dae3
//approved Learners
$result_per_page_approved = 10;
$learner_approved = $con -> query ("SELECT * FROM learner where Status = 'Approved'");
$number_of_learners_approved = mysqli_num_rows($learner_approved);
$number_of_pages_approved = ceil($number_of_learners_approved/$result_per_page_approved);

if(!isset($_GET['page_approved']))
{
	$page_approved = 1;
}
else
{
	$page_approved = $_GET['page_approved'];
}

$this_page_first_result_approved = ($page_approved-1)*$result_per_page_approved;

$learner_approved = $con -> query ("SELECT * FROM learner where Status = 'Approved' LIMIT " . $this_page_first_result_approved . "," .$result_per_page_approved);

//Waiting Students
$result_per_page = 10;
//get number of recods in the database
$learner = $con -> query ("SELECT * FROM learner where Status = 'Waiting'");
$number_of_learners = mysqli_num_rows($learner);
$number_of_pages = ceil($number_of_learners/$result_per_page);

if(!isset($_GET['page']))
{
	$page = 1;
}
else
{
	$page = $_GET['page'];
}

$this_page_first_result = ($page-1)*$result_per_page;

$learner = $con -> query ("SELECT * FROM learner where Status = 'Waiting' LIMIT " . $this_page_first_result . "," .$result_per_page);

//Staff mambers
$result_per_page = 10;
//get number of recods in the database
$staff = $con -> query ("SELECT * FROM staff");
$number_of_staff = mysqli_num_rows($staff);
$number_of_pages = ceil($number_of_staff/$result_per_page);

if(!isset($_GET['page']))
{
	$page = 1;
}
else
{
	$page = $_GET['page'];
}

$this_page_first_result = ($page-1)*$result_per_page;

$staff = $con -> query ("SELECT * FROM staff LIMIT " . $this_page_first_result . "," .$result_per_page);

//Pagination//

?>