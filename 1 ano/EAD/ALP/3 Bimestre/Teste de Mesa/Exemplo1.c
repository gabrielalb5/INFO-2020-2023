#include<stdio.h>
int main()
{
	int op, i=0, j=0;

	do{
		printf("\nMenu\n");
		printf("1) Mostra1\n");
		printf("2) Mostra2\n");
		printf("3) Sair\n");
		printf("Digite a opcao: ");
		scanf("%d",&op);
		
		switch(op){
			case 1:	for(i=1;i<=10;i++)
					{
						for(j=1;j<=i;j++){
						printf("*");
						}
					printf("\n");
					}
					break;
			case 2: for(i=1;i<=3;i++)
					{
						for(j=1;j<=i;j++){
						printf("*");
						}
					printf("\n");
					}
					for(i=i-1;i>=1;i--){
						for(j=1;j<=i;j++){
						printf("*");
						}
					printf("\n");
					}
					
					break;
			case 3: printf("\nFim do programa!");
					break;
			default: 
					printf("Opcao invalida! Tente novamente!");
		}//fim-switch
		getch();
	}while(op!=3);//fim-while
	getch();
	return 0;
}//fim-main
