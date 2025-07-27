<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];       // 회사명+이름+직책
    $phone = $_POST['phone'];     // 연락처
    $subject = $_POST['subject']; // 선택된 항목

    $to = "parkboseung0315@gmail.com";  // ← 여기에 받을 이메일 주소 입력
    $subject_line = "AMF 웹사이트 문의 요청";

    $message = "
[AMF 문의 요청]

회사명 및 담당자: $name
연락처: $phone
문의 내용: $subject
";

    $headers = "From: contact@yourdomain.com"; // 도메인 맞춰야 메일 전송됨

    if (mail($to, $subject_line, $message, $headers)) {
        echo "문의가 성공적으로 전송되었습니다.";
    } else {
        echo "메일 전송에 실패했습니다.";
    }
}
?>
