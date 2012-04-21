REM ----------------------------------------------------------------
REM Set paths in this file as per your system settings
REM ----------------------------------------------------------------

@echo off

pause

set PHP_COMMAND=F:\servers\wamp\bin\php\php5.3.8\php.exe

set PHING_COMMAND=F:\servers\wamp\bin\php\php5.3.8\phing.bat

set PROPEL_GEN_HOME=..\vendor\propel\generator

set PATH=%PATH%;..\vendor\propel\generator\bin

call propel-gen.bat %1 %2 %3 %4 %5
