<?php

function url($val)
{
	return $_SERVER['REQUEST_URI'] === $val;
}