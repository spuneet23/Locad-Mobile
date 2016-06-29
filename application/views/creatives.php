<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Locad Mobile! | </title>

    <!-- Bootstrap -->
    <link href="<?=base_url();?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url();?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url();?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?=base_url();?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?=base_url();?>assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?=base_url();?>assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="<?=base_url();?>assets/build/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-tablet"></i> <span>Locad Mobile!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?=base_url();?>assets/images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Rishabh Mehta</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?=base_url();?>"><i class="fa fa-home"></i> Dashboard <!-- <span class="fa fa-chevron-down"></span> --></a>
                  </li>
                  <li><a><i class="fa fa-calendar-o"></i> Campaigns</a></li>
                  <li><a href="<?=base_url();?>creatives"><i class="fa fa-image"></i> Creatives</a></li>
                   <li><a><i class="fa fa-list-alt"></i> Lists</a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?=base_url();?>assets/images/img.jpg" alt="">Rishabh Mehta
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-red">1</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li> Yo</li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="container">
            <h4><span class="fa fa-image">&nbsp;&nbsp;</span>Creatives</h4>
            <div class="col-md-12">
               <div class="form-inline pull-left">
                 <div class="form-group">
                   <div class="dropdown">
					  <button class="btn btn-default dropdown-toggle form-group" type="button" data-toggle="dropdown">All Types
					  <span class="caret"></span></button>
					  <ul class="dropdown-menu">
					    <li><a href="#">All Types</a></li>
					    <li><a href="#">Banner</a></li>
					    <li><a href="#">JavaScript</a></li>
					    <li><a href="#">MRAID-1</a></li>
					    <li><a href="#">MRAID-2</a></li>
					    <li><a href="#">ORMMA</a></li>
					    <li><a href="#">VAST</a></li>
					  </ul>
					</div>
                  </div>
                  <div class="form-group">
                     <div class="dropdown">
					  <button class="btn btn-default dropdown-toggle form-group" type="button" data-toggle="dropdown">All Status
					  <span class="caret"></span></button>
					  <ul class="dropdown-menu">
					    <li><a href="#">All Status</a></li>
					    <li><a href="#">Approved</a></li>
					    <li><a href="#">Pending</a></li>
					    <li><a href="#">Needs Attention</a></li>
					    <li><a href="#">Archived</a></li>
					  </ul>
					</div>
                  </div>
                  <div class="form-group">
                  <input type="email" class="form-control" id="email" placeholder="Enter Keywords">
                  </div>
                  <button type="submit" class="btn btn-default form-group">Search</button>
                </div><!--form-inline-->
	            <a class="btn btn-primary pull-right" href="<?=base_url();?>new_creative">
	              <span class="fa fa-plus">&nbsp;</span>New Creative</a>
            </div><!--col-md-12-->
            <br>
            <br>
            <div class="panel panel-default">
			  <div class="panel-body">
	             <table class="table table-striped table-hover">
	              <thead>
	               <tr>
	                 <th>Id</th>
	                 <th>Name</th>
	                 <th>Type</th>
	                 <th>Status</th>
	                 <th>Size</th>
	                 <th>View Creative</th>
	               </tr>
	              </thead>
	              <tbody>
	               <tr>
	                 <td>1</td>
	                 <td>Ashish</td>
	                 <td>Developer</td>
	                 <td>Positive</td>
	                 <td>6 ft</td>
	                 <td>No</td>
	               </tr>
	               <tr>
	                 <td>1</td>
	                 <td>Ashish</td>
	                 <td>Developer</td>
	                 <td>Positive</td>
	                 <td>6 ft</td>
	                 <td>No</td>
	               </tr>
	               <tr>
	                 <td>1</td>
	                 <td>Ashish</td>
	                 <td>Developer</td>
	                 <td>Positive</td>
	                 <td>6 ft</td>
	                 <td>No</td>
	               </tr>
	               <tr>
	                 <td>1</td>
	                 <td>Ashish</td>
	                 <td>Developer</td>
	                 <td>Positive</td>
	                 <td>6 ft</td>
	                 <td>No</td>
	               </tr>
	              </tbody>
	             </table>
	           </div>
		    </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            LOCAD &copy; copyrights 2016 
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?=base_url();?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?=base_url();?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?=base_url();?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?=base_url();?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?=base_url();?>assets/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?=base_url();?>assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?=base_url();?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?=base_url();?>assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?=base_url();?>assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?=base_url();?>assets/vendors/Flot/jquery.flot.js"></script>
    <script src="<?=base_url();?>assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?=base_url();?>assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?=base_url();?>assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?=base_url();?>assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?=base_url();?>assets/js/flot/jquery.flot.orderBars.js"></script>
    <script src="<?=base_url();?>assets/js/flot/date.js"></script>
    <script src="<?=base_url();?>assets/js/flot/jquery.flot.spline.js"></script>
    <script src="<?=base_url();?>assets/js/flot/curvedLines.js"></script>
    <!-- JQVMap -->
    <script src="<?=base_url();?>assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?=base_url();?>assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?=base_url();?>assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?=base_url();?>assets/js/moment/moment.min.js"></script>
    <script src="<?=base_url();?>assets/js/datepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?=base_url();?>assets/build/js/custom.min.js"></script>
    
    <script>
    //$("#impression").click(function(e){
       //e.preventDefault();
       
       $.ajax({
          type:"GET",
          url:'https://api.pocketmath.com/v2/campaigns.json?token',
          data:{token:'548303a0f48c0301c7718aef85917c27647a282fee7ec1b898d4f7fba9fec4a2'},
          dataType:"json",
          success:function(response,status){
              
               var json_obj = response;
               var output = 0;
           for (var i in json_obj) 
            {  
                
               output= output + json_obj[i].impressions ;
                $('#impressions_count').html(output);
               
            }
            
            for (var i in json_obj) 
            {  
                
               output= output + json_obj[i].clicks ;
                $('#clicks_count').html(output);
               
            }
            
             for (var i in json_obj) 
            {  
                
               output= output + json_obj[i].conversions ;
                $('#conversions_count').html(output);
               
            }
              // alert("Success");
            //  console.log(output);
          },
                  
          error: function (response,status){
              alert("wrong way");
              
          },
       });
               
  //  });
    </script>
    
  <script type="text/javascript">
      $(function() {

        $('input[name="daterange"]').daterangepicker();

          function cb(start, end) {
              $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
          }
          cb(moment().subtract(29, 'days'), moment());

          $('#reportrange').daterangepicker({
              ranges: {
                 'Today': [moment(), moment()],
                 'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                 'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                 'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                 'This Month': [moment().startOf('month'), moment().endOf('month')],
                 'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              }
          }, cb);


          $.ajax({
            url : 'https://api.pocketmath.com:443/v2/orders/' + QueryString.oid + '/stats/platforms.json',
            headers: {
                "Authorization" : "Token token=d978983f7b8f81ee1c6780aed82bf578ca38951377b1e200473d388f2dbc98a6"
            }
        }). done(function(data){
            console.log('platforms')
            console.log(data );
            var data1 = [];
            $(data).each(function(i,item) {
                var obj = {};
                obj['data']= item['impressions'];
                obj['label'] = item['name'];
                data1.push(obj);
            });
            if ($('#pie_chart').size() !== 0) {
                $.plot($("#pie_chart"), data1, {
                    series: {
                        pie: {
                            show: true
                        }
                    }
                });
            }
        });

        var line = new Morris.Line({
          element: 'line-chart',
          resize: true,
          data: [],
          xkey: 'y',
          ykeys: ['impressions', 'clicks'],
          labels: ['impressions', 'clicks'],
          lineColors: ['#49B9FF',"#FF7649"],
          lineWidth: 2,
          hideHover: 'auto',
          gridTextColor: "#333",
          gridStrokeWidth: 0.1,
          pointSize: 4,
          //Boolean - Whether to show horizontal lines (except X axis)
          gridHorizontalLines: true,

          //Boolean - Whether to show vertical lines (except Y axis)
          gridVerticalLines: true,
          
          gridLineColor: "#bfbfbf",
          gridTextFamily: "Open Sans",
          gridTextSize: 10
        });

      });
    </script>
  
    

    <!-- Flot -->
    <script>
      $(document).ready(function() {
        var data1 = [
          [gd(2012, 1, 1), 17],
          [gd(2012, 1, 2), 74],
          [gd(2012, 1, 3), 6],
          [gd(2012, 1, 4), 39],
          [gd(2012, 1, 5), 20],
          [gd(2012, 1, 6), 85],
          [gd(2012, 1, 7), 7]
        ];

        var data2 = [
          [gd(2012, 1, 1), 82],
          [gd(2012, 1, 2), 23],
          [gd(2012, 1, 3), 66],
          [gd(2012, 1, 4), 9],
          [gd(2012, 1, 5), 119],
          [gd(2012, 1, 6), 6],
          [gd(2012, 1, 7), 9]
        ];
        $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [
          data1, data2
        ], {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: "#d5d5d5",
            borderWidth: 1,
            color: '#fff'
          },
          colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
          xaxis: {
            tickColor: "rgba(51, 51, 51, 0.06)",
            mode: "time",
            tickSize: [1, "day"],
            //tickLength: 10,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: "rgba(51, 51, 51, 0.06)",
          },
          tooltip: false
        });

        function gd(year, month, day) {
          return new Date(year, month - 1, day).getTime();
        }
      });
    </script>
    <!-- /Flot -->

    <!-- JQVMap -->
    <script>
      $(document).ready(function(){
        $('#world-map-gdp').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#E6F2F0', '#149B7E'],
            normalizeFunction: 'polynomial'
        });
      });
    </script>
    <!-- /JQVMap -->

    <!-- Skycons -->
    <script>
      $(document).ready(function() {
        var icons = new Skycons({
            "color": "#73879C"
          }),
          list = [
            "clear-day", "clear-night", "partly-cloudy-day",
            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
            "fog"
          ],
          i;

        for (i = list.length; i--;)
          icons.set(list[i], list[i]);

        icons.play();
      });
    </script>
    <!-- /Skycons -->

    <!-- Doughnut Chart -->
    <script>
      $(document).ready(function(){
        var options = {
          legend: false,
          responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Symbian",
              "Blackberry",
              "Other",
              "Android",
              "IOS"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]
            }]
          },
          options: options
        });
      });
    </script>
    <!-- /Doughnut Chart -->
    
    <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {

        var cb = function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        };

        var optionSet1 = {
          startDate: moment().subtract(29, 'days'),
          endDate: moment(),
          minDate: '01/01/2012',
          maxDate: '12/31/2015',
          dateLimit: {
            days: 60
          },
          showDropdowns: true,
          showWeekNumbers: true,
          timePicker: false,
          timePickerIncrement: 1,
          timePicker12Hour: true,
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          opens: 'left',
          buttonClasses: ['btn btn-default'],
          applyClass: 'btn-small btn-primary',
          cancelClass: 'btn-small',
          format: 'MM/DD/YYYY',
          separator: ' to ',
          locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
          }
        };
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function() {
          console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function() {
          console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
          console.log("cancel event fired");
        });
        $('#options1').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function() {
          $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function() {
          $('#reportrange').data('daterangepicker').remove();
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->

    <!-- gauge.js -->
    <script>
      var opts = {
          lines: 12,
          angle: 0,
          lineWidth: 0.4,
          pointer: {
              length: 0.75,
              strokeWidth: 0.042,
              color: '#1D212A'
          },
          limitMax: 'false',
          colorStart: '#1ABC9C',
          colorStop: '#1ABC9C',
          strokeColor: '#F0F3F3',
          generateGradient: true
      };
      var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = 6000;
      gauge.animationSpeed = 32;
      gauge.set(3200);
      gauge.setTextField(document.getElementById("gauge-text"));
    </script>
    <!-- /gauge.js -->
  </body>
</html>