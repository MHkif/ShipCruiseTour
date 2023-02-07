<?php

class Port extends Controller
{
    private $portModel;

    public function __construct()
    {
        $this->portModel = $this->model('PortModel');
    }

    public function createPort()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data = [
                // 'id' => $id,
                'name' => trim($_POST['name']),
                'country' => trim($_POST['country']),
                // 'image' => $_FILES['image']['name'],
                'name_err' => "",
                'country_err' => "",
                // 'image_err' => ''
            ];



            if (empty($data['name'])) {
                $data['name_err'] = 'Please enter Port name';
            }
            if (empty($data['country'])) {
                $data['country_err'] = 'Please enter Port country';
            }
            // if (empty($data['image'])) {
            //     $data['image_err'] = 'Please enter Ship image';
            // }




            if (empty($data['name_err']) && empty($data['country_err'])) {
                // die('Success');
                if ($this->portModel->add($data)) {
                    // flash('post_message', 'Product Updated');
                    // move_uploaded_file($_FILES['image']["tmp_name"], 'uploads/ships/' . $data["image"]);
                    // echo "<br> <br> Image has been uploaded successfully ";
                    redirect('admin/portPanel');
                } else {
                    die('Something went wrong');
                }
            } else {
                die('Not Success');
                $this->view('admin/portPanel', $data);
            }
        } else {
            $data = [
                // 'id' => $id,
                'name' => "",
                'country' => "",
                // 'image' => "",
            ];

            die('Not Success it is not a Post request');
            // You have to Handle this ASAP 
            $this->view('admin/dashboard', $data);
        }
    }

    public function deletePort($id)
    {


        if (!empty($id)) {
            // die('INSIDE :' . $id);
            if ($this->portModel->delete($id)) {
                redirect('admin/portPanel');
            } else {
                redirect('admin/portPanel');
            }
        } else {
            die("error : EMPTY ID");
        }
    }
}
