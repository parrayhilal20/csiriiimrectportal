<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Application Form</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- FontAwesome JS-->
    <script defer src="assets/plugins/fontawesome/js/all.min.js"></script>
    
    <!-- App CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

</head> 

<body class="app">   	
    <header class="app-header fixed-top">	   	            
        <div class="app-header-inner">  
	        <div class="container-fluid py-2">
		        <div class="app-header-content"> 
		            <div class="row justify-content-between align-items-center">
			        
				    <div class="col-auto">
					    <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
						    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
					    </a>
				    </div><!--//col-->
		            <div class="search-mobile-trigger d-sm-none col">
			            <i class="search-mobile-trigger-icon fa-solid fa-magnifying-glass"></i>
			        </div><!--//col-->
		            
		            <div class="app-utilities col-auto">
			            <div class="app-utility-item app-user-dropdown dropdown">
				            <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="https://w7.pngwing.com/pngs/81/570/png-transparent-profile-logo-computer-icons-user-user-blue-heroes-logo-thumbnail.png" alt="user profile"></a>
				            <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
								<!-- <li><hr class="dropdown-divider"></li> -->
								<li><a class="dropdown-item" href="login.html">Log Out</a></li>
							</ul>
			            </div><!--//app-user-dropdown--> 
		            </div><!--//app-utilities-->
		        </div><!--//row-->
	            </div><!--//app-header-content-->
	        </div><!--//container-fluid-->
        </div><!--//app-header-inner-->
        <div id="app-sidepanel" class="app-sidepanel sidepanel-hidden"> 
	        <div id="sidepanel-drop" class="sidepanel-drop"></div>
	        <div class="sidepanel-inner d-flex flex-column">
		        <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
		        <div class="app-branding">
		            <a class="app-logo" href="index.html"><img class="logo-icon me-2" src="https://iiim.res.in/wp-content/uploads/2017/10/cropped-Council_of_Scientific_and_Industrial_Research_logo.png" alt="logo"><span class="logo-text">CSIR-IIIM</span></a>
	
		        </div><!--//app-branding-->  
			    <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
				    <ul class="app-menu list-unstyled accordion" id="menu-accordion">
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link" href="index.html">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
		  <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
		</svg>
						         </span>
		                         <span class="nav-link-text">Dashboard</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link" href="viewapplication.php">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
  <circle cx="3.5" cy="5.5" r=".5"/>
  <circle cx="3.5" cy="8" r=".5"/>
  <circle cx="3.5" cy="10.5" r=".5"/>
</svg>
						         </span>
		                         <span class="nav-link-text">View Application</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
				    </ul><!--//app-menu-->
			    </nav><!--//app-nav-->
	        </div><!--//sidepanel-inner-->	
	    </div><!--//app-sidepanel-->
    </header><!--//app-header-->
    <form action="applicationform.php" method="post" enctype='multipart/form-data'>
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
				<h1 class="app-page-title">APPLICATION FORM</h1>
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-3">
		                <h3 class="section-title">Advertisement Details</h3>
		                <div class="section-intro">Enter Advertisement details given in notification</div>
	                </div>
	                <div class="col-12 col-md-9">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
								    <div class="mb-3">
									    <label for="setting-input-1" class="form-label">Advertisement No.</label>
									    <input type="text" class="form-control" id="setting-input-1" name="advertisement_number" required>
									</div>
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">Post Applied for : </label>
									    <input type="text" class="form-control" id="setting-input-2" name="postapplied" required>
									</div>
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">Post Code</label>
									    <input type="text" class="form-control" id="setting-input-2" name="postname" required>
									</div>
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">UTR /Transaction No. & Date</label>
									    <input type="text" class="form-control" id="setting-input-2" name="trancsation_number_date" required>

										<label for="setting-input-1" class="form-label">Name of the Bank & Branch</label>
									    <input type="text" class="form-control" id="setting-input-2" name="bank_and_branch"  required>
									</div>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->		
			    <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-3">
		                <h3 class="section-title">Personal Details</h3>
		                <div class="section-intro">Enter your personal details as per Matriculation Certificates</div>
	                </div>
	                <div class="col-12 col-md-9">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
								    <div class="mb-3">
									    <label for="setting-input-1" class="form-label">Full Name<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus"  data-bs-placement="top" data-bs-content="(in BLOCK letters) Prefix “Mr., Miss’ or ‘Mrs.’ should be used"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
  <circle cx="8" cy="4.5" r="1"/>
</svg></span></label>
									    <input type="text" class="form-control" id="setting-input-1" name="fullname" required>
									</div>
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label"> Father’s/Husband’s Name
										</label>
									    <input type="text" class="form-control" id="setting-input-2" name="father_husband_name"  required>
									</div>
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">Occupation
										</label>
									    <input type="text" class="form-control" id="setting-input-2" name="occupation" required>
									</div>
									<div class="mb-3">
										<label for="setting-input-1" class="form-label">D.O.B (DD-MM-YYYY)<span class="ms-2" data-bs-container="body" data-bs-toggle="popover" data-bs-trigger="hover focus"  data-bs-placement="top" data-bs-content="D.O.B format must me (Day-Month-Year)"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
											<path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
											<circle cx="8" cy="4.5" r="1"/>
										  </svg></span></label>
									    <input type="text" class="form-control" id="setting-input-2" name="dob" required>
									</div>

									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">Age as on 10-10-2020 
										</label>
										<table class="table table-bordered border-primary">
											<thead  class="table-active">
												<th>Years</th>
												<th>Months</th>
												<th>Days</th>
											</thead>
											<tbody>
											  <tr>
												<th>
													<input type="number" class="form-control border border-info" id="setting-input-2" placeholder="Years" name="years" required >
												</th>
												<th>
													<input type="number" class="form-control border border-info" id="setting-input-2" placeholder="Months" name="months" required >
												</th>
												<th>
													<input type="number" class="form-control border border-info" id="setting-input-2" placeholder="Days" name="days" required >
												</th>
											  </tr>
											</tbody>
											</table>
									</div>
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">Gender</label>
										<div class="col-6 form-check mb-3">
											<input class="form-check-input" type="checkbox" name="gender" id="settings-checkbox-1">
											<label class="form-check-label" for="settings-checkbox-1">
												Male
											</label>
										</div>
										<div class="col-6 form-check mb-3">
											<input class="form-check-input" type="checkbox" name="gender"  id="settings-checkbox-1">
											<label class="form-check-label" for="settings-checkbox-1">
												Female
											</label>
										</div>
									</div>

									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">Place of Birth</label>
									    <input type="text" class="form-control" id="setting-input-2" name="place_of_birth"  required>
									</div>
									
									<div class="mb-3">
										<label for="setting-input-1" class="form-label">Address For Correspondence </label>
										<input type="email" class="form-control" id="setting-input-3" name="address_for_correspondence" >
									</div>

									

									<div class="mb-3">
										<label for="setting-input-1" class="form-label">City & PIN code</label>
										<input type="email" class="form-control" id="setting-input-3" name="city_and_pin" >
									</div>

									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">Telephone No.</label>
									    <input type="text" class="form-control" id="setting-input-2" name="telephone_number"  required>
									</div>
									<div class="mb-3">
									    <label for="setting-input-3" class="form-label">Fax No./E-mail ID</label>
									    <input type="email" class="form-control" id="setting-input-3" name="fax_email">
									</div>

									<div class="mb-3">
										<label for="setting-input-1" class="form-label">Name of the State</label>
										<input type="email" class="form-control" id="setting-input-3" name="state">
									</div>

									<div class="mb-3">
										<label for="setting-input-1" class="form-label">Permanent Address </label>
										<input type="email" class="form-control" id="setting-input-3" name="permanent_address">
									</div>

									<div class="mb-3">
										<div class="col-6 form-check mb-3">
											<input class="form-check-input" type="checkbox"  id="settings-checkbox-1" name="domicile">
											<label class="form-check-label" for="settings-checkbox-1">
												Are you a citizen of India by birth or by domicile:
											</label>
										</div>
										<div class="col-6 form-check mb-3">
											<input class="form-check-input" type="checkbox"  id="settings-checkbox-1" name="domicile" >
											<label class="form-check-label" for="settings-checkbox-1">
												No
											</label>
										</div>
									</div>

									<div class="mb-3">
										<label for="setting-input-1" class="form-label">Name of state to which you belong ? </label>
										<input type="email" class="form-control" id="setting-input-3" name="state_belong">
									</div>

									<div class="col-auto">
										<label for="setting-input-1" class="form-label">Category</label>
										<select class="form-select w-auto" name="category">
											  <option selected="" value="option-1">-Select Category-</option>
											  <option value="SC">SC</option>
											  <option value="ST">ST</option>
											  <option value="OBC">OBC</option>
											  <option value="GEN">GEN</option>
											  <option value="Pwd">PwD</option>
											  <option value="ESM">ESM</option>
											  <option value="EWS">EWS</option>
										</select>
									</div>

									<div class="col-auto">
										<label class="form-check-label" for="settings-checkbox-1">
											Whether you belong to one of the : Zoroastrian (Parsi) minority communities ?
										</label>
										<select class="form-select w-auto" name="minority_communities">
											  <option selected="" value="option-1">-Select-</option>
											  <option value="Muslim">Muslim</option>
											  <option value="Christian">Christian</option>
											  <option value="Sikh">Sikh</option>
											  <option value="Buddhist">Buddhist</option>
											  <option value="Zoroastrian (Parsi)">Zoroastrian (Parsi)</option>
											  <option value="ESM">ESM</option>
											  <option value="EWS">EWS</option>
										</select>
									</div>
									<div class="mb-3">
										<label for="setting-input-1" class="form-label">Are you related to any employee of IIIM/CSIR? If so, give details.
											</label>
										<input type="email" class="form-control" id="setting-input-3" name="realted_employee">
									</div>
									<div class="mb-3">
										<label for="setting-input-1" class="form-label">Are you willing to accept minimum pay of the scale? 
											(Respond with Yes/No) If not, state what is the lowest initial pay that you would accept in prescribed pay scale
											</label>
										<input type="email" class="form-control" id="setting-input-3" name="minimum_pay_scale">
									</div>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->

				<hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-2">
		                <h3 class="section-title">Qualifications</h3>
		                <div class="section-intro">Enter your Educational/Professional Qualifications details of Matric and after Matriculation </div>
	                </div>
	                <div class="col-12 col-md-10">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
									<div class="mb-3">

										<table class="table table-bordered border-primary">
											<thead  class="table-active">
												<th></th>
												<th>Examination Passed</th>
												<th>Course Duration</th>
												<th>Division</th>
												<th>Percentage</th>
												<th>Year of Passing</th>
												<th>Board/University</th>
												<th>Subjects</th>
											</thead>
											<tbody>
											  <tr>
												<th>High School</th>
												<th>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Exam" name="exam[]" required >
												</th>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Duration" name="duration[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Division" name="division[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Percentage" name="percentage[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Year of Passing" name="year[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Board/University" name="board[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Subjects" name="subjects[]" required >
												</td>
											  </tr>
											  <tr>
												<th>Intermediate</th>
												<th>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Exam" name="exam[]" required >
												</th>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Duration" name="duration[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Division" name="division[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Percentage" name="percentage[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Year of Passing" name="year[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Board/University" name="board[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Subjects" name="subjects[]" required >
												</td>
											  </tr>
											  <tr>
												<th>
													Diploma
												</th>
												<th>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Exam" name="exam[]" required >
												</th>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Duration" name="duration[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Division" name="division[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Percentage" name="percentage[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Year of Passing" name="year[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Board/University" name="board[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Subjects" name="subjects[]" required >
												</td>
											  </tr>
											  <tr>
												<th>Graduate</th>
												<th>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Exam" name="exam[]" required >
												</th>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Duration" name="duration[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Division" name="division[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Percentage" name="percentage[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Year of Passing" name="year[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Board/University" name="board[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Subjects" name="subjects[]" required >
												</td>
											  </tr>
											  <tr>
												<th>Post Graduate</th>
												<th>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Exam" name="exam[]" required >
												</th>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Duration" name="duration[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Division" name="division[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Percentage" name="percentage[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Year of Passing" name="year[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Board/University" name="board[]" required >
												</td>
												<td>
													<input type="text" class="form-control border border-info" id="setting-input-2" placeholder="Subjects" name="subjects[]" required >
												</td>
											  </tr>
											  
											</tbody>
										  </table>
									</div>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->
				 <hr class="mb-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-3">
		                <h3 class="section-title">Employment Details</h3>
		                <div class="section-intro">Enter Employment details</div>
	                </div>
	                <div class="col-12 col-md-9">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
								    <div class="mb-3">
									    <label for="setting-input-1" class="form-label">Name & Address of
											Employer</label>
									    <input type="text" class="form-control" id="setting-input-1" name="name_address_employer" required>
									</div>
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">Post Held</label>
									    <input type="text" class="form-control" id="setting-input-2" name="post_held" required>
									</div>
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">Pay scale</label>
									    <input type="text" class="form-control" id="setting-input-2" name="pay_scale"required>
									</div>
									<div class="mb-3">
									    <label for="setting-input-2" class="form-label">Date From</label>
									    <input type="text" class="form-control" id="setting-input-2" name="date_from" required>
									</div>
									<div class="mb-3">
										<label for="setting-input-1" class="form-label">Date To</label>
									    <input type="text" class="form-control" id="setting-input-2" name="date_to" required>
									</div>
									<div class="mb-3">
										<label for="setting-input-1" class="form-label">Nature of Duties</label>
									    <input type="text" class="form-control" id="setting-input-2" name="nature_of_duties" required>
									</div>
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->
                <hr class="my-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-4">
		                <h3 class="section-title">Photograph & Sign</h3>
		                <div class="section-intro">Upload your latest passport size Photograph and Signature</div>
	                </div>
	                <div class="col-12 col-md-8">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    
						    <div class="app-card-body">
							    <div class="row justify-content-between">
									<div class="col-auto">
										<label for="formFile" class="form-label">Photograph</label>
  										<input class="form-control" type="file" id="formFile" name="photograph">
									</div>
							    </div>
								    
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->
               <hr class="my-4">
                <div class="row g-4 settings-section">
	                <div class="col-12 col-md-12">
		                <div class="app-card app-card-settings shadow-sm p-4">
						    <div class="app-card-body">
							    <div class="row justify-content-between">
									<button type="submit" class="btn app-btn-primary btn-block">Submit</button>
							    </div>
								    
						    </div><!--//app-card-body-->
						    
						</div><!--//app-card-->
	                </div>
                </div><!--//row-->
               <hr class="my-4">
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->
	    
	    <footer class="app-footer">
		    <div class="container text-center py-3">
		         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed and Developed <span class="sr-only">by</span> by <a class="app-link" href="http://iiim.res.in" target="_blank">CSIR-Indian Institute of Integrative Medicine, Jammu</a> <i class="fas fa-copyright" style="color: #fb866a;"></i> All Rights reserved</small>
		       
		    </div>
	    </footer><!--//app-footer-->
	    
    </div><!--//app-wrapper-->    	

	</form>				

 
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 

</body>
</html> 

