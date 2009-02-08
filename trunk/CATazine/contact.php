<!-- Contact Form -->
<form action="mail.php"  enctype="multipart/form-data" method="post" style="padding-right: 5px;">
		<table cellpadding="0" cellspacing="0" style="width: 100%; text-align: right; padding: 5px;">
			<tr>
				<td class="c"><input type="text" name="name" size="25" /></td>
				<td class="c"><span dir="rtl">الاسم:</span></td>
			</tr>
			<tr>
				<td class="c"><input type="text" name="subject" size="25" /></td>
				<td class="c"><span dir="rtl">الموضوع:</span></td>
			</tr>
			<tr>
				<td class="c"><input type="text" name="email" size="25" /></td>
				<td class="c"><span dir="rtl">البريد:</span></td>
			</tr>
			<tr>
				<td class="c"><textarea name="msg" cols="35" rows="8"></textarea></td>
				<td class="c"><span dir="rtl">الرسالة:</span></td>
			</tr>
			<tr style="text-align: center;">
				<td colspan="2"><input type="submit" value="ارسال" /></td>
			</tr>
		</table>
</form>