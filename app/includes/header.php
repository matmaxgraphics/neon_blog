<header>
	<div class="logo logo-n">
		<a href="<?php echo BASE_URL . '/index.php'?>"><img src="assets/images/logo-white.png" alt="the neons logo" width="180px" height="auto"></a>
			</div>
			<i class="fas fa-bars menu-toggle"></i>
	<ul class="nav">
		<li><a href="<?php echo BASE_URL . '/index.php'?>" class="nav-link">Home</a></li>
		<li><a href="<?php echo BASE_URL . '/about.php'?>" class="nav-link">About</a>	
			</li>
		<li><a href="<?php echo BASE_URL . '/contact.php'?>" class="nav-link">Contact</a></li>

		<?php  if (isset($_SESSION['id'])): ?>
		
		<li><a href="#">
			<i class="fa fa-user" style="font-size: .8em;"></i>
			<?php echo $_SESSION['username']; ?>
			<i class="fas fa-chevron-down" style="font-size: .8em;"></i>
			</a> 
			<ul>
				<?php if($_SESSION['admin']): ?>
			
				<li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a></li>
				<?php endif; ?>

				<li><a href="<?php echo BASE_URL . '/logout.php' ?>"><i class="fa fa-sign-out" style="color: white;"></i> Logout</a></li>
			</ul>
		</li>
		<?php else: ?>
			<li><a href="<?php echo BASE_URL . '/login.php' ?>">Login</a></li>
			<li><a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></li>

	<?php endif; ?>
	</ul>
</header>