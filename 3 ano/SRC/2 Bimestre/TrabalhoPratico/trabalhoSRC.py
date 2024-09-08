#Trabalho Prático SRC 2 bimestre - Ana Julia e Gabriel Albino
import subprocess as sp

output = sp.check_output(['cat','userpass'])
output = output.decode('utf-8')
output = output.split('\n')

for a in output:
    a,b = a.split(',')
    sp.run(['sudo','useradd',a,'-p',b])
