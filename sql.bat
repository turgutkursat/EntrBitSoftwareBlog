@echo off
cls
echo "EntrBit Software"
echo "YEDEK ALINIYOR..."
"C:\wamp64\bin\mysql\mysql5.7.26\bin\mysqldump.exe" --no-defaults --user='root' --password= -h localhost software > C:\wamp64\www\software\sql\%date:~-10,2%"-"%date:~-7,2%"-"%date:~-4,4%.sql