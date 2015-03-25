<!DOCTYPE html>
<html>
<head>
<title>Notes</title>
</head>
<body>
<?php include '../header.php'; ?>
<div class="title">Create a note</div>
<div class="explanation">Enter a new note and hit submit.</div>
<div class="noteForm">
	<form method="get" action="formProcessor.php">
		<div style="display: table;">
			<div style="display: table-row;">
				<div style="display: table-cell;">
					<label for="subject">Subject: </label>
				</div>
				<div style="display: table-cell;">
					<input required="required" type="text" id="subject" name="subject" />
				</div>
			</div>
			<div style="display: table-row;">
				<div style="display: table-cell;">
					<label for="date">Date: </label>
				</div>
				<div style="display: table-cell;">
					<input type="date" id="date" name="date" />
				</div>
			</div>
			<div style="display: table-row;">
				<div style="display: table-cell;">
					<label for="category">Category: </label>
				</div>
				<div style="display: table-cell;">
					<select name="category" id="category">
						<option value="work">work</option>
						<option value="todo">to do</option>
						<option value="groceries">groceries</option>
						<option value="procrastinate">procrastinate</option>
					</select>
				</div>
			</div>
			<div style="display: table-row;">
				<div style="display: table-cell;">
					<label for="privacy">Privacy: </label>
				</div>
				<div style="display: table-cell;">
					<fieldset>
						<input name="privacy" type="radio" value="Private">Private</input>
						<input name="privacy" checked type="radio" value="Public">Public</input>
					</fieldset>
				</div>
			</div>

			<div style="display: table-row;">
				<div style="display: table-cell;">
					<label for="note">Your Note:</label>
				</div>
				<div style="display: table-cell;">
					<textarea id="note" name="note" rows="10" col="100"></textarea>
				</div>
			</div>

			<div style="display: table-row;">
				<div style="display: table-cell;"></div>
				<div style="display: table-cell;">
					<input type="submit" value="Save" />
				</div>
			</div>

		</div>
	</form>
</div>
</body>
</html>










