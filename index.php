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
		            <div class="app-search-box col">
		                <form class="app-search-form">   
							<input type="text" placeholder="Search..." name="search" class="form-control search-input">
							<button type="submit" class="btn search-btn btn-primary" value="Search"><i class="fa-solid fa-magnifying-glass"></i></button> 
				        </form>
		            </div><!--//app-search-box-->
		            
		            <div class="app-utilities col-auto">
			            <div class="app-utility-item app-notifications-dropdown dropdown">    
				            <a class="dropdown-toggle no-toggle-arrow" id="notifications-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" title="Notifications">
					            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"/>
  <path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
</svg>
					            <span class="icon-badge">3</span>
					        </a><!--//dropdown-toggle-->
					        
					        <div class="dropdown-menu p-0" aria-labelledby="notifications-dropdown-toggle">
					            <div class="dropdown-menu-header p-3">
						            <h5 class="dropdown-menu-title mb-0">Notifications</h5>
						        </div><!--//dropdown-menu-title-->
						        <div class="dropdown-menu-content">
							       <div class="item p-3">
								        <div class="row gx-2 justify-content-between align-items-center">
									        <div class="col-auto">
										       <img class="profile-image" src="assets/images/profiles/profile-1.png" alt="">
									        </div><!--//col-->
									        <div class="col">
										        <div class="info"> 
											        <div class="desc">Amy shared a file with you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
											        <div class="meta"> 2 hrs ago</div>
										        </div>
									        </div><!--//col--> 
								        </div><!--//row-->
								        <a class="link-mask" href="notifications.html"></a>
							       </div><!--//item-->
							       <div class="item p-3">
								        <div class="row gx-2 justify-content-between align-items-center">
									        <div class="col-auto">
										        <div class="app-icon-holder">
											        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z"/>
	  <path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z"/>
	</svg>
										        </div>
									        </div><!--//col-->
									        <div class="col">
										        <div class="info"> 
											        <div class="desc">You have a new invoice. Proin venenatis interdum est.</div>
											        <div class="meta"> 1 day ago</div>
										        </div>
									        </div><!--//col-->
								        </div><!--//row-->
								        <a class="link-mask" href="notifications.html"></a>
							       </div><!--//item-->
							       <div class="item p-3">
								        <div class="row gx-2 justify-content-between align-items-center">
									        <div class="col-auto">
										        <div class="app-icon-holder icon-holder-mono">
											        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart-line" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
</svg>
										        </div>
									        </div><!--//col-->
									        <div class="col">
										        <div class="info"> 
											        <div class="desc">Your report is ready. Proin venenatis interdum est.</div>
											        <div class="meta"> 3 days ago</div>
										        </div>
									        </div><!--//col-->
								        </div><!--//row-->
								        <a class="link-mask" href="notifications.html"></a>
							       </div><!--//item-->
							       <div class="item p-3">
								        <div class="row gx-2 justify-content-between align-items-center">
									        <div class="col-auto">
										       <img class="profile-image" src="assets/images/profiles/profile-2.png" alt="">
									        </div><!--//col-->
									        <div class="col">
										        <div class="info"> 
											        <div class="desc">James sent you a new message.</div>
											        <div class="meta"> 7 days ago</div>
										        </div>
									        </div><!--//col--> 
								        </div><!--//row-->
								        <a class="link-mask" href="notifications.html"></a>
							       </div><!--//item-->
						        </div><!--//dropdown-menu-content-->
						        
						        <div class="dropdown-menu-footer p-2 text-center">
							        <a href="notifications.html">View all</a>
						        </div>
															
							</div><!--//dropdown-menu-->					        
				        </div><!--//app-utility-item-->
			            <div class="app-utility-item">
				            <a href="settings.html" title="Settings">
					            <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
  <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
</svg>
					        </a>
					    </div><!--//app-utility-item-->
			            
			            <div class="app-utility-item app-user-dropdown dropdown">
				            <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="assets/images/user.png" alt="user profile"></a>
				            <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
								<li><a class="dropdown-item" href="account.html">Account</a></li>
								<li><a class="dropdown-item" href="settings.html">Settings</a></li>
								<li><hr class="dropdown-divider"></li>
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
		            <a class="app-logo" href="index.html"><img class="logo-icon me-2" src="assets/images/app-logo.svg" alt="logo"><span class="logo-text">PORTAL</span></a>
	
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
					        <a class="nav-link" href="docs.html">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z"/>
  <path fill-rule="evenodd" d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z"/>
</svg>
						         </span>
		                         <span class="nav-link-text">Docs</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link" href="orders.html">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
  <circle cx="3.5" cy="5.5" r=".5"/>
  <circle cx="3.5" cy="8" r=".5"/>
  <circle cx="3.5" cy="10.5" r=".5"/>
</svg>
						         </span>
		                         <span class="nav-link-text">Orders</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    <li class="nav-item has-submenu">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link submenu-toggle active" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-1" aria-expanded="true" aria-controls="submenu-1">
						        <span class="nav-icon">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z"/>
	  <path d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z"/>
	</svg>
						         </span>
		                         <span class="nav-link-text">Pages</span>
		                         <span class="submenu-arrow">
		                             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
	</svg>
	                             </span><!--//submenu-arrow-->
					        </a><!--//nav-link-->
					        <div id="submenu-1" class="collapse submenu submenu-1 show" data-bs-parent="#menu-accordion">
						        <ul class="submenu-list list-unstyled">
							        <li class="submenu-item"><a class="submenu-link" href="notifications.html">Notifications</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="account.html">Account</a></li>
							        <li class="submenu-item"><a class="submenu-link active" href="settings.html">Settings</a></li>
							        
						        </ul>
					        </div>
					    </li><!--//nav-item-->
					    <li class="nav-item has-submenu">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-2" aria-expanded="false" aria-controls="submenu-2">
						        <span class="nav-icon">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-columns-gap" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M6 1H1v3h5V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12h-5v3h5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8H1v7h5V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6h-5v7h5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z"/>
	</svg>
						         </span>
		                         <span class="nav-link-text">External</span>
		                         <span class="submenu-arrow">
		                             <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
	</svg>
	                             </span><!--//submenu-arrow-->
					        </a><!--//nav-link-->
					        <div id="submenu-2" class="collapse submenu submenu-2" data-bs-parent="#menu-accordion">
						        <ul class="submenu-list list-unstyled">
							        <li class="submenu-item"><a class="submenu-link" href="login.html">Login</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="signup.html">Signup</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="reset-password.html">Reset password</a></li>
							        <li class="submenu-item"><a class="submenu-link" href="404.html">404 page</a></li>
						        </ul>
					        </div>
					    </li><!--//nav-item-->
					    
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link" href="charts.html">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart-line" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z"/>
	</svg>
						         </span>
		                         <span class="nav-link-text">Charts</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
					    <li class="nav-item">
					        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
					        <a class="nav-link" href="help.html">
						        <span class="nav-icon">
						        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-question-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
</svg>
						         </span>
		                         <span class="nav-link-text">Help</span>
					        </a><!--//nav-link-->
					    </li><!--//nav-item-->
				    </ul><!--//app-menu-->
			    </nav><!--//app-nav-->
			    <div class="app-sidepanel-footer">
				    <nav class="app-nav app-nav-footer">
					    <ul class="app-menu footer-menu list-unstyled">
						    <li class="nav-item">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <a class="nav-link" href="settings.html">
							        <span class="nav-icon">
							            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
	  <path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
	</svg>
							        </span>
			                        <span class="nav-link-text">Settings</span>
						        </a><!--//nav-link-->
						    </li><!--//nav-item-->
						    <li class="nav-item">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <a class="nav-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">
							        <span class="nav-icon">
							            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-download" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
	  <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
	</svg>
							        </span>
			                        <span class="nav-link-text">Download</span>
						        </a><!--//nav-link-->
						    </li><!--//nav-item-->
						    <li class="nav-item">
						        <!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
						        <a class="nav-link" href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">
							        <span class="nav-icon">
							            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	  <path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
	  <path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
	</svg>
							        </span>
			                        <span class="nav-link-text">License</span>
						        </a><!--//nav-link-->
						    </li><!--//nav-item-->
					    </ul><!--//footer-menu-->
				    </nav>
			    </div><!--//app-sidepanel-footer-->
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
            <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
		       
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

