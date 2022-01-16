<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
<?php get_template_part('nav-header'); ?>


  <section class="page-practice">
    <form id="form" class="form" action="#">
    <p>弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。</p>
    <div class="block"></div>
    <div class="block"></div>
    <p>
      <label for="company">会社名</label><br>
      <input type="text" name="company" id="company" placeholder="Engress">
    </p>
    <p>
      <label for="name">氏名</label><br>
      <input type="text" name="name" id="name" placeholder="田中　太郎">
    </p>
    <p>
      <label for="email">メールアドレス</label><br>
      <input type="email" name="email" id="email" placeholder="example@example.com">
    </p>
    <p>
      <label for="tel">電話番号</label><br>
      <input type="tel" name="tel" id="tel" placeholder="01-2345-6789">
    </p>
    <p>お問い合わせの種類を選択してください（資料請求の方は資料請求を選択ください）</p><br>
    <div class="block"></div>
    <div class="radio">           
      <label for="radio-01"><input type="radio" name="radio" class="radio-input" id="radio-01"><span></span>商談のご相談</label><br>
      <label for="radio-02"><input type="radio" name="radio" class="radio-input" id="radio-02"><span></span>サービスに関するお問い合わせ</label><br>
      <label for="radio-03"><input type="radio" name="radio" class="radio-input" id="radio-03"><span></span>資料請求</label><br>
      <label for="radio-04"><input type="radio" name="radio" class="radio-input" id="radio-04"><span></span>その他</label>
    </div>
    <div class="block"></div>
    <label for="q">お問い合わせ内容</label><br>
    <textarea name="q" id="q" placeholder="入力して下さい"></textarea>
    <div class="block"></div>
    <div class="checkbox">
      <p><a href="">プライバシーポリシー</a>に同意の上、送信ください。</p>
      <input type="checkbox" id="01-A" name="checkbox01" checked="checked">
      

      <div class="block"></div>
    <p class="form-button">
      <input type="submit" class="btn btn--form" name="send" value="送信する">
    </p><!--チェックボックス01-->




  </div>
  </form>
  </section>

 
<?php get_template_part('parts-contact'); ?>
<?php get_template_part('nav-footer'); ?>
<?php get_footer(); ?>
</body>
</html>


