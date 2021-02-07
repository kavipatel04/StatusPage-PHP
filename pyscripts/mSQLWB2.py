import os
stream = os.popen('echo \'^]\' | telnet 157.245.89.176 3306;')
output = stream.read()
stream.close()
if "Connected" in output:
    print("mSQLWB2 SUCCESS")
else: 
    print("mSQLWB2 FAIL")


