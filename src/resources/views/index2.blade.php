<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index2.css') }}">
</head>
<body>

    <header>
        <h1>FashionablyLate</h1>
    </header>
    
    <main>
        <h2>Contact</h2>

        <form action="#" method="POST">
            <div class="form-group">
                <label for="name">お名前 <span class="required">※</span></label>
                <div class="input-group">
                    <input type="text" id="name" name="name" placeholder="例: 山田">
                    <input type="text" id="surname" name="surname" placeholder="例: 太郎">
                </div>
            </div>

            <div class="form-group">
                <label>性別 <span class="required">※</span></label>
                <div class="radio-group">
                    <label><input type="radio" name="gender" value="male" checked> 男性</label>
                    <label><input type="radio" name="gender" value="female"> 女性</label>
                    <label><input type="radio" name="gender" value="other"> その他</label>
                </div>
            </div>

            <div class="form-group">
                <label for="email">メールアドレス <span class="required">※</span></label>
                <input type="email" id="email" name="email" placeholder="例: test@example.com">
            </div>

            <div class="form-group">
                <label>電話番号</label>
                <div class="tel-group">
                    <input type="text" name="tel1" maxlength="3" placeholder="080">
                    <span>-</span>
                    <input type="text" name="tel2" maxlength="4" placeholder="1234">
                    <span>-</span>
                    <input type="text" name="tel3" maxlength="4" placeholder="5678">
                </div>
            </div>

            <div class="form-group">
                <label for="address">住所 <span class="required">※</span></label>
                <input type="text" id="address" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
            </div>

            <div class="form-group">
                <label for="building">建物名</label>
                <input type="text" id="building" name="building" placeholder="例: 千駄ヶ谷マンション101">
            </div>

            <div class="form-group">
                <label for="inquiry-type">お問い合わせの種類 <span class="required">※</span></label>
                <select id="inquiry-type" name="inquiry-type">
                    <option value="">選択してください</option>
                    <option value="service">サービスについて</option>
                    <option value="support">サポート</option>
                    <option value="other">その他</option>
                </select>
            </div>

            <div class="form-group">
                <label for="message">お問い合わせ内容 <span class="required">※</span></label>
                <textarea id="message" name="message" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>

            <button type="submit" class="submit-button">確認画面</button>
        </form>
    </main>
</body>
</html>
