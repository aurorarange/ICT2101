<?php
set_include_path($_SERVER['DOCUMENT_ROOT'].'/disman1.0/includes/');
include(get_include_path().'session.php');
include(get_include_path().'header.php');
if ($_SESSION['emp_type'] != 1) {
    header('location:../login.php');
}
?>
<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
<html>
   <style>
      #map {
		  width: 100%;
		  height: 100%;
		  margin: 0;
		  padding: 0;
      }
	  html, body {
		  width: 100%;
		  height: 100%;
		  background-color: white;
		  background-repeat: no-repeat;
		  background-position: right top;
	      background-attachment: fixed;
	  }
	  .content {
		background-color: white;
	  }
      h1, h2, h3, h4, h5, h6 {
      text-align: center;
      }

      .drivers, .drivers svg {
      position: absolute;
      }
	  
      .drivers svg {
      width: 200px;
      height: 20px;
      padding-right: 100px;
      font: 10px sans-serif;
      }
      .drivers circle {
      stroke: black;
      stroke-width: 1.5px;
      }
      .gmap {
      max-height: 40%;
      }
   </style>
   <head>
      <title>Dispatch Manager 1.0</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>
   <body>
      <div class="row">
         <h1>Dispatch Manager</h1>
      </div>
      <div class="row gmap" id="map"></div>
      <script src="//maps.google.com/maps/api/js?sensor=true"></script>
      <script src="//d3js.org/d3.v3.min.js"></script>
	  <div class="container-fliud content">
      <div class="row">
         <div class="col-xs-6 col-md-4">
            <h2>Legend</h2>
            <table class="table table-striped">
               <thead>
                  <tr>
                     <th>Color</th>
                     <th>Status</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>
                        <svg width="20" height="20" class="drivers circle">
                           <circle cx="10" cy="10" r="6" fill="green" />
                        </svg>
                     </td>
                     <td>On delivery</td>
                  </tr>
                  <tr>
                     <td>
                        <svg width="20" height="20" class="drivers circle">
                           <circle cx="10" cy="10" r="6" fill="yellow" />
                        </svg>
                     </td>
                     <td>On delivery - Passed ETA</td>
                  </tr>
                  <tr>
                     <td>
                        <svg width="20" height="20" class="drivers circle">
                           <circle cx="10" cy="10" r="6" fill="red" />
                        </svg>
                     </td>
                     <td>Status (Vehical Breakdown etc.)
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="col-xs-8 col-md-6">
            <h2>Drivers</h2>
            <div class="panel-group" id="accordion">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#driver1">
                        <span class="label label-warning">(9876 5432) Driver1</span></a>
                     </h4>
                  </div>
                  <div id="driver1" class="panel-collapse collapse in">
                     <div class="panel-body">
                        <ul class="list-group">
                           <li class="list-group-item"><span class="glyphicon glyphicon-refresh">20</span>Tracking id: 123456789</li>
                           <li class="list-group-item">Tracking id: 123456789</li>
                           <li class="list-group-item">Tracking id: 123456789</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#driver2">
                        <span class="label label-danger">(9876 5432) Driver2 - Vehicle Breakdown</span></a>
                     </h4>
                  </div>
                  <div id="driver2" class="panel-collapse collapse">
                     <div class="panel-body">
                        <ul class="list-group">
                           <li class="list-group-item">Tracking id: 123456789</li>
                           <li class="list-group-item">Tracking id: 123456789</li>
                           <li class="list-group-item">Tracking id: 123456789</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#driver3">
                        <span class="label label-success">(9876 5432) Driver3</span></a>
                     </h4>
                  </div>
                  <div id="driver3" class="panel-collapse collapse">
                     <div class="panel-body">
                        <ul class="list-group">
                           <li class="list-group-item"><span class="glyphicon glyphicon-refresh">30</span>Tracking id: 123456789</li>
                           <li class="list-group-item">Tracking id: 123456789</li>
                           <li class="list-group-item">Tracking id: 123456789</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#driver4">
                        <span class="label label-success">(9876 5432) Driver4</span></a>
                     </h4>
                  </div>
                  <div id="driver4" class="panel-collapse collapse">
                     <div class="panel-body">
                        <ul class="list-group">
                           <li class="list-group-item"><span class="glyphicon glyphicon-refresh">10</span>Tracking id: 123456789</li>
                           <li class="list-group-item">Tracking id: 123456789</li>
                           <li class="list-group-item">Tracking id: 123456789</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#driver5">
                        <span class="label label-warning">(9876 5432) Driver5</span></a>
                     </h4>
                  </div>
                  <div id="driver5" class="panel-collapse collapse">
                     <div class="panel-body">
                        <ul class="list-group">
                           <li class="list-group-item"><span class="glyphicon glyphicon-refresh">40</span>Tracking id: 123456789</li>
                           <li class="list-group-item">Tracking id: 123456789</li>
                           <li class="list-group-item">Tracking id: 123456789</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
		 <div class="col-xs-4 col-md-2">
	<div class="row">
		<h2>Tracking ID</h2>
           <div id="custom-search-input">
				<div class="input-group">
					<input type="text" class="search-query form-control" placeholder="Search" />
					<span class="input-group-btn">
						<button class="btn btn-danger" type="button">
							<span class=" glyphicon glyphicon-search"></span>
						</button>
					</span>
				</div>
			</div>
				</div>
		 </div>
      </div>
	  </div>
      </div>
   </body>
   <script>
      // Create the Google Map…
      var map = new google.maps.Map(d3.select("#map").node(), {
        zoom: 12,
        center: new google.maps.LatLng(1.352083, 103.819836),
        mapTypeId: google.maps.MapTypeId.TERRAIN
      });
      
      // Load the driver data. When the data comes back, create an overlay.
      d3.json("drivers.json", function(error, data) {
        if (error) throw error;
        
        var overlay = new google.maps.OverlayView();
        // Add the container when the overlay is added to the map.
        overlay.onAdd = function() {
        
        
        
          var layer = d3.select(this.getPanes().overlayLayer).append("div")
              .attr("class", "drivers");
      	
          // Draw each marker as a separate SVG element.
          // We could use a single SVG, but what size would it have?
          overlay.draw = function() {
      	
            var projection = this.getProjection(),
                padding = 10;
      
            var marker = layer.selectAll("svg")
                .data(d3.entries(data))
                .each(transform) // update existing markers
              .enter().append("svg")
                .each(transform)
                .attr("class", "marker");
      		
      		
      		
            // Add a circle.
            marker.append("circle")
                .attr("r", 6)
                .attr("cx", padding)
                .attr("cy", padding)
      		  .attr("fill", function(d) { switch(d.value[2]) {
      			case 1:
      				return "yellow"
      			case 2:
      				return "red"
      			default:
      				return "green"
      		}; });
      		  
            // Add a label.
            marker.append("text")
                .attr("x", padding + 7)
                .attr("y", padding)
                .attr("dy", ".31em")
                .text(function(d) { switch(d.value[2]) {
      			case 1:
      				return d.key + " - ETA " + d.value[3] + "mins."
      			case 2:
      				return d.key + " - Status: " + d.value[3]
      			default:
      				return d.key + " - ETA " + d.value[3] + "mins."
      		}; });
      
            function transform(d) {
              d = new google.maps.LatLng(d.value[1], d.value[0]);
      		d = projection.fromLatLngToDivPixel(d);
              return d3.select(this)
                  .style("left", (d.x - padding) + "px")
                  .style("top", (d.y - padding) + "px");
            }
          };
        };
        overlay.setMap(map);
      });
      
   </script>
</html>
<?php
include(get_include_path().'footer.php');
?>
