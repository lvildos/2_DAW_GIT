#!/bin/bash

aws cloudformation deploy --template-file main.yml --stack-name "Tomcat" --capabilities CAPABILITY_NAMED_IAM
