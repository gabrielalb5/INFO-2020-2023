#include <stdio.h>
int main(){

	int opcao;
	float n1, n2;
	
	printf("\t=== // MENU // ===\n");
	printf("\t[1] Somar numeros.\n");
	printf("\t[2] Subtrair 2 numeros.\n");
	printf("\t[3] Multiplicar numeros.\n");
	printf("\t[4] Dividir 2 numeros.\n");
	
	printf("\n");
	printf("Digite a opcao de calculo [1 a 4]: ");
	scanf("%d",&opcao);
	printf("\nDigite o valor do primeiro numero: ");
	scanf("%f",&n1);
	printf("\nDigite o valor do segundo numero: ");
	scanf("%f",&n2);
	
	switch(opcao)
	{
		case 1: printf("\nVoce quer somar:\n2 numeros [2],\n 3 numeros [3] ou\n 4 numeros [4]? ");
				scanf("%d",&opcao);
				
				if(opcao==2){
					printf("\nA soma dos dois valores e: %.2f", n1+n2);
				}else if(opcao==3){
					float n3;
					printf("\nDigite o valor do terceiro numero: ");
					scanf("%f",&n3);
					printf("\nA soma dos tres valores e: %.2f", n1+n2+n3);
				}else if(opcao==4){
					float n3, n4;
					printf("\nDigite o valor do terceiro numero: ");
					scanf("%f",&n3);
					printf("\nDigite o valor do quarto numero: ");
					scanf("%f",&n4);
					printf("\nA soma dos tres valores e: %.2f", n1+n2+n3+n4);
				}else{
					printf("Opcao invalida.");
				}
				break;
				
		case 2: printf("\nA diferenca dos dois valores e: %.2f", n1-n2);
				break;
				
		case 3: printf("\nVoce quer multiplicar:\n2 numeros [2],\n 3 numeros [3] ou\n 4 numeros [4]? ");
				scanf("%d",&opcao);
				
				if(opcao==2){
					printf("\nA multiplicacao dos dois valores e: %.2f", n1*n2);
				}else if(opcao==3){
					float n3;
					printf("\nDigite o valor do terceiro numero: ");
					scanf("%f",&n3);
					printf("\nA multiplicacao dos tres valores e: %.2f", n1*n2*n3);
				}else if(opcao==4){
					float n3, n4;
					printf("\nDigite o valor do terceiro numero: ");
					scanf("%f",&n3);
					printf("\nDigite o valor do quarto numero: ");
					scanf("%f",&n4);
					printf("\nA multiplicacao dos tres valores e: %.2f", n1*n2*n3*n4);
				}else{
					printf("Opcao invalida.");
				}
				break;
				
		case 4: printf("\nA divisao dos dois valores e: %.2f", n1/n2);
				break;
				
		default: printf("Opcao invalida.");
	}
	
	getch();
	return 0;
}
