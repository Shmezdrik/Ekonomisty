/*function RedirectFunction() {
	var x = $('#tableselect option:selected').text();
		switch(x){
		case "Сведения о фонде заработной платы2": include("/tables/another.js");
		break;
		case "Сведения о фонде заработной платы1": include("/tables/svedofandzarplat.js");
		break;
		case "Сведения о фонде заработной платы3": include("/tables/svedofandzarplat.js");
	}
}
function include(url) {
        var script = document.createElement('script');
        script.src = url;
        document.getElementsByTagName('head')[0].appendChild(script);
    }

