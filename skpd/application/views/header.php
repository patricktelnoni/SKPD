 <script type="text/javascript">
		//var app = angular.module('navigasi', []);
		//var header = angular.module('ppid', []);
		//var app = angular.module('header', []);
		app.controller('checkActive', function($scope, $location){
			$scope.isActive = function($path){
				var curUrl 	 = $location.absUrl().substr(<?=strlen(base_url().'index.php/c_')?>);
				var urlLen	 = <?=strlen(base_url().'index.php/c_')?>;
				var endpoint = getNextStop(curUrl, urlLen);
				//alert($path);
				if($location.absUrl().substr(urlLen, endpoint) === $path)
				{				
					return "active";
				}
				else{}
			}
			
		});	
		function getNextStop ($url, len){
			if($url.indexOf("/") === "-1")
			{					
				return 0;
			}
			else{
				var i = 0;
				while(i < $url.length)
				{
					if($url.charAt(i) == "/")
					{						
						return i;
						break;
					}
					i++;
				}
			}				
		}
					
    </script>	 
	<nav class="navbar navbar-inverse navbar-fixed-top">
      
        <div class="navbar-header">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">SKPD Bontang</a>
            </div>          
        </div>
        <div id="navbar" class="navbar-collapse collapse" >
        <ul class="nav navbar-nav" ng-controller='checkActive'>
                <li ng-class="{ active: isActive('beranda')}"><a href="#">Profil Dinas</a></li>
                <li ng-class="{ active: isActive('beranda')}"><a href="#">Pelayanan</a></li>
                <li ng-class="{ active: isActive('beranda')}"><a href="#">Terminal View</a></li>
                
                
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li> --> 
              </ul>
        <?php if(!$this->session->userdata('logged_in')){?>
        
          
          <div class="navbar-right">
          <form class="navbar-form" action="<?=base_url()?>index.php/c_authentication/login" method="POST">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control" name="email">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
         	<a class="btn btn-success" href="<?=base_url()?>index.php/c_registration">Sign Up</a>	  
         	    
          </form>
          
         
         	
          
          
          <?php 
			}
          else {?>
          <div class="navbar-form navbar-right">
          	<button class="btn btn-primary" onclick="window.location='<?=base_url()?>index.php/c_artikel/createarticle'">Buat Artikel</button>
          	<button class="btn btn-success" onclick="window.location='<?=base_url()?>index.php/c_authentication/logout'">Log Out</button>
          </div>
           
          <?php
			}?>
          
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
   
    <nav class="navbar navbar-inverse" role="navigation" 
    	style="margin-top: 5%; width: 85%; margin-left: auto;
    			margin-right: auto;
    			">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><i class="fa fa-home fa-fw"></i> Beranda</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
   
      <li class="dropdown"> 
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tachometer fa-fw"></i> Kegiatan</a></li>       
        
        
        <li class="dropdown"> 
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tachometer fa-fw"></i> Berita Dinas</a></li>
        
        
        
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>

 
   	
        <div class="clearboth">
        </div>
 