frase = 'Hello World!'
print(type(frase))
print(frase)

###lista
my_list = [1, 2, 3, 'blablabla', 4.5]
print(type(my_list))
print(my_list)
for item in my_list:
  print(item)
else:
  print('Terminou a lista, Zé!')

###dicionario
my_dict = dict()
my_dict['Lara'] = 'Linda'
my_dict['Eduardo'] = 'Maluco'
for item in my_dict:
  print(item, '/', my_dict[item])

###print letra por letra
frase = 'Fomos acampar'
for i in frase:
  print(i)

###printing ranges
for i in range(10):
  print(i)
for i in range(1,10):
  print(i)

###exemplo de while
valor_1 = int(input('Digite o primeiro valor: '))
valor_2 = int(input('Digite o segundo valor: '))
while valor_1 < valor_2:
  print('Somando +1')
  valor_1 = valor_1 + 1
else:
  print('Valores são iguais ou segundo menor que primeiro')
print('Valor final: ', valor_1)

###if else maior
valor_1 = int(input('Digite o primeiro valor: '))
valor_2 = int(input('Digite o segundo valor: '))
if valor_1 > valor_2:
  print('Maior:', valor_1)
else:
  print('Maior:', valor_2)
