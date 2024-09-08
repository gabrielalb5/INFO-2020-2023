#include <stdio.h>
int main(){
	int dia, mes, ano;
	
	printf("Digite o dia: ");	scanf("%d",&dia);
	printf("Digite o mês: ");	scanf("%d",&mes);
	printf("Digite o ano: ");	scanf("%d",&ano);
	
	if(mes==1)
		printf("dia %d de janeiro de %d", dia, ano);
	else
		if(mes==2)
			printf("dia %d de fevereiro de %d", dia, ano);
		else
			if(mes==3)
				printf("dia %d de março de %d", dia, ano);
			else
				if(mes==4)
					printf("dia %d de abril de %d", dia, ano);
				else
					if(mes==5)
						printf("dia %d de maio de %d", dia, ano);
					else
						if(mes==6)
							printf("dia %d de junho de %d", dia, ano);
						else
							if(mes==7)
								printf("dia %d de julho de %d", dia, ano);
							else
								if(mes==8)
									printf("dia %d de agosto de %d", dia, ano);
								else
									if(mes==9)
										printf("dia %d de setembro de %d", dia, ano);
									else
										if(mes==10)
											printf("dia %d de outubro de %d", dia, ano);
										else
											if(mes==11)
												printf("dia %d de novembro de %d", dia, ano);
											else
												if(mes==12)
													printf("dia %d de dezembro de %d", dia, ano);
													
}
