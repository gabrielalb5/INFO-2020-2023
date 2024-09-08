#include <stdio.h>
int main(){
	int valor, qt2, qt5, qt10, qt20, qt50;
	int s;
	printf("Digite o valor do saque: ");
	scanf("%d", &valor);
	qt50=valor/50;
	printf("Quantidade de notas de R$50: %d", qt50);
	valor=valor-(qt50*50);
	printf("\nSobrou: %d\t", valor);
	
	qt50=valor/20;
	printf("Quantidade de notas de R$20: %d", qt20);
	valor=valor-(qt20*20);
	printf("\nSobrou: %d\t", valor);
	
	qt50=valor/10;
	printf("Quantidade de notas de R$10: %d", qt10);
	valor=valor-(qt10*10);
	printf("\nSobrou: %d\t", valor);
	
	qt50=valor/5;
	printf("Quantidade de notas de R$5: %d", qt5);
	valor=valor-(qt5*5);
	printf("\nSobrou: %d\t", valor);
	
	qt50=valor/2;
	printf("Quantidade de notas de R$2: %d", qt2);
	valor=valor-(qt2*2);
	printf("\nSobrou: %d\t", valor);
	
	getch();
	return 0;
}
