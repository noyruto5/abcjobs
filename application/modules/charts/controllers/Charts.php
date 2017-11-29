<?php
class Charts extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('charts_model');
	}

	public function index()
	{
		$this->load->view('templates/header_with_sidebar');
		$this->load->view('charts/index');
		$this->load->view('templates/footer_with_sidebar');
	}

	public function app_yearly_chart()
	{
		$year_frm = $this->input->post('year_frm');
		$year_to = $this->input->post('year_to');

		echo "<script type='text/javascript'>
				
	            var lineData = {
	                labels: [";
	                for (;$year_frm <= $year_to; $year_frm++) {
	                    echo "'".$year_frm."',";
	                }
	                echo "],
	                datasets: [
	                    {
	                        label: \"Example dataset\",
	                        fillColor: \"rgb(210, 158, 0)\",
	                        strokeColor: \"rgb(210, 158, 0)\",
	                        pointColor: \"rgb(210, 158, 0)\",
	                        pointStrokeColor: \"#fff\",
	                        pointHighlightFill: \"#fff\",
	                        pointHighlightStroke: \"rgb(177, 158, 0)\",
	                        data: [";

	                        // need to recall variable because the for loop changes it
	                        $year_frm = $this->input->post('year_frm');
							$year_to = $this->input->post('year_to');

	                        for (;$year_frm <= $year_to; $year_frm++) {
                                $query = $this->db->query("SELECT COUNT(applicant_id) AS total FROM app_personal_info WHERE EXTRACT(YEAR FROM date_status) = '".$year_frm."' ");
                                $row = $query->row();
                                echo $row->total . ",";
                            }
	                        echo "]
	                    },
	                 	{
	                 		label: \"Example dataset\",
	                        fillColor: \"rgb(1, 34, 83)\",
	                        strokeColor: \"rgb(1, 34, 83)\",
	                        pointColor: \"rgb(1, 34, 83)\",
	                        pointStrokeColor: \"#fff\",
	                        pointHighlightFill: \"#fff\",
	                        pointHighlightStroke: \"rgb(1, 34, 147)\",
	                        data: [";

	                        // need to recall variable because the for loop changes it
	                        $year_frm = $this->input->post('year_frm');
							$year_to = $this->input->post('year_to');

                            for (;$year_frm <= $year_to; $year_frm++) {
                                $query = $this->db->query("SELECT COUNT(applicant_id) AS total FROM app_personal_info WHERE EXTRACT(YEAR FROM date_status) = '".$year_frm."'
                                                        AND accepted = 'yes' ");
                                $row = $query->row();
                                echo $row->total . ",";
                            }

                           echo "]
	                 	}
	                ]
	            };

	            var lineOptions = {
                scaleShowGridLines: true,
                scaleGridLineColor: \"rgba(0,0,0,.05)\",
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


            var ctx = document.getElementById(\"yearlyChart2\").getContext(\"2d\");
            var yearlyChart2 = new Chart(ctx).Line(lineData, lineOptions);
			</script>";
	}



	public function student_yearly_chart()
	{
		$year_frm = $this->input->post('year_frm');
		$year_to = $this->input->post('year_to');

		echo "<script>
			var barData = {
                labels: [";
                        for (;$year_frm <= $year_to; $year_frm++) {
                            echo "'".$year_frm."',";
                        }
                echo "],
                datasets: [
                    {
                        label: \"My First dataset\",
                        fillColor: \"rgb(210, 158, 0)\",
                        strokeColor: \"rgb(210, 158, 0)\",
                        highlightFill: \"rgb(177, 158, 0)\",
                        highlightStroke: \"rgb(177, 158, 0)\",
                        data: [";
                            $year_frm = $this->input->post('year_frm');
							$year_to = $this->input->post('year_to');

                            for (;$year_frm <= $year_to; $year_frm++) {
                                $query = $this->db->query("SELECT COUNT(student_id) AS total FROM students1 WHERE EXTRACT(YEAR FROM date_status) = '".$year_frm."' ");
                                $row = $query->row();
                                echo $row->total . ",";
                            }
                        
                        echo "]
                    },
                    {
                        label: \"My Second dataset\",
                        fillColor: \"rgb(1, 34, 83)\",
                        strokeColor: \"rgb(1, 34, 83)\",
                        highlightFill: \"rgb(1, 34, 147)\",
                        highlightStroke: \"rgb(1, 34, 147)\",
                        data: [";
                            $year_frm = $this->input->post('year_frm');
							$year_to = $this->input->post('year_to');

                            for (;$year_frm <= $year_to; $year_frm++) {
                                $query = $this->db->query("SELECT COUNT(student_id) AS total FROM students1 WHERE EXTRACT(YEAR FROM date_status) = '".$year_frm."'
                                                        AND accepted = 'yes' ");
                                $row = $query->row();
                                echo $row->total . ",";
                            }
                        
                        echo "]
                    }
                ]
            };

            var barOptions = {
                scaleBeginAtZero: true,
                scaleShowGridLines: true,
                scaleGridLineColor: \"rgba(0,0,0,.05)\",
                scaleGridLineWidth: 1,
                barShowStroke: true,
                barStrokeWidth: 2,
                barValueSpacing: 5,
                barDatasetSpacing: 1,
                responsive: true,
            }


            var ctx = document.getElementById(\"yearlyChart1\").getContext(\"2d\");
            var yearlyChart1 = new Chart(ctx).Bar(barData, barOptions);
        </script>";
	}
}