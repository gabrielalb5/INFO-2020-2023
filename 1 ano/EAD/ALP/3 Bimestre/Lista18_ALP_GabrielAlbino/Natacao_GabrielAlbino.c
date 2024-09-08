#include<stdio.h>
#include<locale.h>
int main(){
	
	setlocale(LC_ALL,"Portuguese");
	int i, id, ci1=0, ci2=0, cj=0;
	
	for(i=0;i<20;i++){
		do{
			printf("Digite a idade da criança: ");
			scanf("%d",&id);
			if(id<3 || id>15){
				printf("Idade inválida. Tente novamente"\n"")
			}
		}while(id<3 || id>15);
		if(id<=5){
			ci1++;
		}
		else if(id<=9){
			ci2++;
		}
		else{
			cj++;
		}
	}
	
	printf("\nQuantidade de participantes");
	printf("\nInfantil-1 (3 a 5 anos): %d", ci1);
	printf("\nInfantil-2 (6 a 9 anos): %d", ci2);
	printf("\nJuvenil (10 a 15 anos): %d", cj);
	
	getch();
	return 0;
}
