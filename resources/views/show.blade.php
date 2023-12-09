{{$car->headquarter->headquarters}}

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>show</title>
   <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/build/style.css">
          <!-- Google Font: Source Sans Pro -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css"> 
</head>
<body>
   <div class="m-auto w-4/8 py-24">
      <div class="text-center">
       <h1 class="text-5xl text-uppercase bold">
        {{$car->name}}
       </h1>
      
      </div>
      <div class="py-10">
        <div class="m-auto text-center">
          <span class="text-uppercase text-blue-500 text-xs italic">
            Founded: {{$car->founded}}
          </span>
          <p class="text-lg text-gray-700 py-6">
            {{$car->description}}
          </p>
        <div class="center ml-10">
          <table class="table-bordered responsive">
            <tr class="bg-blue">
              <th class="w-1/4 border-d border-gray">
              Model
              </th>
                <th class="w-1/4 border-d border-gray">
              Engines
              </th>
                 <th class="w-1/4 border-d border-gray">
              Date
              </th>
            </tr>
              
            @forelse ($car->carModels as $model)
               
                <tr>
                  <td class="border-4 border-gray">
                    {{$model->model_name}}
                  </td>

                   <td class="border-4 border-gray">
                  @foreach ($car->engines as $engine )
                      @if($model->id ==$engine->model_id)
                            {{$engine->engine_name}}
                      @endif
                  @endforeach
                  </td>
                  <td class="border-4 border-gray">
                      {{date('d-m-Y',strtotime($car->productionDate->created_at))}}
                  </td>
                
                </tr>
                
                  
               
            @empty
               
            @endforelse
          
          </table>

          </div>
          <p class="text-center">
            Product types:
            @forelse($car->products as $product)
            {{$product->name}}
            @empty
            <p>
              No car product description
            </p>
            @endforelse
          </p>

          <hr class="mt-4 mb-8">
        </div>
      </div>
 


  <script src="../plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="../plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>

  
</body>
</html>