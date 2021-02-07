import os
stream = os.popen('telnet 108.31.160.132 3306')
output = stream.read()
if "Connected" in output:
    print("mSQLWB1 SUCCESS")
else: 
    print("mSQLWB1 FAIL")


