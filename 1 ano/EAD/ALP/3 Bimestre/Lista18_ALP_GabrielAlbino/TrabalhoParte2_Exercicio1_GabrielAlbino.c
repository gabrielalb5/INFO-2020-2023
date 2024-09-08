#include<stdio.h>
#include<locale.h>
int main(){
	
	setlocale(LC_ALL,"Portuguese");
	int idade, ano1=0, ano2=0, ano3=0, ano4=0, ano5=0;
	
		do{
			printf("Digite a idade da criança: ");
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
				default: printf("Idade inválida. Tente novamente.\n");
				         break;
			}
		}while(idade!=0);
	
	printf("\nQuantidade de alunos");
	printf("\n1° ano: %d crianças.", ano1);
	printf("\n2° ano: %d crianças.", ano2);
	printf("\n3° ano: %d crianças.", ano3);
	printf("\n4° ano: %d crianças.", ano4);
	printf("\n5° ano: %d crianças.", ano5);
	
	getch();
	return 0;
}
