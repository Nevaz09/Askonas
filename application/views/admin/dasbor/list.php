<!-- Info boxes -->
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fa fa-newspaper-o"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Berita</span>
        <span class="info-box-number">
          <?php echo $this->dasbor_model->berita()->total; ?>
          <small>Post</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Staff</span>
        <span class="info-box-number"><?php echo $this->dasbor_model->staff()->total; ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fa fa-download"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">File Unduhan</span>
        <span class="info-box-number"><?php echo $this->dasbor_model->download()->total; ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-image"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Galeri</span>
        <span class="info-box-number"><?php echo $this->dasbor_model->galeri()->total; ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->


  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fa fa-lock"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Pengguna</span>
        <span class="info-box-number">
          <?php echo $this->dasbor_model->user()->total; ?>
          <small>User</small>
        </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-money"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Anggota</span>
        <span class="info-box-number"><?php echo $this->dasbor_model->anggota()->total; ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>

  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fa fa-calendar"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Agenda</span>
        <span class="info-box-number"><?php echo $this->dasbor_model->agenda()->total; ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-film"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Video</span>
        <span class="info-box-number"><?php echo $this->dasbor_model->video()->total; ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <div class="col-md-12">
<hr>
<h2>Statistik kunjungan terakhir</h2>
<hr>
<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 500px;
}

</style>

<!-- Resources -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>

<!-- Chart code -->
<script>
am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart);
chart.paddingRight = 20;

// Add data
chart.data = [
<?php 
$kunjungan = $this->dasbor_model->kunjungan();
foreach($kunjungan as $kunjungan) {
?>
{
  "year": "<?php echo date('d-m-Y',strtotime($kunjungan->hari)) ?>",
  "value": <?php echo $kunjungan->total; ?>
}, 
<?php } ?>
];

// Create axes
var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "year";
categoryAxis.renderer.minGridDistance = 50;
categoryAxis.renderer.grid.template.location = 0.5;
categoryAxis.startLocation = 0.5;
categoryAxis.endLocation = 0.5;

// Pre zoom
chart.events.on("datavalidated", function () {
  categoryAxis.zoomToIndexes(Math.round(chart.data.length * 0.4), Math.round(chart.data.length * 0.55));
});

// Create value axis
var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.baseValue = 0;

// Create series
var series = chart.series.push(new am4charts.LineSeries());
series.dataFields.valueY = "value";
series.dataFields.categoryX = "year";
series.strokeWidth = 2;
series.tensionX = 0.77;

var range = valueAxis.createSeriesRange(series);
range.value = 0;
range.endValue = 1000;
range.contents.stroke = am4core.color("#FF0000");
range.contents.fill = range.contents.stroke;

// Add scrollbar
var scrollbarX = new am4charts.XYChartScrollbar();
scrollbarX.series.push(series);
chart.scrollbarX = scrollbarX;

chart.cursor = new am4charts.XYCursor();

}); // end am4core.ready()
</script>

    <!-- HTML -->
    <div id="chartdiv"></div>


  </div>
</div>
<!-- .row -->
<?php
echo form_open(base_url('admin/anggota/konfirmasi'));
?>
<div class="row" style="margin-top: 50px">
  <h4><center>Anggota Yang Belum Dikonfirmasi</center></h4>
  <div class="col-12">
    <div class="info-box">
      <div class="info-box-content">
        <p class="text-right mr-auto">
          <div class="btn-group text-right">
            <button class="btn btn-info" type="submit" name="konfirmasi" value="konfirmasi">
              <i class="fa fa-check"></i> Konfirmasi
            </button>
            
          </div>
        </p>
        <div class="table-responsive mailbox-messages">
          <table id="example1" class="display table table-bordered table-hover" cellspacing="0" width="100%">
          <thead>
              <tr>
                  <th width="5%">
                      <div class="mailbox-controls">
                          <!-- Check all button -->
                          <button type="button" class="btn btn-default btn-xs checkbox-toggle"><i class="fa fa-square-o"></i>
                          </button>
                      </div>
                  </th>
                  <th style="vertical-align: middle;" class="text-center" width="20%">NAMA</th>
                  <th style="vertical-align: middle;" class="text-center" width="20%">EMAIL/USERNAME</th>
                  <th style="vertical-align: middle;" class="text-center">CP</th>
                  <th style="vertical-align: middle;" class="text-center">JENIS</th>
                  <th width="20%"></th>
              </tr>
          </thead>
          <tbody>

            <?php 
            // Looping data user dg foreach
            $i=1;
            foreach($anggota as $anggota) {
              if($anggota->status_anggota == 'Yes') continue;
              $id_anggota = $anggota->id_anggota;
              $up       = $this->up_model->listing($id_anggota);
            ?>

            <tr>
              <td class="text-center">
                <input type="checkbox" name="id_anggota[]" value="<?php echo $anggota->id_anggota ?>">
              </td>
              <td><?php echo $anggota->nama ?><br>
                  <small>
                  Pimpinan: <?php echo $anggota->pimpinan ?>
                  <br>Telepon: <?php echo $anggota->telepon ?>
                  <br>Alamat: <br><?php echo nl2br($anggota->alamat) ?></small></td>
              <td><?php echo $anggota->email ?></td>
              <td><?php if($up) { foreach($up as $up) { echo $up->nama_up.' ('.$up->bagian.'), '; }}else{ echo '-'; } ?></td>
              <td><?php echo $anggota->jenis_anggota ?></td>
              <td>
                <div class="btn-group">
                  <a href="<?php echo base_url('admin/anggota/konfirmasi/'.$anggota->id_anggota) ?>" class="btn btn-info btn-sm" title="Konfirmasi Anggota"><i class="fa fa-check"></i> Konfirmasi</a>
                </div>
              </td>
            </tr>

            <?php $i++; } //End looping ?>
          </tbody>
          </table>
          </div>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
</div>
<!-- /.row -->

<?php echo form_close(); ?>


