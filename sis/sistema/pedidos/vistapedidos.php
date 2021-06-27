<?php   

  include '../database.php';

  session_start();

  if(isset($_SESSION['user'])){

  $quien = $_SESSION['user'];

    $records = $conn->prepare('SELECT * FROM usuarios WHERE usuario = :id');
    $records->bindParam(':id', $quien);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }

?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inicio</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" href="../images/andromeda_icon.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

  <!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

   <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart {
            min-height: 335px;
        }
        #flotPie1  {
            height: 150px;
        }
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="../vistaprincipal.php"><i class="menu-icon fa fa-home"></i>INICIO </a>
                    </li>
                    <li class="menu-title">PUNTOS</li><!-- /.menu-title -->
                       <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>LOCAL</a>
                        <ul class="sub-menu children dropdown-menu">  
                     
                            <li><i class="fa fa-android"></i><a href="../equipos/vistaequiposandroid.php">Android</a></li>
                            <li><i class="fa fa-apple"></i><a href="../equipos/vistaequiposapple.php">Apple</a></li>
                            
                        </ul>
                    </li>


                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>PUNTO 1</a>
                        <ul class="sub-menu children dropdown-menu">  
                     
                            <li><i class="fa fa-android"></i><a href="../equipos/vistaequiposandroidp1.php">Android</a></li>
                            <li><i class="fa fa-apple"></i><a href="../equipos/vistaequiposapplep1.php">Apple</a></li>
                            
                        </ul>
                    </li>

                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>PUNTO 2</a>
                        <ul class="sub-menu children dropdown-menu">  
                     
                            <li><i class="fa fa-android"></i><a href="../equipos/vistaequiposandroidp2.php">Android</a></li>
                            <li><i class="fa fa-apple"></i><a href="../equipos/vistaequiposapplep2.php">Apple</a></li>
                            
                        </ul>
                    </li>

                    <li class="menu-title">Pedidos</li><!-- /.menu-title -->

                      <li>
                        <a href="../Pedidos/vistapedidos.php"> <i class="menu-icon fa fa-shopping-cart"></i>Pedidos </a>
                    </li>
                   
                    <li class="menu-title">Equipos Terminados</li><!-- /.menu-title -->
                      <li>
                        <a href="../historial.php"> <i class="menu-icon fa fa-archive"></i>Historial </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="../images/andromeda_logo_.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="../images/andromeda_logo_.png" alt="Logo"></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    
                    <div class="user-area dropdown float-right">
                            
                            <a class="nav-link" href="../../php/salir.php"><i class="fa fa-power -off"></i>Cerrar Sesion</a>
                       
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <!-- Animated -->
            <div class="animated fadeIn">
                <!-- Widgets  -->
                
                <div class="row"></div>

                <!-- /Widgets -->

                <!--  Traffic  -->
                <div class="row">
                     <div class="col-lg-3 col-md-6">
                        <div class="card" style="width:230px;">
                            <div class="card-body">
                               
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" >Agregar Nuevo Pedido</button>
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Lista De Pedidos</h4>
                                <br>
                                <!-- MOdal -->
                                  <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h2 class="modal-title">Agregar Pedidos</h2>
                                        </div>
                                        <div class="modal-body">
                                          
                                            <form method="post" action="crearpedido.php">
                                                    
                                                    <p>Datos Cliente</p>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-6">
                                                           <div class="form-group form-group-default">
														<label>Nombre Cliente:</label>
														<input id="nombre_cliente" name="nombre_cliente" type="text" class="form-control" required="Ingresa el nombre de cliente">
													</div>
                                                        </div>

                                                        <div class="col-6">
                                                          <div class="form-group form-group-default">
														<label>Nuemero De Cleinte:</label>
														<input id="telefono_cliente" name="telefono_cliente" type="text" class="form-control" required="Ingresa el numero de telefono del cliente" >
													</div>
                                                        </div>

                                                    </div>
                                                   

                                            <br>
<br>

                                                    <p>Datos Telefono</p>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group form-group-default">
														<label>Marca:</label>
														 <select name="marca" id="marca" class="form-control">
								                <option value="Samsung">Samsung</option>
								                <option value="Otro">Otro</option>
								                <option value="Lg">Lg</option>
								                <option value="Apple">Apple</option>
								                <option value="Motorola">Motorola</option>
								                <option value="Huawei">Huawei</option>
								                <option value="Iphone">Iphone</option>
								                <option value="Alcatel">Alcatel</option>
								                <option value="Sony">Sony</option>
								                <option value="Lenovo">Lenovo</option>
								                <option value="Htc">Htc</option>
								                <option value="Zte">Zte</option>
								                <option value="Lanix">Lanix</option>
								                <option value="Nokia">Nokia</option>
								                <option value="OnePlus">One Plus</option>
								                <option value="Xiaomi">Xiaomi</option>
								                <option value="Vivo">Vivo</option>
								                <option value="Blue">Blue</option>
								                <option value="Verycool">Verycool</option>
								                <option value="Google">Google</option>
								                <option value="Oppo">Oppo</option>
								                <option value="Blackvery">Blackvery</option>
								                <option value="Asus">Asus</option>
								                <option value="M4">M4</option>
								                <option value="Polaroid">Polaroid</option>
								                <option value="Zumm">Zumm</option>
								                <option value="Hisense">Hisense</option>
								                <option value="HP">HP</option>
								              </select>
            
													</div>
                                                        </div>

                                                        <div class="col-6">
                                                           
													<div class="form-group form-group-default">
														<label>Modelo:</label>
														<input id="modelo" name="modelo" type="text" class="form-control" required="Ingresa el modelo">
													</div>
                                                        </div>

                                                    </div>


                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group form-group-default">
														<label>Parte A Pedir:</label>
														<input id="parte" name="parte" type="text" class="form-control" required="Ingresa el color del equipo" >
													</div>
                                                        </div>

                                                        <div class="col-6">
                                                           		<div class="form-group form-group-default">
														<label>Dejo Equipo:</label>
															 <select name="dejo_equipo" id="dejo_equipo" class="form-control">
								                <option value="Si">SI</option>
								                <option value="No">NO</option>
								             
								              </select>
								            </div>
                                                        </div>

                                                    </div>
                                                    
                                                     <div class="row">
                                                        <div class="col-6">
                                                           <div class="form-group form-group-default">
														<label>Precio Total:</label>
														<input id="precio_total" name="precio_total" type="text" class="form-control" required="Ingresa la falla que tiene el equipo" >
													</div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="form-group form-group-default">
														<label>Abonos:</label>
														<input id="abonos" name="abonos" type="text" class="form-control" required="Ingresa el trabajo a realizar">
													</div>
                                                        </div>

                                                    </div>

                                                    <input type="hidden" id="status" name="status" value="En Espera">

                                                        <div class="form-group form-group-default">
                                                        <label>para Donde Es:</label>
                                                             <select name="sucursal" id="sucursal" class="form-control">
                                                <option value="Local">Local</option>
                                                <option value="Puesto 1">Puesto 1</option>
                                                <option value="Puesto 2">Puesto 2</option>
                                             
                                              </select>
                                            </div>


                                                    <br><br><input class="btn btn-info" type="submit" value="Guardar">
                                                  
                                                </form>

                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                    

                                        	<?php
																						include_once "../base_de_datos.php";
																						$sentencia = $base_de_datos->query("SELECT * FROM pedidos where status <> 'Parte en el local' order by id_pedido desc ;");
																						$productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
																					?>



                                 <table class="table table-striped" border="1" >
                                        <thead>
                                            <tr>
                                             <th scope="col"># Pedido</th>
																							<th scope="col">Cliente</th>
																							<th scope="col">Fecha Pedido</th>
																							<th scope="col">Fecha Estimada</th>
																							<th scope="col">Marca</th>
																							<th scope="col">Modelo</th>
																							<th scope="col">Parte Pedida</th>
																							<th scope="col">Status</th>
                                                                                            <th scope="col">Para</th>
																							<th scope="col">Nota</th>
																							<th scope="col">Modificar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php foreach($productos as $producto){ ?>

                                            

                                                <?php

                                                    $var = $producto->status;
                                                    $color = "";

                                                    if ($var == 'En Espera') {
                                                        $color = "#5770FF";
                                                    }
                                                    elseif( $var == 'En Proceso' ) {
                                                        $color = "#C490FF";
                                                    }

                                                ?>

                                            <tr>
                                                
                                              	<td ><?php echo $producto->id_pedido ?></td>
																								<td><?php echo $producto->nombre_cliente ?></td>
																								<td><?php echo $producto->fecha ?></td>
																								<td><?php echo $producto->tiempo_estimado ?></td>
																								<td><?php echo $producto->marca ?></td>
																								<td><?php echo $producto->modelo ?></td>
																								<td><?php echo $producto->parte ?></td>
																								<td style="background-color: <?php echo $color; ?>; color: black;"><?php echo $producto->status ?></td>
                                                                                                <td><?php echo $producto->sucursal ?></td>
																								<td><a class="btn btn-info" href="<?php echo "notapedido.php?id_pedido=" . $producto->id_pedido?>"><i class="fa  fa-paste"></i></a></td>
																								<td><a class="btn btn-warning" href="<?php echo "modificarpedido.php?id_pedido=" . $producto->id_pedido?>"><i class="fa fa-edit"></i></a></td>
                                                
                                            </tr>
                                            <?php } ?>

                                        </tbody>
                                    </table>
                            </div>
                            <div class="row">
                               
                              
                            </div> <!-- /.row -->

                            <div class="card-body"></div>
                        </div>
                    </div><!-- /# column -->
                </div>
                <!--  /Traffic -->
                

            </div>
            <!-- .animated -->
        </div>

        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; Andromeda
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by Aleman
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="../assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="../assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="../assets/js/init/fullcalendar-init.js"></script>

    <!--Local Stuff-->
    <script>
        jQuery(document).ready(function($) {
            "use strict";

            // Pie chart flotPie1
            var piedata = [
                { label: "Desktop visits", data: [[1,32]], color: '#5c6bc0'},
                { label: "Tab visits", data: [[1,33]], color: '#ef5350'},
                { label: "Mobile visits", data: [[1,35]], color: '#66bb6a'}
            ];

            $.plot('#flotPie1', piedata, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.65,
                        label: {
                            show: true,
                            radius: 2/3,
                            threshold: 1
                        },
                        stroke: {
                            width: 0
                        }
                    }
                },
                grid: {
                    hoverable: true,
                    clickable: true
                }
            });
            // Pie chart flotPie1  End
            // cellPaiChart
            var cellPaiChart = [
                { label: "Direct Sell", data: [[1,65]], color: '#5b83de'},
                { label: "Channel Sell", data: [[1,35]], color: '#00bfa5'}
            ];
            $.plot('#cellPaiChart', cellPaiChart, {
                series: {
                    pie: {
                        show: true,
                        stroke: {
                            width: 0
                        }
                    }
                },
                legend: {
                    show: false
                },grid: {
                    hoverable: true,
                    clickable: true
                }

            });
            // cellPaiChart End
            // Line Chart  #flotLine5
            var newCust = [[0, 3], [1, 5], [2,4], [3, 7], [4, 9], [5, 3], [6, 6], [7, 4], [8, 10]];

            var plot = $.plot($('#flotLine5'),[{
                data: newCust,
                label: 'New Data Flow',
                color: '#fff'
            }],
            {
                series: {
                    lines: {
                        show: true,
                        lineColor: '#fff',
                        lineWidth: 2
                    },
                    points: {
                        show: true,
                        fill: true,
                        fillColor: "#ffffff",
                        symbol: "circle",
                        radius: 3
                    },
                    shadowSize: 0
                },
                points: {
                    show: true,
                },
                legend: {
                    show: false
                },
                grid: {
                    show: false
                }
            });
            // Line Chart  #flotLine5 End
            // Traffic Chart using chartist
            if ($('#traffic-chart').length) {
                var chart = new Chartist.Line('#traffic-chart', {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                  series: [
                  [0, 18000, 35000,  25000,  22000,  0],
                  [0, 33000, 15000,  20000,  15000,  300],
                  [0, 15000, 28000,  15000,  30000,  5000]
                  ]
              }, {
                  low: 0,
                  showArea: true,
                  showLine: false,
                  showPoint: false,
                  fullWidth: true,
                  axisX: {
                    showGrid: true
                }
            });

                chart.on('draw', function(data) {
                    if(data.type === 'line' || data.type === 'area') {
                        data.element.animate({
                            d: {
                                begin: 2000 * data.index,
                                dur: 2000,
                                from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                                to: data.path.clone().stringify(),
                                easing: Chartist.Svg.Easing.easeOutQuint
                            }
                        });
                    }
                });
            }
            // Traffic Chart using chartist End
            //Traffic chart chart-js
            if ($('#TrafficChart').length) {
                var ctx = document.getElementById( "TrafficChart" );
                ctx.height = 150;
                var myChart = new Chart( ctx, {
                    type: 'line',
                    data: {
                        labels: [ "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul" ],
                        datasets: [
                        {
                            label: "Visit",
                            borderColor: "rgba(4, 73, 203,.09)",
                            borderWidth: "1",
                            backgroundColor: "rgba(4, 73, 203,.5)",
                            data: [ 0, 2900, 5000, 3300, 6000, 3250, 0 ]
                        },
                        {
                            label: "Bounce",
                            borderColor: "rgba(245, 23, 66, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(245, 23, 66,.5)",
                            pointHighlightStroke: "rgba(245, 23, 66,.5)",
                            data: [ 0, 4200, 4500, 1600, 4200, 1500, 4000 ]
                        },
                        {
                            label: "Targeted",
                            borderColor: "rgba(40, 169, 46, 0.9)",
                            borderWidth: "1",
                            backgroundColor: "rgba(40, 169, 46, .5)",
                            pointHighlightStroke: "rgba(40, 169, 46,.5)",
                            data: [1000, 5200, 3600, 2600, 4200, 5300, 0 ]
                        }
                        ]
                    },
                    options: {
                        responsive: true,
                        tooltips: {
                            mode: 'index',
                            intersect: false
                        },
                        hover: {
                            mode: 'nearest',
                            intersect: true
                        }

                    }
                } );
            }
            //Traffic chart chart-js  End
            // Bar Chart #flotBarChart
            $.plot("#flotBarChart", [{
                data: [[0, 18], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6],[16,15], [18, 9],[20,17], [22,7],[24,4], [26,9],[28,11]],
                bars: {
                    show: true,
                    lineWidth: 0,
                    fillColor: '#ffffff8a'
                }
            }], {
                grid: {
                    show: false
                }
            });
            // Bar Chart #flotBarChart End
        });
    </script>
</body>
</html>
<?php
} else {
  header("location:../../index.php");
  }
 ?>
