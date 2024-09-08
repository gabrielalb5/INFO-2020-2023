import subprocess as sp

#sp.run(['ls','-la']) 

#sp.run(['cat','jojo'])

output = sp.check_output(['cat','jojo'])
output = output.decode('utf-8')
output = output.split('\n')
print(output)

num = 1
for a in output:
  print(num,'. ',a)
  num = num + 1

number1 = input('Digite o primeiro número: ')
number2 = input('Digite o segundo número: ')

number3 = int(number1)+int(number2)
print('Resultado:',number3)
