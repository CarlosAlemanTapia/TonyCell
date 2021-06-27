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
<?php 
    
    $idnota = $_GET['numero_nota'];

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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
                     
                            <li><i class="fa fa-android"></i><a href="./vistaequiposandroid.php">Android</a></li>
                            <li><i class="fa fa-apple"></i><a href="./vistaequiposapple.php">Apple</a></li>
                            
                        </ul>
                    </li>


                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>PUNTO 1</a>
                        <ul class="sub-menu children dropdown-menu">  
                     
                            <li><i class="fa fa-android"></i><a href="./vistaequiposandroidp1.php">Android</a></li>
                            <li><i class="fa fa-apple"></i><a href="./vistaequiposapplep1.php">Apple</a></li>
                            
                        </ul>
                    </li>

                     <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>PUNTO 2</a>
                        <ul class="sub-menu children dropdown-menu">  
                     
                            <li><i class="fa fa-android"></i><a href="./vistaequiposandroidp2.php">Android</a></li>
                            <li><i class="fa fa-apple"></i><a href="./vistaequiposapplep2.php">Apple</a></li>
                            
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Modificar Notas</h4>

                                        <?php
                                                        include_once "../base_de_datos.php";
                                                        $sentencia = $base_de_datos->query("SELECT * FROM equipos where numero_nota = $idnota;");
                                                        $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
                                                    ?>


                                            <form method="post" action="modificardatosnotasp2.php">
                                                        <?php foreach($productos as $producto){ ?>

                                                
                                                    <input type="hidden" id="numero_nota" name="numero_nota" value="<?php echo $idnota ?>">

                                                
                                                    <div class="form-group form-group-default">
                                                        <label>Nombre Cliente:</label>
                                                        <input id="nombre_cliente" name="nombre_cliente" type="text" class="form-control" value="<?php echo $producto->nombre_cliente ?>">
                                                    </div>

                                                    <div class="form-group form-group-default">
                                                        <label>Nuemero De Cleinte:</label>
                                                        <input id="telefono_cliente" name="telefono_cliente" type="text" class="form-control" value="<?php echo $producto->telefono_cliente ?>">
                                                    </div>

                                            

                                                    <div class="form-group form-group-default">
                                                        <label>Marca:</label>
                                                         <select name="marca" id="marca" class="form-control">
                                                            <option value="<?php echo $producto->marca ?>"><?php echo $producto->marca ?></option>
                                                <option value="Samsung">Samsung</option>
                                                <option value="Otro">Otro</option>
                                                <option value="Lg">Lg</option>
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


                                                    <div class="form-group form-group-default">
                                                        <label>Modelo:</label>
                                                        <input id="modelo" name="modelo" type="text" class="form-control" value="<?php echo $producto->modelo ?>">
                                                    </div>

                                                    <div class="form-group form-group-default">
                                                        <label>Color:</label>
                                                        <input id="color" name="color" type="text" class="form-control" value="<?php echo $producto->color ?>" >
                                                    </div>



                                                    <div class="form-group form-group-default">
                                                        <label>Contraseña:</label>
                                                        <input id="contra" name="contra" type="text" class="form-control" value="<?php echo $producto->contra ?>">
                                                    </div>

                                                    <div class="form-group form-group-default">
                                                        <label>Falla Del Equipo:</label>
                                                        <input id="falla_equipo" name="falla_equipo" type="text" class="form-control" value="<?php echo $producto->falla_equipo ?>" >
                                                    </div>



                                                    <div class="form-group form-group-default">
                                                        <label>Trabajo A Realizar:</label>
                                                        <input id="trabajo" name="trabajo" type="text" class="form-control" value="<?php echo $producto->trabajo ?>">
                                                    </div>

                                                    <div class="form-group form-group-default">
                                                        <label>Cracks:</label>
                                                            <select name="cracks" id="cracks" class="form-control">
                                                <option value="<?php echo $producto->cracks ?>"><?php echo $producto->cracks ?></option>
                                                <option value="Si">SI</option>
                                                <option value="No">NO</option>
                                             
                                              </select>
                                                    </div>

                                                    <div class="form-group form-group-default">
                                                        <label>Enciende:</label>
                                                             <select name="enciende" id="enciende" class="form-control">
                                                          <option value="<?php echo $producto->enciende ?>"><?php echo $producto->enciende ?></option>   
                                                <option value="Si">SI</option>
                                                <option value="No">NO</option>
                                              
                                              </select>
                                            </div>


                                                    <div class="form-group form-group-default">
                                                        <label>Detalles Del Equipo:</label>
                                                        <input id="detalles_equipo" name="detalles_equipo" type="text" class="form-control" value="<?php echo $producto->detalles_equipo ?>">
                                                    </div>


                                                    <input type="hidden" id="quien_recibio" name="quien_recibio" value="<?= $user['nombre_us']; ?>">


                                                    <div class="form-group form-group-default">
                                                        <label>Precio:</label>
                                                        <input id="precio" name="precio" type="text" class="form-control" value="<?php echo $producto->precio ?>">
                                                    </div>


                                                    <div class="form-group form-group-default">
                                                        <label>Abonos:</label>
                                                        <input id="abonos" name="abonos" type="text" class="form-control" value="<?php echo $producto->abonos ?>">
                                                    </div>

                                                

                                                        <div class="form-group form-group-default">
                                                        <label>Status:</label>
                                                             <select name="status" id="status" class="form-control">
                                                             <option value="<?php echo $producto->status ?>"><?php echo $producto->status ?></option>
                                                <option value="En Proceso">En Proceso</option>
                                                <option value="Para Entregar">Para Entregar</option>
                                                <option value="Entregado">Entregado</option>
                                              
                                              </select>
                                            </div>

                                                    
                                                
                                                    
                                                    <br><br><input class="btn btn-info" type="submit" value="Guardar">
                                                    <a class="btn btn-warning" href="./vistaequiposandroidp2.php">Cancelar</a>

                                                    <?php } ?>
                                                </form>
                                       
                                    

  
                               
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
