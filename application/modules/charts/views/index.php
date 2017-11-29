<h3>Statistics</h3>
<ul class="breadcrumb">
  <li><a href="<?php echo site_url('admin/index'); ?>">Admin</a></li>
  <li>Statistics</li>
</ul>

<h4>Chart of students applied/hired for summer job</h4>
<img src="<?= base_url('images/legend1.png') ?>" ?>&nbsp;Students Applied&nbsp;&nbsp;
<img src="<?= base_url('images/legend2.png') ?>" ?>&nbsp;Students Hired
<br/><br/>

<div style="width: 60%;">
    <canvas id="yearlyChart1" height="150"></canvas>
</div>

<div id="script-holder">
</div>

<div id="chart-form">
    <select id="year-from">
        <option>From Year</option>
        <script type="text/javascript">
            var yr_strt = 2018;
            for (i = 10; i <= 20; i++) {
                yr_strt-=1;
                document.write('<option>'+ yr_strt +'</option>');
            }
        </script>
    </select>&nbsp;
    <!-- should put a range limit -->
    <select id="year-to">
        <option>To Year</option>
        <script type="text/javascript">
            var yr_strt = 2018;
            for (i = 10; i <= 20; i++) {
                yr_strt-=1;
                document.write('<option>'+ yr_strt +'</option>');
            }
        </script>
    </select>&nbsp;
    <button type="button" class="btn-show">Show</button>
</div>

<br/><br/>
<h4>Chart of applicants applied/hired for a job</h4>
<img src="<?= base_url('images/legend1.png') ?>" ?>&nbsp;Applicants Applied&nbsp;&nbsp;
<img src="<?= base_url('images/legend2.png') ?>" ?>&nbsp;Applicants Hired
<br/><br/>

<div style="width: 60%;" id="chart-2">
    <canvas id="yearlyChart2" height="150"></canvas>
</div>

<div id="script-holder-2">
</div>

<div id="chart-form-2">
    <select id="year-from">
        <option>From Year</option>
        <script type="text/javascript">
            var yr_strt = 2018;
	        for (i = 10; i <= 20; i++) {
	            yr_strt-=1;
	            document.write('<option>'+ yr_strt +'</option>');
            }
        </script>
    </select>&nbsp;
    <!-- should put a range limit -->
    <select id="year-to">
        <option>To Year</option>
        <script type="text/javascript">
            var yr_strt = 2018;
            for (i = 10; i <= 20; i++) {
                yr_strt-=1;
                document.write('<option>'+ yr_strt +'</option>');
            }
        </script>
    </select>&nbsp;
    <button type="button" class="btn-show">Show</button>
</div>

<script>

// Chart js
            var barData = {
                labels: [
                    <?php
                        $year_from = 2011;
                        $year_to = 2017;
                        for (;$year_from <= $year_to; $year_from++) {
                            echo "'".$year_from."',";
                        }
                    ?>
                ],
                datasets: [
                    {
                        label: "My First dataset",
                        fillColor: "rgb(210, 158, 0)",
                        strokeColor: "rgb(210, 158, 0)",
                        highlightFill: "rgb(177, 158, 0)",
                        highlightStroke: "rgb(177, 158, 0)",
                        data: [
                        <?php
                            $year_from = 2011;
                            $year_to = 2017;
                            for (;$year_from <= $year_to; $year_from++) {
                                $query = $this->db->query("SELECT COUNT(student_id) AS total FROM students1 WHERE EXTRACT(YEAR FROM date_status) = '".$year_from."' ");
                                $row = $query->row();
                                echo $row->total . ",";
                            }
                        ?>
                        ]
                    },
                    {
                        label: "My Second dataset",
                        fillColor: "rgb(1, 34, 83)",
                        strokeColor: "rgb(1, 34, 83)",
                        highlightFill: "rgb(1, 34, 147)",
                        highlightStroke: "rgb(1, 34, 147)",
                        data: [
                        <?php
                            $year_from = 2011;
                            $year_to = 2017;
                            for (;$year_from <= $year_to; $year_from++) {
                                $query = $this->db->query("SELECT COUNT(student_id) AS total FROM students1 WHERE EXTRACT(YEAR FROM date_status) = '".$year_from."'
                                                        AND accepted = 'yes' ");
                                $row = $query->row();
                                echo $row->total . ",";
                            }
                        ?>
                        ]
                    }
                ]
            };

            var barOptions = {
                scaleBeginAtZero: true,
                scaleShowGridLines: true,
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleGridLineWidth: 1,
                barShowStroke: true,
                barStrokeWidth: 2,
                barValueSpacing: 5,
                barDatasetSpacing: 1,
                responsive: true,
            }


            var ctx = document.getElementById("yearlyChart1").getContext("2d");
            var yearlyChart1 = new Chart(ctx).Bar(barData, barOptions);

            var lineData = {
                labels: [
                    <?php
                        $year_from = 2011;
                        $year_to = 2017;
                        for (;$year_from <= $year_to; $year_from++) {
                            echo "'".$year_from."',";
                        }
                    ?>
                ],
                datasets: [
                    {
                        label: "Example dataset",
                        fillColor: "rgb(210, 158, 0)",
                        strokeColor: "rgb(210, 158, 0)",
                        pointColor: "rgb(210, 158, 0)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgb(177, 158, 0)",
                        data: [
                        <?php
                            $year_from = 2011;
                            $year_to = 2017;
                            for (;$year_from <= $year_to; $year_from++) {
                                $query = $this->db->query("SELECT COUNT(applicant_id) AS total FROM app_personal_info WHERE EXTRACT(YEAR FROM date_status) = '".$year_from."' ");
                                $row = $query->row();
                                echo $row->total . ",";
                            }
                        ?>
                        ]
                    },
                    {
                        label: "Example dataset",
                        fillColor: "rgb(1, 34, 83)",
                        strokeColor: "rgb(1, 34, 83)",
                        pointColor: "rgb(1, 34, 83)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgb(1, 34, 147)",
                        data: [
                        <?php
                            $year_from = 2011;
                            $year_to = 2017;
                            for (;$year_from <= $year_to; $year_from++) {
                                $query = $this->db->query("SELECT COUNT(applicant_id) AS total FROM app_personal_info WHERE EXTRACT(YEAR FROM date_status) = '".$year_from."'
                                                        AND accepted = 'yes' ");
                                $row = $query->row();
                                echo $row->total . ",";
                            }
                        ?>
                        ]
                    }
                ]
            };

            var lineOptions = {
                scaleShowGridLines: true,
                scaleGridLineColor: "rgba(0,0,0,.05)",
                scaleGridLineWidth: 1,
                bezierCurve: true,
                bezierCurveTension: 0.4,
                pointDot: true,
                pointDotRadius: 4,
                pointDotStrokeWidth: 1,
                pointHitDetectionRadius: 20,
                datasetStroke: true,
                datasetStrokeWidth: 2,
                datasetFill: true,
                responsive: true,
            };


            var ctx = document.getElementById("yearlyChart2").getContext("2d");
            var yearlyChart2 = new Chart(ctx).Line(lineData, lineOptions);    


    // chart js ajax 
    $("#chart-form .btn-show").click(function(){
         var year_frm = $("#chart-form #year-from").val();
         var year_to = $("#chart-form #year-to").val();
         
        if (year_frm != "From Year" && year_to != "To Year")
        {
            yearlyChart1.destroy();

          $.ajax({
          type: "POST",
          url: "<?php echo site_url('charts/student_yearly_chart'); ?>",
          data:
            {
              year_frm: year_frm,
              year_to: year_to
            }
          }).done(function(result){
            $("#script-holder").html(result);
          });

        }
    });

    // chart js ajax 2
    $("#chart-form-2 .btn-show").click(function(){
         var year_frm = $("#chart-form-2 #year-from").val();
         var year_to = $("#chart-form-2 #year-to").val();
         
        if (year_frm != "From Year" && year_to != "To Year")
        {
            yearlyChart2.destroy();

          $.ajax({
          type: "POST",
          url: "<?php echo site_url('charts/app_yearly_chart'); ?>",
          data:
            {
              year_frm: year_frm,
              year_to: year_to
            }
          }).done(function(result){
            $("#script-holder-2").html(result);
          });

        }
    });

</script>