#!/usr/bin/env bash
echo python3 pylike.py -u $1 -f $2 $3> ddd.sh
echo exit >> ddd.sh
bash ddd.sh
echo Sended $2 Likes to $1 a $3 profile!
