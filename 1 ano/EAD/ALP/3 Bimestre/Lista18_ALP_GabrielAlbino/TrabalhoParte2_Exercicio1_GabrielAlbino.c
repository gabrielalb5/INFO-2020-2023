#include<stdio.h>
#include<locale.h>
int main(){
	
	setlocale(LC_ALL,"Portuguese");
	int idade, ano1=0, ano2=0, ano3=0, ano4=0, ano5=0;
	
		do{
			printf("Digite a idade da crian�a: ");
			scanf("%d",&idade);
			
			switch(idade){
				case 6: ano1++;
						break;
				case 7: ano2++;
						break;
				case 8: ano3++;
						break;
				case 9: ano4++;
						break;
				case 10: ano5++;
						 break;
				default: printf("Idade inv�lida. Tente novamente.\n");
				         break;
			}
		}while(idade!=0);
	
	printf("\nQuantidade de alunos");
	printf("\n1� ano: %d crian�as.", ano1);
	printf("\n2� ano: %d crian�as.", ano2);
	printf("\n3� ano: %d crian�as.", ano3);
	printf("\n4� ano: %d crian�as.", ano4);
	printf("\n5� ano: %d crian�as.", ano5);
	
	getch();
	return 0;
}
