<?php
	class koneksi{
		function getKoneksi(){
			return new PDO ("mysql:host=localhost;dbname=rahmatdb;","root","");
		}
	}
?>