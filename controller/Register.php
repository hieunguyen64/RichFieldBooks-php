<?php
class Register
{
	function __construct()
	{
		if (!isset($_SESSION)) session_start();
		$action = getIndex('action', 'index');
		//unset($_SESSION['admin_login']);
		/*if ($action !='logout')
		{
			if ($this->isUserLogin())
			{
				header('location:index.html'); exit;
			}
			if ($this->isAdminLogin())
			{
				header('location:admin/index.php'); exit;
			}
		}*/
		$this->model = new Model_User();
		if (method_exists($this, $action))
			$this->$action();
		else {
			echo "Chua xd function {$this->action} ";
			exit;
		}
	}

	function index()
	{
		$data_cat =  $this->model->getCat();
		$data_pub = $this->model->getPub();
		$subview = 'login_index.php';
		include "View/register.php";
    }

    function doregister()
	{
		// Thiết lập charset utf8
		header('Content-Type: text/html; charset=utf-8');
		if (isset($_POST['do_register'])) {
			$user_email      = isset($_POST['user_email'])    ? ($_POST['user_email']) : '';
			$user_password   = isset($_POST['user_password']) ? md5($_POST['user_password']) : '';
			$user_name      = isset($_POST['user_name'])    ? ($_POST['user_name']) : '';
			$user_address      = isset($_POST['user_address'])    ? ($_POST['user_address']) : '';
			$user_phone      = isset($_POST['user_phone'])    ? ($_POST['user_phone']) : '';
			// Kết nối CSDL
			$conn = mysqli_connect('localhost', 'root', '', 'richfieldbooks');
			mysqli_set_charset($conn, "utf8");

			// Kiểm tra email có bị trùng hay không
			$sql = "SELECT * FROM user WHERE user_email = '$user_email'";

			// Thực thi câu truy vấn
			$result = mysqli_query($conn, $sql);

			// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
			if (mysqli_num_rows($result) > 0) {
				// Sử dụng javascript để thông báo
				echo '<script language="javascript">alert("User email already exists"); window.location="index.php";</script>';

				// Dừng chương trình
				die();
			} else {
				// Ngược lại thì thêm bình thường
				$sql = "INSERT INTO user (user_email, user_password, user_name, user_address, user_phone) VALUES ('$user_email','$user_password','$user_name', '$user_address','$user_phone')";

				if (mysqli_query($conn, $sql)) {
					echo '<script language="javascript">alert("Register successful"); window.location="login.html";</script>';
				} else {
					echo '<script language="javascript">alert("There is an error"); window.location="register.html";</script>';
				}
			}
		}
		include "View/register.php";
	}
}
