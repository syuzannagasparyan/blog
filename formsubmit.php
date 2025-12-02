 <?php
//     session_start();
//    $errors = [];
//     $first_name = trim($_POST['first_name'] ?? '');
// if ($first_name === '') {
//     $errors[] = " Անունը դատարկ է";
// } elseif (!preg_match('/^[a-zA-Zա-ֆԱ-Ֆ]+$/u', $first_name)) {
//     $errors[] =" Անունը կարող է լինել միայն տառերից";
// }
// $last_name = trim($_POST['last_name'] ?? '');
// if ($last_name === '') {
//     $errors[] =" Ազգանունը դատարկ է";
// } elseif (!preg_match('/^[a-zA-Zա-ֆԱ-Ֆ]+$/u', $last_name)) {
//    $errors[] = " Ազգանունը սխալ է";
// } 
// $email = trim($_POST["email"] ?? "");
// if ($email === "") {
//     $errors[] = " Էլ․ փոստը դատարկ է";
// } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//    $errors[] = "Էլ․ փոստի ֆորմատը սխալ է";
// } 
// $password = $_POST['password'] ?? '';
// $confirm = $_POST['confirm_password'] ?? '';
// if ($password === '' || $confirm === '') {
//     $errors[] = "Գաղտնաբառի դաշտերը դատարկ են";
// } elseif ($password !== $confirm) {
//    $errors[] = "Գաղտնաբառերը չեն համընկնում";
// } 
// $phone = trim($_POST['phone'] ?? '');
// if ($phone === '') {
//     $errors[] = "Հեռախոսահամարը դատարկ է";
// } elseif (!preg_match('/^\+374\s\d{2}\s\d{3}\s\d{3}$/', $phone)) {
//     $errors[] = "Հեռախոսահամարի ֆորմատը սխալ է";
// } 
// $birth = trim($_POST['birthdate'] ?? '');
// if ($birth === '') {
//     $errors[] = " Ծննդյան ամսաթիվը դատարկ է";
// } elseif (!strtotime($birth)) {
//     $errors[] = " Ամսաթվի ֆորմատը սխալ է";
// } else {
//     $b = new DateTime($birth);
//     $now = new DateTime();
//     $age = $now->diff($b)->y;
//     if ($age < 18) {
//         $errors[] = "Պետք է լինեք 18+";
//     } 
// }
// $username = trim($_POST['username'] ?? '');
// if ($username === '') {
//     $errors[] = "Օգտանունը դատարկ է";
// } elseif (!preg_match('/^[A-Za-z0-9_]{3,20}$/', $username)) {
//     $errors[] = "Օգտանունը պետք է լինի 3-20 նշան, տառեր/թվեր կամ underscore";
// } 
// if (!empty($errors)) {
//     $_SESSION['errors'] = $errors;
//     header("Location: index10.php");
// exit();
//  }
// $_SESSION['success'] = "Գրանցումը հաջողությամբ կատարվեց!";
// header("Location: index10.php");
// exit();
var_dump($_FILES);
session_start();
$errors = [];
if(isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['file']['tmp_name'];
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];
$maxSize = 5 * 1024 * 1024; 
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    if($fileSize > $maxSize) {
        $errors[] = "Նկարի չափը չի կարող գերազանցել 5 ՄԲ";
    } elseif(!in_array($fileType, $allowedTypes)) {
        $errors[] = "Թույլատրելի ֆորմատները՝ JPG, PNG, GIF";
    } else {
        $newFileName = uniqid() . '_' . $fileName;
        $destPath = __DIR__ . '/images/' . $newFileName;
        if(!move_uploaded_file($fileTmpPath, $destPath)) {
            $errors[] = "Նկարը չի կարող պահպանվել";
        } else {
            $_SESSION['uploaded_file'] = $newFileName; 
        }
    }
} else {
    $errors[] = "Նկարը վերբեռնված չէ կամ սխալ է";
}
if(!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header("Location: index10.php");
    exit();
}
$_SESSION['success'] = "Նկարի պահպանումը հաջողությամբ կատարվեց!";
header("Location: index10.php");
exit();
?>