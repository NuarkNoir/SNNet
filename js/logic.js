function loadModule(module){
	$(".content").html("<b>Content is loading...</b>");
	$(".content").load("./modules/" + module + ".php");
}