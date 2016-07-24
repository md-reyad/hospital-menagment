<?php

require 'config.php';

class admin_function extends Connect {

    public function change_password() {
        if (empty($_POST['old_password'] && $_POST['new_password'] && $_POST['confirm_password'])) {
            $msg = "<div class='alert alert-danger'>your input required</br></div>";
            if ($msg) {
                return $msg;
            }
        } else {
            /* -----------------Caking old password-------------- */
            $password = $_POST['old_password'];
            $password = md5($password);
            $num = 0;

            $result_password = mysqli_query($this->connect, "SELECT * FROM tbl_admin WHERE password='$password'");
            $num = mysqli_num_rows($result_password);
            if ($num == 0) {
                $msg = "<div class='alert alert-danger'>Your Password Not Match!!</br></div>";
                if ($msg) {
                    return $msg;
                }
            }
            /* -----------------Caking new password and confrim password-------------- */ else {
                if ($_POST['new_password'] != $_POST['confirm_password']) {
                    $msg = "<span class='alert alert-danger'>Your Password not metch!!</span>";
                    if ($msg) {
                        return $msg;
                    }
                } else {
                    $new_password = $_POST['new_password'];
                    $new_password = md5($new_password);
                    $result_password = mysqli_query($this->connect, "UPDATE tbl_admin SET password='$new_password' WHERE id=1");
                    $msg = "<div class='alert alert-success'>Your password change successfully</div>";
                    if ($msg) {
                        return $msg;
                    }
                }
            }
        }
    }

    public function forgot_email($data) {
     //   $email = $data['email'];


//
//        $query = "SELECT * FROM tbl_admin WHERE email='$email' AND type=0";
//        $result = mysqli_query($this->connect, $query);
//         $p=  mysqli_num_rows($result);
//        if ($p>0) {
//            $res = mysqli_fetch_array($result);
//            $to = $res['email'];
//            $subject = 'Remind password';
//            
//            $msg = 'Your password : ' . $res['password'];
//            $headers = 'From:imam.reyad93@gmail.com';
//            $m = mail($to, $subject, $msg, $headers);
//            if ($m) {
//                echo'Check your inbox in mail';
//            } else {
//                echo'mail is not send';
//            }
//        } else {
//            echo'You entered mail id is not present';
//        }
        
//        ini_set("SMTP","imam.eyad93@gmail.com");//Cambien mail.cantv.net Por localhost ... ojo, ojo OJO
//ini_set("smtp_port",25);
//ini_set("sendmail_from","imam.eyad93@gmail.com");
//
//$too = "imam.reyad93@gmail.com" ;//pon tu correo para probar, your email
//$subject = "TEST" ;
//$message = "User message" ;
//$user_email = "imam.reyad93@gmail.com" ; // valid POST email address
//
//$headers = "From: $user_email " ;
//$headers .= "Reply-To: $too " ;
//$headers .= "Return-Path: $too " ;
//$headers .= "X-Mailer: PHP/" . phpversion (). " " ;
//$headers .= 'MIME-Version: 1.0' . " " ;
//$headers .= 'Content-type: text/html; UTF-8' . " " ;
//
//if( mail ( $too , $subject , $message , $headers )) echo 'SENT' ;

	


    }





    public function login_chick($data) {

        $email = $data['email'];
        $password = md5($data['password']);
        $query = "SELECT * FROM tbl_admin WHERE email='$email' and password='$password' AND type=0";
        $result = mysqli_query($this->connect, $query);

        if ($result) {
            $select = mysqli_num_rows($result);
            if ($select > 0) {
                session_start();
                $row = mysqli_fetch_assoc($result);
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['type'] = 0;
                $_SESSION['id'] = TRUE;
                return header("location: dashboard.php");
            } else {
                $msg = "<div class='alert alert-error'>your email and password or correct!!</div>";
                return $msg;
            }
        } else {
            $msg = '<div class="alert alert-danger">your email or password increct!!</div>';
            return $msg;
        }
    }

    public function categoy_stote($category_data) {

// echo  $query1 = "SELECT * FROM tbl_category where category_name='$category_data[category_name]'";
//   $result1=  mysqli_query($this->connect, $query1);
//  if ($result1) {
//   $msg = '<div class="alert alert-danger">Your Data Already exiest</div>';
//    return $msg;
// } else {

        $query = "INSERT INTO tbl_category (category_name) VALUES('$category_data[category_name]')";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            $msg = '<div class="alert alert-success">Your Data Insert SuccessFully</div>';
            return $msg;
        }
//}
    }

    public function select_category() {
        $query = "SELECT * from tbl_category";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            return $result;
        }
    }

    public function delete_category($delete_cat) {
        $id = $delete_cat['id'];
        echo $query = "DELETE FROM tbl_category WHERE ID='$id' ";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            return $result;
        }
    }

    public function category_select() {
        $query = "SELECT * from tbl_category";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            return $result;
        }
    }

    public function doctor_store($data, $file) {
        $temp_flie = $file['image']['tmp_name'];
        $my_file = $file['image']['name'];
        $type = $file['image']['type'];
        $size = $file['image']['size'];
        if ($size > 500 * 1024) {
            $msg = "<div class='alert alert-error'>Too large image</div>";
            return $msg;
        } else {
            if (($type == 'image/jpg') || ($type == 'image/jpeg') || ($type == 'image/png')) {
                copy($temp_flie, 'image/' . $my_file) or die("image error");
            } else {
                $msg = "<div class='alert alert-danger'>your picture not connect format!!! you must be jpg/jpeg/png</div>";
                return $msg;
            }
        }
        $query = "INSERT INTO tbl_doctor (name,category,number,address,education,description,image) VALUES('$data[name]','$data[category]','$data[number]','$data[address]','$data[education]','$data[description]','$my_file')";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            $msg = "<div class ='alert alert-success'>your Insert SuccessFully</div>";
            return $msg;
        } else {
            $msg = "<div class ='alert alert-danger'>sorry!! your insert not successfully</div> ";
            return $msg;
        }
    }

    public function select_doctor() {
        $query = "SELECT  tbl_doctor.name,tbl_doctor.id, tbl_doctor.number, tbl_doctor.address, tbl_doctor.education, tbl_doctor.description, tbl_doctor.image, tbl_category.category_name FROM tbl_doctor LEFT JOIN tbl_category ON tbl_doctor.category=tbl_category.id";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            return $result;
        }
    }

    public function delete_doctor($delete_doc) {
        $id = $delete_doc['id'];
        $query = "DELETE FROM tbl_doctor WHERE id='$id' ";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            return $result;
        }
    }

    public function doctore_edit($id) {
        $id = $id['id'];
        $query = "SELECT * FROM tbl_doctor where id='$id'";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            return $result;
        }
    }

    public function change_doctor_store($data, $file) {
        $id = $data['id'];
        $query1 = "UPDATE tbl_doctor SET name='$data[name]',category='$data[category]',address='$data[address]',number='$data[number]',education='$data[education]',description='$data[description]' WHERE id='$id' ";
        $result = mysqli_query($this->connect, $query1);
        if ($result) {
            $msg = "<div class=' alert alert-success' ><b>Success!!</b>Your Edit Successfully </div>";
            $_SESSION['msg'] = $msg;

            if (isset($file['image']) == TRUE) {
//            print_r($file);
//            exit();
                $temp_flie = $file['image']['tmp_name'];
                $my_file = $file['image']['name'];
                $type = $file['image']['type'];
                $size = $file['image']['size'];
                if ($size > 500 * 1024) {
                    $msg = "<div class='alert alert-error'>Too large image</div>";
                    return $msg;
                } else {
                    if (($type == 'image/jpg') || ($type == 'image/jpeg') || ($type == 'image/png')) {
                        copy($temp_flie, 'image/' . $my_file) or die("image error");
                    } else {
                        $msg = "<div class='alert alert-danger'>your picture not connect format!!! you must be jpg/jpeg/png</div>";
                        return $msg;
                    }
                }
                $query = "UPDATE tbl_doctor SET image='$my_file' where id='$id'";
                $result1 = mysqli_query($this->connect, $query);
                if ($result1) {

                    $msg = "<div class=' alert alert-success' ><b>Success!!</b>Your Edit Successfully </div>";
                    $_SESSION['msg'] = $msg;
                    header("location: view_doctor.php");
                } else {
                    $msg = "<div class='alert alert-error'>sorry image problem</div>";
                    return $msg;
                }
            }


            $msg = "<div class=' alert alert-success' ><b>Success!!</b>Your Edit Successfully </div>";
            $_SESSION['msg'] = $msg;
            header("location: view_doctor.php");
        }

        if (isset($file['image']) == TRUE) {
            print_r($file);
            exit();
            $temp_flie = $file['image']['tmp_name'];
            $my_file = $file['image']['name'];
            $type = $file['image']['type'];
            $size = $file['image']['size'];
            if ($size > 500 * 1024) {
                $msg = "<div class='alert alert-error'>Too large image</div>";
                return $msg;
            } else {
                if (($type == 'image/jpg') || ($type == 'image/jpeg') || ($type == 'image/png')) {
                    copy($temp_flie, 'image/' . $my_file) or die("image error");
                } else {
                    $msg = "<div class='alert alert-danger'>your picture not connect format!!! you must be jpg/jpeg/png</div>";
                    return $msg;
                }
            }
            $query = "UPDATE tbl_doctor SET image='$my_file' where id='$id'";
            $result = mysqli_query($this->connect, $query);
            if ($result) {

                $msg = "<div class=' alert alert-success' ><b>Success!!</b>Your Edit Successfully </div>";
                $_SESSION['msg'] = $msg;
                header("location: view_doctor.php");
            }
        } else {
            if ($result1) {
                $msg = "<div class=' alert alert-success' ><b>Success!!</b>Your Edit Successfully </div>";
                $_SESSION['msg'] = $msg;
                header("location: view_doctor.php");
            }
        }
    }

    public function slider_store($data, $file) {
        $temp_flie = $file['slider']['tmp_name'];
        $my_file = $file['slider']['name'];
        $type = $file['slider']['type'];
        $size = $file['slider']['size'];
        if ($size > 1000 * 1024) {
            $msg = "<div class='alert alert-danger'>Too large image</div>";
            return $msg;
        } else {
            if (($type == 'image/jpg') || ($type == 'image/jpeg') || ($type == 'image/png')) {
                copy($temp_flie, 'image/' . $my_file) or die("image error");
            } else {
                $msg = "<div class='alert alert-danger'>your picture not connect format!!! you must be jpg/jpeg/png</div>";
                return $msg;
            }
        }
        $query = "INSERT INTO tbl_slider (description,slider) VALUES('$data[description]','$my_file')";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            $msg = "<div class ='alert alert-success'>your Insert SuccessFully</div>";
            return $msg;
        } else {
            $msg = "<div class ='alert alert-danger'>sorry!! your insert not successfully</div> ";
            return $msg;
        }
    }

    public function photo_sotre($data, $file) {
        $temp_flie = $file['photo']['tmp_name'];
        $my_file = $file['photo']['name'];
        $type = $file['photo']['type'];
        $size = $file['photo']['size'];
        if ($size > 500 * 1024) {
            $msg = "<div class='alert alert-danger'>Too large image</div>";
            return $msg;
        } else {
            if (($type == 'image/jpg') || ($type == 'image/jpeg') || ($type == 'image/png')) {
                copy($temp_flie, 'photo/' . $my_file) or die("image error");
            } else {
                $msg = "<div class='alert alert-danger'>your picture not connect format!!! you must be jpg/jpeg/png</div>";
                return $msg;
            }
        }
        $query = "INSERT INTO tbl_image (description,photo) VALUES('$data[description]','$my_file')";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            $msg = "<div class ='alert alert-success'>your Insert SuccessFully</div>";
            return $msg;
        } else {
            $msg = "<div class ='alert alert-danger'>sorry!! your insert not successfully</div> ";
            return $msg;
        }
    }

    public function footer_store($data) {
        $query = "INSERT INTO tbl_footer (footer_name) VALUES('$data[footer_name]' )";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            $msg = "<div class ='alert alert-success'>your Insert SuccessFully</div>";
            return $msg;
        }
    }

    public function serial_store($data) {
        $query = "INSERT INTO tbl_serial (name,old,number,category,doctor_name,address) VALUES('$data[name]','$data[old]','$data[number]','$data[category]','$data[doctor_name]','$data[address]')";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            $msg = "<div class ='alert alert-warning'><strong>your Serial has ben pending.. please 1 hour wait next information</strong></div>";
            return $msg;
        }
    }

    public function view_serial() {
        $query = " SELECT tbl_serial.*, tbl_category.category_name FROM tbl_serial left join tbl_category ON tbl_serial.category=tbl_category.id ORDER BY id DESC";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            return $result;
        }
    }

    public function edit_serial($data) {
        $id = $data['id'];
        $query = "SELECT * FROM tbl_serial WHERE id='$id' ";
        $result = mysqli_query($this->connect, $query);
        if ($result) {

            return $result;
        }
    }

    public function delete_serial($data) {
        $id = $data['id'];
        $query = "DELETE FROM tbl_serial WHERE id='$id' ";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            return $result;
        }
    }

    public function serial_update($data) {
        $id = $data['id'];
        $query1 = "UPDATE tbl_serial SET your_time='$data[your_time]',your_date='$data[your_date]',status='$data[status]' WHERE id='$id' ";
        $result = mysqli_query($this->connect, $query1);
        if ($result) {
            $msg = "<div class ='alert alert-success'>your Update SuccessFully</div>";
            $_SESSION['msg'] = $msg;
            header("location: serial_admin.php");
        }
    }

    public function contact_store($data) {
        $query = "INSERT INTO tbl_contact (address,number1,number2,email) VALUES('$data[address]','$data[number1]','$data[number2]','$data[email]')";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            $msg = "<div class ='alert alert-success'>your Insert SuccessFully</div>";
            return $msg;
        }
    }

    public function select_contact() {
        $query = "SELECT * from tbl_contact ORDER BY id DESC";
        $result = mysqli_query($this->connect, $query);
        if ($result) {
            return $result;
        }
    }

    public function edit_contant($data) {
        $id = $data['id'];
        $query = "SELECT * FROM tbl_contact WHERE id='$id' ";
        $result = mysqli_query($this->connect, $query);
        if ($result) {

            return $result;
        }
    }

    public function update_contact($data) {
        $id = $data['id'];
        $query1 = "UPDATE tbl_contact SET address='$data[address]',number1='$data[number1]',number2='$data[number2]',email='$data[email]' WHERE id='$id' ";
        $result = mysqli_query($this->connect, $query1);
        if ($result) {
            $msg = "<div class=' alert alert-success' ><b>Success!!</b>Your Edit Successfully </div>";
            $_SESSION['msg'] = $msg;
            header("location: view_contact.php");
        }
    }

    public function logout_admin() {
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header("location: index.php");
    }

    public function logout() {
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        header("location: ../index.php");
    }

}
