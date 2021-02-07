import os
stream = os.popen('echo \'^]\' | telnet 108.31.160.132 443;')
output = stream.read()
stream.close()
if "Connected" in output:
    print("443WB1 SUCCESS")
else: 
    print("443WB1 FAIL")


