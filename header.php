<?php
session_start();

if(!isset($_SESSION['logged']))
{
	header('Location: login.php');
	exit();
}

?>
<!DOCTYPE html PUBLIC /"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">



</script>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"pl-PL\">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>StaffSystem</title>
<link rel="stylesheet" type="text/css" href="style.header.css">
<style>
body
{
	font-size: 25px;
}
</style>
	<script style="float: right" type="text/javascript" src="cos.js"></script>

</head>

<body onload=" odliczanie(); left();" >
		<!-- <link href="style.navi.css" rel="stylesheet" type="text/css" /> -->


				<div class="nav">

				<a href="http://www.bradfordcounsellingservices.org.uk">	<img class="logo" src="img/zdjecie.png" /></a>

					<ol  class="list">
						<li class="list1"><a>List</a>
							<ul class="list2">
								<li class="list3"><a href="list.php">Active</a></li>
								<li class="list3"><a href="listnon.php">Ex</a></li>
							</ul>

						</li>
						<li class="list1"><a>Staff</a>
						<ul class="list2">
							<li class="list3"><a href="wyszukiwarka.php">Search</a></li>
							<li class="list3"><a href="profile.php">Profiles</a></li>
							<li class="list3"><a href="edit.php">Edit</a></li>
							<li class="list3"><a href="archive.php">Archive</a></li>
						</ul>
						</li>
						<li class="list1"><a href="create.php">Create</a>
						<li class="list1"><a>Meetings</a>
							<ul class="list2">
								<li class="list3"><a href="meeting.php">General & statistics</a></li>
								<li class="list3"><a href="meetings.php">Group Supervision</a></li>
								<li class="list3"><a href="appraisals.php">1-2-1</a></li>
								<li class="list3"><a href="onetoone.php">Appraisals</a></li>
								<li class="list3"><a href="super.php">Supervision</a></li>
							</ul>
						</li>
						<li class="list1"><a>Monitoring</a>
							<ul class="list2">
								<li class="list3"><a href="monitor.php">Staff</a></li>
								<li class="list3"><a href="client.php">Client</a></li>
							</ul>
						</li>
						<li class="list1"><a>Help</a>
							<ul class="list2">
								<li class="list3"><a href="mail.php">Contact</a></li>
								<li class="list3"><a href="handbook.php">Handbook</a></li>
							</ul>
						</li>

					</ol>
					<div style="font-size: 20px;" id="Session">Hi  <?php echo $_SESSION['login']; ?> !<br/>    <div id="czas"></div><button><a href="logout.php">Logout</a></button>
					<script type="text/javascript">counter(0,0,35,0);</script>
					 <br/></div>
						</div>

				</div>
				<div><br/></div>
