<!DOCTYPE html>
<title>会員限定ページ</title>
<h1>ようこそ,<?=h($_SESSION['username'])?>さん</h1>
<a href="/logout.php?token=<?=h(generate_token())?>">ログアウト</a>