<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $givenId = isset($_POST['userId']) ? $_POST['userId'] : '';
    $givenPassword = isset($_POST['userPassword']) ? $_POST['userPassword'] : '';

    $presetId = 'abcde';
    $presetPassword = '12345';

    if ($givenId === $presetId && $givenPassword === $presetPassword) {
        $resultMessage = "로그인 성공!";
        $messageColor = "green";
    } else {
        $resultMessage = "로그인 실패!";
        $messageColor = "red";
    }
}
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>사용자 로그인</title>
    <style>
        .message {
            font-size: small;
        }
    </style>
</head>
<body>
    <h2>사용자 로그인</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="userId">사용자 아이디:</label>
        <input type="text" name="userId" required><br>
        
        <label for="userPassword">사용자 비밀번호:</label>
        <input type="password" name="userPassword" required><br>
        
        <input type="submit" value="로그인">
        <?php if (isset($resultMessage)) : ?>
            <span class="message" style="color: <?php echo $messageColor; ?>;"><?php echo $resultMessage; ?></span>
        <?php endif; ?>
    </form>
</body>
</html>
