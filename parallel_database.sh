#!/usr/bin/env bash
count=0
for arg; do
   echo "$arg $# $count"
   python3 build_database.py $count $# $arg &
   (( count++ ))
done
