<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">Tất cả sản phẩm</h3>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Thống kê giá theo Danh Mục</h4>
                                <div class="table-responsive">
                                    <table class="table table-thongke">
                                        <thead>
                                            <tr>
                                                <th>Danh mục</th>
                                                <th>Giá cao nhất</th>
                                                <th>Giá thấp nhất</th>
                                                <th>Giá trung bình</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($listdm as $tk) {
                                                    extract($tk);
                                                    echo "<tr>
                                                            <td>".$tendm."</td>
                                                            <td>".number_format($maxgia)."</td>
                                                            <td>".number_format($mingia)."</td>
                                                            <td>".number_format($avggia)."</td>
                                                        </tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Thống kê Sản Phẩm</h4>
                                <!-- <canvas id="pieChart" style="height:250px"></canvas> -->
                                <!-- <div id="myChart" style="max-width:700px;height: 500px"></div> -->
                                <div id="chart_wrap"><div id="chart_div1"></div></div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 grid-margin stretch-card">
                    
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pie chart</h4>
                                <div id="chart_div1" class="chart"></div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="content-wrapper">
                <div class="page-header">
                    <h3 class="page-title">Tất cả sản phẩm</h3>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Thống kê giá theo Thương Hiệu</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Thương hiệu</th>
                                                <th>Giá cao nhất</th>
                                                <th>Giá thấp nhất</th>
                                                <th>Giá trung bình</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($listth as $tk) {
                                                    extract($tk);
                                                    echo "<tr>
                                                            <td>".$tenth."</td>
                                                            <td>".number_format($maxgia)."</td>
                                                            <td>".number_format($mingia)."</td>
                                                            <td>".number_format($avggia)."</td>
                                                        </tr>";
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Thống kê Thương Hiệu</h4>
                                <!-- <canvas id="pieChart" style="height:250px"></canvas> -->
                                <!-- <div id="myChart" style="max-width:700px;height: 500px"></div> -->
                                <div id="chart_wrap"><div id="chart_div2"></div></div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-6 grid-margin stretch-card">
                    
                    </div>
                    <div class="col-lg-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Pie chart</h4>
                                <div id="chart_div1" class="chart"></div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
<script
src="https://www.gstatic.com/charts/loader.js">
</script>

<script>
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart1);

function drawChart1() {
var data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],
  <?php
  $tongdm = count($listdm);
  $i = 1;
    foreach ($listdm as $tk) {
        extract($tk);
        if ($i==$tongdm) {
            $dauphay="";
        } else {
            $dauphay = ",";
        }
        echo "['".$tk['tendm']."',".$tk['countsp']."]".$dauphay;
        $i++;
    }
  ?>
]);

var options = {
  title:'Thống kê Sản Phẩm theo Danh Mục',
  // color: red,
  is3D:true,  
  titleTextStyle:{
    color: 'white'
  },
  backgroundColor: 'transparent',
  legend:{    
    textStyle:{
      color: '#fff'
    }
  }
};

var chart = new google.visualization.PieChart(document.getElementById('chart_div1'));
  chart.draw(data, options);
}

$(window).on("throttledresize", function (event) {
    var options = {
        width: '100%',
        height: '100%',
        
    };

    var data = google.visualization.arrayToDataTable([]);
    drawChart1(data, options);
});
</script>
<script>
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawChart2);

function drawChart2() {
var data = google.visualization.arrayToDataTable([
  ['Contry', 'Mhl'],
  <?php
  $tongth = count($listth);
  $i = 1;
    foreach ($listth as $tk) {
        extract($tk);
        if ($i==$tongth) {
            $dauphay="";
        } else {
            $dauphay = ",";
        }
        echo "['".$tk['tenth']."',".$tk['countsp']."]".$dauphay;
        $i++;
    }
  ?>
]);

var options = {
  title:'Thống kê sản phẩm theo Thương Hiệu',
  is3D:true,titleTextStyle:{
    color: 'white'
  },
  backgroundColor: 'transparent',
  legend:{    
    textStyle:{
      color: '#fff'
    }
  }
};

var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
  chart.draw(data, options);
}

$(window).on("throttledresize", function (event) {
    var options = {
        width: '100%',
        height: '100%'
    };

    var data = google.visualization.arrayToDataTable([]);
    drawChart2(data, options);
});
</script>