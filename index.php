<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>パスコード認証ページ</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 50px;
    }
    input, button {
      padding: 10px;
      margin: 10px;
      font-size: 16px;
    }
  </style>
</head>
<body>
  <h1>動画閲覧用パスコード入力</h1>
  <p>指定されたパスコードを入力してください。</p>
  <input type="text" id="passcode" placeholder="パスコードを入力">
  <button onclick="checkPasscode()">送信</button>

  <script>
    function checkPasscode() {
      const passcode = document.getElementById("passcode").value;

      // パスコードに応じたURLリスト
      const urlMap = {
        "G1apple123": "https://drive.google.com/your-folder-link-group1",
        "G2banana456": "https://drive.google.com/your-folder-link-group2",
        "G3cherry789": "https://drive.google.com/your-folder-link-group3"
      };

      if (urlMap[passcode]) {
        // 該当するURLにリダイレクト
        window.location.href = urlMap[passcode];
      } else {
        alert("パスコードが間違っています。もう一度入力してください。");
      }
    }
  </script>
</body>
</html>
