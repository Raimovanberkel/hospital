<?php

// http://localhost/Hospital/hospital/index
function index() {
	die("HospitalController -> index()");
}


// http://localhost/Hospital/hospital/test
function test()
{
	return render('home/index');
}
