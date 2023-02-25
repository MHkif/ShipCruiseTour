<?php

class Ship extends Controller
{
    private $shipModel;

    public function __construct()
    {
        $this->shipModel = $this->model('ShipModel');
    }

    public function createShip()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data = [
                // 'id' => $id,
                'name' => trim($_POST['name']),
                'room_num' => trim($_POST['room_num']),
                // 'image' => $_FILES['image']['name'],
                'places' => trim($_POST['places']),
                'name_err' => "",
                'room_num_err' => "",
                'places_err' => "",
                // 'image_err' => ''
            ];



            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter Ship name';
            }
            if (empty($data['room_num'])) {
                $data['room_num_err'] = 'Please enter Rooms number';
            }
            // if (empty($data['image'])) {
            //     $data['image_err'] = 'Please enter Ship image';
            // }
            // if (empty($data['places'])) {
            //     $data['places_err'] = 'Please enter Places number';
            // }



            if (empty($data['name_err']) && empty($data['room_num_err']) && empty($data['places_err'])) {
                // die('Success');
                if ($this->shipModel->add($data)) {
                    // flash('post_message', 'Product Updated');
                    // move_uploaded_file($_FILES['image']["tmp_name"], 'uploads/ships/' . $data["image"]);
                    // echo "<br> <br> Image has been uploaded successfully ";
                    redirect('admin/shipPanel');
                } else {
                    die('Something went wrong');
                }
            } else {
                die('Not Success');
                $this->view('admin/shipPanel', $data);
            }
        } else {
            $data = [
                // 'id' => $id,
                'name' => "",
                'places' => "",
                'room_num' => "",
                // 'image' => "",
            ];

            die('Not Success it is not a Post request');
            $this->view('admin/dashboard', $data);
        }
    }

    public function deleteShip($id)
    {


        if (!empty($id)) {
            // die('INSIDE :' . $id);
            if ($this->shipModel->delete($id)) {
                redirect('admin/shipPanel');
            } else {
                redirect('admin/shipPanel');
            }
        } else {
            die("error : EMPTY ID");
        }
    }
}
