<?php include_customizes('inputForm', 'top') ?>
<p>要注册新帐户，请点击或复制以下电子邮件地址链接，用您的手机邮箱发送一封电子邮件至该地址（可不输入标题及正文）。</p>
<?php include_customizes('inputForm', 'formTop') ?>
<br>
[i:106]<?php echo op_mail_to('register_sns', array(), '用手机邮箱发送邮件') ?>
<br>
<p>然后请检查您的手机邮箱的收件箱（或垃圾箱），按照系统回信所述，执行注册手续。</p>
<?php include_customizes('inputForm', 'formBottom') ?>
<?php include_customizes('inputForm', 'bottom') ?>
