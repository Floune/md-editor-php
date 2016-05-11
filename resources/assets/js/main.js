var $ = require('jquery');
var React = require('react');
var ReactDOM = require('react-dom');
var marked = require('marked');
let intervalID;


//affiche l'éditeur
var editor = CodeMirror.fromTextArea(document.getElementById('textmd'), {
	lineNumbers: true,
	matchBrackets: true,
	mode:  "markdown",
	theme: "foo bar"
});

//fonction appelée au début 
function init(){
	again();
}

//refresh
function again() {
	setInterval(updateUI, 500);
}

//affiche le live preview
function  updateUI() {
	let affiche = editor.getValue();
	document.getElementById('hello').innerHTML = marked(affiche);
}


init();








