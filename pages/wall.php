<?php include('../components/header.php'); ?>
<link rel="stylesheet" href="../assets/styles/wall.css">
<link rel="stylesheet" href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css'
      integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

<div class='main-container'>
    <p class='breadcrumb'>
        <a href='home.php'>Home</a> /
        Wall
    </p>
    <p class='main-title'>
	<i class="fa fa-globe"></i></i> Wall
    </p>
</div>
<div class='wall'>
	<div class="important-notice">
		<p class="grid-title">Important Notices</p>
		<div class="filter-box">
                <button class='filter-btn btn'>Starred</button>
				<button class='filter-btn btn'>All</button>
		</div>
		<!--Ecreate important notices -->
		<div class="create-notice-box">
			<div class="box-title">
			Create Important Notice
			</div>
			<form action="" id="create-notice">
				<div class="row-1">
					<input class='input-field-title' type='text' placeholder='Title'/>
					<p class="field-header"> date</p>	 
				</div>
				<div class="row-2">
					<label for="myFile" class='filter-btn btn'>
					<input type="file" id="myFile" name="filename" hidden>
					Upload Picture</label>
				</div>
				<div class="row-3">
				<input class='input-field-message' type='text' placeholder='Message'/>
				</div>
				<div class="row-4">
					<button class='filter-btn btn'>Create Notice</button>
				</div>
			</form>
		</div>
		<!--Edit important notices -->			
		<div class="create-notice-box">
			<div class="box-title">
			Edit Important Notice
			</div>
			<form action="" id="create-notice">
				<div class="row-1">
					<input class='input-field-title' type='text' placeholder='Title'/>
					<p class="field-header"> date</p>	 
				</div>
				<div class="row-2">
					<label for="myFile" class='filter-btn btn'>
					<input type="file" id="myFile" name="filename" hidden>
					Edit Upload</label>
				</div>
				<div class="row-3">
				<input class='input-field-message' type='text' placeholder='Message'/>
				</div>
				<div class="row-4">
					<button class='filter-btn btn'>Edit Notice</button>
				</div>
			</form>
		</div>
		<!--notices -->	
		<div class="notice-box">
			<form action="" id="create-notice">
				<div class="row-1 row-1-gap">
					<input class='input-field-title' type='text' placeholder='Title'/>
					<p class="field-header"> date</p>	 
				</div>
				<img src="" alt="" class="image-box">
				<div class="row-3">
				<input class='input-field-message' type='text' placeholder='Message'/>
				</div>
				<div class="row-4">
					<button class='filter-btn btn'>Add Star </button>
					<button class='filter-btn btn'>Edit </button>
					<button class='filter-btn btn'>Delete </button>
				</div>
			</form>
		</div>


	</div>
	<!--Common wall -->	
	<div class="common-wall">
		<p class="grid-title">Common Wall</p>
		<!--Create post -->		
        <div class="create-post-box">
			<div class = "box-title">Create Post</div>
			<input type="text" placeholder="Title" class="create-post-title">
			<div class="row-0">
				<input type="text" placeholder="Content" class="create-post-content">
				<img src="" alt="" class="image-box">
			</div>
			<div class="row-2">
					<label for="myFile" class='filter-btn btn'>
					<input type="file" id="myFile" name="filename" hidden>
					Attachment</label>
				</div>
			<div class="create-post-buttons">
				<button class='filter-btn btn'>Submit </button>
				<button class='filter-btn btn'>Cancel </button>
			</div>	
		</div>
		<!--Filter box -->	
		<div class="filter-box">
			<div class="filter-left">
				<button class='filter-btn btn'>Search by Title</button>
				<button class='filter-btn btn'>Search by ID</button>
			</div>
			<div class="filter-right">
				<button class='filter-btn btn'>Liked</button>
				<button class='filter-btn btn'>My Posts</button>
				<button class='filter-btn btn'>All</button>	
			</div>
		</div>
		<!--Post-->	
		<div class="post-box">
			<div class="post-content">
				<img src="" alt="" class="dp-box">
				<div class="f-name">First Name</div>
				<div class="l-name">Last Name</div>
				<div class="post-time">Timestamp</div>
				<div class="post-delete">delete</div>
				<img src="" alt="" class="pic-box">
				<div class="post-title"> Title </div>
				<div class="post-text"></div>
				<div class="report-btn">Report</div>
				<div class="post-like">Like</div>
				<div class="post-like-count">Like Count</div>
				<div class="post-dislike">Dislike</div>
				<div class="post-dislike-count">Dislike Count</div>
			</div>
			<!--Post report -->				
			<div class="post-report">
				<div class="box-title">Report Post</div>
				<input type="text" placeholder="Cause" class="input-field-report">
				<div class="create-post-buttons">
					<button class='filter-btn btn'>Submit </button>
					<button class='filter-btn btn'>Cancel </button>
				</div>
			</div>

			<div class="comment-box">
				<div class="box-title">Comments</div>
				<div class="comment-content">
					<img src="" alt="" class="comment-dp">
					<div class="c-fname">First Name</div>
					<div class="c-lname">Last Name</div>
					<div class="c-time">Timestamp</div>
					<div class="c-edit">Edit</div>
					<div class="c-dlt">delete</div>
					<div class="c-report">Report</div>
					<div class="c-txt"></div>
					<div class="c-like-count">Like count</div>
					<div class="c-like">Like </div>
					<div class="c-dislike-count">Disike count</div>
					<div class="c-dislike">Disike </div>
				</div>
				<!--Comment report -->				
				<div class="comment-report">
					<div class="box-title">Report Comment</div>
					<input type="text" placeholder="Cause" class="input-field-report">
					<div class="create-post-buttons">
						<button class='filter-btn btn'>Submit </button>
						<button class='filter-btn btn'>Cancel </button>
				</div>
				</div>
			</div>
		</div>		


		
		
		






	</div>
</div>

<?php include('../components/footer.php'); ?>
