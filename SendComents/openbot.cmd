@echo off
set USD=%1 
set numfoll=%2
set osca=%3
echo python3 pycommts.py -u %USD% -f %numfoll% %osca%> ddd.cmd
echo exit >> ddd.cmd
start ddd.cmd
timeout /t 30
echo Sended %numfoll% Comments to %USD% a %osca% profile!