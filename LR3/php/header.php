<section>
<div class="container">
			<div class="nav2">
			<div class="header__inner">
				<div class="row">
					<div class="col-3">
				<img src="../img/tretyakov_gallery.png" width="185" height="78" alt="logo">
					</div>
				<div class="col-9">
				<div class="d-flex flex-row-reverse bd-highlight">
			<div class="p-2 bd-highlight"> 
				<nav class="nav">
					<div class="d-flex justify-content-end">
					<a class="nav__link" href="#"><img src="../img/ticket.svg" alt="ticket"> &nbsp;КУПИТЬ БИЛЕТ</a>
					<a class="nav__link" href="#"><img src="../img/friends.svg" alt="friends"> &nbsp;СТАТЬ ДРУГОМ</a>
					<a class="nav__link" href="#"><img src="../img/shopping-bag.svg " alt="shopping-bag"> &nbsp;ИНТЕРНЕТ-МАГАЗИН</a>
					<a class="nav__link" href="#"> <img src="../img/notification.svg " alt="notification"></a>
					<a class="nav__link" href="#"> <img src="../img/search.svg " alt="search"></a>
					<div class="dropdown">
						<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
							<style>
								.btn-secondary {
								padding-top:10px;
								}
							</style>
						  Ru
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
						  <li><a class="dropdown-item" href="#">Ru</a></li>
						  <li><a class="dropdown-item" href="#">En</a></li>
						</ul>
					  </div> 
					</div>
					
					<a class="nav__link" href="#">&nbsp;&nbsp;<img src="../img/user.svg " alt="user"> &nbsp;
					<?php
              if(isset($_SESSION['user'])){
                
                echo '<div class="autorisation"> Вы вошли как '.$_SESSION['user']['login'].' <a href="../registration/logout.php">Выйти</a></div>';
              }
              else{
              ?>
                <div class="autorisation">
                  <a href="../registration/sign_in.php">
                    Войти
                  </a>
                  <a href="../registration/sign_up.php">
                    Регистрация
                  </a>
                </div>  
              <?php
              }
              ?>	
				</a>
				</nav>
			</div>		
		 </div>	
		</div>
		</div>
	</div>
</div>
<section>