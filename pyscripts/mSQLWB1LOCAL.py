import os
stream = os.popen('echo \'^]\' | telnet 192.168.1.203 3306;')
output = stream.read()
stream.close()
if "Connected" in output:
    print("mSQLWB1LOCAL SUCCESS")
else: 
    print("mSQLWB1LOCAL FAIL")


