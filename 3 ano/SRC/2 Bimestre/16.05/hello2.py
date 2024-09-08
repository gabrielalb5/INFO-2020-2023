import subprocess as sp

output = sp.check_output(['cat','userpass'])
output = output.decode('utf-8')
output = output.split('\n')

for a in output:
  a, b = a.split(',')
  command = 'user: ' + a + ' | password: ' + b
  print(command)
