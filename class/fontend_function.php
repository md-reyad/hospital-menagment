<?php

require 'config.php';

class fontend_function extends Connect {

    public function slect_image() {
        $query = 'SELECT * FROM tbl_slider ORDER BY id DESC LIMIT 4';
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            return $result;
        }
    }

    public function select_doctor() {





        $query = "SELECT  tbl_doctor.name,tbl_doctor.id, tbl_doctor.number, tbl_doctor.address, tbl_doctor.education, tbl_doctor.description, tbl_doctor.image, tbl_category.category_name FROM tbl_doctor LEFT JOIN tbl_category ON tbl_doctor.category=tbl_category.id";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            return $result;
        }
    }

    public function select_footer() {
        $query = 'SELECT * FROM tbl_footer ORDER BY id DESC LIMIT 1';
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            return $result;
        }
    }

    public function select_category() {
        $query = 'SELECT * FROM tbl_category';
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            return $result;
        }
    }

    public function select_category_wise_doctor($id) {
        $id = $id['id'];

        $query = "SELECT  tbl_doctor.name,tbl_doctor.id, tbl_doctor.number, tbl_doctor.address, tbl_doctor.education, tbl_doctor.description, tbl_doctor.image, tbl_category.category_name FROM tbl_doctor LEFT JOIN tbl_category ON tbl_doctor.category=tbl_category.id WHERE tbl_doctor.id='$id'";

        // $query="SELECT * FROM tbl_doctor where category='$id'";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            return $result;
        }
    }

    public function login($data) {

        $email = $data['email'];
        $password = md5($data['password']);
        $query = "SELECT * FROM tbl_admin WHERE email='$email' and password='$password' AND type=1";
        $result = mysqli_query($this->connect, $query);

        if ($result) {
            $select = mysqli_num_rows($result);
            if ($select > 0) {
                session_start();
                $row = mysqli_fetch_assoc($result);
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['type'] = 1;
                $_SESSION['id'] = TRUE;
                return header("location: admin/dashboard.php");
            } else {
                $msg = "<div class='alert alert-error'>your email and password or correct!!</div>";
                return $msg;
            }
        } else {
            $msg = '<div class="alert alert-danger">your email or password increct!!</div>';
            return $msg;
        }
    }

    public function registration($data) {
        $password = md5($data['password']);
        $type = 1;
        $query = "INSERT INTO tbl_admin (name,email,password,number,type)VALUES('$data[name]','$data[email]','$password','$data[number]','$type')";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            $msg = '<div class="alert alert-success">Your  Registration SuccessFully</div>';
            return $msg;
        }
    }

    public function select_contact() {
        $query = 'SELECT * FROM tbl_contact ORDER BY id DESC LIMIT 1';
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            return $result;
        }
    }

    public function select_photo() {
        $query = 'SELECT * FROM tbl_image ORDER BY id DESC LIMIT 30';
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            return $result;
        }
    }

    public function search_data($search) {
        $query = "SELECT  tbl_doctor.name,tbl_doctor.id, tbl_doctor.number, tbl_doctor.address, tbl_doctor.education, tbl_doctor.description, tbl_doctor.image, tbl_category.category_name FROM tbl_doctor LEFT JOIN tbl_category ON tbl_doctor.category=tbl_category.id WHERE name like '%" . $search . "%'";
     //     $sql = " SELECT * FROM tbl_doctor WHERE name like '%" . $search . "%' ";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            
            return $result;
        }  else {
        echo "sorry data not found";
        
        
        }
    }

}


?>