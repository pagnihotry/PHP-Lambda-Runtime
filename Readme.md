# AWS Lambda Runtime sample - PHP


## Overview

This repo contains an implementation of PHP runtime layer with AWS Lambda.

Files:
1. `runtime/php` - Statically compiled PHP 7.2.11 on alinux 2017.03
2. `runtime/bootstrap` - This is a Bash script. This initizlizes and starts the PHP runtime
3. `runtime/runtime.php` - This contains the interations with AWS runtime API and the main logic to execute the function handler
4. `function/Function.php` - Sample lambda function

## Handler

This runtime expects the function handler in AWS Lambda configuration in the form `filename.handler`. This means that if you configure AWS lambda's handler field as `filename.handler` the runtime layer will look for a file `fielname.php` in your function code and execute the function `handler` passing in the event payload as the fisrt argument. Refer to file `function/Function.php` in this repositiory for example.

# Configuration

To use this runtime:
1. Create a Lambda function from scratch. 
2. Select custom runtime
3. Zip the files bootstrap, static PHP binary and runtime.php
4. Create a layer with the zip file created in above step
5. Configure the lambda function to have this layer
6. Define the handler in lambda function `function.handler`
7. Create a file `function.php` with a function called `handler($eventData)`, this function will be called when lambda is invoked.
