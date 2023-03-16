<?php

class Cruise extends Controller
{
    private $cruiseModel;

    public function __construct()
    {
        $this->cruiseModel = $this->model('CruiseModel');
    }

    public function createCruise()
    {
        // die(var_dump($_POST['Itinerary']));

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data = [
                // 'id' => $id,
                'name' => trim($_POST['name']),
                'price' => trim($_POST['price']),
                'image' => $_FILES['image']['name'],
                'ship' => trim($_POST['ship']),
                'port' => trim($_POST['port_depart']),
                'date' => trim($_POST['date_depart']),
                'nights' => trim($_POST['night_number']),
                'name_err' => "",
                'price_err' => "",
                'ship_err' => "",
                'port_err' => "",
                'date_err' => "",
                'nights_err' => "",
                'image_err' => ''
            ];



            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter Cruise name';
            }
            if (empty($data['price'])) {
                $data['price_err'] = 'Please enter Cruise price';
            }
            if (empty($data['image'])) {
                $data['image_err'] = 'Please enter Cruise image';
            }
            if (empty($data['ship'])) {
                $data['ship_err'] = 'Please enter Cruise Ship';
            }
            if (empty($data['port'])) {
                $data['port_err'] = 'Please enter departure Port of Cruise';
            }
            if (empty($data['date'])) {
                $data['date_err'] = 'Please Enter Departure Date of Cruise';
            }
            if (empty($data['nights'])) {
                $data['nights_err'] = "Please Enter Cruise's Number of nights";
            }
          


            if (empty($data['name_err']) && empty($data['price_err']) && empty($data['ship_err']) && empty($data['image_err']) && empty($data['port_err']) && empty($data['nights_err']) && empty($data['date_err'])) {
                // die('Success');
                $Itinerary = array();
                foreach ($_POST['Itinerary'] as $i) {
                    array_push($Itinerary, $i);
                }
                $data['Itinerary'] = implode(" , ", $Itinerary);
                if ($this->cruiseModel->add($data)) {
                    // flash('post_message', 'Product Updated');
                    move_uploaded_file($_FILES['image']["tmp_name"], 'uploads/cruises/' . $data["image"]);
                    // echo "<br> <br> Image has been uploaded successfully ";
                    redirect('admin/cruisePanel');
                } else {
                    die('Something went wrong');
                }
            } else {
                die('Not Success');
                $this->view('admin/cruisePanel', $data);
            }
        } else {
            $data = [
                // 'id' => $id,
                'name' => "",
                'price' => "",
                'image' => "",
                'ship' => "",
                'port' => "",
                'date' => "",
                'nights' => "",
                'Itinerary' => "",
            ];

            die('Not Success it is not a Post request');
            $this->view('admin/dashboard', $data);
        }
    }


    public function deleteCruise($id)
    {

        if (!empty($id)) {
            // die('INSIDE :' . $id);
            if ($this->cruiseModel->delete($id)) {
                redirect('admin/cruisePanel');
            } else {
                redirect('admin/cruisePanel');
            }
        } else {
            die("error : EMPTY ID");
        }
    }
    
}
