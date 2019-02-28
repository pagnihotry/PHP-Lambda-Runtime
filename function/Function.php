<?php

/**
 * PHP lambda function handler
 */

function handler($eventData)
{
	//this runtime prints stdout and the handler return value
	
	return "hello";
}


/**
 * PHP lambda function handler with exception
 * This handler illustrates throwing a custom exception
 * which is recorded as an error on lambda
 */

function exceptionHandler($eventData)
{
	//print to stdout 
	echo "invoking exceptionHandler";

	//throw a custom exception
	throw new CustomException("Error Processing Request", 1);
	
	//this is never reached
	return "hello Exception";
}

//Custom Excpetion to illustrate error type reporting in Lambda
class CustomException extends Exception {

}