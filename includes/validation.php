<?php

/**
 * takes a parameter, strips any white spaces, strips \\'s and //'s, and converts any HTML to it's ASCII code.
 * is used on its own, but also acts as a helper function
 * @param $data
 * @return string
 */
function prep_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function validNames($data) {
	if (empty($data)) {
		return false;
	} else {
		return preg_match("/^[a-zA-z-' ]*$/", prep_input($data));
	}
}

function validText($data) {
	if (empty($data)) {
		return true;
	} else {
		return preg_match("/^[0-9a-zA-z-' ]*$/" , prep_input($data));
	}
}

function validEmail($data) {
	if (empty($data)) {
		return true;
	} else {
		return filter_var(prep_input($data), FILTER_VALIDATE_EMAIL);
	}
}

function validPhone($data) {
	if (empty($data)) {
		return true;
	} else {
		return (preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $data) || preg_match('/^[0-9]{10}+$/', $data));
	}
}

function validZip($data) {
	if (empty($data)) {
		return false;
	} else {
		$validZips = ['placeholder', '98030', '98031', '98032', '98042', '98058'];
		return array_search(prep_input($data), $validZips);
	}
}

function validServices($data) {
	if (empty($data)) {
		return false;
	} else {
		$validServices = ['placeholder', 'utilities', 'rent', 'gas', 'household', 'wadl', 'food', 'other'];
		return array_search(prep_input($data), $validServices);
	}
}