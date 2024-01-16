<html>

<head>
	<meta charset="utf-8">
	<title>アンケートPOST</title>
</head>

<body>
	<div style="height: 30px"></div>
	<form action="write_questionnaire.php" method="post" style="margin-left: 30px;">
		<table>
			<tr>
				<td>お名前: </td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>EMAIL: </td>
				<td><input type="text" name="mail"></td>
			</tr>
			<tr>
				<td>性別: </td>
				<td><select size="1" name="sex">
						<option>ー</option>
						<option>男性</option>
						<option>女性</option>
					</select></td>
			</tr>
			<tr>
				<td>年齢: </td>
				<td><select size="1" name="age">
						<option>ー</option>
						<option>10代</option>
						<option>20代</option>
						<option>30代</option>
						<option>40代</option>
						<option>それ以外</option>
					</select></td>
			</tr>
			<tr>
				<td>猫派？犬派？: </td>
				<td><select size="1" name="dog">
						<option>犬</option>
						<option>猫</option>
					</select></td>
			<tr>
				<td>在宅派？出社派？: </td>
				<td><select size="1" name="zaitaku">
						<option>在宅</option>
						<option>出社</option>
					</select></td>
			<tr>
				<td>MILへの意気込み: </td>
				<td><input type="text" name="mil"></td>
			</tr>
		</table>

		<div style="height: 10px"></div>
		<input type="submit" value="送信">
		<div style="height: 30px"></div>
	</form>
	<ul>
		<li><a href="index.php">index.php</a></li>
	</ul>
</body>

</html>