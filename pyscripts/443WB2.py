import os
stream = os.popen('echo \'^]\' | telnet 157.245.89.176 443;')
output = stream.read()
stream.close()
if "Connected" in output:
    print("443WB2 SUCCESS")
else: 
    print("443WB2 FAIL")


