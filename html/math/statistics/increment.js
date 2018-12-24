function increment($type) {
	$.post("inputhandler.php", {type: $type});
}
