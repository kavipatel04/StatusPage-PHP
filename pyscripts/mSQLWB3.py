import os
stream = os.popen('echo \'^]\' | telnet 104.248.1.137 3306;')
output = stream.read()
stream.close()
if "Connected" in output:
    print("mSQLWB3 SUCCESS")
else: 
    print("mSQLWB3 FAIL")


