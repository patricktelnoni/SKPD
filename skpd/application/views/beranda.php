<?php echo $this->session->flashdata('message');?>
		<?php //print_r($content);?>
<link href="<?=base_url()?>bootstrap/carousel.css" rel="stylesheet">	
<link href="<?=base_url()?>styles/sidenav.css" rel="stylesheet">
			
			
	<div class="contentMain">		
	<div class="slideshow">
					
	
					
    <div id="myCarousel" class="carousel slide" data-ride="carousel" ng-controller='LoopController' style="width: 55%; margin-left: 7.5%;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" ng-repeat="row in items" data-slide-to="{{row.id}}" ng-class="{active:!$index}"></li>
        <!-- <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li> -->
      </ol>
      <div class="carousel-inner" role="listbox"  >
        <div class="item" ng-class="{active:!$index}" ng-repeat="row in items">
          <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>{{row.title}}</h1>
              <p>{{row.content}}.</p>
              
            </div>
          </div>
        </div>       
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>						
					
					<script type="text/javascript">
					
					//var app = angular.module('ppid', []);					 
					app.controller('LoopController', function($scope) {
						 $scope.items = [
						<?php
						 $i=0; 
						foreach($content as $key )
						{ ?>
						 {title: '<?=$key['judul']?>' , content: '<?=$key['isi']?>', id: <?=$key['artikelid']?>}
						 <?php					 
								 if($i != $total-1)
								 	{echo ", \n";}					 
								 $i++;						
								}?>				 
					 ];				
			 	});
				 	app.controller('tabs', function($scope){

				 		/*$scope.changeTab = function(tab) {
					 		console.log('Tab controller here...');
				 		    $scope.view_tab = tab;
				 		}
				 		 $scope.view_tab = '1';*/
				 		var tabClasses;
				 		  
				 		  function initTabs() {
				 		    tabClasses = ["","","",""];
				 		  }
				 		  
				 		  $scope.getTabClass = function (tabNum) {
				 		    return tabClasses[tabNum];
				 		  };
				 		  
				 		  $scope.getTabPaneClass = function (tabNum) {
				 		    return "tab-pane " + tabClasses[tabNum];
				 		  }
				 		  
				 		  $scope.setActiveTab = function (tabNum) {
				 		    initTabs();
				 		    tabClasses[tabNum] = "active";
				 		  };
				 		  
				 		  /* $scope.tab1 = "This is first section";
				 		  $scope.tab2 = "This is SECOND section";
				 		  $scope.tab3 = "This is THIRD section";
				 		  $scope.tab4 = "This is FOUTRH section"; */
				 		  
				 		  //Initialize 
				 		  initTabs();
				 		  $scope.setActiveTab(6);
					 	});
				 	app.controller('profil', function($scope){
				 		$scope.iMainTabIndex = 1;
				 		  $scope.iTab1Index = 1;
					 	});
				 	
 			</script>
				 </div>
				 
	<div class="row" ng-controller="tabs" style="margin-left: 7.5%;">
			
	<!-- <div class="tabbable tabs-left col-sm-3 ">
	 <div id='cssmenu'>
      <ul class="nav nav-tabs nav-stacked nav-pills" role="tablist">     
      	 <li class="has-sub" ng-class="getTabClass(6)" ng-click="setActiveTab(6)"><a href="#polling" data-toggle="tab">Main</a>
      	 	<ul>
               <li><a href='#'><span>Dasar Hukum</span></a></li>               
               <li class='last'><a href='#'><span>Struktur PPID</span></a></li>
            </ul> 
      	 </li>
         <li class="has-sub" ng-class="getTabClass(1)" ng-click="setActiveTab(1)"><a href="#deal" data-toggle="tab">Profil</a>
         	<ul>
               <li><a href='#'><span>Dasar Hukum</span></a></li>               
               <li class='last'><a href='#'><span>Struktur PPID</span></a></li>
            </ul> 
         </li>
         <li class="has-sub" ng-class="getTabClass(2)" ng-click="setActiveTab(2)"><a href="#bond" data-toggle="tab">Hak & Kewajiban</a>
         	<ul>
               <li><a href='#'><span>Pemohon Informasi</span></a></li>
               
               <li class='last'><a href='#'><span>Badan Publik</span></a></li>
            </ul> 
         </li>
         <li class="has-sub" ng-class="getTabClass(3)" ng-click="setActiveTab(3)"><a href="#collateral" data-toggle="tab">Prosedur</a>
         	<ul>
               <li><a href='#'><span>Permohonan Informasi</span></a></li>
               <li><a href='#'><span>Pengajuan Keberatan</span></a></li>
               <li><a href='#'><span>Pengajuan Sengketa</span></a></li>
               <li><a href='#'><span>Penyelesaian Sengketa</span></a></li>
               <li class='last'><a href='#'><span>Alur Permohonan</span></a></li>
            </ul> 
         </li>
         <li class="has-sub" ng-class="getTabClass(4)" ng-click="setActiveTab(4)"><a href="#rating" data-toggle="tab">Foto Kegiatan</a>
         	<ul>             
               <li class='last'><a href='#'><span>Arsip foto</span></a></li>
            </ul> 
         </li>
         <li ng-class="getTabClass(5)" ng-click="setActiveTab(5)"><a href="#polling" data-toggle="tab">Polling</a></li>
      </ul>
      </div>
    </div> -->
    <div class="tab-content col-lg-8">
    	<div ng-class="getTabPaneClass(6)" id="main">     
          <div class="col-lg-5">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-2"></div>
        <div class="col-lg-5">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        </div>        
               
           
      </div>
      <div class="tab-content col-lg-8">
    	<div ng-class="getTabPaneClass(6)" id="main">     
          <div class="col-lg-5">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-2"></div>
        <div class="col-lg-5">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        </div>        
               
           
      </div>
      <div class="tab-content col-lg-8">
    	<div ng-class="getTabPaneClass(6)" id="main">     
          <div class="col-lg-5">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-2"></div>
        <div class="col-lg-5">
          <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 140px; height: 140px;">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
        </div>        
               
           
      </div>
    </div>