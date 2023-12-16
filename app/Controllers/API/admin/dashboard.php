<?php

namespace App\Controllers\API\admin;


use App\Controllers\General;
use CodeIgniter\API\ResponseTrait;
use DateTime;

class dashboard extends General
{
    use ResponseTrait;

    public function __construct()
    {
        parent::__construct();
    }


    public function general_monthly()
    {
        try {

            $rules  = [

                'date_type' => [
                    'label' => " Date Type",
                    'rules' => "required|in_list[entry,booking]",
                ],

            ];
            if ($this->validate($rules)) {
                $date_type = $this->request->getPost('date_type');
                $column = $date_type == 'entry' ? 'created_on' : 'booking_date';


                $startDate = new DateTime('first day of 11 months ago');
                $endDate = new DateTime('last day of this month');

                $LastDay = "LAST_DAY(NOW())";
                if ($date_type == 'booking' ?  $endDate->modify('+1 month') : false) {
                    $LastDay = "LAST_DAY(DATE_ADD(CURDATE(), INTERVAL 1 MONTH))";
                }


                $DataSet = [];
                $currentDate = clone $startDate;

                $i = 0;
                $set_index = [];
                while ($currentDate <= $endDate) {

                    $data = [
                        'x' => $currentDate->format('M'),
                        'y' => 0
                    ];
                    $DataSet[] = $data;

                    $set_index[$currentDate->format('M Y')] = $i;
                    $currentDate->modify('+1 month');
                    $i++;
                }

                $SQL = "SELECT
                    YEAR($column) AS booking_year,
                    MONTH($column) AS booking_month,
                    DATE_FORMAT($column,'%b %Y') as month_year,
                    COUNT(id) AS total_bookings
                    
                FROM
                    general_bookings
                WHERE
                    $column >= DATE_FORMAT(NOW() - INTERVAL 11 MONTH, '%Y-%m-01') 
                    AND $column < $LastDay 
                GROUP BY
                    booking_year, booking_month";
                $query = $this->db->query($SQL);
                while ($row = $query->getUnbufferedRow()) {
                    $index = $set_index[$row->month_year];
                    $DataSet[$index]['y'] = (int) $row->total_bookings;
                }


                return $this->respond([
                    'status' => "success",
                    'data' => $DataSet,

                ]);
            } else {
                throw new \Exception("Invalid data");
            }
        } catch (\Exception $e) {
            return $this->handle_exception($e);
        }
    }
    public function video_monthly()
    {
        try {

            $rules  = [

                'date_type' => [
                    'label' => " Date Type",
                    'rules' => "required|in_list[entry,booking]",
                ],

            ];
            if ($this->validate($rules)) {
                $date_type = $this->request->getPost('date_type');
                $column = $date_type == 'entry' ? 'created_on' : 'booking_date';


                $startDate = new DateTime('first day of 11 months ago');
                $endDate = new DateTime('last day of this month');

                $LastDay = "LAST_DAY(NOW())";
                if ($date_type == 'booking' ?  $endDate->modify('+1 month') : false) {
                    $LastDay = "LAST_DAY(DATE_ADD(CURDATE(), INTERVAL 1 MONTH))";
                }


                $DataSet = [];
                $currentDate = clone $startDate;

                $i = 0;
                $set_index = [];
                while ($currentDate <= $endDate) {

                    $data = [
                        'x' => $currentDate->format('M'),
                        'y' => 0
                    ];
                    $DataSet[] = $data;

                    $set_index[$currentDate->format('M Y')] = $i;
                    $currentDate->modify('+1 month');
                    $i++;
                }

                $SQL = "SELECT
                    YEAR($column) AS booking_year,
                    MONTH($column) AS booking_month,
                    DATE_FORMAT($column,'%b %Y') as month_year,
                    COUNT(id) AS total_bookings
                    
                FROM
                    video_bookings
                WHERE
                    $column >= DATE_FORMAT(NOW() - INTERVAL 11 MONTH, '%Y-%m-01') 
                    AND $column < $LastDay 
                GROUP BY
                    booking_year, booking_month";
                $query = $this->db->query($SQL);
                while ($row = $query->getUnbufferedRow()) {
                    $index = $set_index[$row->month_year];
                    $DataSet[$index]['y'] = (int) $row->total_bookings;
                }


                return $this->respond([
                    'status' => "success",
                    'data' => $DataSet,

                ]);
            } else {
                throw new \Exception("Invalid data");
            }
        } catch (\Exception $e) {
            return $this->handle_exception($e);
        }
    }

    public function general_branch_wise()
    {
        try {
            $rules  = [

                'date_type' => [
                    'label' => " Date Type",
                    'rules' => "required|in_list[entry,booking]",
                ],

            ];
            if ($this->validate($rules)) {
                $date_type = $this->request->getPost('date_type');
                $column = $date_type == 'entry' ? 'created_on' : 'booking_date';
                $starting_month = date("Y-m-01");
                $ending_month = date("Y-m-t");
                // Pie Chart Data
                $SQL = "SELECT t1.total, t2.name FROM (SELECT count(id) as total, branch FROM `general_bookings` where $column BETWEEN '$starting_month' AND '$ending_month'   GROUP BY branch) as t1 RIGHT JOIN branches t2 ON t1.branch = t2.id ORDER BY `t2`.`name` ASC;";
                $query = $this->db->query($SQL);


                foreach ($query->getResult() as $item) {
                    $labels[] = $item->name ?? "Unknown";
                    $dataset[] = (int) $item->total ?? 0;
                }
                return $this->respond([
                    'status' => "success",
                    'data' => [
                        'series' => $dataset,
                        'labels' => $labels,
                    ]

                ]);
            } else {
                throw new \Exception("Invalid data");
            }
        } catch (\Exception $e) {
            return $this->handle_exception($e);
        }
    }
    private function handle_exception(\Exception $e)
    {
        $data = ['status' => 'bad'];
        $data['message'] = $e->getMessage();
        $errors = $this->validator->getErrors();
        if (count($errors) > 0) {
            $data['errors'] = $errors;
        } else {
            $data['errors'] = $e->getMessage();
        }
        return $this->respond($data);
    }
}
